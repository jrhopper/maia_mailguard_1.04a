<?php
    /*
     * $Id$
     *
     * MAIA MAILGUARD LICENSE v.1.0
     *
     * Copyright 2004 by Robert LeBlanc <rjl@renaissoft.com>
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
     *    if and wzdever such third-party acknowledgments normally appear.
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
    $lang['text_welcome_greeting'] = "Vítejte do Maia Mailguard!";
    $lang['text_welcome_first_time'] = "Vítejte do Maia Mailguard. Zdá se, že toto je poprvé co jste se přihlásili. Prosím, přečtěte si tuto zprávu celou a pozorně, protože vám pomůže pochopit důležitost vaší účasti v boji proti nevyžádané poště - SPAM.<P>
                                        Ze všeho nejdříve zapněte ochranu. Stačí si vybrat jednu z přednastavených úrovní níže a kliknout na \"Změnit úroveň\".  \"Vysoká\" úroveň je bezpečná a doporučená.
                                        <P>Maia Mailguard umožňuje filtrování vašeho e-mailu, a zabrání tak doručení většiny nevyžádané pošty do vaší e-mailové schránky.  Pokud se náhodou splete, netřeba ztrácet naději.
                                        Maia umístí e-mail do karantény, dostupné přes tot webové rozhraní, takže je možné danou poštu buď \"zachránit\", nebo naopak \"ohlásit\" zodpovědným osobám.  It also allows you to train the filter when a
                                        piece of spam gets through, by reporting it from your \"non-spam cache\" - a collection of recent emails that it considered to be good email.";
    $lang['text_welcome_intro'] = "<p>Zapojte se do boje proti nevyžádané poště s Maia Mailguard. Pokud je e-mail v některé z níže uvedených tabulek, můžete naučit
                                     Maia rozpoznat rozdíl mezi dobrým (non-spam) and nevyžádaným (spam) e-mailem.  Prosím, ujistěte se, že všechny e-maily  
                                    jsou rozpoznané/roztříděné správně; pokud na to nemáte čas, prosím, smažte všechny radši všechny e-maily ve webovém rozhraní Maia, než aby byly nahlášené  
                                    nesprávně.<p>
                                    Mějte na paměti, že Maia umí a hlásí e-maily potvrzené jako spam i ostatním službám a autoritám. Správným označováním e-mailů 
                                    pomáháte v boji proti nevyžádané poště.";
    $lang['text_welcome_current_level'] = "Stávající úroveň ochrany:"; 
    $lang['text_welcome_custom_level'] = "**Vlastní úroveň ochrany:<br>Pro správu použijte stránku 'Nastavení', nebo si vyberte jednu z přednastavených úrovní uvedených výše.";
    $lang['header_cache_contents'] = "Obsah Cache";
    
    $lang['text_suspected_spam_item']= "Podezření na Spam:";
    $lang['text_suspected_ham_item'] = "Nepotvrzený Non-spam:";
    $lang['text_virus_item'] =  "Vir/Malware:";
    $lang['text_banned_file_item'] =  "Zakázané soubory:";
    $lang['text_bad_header_item'] =  "Poškozené E-maily:";
    
    $lang['text_welcome_spam_blocked'] = "SPAM zablokovaný pro váš účet";
    $lang['text_welcome_virus_blocked'] = "Virů zablokovaných pro váš účet";
    $lang['text_welcome_spam_blocked_system'] = "Spam zablokovaný v rámci systému";
    $lang['text_welcome_virus_blocked_system'] = "Virů zablokovaných v rámci systému";
    $lang['button_delete_all_items'] = "Smazat všechny položky";
    $lang['button_change_protection'] = "Změnit úroveň";
    
    $lang['radio_protection'] = array(  'off' => "Vypnuto",
		 								'low' => "Nízká",
     								'medium' => "Střední",
										'high' => "Vysoká",
										'custom' => "Vlastní");
    
    $lang['banner_subtitle'] = "Vítejte";
    
    $lang['text_cache_spam'] = "Máte <b>%d</b> položek ve vaší spam cache.  <br>Klikněte <a href=\"%s\">zde</a> pro ohlášení, nebo pro záchranu zprávy, která byla omylem zablokována.";
    $lang['text_cache_virus'] = "Máte <b>%d</b> položek ve vaší virus cache.  <br>Klikněte <a href=\"%s\">zde</a> pro smazání, nebo pro záchranu zprávy, která byla omylem zablokována.";
    $lang['text_cache_banned'] = "Máte <b>%d</b> položek ve vaší banned-file cache.  <br>Klikněte <a href=\"%s\">zde</a> pro smazání, nebo pro záchranu zprávy, která byla omylem zablokována.";
    
    $lang['text_cache_header'] = "Máte <b>%d</b> položek ve vaší bad-header cache.  <br>Klikněte <a href=\"%s\">zde</a> pro smazání, nebo pro záchranu zprávy, která byla omylem zablokována.";
    $lang['text_cache_ham'] = "Máte <b>%d</b> položek ve vaší non-spam cache.  <br>Kliknutím <a href=\"%s\">zde</a> můžete pomoci trénovat filtr, nebo nahlásit zprávu která obsahuje SPAM, ale nebyla filtrem označena.";
    $lang['action_ham_cache']   = "Ohlásit/Potvrdit";
    $lang['action_spam_cache']  = "Ohlásit/Zachránit";
    $lang['action_virus_cache'] = "Smazat/Zachránit";
    $lang['action_banned_cache'] = "Smazat/Zachránit";
    $lang['action_header_cache'] = "Smazat/Zachránit";