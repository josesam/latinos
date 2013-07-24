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

$mod_strings = array (

  //module strings.
   'LBL_MODULE_NAME' => 'Presupuestos',
  'LNK_NEW_OPPORTUNITY' => 'Crear Oportunidad',
  'LBL_MODULE_TITLE' => 'Presupuestos',
  'LBL_LIST_FORM_TITLE' => 'Presupuestos realizados',
  'LNK_UPD_FORECAST' => 'Hoja de presupuesto',
  'LNK_QUOTA' => 'Cuotas',
  'LNK_FORECAST_LIST' => 'Historial de Previsiones',
  'LBL_FORECAST_HISTORY' => 'Previsiones: Historial',
  'LBL_FORECAST_HISTORY_TITLE' => 'Previsiones: Historial',
   
  //var defs
  'LBL_TIMEPERIOD_NAME' => 'Período',
  'LBL_USER_NAME' => 'Nombre de Usuario',
  'LBL_REPORTS_TO_USER_NAME' => 'Informa A',
    
  //forecast table
  'LBL_FORECAST_ID' => 'ID',
  'LBL_FORECAST_TIME_ID' => 'ID Período',
  'LBL_FORECAST_TYPE' => 'Tipo de Previsión',
  'LBL_FORECAST_OPP_COUNT' => 'Oportunidades',
  'LBL_FORECAST_OPP_WEIGH' => 'Cantidad Ponderada',
  'LBL_FORECAST_OPP_COMMIT' => 'Escenario probable',
  'LBL_FORECAST_OPP_BEST_CASE'=>'Mejor escenario',
  'LBL_FORECAST_OPP_WORST'=>'Peor Escenario',
  'LBL_FORECAST_USER' => 'Usuario',
  'LBL_DATE_COMMITTED' => 'Fecha Realización',
  'LBL_DATE_ENTERED' => 'Fecha Creación',
  'LBL_DATE_MODIFIED' => 'Fecha Modificación',
  'LBL_CREATED_BY' => 'Creado por',
  'LBL_DELETED' => 'Eliminado',
      
   //Quick Commit labels.
  'LBL_QC_TIME_PERIOD' => 'Período:',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Cuenta de Oportunidades:',
  'LBL_QC_WEIGHT_VALUE' => 'Cantidad Ponderada:',
  'LBL_QC_COMMIT_VALUE' => 'Cantidad comprometida:',
  'LBL_QC_COMMIT_BUTTON' => 'Comprometer',
  'LBL_QC_WORKSHEET_BUTTON' => 'Hoja de cálculo',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Cantidad Realizada en Dinámica:',
  'LBL_QC_DIRECT_FORECAST' => 'Mi Previsión Directa:',
  'LBL_QC_ROLLUP_FORECAST' => 'Mi Previsión de Grupo:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Mis previsiones',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Última fecha de compromiso:',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Última cantidad comprometida:',
  'LBL_QC_HEADER_DELIM' => 'A',
  
  //opportunity worksheet list view labels
  'LBL_OW_OPPORTUNITIES' => 'Oportunidad',
  'LBL_OW_ACCOUNTNAME' => 'Cuenta',
  'LBL_OW_REVENUE' => 'Cantidad',
  'LBL_OW_WEIGHTED' => 'Cantidad Ponderada',
  'LBL_OW_MODULE_TITLE' => 'Hoja de Oportunidad',
  'LBL_OW_PROBABILITY' => 'Probabilidad',
  'LBL_OW_NEXT_STEP'=>'Siguiente Paso',
  'LBL_OW_DESCRIPTION'=>'Descripción',
  'LBL_OW_TYPE'=>'Tipo',
  
  //forecast schedule shortcuts
  'LNK_NEW_TIMEPERIOD' => 'Crear Período',
  'LNK_TIMEPERIOD_LIST' => 'Períodos',
    
  //Forecast schedule sub panel list view.
  'LBL_SVFS_FORECASTDATE' => 'Fecha de Inicio de Planificación',
  'LBL_SVFS_STATUS' => 'Estado',
  'LBL_SVFS_USER' => 'Para',
  'LBL_SVFS_CASCADE' => '¿Propagar en cascada a informes?',
  'LBL_SVFS_HEADER' => 'Planificación del presupuesto:',
  
  //Forecast Schedule detail; view.....
   'LB_FS_KEY' => 'ID',
   'LBL_FS_TIMEPERIOD_ID' => 'ID Período',
   'LBL_FS_USER_ID' => 'ID Usuario',
   'LBL_FS_TIMEPERIOD' => 'Período',
   'LBL_FS_START_DATE' => 'Fecha inicio',
   'LBL_FS_END_DATE' => 'Fecha fin',
   'LBL_FS_FORECAST_START_DATE' => 'Fecha de Inicio del presupuesto',
   'LBL_FS_STATUS' => 'Estado',
   'LBL_FS_FORECAST_FOR' => 'Planificar para:',
   'LBL_FS_CASCADE' => '¿En cascada?',
   'LBL_FS_MODULE_NAME' => 'Planificación de presupuesto',
   'LBL_FS_CREATED_BY' => 'Creado por',
   'LBL_FS_DATE_ENTERED' => 'Fecha Creación',
   'LBL_FS_DATE_MODIFIED' => 'Fecha Modificación',
   'LBL_FS_DELETED' => 'Eliminado',
       
  //forecast worksheet direct reports forecast
  'LBL_FDR_USER_NAME' => 'Informador Directo',
  'LBL_FDR_OPPORTUNITIES' => 'Oportunidades en presupuesto:',
  'LBL_FDR_WEIGH' => 'Cantidad Ponderada de oportunidades:',
  'LBL_FDR_COMMIT' => 'Cantidad comprometida',
  'LBL_FDR_DATE_COMMIT' => 'Fecha de compromiso',
    
  //detail view.
  'LBL_DV_HEADER' => 'Forecasts: Hoja de cálculo',
  'LBL_DV_MY_FORECASTS' => 'Mis presupuestos',
  'LBL_DV_MY_TEAM' => 'Presupuestos de mi Equipo',
  'LBL_DV_TIMEPERIODS' => 'Períodos:',
  'LBL_DV_FORECAST_PERIOD' => 'Período del presupuesto',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Oportunidades del presupuesto',
  'LBL_SEARCH' => 'Seleccionar',
  'LBL_SEARCH_LABEL' => 'Seleccionar',
    'LBL_COMMIT_HEADER' => 'Compromisos del presupuesto',
  'LBL_DV_LAST_COMMIT_DATE' => 'Última Fecha de compromiso:',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Últimas Cantidades comprometidas:',
  'LBL_DV_FORECAST_ROLLUP' => 'Previsión Dinámica',
  'LBL_DV_TIMEPERIOD' => 'Período:',
  'LBL_DV_TIMPERIOD_DATES' => 'Rango de Fechas:',
  
  //list view
  'LBL_LV_TIMPERIOD' => 'Período de Tiempo',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Fecha de Inicio',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Fecha de Fin',
    'LBL_LV_TYPE' => 'Tipo de presupuesto',
  'LBL_LV_COMMIT_DATE' => 'Fecha comprometida',
    'LBL_LV_OPPORTUNITIES' => 'Oportunidades',
  'LBL_LV_WEIGH' => 'Cantidad Ponderada',
    'LBL_LV_COMMIT' => 'Cantidad comprometida',
    
  'LBL_COMMIT_NOTE' => 'Introduzca las cantidades que desee comprometer en el período seleccionado:',
    
  'LBL_COMMIT_MESSAGE' => '¿Quiere introducir estas cantidades como compromiso?',
  'ERR_FORECAST_AMOUNT' => 'La cantidad comprometida es un valor requerido, y debe ser numérico.',
  
  // js error strings
  'LBL_FC_START_DATE' => 'Fecha inicio',
  'LBL_FC_USER' => 'Programar para',
    
  'LBL_NO_ACTIVE_TIMEPERIOD'=>'No hay ningún período activo para presupuestar.',
  'LBL_FDR_ADJ_AMOUNT'=>'Cantidad Ajustada',
  'LBL_SAVE_WOKSHEET'=>'Guardar Hoja de cálculo',
  'LBL_RESET_WOKSHEET'=>'Reiniciar Hoja de cálculo',
  'LBL_RESET_CHECK'=>'Se eliminarán todos los datos de la hoja de cálculo para el período seleccionado y para el usuario que ha iniciado la sesión. ¿Desea continuar?',
    
  'LB_FS_LIKELY_CASE'=>'Escenario probable',
  'LB_FS_WORST_CASE'=>'Peor Escenario',
  'LB_FS_BEST_CASE'=>'Mejor escenario',
  'LBL_FDR_WK_LIKELY_CASE'=>'Est. Escenario probable',
  'LBL_FDR_WK_BEST_CASE'=> 'Est. Mejor escenario',
  'LBL_FDR_WK_WORST_CASE'=>'Est. Peor Escenario',
  'LBL_BEST_CASE'=>'Mejor escenario:',
  'LBL_LIKELY_CASE'=>'Escenario probable:',
  'LBL_WORST_CASE'=>'Peor Escenario:',
  'LBL_FDR_C_BEST_CASE'=>'Mejor escenario',
  'LBL_FDR_C_WORST_CASE'=>'Peor Escenario',
  'LBL_FDR_C_LIKELY_CASE'=>'Escenario probable',
  'LBL_QC_LAST_BEST_CASE'=>'Cantidad último compromiso (Mejor escenario):',
  'LBL_QC_LAST_LIKELY_CASE'=>'Cantidad último compromiso (Escenario probable):',
  'LBL_QC_LAST_WORST_CASE'=>'Cantidad último compromiso (Peor Escenario):',
  'LBL_QC_ROLL_BEST_VALUE'=>'Cantidad Dinámica Realizada (Mejor escenario):',
  'LBL_QC_ROLL_LIKELY_VALUE'=>'Cantidad Dinámica Realizada (Escenario probable):',
  'LBL_QC_ROLL_WORST_VALUE'=>'Cantidad Dinámica Realizada (Peor Escenario):',  
  'LBL_QC_COMMIT_BEST_CASE'=>'Cantidad comprometida (Mejor escenario):',
  'LBL_QC_COMMIT_LIKELY_CASE'=>'Cantidad comprometida (Escenario probable):',
  'LBL_QC_COMMIT_WORST_CASE'=>'Cantidad comprometida (Peor Escenario):',
  
);


?>
