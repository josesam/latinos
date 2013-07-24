<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/**
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
  'LBL_MODULE_NAME' => 'Prospectos',
  'LBL_INVITEE' => 'Reportes Directos',
  'LBL_MODULE_TITLE' => 'Prospectos: Inicio',
  'LBL_SEARCH_FORM_TITLE' => 'Buscar Prospectos',
  'LBL_LIST_FORM_TITLE' => 'Ver prospectos',
  'LBL_NEW_FORM_TITLE' => 'Crear Prospecto',
  'LBL_PROSPECT' => 'Prospecto:',
  'LBL_BUSINESSCARD' => 'Tarjeta presentación',
  'LBL_LIST_NAME' => 'Nombre',
  'LBL_LIST_LAST_NAME' => 'Apellido',
  'LBL_LIST_PROSPECT_NAME' => 'Nombre prospecto',
  'LBL_LIST_TITLE' => 'Cargo',
  'LBL_LIST_EMAIL_ADDRESS' => 'CorreoE',
  'LBL_LIST_OTHER_EMAIL_ADDRESS' => 'Otro correo',
  'LBL_LIST_PHONE' => 'Teléfono',
  'LBL_LIST_PROSPECT_ROLE' => 'Rol',
  'LBL_LIST_FIRST_NAME' => 'Nombre',
  'LBL_ASSIGNED_TO_NAME' => 'Asignado a',
  'LBL_ASSIGNED_TO_ID'=>'Asignado a',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_last_name' => 'LBL_LIST_LAST_NAME',
  'db_first_name' => 'LBL_LIST_FIRST_NAME',
  'db_title' => 'LBL_LIST_TITLE',
  'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
  'db_email2' => 'LBL_LIST_OTHER_EMAIL_ADDRESS',
//END DON'T CONVERT
  'LBL_CAMPAIGN_ID' => 'ID campaña',
  'LBL_EXISTING_PROSPECT' => 'Contacto existente usado',
  'LBL_CREATED_PROSPECT' => 'Nuevo contacto creado',
  'LBL_EXISTING_ACCOUNT' => 'Cuenta existente usada',
  'LBL_CREATED_ACCOUNT' => 'Nueva cuenta creada',
  'LBL_CREATED_CALL' => 'Nueva llamada creada',
  'LBL_CREATED_MEETING' => 'Nueva reunión creada',
  'LBL_ADDMORE_BUSINESSCARD' => 'Ingresar otra tarjeta de presentación',
  'LBL_ADD_BUSINESSCARD' => 'Ingresar tarjeta presentación',
  'LBL_NAME' => 'Nombre:',
  'LBL_PROSPECT_NAME' => 'Nombre Prospecto:',
  'LBL_PROSPECT_INFORMATION' => 'Resumen',
  'LBL_MORE_INFORMATION' => 'Más información ',
  'LBL_FIRST_NAME' => 'Nombre:',
  'LBL_OFFICE_PHONE' => 'Teléfono oficina:',
  'LBL_ACCOUNT_NAME' => 'Nombre cuenta:',
  'LBL_ANY_PHONE' => 'Cualquier teléfono:',
  'LBL_PHONE' => 'Teléfono:',
  'LBL_LAST_NAME' => 'Apellido:',
  'LBL_MOBILE_PHONE' => 'Celular:',
  'LBL_HOME_PHONE' => 'Residencia:',
  'LBL_OTHER_PHONE' => 'Otro Teléfono:',
  'LBL_FAX_PHONE' => 'Fax:',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Ciudad dirección principal',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'País dirección principal',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Código Postal dirección principal',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Estado/Provincia dirección principal',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Calle dirección principal',
  'LBL_ALT_ADDRESS_CITY' => 'Ciudad dirección alterna',
  'LBL_ALT_ADDRESS_COUNTRY' => 'País dirección alterna',
  'LBL_ALT_ADDRESS_POSTALCODE' => 'Código Postal dirección alterna',
  'LBL_ALT_ADDRESS_STATE' => 'Estado/Provincia dirección alterna',
  'LBL_ALT_ADDRESS_STREET' => 'Calle dirección alterna',
  'LBL_TITLE' => 'Cargo:',
  'LBL_DEPARTMENT' => 'Departmento:',
  'LBL_BIRTHDATE' => 'Cumpleaños:',
  'LBL_EMAIL_ADDRESS' => 'CorreoE:',
  'LBL_OTHER_EMAIL_ADDRESS' => 'Otro CorreoE:',
  'LBL_ANY_EMAIL' => 'Cualquier Correo:',
  'LBL_ASSISTANT' => 'Asistente:',
  'LBL_ASSISTANT_PHONE' => 'Teléfono asistente:',
  'LBL_DO_NOT_CALL' => 'No llamar:',
  'LBL_EMAIL_OPT_OUT' => 'Excluír de CorreoE:',
  'LBL_PRIMARY_ADDRESS' => 'Dirección Principal:',
  'LBL_ALTERNATE_ADDRESS' => 'Dirección Alterna:',
  'LBL_ANY_ADDRESS' => 'Cualquier dirección:',
  'LBL_CITY' => 'Ciudad:',
  'LBL_STATE' => 'Estado/Provincia:',
  'LBL_POSTAL_CODE' => 'Código Postal:',
  'LBL_COUNTRY' => 'País:',
  'LBL_DESCRIPTION_INFORMATION' => 'Información adicional',
  'LBL_ADDRESS_INFORMATION' => 'Direcciones',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_PROSPECT_ROLE' => 'Rol:',
  'LBL_OPP_NAME' => 'Nombre Oportunidad:',
  'LBL_IMPORT_VCARD' => 'Importar vCard',
  'LBL_IMPORT_VCARDTEXT' => 'Crear un contacto automáticamente importando una vCard desde un archivo.',
  'LBL_DUPLICATE' => 'Prospecto posiblemente duplicado',
  'MSG_SHOW_DUPLICATES' => 'Crear este registro podría duplicar un prospecto. Presione Crear Prospecto para registrarlo con los datos ingresados previamente o haga clic en Cancelar.',
  'MSG_DUPLICATE' => 'Crear este registro podría duplicar un prospecto. Seleccione un prospecto de la lista o haga clic en Guardar Prospecto para registrarlo con los datos ingresados previamente.',
  'LNK_PROSPECT_LIST' => 'Ver prospectos',
  'LNK_IMPORT_VCARD' => 'Crear desde vCard',
  'LNK_NEW_PROSPECT' => 'Crear Prospecto',
  'LNK_NEW_ACCOUNT' => 'Crear Cuenta',
  'LNK_NEW_OPPORTUNITY' => 'Crear Oportunidad',
  'LNK_NEW_CASE' => 'Crear Caso',
  'LNK_NEW_NOTE' => 'Crear Nota o Adjunto',
  'LNK_NEW_CALL' => 'Registrar Llamada',
  'LNK_NEW_EMAIL' => 'Archivar CorreoE',
  'LNK_NEW_MEETING' => 'Programar Reunión',
  'LNK_NEW_TASK' => 'Crear Tarea',
  'LNK_NEW_APPOINTMENT' => 'Crear Actividad',
  'NTC_DELETE_CONFIRMATION' => '¿Está seguro de borrar este registro?',
  'NTC_REMOVE_CONFIRMATION' => '¿Está seguro de quitar este prospecto de este caso?',
  'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => '¿Está seguro de borrar este registro como reporte directo?',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para borrar el prospecto.',
  'NTC_COPY_PRIMARY_ADDRESS' => 'Copiar dirección principal a la dirección alterna',
  'NTC_COPY_ALTERNATE_ADDRESS' => 'Copiar dirección alterna a la dirección principal',
  'LBL_SALUTATION' => 'Saludo',
  'LBL_SAVE_PROSPECT' => 'Guardar Prospecto',
  'LBL_CREATED_OPPORTUNITY' => 'Nueva oportunidad creada',
  'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Crear una oportunidad requiere una cuenta.\\n Por favor ingrese una nueva cuenta o seleccione una existente.',
  'LNK_SELECT_ACCOUNT' => 'Seleccionar cuenta',
  'LNK_NEW_CAMPAIGN' => 'Crear Campaña',
  'LNK_CAMPAIGN_LIST' => 'Ver campañas',
  'LNK_NEW_PROSPECT_LIST' => 'Crear Grupo Objetivo',
  'LNK_PROSPECT_LIST_LIST' => 'Lista de grupos objetivo',
  'LNK_IMPORT_PROSPECT' => 'Importar Prospectos',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Seleccionar prospectos marcados',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Seleccionar prospectos marcados',
  'LBL_INVALID_EMAIL' => 'CorreoE no válido:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Prospectos',
  'LBL_CONVERT_BUTTON_KEY' => 'V',
  'LBL_CONVERT_BUTTON_TITLE' => 'Convertir Prospecto',
  'LBL_CONVERT_BUTTON_LABEL' => 'Convertir Prospecto',
  'LBL_CONVERTPROSPECT' => 'Convertir Prospecto',
  'LNK_NEW_CONTACT' => 'Crear Contacto',
  'LNK_IMPORT_PROSPECTS' => 'Importar prospectos',
  'LBL_CREATED_CONTACT' => 'Nuevo contacto creado',
  'LBL_BACKTO_PROSPECTS' => 'Regresar a Prospectos',
  'LBL_CAMPAIGNS' => 'Campañas',
  'LBL_TRACKER_KEY'=>'Clave monitor',
  'LBL_LEAD_ID'=>'Id Interesado',
  'LBL_CONVERTED_LEAD'=>'Interesado convertido',
  'LBL_EDIT_ACCOUNT_NAME'=>'Nombre cuenta:',
  'LBL_CREATED_USER' => 'Usuario creado',
  'LBL_MODIFIED_USER' => 'Usuario modificado',
  'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Bitácora Campaña',
  'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Campañas',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
  //For export labels
  'LBL_PHONE_HOME' => 'Teléfono residencia',
  'LBL_PHONE_MOBILE' => 'Celular',
  'LBL_PHONE_WORK' => 'Teléfono oficina',
  'LBL_PHONE_OTHER' => 'Otro teléfono',
  'LBL_PHONE_FAX' => 'Fax',
  'LBL_CAMPAIGN_ID' => 'ID Campaña',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Nombre usuario asignado',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID Asignado a',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'ID Modificado por',
  'LBL_EXPORT_CREATED_BY' => 'ID Creado por',
  'LBL_EXPORT_EMAIL2'=>'Otra dirección correoE',

);


?>
