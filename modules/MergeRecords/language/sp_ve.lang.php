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
  'LBL_MODULE_NAME' => 'Combinación de Registros',
  'LBL_MODULE_TITLE' => 'Combinación de Registros: Inicio',
  'LBL_SEARCH_FORM_TITLE' => 'Buscar combinaciones',
  'LBL_LIST_FORM_TITLE' => 'Listar combinaciones',

  'LBL_LBL_MERGE_RECORDS_STEP_1' => 'Buscar registros con los que Combinar',
  'LBL_AVAIL_FIELDS' => 'Campos disponibles',
  'LBL_FILTER_COND' => 'Condición de filtrado',
  'LBL_SELECTED_FIELDS' => 'Campos seleccionados',
  'LBL_MERGE_RECORDS_WITH' => 'Combinar registros con',
  'LBL_MERGE_VALUE_OVER' => 'Combinar valores sobre',

  'LBL_NEXT_STEP_TITLE' => 'Siguiente Paso[Ctrl+N]',
  'LBL_NEXT_STEP_BUTTON_KEY' => 'N',
  'LBL_NEXT_STEP_BUTTON_LABEL' => 'Siguiente Paso >',

  'LBL_PERFORM_MERGE_BUTTON_TITLE' => 'Realizar Combinación[Ctrl+P]',
  'LBL_PERFORM_MERGE_BUTTON_KEY' => 'P',
  'LBL_PERFORM_MERGE_BUTTON_LABEL' => 'Realizar Combinación',

  'LBL_SAVE_MERGED_RECORD_BUTTON_TITLE' => 'Guardar Combinación[Ctrl+S]',
  'LBL_SAVE_MERGED_RECORD_BUTTON_KEY' => 'S',
  'LBL_SAVE_MERGED_RECORD_BUTTON_LABEL' => 'Guardar Combinación',

  'LBL_STEP1_DIRECTIONS' => 'Buscar posibles registros duplicados. Si se encuentran, puede seleccionar cuales combinar con el registro actual',
  'LBL_STEP2_FORM_TITLE' => 'Encontrados registros con los que Combinar',
  'LBL_SELECT_ERROR'=>'Debe realizar una selección antes de continuar.',
  'LBL_SELECT_PRIMARY'=>'Seleccione el registro principal para la combinación.',
  'LBL_CHANGE_PARENT'=>'Establecer como principal',
  'LBL_REMOVE_FROM_MERGE'=>'Quitar',
  'LBL_DIFF_COL_VALUES'=>'Columnas cuyo valor en la fila principal difiere del valor en las filas de combinación:',
  'LBL_SAME_COL_VALUES'=>'Columnas cuyo valor es similar en todas las filas:',
  'ERR_EXCEEDS_MAX'=>'Está permitido combinar un máximo de 5 registros. Los registros que excedan este límite serán ignorados.',
  'LBL_DELETE_MESSAGE'=>'Esta acción eliminará los siguientes registros:',
  'LBL_PROCEED'=>'¿Continuar?',
);


?>
