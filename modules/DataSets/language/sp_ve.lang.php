<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
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
  'LBL_MODULE_NAME' => 'Formato de Datos',
  'LBL_MODULE_TITLE' => 'Formatos de Datos: Inicio',
  'LBL_SEARCH_FORM_TITLE' => 'Buscar Formatos de Datos',
  'LBL_LIST_FORM_TITLE' => 'Listar Formatos de Datos',
  'LBL_LIST_NAME' => 'Nombre del Formato de Datos',
  'LBL_LIST_QUERY_NAME' => 'Nombre de Consulta',
  'LBL_LIST_OUTPUT_DEFAULT' => 'Salida por omisión',
  'LBL_LIST_LIST_ORDER_Y' => 'Orden Y',
  'LBL_LIST_LIST_ORDER_X' => 'Orden X',
  'LBL_LIST_VISIBLE' => '¿Visible?',
  'LBL_LIST_EXPORTABLE' => '¿Exportable?',
  'LBL_LIST_HEADER' => '¿Mostrar Cabecera?',
  'LBL_NAME' => 'Nombre del Formato de Datos:',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_TYPE' => 'Tipo:',
  'LBL_PARENT_DATASET' => 'Formato de Datos Padre:',
  'LBL_QUERY_NAME' => 'Nombre de Consulta:',
  'LBL_OUTPUT_DEFAULT' => 'Tipo de Salida por omisión:',
  'LBL_LIST_ORDER_Y' => 'Orden en Eje Y:',
  'LBL_LIST_ORDER_X' => 'Orden en Eje X:',
  'LBL_HEADER' => 'Mostrar Cabecera:',
  'LBL_EXPORTABLE' => 'Exportable (Archivo CSV):',
  'LBL_VISIBLE' => 'Formato de Datos Visible:',
  'LBL_TABLE_WIDTH' => 'Ancho de la Tabla %:',
  'LBL_FONT_SIZE' => 'Tamaño de la Fuente:',
  'LBL_REPORT_NAME' => 'Nombre de Informe:',
  'LBL_PRESPACE_X' => 'Margen lateral:',
  'LBL_PRESPACE_Y' => 'Combinar con el Formato de Datos previo:',
  'LBL_TABLE_WIDTH_TYPE' => 'Tipo de Ancho de Tabla:',
  'LBL_BODY_TEXT_COLOR' => 'Color de Texto del Cuerpo:',
  'LBL_HEADER_TEXT_COLOR' => 'Color de Texto de la Cabecera:',
  'LBL_HEADER_BACK_COLOR' => 'Color de Fondo de la Cabecera:',
  'LBL_BODY_BACK_COLOR' => 'Color de Fondo del Cuerpo:',
  'LBL_USE_PREV_HEADER' => 'Agrupar con Cabecera previa:',
  'LBL_CHILD_NAME' => 'Subconsulta/Consulta hija:',
  'LBL_CUSTOM_LAYOUT' => 'Diseño Personalizado:',
  'LNK_LIST_REPORTMAKER' => 'Lista de Informes Empresariales',
  'LNK_NEW_REPORTMAKER' => 'Crear Informe',
  'LNK_LIST_DATASET' => 'Lista de Formatos de Datos',
  'LNK_NEW_DATASET' => 'Crear Formato de Datos',
  'LNK_NEW_CUSTOMQUERY' => 'Crear Consulta Personalizada',
  'LNK_CUSTOMQUERIES' => 'Consultas Personalizadas',
  'LNK_NEW_QUERYBUILDER' => 'Crear Consulta',
  'LNK_QUERYBUILDER' => 'Diseñador de Consultas',
  'LBL_ALL_REPORTS' => 'Todos los Informes',
  'NTC_DELETE_CONFIRMATION' => '¿Está seguro de querer eliminar este registro?',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para eliminar el producto.',
  'LBL_LAYOUT_TYPE' => 'Tipo de Diseño:',
  'LBL_LAYOUT_PARENT_VALUE' => 'Valor por omisión:',
  'LBL_LAYOUT_DISPLAY_TYPE' => 'Tipo de Visualización:',
  'LBL_LAYOUT_LIST_ORDER_X' => 'Orden de Lista en Eje X:',
  'LBL_LAYOUT_LIST_ORDER_Z' => 'Orden de Lista en Eje Z:',
  'LBL_MODIFY_HEAD' => 'Modificar Atributos de la Cabecera:',
  'LBL_MODIFY_BODY' => 'Modificar Atributos del Cuerpo:',
  'LBL_BG_COLOR' => 'Color de Fondo:',
  'LBL_WRAP' => 'Ajustar Texto:',
  'LBL_DISPLAY_TYPE' => 'Tipo de Visualización:',
  'LBL_STYLE' => 'Estilo de Fuente:',
  'LBL_DISPLAY_NAME' => 'Nombre de Visualización:',
  'LBL_FORMAT_TYPE' => 'Tipo de Formato:',
  'LBL_FORMAT' => 'Formato:',
  'LBL_CELL_SIZE' => 'Ancho de Celda:',
  'LBL_HIDE_COLUMN' => 'Ocultar Columna en Informe:',
  'LBL_FINISHED_BUTTON' => 'Terminado',
  'CONFIRM_LAYOUT_DISABLE' => 'Al deshabilitar el diseño por omisión se perderán todas las propiedades actuales del diseño personalizado',
);


?>
