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

    // Page subtitle
    $lang['banner_subtitle'] =  "Área de Quarentena";

    // Table headers
    $lang['header_spam'] =  "Possível Spam";
    $lang['header_viruses'] =  "Vírus/Malware";
    $lang['header_banned_files'] =  "Ficheiros em Anexo Banidos";
    $lang['header_bad_headers'] =  "Cabeçalhos de Email Inválidos";
    $lang['header_quarantine_contents'] =  "Conteúdo da Quarentena";

    // Text labels
    $lang['text_item'] =  "Item";
    $lang['text_items'] =  "Items";
    $lang['text_score'] =  "Pontuação";
    $lang['text_received'] =  "Recebido";
    $lang['text_from'] =  "De";
    $lang['text_to'] =  "Para";
    $lang['text_ham'] =  "Não-spam?";
    $lang['text_spam'] =  "Spam?";
    $lang['text_rescue'] =  "Não-spam!";
    $lang['text_delete'] =  "Eliminar";
    $lang['text_subject'] =  "Assunto";
    $lang['text_virus'] =  "Vírus";
    $lang['text_file_name'] =  "Nome do Ficheiro";
    $lang['text_no_subject'] =  "sem assunto";
    $lang['text_empty'] =  "A sua área de quarentena está vazia.";
    $lang['text_updated'] =  "A sua área de quarentena foi actualizada.";
    $lang['text_of'] =  "de";
    $lang['text_spam_confirmed'] =  "%d items suspeitos de spam foram confirmados";
    $lang['text_spam_rescued'] =  "%d items suspeitos de spam foram resgatados";
    $lang['text_spam_deleted'] =  "%d items suspeitos de spam foram eliminados";
    $lang['text_viruses_rescued'] =  "%d items de vírus/malware foram resgatados";
    $lang['text_viruses_deleted'] =  "%d items vírus/malware foram eliminados";
    $lang['text_attachments_rescued'] =  "%d anexos de tipo de ficheiro banido foram resgatados";
    $lang['text_attachments_deleted'] =  "%d anexos de tipo de ficheiro banido foram eliminados";
    $lang['text_headers_rescued'] =  "%d emails corrompidos foram resgatados";
    $lang['text_headers_deleted'] =  "%d emails corrompidos foram eliminados";
    $lang['text_suspected_spam_item'] =  "Item Suspeito de Spam";
    $lang['text_suspected_spam_items'] =  "Items Suspeitos de Spam";
    $lang['text_virus_item'] =  "Items de Vírus/Malware";
    $lang['text_virus_items'] =  "Items de Vírus/Malware";
    $lang['text_banned_file_item'] =  "Anexo de Tipo de Ficheiro Banido";
    $lang['text_banned_file_items'] =  "Anexos de Tipo de Ficheiro Banido";
    $lang['text_bad_header_item'] =  "Item de Email Corrompido";
    $lang['text_bad_header_items'] =  "Items de Email Corrompidos";
    $lang['text_rescue_error'] = "Não foi possível resgatar o email: ";

    // Button text
    $lang['button_confirm_spam'] =  "TODOS os Items da Presente Lista são Spam";
    $lang['button_delete_viruses'] =  "Eliminar estes Vírus";
    $lang['button_delete_attachments'] =  "Eliminar estes Ficheiros";
    $lang['button_delete_headers'] =  "Eliminar estes Emails Corruptos";
    $lang['button_confirm'] =  "Confirmar o Estado destes Items";
    $lang['button_delete_all_items'] =  "Eliminar TODOS os Items na Quarentena";

    // Link text
    $lang['link_prev'] =  "Anterior";
    $lang['link_next'] =  "Próximo";
    $lang['link_quarantine'] =  "Voltar ao Menu de Quarentena";
    $lang['link_welcome']  = "Voltar à Página de Entrada";

?>
