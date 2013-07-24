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
  'LBL_MODULE_NAME' => 'Tareas',
  'LBL_TASK' => 'Tareas: ',
  'LBL_MODULE_TITLE' => ' Tareas: Inicio',
  'LBL_SEARCH_FORM_TITLE' => ' Buscar Tareas',
  'LBL_LIST_FORM_TITLE' => ' Lista de tareas',
  'LBL_NEW_FORM_TITLE' => ' Crear Tarea',
  'LBL_NEW_FORM_SUBJECT' => 'Asunto:',
  'LBL_NEW_FORM_DUE_DATE' => 'Fecha vencimiento:',
  'LBL_NEW_FORM_DUE_TIME' => 'Hora vencimiento:',
  'LBL_NEW_TIME_FORMAT' => '(24:00)',
  'LBL_LIST_CLOSE' => 'Cerrar',
  'LBL_LIST_SUBJECT' => 'Asunto',
  'LBL_LIST_CONTACT' => 'Contacto',
  'LBL_LIST_PRIORITY' => 'Prioridad',
  'LBL_LIST_RELATED_TO' => 'Relacionada con',
  'LBL_LIST_DUE_DATE' => 'Fecha vencimiento',
  'LBL_LIST_DUE_TIME' => 'Hora vencimiento',
  'LBL_SUBJECT' => 'Asunto:',
  'LBL_STATUS' => 'Estado:',
  'LBL_DUE_DATE' => 'Fecha vencimiento:',
  'LBL_DUE_TIME' => 'Hora vencimiento:',
  'LBL_PRIORITY' => 'Prioridad:',
  'LBL_COLON' => ':',
  'LBL_DUE_DATE_AND_TIME' => 'Fecha y hora vencimiento:',
  'LBL_START_DATE_AND_TIME' => 'Fecha y hora inicio:',
  'LBL_START_DATE' => 'Fecha inicio:',
  'LBL_START_TIME' => 'Hora inicio:',
  'DATE_FORMAT' => '(yyyy-mm-dd 24:00)',
  'LBL_NONE' => 'Ninguna',
  'LBL_CONTACT' => 'Contacto:',
  'LBL_PHONE' => 'Teléfono:',
  'LBL_EMAIL' => 'Correo:',
  'LBL_DESCRIPTION_INFORMATION' => 'Información adicional',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_NAME' => 'Nombre:',
  'LBL_CONTACT_NAME' => 'Nombre Contacto: ',
  'LBL_LIST_COMPLETE' => 'Completada:',
  'LBL_LIST_STATUS' => 'Estado:',
  'LBL_DATE_DUE_FLAG' => 'Sin fecha de vencimiento',
  'LBL_DATE_START_FLAG' => 'Sin fecha de inicio',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para borrar el contacto.',
  'ERR_INVALID_HOUR' => 'Por favor introduzca una hora entre 0 y 24',
  'LBL_DEFAULT_PRIORITY' => 'Media',
  'LBL_LIST_MY_TASKS' => 'Mis tareas pendientes',
  'LNK_NEW_TASK' => 'Crear tarea',
  'LNK_TASK_LIST' => 'Ver tareas',
  'LNK_IMPORT_TASKS' => 'Importar tareas',
  'LBL_CONTACT_FIRST_NAME' => 'Nombre contacto',
  'LBL_CONTACT_LAST_NAME' => 'Apellido contacto',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuario asignado',
  'LBL_ASSIGNED_TO_NAME'=>'Asignado a',
  'LBL_LIST_DATE_MODIFIED' => 'Fecha modificación',
  'LBL_CONTACT_ID' => 'ID contacto',
  'LBL_PARENT_ID' => 'ID Padre',
  'LBL_CONTACT_PHONE' => 'Teléfono contacto',
  'LBL_PARENT_NAME' => 'Tipo padre',
  'LBL_ACTIVITIES_REPORTS' => 'Reporte actividades',    
  'LBL_EDITLAYOUT' => 'Editar diseño' /*for 508 compliance fix*/,
  'LBL_TASK_INFORMATION' => 'Resumen',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notas',
  //For export labels
  'LBL_DATE_DUE' => 'Fecha vencimiento',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Nombre usuario asignado',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID Asignado a',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'ID Modificado por',
  'LBL_EXPORT_CREATED_BY' => 'ID Creado por',
  'LBL_EXPORT_PARENT_TYPE' => 'Relacionado al módulo',
  'LBL_EXPORT_PARENT_ID' => 'ID Relacionado a',
);


?>
