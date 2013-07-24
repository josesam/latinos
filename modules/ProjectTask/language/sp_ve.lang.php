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
  'LBL_MODULE_NAME' => 'Tareas de Proyecto',
  'LBL_MODULE_TITLE' => 'Tareas Proyecto: Inicio',
  'LBL_SEARCH_FORM_TITLE' => 'Buscar Tareas de Proyecto',
  'LBL_LIST_FORM_TITLE' => 'Lista de tareas de proyecto',
  'LBL_ID' => 'Id:',
  'LBL_PROJECT_TASK_ID' => 'Id Tarea de Proyecto:',
  'LBL_PROJECT_ID' => 'Id Proyecto',
  'LBL_DATE_ENTERED' => 'Fecha creación:',
  'LBL_DATE_MODIFIED' => 'Fecha modificación:',
  'LBL_ASSIGNED_USER_ID' => 'Asignado a',
  'LBL_ASSIGNED_USER_NAME' => 'Asignado a:',
  'LBL_MODIFIED_USER_ID' => 'Modificado por Id:',
  'LBL_CREATED_BY' => 'Creado por:',
  'LBL_TEAM_ID' => 'Equipo:',
  'LBL_NAME' => 'Nombre:',
  'LBL_STATUS' => 'Estado:',
  'LBL_DATE_DUE' => 'Fecha vencimiento:',
  'LBL_TIME_DUE' => 'Hora vencimiento:',
  'LBL_DATE_START' => 'Fecha inicio:',
  'LBL_TIME_START' => 'Hora inicio:',
  'LBL_PARENT_ID' => 'Proyecto:',
  'LBL_PRIORITY' => 'Prioridad:',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_ORDER_NUMBER' => 'Orden:',
  'LBL_TASK_NUMBER' => 'Número Tarea:',
  'LBL_TASK_ID' => 'Id Tarea:',
  'LBL_DEPENDS_ON_ID' => 'Depende de:',
  'LBL_MILESTONE_FLAG' => 'Hito:',

  'LBL_RESOURCE' => 'Recurso:',
  'LBL_PREDECESSORS' => 'Predecesoras:',
  'LBL_DATE_START' => 'Fecha inicio:',
  'LBL_DATE_FINISH' => 'Fecha fin:',
  'LBL_TIME_START' => 'Hora inicio:',
  'LBL_TIME_FINISH' => 'Hora fin:',
  'LBL_DURATION' => 'Duración:',
  'LBL_DURATION_UNIT' => 'Unidad de duración:',
  'LBL_ACTUAL_DURATION' => 'Duración real:',
  'LBL_PARENT_ID' => 'Proyecto:',
  'LBL_PARENT_TASK_ID' => 'Id Tarea Padre:',
  'LBL_PRIORITY' => 'Prioridad:',
  'LBL_DESCRIPTION' => 'Descripción:',

  'LBL_ESTIMATED_EFFORT' => 'Esfuerzo estimado (hrs):',
  'LBL_ACTUAL_EFFORT' => 'Esfuerzo real (hrs):',
  'LBL_UTILIZATION' => 'Dedicación (%):',
  'LBL_PERCENT_COMPLETE' => 'Progreso (%):',
  'LBL_DELETED' => 'Eliminada:',
  'LBL_LIST_ORDER_NUMBER' => 'Orden',
  'LBL_LIST_NAME' => 'Nombre',
  'LBL_LIST_DAYS' => 'días',
  'LBL_LIST_PARENT_NAME' => 'Proyecto',
  'LBL_PARENT_NAME' => 'Nombre Proyecto',
  'LBL_LIST_PERCENT_COMPLETE' => 'Progreso (%)',
  'LBL_LIST_STATUS' => 'Estado',
  'LBL_LIST_ASSIGNED_USER_ID' => 'Asignada a',
  'LBL_LIST_DATE_DUE' => 'Fecha vencimiento',
  'LBL_LIST_DATE_START' => 'Fecha inicio',
  'LBL_LIST_PRIORITY' => 'Prioridad',
  'LBL_LIST_CLOSE' => 'Cerrar',
  'LBL_PROJECT_NAME' => 'Nombre Proyecto',
  'LBL_LIST_PROJECT_NAME' => 'Proyectos',
  'LNK_NEW_PROJECT' => 'Crear Proyecto',
  'LNK_PROJECT_LIST' => 'Ver proyectos',
  'LNK_NEW_PROJECT_TASK' => 'Crear tarea de proyecto',
  'LNK_PROJECT_TASK_LIST' => 'Ver tareas de proyecto',
  'LBL_LIST_MY_PROJECT_TASKS' => 'Mis Tareas de Proyecto',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Tareas de Proyecto',
  'LBL_NEW_FORM_TITLE' => 'Nueva tarea de proyecto',
  'LBL_ACTIVITIES_TITLE' => 'Actividades',
  'LBL_HISTORY_TITLE' => 'Historia',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
  'DATE_JS_ERROR' => 'Por favor escriba una fecha que corresponda a la hora ingresada',

  'LBL_ASSIGNED_USER_NAME' => 'Asignado a',
  'LBL_PARENT_NAME' => 'Nombre proyecto',
  'LBL_LIST_PROJECT_NAME' => 'Proyectos',
	'LBL_EDITLAYOUT' => 'Editar diseño' /*for 508 compliance fix*/,

);

?>
