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
 * $Id: sp_ve.lang.php,v 2.0 2012/08/12 10:20:29 carlose Exp $
 * Source: SugarCRM 6.5.2
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/
global $sugar_config;

$mod_strings = array (
// OOTB Scheduler Job Names:
'LBL_OOTB_WORKFLOW'		=> 'Procesar tareas para flujo de trabajo',
'LBL_OOTB_REPORTS'		=> 'Ejecutar tareas programadas para generación de reportes',
'LBL_OOTB_IE'			=> 'Revisar buzones correo entrante',
'LBL_OOTB_BOUNCE'		=> 'Ejecutar proceso nocturno de correos de campaña devueltos',
'LBL_OOTB_CAMPAIGN'		=> 'Ejecutar proceso nocturno de campañas de correo masivo',
'LBL_OOTB_PRUNE'		=> 'Reducir base de datos el primero del mes',
'LBL_OOTB_TRACKER'		=> 'Reducir tablas de monitorización',
'LBL_UPDATE_TRACKER_SESSIONS' => 'Actualizar tabla sesiones de monitorización',
'LBL_OOTB_SEND_EMAIL_REMINDERS'	=> 'Ejecutar envío de recordatorios por correoE',
'LBL_OOTB_CLEANUP_QUEUE' => 'Vaciar cola de tareas',

// List Labels
'LBL_LIST_JOB_INTERVAL' => 'Intervalo:',
'LBL_LIST_LIST_ORDER' => 'Tareas programadas:',
'LBL_LIST_NAME' => 'Tarea programada:',
'LBL_LIST_RANGE' => 'Período:',
'LBL_LIST_REMOVE' => 'Quitar:',
'LBL_LIST_STATUS' => 'Estado:',
'LBL_LIST_TITLE' => 'Lista de tareas programadas:',
'LBL_LIST_EXECUTE_TIME' => 'Se ejecutará:',
// human readable:
'LBL_EVERY' => 'Cada',
'LBL_RANGE' => 'a',
'LBL_SUN' => 'Domingo',
'LBL_MON' => 'Lunes',
'LBL_TUE' => 'Martes',
'LBL_WED' => 'Miércoles',
'LBL_THU' => 'Jueves',
'LBL_FRI' => 'Viernes',
'LBL_SAT' => 'Sábado',
'LBL_ALL'	=> 'Todos los días ',
'LBL_EVERY_DAY'	=> 'Todos los días ',
'LBL_AT_THE'	=> 'At the ',
'LBL_EVERY'		=> 'Cada ',
'LBL_FROM'		=> 'Desde ',
'LBL_ON_THE'	=> 'En la ',
'LBL_RANGE'		=> ' hasta ',
'LBL_AT' 		=> ' at ',
'LBL_IN'		=> ' en ',
'LBL_AND'		=> ' y ',
'LBL_MINUTES'	=> ' minutos ',
'LBL_HOUR'		=> ' horas',
'LBL_HOUR_SING'	=> ' hora',
'LBL_MONTH'		=> ' mes',
'LBL_OFTEN'		=> ' Tan a menudo como sea posible.',
'LBL_MIN_MARK'	=> ' minute mark',

// crontabs
'LBL_MINS' => 'min',
'LBL_HOURS' => 'hrs',
'LBL_DAY_OF_MONTH' => 'fecha',
'LBL_MONTHS' => 'mes',
'LBL_DAY_OF_WEEK' => 'día',
'LBL_CRONTAB_EXAMPLES' => 'Utiliza la notación estándar de crontab.',
'LBL_CRONTAB_SERVER_TIME_PRE' =>  'Las tareas programadas se ejecutan en base a la zona horaria del servidor (',
'LBL_CRONTAB_SERVER_TIME_POST' => '). Por favor, especifique la hora de ejecución de acuerdo con ésta.',

// Labels
'LBL_ALWAYS' => 'Siempre',
'LBL_CATCH_UP' => 'Ejecutar si se omite',
'LBL_CATCH_UP_WARNING' => 'Desmarcar si la ejecución de la tarea programada puede tomar mucho tiempo.',
'LBL_DATE_TIME_END' => 'Fecha y hora fin',
'LBL_DATE_TIME_START' => 'Fecha y hora inicio',
'LBL_INTERVAL' => 'Intervalo',
'LBL_JOB' => 'Tarea programada',
'LBL_JOB_URL' => 'URL de tarea',
'LBL_LAST_RUN' => 'Ultima ejecución exitosa',
'LBL_MODULE_NAME' => 'Programador Sugar',
'LBL_MODULE_TITLE' => 'Tareas programadas',
'LBL_NAME' => 'Nombre tarea',
'LBL_NEVER' => 'Nunca',
'LBL_NEW_FORM_TITLE' => 'Crear tarea programada',
'LBL_PERENNIAL' => 'perpetuo',
'LBL_SEARCH_FORM_TITLE' => 'Buscar tareas programadas',
'LBL_SCHEDULER' => 'Tarea programada:',
'LBL_STATUS' => 'Estado',
'LBL_TIME_FROM' => 'Activa desde',
'LBL_TIME_TO' => 'Activa hasta',
'LBL_WARN_CURL_TITLE' => 'Aviso cURL:',
'LBL_WARN_CURL' => 'Aviso:',
'LBL_WARN_NO_CURL' => 'Este sistema no tiene las librerías cURL habilitadas/compiladas en el módulo PHP (--with-curl=/path/to/curl_library).  Póngase en contacto con el Administrador para resolver el problema. Sin estas librerías no se pueden programar las tareas.',
'LBL_BASIC_OPTIONS' => 'Configuración básica',
'LBL_ADV_OPTIONS'		=> 'Opciones avanzadas',
'LBL_TOGGLE_ADV' => 'Mostrar opciones avanzadas',
'LBL_TOGGLE_BASIC' => 'Mostrar opciones básicas',
// Links
'LNK_LIST_SCHEDULER' => 'Tareas programadas',
'LNK_NEW_SCHEDULER' => 'Crear tarea programada',
'LNK_LIST_SCHEDULED' => 'Tareas programadas',
// Messages
'SOCK_GREETING' => "\nEste es el interfaz del servicio de programación de tareas de SugarCRM. \n[ Comandos disponibles: start|restart|shutdown|status ]\nPara salir escriba 'quit'.  Para detener el servicio escriba 'shutdown'.\n",
  'NTC_DELETE_CONFIRMATION' => '¿Está seguro de borrar este registro?',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para borrar la tarea programada.',
  'NTC_STATUS' => 'Las tareas programadas inactivas no se mostrarán en las listas desplegables',
  'NTC_LIST_ORDER' => 'Define el orden en que aparecerán las tareas programadas en las listas desplegables',
'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Para configurar tareas programadas en Windows',
'LBL_CRON_INSTRUCTIONS_LINUX' => 'Para configurar Crontab',
'LBL_CRON_LINUX_DESC' => 'Nota: para ejecutar tareas programadas, agregue esta línea a su archivo crontab: ',
'LBL_CRON_WINDOWS_DESC' => 'Nota: para ejecutar tareas programadas, escriba un archivo .bat que incluya los siguientes comandos: ',
'LBL_NO_PHP_CLI' => 'Si su servidor no tiene disponible el binario PHP, se puede usar wget o curl  para ejecutar sus Tareas. <br>para wget: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;wget --quiet --non-verbose '.$sugar_config['site_url'].'/cron.php</b><br>para curl: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;curl --silent '.$sugar_config['site_url'].'/cron.php',
// Subpanels
'LBL_JOBS_SUBPANEL_TITLE' => 'Tareas activas',
'LBL_EXECUTE_TIME' => 'Hora Ejecución',
//jobstrings
'LBL_REFRESHJOBS' => 'Recargar tareas',
'LBL_POLLMONITOREDINBOXES' => 'Revisar correo entrante',
'LBL_PERFORMFULLFTSINDEX' => 'Generar índice para búsquedas en campos de texto',
'LBL_RUNMASSEMAILCAMPAIGN' => 'Proceso nocturno de campañas de correo masivo',
'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Proceso nocturno de manejo de correos de campaña que han sido devueltos',
'LBL_PRUNEDATABASE' => 'Reducir base de datos el primero del mes',
'LBL_TRIMTRACKER' => 'Reducir tablas de monitorización',
'LBL_SENDEMAILREMINDERS'=> 'Ejecutar envío de recordatorios por correoE',
'LBL_CLEANJOBQUEUE' => 'Vaciar cola de tareas',

);

?>
