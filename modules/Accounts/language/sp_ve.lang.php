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
 * $Id: sp_ve.lang.php,v 2.1 2012/06/24 20:20:29 carlose Exp $
 * Source: SugarCRM 6.5
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Cuentas',
  'LBL_MODULE_TITLE' => 'Cuentas: Inicio',
  'LBL_SEARCH_FORM_TITLE' => 'Buscar Cuentas',
  'LBL_LIST_FORM_TITLE' => 'Lista de cuentas',
  'LBL_NEW_FORM_TITLE' => 'Nueva Cuenta',
  'LBL_MEMBER_ORG_FORM_TITLE' => 'Organizaciones Asociadas',
  'LBL_BUG_FORM_TITLE' => 'Cuenta',
  'LBL_LIST_ACCOUNT_NAME' => 'Nombre',
  'LBL_LIST_CITY' => 'Ciudad',
  'LBL_LIST_WEBSITE' => 'Sitio Web',
  'LBL_LIST_STATE' => 'Estado/Provincia',
  'LBL_LIST_PHONE' => 'Teléfono',
  'LBL_LIST_EMAIL_ADDRESS' => 'Dirección CorreoE',
  'LBL_LIST_CONTACT_NAME' => 'Nombre Contacto',
  'LBL_BILLING_ADDRESS_STREET_2' => 'Calle 2 dirección de cobro',
  'LBL_BILLING_ADDRESS_STREET_3' => 'Calle 3 dirección de cobro',
  'LBL_BILLING_ADDRESS_STREET_4' => 'Calle 4 dirección de cobro',
  'LBL_BILLING_ADDRESS_STREET' => 'Calle dirección de cobro:',
  'LBL_SHIPPING_ADDRESS_STREET_2' => 'Calle 2 dirección de envío',
  'LBL_SHIPPING_ADDRESS_STREET_3' => 'Calle 3 dirección de envío',
  'LBL_SHIPPING_ADDRESS_STREET_4' => 'Calle 4 dirección de envío',
  'LBL_SHIPPING_ADDRESS_STREET' => 'Calle dirección de envío:',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_name' => 'LBL_LIST_ACCOUNT_NAME',
  'db_website' => 'LBL_LIST_WEBSITE',
  'db_billing_address_city' => 'LBL_LIST_CITY',
