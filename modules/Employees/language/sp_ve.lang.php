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
 * $Id: sp_ve.lang.php,v 2.1 2012/04/24 19:20:29 carlose Exp $
 * Source: SugarCRM 6.4.3
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Empleados',
  'LBL_MODULE_TITLE' => 'Empleados: Inicio',
  'LBL_SEARCH_FORM_TITLE' => 'Buscar Empleados',
  'LBL_LIST_FORM_TITLE' => 'Lista de empleados',
  'LBL_NEW_FORM_TITLE' => 'Nuevo Empleado',
  'LBL_EMPLOYEE' => 'Empleados:',
  'LBL_LOGIN' => 'Nombre Usuario',
  'LBL_RESET_PREFERENCES' => 'Asignar preferencias por omisión',
  'LBL_TIME_FORMAT' => 'Formato hora:',
  'LBL_DATE_FORMAT' => 'Formato fecha:',
  'LBL_TIMEZONE' => 'Hora actual:',
  'LBL_CURRENCY' => 'Moneda:',
  'LBL_LIST_NAME' => 'Nombre',
  'LBL_LIST_LAST_NAME' => 'Apellido',
  'LBL_LIST_EMPLOYEE_NAME' => 'Nombre Empleado',
  'LBL_LIST_DEPARTMENT' => 'Departamento',
  'LBL_LIST_REPORTS_TO_NAME' => 'Reporta a',
  'LBL_LIST_EMAIL' => 'CorreoE',
  'LBL_LIST_PRIMARY_PHONE' => 'Teléfono principal',
  'LBL_LIST_USER_NAME' => 'Nombre Usuario',
  'LBL_LIST_EMPLOYEE_STATUS' => 'Estado',
  'LBL_LIST_ADMIN' => 'Admin',
  'LBL_NEW_EMPLOYEE_BUTTON_TITLE' => 'Nuevo Empleado',
  'LBL_NEW_EMPLOYEE_BUTTON_LABEL' => 'Nuevo Empleado',
  'LBL_NEW_EMPLOYEE_BUTTON_KEY' => 'N',
  'LBL_ERROR' => 'Error:',
  'LBL_PASSWORD' => 'Contraseña:',
  'LBL_EMPLOYEE_NAME' => 'Nombre Empleado:',
  'LBL_USER_NAME' => 'Nombre usuario:',
  'LBL_USER_TYPE' => 'Tipo usuario',
  'LBL_FIRST_NAME' => 'Nombre:',
  'LBL_LAST_NAME' => 'Apellido:',
  'LBL_EMPLOYEE_SETTINGS' => 'Preferencias Empleado',
  'LBL_THEME' => 'Tema:',
  'LBL_LANGUAGE' => 'Idioma:',
  'LBL_ADMIN' => 'Administrador:',
  'LBL_EMPLOYEE_INFORMATION' => 'Información Empleado',
  'LBL_OFFICE_PHONE' => 'Teléfono oficina:',
  'LBL_REPORTS_TO' => 'Id Reporta a:',
  'LBL_REPORTS_TO_NAME' => 'Reporta a',
  'LBL_OTHER_PHONE' => 'Otro:',
  'LBL_OTHER_EMAIL' => 'Otro CorreoE:',
  'LBL_NOTES' => 'Notas:',
  'LBL_DEPARTMENT' => 'Departamento:',
  'LBL_TITLE' => 'Cargo:',
  'LBL_ANY_PHONE' => 'Cualquier teléfono:',
  'LBL_ANY_EMAIL' => 'Cualquier correoE:',
  'LBL_ANY_ADDRESS' => 'Cualquier dirección:',
  'LBL_ADDRESS' => 'Dirección:',
  'LBL_CITY' => 'Ciudad:',
  'LBL_STATE' => 'Estado/Provincia:',
  'LBL_POSTAL_CODE' => 'Código postal:',
  'LBL_COUNTRY' => 'País:',
  'LBL_NAME' => 'Nombre:',
  'LBL_MOBILE_PHONE' => 'Celular:',
  'LBL_OTHER' => 'Otro:',
  'LBL_FAX' => 'Fax:',
  'LBL_EMAIL' => 'Dirección correoE:',
  'LBL_EMAIL_LINK_TYPE'		=> 'Cliente correoE',
  'LBL_EMAIL_LINK_TYPE_HELP'	=> '<b>Cliente de correo Sugar:</b> Enviar correo utilizando el cliente de la aplicación Sugar.<br><b>Cliente de correo externo:</b> Enviar correo utilizando un cliente fuera de la aplicación Sugar, por ejemplo Microsoft Outlook.',
  'LBL_HOME_PHONE' => 'Teléfono residencia:',
  'LBL_ADDRESS_INFORMATION' => 'Dirección',
  'LBL_EMPLOYEE_STATUS' => 'Estado Empleado:',
  'LBL_PRIMARY_ADDRESS' => 'Dirección principal:',
  'LBL_CREATE_USER_BUTTON_TITLE' => 'Crear usuario',
  'LBL_CREATE_USER_BUTTON_LABEL' => 'Crear usuario',
  'LBL_CREATE_USER_BUTTON_KEY' => 'N',
  'LBL_FAVORITE_COLOR' => 'Color favorito:',
  'LBL_PHOTO' => 'Fotografía',
  'LBL_MESSENGER_ID' => 'Cuenta mensajería:',
  'LBL_MESSENGER_TYPE' => 'Tipo mensajería:',
  'ERR_EMPLOYEE_NAME_EXISTS_1' => 'El nombre de empleado ',
  'ERR_EMPLOYEE_NAME_EXISTS_2' => ' ya existe. No se permiten nombres duplicados. Modifique el nombre para que sea único.',
  'ERR_LAST_ADMIN_1' => 'El empleado "',
  'ERR_LAST_ADMIN_2' => '" es el último con privilegios administrativos. Al menos un empleado debe ser Administrador.',
  'LNK_NEW_EMPLOYEE' => 'Crear Empleado',
  'LNK_EMPLOYEE_LIST' => 'Ver empleados',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para borrar la cuenta.',
  'LBL_DEFAULT_TEAM' => 'Equipo por omisión:',
  'LBL_DEFAULT_TEAM_TEXT' => 'Seleccione el equipo al que pertenecerán los nuevos empleados',
  'LBL_MY_TEAMS' => 'Mis equipos',
  'LBL_LIST_DESCRIPTION' => 'Descripción',
  'LNK_EDIT_TABS' => 'Editar pestañas',
  'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => '¿Está seguro de quitar esta membresía del empleado?',
  'LBL_SUGAR_LOGIN' => 'Es usuario Sugar',  
  'LBL_RECEIVE_NOTIFICATIONS' => 'Notificar asignaciones',  
  'LBL_IS_ADMIN' => 'Es Administrador',  
  'LBL_GROUP' => 'Usuario grupo',
  'LBL_PORTAL_ONLY'	=> 'Usuario solo de portal',
  'LBL_DELETE_USER_CONFIRM'           => 'Este Empleado es además un Usuario. Eliminar el registro del empleado eliminaría también el registro del usuario, imposibilitando su ingreso posterior a la aplicación. ¿Desea proseguir con la eliminación del registro?',
  'LBL_DELETE_EMPLOYEE_CONFIRM'       => '¿Está seguro de eliminar el registro de este empleado?',
  'LBL_ONLY_ACTIVE' => 'Empleados activos',
	'LBL_SELECT' => 'Seleccionar' /*for 508 compliance fix*/,
	'LBL_FF_CLEAR' => 'Limpiar' /*for 508 compliance fix*/,
  'LBL_AUTHENTICATE_ID' => 'Id Autentificación',
  'LBL_EXT_AUTHENTICATE' => 'Autentificación externa',
  'LBL_GROUP_USER' => 'Usuario tipo grupo',
  'LBL_LIST_ACCEPT_STATUS' => 'Status aceptación',
  'LBL_MODIFIED_BY' =>'Modificado por',
  'LBL_MODIFIED_BY_ID' =>'Id Modificado por',
  'LBL_CREATED_BY_NAME' => 'Creado por', //bug48978
  'LBL_PORTAL_ONLY_USER' => 'Usuario API de portal',
  'LBL_PSW_MODIFIED' => 'Ultimo cambio contraseña',
  'LBL_SHOW_ON_EMPLOYEES' => 'Mostrar registro empleado',
  'LBL_USER_HASH' => 'Contraseña',
  'LBL_SYSTEM_GENERATED_PASSWORD' =>'Contraseña generada por sistema',
  'LBL_DESCRIPTION'	=> 'Descripción',
  'LBL_FAX_PHONE'	=> 'Fax',
  'LBL_FAX'		=> 'Fax',
  'LBL_STATUS'		=> 'Status',
  'LBL_ADDRESS_CITY'	=> 'Ciudad dirección',
  'LBL_ADDRESS_COUNTRY'	=> 'País dirección',
  'LBL_ADDRESS_INFORMATION'	=> 'Información dirección',
  'LBL_ADDRESS_POSTALCODE'	=> 'Código postal dirección',
  'LBL_ADDRESS_STATE'		=> 'Provincia dirección',
  'LBL_ADDRESS_STREET'		=> 'Calle dirección',
  'LBL_ADDRESS'			=> 'Dirección',
  
  'LBL_DATE_MODIFIED' => 'Fecha modificación',
  'LBL_DATE_ENTERED' => 'Fecha creación',
  'LBL_DELETED' => 'Eliminado',
);


?>
