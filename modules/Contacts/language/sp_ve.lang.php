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
 * $Id: sp_ve.lang.php,v 2.1 2012/02/08 19:30:29 carlose Exp $
 * Source: SugarCRM 6.4
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array (
    //DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_last_name' => 'LBL_LIST_LAST_NAME',
  'db_first_name' => 'LBL_LIST_FIRST_NAME',
  'db_title' => 'LBL_LIST_TITLE',
  'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
  'db_email2' => 'LBL_LIST_OTHER_EMAIL_ADDRESS',
    //END DON'T CONVERT
  'LNK_CONTACT_REPORTS' => 'Reportes Contacto',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para borrar el contacto.',
  'LBL_ACCOUNT_ID' => 'ID Cuenta',
  'LBL_ACCOUNT_NAME' => 'Nombre Cuenta:',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
  'LBL_ADD_BUSINESSCARD' => 'Ingresar Tarjeta Presentación',
  'LBL_ADDMORE_BUSINESSCARD' => 'Ingresar otra Tarjeta de Presentación',
  'LBL_ADDRESS_INFORMATION' => 'Direcciones',
    'LBL_ALTERNATE_ADDRESS' => 'Dirección Alterna:',
    'LBL_ALT_ADDRESS' => 'Dirección Alterna:',
  'LBL_ALT_ADDRESS_CITY' => 'Ciudad dirección alterna',
  'LBL_ALT_ADDRESS_COUNTRY' => 'País dirección alterna',
  'LBL_ALT_ADDRESS_POSTALCODE' => 'Código Postal dirección alterna',
  'LBL_ALT_ADDRESS_STATE' => 'Estado/Provincia dirección alterna',
  'LBL_STREET' => 'Calle',
  'LBL_ALT_ADDRESS_STREET_2' => 'Calle 2 dirección alterna',
  'LBL_ALT_ADDRESS_STREET_3' => 'Calle 3 dirección alterna',
  'LBL_ALT_ADDRESS_STREET' => 'Calle dirección alterna',
  'LBL_ALTERNATE_ADDRESS' => 'Otra dirección:',
  'LBL_ANY_ADDRESS' => 'Cualquier dirección:',
  'LBL_ANY_EMAIL' => 'Cualquier correo:',
  'LBL_ANY_PHONE' => 'Cualquier teléfono:',
  'LBL_ASSIGNED_TO_NAME' => 'Asignado a',
  'LBL_ASSISTANT_PHONE' => 'Teléfono asistente:',
  'LBL_ASSISTANT' => 'Asistente:',
  'LBL_BIRTHDATE' => 'Cumpleaños:',
  'LBL_BUSINESSCARD' => 'Tarjeta de Presentacion',
  'LBL_CITY' => 'Ciudad:',
  'LBL_CONTACT_INFORMATION' => 'Resumen',
  'LBL_CONTACT_NAME' => 'Nombre Contacto:',
  'LBL_CONTACT_OPP_FORM_TITLE' => 'Contacto-Oportunidad:',
  'LBL_CONTACT_ROLE' => 'Rol:',
  'LBL_CONTACT' => 'Contacto:',
  'LBL_COUNTRY' => 'País:',
  'LBL_CREATED_ACCOUNT' => 'Nueva cuenta creada',
  'LBL_CREATED_CALL' => 'Nueva llamada creada',
  'LBL_CREATED_CONTACT' => 'Nuevo contacto creado',
  'LBL_CREATED_MEETING' => 'Nueva reunión creada',
  'LBL_CREATED_OPPORTUNITY' => 'Nueva oportunidad creada',
  'LBL_DATE_MODIFIED' => 'Fecha Modificación',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Contactos',
  'LBL_DEPARTMENT' => 'Departamento:',
  'LBL_DESCRIPTION_INFORMATION' => 'Información adicional',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Reportes directos',
  'LBL_DO_NOT_CALL' => 'No Llamar:',
  'LBL_DUPLICATE' => 'Contacto posiblemente duplicado',
  'LBL_EMAIL_ADDRESS' => 'CorreoE:',
  'LBL_EMAIL_OPT_OUT' => 'Excluír de CorreoE:',
  'LBL_EXISTING_ACCOUNT' => 'Usada una cuenta existente',
  'LBL_EXISTING_CONTACT' => 'Usado un contacto existente',
  'LBL_EXISTING_OPPORTUNITY' => 'Usada una oportunidad existente',
  'LBL_FAX_PHONE' => 'Fax:',
  'LBL_FIRST_NAME' => 'Nombre:',
  'LBL_FULL_NAME' => 'Nombre y apellido:',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
  'LBL_HOME_PHONE' => 'Teléfono residencia:',
  'LBL_ID' => 'ID:',
  'LBL_IMPORT_VCARD' => 'Importar vCard',
  'LBL_IMPORT_VCARDTEXT' => 'Crear un contacto automáticamente importando una vCard desde un archivo.',
  'LBL_INVALID_EMAIL' => 'CorreoE No válido:',
  'LBL_INVITEE' => 'Reportes Directos',
  'LBL_LAST_NAME' => 'Apellido:',
  'LBL_LEAD_SOURCE' => 'Origen Interesado:',
  'LBL_LIST_ACCEPT_STATUS' => 'Status aceptación',
  'LBL_LIST_ACCOUNT_NAME' => 'Nombre Cuenta',
  'LBL_LIST_CONTACT_NAME' => 'Nombre Contacto',
  'LBL_LIST_CONTACT_ROLE' => 'Rol',
  'LBL_LIST_EMAIL_ADDRESS' => 'CorreoE',
  'LBL_LIST_FIRST_NAME' => 'Nombre',
  'LBL_LIST_FORM_TITLE' => ' Lista de contactos',
  'LBL_LIST_LAST_NAME' => 'Apellido',
  'LBL_LIST_NAME' => 'Nombre',
  'LBL_LIST_OTHER_EMAIL_ADDRESS' => 'Otro correo',
  'LBL_LIST_PHONE' => 'Teléfono',
  'LBL_LIST_TITLE' => 'Cargo',
  'LBL_MOBILE_PHONE' => 'Celular:',
  'LBL_MODIFIED' => 'ID Usuario modificador:',
  'LBL_MODULE_NAME' => 'Contactos',
  'LBL_MODULE_TITLE' => 'Contactos: Inicio',
  'LBL_NAME' => 'Nombre:',
  'LBL_NEW_FORM_TITLE' => 'Nuevo Contacto',
  'LBL_NEW_PORTAL_PASSWORD' => 'Contraseña Nuevo Portal:',
  'LBL_NOTE_SUBJECT' => 'Asunto Nota',
  'LBL_OFFICE_PHONE' => 'Teléfono Oficina:',
  'LBL_OPP_NAME' => 'Nombre Oportunidad:',
  'LBL_OPPORTUNITY_ROLE_ID' => 'ID Rol Oportunidad:',
  'LBL_OPPORTUNITY_ROLE' => 'Rol Oportunidad',
  'LBL_OTHER_EMAIL_ADDRESS' => 'Otro Correo:',
  'LBL_OTHER_PHONE' => 'Otro Teléfono:',
  'LBL_PHONE' => 'Teléfono:',
  'LBL_PORTAL_ACTIVE' => 'Portal Activo:',
  'LBL_PORTAL_APP' => 'Aplicación de Portal:',
  'LBL_PORTAL_INFORMATION' => 'Información de Portal',
  'LBL_PORTAL_NAME' => 'Nombre del Portal:',
  'LBL_PORTAL_PASSWORD_ISSET' => 'Contraseña de Portal está Definida:',
  'LBL_POSTAL_CODE' => 'Código Postal:',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Ciudad dirección principal',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'País dirección principal',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Código Postal dirección principal',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Estado/Provincia dirección principal',
  'LBL_PRIMARY_ADDRESS_STREET_2' => 'Calle 2 dirección principal',
  'LBL_PRIMARY_ADDRESS_STREET_3' => 'Calle 3 dirección principal',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Calle dirección principal',
  'LBL_PRIMARY_ADDRESS' => 'Dirección Principal:',
  'LBL_PRODUCTS_TITLE' => 'Productos',
  'LBL_RELATED_CONTACTS_TITLE' => 'Contactos Relacionados',
  'LBL_REPORTS_TO_ID' => 'ID Reporta a:',
  'LBL_REPORTS_TO' => 'Reporta a:',
  'LBL_SALUTATION' => 'Saludo',
  'LBL_SAVE_CONTACT' => 'Guardar Contacto',
  'LBL_SEARCH_FORM_TITLE' => 'Buscar Contactos',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Seleccionar contactos marcados',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Seleccionar contactos marcados',
  'LBL_STATE' => 'Estado/Provincia:',
  'LBL_SYNC_CONTACT' => 'Sincronizar con Outlook&reg;:',
  'LBL_TEAM_ID' => 'ID Equipo:',
  'LBL_TITLE' => 'Cargo:',
  'LNK_CONTACT_LIST' => 'Ver contactos',
  'LNK_IMPORT_VCARD' => 'Crear contacto desde vCard',
  'LNK_NEW_ACCOUNT' => 'Crear Cuenta',
  'LNK_NEW_APPOINTMENT' => 'Crear Actividad',
  'LNK_NEW_CALL' => 'Registrar Llamada',
  'LNK_NEW_CASE' => 'Crear Caso',
  'LNK_NEW_CONTACT' => 'Crear Contacto',
  'LNK_NEW_EMAIL' => 'Crear Correo',
  'LNK_NEW_MEETING' => 'Programar Reunión',
  'LNK_NEW_NOTE' => 'Crear Nota',
  'LNK_NEW_OPPORTUNITY' => 'Crear Oportunidad',
  'LNK_NEW_TASK' => 'Crear Tarea',
  'LNK_SELECT_ACCOUNT' => 'Seleccionar Cuenta',
  'MSG_DUPLICATE' => 'Crear este registro podría duplicar un contacto existente. A continuación se muestran los nombres similares.<br>Haga clic en Crear Contacto para registrarlo con los datos ingresados, o seleccione un contacto existente de la lista.',
  'MSG_SHOW_DUPLICATES' => 'Crear este registro podría duplicar un contacto existente. A continuación se muestran los nombre similares.<br>Presione Guardar para registrarlo con los datos ingresados previamente o haga clic en Cancelar para volver al módulo sin registrarlo.',
  'NTC_COPY_ALTERNATE_ADDRESS' => 'Copiar dirección alterna a la dirección principal',
  'NTC_COPY_PRIMARY_ADDRESS' => 'Copiar dirección principal a la dirección alterna',
  'NTC_DELETE_CONFIRMATION' => '¿Está seguro de borrar este registro?',
  'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Crear una oportunidad requiere una cuenta.\\n Por favor agregue una nueva cuenta o seleccione una existente.',
  'NTC_REMOVE_CONFIRMATION' => '¿Está seguro de retirar este contacto de este caso?',
  'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => '¿Está seguro de de borrar este registro como reporte directo?',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Interesados',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',
	'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documentos',
	'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Copiar a Dirección principal',
	'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Copiar a Otra dirección',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Cotizaciones',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Productos',
  'LBL_CASES_SUBPANEL_TITLE' => 'Casos',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Fallas',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proyectos',
    'LBL_PROJECTS_RESOURCES' => 'Recursos proyectos',
  'LBL_CAMPAIGN_ID' => 'ID Campaña',
  'LBL_TARGET_OF_CAMPAIGNS' => 'Campañas (Grupo Objetivo):',
  'LBL_CAMPAIGN'     => 'Campaña:',
  'LBL_CAMPAIGNS' => 'Campañas',
  'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Campañas',
  'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Bitácora Campaña',
  'LBL_LIST_CITY' => 'Ciudad',
  'LBL_LIST_STATE' => 'Estado/Provincia',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
  'LNK_IMPORT_CONTACTS' => 'Importar contactos',
	'LBL_HOMEPAGE_TITLE' => 'Mis Contactos',
	'LBL_CHECKOUT_DATE'=>'Fecha de salida',

    //For export labels
    'LBL_PHONE_HOME' => 'Teléfono residencia',
    'LBL_PHONE_MOBILE' => 'Celular',
    'LBL_PHONE_WORK' => 'Teléfono oficina',
    'LBL_PHONE_OTHER' => 'Otro teléfono',
    'LBL_PHONE_FAX' => 'Fax',
    'LBL_CAMPAIGN_ID' => 'ID Campaña',

    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Nombre Asignado a',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID Asignado a',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'ID Modificado por',
    'LBL_EXPORT_CREATED_BY' => 'ID Creado por',
    'LBL_EXPORT_PHONE_HOME' => 'Teléfono residencia',
    'LBL_EXPORT_PHONE_MOBILE' => 'Celular',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Correos de contactos relacionados',
    'LBL_USER_SYNC' => 'Sincronizar usuario'
);


?>
