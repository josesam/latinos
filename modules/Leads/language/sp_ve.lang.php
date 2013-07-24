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
 * $Id: sp_ve.lang.php,v 2.1 2012/04/23 10:40:29 carlose Exp $
 * Source: SugarCRM 6.4.3
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array (
    //DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_last_name' => 'LBL_LIST_LAST_NAME',
  'db_first_name' => 'LBL_LIST_FIRST_NAME',
  'db_title' => 'LBL_LIST_TITLE',
  'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
  'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
  'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT
  'ERR_DELETE_RECORD' => 'Debe de especificar un número de registro para borrar interesado.',
  'LBL_ACCOUNT_DESCRIPTION' => 'Descripción Cuenta',
  'LBL_ACCOUNT_ID' => 'ID Cuenta',
  'LBL_ACCOUNT_NAME' => 'Nombre cuenta:',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
  'LBL_ADD_BUSINESSCARD' => 'Ingresar Tarjeta Presentación',
  'LBL_ADDRESS_INFORMATION' => 'Direcciones',
  'LBL_ALT_ADDRESS_CITY' => 'Ciudad dirección alternativa',
  'LBL_ALT_ADDRESS_COUNTRY' => 'País dirección alternativa',
  'LBL_ALT_ADDRESS_POSTALCODE' => 'Código Postal dirección alternativa',
  'LBL_ALT_ADDRESS_STATE' => 'Estado/Provincia dirección alternativa',
  'LBL_ALT_ADDRESS_STREET_2' => 'Calle 2 dirección alternativa',
  'LBL_ALT_ADDRESS_STREET_3' => 'Calle 3 dirección alternativa',
  'LBL_ALT_ADDRESS_STREET' => 'Calle dirección alternativa',
  'LBL_ALTERNATE_ADDRESS' => 'Dirección Alterna:',
  'LBL_ANY_ADDRESS' => 'Cualquier dirección:',
  'LBL_ANY_EMAIL' => 'Cualquier correoE:',
  'LBL_ANY_PHONE' => 'Cualquier teléfono:',
  'LBL_ASSIGNED_TO_NAME' => 'Asignado a',
  'LBL_BACKTOLEADS' => 'Regresar a Interesados',
  'LBL_BUSINESSCARD' => 'Convertir Interesado',
  'LBL_CITY' => 'Ciudad:',
  'LBL_CONTACT_ID' => 'ID Contacto',
  'LBL_CONTACT_INFORMATION' => 'Resumen',
  'LBL_CONTACT_NAME' => 'Nombre Interesado:',
  'LBL_CONTACT_OPP_FORM_TITLE' => 'Interesado-Oportunidad:',
  'LBL_CONTACT_ROLE' => 'Rol:',
  'LBL_CONTACT' => 'Interesado:',
  'LBL_CONVERTED_ACCOUNT' => 'Cuenta convertida:',
  'LBL_CONVERTED_CONTACT' => 'Contacto convertido:',
  'LBL_CONVERTED_OPP' => 'Oportunidad convertida:',
  'LBL_CONVERTED' => 'Convertido',
  'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
  'LBL_CONVERTLEAD_TITLE' => 'Convertir Interesado',
  'LBL_CONVERTLEAD' => 'Convertir Interesado',
  'LBL_CONVERTLEAD_WARNING' => 'Aviso: este Interesado podría ya haber sido convertido',
  'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' en un Contacto',
  'LBL_COUNTRY' => 'País:',
  'LBL_CREATED_NEW' => 'Creada una nueva ',
  'LBL_CREATED_ACCOUNT' => 'Nueva cuenta creada',
  'LBL_CREATED_CALL' => 'Nueva llamada creada',
  'LBL_CREATED_CONTACT' => 'Nuevo contacto creado',
  'LBL_CREATED_MEETING' => 'Nueva reunión creada',
  'LBL_CREATED_OPPORTUNITY' => 'Nueva oportunidad creada',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Interesados',
  'LBL_DEPARTMENT' => 'Departamento:',
  'LBL_DESCRIPTION_INFORMATION' => 'Información adicional',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_DO_NOT_CALL' => 'No llamar:',
  'LBL_DUPLICATE' => 'Interesados similares',
  'LBL_EMAIL_ADDRESS' => 'CorreoE:',
  'LBL_EMAIL_OPT_OUT' => 'Excluír de CorreoE:',
  'LBL_EXISTING_ACCOUNT' => 'Cuenta existente usada',
  'LBL_EXISTING_CONTACT' => 'Contacto existente usado',
  'LBL_EXISTING_OPPORTUNITY' => 'Oportunidad existente usada',
  'LBL_FAX_PHONE' => 'Fax:',
  'LBL_FIRST_NAME' => 'Nombre:',
  'LBL_FULL_NAME' => 'Nombre Completo:',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
  'LBL_HOME_PHONE' => 'Teléfono residencia:',
  'LBL_IMPORT_VCARD' => 'Importar vCard',
  'LBL_IMPORT_VCARDTEXT' => 'Crear un interesado automáticamente importando una vCard.',
  'LBL_INVALID_EMAIL' => 'CorreoE no válido:',
  'LBL_INVITEE' => 'Reportes directos',
  'LBL_LAST_NAME' => 'Apellidos:',
  'LBL_LEAD_SOURCE_DESCRIPTION' => 'Descripción origen interesado:',
  'LBL_LEAD_SOURCE' => 'Origen Interesado:',
  'LBL_LIST_ACCOUNT_NAME' => 'Cuenta',
  'LBL_LIST_CONTACT_NAME' => 'Contacto',
  'LBL_LIST_CONTACT_ROLE' => 'Rol',
  'LBL_LIST_DATE_ENTERED' => 'Fecha Creación',
  'LBL_LIST_EMAIL_ADDRESS' => 'CorreoE',
  'LBL_STREET' => 'Calle',
  'LBL_LIST_FIRST_NAME' => 'Nombre',
  'LBL_LIST_FORM_TITLE' => 'Lista de Interesados',
  'LBL_LIST_LAST_NAME' => 'Apellidos',
  'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Descripción origen',
  'LBL_LIST_LEAD_SOURCE' => 'Origen',
  'LBL_LIST_MY_LEADS' => 'Mis Interesados',
  'LBL_LIST_NAME' => 'Nombre',
  'LBL_LIST_PHONE' => 'Teléfono',
  'LBL_LIST_REFERED_BY' => 'Referido por',
  'LBL_LIST_STATUS' => 'Estado',
  'LBL_LIST_ACCEPT_STATUS' => 'Status aceptación',
  'LBL_LIST_TITLE' => 'Cargo',
  'LBL_MOBILE_PHONE' => 'Celular:',
  'LBL_MODULE_NAME' => 'Interesados',
  'LBL_MODULE_TITLE' => 'Interesados: Inicio',
  'LBL_NAME' => 'Nombre:',
  'LBL_NEW_FORM_TITLE' => 'Nuevo interesado',
  'LBL_NEW_PORTAL_PASSWORD' => 'Establecer Contraseña Portal:',
  'LBL_OFFICE_PHONE' => 'Teléfono oficina:',
  'LBL_OPP_NAME' => 'Nombre de oportunidad:',
  'LBL_OPPORTUNITY_AMOUNT' => 'Valor de oportunidad:',
  'LBL_OPPORTUNITY_ID' => 'ID Oportunidad',
  'LBL_OPPORTUNITY_NAME' => 'Nombre de oportunidad:',
  'LBL_OTHER_EMAIL_ADDRESS' => 'Otro correo:',
  'LBL_OTHER_PHONE' => 'Otro teléfono:',
  'LBL_PHONE' => 'Teléfono:',
  'LBL_PORTAL_ACTIVE' => 'Portal Activo:',
  'LBL_PORTAL_APP' => 'Aplicación Portal',
  'LBL_PORTAL_INFORMATION' => 'Información Portal',
  'LBL_PORTAL_NAME' => 'Nombre Portal:',
  'LBL_PORTAL_PASSWORD_ISSET' => 'Contraseña de Portal Definida:',
  'LBL_POSTAL_CODE' => 'Código postal:',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Ciudad dirección principal',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'País dirección principal',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Código Postal dirección principal',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Estado/Provincia dirección principal',
  'LBL_PRIMARY_ADDRESS_STREET_2' => 'Calle 2 dirección principal',
  'LBL_PRIMARY_ADDRESS_STREET_3' => 'Calle 3 dirección principal',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Calle dirección principal',
  'LBL_PRIMARY_ADDRESS' => 'Dirección principal:',
  'LBL_REFERED_BY' => 'Referido por',
  'LBL_REPORTS_TO_ID' => 'ID Reporta a',
  'LBL_REPORTS_TO' => 'Reporta a',
    'LBL_REPORTS_FROM' => 'Reporta de:',
  'LBL_SALUTATION' => 'Saludo',
  'LBL_SEARCH_FORM_TITLE' => 'Buscar interesados',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Seleccionar interesados marcados',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Seleccionar interesados marcados',
  'LBL_STATE' => 'Estado/Provincia:',
  'LBL_STATUS_DESCRIPTION' => 'Descripción estado:',
  'LBL_STATUS' => 'Estado:',
  'LBL_TITLE' => 'Cargo:',
  'LNK_IMPORT_VCARD' => 'Crear interesado desde vCard',
  'LNK_LEAD_LIST' => 'Ver interesados',
  'LNK_NEW_ACCOUNT' => 'Crear cuenta',
  'LNK_NEW_APPOINTMENT' => 'Crear actividad',
  'LNK_NEW_CONTACT' => 'Crear contacto',
  'LNK_NEW_LEAD' => 'Crear interesado',
  'LNK_NEW_NOTE' => 'Crear nota',
    'LNK_NEW_TASK' => 'Crear tarea',
    'LNK_NEW_CASE' => 'Crear caso',
    'LNK_NEW_CALL' => 'Registrar llamada',
    'LNK_NEW_MEETING' => 'Programar reunión',
  'LNK_NEW_OPPORTUNITY' => 'Crear oportunidad',
  'LNK_SELECT_ACCOUNTS' => ' <b>o</b> Seleccionar cuenta',
  'NTC_COPY_ALTERNATE_ADDRESS' => 'Copiar dirección alternaa dirección principal',
  'NTC_COPY_PRIMARY_ADDRESS' => 'Copiar dirección principal a dirección alterna',
  'NTC_DELETE_CONFIRMATION' => '¿Está seguro de eliminar este registro?',
  'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Crear una oportunidad requiere una cuenta.\\n Por favor agregue una nueva cuenta o seleccione una existente.',
  'NTC_REMOVE_CONFIRMATION' => '¿Está seguro de quitar este interesado de este caso?',
  'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => '¿Está seguro de quitar este reporte directo?',
  'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campañas',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE'=>'Campañas',
    'LBL_TARGET_OF_CAMPAIGNS'=>'Campaña exitosa:',
    'LBL_TARGET_BUTTON_LABEL'=>'Targeted',
    'LBL_TARGET_BUTTON_TITLE'=>'Targeted',
    'LBL_TARGET_BUTTON_KEY'=>'T',
    'LBL_CAMPAIGN_ID'=>'Id campaña',
    'LBL_CAMPAIGN' => 'Campaña:',
  	'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuario asignado',
    'LBL_PROSPECT_LIST' => 'Ver prospectos',
    'LBL_CAMPAIGN_LEAD' => 'Campañas',
    'LBL_BIRTHDATE' => 'Cumpleaños:',
    'LBL_THANKS_FOR_SUBMITTING_LEAD' =>'Gracias por su envio.',
    'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' =>'Lo sentimos, el servidor no está disponible en este momento, intente de nuevo luego.',
    'LBL_ASSISTANT_PHONE' => 'Teléfono asistente',
    'LBL_ASSISTANT' => 'Asistente',
    'LBL_REGISTRATION' => 'Registro',
    'LBL_MESSAGE' => 'Por favor escriba su información a continuación. Se creará una cuenta pendiente de su aprobación.',
    'LBL_SAVED' => 'Gracias por registrarse. Su cuenta será creada y alguien se pondrá en contato lo más rápido posible.', 
    'LBL_CLICK_TO_RETURN' => 'Regresar al portal',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Asignado a',
     'LBL_CONVERT_MODULE_NAME' => 'Módulo',
     'LBL_CONVERT_REQUIRED' => 'Obligatorio',
     'LBL_CONVERT_SELECT' => 'Permitir selección',
     'LBL_CONVERT_COPY' => 'Copiar datos',
     'LBL_CONVERT_EDIT' => 'Editar',
     'LBL_CONVERT_DELETE' => 'Borrar',
     'LBL_CONVERT_ADD_MODULE' => 'Agregar módulo',
     'LBL_CREATE' => 'Crear',
     'LBL_SELECT' => ' <b>O</b> Seleccionar',
	'LBL_WEBSITE' => 'Sitio web',
 	'LNK_IMPORT_LEADS' => 'Importar interesados',
 	
 //Convert lead tooltips
 	'LBL_MODULE_TIP' 	=> 'El módulo en el que se creará un nuevo registro.',
 	'LBL_REQUIRED_TIP' 	=> 'Los módulos obligatorios deben ser creados o seleccionados antes de que se realice la conversión.',
 	'LBL_COPY_TIP'		=> 'Los campos seleccionados del Interesado serán copiados a campos con el mismo nombre es los registros que se van a crear.',
 	'LBL_SELECTION_TIP' => 'Los módulos con un campo relacionado en Contactos pueden ser seleccionados en lugar de crearlos durante el proceso de conversión de Interesados.',
 	'LBL_EDIT_TIP'		=> 'Modificar el diseño de conversión para este módulo.',
 	'LBL_DELETE_TIP'	=> 'Quitar este módulo del diseño de conversión.',

    'LBL_ACTIVITIES_MOVE'   => 'Mover actividades a',
    'LBL_ACTIVITIES_COPY'   => 'Copiar actividades a',
    'LBL_ACTIVITIES_MOVE_HELP'   => "Seleccione el registro hacia el que serán  movidas las actividades del Interesado. Todas las Tareas, Llamadas, Reuniones, Notas y Correos se moverán al registro seleccionado.",
    'LBL_ACTIVITIES_COPY_HELP'   => "Seleccione el registro(s) en donde serán  copiadas las actividades del Interesado. Se crearán nuevas Tareas, Llamadas, Reuniones y Notas en cada uno de los registros seleccionados. Los correos quedarán relacionados con los registros seleccionados.",
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
    'LBL_EXPORT_PHONE_MOBILE' => 'Celular',
    'LBL_EXPORT_EMAIL2'=>'Otra dirección de correoE',
	'LBL_EDITLAYOUT' => 'Editar diseño' /*for 508 compliance fix*/,
	'LBL_ENTERDATE' => 'Ingresar fecha' /*for 508 compliance fix*/,
	'LBL_LOADING' => 'Cargando' /*for 508 compliance fix*/,
	'LBL_EDIT_INLINE' => 'Editar' /*for 508 compliance fix*/,

);


?>
