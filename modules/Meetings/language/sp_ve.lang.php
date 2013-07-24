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
 * $Id: sp_ve.lang.php,v 2.1 2012/10/23 16:20:29 carlose Exp $
 * Source: SugarCRM 6.5.6
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array (
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para borrar la reunión.',
  'LBL_MODULE_NAME' => 'Reuniones',
  'LBL_MODULE_TITLE' => 'Reuniones: Inicio',
	'LBL_ACCEPT_THIS'=>'¿Acepta?',
  'LBL_SEARCH_FORM_TITLE' => 'Buscar reuniones',
  'LBL_LIST_FORM_TITLE' => 'Lista de reuniones',
  'LBL_NEW_FORM_TITLE' => 'Programar reunión',
  'LBL_SCHEDULING_FORM_TITLE' => 'Programación',
  'LBL_LIST_SUBJECT' => 'Asunto',
  'LBL_LIST_CONTACT' => 'Contacto',
  'LBL_LIST_MY_MEETINGS' => 'Mis Reuniones',
  'LBL_LIST_RELATED_TO' => 'Relacionado con',
  'LBL_LIST_DATE' => 'Fecha Inicio',
  'LBL_LIST_DIRECTION' => 'Dirección',
  'LBL_LIST_TIME' => 'Hora Inicio',
  'LBL_LIST_CLOSE' => 'Cerrar',
  'LBL_SUBJECT' => 'Asunto: ',
  'LBL_STATUS' => 'Estado:',
   'LBL_TYPE' => 'Tipo reunión',
   'LBL_PASSWORD' => 'Contraseña reunión',
   'LBL_URL' => 'Iniciar/Asistir a reunión',
    'LBL_HOST_URL' => 'URL Anfitrión',
    'LBL_DISPLAYED_URL' => 'Mostrar URL',
   'LBL_CREATOR' => 'Creador reunión',
   'LBL_EXTERNALID' => 'ID aplicación externa',
  'LBL_LOCATION' => 'Lugar:',
  'LBL_DATE_TIME' => 'Fecha y Hora Inicio:',
  'LBL_DATE' => 'Fecha Inicio:',
  'LBL_TIME' => 'Hora Inicio:',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_DURATION' => 'Duración:',
  'LBL_DURATION_HOURS' => 'Duración horas:',
  'LBL_DURATION_MINUTES' => 'Duración minutos:',
  'LBL_HOURS_MINS' => '(horas/minutos)',
  'LBL_CONTACT_NAME' => 'Contacto: ',
  'LBL_MEETING' => 'Reunión:',
  'LBL_DESCRIPTION_INFORMATION' => 'Información adicional',
  'LBL_DESCRIPTION' => 'Descripción:',
    'LBL_DIRECTION' => 'Dirección:',
  'LBL_COLON' => ':',
  'LNK_NEW_MEETING' => 'Programar Reunión',
	'LNK_IMPORT_MEETINGS' => 'Importar reuniones',
  'LNK_MEETING_LIST' => 'Ver reuniones',
  'LNK_NEW_APPOINTMENT' => 'Crear actividad',
  'NTC_REMOVE_INVITEE' => '¿Está seguro de excluír a este participante de la reunión?',
  'LBL_INVITEE' => 'Participantes',
  'LBL_ADD_INVITEE' => 'Agregar participante',
  'LBL_ADD_PARENT_INVITEE' => 'Agregar persona Relacionada a los participantes',
  'LBL_NAME' => 'Nombre',
  'LBL_FIRST_NAME' => 'Nombre',
  'LBL_LAST_NAME' => 'Apellido',
  'LBL_EMAIL' => 'CorreoE',
  'LBL_PHONE' => 'Teléfono oficina',
  'LBL_SUBJECT' => 'Asunto:',
  'LBL_REMINDER' => 'Recordatorios:',
    'LBL_REMINDER_POPUP' => 'Emergente',
    'LBL_REMINDER_EMAIL' => 'CorreoE',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Correo a participantes',
    'LBL_EMAIL_REMINDER' => 'Recordatorio por correoE',
    'LBL_EMAIL_REMINDER_TIME' => 'Hora recordatorio correoE',
    'LBL_EMAIL_REMINDER_SENT' => 'Recordatorio enviado',
    'LBL_REMOVE' => 'bor',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Guardar y enviar invitaciones',
  'LBL_SEND_BUTTON_TITLE' => 'Guardar y enviar invitaciones [Alt+I]',
  'LBL_MODIFIED_BY' => 'Modificado por',
  'LBL_CREATED_BY' => 'Creado por',
  'LBL_DATE_END' => 'Fecha final',
  'LBL_SEARCH_BUTTON' => 'Buscar',
  'LBL_ADD_BUTTON' => 'Agregar',
  'LBL_DEL' => 'Borra',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Reuniones',
	'LBL_ACTIVITIES_REPORTS' => 'Reporte actividades',
    'LBL_PARENT_TYPE' => 'Tipo padre',
    'LBL_PARENT_ID' => 'ID Padre',
  'LBL_LIST_STATUS' => 'Estado',
  'LBL_LIST_DUE_DATE' => 'Fecha vencimiento',
  'LBL_LIST_DATE_MODIFIED' => 'Fecha modificación',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Interesados',
  'LBL_USERS_SUBPANEL_TITLE' => 'Usuarios',

  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notas',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
	'LBL_SEQUENCE' => 'Secuencia actualización reuniones',
  'LBL_IMPORT_MEETINGS' => 'Importar reuniones',
  'LBL_MEETING_INFORMATION' => 'Resumen',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Asignado a',
  'LBL_ASSIGNED_TO_NAME' => 'Asignado a:',
	'LBL_LIST_JOIN_MEETING' => 'Asistir a reunión',
	'LBL_JOIN_EXT_MEETING' => 'Asistir a reunión',
	'LBL_HOST_EXT_MEETING' => 'Comenzar reunión',
    'LBL_ACCEPT_STATUS' => 'Status aceptación',
    'LBL_ACCEPT_LINK' => 'Enlace aceptación',

    // You are not invited to the meeting messages
    'LBL_EXTNOT_HEADER' => 'Error: No invitado',
    'LBL_EXTNOT_MAIN' => 'No puede asistir a esta reunión porque no está en la lista de invitados.',
    'LBL_EXTNOT_RECORD_LINK' => 'Ver reunión',
    'LBL_EXTNOT_GO_BACK' => 'Regresar al registro anterior',

    //cannot start messages
    'LBL_EXTNOSTART_HEADER' => 'Error: No puede comenzar reunión',
    'LBL_EXTNOSTART_MAIN' => 'No puede comenzar esta reunión porque no es el dueño de la misma o Administrador.',
  //For export labels
    'LBL_EXPORT_JOIN_URL' => 'Url asistir',
    'LBL_EXPORT_HOST_URL' => 'Url anfitrión',
    'LBL_EXPORT_DISPLAYED_URL' => 'Url mostrada',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID Asignado a',
    'LBL_EXPORT_EXTERNAL_ID' => 'ID Externa',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Nombre usuario asignado',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'ID Modificado por',
    'LBL_EXPORT_CREATED_BY' => 'ID Creado por',

    'LBL_EXPORT_DATE_START' => 'Fecha y hora inicio',
    'LBL_EXPORT_DATE_END' => 'Fecha y hora final',
    'LBL_EXPORT_PARENT_TYPE' => 'Relacionado con',
    'LBL_EXPORT_PARENT_ID' => 'ID Padre',
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
    
    'LBL_SYNCED_RECURRING_MSG' => 'Esta reunión se originó en otro sistema y fue sincronizada con Sugar. Los cambios deben hacerse en la aplicación original y luego podrían volver a sincronizarse.',
);

?>
