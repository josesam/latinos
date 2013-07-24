<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
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
 * $Id: sp_ve.lang.php,v 1.8 2012/04/23 10:45:29 carlose Exp $
 * Source: SugarCRM 6.4.3
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Actividades',
  'LBL_MODULE_TITLE' => 'Actividades: Inicio',
  'LBL_SEARCH_FORM_TITLE' => 'Buscar Actividades',
  'LBL_LIST_FORM_TITLE' => 'Lista de actividades',
  'LBL_LIST_SUBJECT' => 'Asunto',
  'LBL_LIST_CONTACT' => 'Contacto',
  'LBL_LIST_RELATED_TO' => 'Relacionado con',
  'LBL_LIST_DATE' => 'Fecha',
  'LBL_LIST_TIME' => 'Hora inicio',
  'LBL_LIST_CLOSE' => 'Cerrar',
  'LBL_SUBJECT' => 'Asunto:',
  'LBL_STATUS' => 'Estado:',
  'LBL_LOCATION' => 'Lugar:',
  'LBL_DATE_TIME' => 'Fecha y hora inicio:',
  'LBL_DATE' => 'Fecha inicio:',
  'LBL_TIME' => 'Hora inicio:',
  'LBL_DURATION' => 'Duración:',
  'LBL_HOURS_MINS' => '(horas/minutos)',
  'LBL_CONTACT_NAME' => 'Nombre contacto: ',
  'LBL_MEETING' => 'Reunión:',
  'LBL_DESCRIPTION_INFORMATION' => 'Información adicional',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_COLON' => ':',
  'LNK_NEW_CALL' => 'Registrar llamada',
  'LNK_NEW_MEETING' => 'Programar reunión',
  'LNK_NEW_TASK' => 'Crear tarea',
  'LNK_NEW_NOTE' => 'Crear Nota o agregar Adjunto',
  'LNK_NEW_EMAIL' => 'Archivar correo',
  'LNK_CALL_LIST' => 'Ver llamadas',
  'LNK_MEETING_LIST' => 'Ver reuniones',
  'LNK_TASK_LIST' => 'Ver tareas',
  'LNK_NOTE_LIST' => 'Ver notas',
  'LNK_EMAIL_LIST' => 'Ver correos',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para borrar la cuenta.',
  'NTC_REMOVE_INVITEE' => '¿Está seguro de excluír de la reunión a este asistente?',
  'LBL_INVITEE' => 'Asistentes',
  'LBL_LIST_DIRECTION' => 'Dirección',
  'LBL_DIRECTION' => 'Dirección',
  'LNK_NEW_APPOINTMENT' => 'Crear Cita',
  'LNK_VIEW_CALENDAR' => 'Ver agenda',
  'LBL_OPEN_ACTIVITIES' => 'Actividades pendientes',
  'LBL_HISTORY' => 'Historia',
  'LBL_UPCOMING' => 'Mis próximas actividades',
  'LBL_TODAY' => 'hasta ',
  'LBL_NEW_TASK_BUTTON_TITLE' => 'Crear tarea',
  'LBL_NEW_TASK_BUTTON_KEY' => 'N',
  'LBL_NEW_TASK_BUTTON_LABEL' => 'Crear tarea',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Programar reunión',
  'LBL_SCHEDULE_MEETING_BUTTON_KEY' => 'M',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Programar reunión',
  'LBL_SCHEDULE_CALL_BUTTON_TITLE' => 'Registrar llamada',
  'LBL_SCHEDULE_CALL_BUTTON_KEY' => 'C',
  'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Registrar llamada',
  'LBL_NEW_NOTE_BUTTON_TITLE' => 'Crear nota',
  'LBL_NEW_NOTE_BUTTON_KEY' => 'T',
  'LBL_NEW_NOTE_BUTTON_LABEL' => 'Crear nota',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archivar correoE',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archivar correoE',
  'LBL_LIST_STATUS' => 'Estado',
  'LBL_LIST_DUE_DATE' => 'Fecha vencimiento',
  'LBL_LIST_LAST_MODIFIED' => 'Ultima modificación',
  'NTC_NONE_SCHEDULED' => 'Ninguna actividad programada.',
  'appointment_filter_dom' => 
  array (
    'today' => 'hoy',
    'tomorrow' => 'mañana',
    'this Saturday' => 'este Sábado',
    'next Saturday' => 'la próxima semana',
    'last this_month' => 'el fin de mes',
    'last next_month' => 'el fin del próximo mes',
  ),
  'LNK_IMPORT_NOTES' => 'Importar notas',
  'LNK_IMPORT_CALLS' => 'Importar llamadas',
  'LNK_IMPORT_MEETINGS' => 'Importar reuniones',
  'LNK_IMPORT_TASKS' => 'Importar tareas',
  'NTC_NONE' => 'Ninguna',
  'LBL_ACCEPT_THIS' => '¿Acepta?',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Actividades pendientes',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Asignado a',

	'LBL_ACCEPT' => 'Aceptar' /*for 508 compliance fix*/,
);


?>
