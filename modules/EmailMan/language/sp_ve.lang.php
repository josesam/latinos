<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/**
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
/**
 * Description:  Defines Spanish latam language pack for the base application.
 * $Id: sp_ve.lang.php,v 2.1 2012/02/14 20:20:29 carlose Exp $
 * Source: SugarCRM 6.4
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array (
  'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Por favor escriba un número entero de mensajes por lote a enviar',
  'LBL_ATTACHMENT_AUDIT' => ' fue enviado. No se ha duplicado para ahorrar el espacio en disco.',
  'LBL_ID' => 'Id',
  'LBL_OLD_ID' => 'Id Anterior',
  'LBL_LIST_CAMPAIGN' => 'Campaña',
  'LBL_LIST_FORM_PROCESSED_TITLE' => 'Procesada',
  'LBL_LIST_FORM_TITLE' => 'Cola',
  'LBL_LIST_FROM_EMAIL' => 'Correo Remitente',
  'LBL_LIST_FROM_NAME' => 'Nombre Remitente',
  'LBL_LIST_IN_QUEUE' => 'En proceso',
  'LBL_LIST_RECIPIENT_EMAIL' => 'Correo Destinatario',
  'LBL_LIST_RECIPIENT_NAME' => 'Nombre Destinatario',
  'LBL_LIST_SEND_ATTEMPTS' => 'Intentos envío',
  'LBL_LIST_SEND_DATE_TIME' => 'Enviado el',
  'LBL_LIST_USER_NAME' => 'Nombre Usuario',
  'LBL_SEARCH_FORM_PROCESSED_TITLE' => 'Búsqueda Procesada',
  'LBL_SEARCH_FORM_TITLE' => 'Búsqueda Cola',
  'LBL_VIEW_PROCESSED_EMAILS' => 'Ver mensajes procesados',
  'LBL_VIEW_QUEUED_EMAILS' => 'Ver mensajes en cola',
  'LBL_RELATED_ID' => 'Id Relacionada',
  'LBL_RELATED_TYPE' => 'Itipo Relacionado',
  'LBL_MARKETING_ID' => 'Id Mercadeo',
  'LBL_LIST_MESSAGE_NAME' => 'Mensaje Mercadeo',
  'LBL_MODULE_NAME' => 'Correo Masivo',
  'LBL_MODULE_TITLE' => 'Cola de Correo Masivo',
  'LBL_NOTIFICATION_ON_DESC' 	=> 'Enviar mensajes de notificación cuando se asignan objetos.',
  'LBL_NOTIFY_FROMADDRESS' 	=> 'Dirección "De":',
  'LBL_NOTIFY_FROMNAME' 	=> 'Nombre "De":',
  'LBL_NOTIFY_ON'		=> '¿Activar notificaciones?',
  'LBL_NOTIFY_SEND_BY_DEFAULT'	=> '¿Enviar notificaciones a los usuarios nuevos?',
  'LBL_NOTIFY_TITLE'	=> 'Configuración de notificaciones por correo',
  'LBL_CONFIGURE_SETTINGS' => 'Configuración de correoE',
  'LBL_EMAILS_PER_RUN' => 'Número de mensajes por lote enviado:',
  'LBL_EMAIL_PER_RUN_REQ' => 'Número de mensajes por lote enviado:',
  'LBL_EMAIL_USER_TITLE' => 'Valores predefinidos al redactar correo',
	'LBL_EMAIL_DEFAULT_CHARSET'	=> 'Redactar correos usando este conjunto de caracteres',
	'LBL_EMAIL_DEFAULT_EDITOR'	=> 'Redactar correo usando este cliente',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'	=> 'Eliminar notas y adjuntos relacionados con correos eliminados',
	'LBL_EMAIL_GMAIL_DEFAULTS'	=> 'Usar valores por omisión para Gmail&#153;',
	'LBL_EMAIL_PER_RUN_REQ'		=> 'Número de mensajes enviados por lote:',
	'LBL_EMAIL_SMTP_SSL'		=> '¿Habilitar SMTP sobre SSL?',
	'LBL_EMAIL_USER_TITLE'		=> 'Valores por omisión para correos de usuario',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'	=> 'Configuración de correo saliente',
	'LBL_EMAILS_PER_RUN'		=> 'Número de mensajes enviados por lote:',
  'LBL_LOCATION_ONLY' => 'Ubicación',
  'LBL_LOCATION_TRACK' => 'Ubicación de archivos localizadores de campaña (ej. campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY'             => 'Mantener copias de los mensajes de campaña:',
    'LBL_CAMP_MESSAGE_COPY_DESC'        => '¿Le gustaría mantener una copia completa de <bold>TODOS</bold> los mensajes enviados durante las campañas?  <bold>La recomendación es que no lo haga</bold>.  Si selecciona No, solamente se guardarán la plantilla enviada y las variables necesarias para recrear cada mensaje individual.',
  'LBL_DEFAULT_LOCATION' => 'Por omisión',
  'LBL_EMAIL_DEFAULT_CLIENT' => 'Redactar los correos en este formato',
  'LBL_EMAIL_DEFAULT_EDITOR' => 'Redactar los correos usando este cliente',
  'LBL_CUSTOM_LOCATION' => 'Definida por Usuario',
  'LBL_OUTBOUND_EMAIL_TITLE' => 'Configuración de Correo saliente',
  'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Valor site_url en config.php',
  'TXT_REMOVE_ME' => 'Para excluírse de esta lista de correo',
  'TXT_REMOVE_ME_ALT' => 'Para excluírse de esta lista de correo',
  'TXT_REMOVE_ME_CLICK' => 'clic aquí',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'	=> 'Enviar notificación desde la cuenta del usuario que asigna',
	'LBL_SECURITY_TITLE'	=> 'Configuración de seguridad de correoE',
	'LBL_SECURITY_DESC'	=> 'Seleccione de las siguientes las que NO deberían permitirse en CorreoEntrante o mostrarse en el módulo de CorreoE.',
	'LBL_SECURITY_APPLET'	=> 'Applet tag',
	'LBL_SECURITY_BASE'	=> 'Base tag',
	'LBL_SECURITY_EMBED'	=> 'Embed tag',
	'LBL_SECURITY_FORM'	=> 'Form tag',
	'LBL_SECURITY_FRAME'	=> 'Frame tag',
	'LBL_SECURITY_FRAMESET'	=> 'Frameset tag',
	'LBL_SECURITY_IFRAME'	=> 'iFrame tag',
	'LBL_SECURITY_IMPORT'	=> 'Import tag',
	'LBL_SECURITY_LAYER'	=> 'Layer tag',
	'LBL_SECURITY_LINK'	=> 'Link tag',
	'LBL_SECURITY_OBJECT'	=> 'Object tag',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'		=> 'Seleccione la configuración mínima de seguridad para Outlook (errs on the side of correct display).',
	'LBL_SECURITY_SCRIPT'	=> 'Script tag',
	'LBL_SECURITY_STYLE'	=> 'Style tag',
	'LBL_SECURITY_TOGGLE_ALL'	=> 'Seleccionar/Limpiar todas',
	'LBL_SECURITY_XMP'		=> 'Xmp tag',
    'LBL_YES'                           => 'Si',
    'LBL_NO'                            => 'No',
    'LBL_PREPEND_TEST'                  => '[Probar]: ',
	'LBL_SEND_ATTEMPTS'		=> 'Intentos de envio',
	'LBL_OUTGOING_SECTION_HELP'     => 'Configure el servidor de correo saliente por omisión para enviar notificaciones por correo, incluyendo alertas de flujo de trabajo.',
    'LBL_ALLOW_DEFAULT_SELECTION'       => 'Permitir a los usuarios utilizar esta cuenta para el correo saliente:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'Cuando esta opción está seleccionada, todos los usuarios podrán enviar correos mediante la misma cuenta usada para enviar notificaciones y alertas del sistema.<br> Si la opción no está seleccionada, los usuarios podrán usar el servidor de correo saliente luego de definir la información para su cuenta.',
  'LBL_MAIL_SENDTYPE' => 'Agente Transferencia de Correo:',
  'LBL_MAIL_SMTPAUTH_REQ' => '¿Usar auntentificación SMTP?',
  'LBL_MAIL_SMTPPASS'	=> 'Contraseña SMTP:',
  'LBL_MAIL_SMTPPORT'	=> 'Puerto SMTP:',
  'LBL_MAIL_SMTPSERVER'	=> 'Servidor SMTP:',
  'LBL_MAIL_SMTPUSER'	=> 'Nombre usuario SMTP:',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Escoja su proveedor de correo-e',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Contraseña para su cuenta de Yahoo!',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Contraseña para su cuenta de Yahoo!',
  'LBL_GMAIL_SMTPPASS' => 'Contraseña para su cuenta de Gmail',
  'LBL_GMAIL_SMTPUSER' => 'Usuario para su cuenta de Gmail',
  'LBL_EXCHANGE_SMTPPASS' => 'Contraseña para su cuenta de Exchange',
  'LBL_EXCHANGE_SMTPUSER' => 'Usuario para su cuenta de Exchange',
  'LBL_EXCHANGE_SMTPPORT' => 'Puerto para su servidor de Exchange',
  'LBL_EXCHANGE_SMTPSERVER' => 'Su servidor de Exchange',
  'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS' => 'Preferencias para campañas por correoE',
  'LBL_EMAIL_LINK_TYPE' => 'Cliente de correo-e',
  'LBL_EMAIL_LINK_HELP' => '<b>Cliente de correoe Sugar:</b> Enviar los mensajes usando el cliente propio de la aplicación Sugar.<br><b>Cliente de correoe externo:</b> Enviar los mensajes usando un cliente diferente al de Sugar, por ejemplo Microsoft Outlook.',
    'LBL_FROM_ADDRESS_HELP'  => 'Si está seleccionada, el nombre y la dirección de correo del usuario que asigna se incluirán en el campo De del mensaje. Esta característica podría no funcionar con servidores SMTP ya que no permiten envios desde una cuenta diferente a la del servidor.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Ayuda' /*for 508 compliance fix*/,
);


?>
