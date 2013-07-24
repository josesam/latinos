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
 * $Id: sp_ve.lang.php,v 2.1 2012/06/24 20:20:29 carlose Exp $
 * Source: SugarCRM 6.5
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array (
  'LNK_NEW_CALL' => 'Registrar Llamada',
  'LNK_NEW_MEETING' => 'Programar Reunión',
  'LNK_NEW_TASK' => 'Nueva Tarea',
  'LNK_NEW_NOTE' => 'Nueva Nota o Adjunto',
  'LNK_NEW_EMAIL' => 'Archivar CorreoE',
  'LNK_CALL_LIST' => 'Llamadas',
  'LNK_MEETING_LIST' => 'Reuniones',
  'LNK_TASK_LIST' => 'Tareas',
  'LNK_NOTE_LIST' => 'Notas',
  'LNK_EMAIL_LIST' => 'CorreoE',
    'LBL_ADD_FIELD'=> 'Agregar campo:',
	'LBL_MODULE_SELECT' => 'Módulo a editar',
	'LBL_SEARCH_FORM_TITLE' => 'Buscar módulos',
	'COLUMN_TITLE_NAME' => 'Nombre de campo',
    'COLUMN_TITLE_DISPLAY_LABEL' => 'Etiqueta de visualización',
    'COLUMN_TITLE_LABEL_VALUE' => 'Contenido etiqueta',
	'COLUMN_TITLE_LABEL' => 'Etiqueta del sistema',
	'COLUMN_TITLE_DATA_TYPE' => 'Tipo de dato',
	'COLUMN_TITLE_MAX_SIZE' => 'Tamaño máximo',
	'COLUMN_TITLE_HELP_TEXT' => 'Texto de ayuda',
    'COLUMN_TITLE_COMMENT_TEXT' => 'Texto de comentario',
	'COLUMN_TITLE_REQUIRED_OPTION' => 'Campo requerido',
	'COLUMN_TITLE_DEFAULT_VALUE' => 'Valor por omisión',
	'COLUMN_TITLE_DEFAULT_EMAIL' => 'Valor por omisión',
	'COLUMN_TITLE_EXT1' => 'Extra Meta Field 1',
	'COLUMN_TITLE_EXT2' => 'Extra Meta Field 2',
	'COLUMN_TITLE_EXT3' => 'Extra Meta Field 3',
	'COLUMN_TITLE_FRAME_HEIGHT' => 'Altura IFrame',
	'COLUMN_TITLE_HTML_CONTENT' =>'HTML',
	'COLUMN_TITLE_URL'=>'URL por omisión',
	'COLUMN_TITLE_AUDIT' =>'Auditar',
        'COLUMN_TITLE_FTS' =>'Disponible en búsquedas',
	'COLUMN_TITLE_REPORTABLE' => 'Disponible en informes',
	'COLUMN_TITLE_MIN_VALUE' => 'Valor Mín',
	'COLUMN_TITLE_MAX_VALUE' => 'Valor Máx',
	'COLUMN_TITLE_LABEL_ROWS' => 'Filas',
	'COLUMN_TITLE_LABEL_COLS' => 'Columnas',
	'COLUMN_TITLE_DISPLAYED_ITEM_COUNT'=>'# Items mostrados',
	'COLUMN_TITLE_AUTOINC_NEXT' => 'Valor para auto incremento',
    'COLUMN_DISABLE_NUMBER_FORMAT' => 'Deshabilitar formato',
    'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'Habilitar rango de búsqueda',
	'LBL_DROP_DOWN_LIST' => 'Lista desplegable',
	'LBL_RADIO_FIELDS'=> 'Lista valor único',
	'LBL_MULTI_SELECT_LIST'=> 'Lista valores múltiples',
	'COLUMN_TITLE_PRECISION'=> 'Precisión',
	'MSG_DELETE_CONFIRM' => '¿Está seguro de eliminar éste item?',
	'POPUP_INSERT_HEADER_TITLE' => 'Agregar campo personalizado',
	'POPUP_EDIT_HEADER_TITLE' => 'Editar campo personalizado',
	'LNK_SELECT_CUSTOM_FIELD' => 'Seleccionar campo personalizado',
	'LNK_REPAIR_CUSTOM_FIELD' => 'Reparar campos personalizados',
	'LBL_MODULE' => 'Módulo',
	'COLUMN_TITLE_MASS_UPDATE'=>'Actualización masiva',
    'COLUMN_TITLE_IMPORTABLE'=>'Disponible en importaciones',
    'COLUMN_TITLE_DUPLICATE_MERGE'=>'Combinar duplicados',
    'LBL_LABEL'=>'Etiqueta',
    'LBL_DATA_TYPE'=>'Tipo de dato',
    'LBL_DEFAULT_VALUE'=>'Valor por omisión',
    'LBL_AUDITED'=>'Auditado',
    'LBL_REPORTABLE'=>'Informable',
    'ERR_RESERVED_FIELD_NAME' => "Palabra reservada",
	'ERR_SELECT_FIELD_TYPE' => 'Por favor seleccione un Tipo de Campo',
	'ERR_FIELD_NAME_ALREADY_EXISTS' => 'Nombre de Campo ya existe',
    'LBL_BTN_ADD' => 'Agregar',
    'LBL_BTN_EDIT' => 'Editar',
    'LBL_GENERATE_URL' => 'Generar URL',
	'LBL_DEPENDENT_CHECKBOX'=>'Dependiente',
	'LBL_DEPENDENT_TRIGGER'=>'Disparador',
    'LBL_CALCULATED'=>'Valor calculado',
    'LBL_FORMULA'=>'Fórmula',
    'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Dependiente',
    'LBL_BTN_EDIT_VISIBILITY'=>'Editar visibilidad',
    'LBL_LINK_TARGET'=>'Abrir vínculo en',
    'LBL_IMAGE_WIDTH' => 'Ancho',
    'LBL_IMAGE_HEIGHT' => 'Altura',
    'LBL_IMAGE_BORDER' => 'Borde',
	'COLUMN_TITLE_VALIDATE_US_FORMAT' => 'Formato USA',
	'LBL_DEPENDENT'=>'Dependiente',
	'LBL_VISIBLE_IF'=>'Visible si',
	'LBL_ENFORCED'=>'Obligado',
	'LBL_HELP' => 'Ayuda' /*for 508 compliance fix*/,
	'COLUMN_TITLE_GLOBAL_SEARCH'=>'Búsqueda global',

);

?>
