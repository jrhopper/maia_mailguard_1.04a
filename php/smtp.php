<?php
    /*
     * $Id: smtp.php 950 2006-02-12 20:49:19Z dmorton $
     *
     * MAIA MAILGUARD LICENSE v.1.0
     *
     * Copyright 2004 by Robert LeBlanc <rjl@renaissoft.com>
     *                   David Morton   <mortonda@dgrmm.net>
     * All rights reserved.
     *
     * PREAMBLE
     *
     * This License is designed for users of Maia Mailguard
     * ("the Software") who wish to support the Maia Mailguard project by
     * leaving "Maia Mailguard" branding information in the HTML output
     * of the pages generated by the Software, and providing links back
     * to the Maia Mailguard home page.  Users who wish to remove this
     * branding information should contact the copyright owner to obtain
     * a Rebranding License.
     *
     * DEFINITION OF TERMS
     *
     * The "Software" refers to Maia Mailguard, including all of the
     * associated PHP, Perl, and SQL scripts, documentation files, graphic
     * icons and logo images.
     *
     * GRANT OF LICENSE
     *
     * Redistribution and use in source and binary forms, with or without
     * modification, are permitted provided that the following conditions
     * are met:
     *
     * 1. Redistributions of source code must retain the above copyright
     *    notice, this list of conditions and the following disclaimer.
     *
     * 2. Redistributions in binary form must reproduce the above copyright
     *    notice, this list of conditions and the following disclaimer in the
     *    documentation and/or other materials provided with the distribution.
     *
     * 3. The end-user documentation included with the redistribution, if
     *    any, must include the following acknowledgment:
     *
     *    "This product includes software developed by Robert LeBlanc
     *    <rjl@renaissoft.com>."
     *
     *    Alternately, this acknowledgment may appear in the software itself,
     *    if and wherever such third-party acknowledgments normally appear.
     *
     * 4. At least one of the following branding conventions must be used:
     *
     *    a. The Maia Mailguard logo appears in the page-top banner of
     *       all HTML output pages in an unmodified form, and links
     *       directly to the Maia Mailguard home page; or
     *
     *    b. The "Powered by Maia Mailguard" graphic appears in the HTML
     *       output of all gateway pages that lead to this software,
     *       linking directly to the Maia Mailguard home page; or
     *
     *    c. A separate Rebranding License is obtained from the copyright
     *       owner, exempting the Licensee from 4(a) and 4(b), subject to
     *       the additional conditions laid out in that license document.
     *
     * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDER AND CONTRIBUTORS
     * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
     * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
     * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
     * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
     * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
     * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS
     * OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
     * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR
     * TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE
     * USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
     *
     */

   require_once ("core.php");
   require_once ("maia_db.php");
   require 'Net/SMTP.php';

   /*
    * unbuffered_fwrite(): Ensure that for PHP versions < 4.3.0 the
    *                      output buffer is flushed after every
    *                      fwrite() call.
    */
   function unbuffered_fwrite($handle, $output)
   {
      $rvalue = fwrite($handle, $output);
      if (phpversion() < "4.3.0") {
         fflush($handle);
      }
      return ($rvalue);
   }


   /*
    * smtp_send(): Send an e-mail (with existing headers) to an SMTP
    *              server for delivery.  Returns the server's most
    *              recent response string, prefixed by the SMTP
    *              response code.  Normal exit codes are 2xx or 3xx,
    *              while 5xx signals an error.
    */
   function smtp_send($from, $recips, $body, $ehlo="maia")
   {
		global $dbh;
		global $lang;
		
		$sth = $dbh->prepare("SELECT smtp_server, smtp_port FROM maia_config WHERE id = 0");
		$res = $sth->execute();
                if (PEAR::isError($sth)) {
                    die($sth->getMessage());
                }
		if ($row = $res->fetchrow()) {
		  $host = $row["smtp_server"];
		  $port = $row["smtp_port"];
		}
		$sth->free();
		
		$rcpt = explode(" ", $recips);

		
		/* Create a new Net_SMTP object. */
		if (! ($smtp = new Net_SMTP($host, $port, $ehlo))) {
			$smtp->disconnect();
			return ("550 " . $lang['error_connect'] . ": " . "Unable to instantiate Net_SMTP object\n");
		}
		
		/* Connect to the SMTP server. */
		if (PEAR::isError($e = $smtp->connect())) {
			$smtp->disconnect();
			 return ("550 " . $lang['error_connect'] . ": " . $e->getMessage() . "\n");
		}
		
		/* Send the 'MAIL FROM:' SMTP command. */
		if (PEAR::isError($smtp->mailFrom($from))) {
			return ("550 " . $lang['error_mail']);
		}
		
		/* Address the message to each of the recipients. */
		foreach ($rcpt as $to) {
			if (PEAR::isError($res = $smtp->rcptTo($to))) {
				$smtp->disconnect();
				return ("550 " . $lang['error_rcpt'] .": " . $res->getMessage() . "\n");
			}
		}
		
		/* Set the body of the message. */
		if (PEAR::isError($smtp->data($body))) {
			$smtp->disconnect();
			return ("550 " . $lang['error_body']);
		}
		
		$response = $smtp->getResponse();
		
		/* Disconnect from the SMTP server. */
		$smtp->disconnect();
	  
	  return join (" ", $response);  
   }
?>
