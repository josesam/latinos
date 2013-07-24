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
  'LBL_MODULE_NAME' => 'Productos',
  'LBL_MODULE_TITLE' => 'Productos: Inicio',
  'LBL_SEARCH_FORM_TITLE' => 'Buscar Productos',
  'LBL_LIST_FORM_TITLE' => 'Listar Productos',
  'LBL_NEW_FORM_TITLE' => 'Crear Producto',
  'LBL_PRODUCT' => 'Producto:',
  'LBL_RELATED_PRODUCTS' => 'Productos Relacionados',
  'LBL_LIST_NAME' => 'Producto',
  'LBL_LIST_MANUFACTURER' => 'Proveedor',
  'LBL_LIST_LBL_MFT_PART_NUM' => 'Nº Pieza',
  'LBL_LIST_QUANTITY' => 'Cantidad',
  'LBL_LIST_COST_PRICE' => 'Coste',
  'LBL_LIST_DISCOUNT_PRICE' => 'Precio',
  'LBL_DEAL_TOT' => 'Descuento:',
  'LBL_DISCOUNT_RATE' => 'Tarifa de Descuento',
  'LBL_DISCOUNT_RATE_USDOLLAR' => 'Tarifa de Descuento (Dólares EEUU)',
  'LBL_DISCOUNT_TOTAL' => 'Descuento',
  'LBL_DISCOUNT_TOTAL_USDOLLAR' => 'Descuento (Dólares EEUU)',
  'LBL_SELECT_DISCOUNT' => '% de Descuento',
  'LBL_LIST_LIST_PRICE' => 'Precio de Lista',
  'LBL_LIST_STATUS' => 'Estado',
  'LBL_LIST_ACCOUNT_NAME' => 'Nombre de Cuenta',
  'LBL_LIST_CONTACT_NAME' => 'Nombre de Contacto',
  'LBL_LIST_QUOTE_NAME' => 'Nombre de Presupuesto',
  'LBL_LIST_DATE_PURCHASED' => 'Comprado',
  'LBL_LIST_SUPPORT_EXPIRES' => 'Caduca',
  'LBL_NAME' => 'Producto:',
  'LBL_URL' => 'URL Producto:',
  'LBL_QUOTE_NAME' => 'Nombre de Presupuesto:',
  'LBL_CONTACT_NAME' => 'Nombre de Contacto:',
  'LBL_DATE_PURCHASED' => 'Comprado:',
  'LBL_DATE_SUPPORT_EXPIRES' => 'Caducidad del Soporte:',
  'LBL_DATE_SUPPORT_STARTS' => 'Inicio del Soporte:',
  'LBL_COST_PRICE' => 'Coste:',
  'LBL_DISCOUNT_PRICE' => 'Precio Unitario:',
  'LBL_LIST_PRICE' => 'Precio de Lista:',
  'LBL_VENDOR_PART_NUM' => 'Número de Parte del Vendedor:',
  'LBL_MFT_PART_NUM' => 'Número de Parte del Fabricante:',
  'LBL_DISCOUNT_PRICE_DATE' => 'Fecha de Precio con Descuento:',
  'LBL_WEIGHT' => 'Peso:',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_TYPE' => 'Tipo:',
  'LBL_CATEGORY' => 'Categoría:',
  'LBL_QUANTITY' => 'Cantidad:',
  'LBL_STATUS' => 'Estado:',
  'LBL_TAX_CLASS' => 'Tipo de Impuesto:',
  'LBL_MANUFACTURER' => 'Fabricante:',
  'LBL_SUPPORT_DESCRIPTION' => 'Desc. del Soporte:',
  'LBL_SUPPORT_TERM' => 'Término del Soporte:',
  'LBL_SUPPORT_NAME' => 'Título del Soporte:',
  'LBL_SUPPORT_CONTACT' => 'Contacto del Soporte:',
  'LBL_PRICING_FORMULA' => 'Fórmula de Valoración:',
  'LBL_ACCOUNT_NAME' => 'Nombre de Cuenta:',
  'LNK_PRODUCT_LIST' => 'Productos',
  'LNK_NEW_PRODUCT' => 'Crear Producto',
  'NTC_DELETE_CONFIRMATION' => '¿Está seguro de eliminar este registro?',
  'NTC_REMOVE_CONFIRMATION' => '¿Está seguro de quitar esta relación entre productos?',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para eliminar el producto.',
  'LBL_CURRENCY' => 'Moneda:',
  'LBL_ASSET_NUMBER' => 'Múmero de Activo:',
  'LBL_SERIAL_NUMBER' => 'Número de Serie:',
  'LBL_BOOK_VALUE' => 'Valor Contable:',
  'LBL_BOOK_VALUE_DATE' => 'Fecha del Valor Contable:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Productos',
  'LBL_RELATED_PRODUCTS_TITLE' => 'Productos Relacionados',
  'LBL_WEBSITE' => 'Sitio web',
  'LBL_COST_USDOLLAR' => 'Costo (Dólares EEUU)',
  'LBL_DISCOUNT_USDOLLAR' => 'Precio Unitario (Dólares EEUU)',
  'LBL_LIST_USDOLLAR' => 'Precio de Lista (Dólares EEUU)',
  'LBL_PRICING_FACTOR' => 'Factor de Valoración',
  'LBL_ACCOUNT_ID' => 'ID Cuenta',
  'LBL_CONTACT_ID' => 'ID Contacto',
  'LBL_CATEGORY_NAME'=>'Nombre de Categoría:',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Notas',
  'LBL_MEMBER_OF' => 'Asociada a:',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proyectos',

  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Contratos',
  'LBL_CONTRACTS' => 'Contratos',  

  'LBL_PRODUCT_CATEGORIES' => 'Categorías de Productos',
  'LBL_PRODUCT_TYPES' => 'Tipos de Productos',
  'LBL_ASSIGNED_TO_NAME' => 'Asignado a:',
  'LBL_PRODUCT_TEMPLATE_ID'=>'ID de Plantilla de Producto:',
  'LBL_QUOTE_ID'=>'ID de Presupuesto',
  'LBL_CREATED_USER' => 'Usuario Creado',
  'LBL_MODIFIED_USER' => 'Usuario Modificado',
  'LBL_QUOTE' => 'Presupuesto',
  'LBL_CONTACT' => 'Contacto',
  'LBL_DISCOUNT_TOTAL' => 'Descuento Total',   
  'LBL_DISCOUNT_AMOUNT' => 'Cantidad Descontada',   
  'LBL_CURRENCY_SYMBOL_NAME' => 'Símbolo de Moneda',

  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Productos',
);


?>
