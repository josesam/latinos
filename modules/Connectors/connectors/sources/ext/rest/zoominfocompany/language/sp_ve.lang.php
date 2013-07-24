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
    'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="' . getWebPath('modules/Connectors/connectors/sources/ext/rest/zoominfocompany/images/zoominfo.gif') . '" border="0"></td><td width="65%" valign="top" class="dataLabel">' .
                            'ZoomInfo&#169; provee extensa información sobre 45 millones de profecionales en cerca de 5 millones de compañías.  Sepa más.  <a target="_blank" href="http://www.zoominfo.com/about">http://www.zoominfo.com/about</a></td></tr></table>',    
    
    'LBL_SEARCH_FIELDS_INFO' => 'Los siguientes campos están soportados por el API de Zoominfo&#169; para Compañías: Nombre de Compañía, Ciudad, Estado/Provincia y País.',
        
    
    //vardef labels
	'LBL_COMPANY_ID' => 'ID',
	'LBL_COMPANY_NAME' => 'Nombre de Compañía',
    'LBL_STREET' => 'Calle',
	'LBL_CITY' => 'Ciudad',
	'LBL_ZIP' => 'Código Postal',
	'LBL_STATE' => 'Estado/Provincia',
	'LBL_COUNTRY' => 'País',
	'LBL_INDUSTRY' => 'Industria',
	'LBL_WEBSITE' => 'Sitio Web',
	'LBL_DESCRIPTION' => 'Descripción',
    'LBL_PHONE' => 'Teléfono',
	'LBL_COMPANY_TICKER' => 'Símbolo bursátil de la compañía',
	'LBL_ZOOMINFO_COMPANY_URL' => 'URL con el perfil de la compañía',
	'LBL_REVENUE' => 'Volumen de ventas anuales',
	'LBL_EMPLOYEES' => 'Empleados',

	//Configuration labels
	'company_search_url' => 'URL de Búsqueda de Compañía',
	'company_detail_url' => 'URL de Detalle de Compañía',
    'partner_code' => 'Código de afiliado',
	'api_key' => 'CLAVE API',
	
	//Other labels
	'ERROR_LBL_CONNECTION_PROBLEM' => 'Error: No ha sido posible realizar la conexión al servidor de Zoominfo - Conector para compañías.',
);

?>
