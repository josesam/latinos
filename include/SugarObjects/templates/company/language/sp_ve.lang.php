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
 * $Id: sp_ve.lang.php,v 2.1 2012/10/23 15:05:29 carlose Exp $
 * Source: SugarCRM 6.5.6
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array (
	'ACCOUNT_REMOVE_PROJECT_CONFIRM' => '¿Está seguro de quitar esta cuenta de este proyecto?',
	'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para eliminar la cuenta.',
	'LBL_ACCOUNT_NAME' => 'Nombre de Cuenta:',
	'LBL_ACCOUNT' => 'Cuenta:',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Actividades',
	'LBL_ADDRESS_INFORMATION' => 'Direcciones',
	'LBL_ANNUAL_REVENUE' => 'Ingresos anuales:',
	'LBL_ANY_ADDRESS' => 'Cualquier dirección:',
	'LBL_ANY_EMAIL' => 'Cualquier correo-e:',
	'LBL_ANY_PHONE' => 'Cualquier teléfono:',
	'LBL_ASSIGNED_TO_NAME' => 'Usuario:',
	'LBL_RATING'=>'Calificación',
	'LBL_ASSIGNED_TO'=>'Asignado a:',
	'LBL_ASSIGNED_USER'=>'Asignado a:',
	'LBL_ASSIGNED_TO_ID' => 'Asignado a:',
	'LBL_BILLING_ADDRESS_CITY' => 'Ciudad dirección de facturación:',
	'LBL_BILLING_ADDRESS_COUNTRY' => 'País dirección de facturación:',
	'LBL_BILLING_ADDRESS_POSTALCODE' => 'CP dirección de facturación:',
	'LBL_BILLING_ADDRESS_STATE' => 'Estado/Provincia dirección de facturación:',
	'LBL_BILLING_ADDRESS_STREET_2' =>'Calle 2 dirección de facturación',
	'LBL_BILLING_ADDRESS_STREET_3' =>'Calle 3 dirección de facturación',
	'LBL_BILLING_ADDRESS_STREET_4' =>'Calle 4 dirección de facturación',
	'LBL_BILLING_ADDRESS_STREET' => 'Calle dirección de facturación:',
	'LBL_BILLING_ADDRESS' => 'Dirección de Facturación:',
	'LBL_ACCOUNT_INFORMATION' => 'Información de la cuenta',
	'LBL_CITY' => 'Ciudad:',
	'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
	'LBL_COUNTRY' => 'País:',
	'LBL_DATE_ENTERED' => 'Creado:',
	'LBL_DATE_MODIFIED' => 'Modificado:',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Cuentas',
	'LBL_DESCRIPTION_INFORMATION' => 'Información adicional',
	'LBL_DESCRIPTION' => 'Descripción:',
	'LBL_DUPLICATE' => 'Posible cuenta duplicada',
	'LBL_EMAIL' => 'Correo-e:',
        'LBL_EMAIL_ADDRESS'=>'Dirección correoE',
        'LBL_EMAIL_ADDRESSES'=>'Direcciones correoE',
	'LBL_EMPLOYEES' => 'Empleados:',
	'LBL_FAX' => 'Fax:',
	'LBL_INDUSTRY' => 'Industria:',
	'LBL_LIST_ACCOUNT_NAME' => 'Nombre',
	'LBL_LIST_CITY' => 'Ciudad',
	'LBL_LIST_EMAIL_ADDRESS' => 'Correo-e',
	'LBL_LIST_PHONE' => 'Teléfono',
	'LBL_LIST_STATE' => 'Estado/Provincia',
	'LBL_LIST_WEBSITE' => 'Sitio Web',
	'LBL_MEMBER_OF' => 'Asociada a:',
	'LBL_MEMBER_ORG_FORM_TITLE' => 'Organizaciones asociadas',
	'LBL_MEMBER_ORG_SUBPANEL_TITLE'=>'Organizaciones asociadas',
	'LBL_NAME'=>'Nombre:',
	'LBL_OTHER_EMAIL_ADDRESS' => 'Correo-e alterno:',
	'LBL_OTHER_PHONE' => 'Teléfono. alterno:',
	'LBL_OWNERSHIP' => 'Propietario:',
	'LBL_PARENT_ACCOUNT_ID' => 'ID Cuenta Padre',
	'LBL_PHONE_ALT' => 'Teléfono alterno:',
	'LBL_PHONE_FAX' => 'Fax oficina:',
	'LBL_PHONE_OFFICE' => 'Teléfono oficina:',
	'LBL_PHONE' => 'Teléfono:',
	'LBL_POSTAL_CODE' => 'Código Postal:',
	'LBL_PUSH_BILLING' => 'Emisión de Facturas', // TODO: Revisar.
	'LBL_PUSH_SHIPPING' => 'Emisión de Envíos', // TODO: Revisar.
	'LBL_SAVE_ACCOUNT' => 'Guardar cuenta',
	'LBL_SHIPPING_ADDRESS_CITY' => 'Ciudad dirección de envío:',
	'LBL_SHIPPING_ADDRESS_COUNTRY' => 'País dirección de envío:',
	'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'CP dirección de envío:',
	'LBL_SHIPPING_ADDRESS_STATE' => 'Estado/Provincia dirección de envío:',
	'LBL_SHIPPING_ADDRESS_STREET_2' => 'Calle 2 dirección de envío',
	'LBL_SHIPPING_ADDRESS_STREET_3' => 'Calle 3 dirección de envío',
	'LBL_SHIPPING_ADDRESS_STREET_4' => 'Calle 4 dirección de envío',
	'LBL_SHIPPING_ADDRESS_STREET' => 'Calle dirección de envío:',
	'LBL_SHIPPING_ADDRESS' => 'Dirección de envío:',

	'LBL_STATE' => 'Estado/Provincia:',
	'LBL_TEAMS_LINK'=>'Equipos',
	'LBL_TICKER_SYMBOL' => 'Símbolo bursátil:',
	'LBL_TYPE' => 'Tipo:',
	'LBL_USERS_ASSIGNED_LINK'=>'Usuarios asignados',
	'LBL_USERS_CREATED_LINK'=>'Creado por usuarios',
	'LBL_USERS_MODIFIED_LINK'=>'Usuarios modificados',
	'LBL_VIEW_FORM_TITLE' => 'Vista de Cuenta',
	'LBL_WEBSITE' => 'Sitio Web:',

	'LNK_ACCOUNT_LIST' => 'Cuentas',
	'LNK_NEW_ACCOUNT' => 'Nueva Cuenta',

	'MSG_DUPLICATE' => 'La creación de esta cuenta podría generar una cuenta duplicada. A continuación se muestra la lista de cuentas con nombres similares<br>Haga clic en Guardar para continuar la creación de una nueva cuenta con los datos introducidos previamente o puede hacer clic en Cancelar.',
	'MSG_SHOW_DUPLICATES' => 'La creación de esta cuenta podría generar un duplicado. A continuación se muestra la lista de cuentas con nombres similares<br>Puede hacer clic en Guardar para continuar con la creación de esta cuenta con los datos previamente introducidos o puede hacer clic en Cancelar para volver al módulo sin crear la cuenta.',

	'NTC_COPY_BILLING_ADDRESS' => 'Copiar dirección de facturación a dirección de envío',
	'NTC_COPY_BILLING_ADDRESS2' => 'Copiar a dirección de envío',
	'NTC_COPY_SHIPPING_ADDRESS' => 'Copiar dirección de envío a dirección de facturación',
	'NTC_COPY_SHIPPING_ADDRESS2' => 'Copiar a dirección de facturación',
	'NTC_DELETE_CONFIRMATION' => '¿Está seguro de eliminar este registro?',
	'NTC_REMOVE_ACCOUNT_CONFIRMATION' => '¿Está seguro de quitar este registro?',
	'NTC_REMOVE_MEMBER_ORG_CONFIRMATION' => '¿Está seguro de quitar este registro como organización asociada?',
    'LBL_EDIT_BUTTON' => 'Editar',
    'LBL_REMOVE' => 'Quitar',

);
