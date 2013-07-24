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
  'LBL_MODULE_NAME' => 'Condiciones',
  'LBL_MODULE_TITLE' => 'Inciadores de flujo',
  'LBL_MODULE_SECTION_TITLE' => 'Cuando se cumplan estas condiciones',
  'LBL_SEARCH_FORM_TITLE' => 'Lista de Iniciadores de flujo',
  'LBL_LIST_FORM_TITLE' => 'Lista de Iniciadores',
  'LBL_NEW_FORM_TITLE' => 'Nuevo Iniciador',
  'LBL_LIST_NAME' => 'Descripción:',
  'LBL_LIST_VALUE' => 'Valor:',
  'LBL_LIST_TYPE' => 'Tipo:',
  'LBL_LIST_EVAL' => 'Eval:',
  'LBL_LIST_FIELD' => 'Campo:',
  'LBL_NAME' => 'Nombre del Iniciador:',
  'LBL_TYPE' => 'Tipo:',
  'LBL_EVAL' => 'Condición del Iniciador:',
  'LBL_SHOW_PAST' => 'Modificar Valor Anterior:',
  'LBL_SHOW' => 'Mostrar',
  'LNK_NEW_TRIGGER' => 'Crear Iniciador',
  'LNK_TRIGGER' => 'Iniciador de flujo',
  'LBL_LIST_STATEMEMT' => 'Disparar un evento basándose en lo siguiente: ',
  'LBL_FILTER_LIST_STATEMEMT' => 'Filtar objetos basándose en lo siguiente: ',
  'NTC_REMOVE_TRIGGER' => '¿Está seguro de quitar este iniciador?',
  'LNK_NEW_WORKFLOW' => 'Crear Flujo',
  'LNK_WORKFLOW' => 'Objetos de Flujo',
  'LBL_ALERT_TEMPLATES' => 'Plantillas de Alerta',
  'LBL_TRIGGER' => 'Cuando',
  'LBL_FIELD' => 'campo',
  'LBL_VALUE' => 'valor',
  'LBL_RECORD' => 'del módulo',
  'LBL_COMPARE_SPECIFIC_TITLE' => 'Cuando un campo en el módulo objetivo cambia a o de un valor especificado',
  'LBL_COMPARE_SPECIFIC_PART' => 'cambia a o de un valor especificado',
  'LBL_COMPARE_SPECIFIC_PART_TIME' => ' ',
  'LBL_COMPARE_CHANGE_TITLE' => 'Cuando un campo en el módulo objetivo cambia',
  'LBL_COMPARE_CHANGE_PART' => 'cambia',
  'LBL_COMPARE_COUNT_TITLE' => 'Iniciar al alcanzar una cuenta específica',
  'LBL_COMPARE_ANY_TIME_TITLE' => 'El campo no cambia durante un período determinado de tiempo',
  'LBL_COMPARE_ANY_TIME_PART2' => 'no cambia durante ',
  'LBL_COMPARE_ANY_TIME_PART3' => 'período especificado de tiempo',
  'LBL_FILTER_FIELD_TITLE' => 'Cuando un campo en el módulo objetivo contiene un valor especificado',
  'LBL_FILTER_FIELD_PART1' => 'Filtrar por ',
  'LBL_FILTER_REL_FIELD_TITLE' => 'Cuando el módulo objetivo cambia y un campo en el módulo relacionado contiene un valor específico',
  'LBL_FILTER_REL_FIELD_PART1' => 'Especificar relacionado',
  'LBL_TRIGGER_RECORD_CHANGE_TITLE' => 'Cuando el módulo objetivo cambia',
//'LBL_TRIGGER_RECORD_CHANGE_LIST_TITLE' => 'Cuando cambie el registro',
//General Labels
  'LBL_FUTURE_TRIGGER' => 'Especificar nuevo',
  'LBL_PAST_TRIGGER' => 'Especificar viejo',
  'LBL_COUNT_TRIGGER1' => 'Total',
  'LBL_COUNT_TRIGGER1_2' => 'se compara a esta cantidad',
//Specific Lables
  'LBL_MODULE' => 'módulo',
  'LBL_COUNT_TRIGGER2' => 'filtrar por relacionado',
  'LBL_COUNT_TRIGGER2_2' => 'sólo',
  'LBL_COUNT_TRIGGER3' => 'filtrar específicamente por',
  'LBL_COUNT_TRIGGER4' => 'filtrar por un segundo',
  'LBL_NEW_FILTER_BUTTON_KEY' => 'F',
  'LBL_NEW_FILTER_BUTTON_TITLE' => 'Crear Filtro [Alt+F]',
  'LBL_NEW_FILTER_BUTTON_LABEL' => 'Crear Filtro',
  'LBL_NEW_TRIGGER_BUTTON_KEY' => 'T',
  'LBL_NEW_TRIGGER_BUTTON_TITLE' => 'Crear Iniciador [Alt+T]',
  'LBL_NEW_TRIGGER_BUTTON_LABEL' => 'Crear Iniciador',
  'LBL_LIST_FRAME_SEC' => 'Filtro: ',
  'LBL_LIST_FRAME_PRI' => 'Iniciador: ',
  'LBL_TRIGGER_FILTER_TITLE' => 'Filtros de Iniciador',
  'LBL_TRIGGER_FORM_TITLE' => 'Definir una condición para la ejecución del flujo de trabajo',
  'LBL_FILTER_FORM_TITLE' => 'Definir una condición del flujo de trabajo',
  'LBL_SPECIFIC_FIELD'=>"'s campo específico", // HACER: No se puede traducir correctamente el genitivo sajón en esta posición
  'LBL_APOSTROPHE_S'=>"'s ", // HACER: No se puede traducir correctamente el genitivo sajón en esta posición
  'LBL_WHEN_VALUE1'=>"Cuando el valor del campo es ",
  'LBL_WHEN_VALUE2'=>"Cuando el valor de ",
  'LBL_SELECT_OPTION' => 'Por favor, seleccione una opción.',
  'LBL_SELECT_TARGET_FIELD' => 'Por favor, seleccione un campo de destino.',
  'LBL_SELECT_TARGET_MOD' => 'Por favor, seleccione un módulo relacionado de destino.',
  'LBL_SPECIFIC_FIELD_LNK' => 'campo especificado',
  'LBL_MUST_SELECT_VALUE' => 'Debe seleccionar un valor para este campo',
	
  'LBL_SELECT_AMOUNT' => 'Debe seleccionar la cantidad',
  'LBL_SELECT_1ST_FILTER' => 'Debe seleccionar un campo válido como 1er filtro',
  'LBL_SELECT_2ND_FILTER' => 'Debe seleccionar un campo válido como 2º filtro',
);

$mod_process_order_strings = array(
	'compare_specific' => array('1','2','3'),
	'compare_change' => array('1','2','3'),
	'compare_count' => array('1','2','3')
);

?>
