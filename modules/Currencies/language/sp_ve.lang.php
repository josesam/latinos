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
 * $Id: sp_ve.lang.php,v 2.1 2012/02/14 19:20:29 carlose Exp $
 * Source: SugarCRM 6.4
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Monedas',
  'LBL_LIST_FORM_TITLE' => 'Monedas',
  'LBL_CURRENCY' => 'Moneda',
  'LBL_ADD' => 'Agregar',
  'LBL_MERGE' => 'Unificar',
  'LBL_MERGE_TXT' => 'Marque las monedas que desea unificar con la moneda seleccionada. Esto eliminará todas las monedas marcadas y asignará la moneda seleccionada a cualquier valor asociado.',
  'LBL_US_DOLLAR' => 'Dólar EEUU',
  'LBL_DELETE' => 'Eliminar',
  'LBL_LIST_SYMBOL' => 'Símbolo moneda',
  'LBL_LIST_NAME' => 'Nombre moneda',
  'LBL_LIST_ISO4217' => 'Código ISO 4217',
  'LBL_UPDATE' => 'Actualizar',
  'LBL_LIST_RATE' => 'Tasa de cambio',
  'LBL_LIST_STATUS' => 'Estado',
  'LNK_NEW_CONTACT' => 'Nuevo Contacto',
  'LNK_NEW_ACCOUNT' => 'Nueva Cuenta',
  'LNK_NEW_OPPORTUNITY' => 'Nueva Oportunidad',
  'LNK_NEW_CASE' => 'Nuevo Caso',
  'LNK_NEW_NOTE' => 'Crear Nota o Adjunto',
  'LNK_NEW_CALL' => 'Programar Llamada',
  'LNK_NEW_EMAIL' => 'Nuevo Correo',
  'LNK_NEW_MEETING' => 'Programar Reunión',
  'LNK_NEW_TASK' => 'Crear Tarea',
  'LBL_LIST_ISO4217_HELP' => 'Escriba el código ISO 4217 de tres letras que define el nombre de la moneda y su símbolo.',
  'LBL_BELOW_MIN' => 'La tasa de conversión debe ser mayor que 0',
  'NTC_DELETE_CONFIRMATION' => '¿Está seguro de borrar esta moneda? Es preferible cambiar su estado a inactiva, si la elimina, todos los registros que usan esta moneda serán convertidos a Dólares EEUU cuando sean consultados.',
  'currency_status_dom' => 
  array (
    'Active' => 'Activa',
    'Inactive' => 'Inactiva',
  ),
  'LBL_CREATED_BY' => 'Creada por',
	'LBL_EDIT_LAYOUT' => 'Editar diseño' /*for 508 compliance fix*/,

);


?>
