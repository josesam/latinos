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
 * $Id: sp_ve.lang.php,v 1.9 2012/02/13 12:20:29 carlose Exp $
 * Source: SugarCRM 6.5
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Calendario',
  'LBL_MODULE_TITLE' => 'Calendario',
  'LNK_NEW_CALL' => 'Programar llamada',
  'LNK_NEW_MEETING' => 'Programar reunión',
  'LNK_NEW_APPOINTMENT' => 'Nueva actividad',
  'LNK_NEW_TASK' => 'Crear tarea',
  'LNK_CALL_LIST' => 'Ver llamadas',
  'LNK_MEETING_LIST' => 'Ver reuniones',
  'LNK_TASK_LIST' => 'Ver tareas',
  'LNK_VIEW_CALENDAR' => 'Hoy',
	'LNK_IMPORT_CALLS' => 'Importar llamadas',
	'LNK_IMPORT_MEETINGS' => 'Importar reuniones',
	'LNK_IMPORT_TASKS' => 'Importar tareas',
  'LBL_MONTH' => 'Mes',
  'LBL_DAY' => 'Día',
  'LBL_YEAR' => 'Año',
  'LBL_WEEK' => 'Semana',
  'LBL_PREVIOUS_MONTH' => 'Mes anterior',
  'LBL_PREVIOUS_DAY' => 'Día anterior',
  'LBL_PREVIOUS_YEAR' => 'Año anterior',
  'LBL_PREVIOUS_WEEK' => 'Semana anterior',
  'LBL_NEXT_MONTH' => 'Próximo mes ',
  'LBL_NEXT_DAY' => 'Próximo día',
  'LBL_NEXT_YEAR' => 'Próximo año',
  'LBL_NEXT_WEEK' => 'Próxima semana',
  'LBL_AM' => 'AM',
  'LBL_PM' => 'PM',
  'LBL_SCHEDULED' => 'Programada',
  'LBL_BUSY' => 'Ocupado',
  'LBL_CONFLICT' => 'Conflicto',
  'LBL_USER_CALENDARS' => 'Calendarios de usuario',
  'LBL_SHARED' => 'Compartido',
  'LBL_PREVIOUS_SHARED' => 'Anterior',
  'LBL_NEXT_SHARED' => 'Próximo',
  'LBL_SHARED_CAL_TITLE' => 'Calendario compartido',
  'LBL_USERS' => 'Usuarios',
  'LBL_REFRESH' => 'Actualizar',
	'LBL_EDIT_USERLIST' => 'Usuarios',
  'LBL_SELECT_USERS' => 'Seleccionar usuarios para ver sus calendarios',
  'LBL_FILTER_BY_TEAM' => 'Filtrar lista de usuarios por equipo:',
	'LBL_ASSIGNED_TO_NAME' => 'Asignado a',
	'LBL_DATE' => 'Fecha/Hora inicio',  
	'LBL_CREATE_MEETING' => 'Programar reunión',
	'LBL_CREATE_CALL' => 'Registrar llamada',  
	'LBL_HOURS_ABBREV' => 'h',
	'LBL_MINS_ABBREV' => 'm',

	'LBL_YES' => 'Si',
	'LBL_NO' => 'No',
	'LBL_SETTINGS' => 'Configuración',
	'LBL_CREATE_NEW_RECORD' => 'Crear actividad',
	'LBL_LOADING' => 'Cargando .....',
	'LBL_SAVING' => 'Guardando .....',
	'LBL_SENDING_INVITES' => 'Guardando y enviando invitaciones ....',
	'LBL_CONFIRM_REMOVE' => '¿Está seguro de quitar el registro?',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => '¿Está seguro de eliminar todas las repeticiones del evento?',
	'LBL_EDIT_RECORD' => 'Editar actividad',
	'LBL_ERROR_SAVING' => 'Error al guardar',
	'LBL_ERROR_LOADING' => 'Error al cargar',
	'LBL_GOTO_DATE' => 'Ir a fecha',
	'NOTICE_DURATION_TIME' => 'Duración debe ser mayor que 0',
	'LBL_STYLE_BASIC' => 'Básico',
	'LBL_STYLE_ADVANCED' => 'Avanzado',

	'LBL_INFO_TITLE' => 'Detalles adicionales',
	'LBL_INFO_DESC' => 'Descripción',
	'LBL_INFO_START_DT' => 'Fecha de inicio',
	'LBL_INFO_DUE_DT' => 'Fecha de vencimiento',
	'LBL_INFO_DURATION' => 'Duración',
	'LBL_INFO_NAME' => 'Asunto',
	'LBL_INFO_RELATED_TO' => 'Relacionado con',

	'LBL_NO_USER' => 'No hay coincidencia para campo: Asignado a',
	'LBL_SUBJECT' => 'Asunto',
	'LBL_DURATION' => 'Duración',
	'LBL_STATUS' => 'Estado',
	'LBL_DATE_TIME' => 'Fecha y hora',

	'LBL_SETTINGS_TITLE' => 'Configuración',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Mostrar franjas horarias en las vistas Día y Semana:',
	'LBL_SETTINGS_TIME_STARTS'=>'Hora inicio:', 
	'LBL_SETTINGS_TIME_ENDS'=>'Hora final:', 
	'LBL_SETTINGS_CALLS_SHOW' => 'Mostrar llamadas:',
	'LBL_SETTINGS_TASKS_SHOW' => 'Mostrar tareas:', 

	'LBL_SAVE_BUTTON' => 'Guardar',
	'LBL_DELETE_BUTTON' => 'Borrar',
	'LBL_APPLY_BUTTON' => 'Aplicar',
	'LBL_SEND_INVITES' => 'Guardar y enviar invitaciones',
	'LBL_CANCEL_BUTTON' => 'Cancelar',
	'LBL_CLOSE_BUTTON' => 'Cerrar',

	'LBL_GENERAL_TAB' => 'Detalles',
	'LBL_PARTICIPANTS_TAB' =>'Invitados',

	'LBL_REPEAT_TAB' => 'Repetición',	
	'LBL_REPEAT_TYPE' => 'Repetir',
	'LBL_REPEAT_INTERVAL' => 'Cada',
	'LBL_REPEAT_END' => 'Fin',	
	'LBL_REPEAT_END_AFTER' => 'Después de',
	'LBL_REPEAT_OCCURRENCES' => 'repeticiones',
	'LBL_REPEAT_END_BY' => 'El',	
	'LBL_REPEAT_DOW' => 'En',	
	'LBL_REPEAT_UNTIL' => 'Repetir hasta',
	'LBL_REPEAT_COUNT' => 'Número de repeticiones',
	'LBL_REPEAT_LIMIT_ERROR' => 'Su solicitud iba a crear más de $limit reuniones.',
	
	'LBL_EDIT_ALL_RECURRENCES' => 'Editar todas las repeticiones',
	'LBL_REMOVE_ALL_RECURRENCES' => 'Eliminar todas las repeticiones',
	
	'LBL_DATE_END_ERROR' => 'La fecha final es menor que la fecha de inicio',
);

$mod_list_strings = array (
  'dom_cal_weekdays' => 
  array (
    "Dom",
    "Lun",
    "Mar",
    "Mié",
    "Jue",
    "Vie",
    "Sáb",
  ),
  'dom_cal_weekdays_long' => 
  array (
    "Domingo",
    "Lunes",
    "Martes",
    "Miércoles",
    "Jueves",
    "Viernes",
    "Sábado",
  ),
  'dom_cal_month' => 
  array (
    "",
    "Ene",
    "Feb",
    "Mar",
    "Abr",
    "May",
    "Jun",
    "Jul",
    "Ago",
    "Sep",
    "Oct",
    "Nov",
    "Dic",
  ),
  'dom_cal_month_long' => 
  array (
    "",
    "Enero",
    "Febrero",
    "Marzo",
    "Abril",
    "Mayo",
    "Junio",
    "Julio",
    "Agosto",
    "Septiembre",
    "Octubre",
    "Noviembre",
    "Diciembre",
  ),
);


?>
