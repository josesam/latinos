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
 * $Id: sp_ve.lang.php,v 1.8 2012/04/20 10:20:29 carlose Exp $
 * Source: SugarCRM 6.4.3
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array (
	//module
  'LBL_MODULE_NAME' => 'Documentos',
  'LBL_MODULE_TITLE' => 'Documentos: Inicio',
  'LNK_NEW_DOCUMENT' => 'Crear documento',
  'LNK_DOCUMENT_LIST' => 'Ver documentos',
  'LBL_DOC_REV_HEADER' => 'Versión documentos',
  'LBL_SEARCH_FORM_TITLE' => 'Buscar documentos',
	//vardef labels
  'LBL_DOCUMENT_ID' => 'Id Documento',
  'LBL_NAME' => 'Nombre documento',
  'LBL_DESCRIPTION' => 'Descripción',
  'LBL_CATEGORY' => 'Categoría',
  'LBL_SUBCATEGORY' => 'Subcategoría',
  'LBL_STATUS' => 'Estado',
  'LBL_CREATED_BY' => 'Creado por',
  'LBL_DATE_ENTERED' => 'Fecha creación',
  'LBL_DATE_MODIFIED' => 'Fecha modificación',
  'LBL_DELETED' => 'Eliminado',
  'LBL_MODIFIED' => 'Modificado por',
  'LBL_CREATED' => 'Creado por',
  'LBL_RELATED_DOCUMENT_ID'=>'Id Documento relacionado',
  'LBL_RELATED_DOCUMENT_REVISION_ID'=>'Id Versión documento relacionado',
  'LBL_IS_TEMPLATE'=>'Es plantilla',
  'LBL_TEMPLATE_TYPE'=>'Tipo documento',
	'LBL_ASSIGNED_TO_NAME'=>'Asignado a:',
  'LBL_REVISION_NAME' => 'Número versión',
  'LBL_MIME' => 'Tipo Contenido',
  'LBL_REVISION' => 'Versión',
  'LBL_DOCUMENT' => 'Documento relacionado',
  'LBL_LATEST_REVISION' => 'Ultima versión',
  'LBL_CHANGE_LOG' => 'Historial cambios:',
  'LBL_ACTIVE_DATE' => 'Activo desde',
  'LBL_EXPIRATION_DATE' => 'Fecha expiración',
  'LBL_FILE_EXTENSION' => 'Extensión archivo',
  'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Sin especificar',
    'LBL_HOMEPAGE_TITLE' => 'Mis documentos',
	//quick search
	'LBL_NEW_FORM_TITLE' => 'Nuevo documento',
	//document edit and detail view
  'LBL_DOC_NAME' => 'Nombre Documento:',
  'LBL_FILENAME' => 'Nombre archivo',
  'LBL_LIST_FILENAME' => 'Archivo:',
  'LBL_DOC_VERSION' => 'Versión:',
	'LBL_FILE_UPLOAD' => 'Archivo:',
  'LBL_CATEGORY_VALUE' => 'Categoría:',
  'LBL_SUBCATEGORY_VALUE' => 'Subcategoría:',
  'LBL_DOC_STATUS' => 'Estado:',
  'LBL_LAST_REV_CREATOR' => 'Versión creada por:',
  'LBL_LAST_REV_DATE' => 'Fecha versión:',
  'LBL_DOWNNLOAD_FILE' => 'Descargar archivo:',
  'LBL_TEAM' => 'Equipo:',
  'LBL_DET_RELATED_DOCUMENT' => 'Documento relacionado:',
  'LBL_DET_RELATED_DOCUMENT_VERSION' => "Versión del documento relacionado:",
  'LBL_DET_IS_TEMPLATE' => '¿Plantilla? :',
  'LBL_DET_TEMPLATE_TYPE' => 'Tipo de documento:',
  'LBL_DOC_DESCRIPTION' => 'Descripción:',
  'LBL_DOC_ACTIVE_DATE' => 'Fecha publicación:',
  'LBL_DOC_EXP_DATE' => 'Fecha expiración:',
	//document list view.
  'LBL_LIST_FORM_TITLE' => 'Lista de documentos',
  'LBL_LIST_DOCUMENT' => 'Documento',
  'LBL_LIST_CATEGORY' => 'Categoría',
  'LBL_LIST_SUBCATEGORY' => 'Subcategoría',
  'LBL_LIST_REVISION' => 'Versión',
  'LBL_LIST_LAST_REV_CREATOR' => 'Publicado por',
  'LBL_LIST_LAST_REV_DATE' => 'Fecha versión',
  'LBL_LIST_VIEW_DOCUMENT' => 'Ver',
  'LBL_LIST_ACTIVE_DATE' => 'Activo desde',
  'LBL_LIST_EXP_DATE' => 'Fecha expiración',
  'LBL_LIST_STATUS' => 'Estado',
	//document search form.
  'LBL_SF_DOCUMENT' => 'Nombre Documento:',
  'LBL_SF_CATEGORY' => 'Categoría:',
  'LBL_SF_SUBCATEGORY' => 'Subcategoría:',
  'LBL_SF_ACTIVE_DATE' => 'Fecha publicación:',
  'LBL_SF_EXP_DATE' => 'Fecha expiración:',
  'DEF_CREATE_LOG' => 'Documento Creado',
	//error messages
  'ERR_DOC_NAME' => 'Nombre documento',
  'ERR_DOC_ACTIVE_DATE' => 'Fecha publicación',
  'ERR_DOC_EXP_DATE' => 'Fecha expiración',
  'ERR_FILENAME' => 'Nombre archivo',
  'ERR_DOC_VERSION' => 'Versión documento',
  'ERR_DELETE_CONFIRM' => '¿Desea borrar esta versión del documento?',
  'ERR_DELETE_LATEST_VERSION' => 'No tiene permiso para borrar la última versión de un documento.',
	//sub-panel vardefs.
  'LNK_NEW_MAIL_MERGE' => 'Combinar corespondencia',
  'LBL_MAIL_MERGE_DOCUMENT' => 'Plantilla Combinar correspondencia:',
  'ERR_MISSING_FILE' => 'A este documento le falta un archivo, probablemente debido a un error durante la carga. Reintente la carga del archivo o contacte al administrador.',
  'LBL_TREE_TITLE' => 'Documentos',
  'LBL_LIST_DOCUMENT_NAME' => 'Nombre',
  'LBL_CONTRACT_NAME' => 'Nombre contrato:',
  'LBL_LIST_IS_TEMPLATE' => '¿Plantilla?',
  'LBL_LIST_TEMPLATE_TYPE' => 'Tipo documento',
  'LBL_LIST_SELECTED_REVISION' => 'Versión seleccionada',
  'LBL_LIST_LATEST_REVISION' => 'Ultima versión',

	'LBL_LAST_REV_MIME_TYPE' => 'Ultima revisión tipo MIME',
 	'LBL_LASTEST_REVISION_NAME' => 'Nombre más reciente revisión:',
	'LBL_SELECTED_REVISION_NAME' => 'Nombre revisión seleccionada:',
 	'LBL_CONTRACT_STATUS' => 'Estado contrato:',
 	'LBL_CONTRACT_NAME' => 'Nombre contrato:',
 	'LBL_LINKED_ID' => 'Vinculado id',
 	'LBL_SELECTED_REVISION_ID' => 'Revisión seleccionada id',
 	'LBL_LATEST_REVISION_ID' => 'Revisión más reciente id',
	'LBL_SELECTED_REVISION_FILENAME' => 'Nombre archivo revisión seleccionada',
 	'LBL_FILE_URL' => 'URL archivo',
     'LBL_REVISIONS_PANEL' => 'Detalles revisión',
     'LBL_REVISIONS_SUBPANEL' => 'Revisiones',
     'LBL_DOCUMENT_INFORMATION' => 'Resumen',
	'LBL_DOC_ID' => 'ID Fuente del documento',
	'LBL_DOC_TYPE' => 'Fuente',
	'LBL_LIST_DOC_TYPE' => 'Fuente',
    'LBL_DOC_TYPE_POPUP' => 'Seleccione una fuente a la que podrá subirse este documento<br> y desde la cual estará disponible.',
	'LBL_DOC_URL' => 'URL Fuente del documento',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Nombre de archivo',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Los primeros 20 archivos recientemente modificados se muestran en orden descendente en la siguiente lista. Utilice la función de Búsqueda para encontrar otros archivos.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Nombre de archivo',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'El usuario intentó acceder una API externa no válida ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Falló la validación de ingreso a la API externa ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Cuentas',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_CASES_SUBPANEL_TITLE' => 'Casos',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Fallas',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Cotizaciones',
	'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Productos',

	'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Contratos relacionados',
	'LBL_LAST_REV_CREATE_DATE'=>'Fecha creación última revisión',
    'LBL_CONTRACTS' => 'Contratos',
    'LBL_CREATED_USER' => 'Usuario creado',
    'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Reversiones',

);

?>
