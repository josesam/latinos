<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*******************************************************************************
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
 * $Id: sp_ve.lang.php,v 2.0 2012/10/22 10:20:29 carlose Exp $
 * Source: SugarCRM 6.5.6
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array (
	'LBL_MODULE_NAME'=>'Configuración del Sistema',
	'LBL_MODULE_TITLE'=>'Interfaz de usuario',
	'ADMIN_EXPORT_ONLY'=>'Solo el Administrador puede exportar',
	'DISABLE_EXPORT'=>'Deshabilitar exportación',
	'DEFAULT_CURRENCY_NAME'=>'Nombre de moneda',
	'DEFAULT_CURRENCY_SYMBOL'=>'Símbolo de moneda',
	'DEFAULT_CURRENCY_ISO4217'=>'Código ISO 4217 de moneda',
	'DEFAULT_CURRENCY'=>'Moneda preferida',
	'EXPORT'=>'Exportar',
	'QUOTES_CURRENT_LOGO'=>'Logo usado en Cuotas ',
	'NEW_QUOTE_LOGO'=>'Cargar nuevo logo para cuotas (867x74)',
	'CURRENT_LOGO'=>'Logo actualmente en uso',
	'NEW_LOGO'=>'Cargar nuevo logo (212x40)',
	'DEFAULT_SYSTEM_SETTINGS'=>'Interfaz de usuario',
	'DEFAULT_DATE_FORMAT'=>'Formato de fecha',
	'DEFAULT_TIME_FORMAT'=>'Formato de hora',
	'DEFAULT_THEME'=> 'Tema preferido',
	'LIST_ENTRIES_PER_LISTVIEW'=>'Elementos por página en Listas',
	'LIST_ENTRIES_PER_SUBPANEL'=>'Elementos por página en Subpaneles',
	'DISPLAY_RESPONSE_TIME'=>'Mostrar tiempos de respuesta del servidor',
	'ADVANCED'=>'Avanzada',
	'VERIFY_CLIENT_IP'=>'Validar dirección IP del usuario',
    'LOCK_HOMEPAGE' => 'Usuario no puede modificar el diseño de página Inicio',
    'LOCK_SUBPANELS' => 'Usuario no puede modificar el diseño de subpaneles',
    'MAX_DASHLETS' => 'Número máximo de Sugar Dashlets en página Inicio',
	'LOG_MEMORY_USAGE'=>'Registrar uso de memoria',
	'LOG_SLOW_QUERIES'=> 'Registrar consultas lentas',
	'SLOW_QUERY_TIME_MSEC'=>'Tiempo de espera consultas lentas (msec)',
	'UPLOAD_MAX_SIZE'=>'Tamaño máximo a cargar',
	'STACK_TRACE_ERRORS'=>'Mostrar secuencia de error',
	'IMAGES'=>'Logos',
	'DEFAULT_LANGUAGE'=>'Idioma preferido',
	'LBL_RESTORE_BUTTON_LABEL'=>'Restaurar',
	'LBL_PORTAL_ON_DESC' => 'Permitir que usuarios externos tengan acceso a Casos, Notas y otra información a través de un portal de autoservicio.',
	'LBL_PORTAL_ON' => '¿Habilitar integración con portal de autoservicio?',
	'LBL_PORTAL_TITLE' => 'Portal de autoservicio para clientes',
	'LBL_PROXY_AUTH'=>'¿Autentificación?',
	'LBL_PROXY_HOST'=>'Servidor Proxy',
	'LBL_PROXY_ON_DESC'=>'Configurar la dirección del servidor proxy y la autentificación',
	'LBL_PROXY_ON'=>'¿Usar servidor proxy?',
	'LBL_PROXY_PASSWORD'=>'Contraseña',
	'LBL_PROXY_PORT'=>'Puerto',
	'LBL_PROXY_TITLE'=>'Configuración proxy',
	'LBL_PROXY_USERNAME'=>'Nombre usuario',
  'LBL_SKYPEOUT_ON_DESC' => 'Permite hacer clic en números de teléfono para llamar usando SkypeOut&reg;. Los números deben estar adecuadamente formateados para usar esta característica. Es decir debe tener "+"  "Código de país" "El número".',
	'LBL_SKYPEOUT_ON' => '¿Habilitar integración con SkypeOut&reg;?',
	'LBL_SKYPEOUT_TITLE' => 'SkypeOut&reg;',
	'LBL_USE_REAL_NAMES'	=> 'Mostrar nombres completos',
	'LBL_USE_REAL_NAMES_DESC'	=> 'Mostrar el nombre completo del usuario en lugar de su identificación en los campos de asignación.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Deshabilitar Convertir interesado para registros ya convertidos',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Si un interesado ya ha sido convertido, marcar esta opción impide que se muestre la acción Convertir interesado.',
    'LBL_ENABLE_ACTION_MENU' => 'Mostrar menús de acciones',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Seleccionar para mostrar acciones de vistas de detalle y subpaneles en un menú desplegable. Si no se selecciona, las acciones se muestran como botones separados.',
	'LBL_MAILMERGE' => 'Combinar correspondencia',
	'LBL_ENABLE_MAILMERGE' => '¿Habilitar correspondencia combinada?',
	'LBL_MAILMERGE_DESC' => 'Marcar esta casilla solamente si tiene el complemento Sugar para Microsoft&reg; Word&reg;.',
	'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Intervalo mínimo de auto recarga de dashlets',
	'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Este es el valor mínimo que se puede elegir para la recarga automática de los dashlets. Definirla como \'Nunca\' deshabilita por completo la auto recarga de dashlets.',
	'LBL_MODULE_FAVICON'    => 'Mostrar el icono del módulo como favicon',
    'LBL_MODULE_FAVICON_HELP'   => 'Si está en un módulo con icono se usará el mismo como favicon en la pestaña del navegador, en lugar del favicon del tema.',
	'LBL_LOGVIEW' => 'Configurar registro de sucesos',
	'LBL_CONFIGURE_SETTINGS_TITLE' => 'Configuración del sistema',
	'LBL_MAIL_SMTPAUTH_REQ'	=> '¿Usar autentificación SMTP?',
	'LBL_MAIL_SMTPPASS'	=> 'Contraseña SMTP:',
	'LBL_MAIL_SMTPPORT'	=> 'Puerto SMTP:',
	'LBL_MAIL_SMTPTYPE'	=> 'Tipo de servidor SMTP:',
	'LBL_MAIL_SMTP_SETTINGS'	=> 'Especificación de servidor SMTP:',
	'LBL_MAIL_SMTPSERVER'	=> 'Servidor SMTP:',
	'LBL_MAIL_SMTPUSER'	=> 'Nombre usuario SMTP:',
	'LBL_NOTIFY_FROMADDRESS' => 'Dirección "De":',
	'LBL_NOTIFY_SUBJECT' => 'Asunto de correo:',
	'DEFAULT_NUMBER_GROUPING_SEP'	=> 'Separador de miles',
	'DEFAULT_DECIMAL_SEP'	=> 'Separador de decimales',
	'LBL_ADMIN_WIZARD'	=> 'Asistente de Administración',
	'LBL_ALLOW_USER_TABS'	=> 'Permitir a los usuarios ocultar pestañas',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Escoja su proveedor de correo-e',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Contraseña para su cuenta de Yahoo!',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Contraseña para su cuenta de Yahoo!',
  'LBL_GMAIL_SMTPPASS' => 'Contraseña para su cuenta de Gmail',
  'LBL_GMAIL_SMTPUSER' => 'Usuario para su cuenta de Gmail',
  'LBL_EXCHANGE_SMTPPASS' => 'Contraseña para su cuenta de Exchange',
  'LBL_EXCHANGE_SMTPUSER' => 'Usuario para su cuenta de Exchange',
  'LBL_EXCHANGE_SMTPPORT' => 'Puerto para su servidor de Exchange',
  'LBL_EXCHANGE_SMTPSERVER' => 'Su servidor de Exchange',
	'LBL_ALLOW_DEFAULT_SELECTION'	=> 'Permitir a los usuarios usar esta cuenta para correo saliente',
	'LBL_ALLOW_DEFAULT_SELECTION_HELP'	=> 'Al seleccionar esta opción, todos los usuarios podrán enviar correos usando la misma cuenta usada para enviar alertas y notificaciones del sistema. Si la opción no está seleccionada, cada usuario deberá definir los datos de su propia cuenta de correo para usar el servidor de correo saliente.',
	'LBL_SYSTEM_SETTINGS'	=> 'Configuración general',
	'LBL_SKYPEOUT_ON'	=> 'Habilitar integración con SkypeOut&reg;',
	'CURRENT_LOGO'	=> 'Logo actual:',
    'CURRENT_LOGO_HELP'=>'Este logotipo se muestra en la esquina superior izquierda de la aplicación Sugar.',
	'NEW_LOGO'	=> 'Seleccionar Logo:',
	'NEW_LOGO_HELP'=>'El formato de la imagen puede ser .png o .jpg. La altura máxima es 17px y el ancho máximo es 450px. Una imagen cargada que sea mayor en cualquier dirección será redimensionada a estos valores máximos.',
	'NEW_LOGO_HELP_NO_SPACE'=>'El formato de la imagen puede ser .png o .jpg. La altura máxima es 17px y el ancho máximo es 450px. Una imagen cargada que sea mayor en cualquier dirección será redimensionada a estos valores máximos. El nombre del archivo de imagen no puede contener espacios',
    'NEW_QUOTE_LOGO'=>'Subir el nuevo logo para Cotizaciones',
    'NEW_QUOTE_LOGO_HELP'=>'El formato de la imagen debe ser .jpg.<BR>El tamaño recomendado es 867x74 px.',
    'QUOTES_CURRENT_LOGO'=>'Logo cotizaciones',
 	'SYSTEM_NAME'=>'Nombre del sistema:',
 	'SYSTEM_NAME_WIZARD'=>'Nombre:',
 	'SYSTEM_NAME_HELP'=>'Este será el nombre que se muestre en la barra del título del navegador.',
    'LBL_LDAP_TITLE'=>'Soporte autentificación LDAP',
    'LBL_LDAP_ENABLE'=>'Habilitar LDAP',
    'LBL_LDAP_SERVER_HOSTNAME'=> 'Servidor:',
    'LBL_LDAP_SERVER_PORT'=> 'Puerto:',
    'LBL_LDAP_ADMIN_USER'=> 'Nombre usuario:',
    'LBL_LDAP_ADMIN_USER_DESC'=>'Utilizado para ubicar el usuario Sugar. [Podría necesitarse calificación total] Si se deja en blanco se conecta de manera anónima.',
    'LBL_LDAP_ADMIN_PASSWORD'=> 'Contraseña:',
	'LBL_LDAP_AUTHENTICATION'=> 'Autentificación:',
	'LBL_LDAP_AUTHENTICATION_DESC'=>'Conectar al servidor LDAP usando credenciales específicas de usuario',
    'LBL_LDAP_AUTO_CREATE_USERS'=>'Crear usuarios automáticamente:',
    'LBL_LDAP_USER_DN'=>'User DN:',
	'LBL_LDAP_GROUP_DN'=>'Group DN:',
	'LBL_LDAP_GROUP_DN_DESC'=>'Ejemplo: <em>ou=grupos,dc=ejemplo,dc=com</em>',
	'LBL_LDAP_USER_FILTER'=>'User Filter:',
	'LBL_LDAP_GROUP_MEMBERSHIP'=>'Group Membership:',
	'LBL_LDAP_GROUP_MEMBERSHIP_DESC'=>'Los usuarios deben ser miembros de un grupo específico',
	'LBL_LDAP_GROUP_USER_ATTR'=>'User Attribute:',
	'LBL_LDAP_GROUP_USER_ATTR_DESC'=>'El identificador único de una persona que será usado para verificar si es miembro de un grupo. Ejemplo: <em>uid</em>',
	'LBL_LDAP_GROUP_ATTR_DESC'=>'The attribute of the Group that will be used to filter against the User Attribute Example: <em>memberUid</em>',
	'LBL_LDAP_GROUP_ATTR'=>'Group Attribute:',
	'LBL_LDAP_USER_FILTER_DESC'=>'Any additional filter params to apply when authenticating users e.g.<em>is_sugar_user=1 or (is_sugar_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE'=>'Login Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE'=>'Bind Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC'=>'For Binding the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;userPrincipalName] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC'=>'Para buscar el usuario LDAP. Ejemplos:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC'=>'Ejemplo: ldap.ejemplo.com ó ldaps://ldap.ejemplo.com para SSL',
    'LBL_LDAP_SERVER_PORT_DESC'=>'Ejemplo: <em>389 ó 636 para SSL</em>',
	'LBL_LDAP_GROUP_NAME'=>'Nombre del Grupo:',
	'LBL_LDAP_GROUP_NAME_DESC'=>'Ejemplo <em>cn=sugarcrm</em>',
    'LBL_LDAP_USER_DN_DESC'=>'Ejemplo: <em>ou=personas,dc=ejemplo,dc=com</eM>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC'=> 'Si el usuario autentificado no existe en Sugar se creará una cuenta.',
    'LBL_LDAP_ENC_KEY'	=> 'Clave de encriptación:',
    'DEVELOPER_MODE'=>'Modo Desarrollador',
	'SHOW_DOWNLOADS_TAB' =>'Mostrar pestaña Descargas',
	'SHOW_DOWNLOADS_TAB_HELP' =>'Si está seleccionada, la pestaña Descargas se mostrará en la Configuración de Usuarios dando acceso a complementos de Sugar y otros archivos.',
    'LBL_LDAP_ENC_KEY_DESC'	=> 'Para autentificación SOAP cuando usa LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'La extensión php_mcrypt debe estar habilitada en su archivo php.ini.',
    'LBL_ALL' => 'Todo',
    'LBL_MARK_POINT' => 'Punto marcado',
    'LBL_NEXT_' => 'Siguiente>>',
    'LBL_REFRESH_FROM_MARK' => 'Refrescar desde marca',
    'LBL_SEARCH' => 'Buscar:',
    'LBL_REG_EXP' => 'Reg Exp:',
    'LBL_IGNORE_SELF' => 'Ignorarse:',
    'LBL_MARKING_WHERE_START_LOGGING'=>'Marcar desde donde iniciar el registro de sucesos',
    'LBL_DISPLAYING_LOG'=>'Mostrando sucesos',
    'LBL_YOUR_PROCESS_ID'=>'Su ID de proceso',
    'LBL_YOUR_IP_ADDRESS'=>'Su dirección IP es',
    'LBL_IT_WILL_BE_IGNORED'=>' Será ignorado',
    'LBL_LOG_NOT_CHANGED'=>'Registro de sucesos no ha cambiado',
    'LBL_ALERT_JPG_IMAGE' => 'El formato del archivo de imagen debe ser JPEG. Suba un nuevo archivo con la extensión .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'El formato del archivo de imagen debe ser JPEG o PNG. Suba un nuevo archivo con la extensión .jpg or .png.',
    'LBL_ALERT_SIZE_RATIO' => 'La proporción de aspecto de la imagen deber estar entre 1:1 y 10:1.  Se reajustará el tamaño de la imagen.',
    'LBL_ALERT_SIZE_RATIO_QUOTES' => 'La proporción de aspecto de la imagen debe estar entre 3:1 y 20:1. Suba un nuevo archivo con esa proporción.',
    'ERR_ALERT_FILE_UPLOAD' => 'Error durante la carga de la imagen.',
    'LBL_LOGGER'=>'Configurar registro de sucesos',
	'LBL_LOGGER_FILENAME'=>'Nombre de archivo',
	'LBL_LOGGER_FILE_EXTENSION'=>'Extensión',
	'LBL_LOGGER_MAX_LOG_SIZE'=>'Tamaño máximo del archivo',
	'LBL_LOGGER_DEFAULT_DATE_FORMAT'=>'Formato de fecha',
	'LBL_LOGGER_LOG_LEVEL'=>'Nivel de registro',
        'LBL_LEAD_CONV_OPTION' => 'Opciones conversión Interesados',
        'LEAD_CONV_OPT_HELP' => "<b>Copiar</b> - Crea y relaciona copia de todas las actividades del Interesado en nuevos registros seleccionados por el usuario durante la conversión. Las copias se crean en cada uno de los registros seleccionados.<br><br><b>Mover</b> - Mueve todas las actividades del Interesado a un nuevo registro que se selecciona durante la conversión.<br><br><b>No hacer nada</b> - No realiza ninguna acción con las actividades del Interesado durante la conversión. Las actividades permanecen relacionadas solamente al interesado.",
        'LBL_CONFIG_AJAX' => 'Configurar interfaz de usuario AJAX',
        'LBL_CONFIG_AJAX_DESC' => 'Habilitar o deshabilitar el uso de AJAX para módulos específicos.',
	'LBL_LOGGER_MAX_LOGS'=>'Máximo número archivos (antes de reutilizar)',
	'LBL_LOGGER_FILENAME_SUFFIX' =>'Añadir despúes del nombre',
	'LBL_VCAL_PERIOD' => 'Período actualizaciones vCal:',
	'vCAL_HELP' => 'Determina el número de meses a partir de la fecha actual en que se publicará la información de Libre/Ocupado para llamadas y reuniones.<BR>Para desactivar la publicación de Libre/Ocupado, ingrese "0". El mínimo es 1 mes; el máximo es 12 meses.',
    'LBL_IMPORT_MAX_RECORDS' => 'Importar - Número máximo de filas:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Especifica el número máximo de filas permitidas en un archivo de importación. Si el número de filas<br>en el archivo excede este especificado, se notificará al usuario. Si no escribe un número,<br> está permitido un número ilimitado de filas.',
    'PDF_CREATOR' => 'Creador PDF',
    'PDF_CREATOR_INFO' => 'Define el creador del documento. <br>Usualmente se refiere al nombre de la aplicación que generó el PDF.',

    'PDF_AUTHOR' => 'Autor',
    'PDF_AUTHOR_INFO' => 'El Autor aparece en las propiedades del documento.',

    'PDF_HEADER_LOGO' => 'Para Cotizaciones en PDF',
    'PDF_HEADER_LOGO_INFO' => 'Esta imagen aparece en el Encabezado por omisión de las cotizaciones en PDF.',

    'PDF_NEW_HEADER_LOGO' => 'Seleccione nueva imagen para Cotizaciones',
    'PDF_NEW_HEADER_LOGO_INFO' => 'El formato del archivo puede ser .jpg o .png. (Solamente .jpg para EZPDF)<BR>El tamaño recomendado es 867x60 px.',

    'PDF_HEADER_LOGO_WIDTH' => 'Ancho imagen Cotizaciones',
    'PDF_HEADER_LOGO_WIDTH_INFO' => 'Cambiar la escala de la imagen cargada que aparece en la cotizaciones en PDF. (Solamente TCPDF)',

    'PDF_SMALL_HEADER_LOGO' => 'Para Reportes en PDF',
    'PDF_SMALL_HEADER_LOGO_INFO' => 'Esta imagen aparece en el encabezado por omisión de los Reportes en PDF.<br> También se muestra en la esquina superior izquierda de la aplicación Sugar.',

    'PDF_NEW_SMALL_HEADER_LOGO' => 'Seleccione nueva imagen para Reportes',
    'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'el formato del archivo puede ser .jpg o .png. (Solamente .jpg para EZPDF)<BR>El tamaño recomendado es 212x40 px.',

    'PDF_SMALL_HEADER_LOGO_WIDTH' => 'Ancho imagen Reportes',
    'PDF_SMALL_HEADER_LOGO_WIDTH_INFO' => 'Cambiar la escala de la imagen cargada que aparece en los reportes en PDF. (Solamente TCPDF)',


    'PDF_HEADER_STRING' => 'Texto Encabezado',
    'PDF_HEADER_STRING_INFO' => 'Texto descriptivo del encabezado',

    'PDF_HEADER_TITLE' => 'Título Encabezado',
    'PDF_HEADER_TITLE_INFO' => 'Texto a imprimirse como título en el encabezado del documento',

    'PDF_FILENAME' => 'Nombre archivo por omisión',
    'PDF_FILENAME_INFO' => 'Nombre del archivo por omisión para los archivos PDF generados',

    'PDF_TITLE' => 'Título',
    'PDF_TITLE_INFO' => 'El título aparece en las propiedades del documento.',

    'PDF_SUBJECT' => 'Asunto',
    'PDF_SUBJECT_INFO' => 'El asunto aparece en las propiedades del documento.',

    'PDF_KEYWORDS' => 'Palabaras clave',
    'PDF_KEYWORDS_INFO' => 'Asociar palabras clave con el documento, generalmente en la forma "keyword1 keyword2..."',

    'PDF_COMPRESSION' => 'Compresión',
    'PDF_COMPRESSION_INFO' => 'Activa o desactiva la compresión de la página. <br>Si está activada, la representación interna de cada página está comprimida, lo que conduce a una tasa de compresión aproximada de 2 para el documento resultante.',

    'PDF_JPEG_QUALITY' => 'Calidad JPEG (1-100)',
    'PDF_JPEG_QUALITY_INFO' => 'Define la calidad de la compresión JPEG (1-100)',

    'PDF_PDF_VERSION' => 'Versión PDF',
    'PDF_PDF_VERSION_INFO' => 'Define la versión PDF (revise la referencia del PDF para los valores válidos).',

    'PDF_PROTECTION' => 'Protección del documento',
    'PDF_PROTECTION_INFO' => 'Define la protección del documento<br>- copy: copiar texto e imágenes al portapapeles<br>- print: imprimir el documento<br>- modify: modificarlo (excepto anotaciones y formas)<br>- annot-forms: añadir anotaciones y formas<br>Nota: la protección contra modificaciones es para las personas que tienen el producto Acrobat completo.',

    'PDF_USER_PASSWORD' => 'Contraseña de usuario',
    'PDF_USER_PASSWORD_INFO' => 'Si no se define ninguna contraseña, el documento se abrirá como siempre. <br>Si se define una contraseña de usuario, el visor de PDF solicitará la misma antes de mostrar el documento. <br>La contraseña maestra, si es diferente de la de usuario, puede ser usada para obtener acceso completo.',

    'PDF_OWNER_PASSWORD' => 'Contraseña de Propietario',
    'PDF_OWNER_PASSWORD_INFO' => 'Si no se define ninguna contraseña, el documento se abrirá como siempre. <br>Si se define una contraseña de usuario, el visor de PDF solicitará la misma antes de mostrar el documento. <br>La contraseña maestra, si es diferente de la de usuario, puede ser usada para obtener acceso completo.',

    'PDF_ACL_ACCESS' => 'Control de Acceso',
    'PDF_ACL_ACCESS_INFO' => 'Control de acceso por omisión para la generación del PDF.',

    'K_CELL_HEIGHT_RATIO' => 'Cell Height Ratio',
    'K_CELL_HEIGHT_RATIO_INFO' => 'If the height of a cell is smaller than (Font Height x Cell Height Ratio), then (Font Height x Cell Height Ratio) is used as the cell height.<br>(Font Height x Cell Height Ratio) is also used as the height of the cell when no height is defined.',

 // Wizard
     'LBL_WIZARD_TITLE' => 'Asistente de Administración',
     'LBL_WIZARD_WELCOME_TAB' => 'Bienvenido',
     'LBL_WIZARD_WELCOME_TITLE' => '¡Bienvenido a Sugar!',
     'LBL_WIZARD_WELCOME' => 'Haga clic en <b>Siguiente</b> para personalizar, localizar y configurar Sugar ahora.<br/><br />Si desea hacerlo en otro momento, haga clic en <b>Posponer</b>.',
     'LBL_WIZARD_NEXT_BUTTON' => 'Siguiente >',
     'LBL_WIZARD_BACK_BUTTON' => '< Atrás',
     'LBL_WIZARD_SKIP_BUTTON' => 'Posponer',
     'LBL_WIZARD_FINISH_BUTTON' => 'Finalizar',
     'LBL_WIZARD_CONTINUE_BUTTON' => 'Continuar',
     'LBL_WIZARD_FINISH_TAB' => 'Finalizar',
     'LBL_WIZARD_FINISH_TITLE' => 'Se ha completado la configuración básica del sistema',
     'LBL_WIZARD_FINISH' => 'Haga Clic en <b>Continuar</b> para configurar las preferencias de usuarios.<br/><br />
 Para configuración adicional, haga clic aquí <a href="index.php?module=Administration&action=index" target="_blank"></a>.',
     'LBL_WIZARD_SYSTEM_TITLE' => 'Personalización',
     'LBL_WIZARD_SYSTEM_DESC' => 'Especifique el nombre de su organización y el logo para personalizar su Sugar.',
     'LBL_WIZARD_LOCALE_DESC' => 'Especifique como le gustaría que Sugar muestre sus datos, basado en su localización geográfica. Esta configuración será usada de manera global. Los usuarios podrán definir sus propias preferencias.',
     'LBL_WIZARD_SMTP_DESC' => 'Defina la cuenta de correo que usará Sugar para enviar correos tales como notificaciones de asignación y contraseñas nuevas a los usuarios.',
    'LBL_MOBILE_MOD_REPORTS_RESTRICTION' => '* el módulo Reportes solamente está disponible para clientes nativos de Sugar Mobile.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL' => 'Yahoo Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_LOADING' => 'Cargando...' /*for 508 compliance fix*/,
	'LBL_DELETE' => 'Borrar' /*for 508 compliance fix*/,
	'LBL_WELCOME' => 'Bienvenido' /*for 508 compliance fix*/,
	'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,

);


?>
