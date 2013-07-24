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

$connector_strings = array (
    //licensing information shown in config screen
    'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="http://www.jigsaw.com/images/cornerstone/header/jigsawLogo.jpg" border="0"></td><td width="65%" class="dataLabel">' .
                            'Jigsaw&#169; provee datos de compañías de forma gratuita a todos los usuarios de SugarCRM – ¡No es necesario registrarse! ' .
                            'Los usuarios registrados pueden utilizar el directorio de Jigsaw&#169; con más de 10 millones de contactos de negocio, ' .
                            'todos completos con nombre, cargo, dirección de correo-e y número de teléfono. ' .
                            'Regístrese en <a style="cursor:pointer" href="http://www.jigsaw.com" target="_blank">http://www.jigsaw.com</a>.</td></tr>',

    //vardef labels
	'LBL_ID' => 'ID de Compañía',
	'LBL_COMPANY_NAME' => 'Nombre de compañía',
	'LBL_CITY' => 'Ciudad',
	'LBL_STREET' => 'Calle',
	'LBL_STATE' => 'Estado/Provincia',
	'LBL_ZIP' => 'Código Postal',
	'LBL_COUNTRY' => 'País',
	'LBL_PHONE' => 'Teléfono',
	'LBL_SIC_CODE' => 'Código CNAE/SIC',
	'LBL_REVENUE' => 'Volumen de Negocio Anual',
	'LBL_REVENUE_RANGE' => 'Volumen de Negocio Anual Estimado',
	'LBL_OWNERSHIP' => 'Propiedad',
	'LBL_WEBSITE' => 'Sitio Web',
	'LBL_LINKED_IN_JIGSAW' => 'Enlace a Compañía en Jigsaw.com',
	'LBL_INDUSTRY1' => 'Industria Principal',
	'LBL_STOCK_SYMBOL' => 'Símbolo Bursátil',
	'LBL_STOCK_EXCHANGE' => 'Bolsa de Valores',
	'LBL_CREATED_ON' => 'Fecha de Creación del Perfil',
	'LBL_EMPLOYEE_COUNT' => 'Nº de Empleados',
	'LBL_EMPLOYEE_RANGE' => 'Dotación de personal',
	'LBL_ADDRESS' => 'Dirección',

	//Configuration labels
	'range_end' => 'Tamaño Máximo de Lista de Resultados',
	'jigsaw_wsdl' => 'URL WSDL',
	'jigsaw_api_key' => 'Clave API',
);

?>
