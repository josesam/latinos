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
  'LBL_MODULE_NAME' => 'Cotizaciones',
  'LBL_MODULE_TITLE' => 'Cotizaciones: Inicio',
  'LBL_SEARCH_FORM_TITLE' => 'Buscar cotizaciones',
  'LBL_LIST_FORM_TITLE' => 'Listar cotizaciones',
  'LBL_QUOTE_NAME' => 'Asunto de la cotización:',
  'LBL_QUOTE' => 'Cotización:',
  'LBL_NAME' => 'Nombre cotización',
  'LBL_INVITEE' => 'Contactos',
  'LBL_LIST_TAXCLASS' => 'Tipos de Impuesto',
  'LBL_LIST_MANUFACTURER_PART_NUM' => 'Núm. Fab.',
  'LBL_LIST_PRICING_FORMULA' => 'Fórmula de Valoración',
  'LBL_LIST_PRICING_FACTOR' => 'Factor',
  'LBL_LIST_PRODUCT_NAME' => 'Producto',
  'LBL_LIST_QUANTITY' => 'Cantidad',
  'LBL_LIST_COST_PRICE' => 'Costo',
  'LBL_LIST_DISCOUNT_PRICE' => 'Precio Unitario',
  'LBL_LIST_DEAL_TOT'=> 'Descuento',
  'LBL_LIST_LIST_PRICE' => 'Lista',
  'LBL_LIST_QUOTE_NAME' => 'Asunto',
  'LBL_LIST_ACCOUNT_NAME' => 'Nombre de Cuenta',
  'LBL_LIST_AMOUNT' => 'Cantidad',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuario Asignado',
  'LBL_LIST_GRAND_TOTAL' => 'Totales',
  'LBL_CALC_GRAND' => 'Mostrar Totales:',
  'LBL_SHOW_LINE_NUMS' => 'Mostrar Números&nbsp;de&nbsp;Línea:',
  'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED' => 'Válido hasta',
  'LBL_LIST_DATE_QUOTE_CLOSED' => 'Cierre Real',
  'LBL_LIST_QUOTE_STAGE' => 'Etapa',
  'LBL_BILLING_ACCOUNT_NAME' => 'Nombre de cuenta de facturación:',
  'LBL_BILLING_CONTACT_ID' => 'Id de contacto de facturación:',
  'LBL_BILLING_CONTACT_NAME' => 'Nombre de contacto de facturación:',
  'LBL_BILLING_ADDRESS_STREET' => 'Dirección de Facturación',
  'LBL_BILLING_ADDRESS_CITY' => 'Ciudad de facturación',
  'LBL_BILLING_ADDRESS_STATE' => 'Estado/Provincia de facturación',
  'LBL_BILLING_ADDRESS_POSTAL_CODE' => 'Código postal de facturación',
  'LBL_BILLING_ADDRESS_COUNTRY' => 'País de facturación',
  'LBL_SHIPPING_ACCOUNT_NAME' => 'Nombre de cuenta de envío:',
  'LBL_SHIPPING_CONTACT_ID' => 'Id de contacto de envío:',
  'LBL_SHIPPING_CONTACT_NAME' => 'Nombre de contacto de envío:',
  'LBL_SHIPPING_ADDRESS_STREET' => 'Dirección de envío',
  'LBL_SHIPPING_ADDRESS_CITY' => 'Ciudad de envío',
  'LBL_SHIPPING_ADDRESS_STATE' => 'Estado/Provincia de envío',
  'LBL_SHIPPING_ADDRESS_POSTAL_CODE' => 'Código postal de envío',
  'LBL_SHIPPING_ADDRESS_COUNTRY' => 'País de envío',
  'LBL_AMOUNT' => 'Cantidad',
  'LBL_TYPE' => 'Tipo',
  'LBL_CHECK_DATA' => 'Entrada de datos no válida: por favor, compruebe sus datos y asegúrese de que ha usado números válidos (0-9 ó \'.\')',
  'LBL_NEXT_STEP' => 'Siguiente paso',
  'LBL_LEAD_SOURCE' => 'Origen del interesado',
  'LBL_SALES_STAGE' => 'Etapa cotización',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'LBL_ADD_ROW' => 'Agregar Fila',
  'LBL_REMOVE_ROW' => 'Quitar Fila',
  'LBL_QUOTE_NUM' => 'Número de cotización:',
  'LBL_SUBTOTAL' => 'Subtotal:',
  'LBL_TAX' => 'Impuestos:',
  'LBL_SHIPPING' => 'Envío:',
  'LBL_TOTAL' => 'Total:',
  'LBL_CURRENCY' => 'Moneda:',
  'LBL_LINE_ITEM_INFORMATION' => 'Línea de Detalle',
  'LBL_ADDRESS_INFORMATION' => 'Información sobre Dirección',
  'LBL_BILL_TO' => 'Cargar a',
  'LBL_SHIP_TO' => 'Enviar a',
  'LBL_BILLING_CONTACT' => 'Contacto:',
  'LBL_SHIPPING_CONTACT' => 'Contacto:',
  'LBL_BILLING_ACCOUNT' => 'Cuenta:',
  'LBL_SHIPPING_ACCOUNT' => 'Cuenta:',
  'LBL_BILLING_ADDRESS' => 'Dirección de Facturación:',
  'LBL_SHIPPING_ADDRESS' => 'Dirección de Envío:',
  'LBL_ANY_ADDRESS' => 'Otra Dirección:',
  'LBL_CITY' => 'Ciudad:',
  'LBL_STATE' => 'Estado/Provincia:',
  'LBL_POSTAL_CODE' => 'Código Postal:',
  'LBL_COUNTRY' => 'País:',
  'LBL_DESCRIPTION_INFORMATION' => 'Información de Descripción',
  'LBL_CONTACT_QUOTE_FORM_TITLE' => 'Contacto-cotización:',
  'LBL_CONTACT_NAME' => 'Nombre del Contacto:',
  'LBL_CONTACT_ROLE' => 'Rol del Contacto:',
  'LBL_SHIPPING_PROVIDER' => 'Transportista:',
  'LBL_ACCOUNT_NAME' => 'Nombre de Cuenta:',
  'LBL_OPPORTUNITY_NAME' => 'Nombre de Oportunidad:',
  'LBL_DATE_QUOTE_EXPECTED_CLOSED' => 'Válido Hasta:',
  'LBL_DATE_QUOTE_CLOSED' => 'Fecha de Cierre Real:',
  'LBL_PURCHASE_ORDER_NUM' => 'Núm. Pedido de Compra:',
  'LBL_TAXRATE' => 'Tipo de Impuesto:',
  'LBL_QUOTE_STAGE' => 'Etapa de cotización:',
  'LBL_BUNDLE_STAGE' => 'Etapa de Grupo:',
  'LBL_BUNDLE_NAME' => 'Nombre de Grupo:',
  'LBL_BUNDLE_DISCOUNT'=> 'Descuento:',
  'LBL_ADD_GROUP' => 'Agregar Grupo',
  'LBL_DELETE_GROUP' => 'Eliminar Grupo',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_DUPLICATE' => 'Cotización posiblemente duplicada',
  'LBL_EMAIL_QUOTE_FOR' => 'Cotización para: ',
  'LBL_EMAIL_DEFAULT_DESCRIPTION' => 'Cotización elaborada para su consideración(Puede cambiar el texto)',
  'LBL_EMAIL_ATTACHMENT' => 'Adjunto de correo-e: ',
  'MSG_DUPLICATE' => 'Está creando una cotización duplicada. Puede seleccionar una cotización de la siguiente lista o hacer clic en Guardar para duplicarla.',
  'NTC_COPY_BILLING_ADDRESS' => 'Copiar dirección de facturación a dirección de envío',
  'NTC_COPY_SHIPPING_ADDRESS' => 'Copiar dirección de envío a dirección de facturación',
  'NTC_COPY_BILLING_ADDRESS2' => 'Copiar a dirección de envío',
  'NTC_COPY_SHIPPING_ADDRESS2' => 'Copiar a dirección de facturación',
  'LBL_NEW_FORM_TITLE' => 'Crear cotización',
  'LNK_NEW_QUOTE' => 'Crear cotización',
  'LNK_QUOTE_LIST' => 'Cotización',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para eliminar la cotización.',
  'NTC_REMOVE_QUOTE_CONFIRMATION' => '¿Está seguro de quitar a este contacto de la cotización?',
  'NTC_REMOVE_PRODUCT_CONFIRMATION' => '¿Está seguro de eliminar esta línea de detalle?',
  'LBL_PDF_QUOTE_NUMBER' => 'Número de cotización:',
  'LBL_PDF_QUOTE_TITLE' => 'Cotización',
  'LBL_PDF_BILLING_ADDRESS' => 'Cobrar a',
  'LBL_PDF_SHIPPING_ADDRESS' => 'Enviar a',
  'LBL_PDF_SALES_PERSON' => 'Comercial:',
  'LBL_PDF_QUOTE_DATE' => 'Fecha:',
  'LBL_PDF_QUOTE_CLOSE' => 'Válido Hasta:',
  'LBL_PDF_GRAND_TOTAL' => 'Totales',
  'LBL_PDF_ITEM_QUANTITY' => 'Cantidad',
  'LBL_PDF_ITEM_PRODUCT' => 'Producto',
  'LBL_PDF_ITEM_LIST_PRICE' => 'Precio de Lista',
  'LBL_PDF_ITEM_UNIT_PRICE' => 'Precio Unitario',
  'LBL_PDF_ITEM_EXT_PRICE' => 'Precio Ext.',
  'LBL_PDF_ITEM_DISCOUNT' => 'Descuento',
  'LBL_PDF_ITEM_SELECT_DISCOUNT' => ' ',
  'LBL_PDF_PART_NUMBER' => 'Número de Pieza:',
  'LBL_PDF_CURRENCY' => 'Moneda:',
  'LBL_PDF_TAX_RATE' => 'Tipo de Impuestos:',
  'LBL_PDF_TAX' => 'Impuestos:',
  'LBL_PDF_SUBTOTAL' => 'Subtotal:',
  'LBL_PDF_TOTAL' => 'Total:',
  'LBL_PDF_DISCOUNT' => 'Descuento:',
  'LBL_PDF_NEW_SUB' => 'Subtotal:',
  'LBL_PDF_SHIPPING' => 'Envío:',
  'LBL_PDF_SHIPPING_COMPANY' => 'Transportista:',
  'QUOTE_REMOVE_PROJECT_CONFIRM' => '¿Está seguro de quitar esta cotización del proyecto?',
  'LBL_TOTAL_USDOLLAR' => 'Total (Dólares EEUU)',
  'LBL_QUOTE_TYPE' => 'Tipo de cotización',
  'LBL_TAXABLE' => 'Sujeto a Impuestos',
  'LBL_NON_TAXABLE' => 'Libre de Impuestos',
  'LBL_QUOTE_LAYOUT_DOES_NOT_EXIST_ERROR' => 'el archivo de diseño de cotización no existe: $layout',
  'LBL_QUOTE_LAYOUT_REGISTERED_ERROR' => 'el diseño de cotización no ha sido registrado en modules/Quotes/Layouts.php',
  'LBL_RENAME_ERROR' => 'ERROR: no puede moverse el archivo PDF a $destination. Intente dar permisos de escritura en el servidor web para ese directorio',
  'LBL_ORDER_STAGE' => 'Etapa del Pedido',
  'LBL_SUBTOTAL_USDOLLAR' => 'Subtotal (Dólares EEUU)',
  'LBL_SHIPPING_USDOLLAR' => 'Envío (Dólares EEUU)',
  'LBL_DEAL_TOT'=>'descuento total',
  'LBL_DEAL_TOT_USDOLLAR'=>'descuento total (Dólares EEUU)',
  'LBL_DISCOUNT_TOTAL' => 'Descuento:',
  'LBL_NEW_SUB' => 'Subtotal Descontado:',
  'LBL_TAX_USDOLLAR' => 'Impuestos (Dólares EEUU)',
  'LBL_CREATED_BY' => 'Creado Por',
  'LBL_MODIFIED_BY' => 'Modificado Por',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Cotización',
  'LBL_HISOTRY_SUBPANEL_TITLE' => 'Historial',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
  'LBL_PROPOSAL' => 'Cotización',
  'LBL_INVOICE' => 'Factura',
  'LBL_PDF_INVOICE_TITLE' => 'Factura',
  'LBL_PDF_INVOICE_NUMBER' => 'Número de Factura',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proyectos',
  'LBL_ORIGINAL_PO_DATE' => 'Fecha original Orden de Compra:', 
  'LBL_PAYMENT_TERMS' => 'Forma de Pago:',
  'LBL_ADD_COMMENT' => 'Agregar Comentario',
  'LBL_REMOVE_COMMENT' => 'Quitar Comentario',
  'NTC_REMOVE_COMMENT_CONFIRMATION' => '¿Está seguro de quitar este comentario de la cotización?',
  'LBL_LIST_QUOTE_NUM' => 'Número',
  'LBL_SYSTEM_ID' => 'ID Sistema',
  'LBL_CONTRACTS'=>'Contratos',
  'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Contratos',
  'LBL_ACCOUNT_ID'=>'Id Cuenta',
  'LNK_QUOTE_REPORTS' => 'Informes de cotizaciones',
  'LBL_ASSIGNED_TO_NAME'=>'Asignado a:',
  'PDF_FORMAT'=>'Formato PDF:',
  'LBL_ASSIGNED_TO_ID'=>'Asignado a ID',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Proyectos',

);


?>