//END DON'T CONVERT

    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documentos',
	// Dashlet Categories
	'LBL_CHARTS'    => 'Gráficos',
	'LBL_DEFAULT' => 'Vistas',
	'LBL_MISC'    => 'Misceláneos',
	'LBL_UTILS'    => 'Utilitarios',
	// END Dashlet Categories
  'LBL_ACCOUNT_INFORMATION' => 'Resumen',
  'LBL_ACCOUNT' => 'Cuenta:',
  'LBL_ACCOUNT_NAME' => 'Nombre Cuenta:',
  'LBL_PHONE' => 'Teléfono:',
  'LBL_PHONE_ALT' => 'Teléfono Alterno:',
  'LBL_WEBSITE' => 'Sitio Web:',
  'LBL_CREATED_ID'=>'Id Creado por',
  'LBL_CAMPAIGNS' =>'Campañas',
  'LBL_CAMPAIGN_ID' => 'ID Campaña',
  'LBL_FAX' => 'Fax:',
  'LBL_HOMEPAGE_TITLE' => 'Mis cuentas',
  'LBL_TICKER_SYMBOL' => 'Símbolo bursátil:',
  'LBL_OTHER_PHONE' => 'Otro Teléfono:',
  'LBL_ANY_EMAIL' => 'Cualquier Correo:',
  'LBL_ANY_PHONE' => 'Cualquier Teléfono:',
  'LBL_MEMBER_OF' => 'Asociada a:',
  'LBL_PHONE_OFFICE' => 'Teléfono Oficina:',
  'LBL_PHONE_FAX' => 'Fax Oficina:',
  'LBL_EMAIL' => 'CorreoE:',
	'LBL_EMAIL_OPT_OUT' => 'CorreoE excluído:',
	'LBL_EMAIL_ADDRESSES' => 'Direcciones correoE',
  'LBL_EMPLOYEES' => 'Empleados:',
  'LBL_OTHER_EMAIL_ADDRESS' => 'Otro Correo:',
  'LBL_OWNERSHIP' => 'Tipo sociedad:',
  'LBL_RATING' => 'Calificación:',
  'LBL_INDUSTRY' => 'Industria:',
  'LBL_SIC_CODE' => 'Identificación fiscal:',
  'LBL_TYPE' => 'Tipo:',
  'LBL_ANNUAL_REVENUE' => 'Ventas anuales:',
  'LBL_ADDRESS_INFORMATION' => 'Direcciones',
  'LBL_BILLING_ADDRESS' => 'Dirección Cobranza:',
  'LBL_BILLING_ADDRESS_CITY' => 'Ciudad dirección de cobro:',
  'LBL_BILLING_ADDRESS_STATE' => 'Estado/Provincia dirección de cobro:',
  'LBL_BILLING_ADDRESS_POSTALCODE' => 'Código postal dirección de cobro:',
  'LBL_BILLING_ADDRESS_COUNTRY' => 'País dirección de cobro:',
  'LBL_SHIPPING_ADDRESS_CITY' => 'Ciudad dirección de envío:',
  'LBL_SHIPPING_ADDRESS_STATE' => 'Estado/Provincia dirección de envío:',
  'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Código postal dirección de envío:',
  'LBL_SHIPPING_ADDRESS_COUNTRY' => 'País dirección de envío:',
  'LBL_SHIPPING_ADDRESS' => 'Dirección Envío:',
  'LBL_DATE_MODIFIED' => 'Fecha modificación:',
  'LBL_DATE_ENTERED' => 'Fecha creación:',
  'LBL_ANY_ADDRESS' => 'Cualquier Dirección:',
  'LBL_CITY' => 'Ciudad:',
  'LBL_STATE' => 'Estado/Provincia:',
  'LBL_POSTAL_CODE' => 'Código postal:',
  'LBL_COUNTRY' => 'País:',
  'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Copiar a Contactos',
  'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Copiar...',
  'LBL_DESCRIPTION_INFORMATION' => 'Información Adicional',
  'LBL_DESCRIPTION' => 'Descripción:',
  'NTC_COPY_BILLING_ADDRESS' => 'Copiar dirección cobranza a dirección de envío',
  'NTC_COPY_SHIPPING_ADDRESS' => 'Copiar dirección de envío a dirección de cobranza',
  'NTC_REMOVE_MEMBER_ORG_CONFIRMATION' => '¿Está seguro de quitar esta cuenta como miembro de una organización?',
  'NTC_REMOVE_ACCOUNT_CONFIRMATION' => '¿Está seguro de quitar esta cuenta?',
  'LBL_DUPLICATE' => 'Posible Cuenta Duplicada',
  'MSG_SHOW_DUPLICATES' => 'Crear este registro podría duplicar una cuenta. A continuación se muestran cuentas con nombres similares.<br>Presione Guardar para registrarla con los datos ingresados, o presione Cancelar para volver al módulo sin crear la cuenta.',
  'MSG_DUPLICATE' => 'Crear este registro podría duplicar una cuenta. A continuación se muestran cuentas con nombres similares.<br>Seleccione una cuenta de la lista o haga clic en Crear Cuenta para registrarla con los datos ingresados previamente..',
  'LNK_NEW_ACCOUNT' => 'Crear cuenta',
  'LNK_ACCOUNT_REPORTS' => 'Reportes cuenta',
  'LNK_ACCOUNT_LIST' => 'Ver cuentas',
  'LNK_IMPORT_ACCOUNTS' => 'Importar cuentas',
  'LBL_INVITEE' => 'Contactos',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para borrar la cuenta.',
  'NTC_DELETE_CONFIRMATION' => '¿Está seguro de borrar este registro?',
  'LBL_SAVE_ACCOUNT' => 'Guardar cuenta',
  'ACCOUNT_REMOVE_PROJECT_CONFIRM' => '¿Está seguro de quitar esta cuenta de este proyecto?',
  'LBL_USERS_ASSIGNED_LINK' => 'Usuarios Asignados',
  'LBL_USERS_MODIFIED_LINK' => 'Usuarios Modificados',
  'LBL_USERS_CREATED_LINK' => 'Creado por Usuarios',
  'LBL_TEAMS_LINK' => 'Equipos',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Cuentas',
  'LBL_PRODUCTS_TITLE' => 'Productos',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
  'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Organizaciones Asociadas',
  'LBL_NAME' => 'Nombre:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Interesados',
  'LBL_CASES_SUBPANEL_TITLE' => 'Casos',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Productos',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Cotizaciones',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Fallas',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proyectos',
  'LBL_ASSIGNED_TO_NAME' => 'Asignado a:',
	'LBL_ASSIGNED_TO_ID' => 'Usuario asignado:',
	'LBL_ASSIGNED_USER_NAME' => 'Asignado a:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE'=>'Cuentas',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Proyectos',
	'LBL_COPY' => 'Copiar' /*for 508 compliance fix*/,
    //For export labels
    'LBL_ACCOUNT_TYPE' => 'Tipo cuenta',
    'LBL_CAMPAIGN_ID' => 'ID Campaña',
    'LBL_PARENT_ID' => 'ID Padre',
    'LBL_PHONE_ALTERNATE' => 'Teléfono alterno',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Nombre usuario asignado',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Correos contactos relacionados',
);


?>
