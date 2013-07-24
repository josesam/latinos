<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*******************************************************************************
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
 * $Id: sp_ve.lang.php,v 2.1 2012/10/23 14:20:29 carlose Exp $
 * Source: SugarCRM 6.5.6
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array (
	//module
	'LBL_MODULE_NAME' => 'Documentos',
	'LBL_MODULE_TITLE' => 'Documentos: Inicio',
	'LNK_NEW_DOCUMENT' => 'Crear documento',
	'LNK_DOCUMENT_LIST'=> 'Listar documentos',
	'LBL_SEARCH_FORM_TITLE'=> 'Buscar documentos',
	//vardef labels
	'LBL_DOCUMENT_ID' => 'ID Documento',
	'LBL_NAME' => 'Nombre Documento',
	'LBL_DESCRIPTION' => 'Descripción',
	'LBL_ASSIGNED_TO' => 'Asignado a:',
	'LBL_CATEGORY' => 'Categoría',
	'LBL_SUBCATEGORY' => 'Subcategoría',
	'LBL_STATUS' => 'Estado',
	'LBL_IS_TEMPLATE'=>'Es plantilla',
	'LBL_TEMPLATE_TYPE'=>'Tipo de documento',
	'LBL_REVISION_NAME' => 'Número de versión',
	'LBL_MIME' => 'Tipo MIME',
	'LBL_REVISION' => 'Versión',
	'LBL_DOCUMENT' => 'Documento relacionado',
	'LBL_LATEST_REVISION' => 'Ultima Versión',
	'LBL_CHANGE_LOG'=> 'Historial de Cambios',
	'LBL_ACTIVE_DATE'=> 'Fecha publicación',
	'LBL_EXPIRATION_DATE' => 'Fecha caducidad',
	'LBL_FILE_EXTENSION'  => 'Extensión de Archivo',

	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Sin especificar',
	//quick search
	'LBL_NEW_FORM_TITLE' => 'Nuevo documento',
	//document edit and detail view
	'LBL_DOC_NAME' => 'Nombre documento:',
	'LBL_FILENAME' => 'Nombre archivo:',
	'LBL_FILE_UPLOAD' => 'Archivo:',
	'LBL_DOC_VERSION' => 'Versión:',
	'LBL_CATEGORY_VALUE' => 'Categoría:',
	'LBL_SUBCATEGORY_VALUE'=> 'Subcategoría:',
	'LBL_DOC_STATUS'=> 'Estado:',
	'LBL_DET_TEMPLATE_TYPE'=>'Tipo de Documento:',

	'LBL_TEAM'=> 'Equipo:',

	'LBL_DOC_DESCRIPTION'=>'Descripción:',
	'LBL_DOC_ACTIVE_DATE'=> 'Fecha publicación:',
	'LBL_DOC_EXP_DATE'=> 'Fecha caducidad:',

	//document list view.
	'LBL_LIST_FORM_TITLE' => 'Lista de Documentos',
	'LBL_LIST_DOCUMENT' => 'Documento',
	'LBL_LIST_CATEGORY' => 'Categoría',
	'LBL_LIST_SUBCATEGORY' => 'Subcategoría',
	'LBL_LIST_REVISION' => 'Versión',
	'LBL_LIST_LAST_REV_CREATOR' => 'Publicado por',
	'LBL_LIST_LAST_REV_DATE' => 'Fecha versión',
	'LBL_LIST_VIEW_DOCUMENT'=>'Ver',
    'LBL_LIST_DOWNLOAD'=> 'Descargar',
	'LBL_LIST_ACTIVE_DATE' => 'Fecha publicación',
	'LBL_LIST_EXP_DATE' => 'Fecha caducidad',
	'LBL_LIST_STATUS'=>'Estado',

	//document search form.
	'LBL_SF_DOCUMENT' => 'Nombre documento:',
	'LBL_SF_CATEGORY' => 'Categoría:',
	'LBL_SF_SUBCATEGORY'=> 'Subcategoría:',
	'LBL_SF_ACTIVE_DATE' => 'Fecha publicación:',
	'LBL_SF_EXP_DATE'=> 'Fecha caducidad:',

	'DEF_CREATE_LOG' => 'Documento creado',

	//error messages
	'ERR_DOC_NAME'=>'Nombre documento',
	'ERR_DOC_ACTIVE_DATE'=>'Fecha publicación',
	'ERR_DOC_EXP_DATE'=> 'Fecha caducidad',
	'ERR_FILENAME'=> 'Nombre archivo',

	'LBL_TREE_TITLE' => 'Documentos',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Nombre documento',
    'LBL_EDIT_BUTTON' => 'Editar',
    'LBL_REMOVE' => 'Quitar',

);


?>
