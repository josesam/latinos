<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*******************************************************************************
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
  'LBL_MODULE_NAME' => 'Seguimiento Fallas',
  'LBL_MODULE_TITLE' => 'Seguimiento de Fallas: Inicio',
  'LBL_SEARCH_FORM_TITLE' => 'Búsqueda Fallas',
  'LBL_LIST_FORM_TITLE' => 'Lista de fallas',
  'LBL_NEW_FORM_TITLE' => 'Nueva Falla',
  'LBL_CONTACT_BUG_TITLE' => 'Contacto-Falla:',
  'LBL_SUBJECT' => 'Asunto:',
  'LBL_BUG' => 'Falla:',
  'LBL_BUG_NUMBER' => 'Número de Falla:',
  'LBL_NUMBER' => 'Número:',
  'LBL_STATUS' => 'Estado:',
  'LBL_PRIORITY' => 'Prioridad:',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_CONTACT_NAME' => 'Nombre Contacto:',
  'LBL_BUG_SUBJECT' => 'Asunto Falla:',
  'LBL_CONTACT_ROLE' => 'Rol:',
  'LBL_LIST_NUMBER' => 'Núm.',
  'LBL_LIST_SUBJECT' => 'Asunto',
  'LBL_LIST_STATUS' => 'Estado',
  'LBL_LIST_PRIORITY' => 'Prioridad',
  'LBL_LIST_RELEASE' => 'Release',
  'LBL_LIST_RESOLUTION' => 'Calificación',
  'LBL_LIST_LAST_MODIFIED' => 'Ultima Modificación',
  'LBL_INVITEE' => 'Contactos',
  'LBL_TYPE' => 'Tipo:',
  'LBL_LIST_TYPE' => 'Tipo',
  'LBL_RESOLUTION' => 'Calificación:',
  'LBL_RELEASE' => 'Versión:',
  'LNK_NEW_BUG' => 'Reportar Falla',
  'LNK_BUG_LIST' => 'Ver Fallas',
  'LNK_IMPORT_BUGS' => 'Importar Fallas',
  'NTC_REMOVE_INVITEE' => '¿Está seguro de quitar este contacto de la falla?',
  'NTC_REMOVE_ACCOUNT_CONFIRMATION' => '¿Está seguro de quitar esta falla de la cuenta?',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para borrar la falla.',
  'LBL_LIST_MY_BUGS' => 'Fallas Asignadas a Mí',
  'LBL_BUG_INFORMATION' => 'Resumen de Falla',
  'LBL_FOUND_IN_RELEASE' => 'Encontrada en Versión',
  'LBL_FIXED_IN_RELEASE' => 'Arreglada en Versión',
  'LBL_WORK_LOG' => 'Trabajo Realizado',
  'LBL_SOURCE' => 'Fuente',
  'LBL_PRODUCT_CATEGORY' => 'Categoría Producto',
  'LBL_CREATED_BY' => 'Creado por:',
  'LBL_DATE_CREATED' => 'Fecha Creación:',
  'LBL_MODIFIED_BY' => 'Ultima Modificación:',
  'LBL_DATE_LAST_MODIFIED' => 'Fecha Modificación:',
  'LBL_LIST_EMAIL_ADDRESS' => 'Dirección Correo',
  'LBL_LIST_CONTACT_NAME' => 'Nombre Contacto',
  'LBL_LIST_ACCOUNT_NAME' => 'Nombre Cuenta',
  'LBL_LIST_PHONE' => 'Teléfono',
  'NTC_DELETE_CONFIRMATION' => '¿Está seguro de querer quitar este contacto de esta falla?',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Cuentas',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
  'LBL_CASES_SUBPANEL_TITLE' => 'Casos',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Seguimiento de Fallas',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documentos',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
  'LBL_SYSTEM_ID' => 'ID Sistema',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Asignado a',
	'LBL_ASSIGNED_TO_NAME' => 'Asignado a',
	'LBL_BUG_INFORMATION' => 'Resumen',
    //For export labels
	'LBL_FOUND_IN_RELEASE_NAME' => 'Nombre Encontrada en versión',
    'LBL_PORTAL_VIEWABLE' => 'Visible portal',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Nombre usuario asignado',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID Asignado a',
    'LBL_EXPORT_FIXED_IN_RELEASE_NAMR' => 'Nombre Solucionada en versión',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'ID Modificado por',
    'LBL_EXPORT_CREATED_BY' => 'ID Creado por',
);


?>
