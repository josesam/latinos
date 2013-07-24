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
 * $Id: sp_ve.lang.php,v 2.1 2011/02/14 20:20:29 carlose Exp $
 * Source: SugarCRM 6.4
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array (
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para borrar la cuenta.',
  'LBL_ACCOUNT_ID' => 'ID Cuenta:',
  'LBL_CASE_ID' => 'ID Caso:',
  'LBL_CLOSE' => 'Cerrar:',
  'LBL_COLON' => ':',
  'LBL_CONTACT_ID' => 'ID Contacto:',
  'LBL_CONTACT_NAME' => 'Contacto:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Notas',
  'LBL_DESCRIPTION' => 'Descripción',
  'LBL_EMAIL_ADDRESS' => 'CorreoE:',
  'LBL_FILE_MIME_TYPE' => 'Tipo Mime',
  'LBL_FILE_URL' => 'URL Archivo',
  'LBL_FILENAME' => 'Archivo adjunto:',
  'LBL_LEAD_ID' => 'ID Interesado:',
  'LBL_LIST_CONTACT_NAME' => 'Contacto',
  'LBL_LIST_DATE_MODIFIED' => 'Última Modificación',
  'LBL_LIST_FILENAME' => 'Archivo adjunto',
  'LBL_LIST_FORM_TITLE' => 'Lista de Notas',
  'LBL_LIST_RELATED_TO' => 'Relacionada con',
  'LBL_LIST_SUBJECT' => 'Asunto',
  'LBL_LIST_STATUS' => 'Estado',
  'LBL_LIST_CONTACT' => 'Contacto',
  'LBL_MODULE_NAME' => 'Notas',
  'LBL_MODULE_TITLE' => 'Notas: Inicio',
  'LBL_NEW_FORM_TITLE' => 'Crear Nota o Agregar Adjunto',
  'LBL_NOTE_STATUS' => 'Nota',
  'LBL_NOTE_SUBJECT' => 'Asunto:',
  'LBL_NOTE' => 'Nota:',
  'LBL_OPPORTUNITY_ID' => 'ID Oportunidad:',
  'LBL_PARENT_ID' => 'ID Padre:',
  'LBL_PARENT_TYPE' => 'Tipo padre',
  'LBL_PHONE' => 'Teléfono:',
  'LBL_PORTAL_FLAG' => '¿Mostrar en el Portal?',
  'LBL_PRODUCT_ID' => 'ID Producto:',
  'LBL_QUOTE_ID' => 'ID Cotización:',
  'LBL_RELATED_TO' => 'Relacionada con:',
  'LBL_SEARCH_FORM_TITLE' => 'Buscar Notas',
  'LBL_STATUS' => 'Estado',
  'LBL_SUBJECT' => 'Asunto:',
  'LNK_IMPORT_NOTES' => 'Importar Notas',
  'LNK_NEW_NOTE' => 'Crear Nota o Adjunto',
  'LNK_NOTE_LIST' => 'Ver Notas',
  'LBL_MEMBER_OF' => 'Asociada a:',
  'LNK_NEW_CONTACT' => 'Crear Contacto',
  'LNK_NEW_ACCOUNT' => 'Crear Cuenta',
  'LNK_NEW_OPPORTUNITY' => 'Crear Oportunidad',
  'LNK_NEW_CASE' => 'Crear Caso',
  'LNK_IMPORT_NOTES' => 'Importar notas',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Asignado a',
  'LBL_REMOVING_ATTACHMENT' => 'Quitando adjunto',
  'ERR_REMOVING_ATTACHMENT' => 'Falla al quitar adjunto...',
 	'LBL_CREATED_BY' => 'Creado por',
 	'LBL_MODIFIED_BY' => 'Modificado por',
 	'LBL_SEND_ANYWAYS' => 'Este correo no tiene Asunto. ¿Desea guardar/enviar así?',
 	'LBL_ACTIVITIES_REPORTS' => 'Reporte actividades',
 	'LBL_PANEL_DETAILS' => 'Detalles',
 	'LBL_NOTE_INFORMATION' => 'Resumen',
	'LBL_MY_NOTES_DASHLETNAME' => 'Mis notas',
	'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    //For export labels
	'LBL_FIRST_NAME' => 'Nombre',
    'LBL_LAST_NAME' => 'Apellido',
    'LBL_EXPORT_PARENT_TYPE' => 'Relacionado al módulo',
    'LBL_EXPORT_PARENT_ID' => 'ID Relacionado a',
    'LBL_DATE_ENTERED' => 'Fecha creación',
    'LBL_DATE_MODIFIED' => 'Fecha modificación',
    'LBL_DELETED' => 'Eliminado',

);


?>
