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
 * $Id: sp_ve.lang.php,v 2.1 2011/02/14 20:20:29 carlose Exp $
 * Source: SugarCRM 6.4
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Oportunidades',
  'LBL_MODULE_TITLE' => 'Oportunidades: Inicio',
  'LBL_SEARCH_FORM_TITLE' => 'Buscar Oportunidades',
  'LBL_LIST_FORM_TITLE' => 'Listar Oportunidades',
  'LBL_OPPORTUNITY_NAME' => 'Nombre oportunidad:',
  'LBL_OPPORTUNITY' => 'Oportunidad:',
  'LBL_NAME' => 'Nombre oportunidad',
  'LBL_INVITEE' => 'Contactos',
  'LBL_LIST_OPPORTUNITY_NAME' => 'Oportunidad',
  'LBL_LIST_ACCOUNT_NAME' => 'Nombre Cuenta',
  'LBL_LIST_AMOUNT' => 'Monto oportunidad',
  'LBL_LIST_AMOUNT_USDOLLAR' => 'Monto en dólares EEUU',
  'LBL_AMOUNT' => 'Monto oportunidad',
  'LBL_AMOUNT_USDOLLAR' => 'Monto en dólares EEUU',
  'LBL_LIST_DATE_CLOSED' => 'Fecha cierre',
  'LBL_LIST_SALES_STAGE' => 'Etapa venta',
  'LBL_ACCOUNT_ID' => 'ID Cuenta',
  'LBL_CURRENCY_ID' => 'ID Moneda',
  'LBL_TEAM_ID' => 'ID Equipo',
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
  'UPDATE' => 'Oportunidad - Actualizar moneda',
  'UPDATE_DOLLARAMOUNTS' => 'Actualizar montos en dólares',
  'UPDATE_VERIFY' => 'Verificar montos',
  'UPDATE_VERIFY_TXT' => 'Verifica que los montos en las oportunidades contengan solo caracteres numéricos(0-9) y separador decimal(.)',
  'UPDATE_FIX' => 'Corregir montos',
  'UPDATE_FIX_TXT' => 'Intenta arreglar un monto no válido partiendo del valor almacenado. Previamente se realiza un respaldo de dicho valor en el campo amount_backup. Si percibe problemas al ejecutar esta opción, no la vuelva a ejecutar sin antes restaurar desde el respaldo, de lo contrario podría sobrescribir el respaldo con datos erróneos.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Actualiza los montos en dólares basado en la tasa de cambio registrada. Este valor se usa para generar Gráficos y otros Reportes.',
  'UPDATE_CREATE_CURRENCY' => 'Creando nueva moneda:',
  'UPDATE_VERIFY_FAIL' => 'Falló verificación del registro:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Monto Actual:',
  'UPDATE_VERIFY_FIX' => 'Ejecutar Corrección produciría',
  'UPDATE_INCLUDE_CLOSE' => 'Incluír registros cerrados',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Nuevo monto:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Nueva moneda:',
  'UPDATE_DONE' => 'Listo',
  'UPDATE_BUG_COUNT' => 'Se encontraron problemas y se intentó resolverlos:',
  'UPDATE_BUGFOUND_COUNT' => 'Problemas encontrados:',
  'UPDATE_COUNT' => 'Registros actualizados:',
  'UPDATE_RESTORE_COUNT' => 'Montos restaurados:',
  'UPDATE_RESTORE' => 'Restaurar montos',
  'UPDATE_RESTORE_TXT' => 'Restaura los montos desde el respaldo creado durante Corrección.',
  'UPDATE_FAIL' => 'No se puede actualizar - ',
  'UPDATE_NULL_VALUE' => 'Monto es NULL, se le asigna 0 -',
  'UPDATE_MERGE' => 'Unificar Monedas',
  'UPDATE_MERGE_TXT' => 'Unifica varias monedas en una sola. Si se ha registrado la misma moneda varias veces, podrían consolidarse los registros. Esto afecta a todos los módulos.',
  'LBL_ACCOUNT_NAME' => 'Nombre Cuenta:',
  'LBL_AMOUNT' => 'Monto:',
  'LBL_CURRENCY' => 'Moneda:',
  'LBL_DATE_CLOSED' => 'Fecha estimada cierre:',
  'LBL_TYPE' => 'Tipo:',
  'LBL_NEXT_STEP' => 'Próximo paso:',
  'LBL_LEAD_SOURCE' => 'Origen Interesado:',
  'LBL_SALES_STAGE' => 'Etapa venta:',
  'LBL_PROBABILITY' => 'Probabilidad (%):',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_DUPLICATE' => 'Oportunidad posiblemente duplicada',
  'MSG_DUPLICATE' => 'Crear este registro podría duplicar una oportunidad. Seleccione una oportunidad de la lista o haga clic en Guardar Oportunidad para registrarla con los datos ingresados previamente.',
  'LBL_NEW_FORM_TITLE' => 'Crear oportunidad',
  'LNK_NEW_OPPORTUNITY' => 'Crear oportunidad',
  'LNK_OPPORTUNITY_REPORTS' => 'Reportes oportunidades',
  'LNK_OPPORTUNITY_LIST' => 'Ver oportunidades',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para borrar la oportunidad.',
  'LBL_TOP_OPPORTUNITIES' => 'Mis mejores oportunidades',
  'NTC_REMOVE_OPP_CONFIRMATION' => '¿Está seguro de quitar este contacto de esta oportunidad?',
  'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => '¿Está seguro de quitar esta oportunidad de este proyecto?',
  'LBL_AMOUNT_BACKUP' => 'Respaldo monto',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Oportunidades',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
  'LBL_RAW_AMOUNT' => 'Cantidad aproximada',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Interesados',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
  'LBL_DOCUMENTS' => 'Documentos',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documentos',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Cotizaciones',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proyectos',
  'LBL_ASSIGNED_TO_ID' => 'Asignado a',
  'LBL_ASSIGNED_TO_NAME' => 'Asignado a:',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Asignado a',
  'LBL_MY_CLOSED_OPPORTUNITIES' => 'Mis oportunidades cerradas',
  'LBL_CLOSED_WON_OPPORTUNITIES' => 'Oportunidades cerradas ganadas',
  'LBL_CAMPAIGN_OPPORTUNITY' => 'Campañas',
  'LABEL_PANEL_ASSIGNMENT' => 'Asignación',
  'LNK_IMPORT_OPPORTUNITIES' => 'Importar oportunidades',
  'LBL_EDITLAYOUT' => 'Editar diseño' /*for 508 compliance fix*/,
  //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'ID Campaña',
    'LBL_OPPORTUNITY_TYPE' => 'Tipo oportunidad',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Nombre usuario asignado',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID Asignado a',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'ID Modificado por',
    'LBL_EXPORT_CREATED_BY' => 'ID Creado por',
    'LBL_EXPORT_NAME'=>'Nombre',

  // SNIP
  'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Correos contactos relacionados',
);


?>
