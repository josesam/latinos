<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*******************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2010 SugarCRM Inc.
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
 * $Id: sp_ve.lang.php,v 1.8 2010/06/29 10:20:29 carlose Exp $
 * Source: SugarCRM 6.0
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array (
	//module
	'LBL_MODULE_NAME' => 'KBDocuments',
	'LBL_MODULE_TITLE' => 'Artículo de Base de Conocimiento',
	'LNK_NEW_ARTICLE' => 'Crear artículo',
	'LNK_KBDOCUMENT_LIST'=> 'Listar documentos',
	'LBL_DOC_REV_HEADER' => 'Versiones documento',
	'LBL_SEARCH_FORM_TITLE'=> 'Buscar documentos',
	'LBL_KBDOC_TAGS' => 'Etiquetas de artículo:',
	'LBL_KBDOC_BODY' => 'Cuerpo de artículo:',
	'LBL_KBDOC_APPROVED_BY' =>'Aprobado por:',
	'LBL_KBDOC_ATTACHMENT' =>'Documento adjunto',
	'LBL_KBDOC_ATTS_TITLE' =>'Descargar adjuntos:',	
	'LBL_SEND_EMAIL'  => 'Enviar correo-e',
	'LBL_SELECT_TAG_BUTTON_TITLE' => 'Seleccionar',
	'LBL_ATTACHMENTS' => 'Adjuntos:',
	'LBL_EMBEDED_IMAGES' => 'Imágenes Incrustadas:',
	'LBL_SHOW_ARTICLE_DETAILS' => 'Mostrar detalles',
	'LBL_HIDE_ARTICLE_DETAILS' => 'Ocultar detalles',
	'LBL_TAGS' => 'Etiquetas:',
	'LBL_NOT_AN_ADMIN_USER' => 'No es un usuario administrador',
	'LBL_NOT_A_VALID_FILE' => 'No es un archivo válido',
	
	//Tag tree related labels    
    'LBL_SELECT_A_NODE_FROM_TREE' => 'Seleccione un nodo del árbol',
    'LBL_SELECT_A_NODE_FROM_TREE' => 'Crear Nueva Etiqueta',
    'LBL_SEARCH'  =>'Buscar',
    'LBL_NEW_TAG_NAME' => 'Nuevo Nombre de Etiqueta:',
	
	//vardef labels	
	'LBL_ID' => 'ID',
	'LBL_KBDOCUMENT_ID' => 'Id de Documento',
	'LBL_ARTICLE_TITLE' => 'Título:',
	'LBL_ARTICLE_AUTHOR' => 'Autor:',
	'LBL_ARTICLE_APPROVED_BY' =>'Aprobado por:',
	'LBL_ARTICLE_BODY' => 'Cuerpo de Artículo:',
	'LBL_NAME' => 'Nombre de Documento:',
	'LBL_DESCRIPTION' => 'Descripción',
	'LBL_CATEGORY' => 'Categoría',
	'LBL_SUBCATEGORY' => 'Subcategoría',
	'LBL_STATUS' => 'Estado',
	'LBL_CREATED_BY'=> 'Creado por',
	'LBL_DATE_ENTERED'=> 'Fecha creación',
    'LBL_DATEENTERED'=> 'Fecha creación:',
	'LBL_DATE_MODIFIED'=> 'Última modificación',
	'LBL_DELETED' => 'Eliminado',
	'LBL_MODIFIED'=> 'Modificado por id',
	'LBL_MODIFIED_USER' => 'Modificado por',
	'LBL_CREATED'=> 'Creado por',
	'LBL_RELATED_DOCUMENT_ID'=>'Id Documento Relacionado',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'Id Versión Documento Relacionado',
	'LBL_IS_TEMPLATE'=>'Es una Plantilla',
	'LBL_TEMPLATE_TYPE'=>'Tipo de Documento',
    'LBL_PARENT_TYPE'=>'Tipo de Padre',
	'LBL_NUMBER'    =>  'LBL_NUMBER',
    'LBL_TEXT_BODY' =>  'LBL_TEXT_BODY',
    'LBL_CREATED_BY_NAME' => 'LBL_CREATED_BY_NAME',
    'LBL_TAG_ID' => 'LBL_TAG_ID',
    'LBL_KBDOCUMENTS_KBTAGS_ID' => 'LBL_KBDOCUMENTS_KBTAGS_ID',

	'LBL_REVISION_NAME' => 'Número de Versión',
	'LBL_KBDOCUMENT_REVISION_NUMBER' => 'Número de Versión KBDocument',
	'LBL_MIME' => 'Tipo MIME',
	'LBL_REVISION' => 'Versión',
	'LBL_DOCUMENT' => 'Documento Relacionado',
	'LBL_LATEST_REVISION' => 'Id de Última Versión',
    'LBL_LATEST_REVISION_NAME' => 'Nombre de Última Versión',
    'LBL_SELECTED_REVISION_NAME' => 'Nombre de Versión Seleccionada',
	'LBL_CHANGE_LOG'=> 'Registro de Cambios',
	'LBL_ACTIVE_DATE'=> 'Fecha de Publicación',
	'LBL_EXPIRATION_DATE' => 'Fecha caducidad',
	'LBL_FILE_EXTENSION'  => 'Extensión de Archivo',

    'LBL_KBDOC_TAGS' => 'Etiquetas de Documento:',
	'LBL_KBDOC_BODY' => 'Cuerpo de Documento:',
	'LBL_KBDOC_APPROVED_BY' =>'Aprobado por:',
	'LBL_KBDOC_ATTACHMENT' =>'Documento adjunto',
	'LBL_KBDOC_ATTS_TITLE' =>'Descargar adjuntos:',

    'LBL_KNOWLEDGE_BASE_SEARCH' => 'Base de Conocimiento',
	'LBL_KNOWLEDGE_BASE_ADMIN' => 'Admin. Base de Conocimiento',
    'LBL_KNOWLEDGE_BASE_ADMIN_MENU' => 'Admin Base de Conocimiento',
     
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Sin especificar',
	//document edit and detail view
	'LBL_KBDOC_TAGS' => 'Etiquetas:',
	'LBL_KBDOC_BODY' => 'Cuerpo:',
	'LBL_KBDOC_APPROVED_BY' =>'Aprobado Por:',
	'LBL_KBDOC_ATTACHMENT' =>'Documento adjunto',
	'LBL_KBDOC_ATTS_TITLE' =>'Descargar adjuntos:',
	'LBL_DOC_NAME' => 'Nombre documento:',
	'LBL_FILENAME' => 'Nombre archivo:',
	'LBL_DOC_VERSION' => 'Versión:',
	'LBL_CATEGORY_VALUE' => 'Categoría:',
	'LBL_SUBCATEGORY_VALUE'=> 'Subcategoría:',
	'LBL_DOC_STATUS'=> 'Estado:',
	'LBL_LAST_REV_CREATOR' => 'Versión creada por:',
	'LBL_LAST_REV_DATE' => 'Fecha de Versión:',
	'LBL_DOWNNLOAD_FILE'=> 'Adjuntos:',
	'LBL_DET_RELATED_DOCUMENT'=>'Documento relacionado:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Versión del Documento Relacionado:",
	'LBL_DET_IS_TEMPLATE'=>'¿Plantilla? :',
	'LBL_DET_TEMPLATE_TYPE'=>'Tipo de Documento:',
	'LBL_IS_EXTERNAL_ARTICLE' => '¿Artículo Externo? :',
	'LBL_SHOW_TAGS' => 'Mostrar etiquetas',
    'LBL_HIDE_TAGS' => 'Ocultar etiquetas',

	'LBL_TEAM'=> 'Equipo:',

	'LBL_DOC_DESCRIPTION'=>'Descripción:',
	'LBL_KBDOC_SUBJECT' =>'Asunto:',
	'LBL_DOC_ACTIVE_DATE'=> 'Fecha publicación:',
	'LBL_DOC_EXP_DATE'=> 'Fecha caducidad:',

	//document list view.
	'LBL_LIST_ARTICLES' => 'Artículos',
	'LBL_LIST_FORM_TITLE' => 'Lista de Documentos',
	'LBL_LIST_DOCUMENT' => 'Documento',
	'LBL_LIST_CATEGORY' => 'Categoría',
	'LBL_LIST_SUBCATEGORY' => 'Subcategoría',
	'LBL_LIST_REVISION' => 'Versión',
	'LBL_LIST_LAST_REV_CREATOR' => 'Publicado Por',
	'LBL_LIST_LAST_REV_DATE' => 'Fecha de Revisión',
	'LBL_LIST_VIEW_DOCUMENT'=>'Ver',
    'LBL_LIST_DOWNLOAD'=> 'Descargar',
	'LBL_LIST_ACTIVE_DATE' => 'Fecha publicación',
	'LBL_LIST_EXP_DATE' => 'Fecha caducidad',
	'LBL_LIST_STATUS'=>'Estado',
    'LBL_ARTICLE_AUTHOR_LIST' => 'Autor',
    //document list view (for portal)
	'LBL_LIST_MOST_VIEWED' => 'Artículos más visitados',
	'LBL_LIST_MOST_RECENT' => 'Artículos recientes',

	//document search form.
	'LBL_SF_DOCUMENT' => 'Nombre del Documento:',
	'LBL_SF_CATEGORY' => 'Categoría:',
	'LBL_SF_SUBCATEGORY'=> 'Subcategoría:',
	'LBL_SF_ACTIVE_DATE' => 'Fecha publicación:',
	'LBL_SF_EXP_DATE'=> 'Fecha caducidad:',

	'DEF_CREATE_LOG' => 'Documento Creado',
    
    //kbdocument full text search form.
    'LBL_TAB_SEARCH' => 'Buscar',
    'LBL_TAB_BROWSE' => 'Explorar',
    'LBL_TAB_ADVANCED' => 'Avanzado',
    'LBL_MENU_FTS' => 'Búsqueda por Texto Completo',
    'LBL_FTS_EMPTY_STRING' =>  'No es posible realizar una búsqueda de texto completo en una cadena vacía',
    'LBL_SEARCH_WITHIN' => 'Buscar en:',      
    'LBL_CONTAINING_THESE_WORDS' => 'Que contengan estas palabras:',     
    'LBL_EXCLUDING_THESE_WORDS' => 'Excluyendo estas palabras:',  
    'LBL_UNDER_THIS_TAG' => 'Usando esta etiqueta:',
    'LBL_PUBLISHED' => 'Publicado:',
    'LBL_EXPIRES' => 'Caduca:',
    'LBL_TIMES_VIEWED' => 'Frecuencia de Visualización:',    
    'LBL_ATTACHMENTS' => 'Adjuntos:',
    'LBL_SAVE_SEARCH_AS' => 'Guardar esta búsqueda como:',
    'LBL_SAVE_SEARCH_AS_HELP' => 'Guarda las entradas especificadas como un filtro de Búsqueda Guardada para la Base de Conocimiento.',
    'LBL_PREVIOUS_SAVED_SEARCH' => 'Búsquedas guardadas anteriormente:',
    'LBL_PREVIOUS_SAVED_SEARCH_HELP' => 'Editar o Eliminar una Búsqueda Guardada .',
    'LBL_UPDATE' => 'Actualizar',
    'LBL_DELETE' => 'Eliminar',
    'LBL_SHOW_OPTIONS' => 'Más opciones',
    'LBL_AND' => 'y',
    'LBL_SEARCH' => 'Buscar',
    'LBL_CLEAR' => 'Limpiar',
    'LBL_LIST_KBDOC_APPROVER_NAME' => 'Nombre de Aprobador',
    'LBL_LIST_VIEWING_FREQUENCY' => 'Frecuencia',  
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_DOCUMENT' => 'La vista preliminar no está disponible, no se ha encontrado el registro del Documento.',
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_CONTENT' => 'La vista preliminar no está disponible, el Documento existe, pero aún no se ha creado ningún contenido.',
    'LBL_UNTAGGED_ARTICLES_NODE' => 'Artículos sin Etiquetar',
    'LBL_TOP_TEN_LIST_TITLE' => '10 Artículos Más Vistos',
    'LBL_SHOW_SYNTAX_HELP' => 'Ayuda sobre la sintáxis',
    'LBL_MISMATCH_QUOTES_ERR' => 'Su consulta no funcionará tal cual la ha introducido.  Tiene que haber una comilla doble de cierre por cada doble comilla de apertura, de forma que estén emparejadas.  Si desea buscar una cadena que incluye una comilla doble, use la barra invertida (\") como carácter de escape junto a las comillas dobles', 
    'LBL_SYNTAX_CHEAT_SHEET' => 
        '<B>Ayuda sobre la Sintaxis de las Consultas:</b><P>
        <ol>
<li>El signo más (+) indica que los resultados "deben tener" este término.</li>
<li>El signo menos (-) indica que los resultados "no deberían tener" el término.  El signo menos (-) no es necesario si está rellenando el campo de texto para palabras que deben ser excluidas.</li>
<li>Las palabras múltiples entre comillas dobles ("ejemplo1 ejemplo2") se tratan como un único término de búsqueda. Debe haber un conjunto de apertura de comillas dobles y otro de cierre o la búsqueda no funcionará.<br>Para buscar las propias comillas dobles, use la barra invertida (\") como carácter de escape junto a las comillas dobles.</li>
<li>Una comilla simple (\') será buscada como tal, y no como una agrupación.</li></ol>

        </p>

        <p><b>Ejemplo: </b><br><br>
        Para buscar todos los artículos con las palabras "Sugar" o "CRM" que contengan las palabras "Base de Conocimiento" y "genial," pero que no contengan las palabras "demo" o "tiempo pasado", introduzca la siguiente cadena:<br>&nbsp;&nbsp;&nbsp;&nbsp;Sugar CRM +"Base de Conocimiento" +genial -demo -"tiempo pasado"</p><br>

        <p><b>Notas: </b><br>
<ol><li>La capitalización de las letras no se tendrá en cuenta.</li>
<li>Tanto los espacios y las comas son delimitadores aceptados.</li>
<li>No escriba un espacio entre los signos más (+) o menos (-) y las palabras a las que afectan.</li></ol>
</p>',
        
    //for hovering over tree
    'LBL_CHILD_TAG_IN_TREE_HOVER' => 'Etiqueta Hija',
    'LBL_CHILD_TAGS_IN_TREE_HOVER' => 'Etiquetas Hijas',
    'LBL_ARTICLE_IN_TREE_HOVER' => 'Artículo',
    'LBL_ARTICLES_IN_TREE_HOVER' => 'Artículos',
    'LBL_THIS_TAG_CONTAINS_TREE_HOVER' => 'Esta etiqueta contiene',
    
	//error messages
	'ERR_DOC_NAME'=>'Nombre del Documento',
	'ERR_DOC_ACTIVE_DATE'=>'Fecha de Publicación',
	'ERR_DOC_EXP_DATE'=> 'Fecha de Caducidad',
	'ERR_FILENAME'=> 'Nombre de Archivo',
	'ERR_DOC_VERSION'=> 'Versión del Documento',
	'ERR_DELETE_CONFIRM'=> '¿Desea eliminar esta versión del documento?',
	'ERR_DELETE_LATEST_VERSION'=> 'No tiene permiso para eliminar la última revisión de un documento.',
	'LNK_NEW_MAIL_MERGE' => 'Combinar Correspondencia',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Plantilla para Combinar Correspondencia:',

	'LBL_TREE_TITLE' => 'Documentos',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Nombre de Documento',
	'LBL_CONTRACT_NAME'=>'Nombre de Contrato:',
	'LBL_LIST_IS_TEMPLATE'=>'¿Plantilla?',
	'LBL_LIST_TEMPLATE_TYPE'=>'Tipo de Documento',
	'LBL_LIST_SELECTED_REVISION'=>'Versión Seleccionada',
	'LBL_LIST_LATEST_REVISION'=>'Última Versión',
	'LBL_CASES_SUBPANEL_TITLE'=>'Casos Relacionados',
	'LBL_EMAILS_SUBPANEL_TITLE' => 'Correo-e Relacionado',
    'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Contratos Relacionados',
	'LBL_LAST_REV_CREATE_DATE'=>'Fecha de Creación de Última Versión',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_KEYWORDS' => 'Palabras clave:',
    'LBL_CASES' =>'Casos',
    'LBL_EMAILS' =>'Correo-e',
    
   //Admin screen messages
    'LBL_DEFAULT_ADMIN_MESSAGE' =>'Seleccione una acción de la lista desplegable',
    'LBL_SELECT_PARENT_TAG_MESSAGE' =>'Seleccione la etiqueta padre del árbol',
    'LBL_SELECT_TAG_TO_BE_DELETED_FROM_TREE' => 'Seleccione las etiquetas a eliminar del árbol',
    'LBL_SELECT_TAG_TO_BE_RENAMED_FROM_TREE' =>'Seleccione la etiqueta a renombrar del árbol',
       
     //Tag creation messages
    'LBL_TAG_ALREADY_EXISTS' => 'La etiqueta ya existe',
    'LBL_TYPE_THE_NEW_TAG_NAME' => 'Introduzca el nuevo nombre de etiqueta',
    'LBL_SAVING_THE_TAG' => 'Guardando la Etiqueta...',
    'LBL_CREATING_NEW_TAG' => 'Creando Nueva Etiqueta...',
    'LBL_TAGS_ROOT_LABEL' => 'Etiquetas',            
    'LBL_FAQ_TAG_NOT_RENAME_MESSAGE' => 'Las Etiquetas de FAQ no pueden ser renombradas',
    'LBL_SELECT_ARTICLES_TO_BE_MOVED_TO_OTHER_TAG' => 'Seleccione Artículos Primero ',
    'LBL_SELECT_ARTICLES_TO_APPLY_TAGS' => 'Seleccione Artículos a los que Aplicar Etiquetas',
    'LBL_SELECT_ARTICLES_TO_DELETE'  => 'Seleccione Artículos Primero ',
    'LBL_SELECT_TAGS_TO_DELETE'  => 'Seleccione las Etiquetas a Eliminar',
    'LBL_SELECT_A_TAG_FROM_TREE' => 'Seleccione una Etiqueta del Árbol',
    'LBL_SELECT_TAGS_FROM_TREE'  => 'Seleccione Etiquetas del Árbol',
    'LBL_MOVING_ARTICLES_TO_TAG' =>'Moviendo artículos a etiqueta...',
    'LBL_APPLYING_TAGS_TO_ARTICLES' =>'Aplicando etiquetas a artículos ...',
    'LBL_ROOT_TAG_MESSAGE' => 'La etiqueta raíz no puede ser seleccionada/enlazada a un artículo',
    'LBL_ROOT_TAG_CAN_NOT_BE_RENAMED' => 'La etiqueta raíz no puede ser renombrada',
    'LBL_TYPE_NEW_NODE_NAME'=>'Por favor, introduzca un nombre de etiqueta',
    'LBL_SOURCE_AND_TARGET_TAGS_ARE_SAME' => 'Las etiquetas Origen y Destino son la misma',
    
    //Tag button labels
    'LBL_DELETE_TAG'  => 'Eliminar Etiqueta',
    'LBL_SELECT_TAG'  => 'Seleccionar Etiqueta',
    'LBL_APPLY_TAG'  =>  'Aplicar Etiqueta',
    'LBL_MOVE'  =>   'Mover',
    'LBL_LAUNCHING_TAG_BROWSING' => 'Lanzando Explorador de Etiquetas ...',
    'LBL_THERE_WAS_AN_ERROR_HANDLING_TAGS' => 'Ha ocurrido un error al gestionar esta petición de etiquetas.',
    'LBL_ERROR_NOT_A_FILE_INPUT_ELEMENT' =>'Error: No es un elemento de entrada de archivo',
    'LBL_CREATE_NEW_TAG'  => 'Crear Nueva Etiqueta',
    'LBL_SEARCH_TAG'  => 'Buscar',
    'LBL_TAG_NAME'  =>'Nombre de Etiqueta:',
    
    'LBL_SELECT_TAGS_TO_DELETE' => 'Seleccione las etiquetas a eliminar',
    'LBL_TYPE_TAG_NAME_TO_SEARCH' => 'Introduzca el nombre de etiqueta a buscar',
    'LBL_KB_NOTIFICATION' => 'El Documento ha sido publicado',
    'LBL_KB_PUBLISHED_REQUEST' => 'le ha asignado un documento para su aprobación y publicación.',
    'LBL_KB_STATUS_BACK_TO_DRAFT' => 'El estado del documento ha cambiado de nuevo a borrador',    
    'LBL_CONTRACTS' => 'Contratos',  

	'LBL_SELECT_PARENT_TREE_NOTICE' => 'Seleccione la etiqueta padre, del árbol ',
	'LBL_CLICK_APPLY_TAG' => 'Haga clic en Aplicar Etiqueta',	
	'LBL_HEAD_TAGS' => 'Etiquetas',	
);
?>
