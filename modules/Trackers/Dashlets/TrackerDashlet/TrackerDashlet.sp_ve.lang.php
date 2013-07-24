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


$dashletStrings['TrackerDashlet'] = array('LBL_TITLE'            => 'Informes de Monitorización',
           'LBL_DESCRIPTION'      => 'Un dashlet para ejecutar consultas sobre datos de Monitorización',
           'LBL_SAVING'           => 'Ejecutando Consulta ...',
           'LBL_SAVED'            => 'Consulta Completada',
           'LBL_CLEAR'            => 'Limpiar',
           'LBL_CLEAR_TOOLTIP'    => 'Limpia el valor del campo de fecha',
           'LBL_CONFIGURE_TITLE'  => 'Título',
           'LBL_CONFIGURE_HEIGHT' => 'Altura (1 - 300)',
										  'LBL_SELECT_QUERY'     => 'Seleccionar Consulta...',
										  'LBL_FILTER'              => 'Filtro',
										  'LBL_FILTER_TOOLTIP'      => 'Filtra por el valor del campo de fecha',
										  'LBL_SINCE'            => 'Desde: ',
										  'LBL_CHOOSE_DATE_TOOLTIP' => 'Para informes de selección, puede proporcionar un filtro de datos.' .
										                               '  El valor de fecha introducido reemplazará la fecha del informe.' .
										                               '  Por ejemplo, en el informe "Mi Actividad (Esta Semana)", el' .
										                               ' valor será usado para mostrar todos los registros tras la fecha de filtrado' .
										                               ' en lugar del período de una semana.',
);
