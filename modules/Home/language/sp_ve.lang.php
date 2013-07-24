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
 * $Id: sp_ve.lang.php,v 2.1 2012/10/23 15:48:29 carlose Exp $
 * Source: SugarCRM 6.5.6
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Inicio',
  'LBL_MODULES_TO_SEARCH' => 'Módulos a buscar',
  'LBL_NEW_FORM_TITLE' => 'Nuevo Contacto',
  'LBL_FIRST_NAME' => 'Nombre:',
  'LBL_LAST_NAME' => 'Apellido:',
  'LBL_LIST_LAST_NAME' => 'Apellido',
  'LBL_PHONE' => 'Teléfono:',
  'LBL_EMAIL_ADDRESS' => 'CorreoE:',
  'LBL_MY_PIPELINE_FORM_TITLE' => 'Mi portafolio',
  'LBL_PIPELINE_FORM_TITLE' => 'Portafolio por etapa de la venta',
  'LNK_NEW_CONTACT' => 'Crear Contacto',
  'LNK_NEW_ACCOUNT' => 'Crear Cuenta',
  'LNK_NEW_OPPORTUNITY' => 'Crear Oportunidad',
  'LNK_NEW_QUOTE' => 'Crear Cotización',
  'LNK_NEW_LEAD' => 'Crear Interesado',
  'LNK_NEW_CASE' => 'Crear Caso',
  'LNK_NEW_NOTE' => 'Crear Nota o adjunto',
  'LNK_NEW_CALL' => 'Registrar Llamada',
  'LNK_NEW_EMAIL' => 'Archivar Correo',
  'LNK_COMPOSE_EMAIL' => 'Redactar Correo',  
  'LNK_NEW_MEETING' => 'Programar Reunión',
  'LNK_NEW_TASK' => 'Crear Tarea',
  'LNK_NEW_BUG' => 'Reportar Falla',
  'LBL_ADD_BUSINESSCARD' => 'Ingresar Tarjeta Presentación',
  'ERR_ONE_CHAR' => 'Por favor indique al menos un número o letra para su búsqueda ...',
  'LBL_OPEN_TASKS' => 'Mis Tareas Pendientes',
  'LBL_SEARCH_RESULTS' => 'Resultados búsqueda',
  'LBL_SEARCH_RESULTS_IN' => 'en',
  'LNK_NEW_SEND_EMAIL' => 'Redactar correoE',
  'LBL_NO_RESULTS_IN_MODULE' => '-- Sin resultados --',
  'LBL_NO_RESULTS' => '<h2>No se encontró ningún elemento. Por favor busque nuevamente.</h2><br>',
  'LBL_NO_RESULTS_TIPS' => '<h3>Consejos para buscar:</h3><ul><li>Asegúrese de tener seleccionadas las categorías apropiadas.</li><li>Amplie su criterio de búsqueda.</li><li>Si todavía no obtiene resultados, intente la opción de búsqueda avanzada.</li></ul>',
  'LBL_RELOAD_PAGE' => 'Por favor <a href="javascript: window.location.reload()">recargue la página</a> para usar este Sugar Dashlet.',
  'LBL_ADD_DASHLETS' => 'Agregar Sugar Dashlets',
  'LBL_ADD_PAGE' => 'Agregar página',
  'LBL_DEL_PAGE' => 'Eliminar página',
  'LBL_DELETE_PAGE' => 'Eliminar página',
  'LBL_CHANGE_LAYOUT' => 'Cambiar diseño',
  'LBL_RENAME_PAGE' => 'Renombrar página',
  'LBL_CLOSE_DASHLETS' => 'Cerrar',
  'LBL_CLOSE_SITEMAP' => 'Cerrar',
  'LBL_OPTIONS' => 'Opciones',

  // dashlet search fields
  'LBL_TODAY'=>'Hoy',
  'LBL_YESTERDAY' => 'Ayer',
  'LBL_TOMORROW'=>'Mañana',
  'LBL_LAST_WEEK'=>'Semana pasada',
  'LBL_NEXT_WEEK'=>'Próxima semana',
  'LBL_LAST_7_DAYS'=>'Ultimos 7 días',
  'LBL_NEXT_7_DAYS'=>'Próximos 7 días',
  'LBL_LAST_MONTH'=>'Mes pasado',
  'LBL_NEXT_MONTH'=>'Próximo mes',
  'LBL_LAST_QUARTER'=>'Trimestre pasado',
  'LBL_THIS_QUARTER'=>'Este trimestre',
  'LBL_LAST_YEAR'=>'Año pasado',
  'LBL_NEXT_YEAR'=>'Próximo año',
  'LBL_LAST_30_DAYS' => 'Ultimos 30 días',
  'LBL_NEXT_30_DAYS' => 'Próximos 30 días',
  'LBL_THIS_MONTH' => 'Este mes',
  'LBL_THIS_YEAR' => 'Este año',

  'LBL_MODULES' => 'Módulos',
  'LBL_CHARTS' => 'Gráficos',
  'LBL_TOOLS' => 'Herramientas',
  'LBL_WEB' => 'Web',
  'LBL_SEARCH_RESULTS' => 'Resultado búsqueda',
  'LBL_SEARCH' => 'Buscar',
  'LBL_CLEAR' => 'Limpiar',

  'LBL_BASIC_CHARTS' => 'Gráficos básicos',
  'LBL_REPORT_CHARTS' => 'Reportes',

  'LBL_MY_FAVORITE_REPORT_CHARTS' => 'Mis reportes favoritos',
  'LBL_GLOBAL_REPORT_CHARTS' => 'Reportes globales de equipo',
  'LBL_MY_TEAM_REPORT_CHARTS' => 'Los reportes de mi equipo',
  'LBL_MY_SAVED_REPORT_CHARTS' => 'Mis reportes guardados',

  'LBL_DASHLET_SEARCH' => 'Buscar Sugar Dashlet',

  // Dashlet Categories
  'dashlet_categories_dom' => array(
      'Module Views' => 'Vista módulos',
      'Portal' => 'Portal',
      'Charts' => 'Gráficos',
      'Tools' => 'Herramientas',
      'Miscellaneous' => 'Misceláneos'),
  'LBL_MAX_DASHLETS_REACHED' => 'Ya tiene el número máximo de dashlets permitido por el Administrador. Por favor quite uno para poder añadir otro nuevo.',
  'LBL_ADDING_DASHLET' => 'Agregando Sugar Dashlet ...',
  'LBL_ADDED_DASHLET' => 'Sugar Dashlet agregado',
  'LBL_REMOVE_DASHLET_CONFIRM' => '¿Está seguro de quitar el Sugar Dashlet?',
  'LBL_REMOVING_DASHLET' => 'Quitando Sugar Dashlet ...',
  'LBL_REMOVED_DASHLET' => 'Sugar Dashlet eliminado',
  'LBL_DASHLET_CONFIGURE_GENERAL' => 'General',
  'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtros',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Solo los míos',
  'LBL_DASHLET_CONFIGURE_TITLE' => 'Título',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Mostrar filas',

  'LBL_DASHLET_DELETE' => 'Eliminar Sugar Dashlet',
  'LBL_DASHLET_REFRESH' => 'Recargar Sugar Dashlet',
  'LBL_DASHLET_EDIT' => 'Editar Sugar Dashlet',

  'LNK_NEW_SEND_EMAIL' => 'Redactar Correo',
   'LBL_DEL_PAGE' => 'Borrar página',
   'LBL_WEBSITE_TITLE' => 'Sitio web',
   'LBL_RSS_TITLE' => 'Noticias',
   'LBL_WEB' => 'Web',
   'LBL_HOME_PAGE_2_NAME' => 'Ventas',
   'LBL_HOME_PAGE_3_NAME' => 'Soporte',
   'LBL_HOME_PAGE_6_NAME' => 'Mercadeo',//bug 16510, separate the support and marketing page from each other
   'LBL_VIEWLICENSE_COM' => '<P>Este programa es software libre; puede redistribuirlo y/o modificarlo bajo los términos de la <a href="LICENSE.txt" target="_blank" class="body"> GNU Affero General Public License version 3</a> publicados por la Free Software Foundation, incluyendo los permisos adicionales en la cabecera del código fuente.</P>',
   'LBL_ADD_TERM_COM' => '<P>The interactive user interfaces in modified source and object code versions of this program must display Appropriate Legal Notices, as required under Section 5 of the GNU Affero General Public License version 3. In accordance with Section 7(b) of the GNU General Public License version 3, these Appropriate Legal Notices must retain the display of the &quot;Powered by SugarCRM&quot; logo. If the display of the logo is not reasonably feasible for technical reasons, the Appropriate Legal Notices must display the words &quot;Powered by SugarCRM&quot;.</P>',

  'LBL_SUGAR_COMMUNITY_EDITION' => 'Sugar Community Edition',
  'LBL_SUGAR_PROFESSIONAL' => "Sugar Professional",
  'LBL_SUGAR_ENTERPRISE' => "Sugar Enterprise",
  'LBL_AND' => "y",
  'LBL_ARE' => "son",
  'LBL_TRADEMARKS' => 'marcas registradas',
  'LBL_OF' => 'de',
  'LBL_FOUNDERS' => 'Fundadores',
  'LBL_JOIN_SUGAR_COMMUNITY' => 'Unase a la comunidad Sugar',
  'LBL_DETAILS_SUGARFORGE' => 'Colaborar y desarrollar extensiones para Sugar',
  'LBL_DETAILS_SUGAREXCHANGE' => 'Comprar y vender extensiones certificadas Sugar ',
  'LBL_TRAINING' => 'Capacitación',
  'LBL_DETAILS_TRAINING' => 'Aprenda Sugar mediante el contenido en línea e interactivo',
  'LBL_FORUMS' => 'Foros',
  'LBL_DETAILS_FORUMS' => 'Discutir Sugar con la comunidad de usuarios y desarroladores',
  'LBL_WIKI' => 'Wiki',
  'LBL_DETAILS_WIKI' => 'Buscar la base de conocimiento con tópicos para usuarios y desarrolladores',
  'LBL_DEVSITE' => 'Sitio de Desarrollador',
  'LBL_DETAILS_DEVSITE' => 'Descubrir recursos, tutoriales y enlaces útiles para agilizar el desarrollo en Sugar',
  'LBL_GET_SUGARCRM_RSS' => 'Obtener SugarCRM RSS',
  'LBL_SUGARCRM_NEWS' => 'Noticias SugarCRM',
  'LBL_SUGARCRM_TRAINING_NEWS' => 'Noticias capacitación SugarCRM',
  'LBL_SUGARCRM_FORUMS' => 'Foros SugarCRM',
  'LBL_SUGARFORGE_NEWS' => 'Noticias SugarForge',
  'LBL_ALL_NEWS' => 'Todas las noticias',
  'LBL_LINK_CURRENT_CONTRIBUTORS' => '¡Clic en este enlace para revisar la lista actualizada de colaboradores Sugar!',
  'LBL_SOURCE_CODE' => 'Código fuente',
  'LBL_SOURCE_SUGAR' => 'Sugar - La aplicación más popular de automatización de fuerza de venta, creada por SugarCRM Inc.',
  'LBL_SOURCE_XTEMPLATE' => 'XTemplate - A template engine for PHP created by Barnabás Debreceni',
  'LBL_SOURCE_NUSOAP' => 'NuSOAP - A set of PHP classes that allow developers to create and consume web services created by NuSphere Corporation and Dietrich Ayala',
  'LBL_SOURCE_JSCALENDAR' => 'JS Calendar - A calendar for entering dates created by Mihai Bazon',
  'LBL_SOURCE_PHPPDF' => 'PHP PDF - A library for creating PDF documents created by Wayne Munro',
  'LBL_SOURCE_HTTP_WEBDAV_SERVER' => 'HTTP_WebDAV_Server - A WebDAV Server Implementation in PHP.',
  'LBL_SOURCE_PCLZIP' => 'PclZip - library offers compression and extraction functions for Zip formatted archives by Vincent Blavet',
  'LBL_SOURCE_SMARTY' => 'Smarty - A template engine for PHP.',
  'LBL_SOURCE_YAHOO_UI_LIB' => 'Yahoo! User Interface Library - The UI Library Utilities facilitate the implementation of rich client-side features.',
  'LBL_SOURCE_PHPMAILER' => 'PHPMailer - A full featured email transfer class for PHP',
  'LBL_SOURCE_JSHRINK' => 'JShrink - A Javascript minifier written in PHP',
  'LBL_SOURCE_CRYPT_BLOWFISH' => 'Crypt_Blowfish - Allows for quick two-way blowfish encryption without requiring the MCrypt PHP extension.',
  'LBL_SOURCE_XML_HTMLSAX3' => 'XML_HTMLSax3 - A SAX parser for HTML and other badly formed XML documents',
  'LBL_SOURCE_YAHOO_UI_LIB_EXT' => 'Yahoo! UI Extensions Library - Extensions to the Yahoo! User Interface Library by Jack Slocum',
  'LBL_SOURCE_SWFOBJECT' => 'SWFObject - Javascript Flash Player detection and embed script.',
  'LBL_SOURCE_TINYMCE' => 'TinyMCE - A WYSIWYG editor control for web browsers that enables the user to edit HTML contents',
  'LBL_SOURCE_EXT' => 'Ext - A client-side JavaScript framework for building web applications.',
  'LBL_SOURCE_RECAPTCHA' => 'reCAPTCHA - A free CAPTCHA service that helps to digitize books, newspapers and old time radio shows.', 
  'LBL_SOURCE_TCPDF' => 'TCPDF - A PHP class for generating PDF documents.',
  'LBL_SOURCE_CSSMIN' => 'CssMin - A css parser and minifier.',
  'LBL_SOURCE_PHPSAML' => 'PHP-SAML - A simple SAML toolkit for PHP.',
  'LBL_SOURCE_ISCROLL' => 'iScroll - The overflow:scroll for mobile webkit.  Native scrolling inside a fixed width/height element.',
  'LBL_SOURCE_FLASHCANVAS' => 'FlashCanvas - FlashCanvas is a JavaScript library which adds the HTML5 Canvas support to Internet Explorer. It renders shapes and images via Flash drawing API. It supports almost all Canvas APIs and, in many cases, runs faster than other similar libraries which use VML or Silverlight.',
  'LBL_SOURCE_JIT' => 'JavaScript InfoVis Toolkit - The JavaScript InfoVis Toolkit provides tools for creating Interactive Data Visualizations for the Web.',
  'LBL_SOURCE_ZEND' => 'Zend Framework - Framework de código abierto, orientado a objetos para desarrollo de aplicaciones web con PHP5.',
  'LBL_SOURCE_PARSECSV' => 'parseCSV - analizador datos CSV para PHP',
  'LBL_SOURCE_PHPJS' => 'php.js - Uso de funciones PHP en JavaScript',
  'LBL_SOURCE_PHPSQL' => 'PHP SQL Parser',
  'LBL_SOURCE_HTMLPURIFIER' => 'HTML Purifier - A standards-compliant HTML filtering library.',
  'LBL_DASHLET_TITLE' => 'Mis sitios',
  'LBL_DASHLET_OPT_TITLE' => 'Título',
  'LBL_DASHLET_OPT_URL' => 'Localización sitio web',
  'LBL_DASHLET_OPT_HEIGHT' => 'Altura Dashlet (en pixels)',
  'LBL_DASHLET_SUGAR_NEWS' => 'Noticias Sugar',
  'LBL_DASHLET_DISCOVER_SUGAR_PRO' => 'Descubra Sugar',
	'LBL_POWERED_BY_SUGAR' => 'Powered By SugarCRM' /*for 508 compliance fix*/,
	'LBL_MORE_DETAIL' => 'Más detalles' /*for 508 compliance fix*/,
	'LBL_BASIC_SEARCH' => 'Búsqueda básica' /*for 508 compliance fix*/,
	'LBL_ADVANCED_SEARCH' => 'Búsqueda avanzada' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Icono Inicio',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Regrese rápidamente a su página de inicio con un solo clic.',
    'LBL_TOUR_MODULES' => 'Módulos',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Todos sus módulos importantes están aquí.',
    'LBL_TOUR_MORE' => 'Más módulos',
    'LBL_TOUR_MORE_DESCRIPTION' => 'El resto de sus módulos están aquí.',
    'LBL_TOUR_SEARCH' => 'Búsqueda en campos de texto',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'La búsqueda ahora es mucho mejor.',
    'LBL_TOUR_NOTIFICATIONS' => 'Notificaciones',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'Las notificaciones de la aplicación Sugar se mostrarían aquí.',
    'LBL_TOUR_PROFILE' => 'Perfil',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Acceda al perfil, configuración y salida.',
    'LBL_TOUR_QUICKCREATE' => 'Creación rápida',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Crear rápidamente registros sin perder la ubicación actual.',
    'LBL_TOUR_FOOTER' => 'Pie plegable',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Despliegue y contraiga fácilmente el pie de página.',
    'LBL_TOUR_CUSTOM' => 'Aplicaciones personalizadas',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'La integración de sus aplicaciones personaizadas iría aquí.',
    'LBL_TOUR_BRAND' => 'Su marca',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Su logotipo iría aquí. Puede posar el puntero del ratón para mayor información.',
    'LBL_TOUR_WELCOME' => 'Bienvenido a Sugar',
    'LBL_TOUR_WATCH' => 'Conozca las novedades de Sugar',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">Nueva barra de navegación simplificada</li><li class="icon-ok">Nuevo pie plegable</li><li class="icon-ok">Búsqueda mejorada</li><li class="icon-ok">Menú de acciones actualizado</li></ul><p>¡y mucho más!</p>',
    'LBL_TOUR_VISIT' => 'Para mayor información visite la',
    'LBL_TOUR_DONE' => '¡Está listo!',
    'LBL_TOUR_REFERENCE_1' => 'Siempre se puede revisar la',
    'LBL_TOUR_REFERENCE_2' => 'mediante el enlace "Soporte" en la pestaña del perfil.',
    'LNK_TOUR_DOCUMENTATION' => 'documentación',
    'LBL_TOUR_CALENDAR_URL_1' => '¿Comparte su calendario SugarCRM con aplicaciones de terceros como Microsoft Outlook o Exchange? Si es así, tiene un nuevo URL más seguro que incluye una clave personal que evita la publicación no autorizada de su calendario compartido.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Obtenga el nuevo URL de su calendario compartido.',

);


?>
