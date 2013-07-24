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
 * $Id: sp_ve.lang.php,v 2.1 2012/10/23 15:20:29 carlose Exp $
 * Source: SugarCRM 6.5.6
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Llamadas',
  'LBL_MODULE_TITLE' => 'Llamadas: Inicio',
  'LBL_SEARCH_FORM_TITLE' => 'Buscar Llamadas',
  'LBL_LIST_FORM_TITLE' => 'Lista de llamadas',
  'LBL_NEW_FORM_TITLE' => 'Crear cita',
  'LBL_LIST_CLOSE' => 'Cerrar',
  'LBL_LIST_SUBJECT' => 'Asunto',
  'LBL_LIST_CONTACT' => 'Contacto',
  'LBL_LIST_RELATED_TO' => 'Relacionada con',
  'LBL_LIST_DATE' => 'Fecha inicio',
  'LBL_LIST_TIME' => 'Hora inicio',
  'LBL_LIST_DURATION' => 'Duración',
  'LBL_LIST_DIRECTION' => 'Dirección',
  'LBL_SUBJECT' => 'Asunto:',
  'LBL_REMINDER' => 'Recordatorios:',
    'LBL_REMINDER_POPUP' => 'Emergente',
    'LBL_REMINDER_EMAIL' => 'CorreoE',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Correo a participantes',
    'LBL_EMAIL_REMINDER' => 'Recordatorio por correoE',
    'LBL_EMAIL_REMINDER_TIME' => 'Hora recordatorio correoE',
    'LBL_EMAIL_REMINDER_SENT' => 'Recordatorio enviado',
  'LBL_CONTACT_NAME' => 'Contacto:',
  'LBL_DESCRIPTION_INFORMATION' => 'Información adicional',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_STATUS' => 'Estado:',
  'LBL_DIRECTION' => 'Dirección:',
  'LBL_DATE' => 'Fecha inicio:',
  'LBL_DURATION' => 'Duración:',
  'LBL_DURATION_HOURS' => 'Duración horas:',
  'LBL_DURATION_MINUTES' => 'Duración minutos:',
  'LBL_HOURS_MINUTES' => '(horas/minutos)',
  'LBL_CALL' => 'Llamada:',
  'LBL_DATE_TIME' => 'Fecha y hora inicio:',
  'LBL_TIME' => 'Hora inicio:',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_COLON' => ':',
  'LNK_NEW_CALL' => 'Registrar Llamada',
  'LNK_NEW_MEETING' => 'Programar Reunión',
  'LNK_CALL_LIST' => 'Ver Llamadas',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para borrar la cuenta.',
  'NTC_REMOVE_INVITEE' => '¿Está seguro de excluír este participante de la llamada?',
  'LBL_INVITEE' => 'Participantes',
  'LBL_RELATED_TO' => 'Relacionado con:',
  'LNK_NEW_APPOINTMENT' => 'Crear actividad',
  'LBL_SCHEDULING_FORM_TITLE' => 'Programación',
  'LBL_ADD_INVITEE' => 'Agregar participante',
  'LBL_ADD_PARENT_INVITEE' => 'Agregar persona Relacionada a los invitados',
  'LBL_NAME' => 'Nombre',
  'LBL_FIRST_NAME' => 'Nombre',
  'LBL_LAST_NAME' => 'Apellido',
  'LBL_EMAIL' => 'CorreoE',
  'LBL_PHONE' => 'Teléfono',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Guardar y enviar invitaciones',
  'LBL_SEND_BUTTON_TITLE' => 'Guardar y enviar invitaciones [Alt+I]',
  'LBL_DATE_END' => 'Fecha finalización',
  'LBL_TIME_END' => 'Hora finalización',
  'LBL_REMINDER_TIME' => 'Tiempo recordatorio',
  'LBL_SEARCH_BUTTON' => 'Buscar',
  'LBL_ACTIVITIES_REPORTS' => 'Reporte de actividades',
  'LBL_ADD_BUTTON' => 'Agregar',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Llamadas',
  'LBL_LOG_CALL' => 'Registrar Llamada',
  'LNK_SELECT_ACCOUNT' => 'Seleccionar cuenta',
  'LNK_NEW_ACCOUNT' => 'Crear Cuenta',
  'LNK_NEW_OPPORTUNITY' => 'Crear oportunidad',
  'LBL_DEL' => 'Bor',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Interesados',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
  'LBL_USERS_SUBPANEL_TITLE' => 'Usuarios',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_MEMBER_OF' => 'Asociada a',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notas',
   'LBL_LIST_ASSIGNED_TO_NAME' => 'Asignado a',
   'LBL_LIST_MY_CALLS' => 'Mis llamadas',
   'LBL_SELECT_FROM_DROPDOWN' => 'Por favor seleccione de la lista desplegable Relacionada con.',
   'LBL_CALL_INFORMATION' => 'Resumen',
  'LBL_ASSIGNED_TO_NAME' => 'Asignado a',
  'LBL_ASSIGNED_TO_ID' => 'Usuario asignado',
  'NOTICE_DURATION_TIME' => 'El tiempo de duración debe ser mayor que 0',
    'LBL_REMOVE' => 'bor',
   'LNK_IMPORT_CALLS' => 'Importar llamadas',
    'LBL_ACCEPT_STATUS' => 'Status aceptación',
    'LBL_ACCEPT_LINK' => 'Enlace aceptación',
    //For export labels
    'LBL_PARENT_ID' => 'ID padre',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'ID Modificado por',
    'LBL_EXPORT_CREATED_BY' => 'ID Creado por',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID Asignado a',
    'LBL_EXPORT_DATE_START' => 'Fecha y hora de inicio',
    'LBL_EXPORT_PARENT_TYPE' => 'Relacionado al módulo',
    'LBL_EXPORT_REMINDER_TIME' =>'Recordatorio (en minutos)',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Crear un invitado',
    'LBL_CREATE_CONTACT' => 'Como contacto',
    'LBL_CREATE_LEAD' => 'Como interesado',
    'LBL_CREATE_AND_ADD' => 'Crear y agregar',
    'LBL_CANCEL_CREATE_INVITEE' => 'Cancelar',
    'LBL_EMPTY_SEARCH_RESULT' => 'No se encontraron resultados. Favor crear un invitado debajo.',
    'LBL_NO_ACCESS' => 'No tiene acceso para crear $module',
    
    'LBL_REPEAT_TYPE' => 'Tipo de repetición',
    'LBL_REPEAT_INTERVAL' => 'Intervalo repetición',
    'LBL_REPEAT_DOW' => 'Repeat Dow',
    'LBL_REPEAT_UNTIL' => 'Repetir hasta',
    'LBL_REPEAT_COUNT' => 'Número de repeticiones',
    'LBL_REPEAT_PARENT_ID' => 'ID padre repetición',
    'LBL_RECURRING_SOURCE' => 'Origen repetición',
    
    'LBL_SYNCED_RECURRING_MSG' => 'Esta llamada se originó en otro sistema y fue sincronizada con Sugar. Los cambios deben hacerse en la aplicación original y luego podrían volver a sincronizarse.',
    'LBL_RELATED_TO' => 'Relacionada con:',

);

?>
