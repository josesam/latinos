<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/**
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2011 SugarCRM Inc.
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
 * $Id: sp_ve.lang.php,v 1.8 2011/07/10 10:20:29 carlose Exp $
 * Source: SugarCRM 6.2
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array (
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para borrar la cuenta.',
  'LBL_ACCOUNT_ID' => 'ID Cuenta',
  'LBL_ACCOUNT_NAME' => 'Nombre Cuenta:',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Fallas',
  'LBL_CASE' => 'Caso:',
  'LBL_CASE_NUMBER' => 'Número de Caso:',
  'LBL_CASE_SUBJECT' => 'Asunto Caso:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
  'LBL_CONTACT_CASE_TITLE' => 'Contacto-Caso:',
  'LBL_CONTACT_NAME' => 'Nombre Contacto:',
  'LBL_CONTACT_ROLE' => 'Rol:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Casos',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
  'LBL_INVITEE' => 'Contactos',
  'LBL_LIST_ACCOUNT_NAME' => 'Nombre Cuenta',
  'LBL_LIST_CLOSE' => 'Cerrar',
  'LBL_LIST_FORM_TITLE' => 'Lista de casos',
  'LBL_LIST_LAST_MODIFIED' => 'Última Modificación',
  'LBL_LIST_MY_CASES' => 'Mis Casos Abiertos',
  'LBL_LIST_NUMBER' => 'Núm.',
  'LBL_LIST_PRIORITY' => 'Prioridad',
  'LBL_LIST_STATUS' => 'Estado',
  'LBL_LIST_SUBJECT' => 'Asunto',
  'LBL_MEMBER_OF' => 'Cuenta',
  'LBL_MODULE_NAME' => 'Casos',
  'LBL_MODULE_TITLE' => 'Casos: Inicio',
  'LBL_NEW_FORM_TITLE' => 'Nuevo Caso',
  'LBL_NUMBER' => 'Número:',
  'LBL_PRIORITY' => 'Prioridad:',
  'LBL_RESOLUTION' => 'Solución:',
  'LBL_SEARCH_FORM_TITLE' => 'Buscar Casos',
  'LBL_STATUS' => 'Estado:',
  'LBL_SUBJECT' => 'Asunto:',
  'LBL_SYSTEM_ID' => 'ID Sistema',
  'LNK_CASE_LIST' => 'Ver casos',
  'LNK_NEW_CASE' => 'Crear Caso',
  'LNK_IMPORT_CASES' => 'Importar casos',
  'NTC_REMOVE_FROM_BUG_CONFIRMATION' => '¿Está seguro de quitar este caso de esta falla?',
  'NTC_REMOVE_INVITEE' => '¿Está seguro de quitar este contacto del caso?',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Asignado a',
  'LBL_LIST_DATE_CREATED' => 'Fecha creación',
	'LBL_ASSIGNED_TO_NAME' => 'Asignado a',
	'LBL_TYPE'=>'Tipo',
	'LBL_WORK_LOG'=>'Work Log',
	'LNK_IMPORT_CASES' => 'Importar casos',
    'LBL_CREATED_USER' => 'Usuario creado',
    'LBL_MODIFIED_USER' => 'Usuario modificado',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Proyectos',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proyectos',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' 	=> 'Documentos',
  'LBL_CASE_INFORMATION' => 'Resumen',
    //For export labels
    'LBL_MODIFIED_BY_NAME_OWNER' => 'Modified By Name Owner',
    'LBL_MODIFIED_BY_NAME_MOD' => 'Modified By Name Mod',
    'LBL_CREATED_BY_NAME_OWNER' => 'Created By Name Owner',
    'LBL_CREATED_BY_NAME_MOD' => 'Created By Name Mod',
    'LBL_ASSIGNED_USER_NAME_OWNER' => 'Assigned User Name Owner',
    'LBL_ASSIGNED_USER_NAME_MOD' => 'Assigned User Name Mod',
    'LBL_TEAM_COUNT_OWNER' => 'Team Count Owner',
    'LBL_TEAM_COUNT_MOD' => 'Team Count Mod',
    'LBL_TEAM_NAME_OWNER' => 'Team Name Owner',
    'LBL_TEAM_NAME_MOD' => 'Team Name Mod',
    'LBL_ACCOUNT_NAME_OWNER' => 'Account Name Owner',
    'LBL_ACCOUNT_NAME_MOD' => 'Account Name Mod',
    'LBL_MODIFIED_USER_NAME' => 'Modified User Name',
    'LBL_MODIFIED_USER_NAME_OWNER' => 'Modified User Name Owner',
    'LBL_MODIFIED_USER_NAME_MOD' => 'Modified User Name Mod',
    'LBL_PORTAL_VIEWABLE' => 'Visible en el portal',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID Asignado a',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'ID Modificado por',
    'LBL_EXPORT_CREATED_BY' => 'ID Creado por',
    'LBL_EXPORT_CREATED_BY_NAME' => 'Nombre usuario Creado por',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Nombre usuario asignado',
    'LBL_EXPORT_TEAM_COUNT' => 'Team Count',

    // SNIP
	'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Related Contacts\' Emails',
);


?>
