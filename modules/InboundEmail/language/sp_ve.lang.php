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
 * $Id: sp_ve.lang.php,v 1.8 2012/04/20 10:20:29 carlose Exp $
 * Source: SugarCRM 6.4.3
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array (
  'ERR_BAD_LOGIN_PASSWORD'=> 'Nombre o Contraseña incorrecto',
  'ERR_INI_ZLIB' => 'No se puede deshabilitar la compresión Zlib temporalmente. "Probar configuración" podría fallar.',
  'ERR_MAILBOX_FAIL' => 'No se pudo descargar ningún buzón.',
  'LBL_APPLY_OPTIMUMS'	=> 'Aplicar óptimos',
  'LBL_FIND_OPTIMUM_KEY' => 'f',
  'LBL_FIND_OPTIMUM_MSG' => '<br>Buscando las variables de conexión óptimas.',
  'LBL_FIND_OPTIMUM_TITLE' => 'Buscar configuración óptima',
  'LBL_FIND_SSL_WARN' => '<br>Probando SSL, puede tomar varios minutos.<br>',
  'LBL_FORCE_DESC' => 'Algunos servidores IMAP/POP3 requieren opciones especiales. Marque para forzar un argumento negativo al conectar (ej: /notls)',
  'LBL_FORCE' => 'Obligar negativo',
  'LBL_MODULE_TITLE' => 'Correo Entrante',
  'LBL_MODULE_NAME' => 'Buzón para correo de grupo',
	'LBL_BOUNCE_MODULE_NAME' => 'Buzón para manejar devoluciones',
  'LBL_BASIC' => 'Información cuenta de correo',
	'LBL_CASE_MACRO'	=> 'Macro para caso',
	'LBL_CASE_MACRO_DESC'	=> 'Definir la macro que será usada para vincular correo importado a un Caso.',
	'LBL_CASE_MACRO_DESC2'	=> 'Puede usar cualquier valor, pero debe conservar el <b>"%1"</b>.',
  'LBL_SERVER_OPTIONS' => 'Opciones Servidor de Correo',
  'LBL_NAME' => 'Nombre',
  'LBL_NO_OPTIMUMS' => 'No se encontró el óptimo. Por favor revise su configuración e intente de nuevo.',
  'LBL_STATUS' => 'Estado',
  'LBL_SERVER_URL' => 'Dirección servidor correo',
  'LBL_LOGIN' => 'Nombre de usuario',
  'LBL_PASSWORD' => 'Contraseña',
  'LBL_PASSWORD_CHECK' => 'Confirmar contraseña',
  'LBL_SERVER_TYPE' => 'Protocolo servidor correo',
  'LBL_MAILBOX' => 'Carpeta monitorizada',
	'LBL_TRASH_FOLDER'		=> 'Carpeta eliminados',
	'LBL_GET_TRASH_FOLDER'	=> 'Obtener elementos eliminados',
	'LBL_SENT_FOLDER'		=> 'Carpeta enviados',
	'LBL_GET_SENT_FOLDER'	=> 'Obtener elementos enviados',
	'LBL_SELECT'			=> 'Seleccionar',
  'LBL_MAILBOX_SSL' => 'Usar SSL',
  'LBL_MAILBOX_SSL_DESC' => 'Usar SSL al conectar. si no funciona, revise que la configuración de PHP incluya "--with-imap-ssl".',
  'LBL_MAILBOX_DEFAULT' => 'Bandeja de Entrada',
  'LBL_TLS' => 'Usar TLS',
  'LBL_TLS_DESC' => 'Usar Transport Layer Security al conectar con el servidor de correo - marque esta opción solo si su servidor de correo utiliza este protocolo.',
  'LBL_CERT' => 'Validar certificado',
  'LBL_CERT_DESC' => 'Obligar la validación del Certificado de Seguridad de su servidor de correo - no utilizar si se conecta automáticamente.',
  'LBL_MARK_READ' => 'Dejar mensajes en el servidor',
  'LBL_MARK_READ_DESC' => 'Marcar los mensajes como leídos en el servidor; no borrarlos.',
  'LBL_MARK_READ_YES' => 'Dejar correo en el servidor luego de descargar',
  'LBL_MARK_READ_NO' => 'Marcar el correo como eliminado luego de descargar',
	'LBL_MAX_AUTO_REPLIES'	=> 'Número de auto-respuestas',
	'LBL_MAX_AUTO_REPLIES_DESC'	=> 'Defina el número máximo de auto-respuestas que se envirán a una dirección de correo única en un período de 24 horas.',
	'LBL_PERSONAL_MODULE_NAME' => 'Cuenta de correo personal',
	'LBL_CREATE_CASE'      => 'Crear caso desde correo',
	'LBL_CREATE_CASE_HELP'  => 'Seleccione para crear automáticamente un caso en Sugar a partir de correo recibido.',
  'LBL_QUEUE' => 'Cola de Buzón',
	'LBL_REPLY_NAME_ADDR'	=> 'Nombre/dirección respuestas',
	'LBL_REPLY_TO_NAME'		=> 'Nombre "Responder-a"',
	'LBL_REPLY_TO_ADDR'		=> 'Dirección "Responder-a"',
	'LBL_SAME_AS_ABOVE'		=> 'Usando Nombre/dirección "De"',
	'LBL_SAVE_RAW'			=> 'Guardar original crudo',
	'LBL_SAVE_RAW_DESC_1'	=> 'seleccione "Si" para conservar el original en crudo de cada mail importado.',
	'LBL_SAVE_RAW_DESC_2'	=> 'Adjuntos grandes pueden causar fallas en bases de datos configuradas conservadora o incorrectamente.',
  'LBL_TEST_BUTTON_KEY' => 't',
  'LBL_TEST_SETTINGS' => 'Probar configuración',
  'LBL_TEST_WAIT_MESSAGE'=> 'Un momento por favor...',
  'LBL_TEST_BUTTON_TITLE' => 'Probar',
  'LBL_TEST_SUCCESSFUL'	=> 'Conexión completada exitosamente.',
  'LBL_MAILBOX_TYPE' => 'Acciones posibles',
  'LBL_AUTOREPLY' => 'Plantilla Auto-respuesta',
  'LBL_AUTOREPLY_OPTIONS' => 'Opciones Auto-respuesta',
	'LBL_AUTOREPLY_HELP'	=> 'Seleccione una respuesta automatizada para notificar a los remitentes que su respuesta ha sido recibida.',
  'LBL_CREATE_TEMPLATE' => 'Crear',
	'LBL_SUBSCRIBE_FOLDERS'	=> 'Carpetas suscritas',
  'LBL_EDIT_TEMPLATE' => 'Editar',
  'LBL_FROM_NAME' => 'Nombre "De"',
  'LBL_FROM_ADDR' => 'Dirección "De"',
    // as long as XTemplate doesn't support output escaping, transform
    // quotes to html-entities right here (bug #48913)
  'LBL_FROM_ADDR_DESC'    => "La dirección de correo especificada podría no aparecer en la sección &quot;De&quot; del mensaje, debido a restricciones del proveedor del servicio de correo. En ese caso, se usará la dirección definida en el servidor de correo saliente.",
  'LBL_WARN_IMAP_TITLE' => 'Aviso de IMAP',
  'LBL_PORT' => 'Puerto Servidor Correo',
  'LBL_SSL' => 'Usar SSL',
  'LBL_SSL_DESC' => 'Si su servidor de correo acepta conexiones SSL, marcar esta opción obligará a usar conexiones SSL al importar los mensajes.',
  'LBL_WARN_IMAP' => 'Aviso:',
  'LBL_WARN_NO_IMAP' => 'Este sistema no tiene las librerías del cliente IMAP habilitadas/compiladas en el módulo PHP (--with-imap=/path/to/imap_c-client_library).  Por favor contacte a su Administrador para resolver el problema.',
  'LBL_EMAIL_OPTIONS' => 'Opciones manejo de correoE',
  'LBL_EMAIL_BOUNCE_OPTIONS' => 'Opciones manejo de devoluciones',
  'LBL_GROUP_QUEUE' => 'Asignar al Grupo',
    'LBL_HOME'            => 'Inicio',
	'LBL_DELETE_SEEN' => 'Luego de importación eliminar correos leídos',
  'LBL_DEFAULT_FROM_NAME' => 'Por omisión: ',
  'LBL_DEFAULT_FROM_ADDR' => 'Por omisión: ',
  'LBL_FROM_NAME_ADDR'	=> 'Nombre/Correo Respuesta',
  'LBL_ONLY_SINCE'	=> 'Importar solo desde última revisión:',
  'LBL_ONLY_SINCE_YES'	=> 'Si.',
  'LBL_ONLY_SINCE_NO'	=> 'No. Revisar contra todos los mensajes en el servidor de correo.',
  'LBL_ONLY_SINCE_DESC'	=> 'Cuando usa POP3, PHP no puede filtrar mensajes /Nuevos/No-leídos. Si selecciona este valor, se revisarán los mensajes a partir de la última consulta. Esto mejora significativamente el rendimiento si su servidor de correo no soporta IMAP.', 

  'LBL_ASSIGN_TEAM' => 'Asignar al Equipo',
  'LBL_ASSIGN_TO_USER'	=> 'Asignar a un usuario',
  'LBL_CREATE_NEW_GROUP' => '--Crear buzón de grupo al guardar--',
  'LBL_SYSTEM_DEFAULT'	=> 'Define el sistema',
  'LBL_FILTER_DOMAIN'	=> 'No auto-respuesta al dominio',
  'LBL_FILTER_DOMAIN_DESC' => 'No enviar auto-respuestas a este dominio.',
  'LBL_LIST_MAILBOX_TYPE' => 'Uso del Buzón',
  'LBL_LIST_NAME' => 'Nombre:',
  'LBL_LIST_STATUS' => 'Estado:',
  'LBL_LIST_SERVER_URL' => 'Servidor Correo:',
  'LNK_LIST_MAILBOXES' => 'Todos los buzones',
  'LNK_LIST_CREATE_NEW' => 'Nuevo buzón a revisar',
  'LNK_LIST_QUEUES' => 'Todas las colas',
  'LNK_NEW_QUEUES' => 'Crear cola',
  'LNK_LIST_SCHEDULER' => 'Tareas programadas',
  'LNK_LIST_TEST_IMPORT' => 'Probar descarga',
  'LNK_CREATE_GROUP' => 'Crear grupo',
	'LNK_LIST_CREATE_NEW_GROUP'	 => 'Crear buzón de grupo',
	'LNK_LIST_CREATE_NEW_BOUNCE' => 'Crear buzón manejo devoluciones',
  'LNK_SEED_QUEUES' => 'Seed Queues From Teams',
  'LBL_POPUP_TITLE' => 'Probar configuración',
  'LBL_POPUP_SUCCESS' => 'Prueba de conexión exitosa. La configuracíon funciona bien.',
  'LBL_POPUP_FAILURE' => 'La prueba de conexión falló. El error se muestra a continuación.',
	'LBL_GETTING_FOLDERS_LIST' 	=> 'Obteniendo lista de carpetas',
	'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Seleccionar carpetas suscritas',
	'LBL_SELECT_TRASH_FOLDERS' 	=> 'Seleccionar carpeta de Eliminados',
	'LBL_SELECT_SENT_FOLDERS' 	=> 'Seleccionar carpeta de Enviados',
	'LBL_DELETED_FOLDERS_LIST' 	=> 'Las siguientes carpetas %s  no existen o han sido eliminadas del servidor',
  'LBL_FOUND_MAILBOXES' => 'Encontró las siguientes carpetas:',
  'LBL_FOUND_OPTIMUM_MSG'=> '<br>Se encontró la configuración óptima. Presione el botón Siguiente para aplicarla a su buzón.',
  'LBL_CLOSE_POPUP' => 'Cerrar ventana',
  'ERR_TEST_MAILBOX' => 'Por favor revise su configuración e intente nuevamente.',
    'LBL_STATUS_ACTIVE'     => 'Activo',
    'LBL_STATUS_INACTIVE'   => 'Inactivo',
    'LBL_IS_PERSONAL' => 'personal',
	'LBL_GROUPFOLDER_ID'	=> 'Id Carpeta de grupo',
	'LBL_ASSIGN_TO_GROUP_FOLDER' => 'Asignar a Carpeta de Grupo',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Permitir a los usuarios enviar correos usando el Nombre y Dirección "De", como la dirección para respuestas',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Cuando esta opción está seleccionada, el nombre y la dirección asociados a esta cuenta de correo de grupo se mostrarán como una opción para el campo "De" al redactar correos, para el caso de usuarios que tengan acceso a la cuenta de correo de grupo.',
    'LBL_IS_GROUP' => 'grupo',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importar correos automáticamente',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Aviso: Está modificando su configuración de importación automática lo que puede ocasionar pérdida de datos.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Aviso: La auto-importación debe estar habilitada en el momento de crear casos automáticamente.',
	'LBL_EDIT_LAYOUT' => 'Editar diseño' /*for 508 compliance fix*/,

);


?>
