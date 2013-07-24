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
  'LBL_MODULE_NAME' => 'Presupuesto',
  'LNK_NEW_OPPORTUNITY' => 'Crear Oportunidad',
  'LBL_MODULE_TITLE' => 'Presupuestos',
  'LBL_LIST_FORM_TITLE' => 'Presupuestos Realizados',
  'LNK_UPD_FORECAST' => 'Hoja de presupuesto',
  'LNK_QUOTA' => 'Cuotas',
  'LNK_FORECAST_LIST' => 'Historial de Previsiones',
  'LBL_FORECAST_HISTORY' => 'Previsiones: Historial',
  'LBL_FORECAST_HISTORY_TITLE' => 'Previsiones: Historial',
  //module strings.
  'LBL_TIMEPERIOD_NAME' => 'Período',
  'LBL_USER_NAME' => 'Nombre de Usuario',
  'LBL_REPORTS_TO_USER_NAME' => 'Informa a',
  'LBL_FORECAST_ID' => 'ID',
  'LBL_FORECAST_TIME_ID' => 'ID Período',
  'LBL_FORECAST_TYPE' => 'Tipo de Previsión',
  'LBL_FORECAST_OPP_COUNT' => 'Oportunidades',
  'LBL_FORECAST_OPP_WEIGH' => 'Cantidad Ponderada',
  'LBL_FORECAST_OPP_COMMIT' => 'Escenario probable',
  'LBL_FORECAST_OPP_BEST_CASE'=>'Mejor escenario',
  'LBL_FORECAST_OPP_WORST'=>'Peor escenario',
  //var defs
  'LBL_FORECAST_USER' => 'Usuario',
  'LBL_DATE_COMMITTED' => 'Fecha compromiso',
  'LBL_DATE_ENTERED' => 'Fecha Creación',
  'LBL_DATE_MODIFIED' => 'Fecha Modificación',
  //forecast table
  'LBL_CREATED_BY' => 'Creado por',
  'LBL_DELETED' => 'Eliminado',
  'LBL_MODIFIED_USER_ID'=>'Modificado por',  
  'LBL_QC_TIME_PERIOD' => 'Período:',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Número Oportunidades:',
  'LBL_QC_WEIGHT_VALUE' => 'Cantidad Ponderada:',
  'LBL_QC_COMMIT_VALUE' => 'Cantidad comprometida:',
  'LBL_QC_COMMIT_BUTTON' => 'Realizar',
  'LBL_QC_WORKSHEET_BUTTON' => 'Hoja de cálculo',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Cantidad Realizada en Dinámica:',
  'LBL_QC_DIRECT_FORECAST' => 'Mi previsión Directa:',
  'LBL_QC_ROLLUP_FORECAST' => 'Mi previsión de Grupo:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Mis previsiones',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Última Fecha de compromiso:',
   //Quick Commit labels.
  'LBL_QC_LAST_COMMIT_VALUE' => 'Última cantidad comprometida:',
  'LBL_QC_HEADER_DELIM' => 'A',
  'LBL_OW_OPPORTUNITIES' => 'Oportunidad',
  'LBL_OW_ACCOUNTNAME' => 'Cuenta',
  'LBL_OW_REVENUE' => 'Cantidad',
  'LBL_OW_WEIGHTED' => 'Cantidad Ponderada',
  'LBL_OW_MODULE_TITLE' => 'Hoja de Oportunidad',
  'LBL_OW_PROBABILITY' => 'Probabilidad',
  'LBL_OW_NEXT_STEP'=>'Siguiente Paso',
  'LBL_OW_DESCRIPTION'=>'Descripción',
  'LBL_OW_TYPE'=>'Tipo',
  'LNK_NEW_TIMEPERIOD' => 'Crear Período',
  'LNK_TIMEPERIOD_LIST' => 'Períodos',
  'LBL_SVFS_FORECASTDATE' => 'Fecha inicio de planificación',
  'LBL_SVFS_STATUS' => 'Estado',
  'LBL_SVFS_USER' => 'Para',
  'LBL_SVFS_CASCADE' => '¿Propagar en cascada a informes?',
  //opportunity worksheet list view labels
  'LBL_SVFS_HEADER' => 'Planificación del presupuesto:',
  'LB_FS_KEY' => 'ID',
  'LBL_FS_TIMEPERIOD_ID' => 'ID Período',
  'LBL_FS_USER_ID' => 'ID Usuario',
  'LBL_FS_TIMEPERIOD' => 'Período',
  'LBL_FS_START_DATE' => 'Fecha inicio',
  'LBL_FS_END_DATE' => 'Fecha fin',
  //forecast schedule shortcuts
  'LBL_FS_FORECAST_START_DATE' => 'Fecha de inicio del presupuesto',
  'LBL_FS_STATUS' => 'Estado',
  'LBL_FS_FORECAST_FOR' => 'Planificar para:',
  //Forecast schedule sub panel list view.
  'LBL_FS_CASCADE' => '¿En cascada?',
  'LBL_FS_MODULE_NAME' => 'Planificación de presupuesto',
  'LBL_FS_CREATED_BY' => 'Creado por',
  'LBL_FS_DATE_ENTERED' => 'Fecha Creación',
  'LBL_FS_DATE_MODIFIED' => 'Fecha Modificación',
  'LBL_FS_DELETED' => 'Eliminado',
  //Forecast Schedule detail; view.....
  'LBL_FDR_USER_NAME' => 'Informador Directo',
  'LBL_FDR_OPPORTUNITIES' => 'Oportunidades en presupuesto:',
  'LBL_FDR_WEIGH' => 'Cantidad Ponderada de oportunidades:',
  'LBL_FDR_COMMIT' => 'Cantidad Realizada',
  'LBL_FDR_DATE_COMMIT' => 'Fecha de compromiso',
  'LBL_DV_HEADER' => 'Forecasts: Hoja de cálculo',
  'LBL_DV_MY_FORECASTS' => 'Mis presupuestos',
  'LBL_DV_MY_TEAM' => 'Presupuestos de mi equipo',
  'LBL_DV_TIMEPERIODS' => 'Períodos:',
  'LBL_DV_FORECAST_PERIOD' => 'Período del presupuesto',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Oportunidades del presupuesto',
  'LBL_SEARCH' => 'Seleccionar',
  'LBL_SEARCH_LABEL' => 'Seleccionar',
  'LBL_COMMIT_HEADER' => 'Realización de presupuesto',
  'LBL_DV_LAST_COMMIT_DATE' => 'Última fecha de compromiso:',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Últimas cantidades comprometidas:',
  //forecast worksheet direct reports forecast
  'LBL_DV_FORECAST_ROLLUP' => 'Previsión Dinámica',
  'LBL_DV_TIMEPERIOD' => 'Período:',
  'LBL_DV_TIMPERIOD_DATES' => 'Rango de Fechas:',
  'LBL_LV_TIMPERIOD' => 'Período',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Fecha inicio',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Fecha fin',
  //detail view.
  'LBL_LV_TYPE' => 'Tipo de presupuesto',
  'LBL_LV_COMMIT_DATE' => 'Fecha de compromiso',
  'LBL_LV_OPPORTUNITIES' => 'Oportunidades',
  'LBL_LV_WEIGH' => 'Cantidad ponderada',
  'LBL_LV_COMMIT' => 'Cantidad comprometida',
  'LBL_COMMIT_NOTE' => 'Introduzca los montos que va a comprometer en el período seleccionado:',
  'LBL_COMMIT_MESSAGE' => '¿Quiere introducir estas cantidades como compromiso?',
  'ERR_FORECAST_AMOUNT' => 'El monto comprometido es un valor requerido, y debe ser numérico.',

  // js error strings
  'LBL_FC_START_DATE' => 'Fecha inicio',
  'LBL_FC_USER' => 'Programar para',

  'LBL_NO_ACTIVE_TIMEPERIOD'=>'No hay ningún período activo para presupuestar.',
  'LBL_FDR_ADJ_AMOUNT'=>'Cantidad ajustada',
  'LBL_SAVE_WOKSHEET'=>'Guardar Hoja de cálculo',
  'LBL_RESET_WOKSHEET'=>'Reiniciar Hoja de cálculo',
  'LBL_SHOW_CHART'=>'Ver Gráfico',
  'LBL_RESET_CHECK'=>'Se eliminarán todos los datos de la hoja de cálculo para el período seleccionado y para el usuario que ha iniciado la sesión. ¿Desea continuar?',
  
  'LB_FS_LIKELY_CASE'=>'Escenario probable',
  'LB_FS_WORST_CASE'=>'Peor escenario',
  'LB_FS_BEST_CASE'=>'Mejor escenario',
  'LBL_FDR_WK_LIKELY_CASE'=>'Est. escenario probable',
  'LBL_FDR_WK_BEST_CASE'=> 'Est. mejor escenario',
  'LBL_FDR_WK_WORST_CASE'=>'Est. peor escenario',
  'LBL_BEST_CASE'=>'Mejor escenario:',
  'LBL_LIKELY_CASE'=>'Escenario probable:',
  'LBL_WORST_CASE'=>'Peor escenario:',
  'LBL_FDR_C_BEST_CASE'=>'Mejor escenario',
  'LBL_FDR_C_WORST_CASE'=>'Peor escenario',
  'LBL_FDR_C_LIKELY_CASE'=>'Escenario probable',
  'LBL_QC_LAST_BEST_CASE'=>'Cantidad último compromiso (mejor escenario):',
  'LBL_QC_LAST_LIKELY_CASE'=>'Cantidad último compromiso (escenario probable):',
  'LBL_QC_LAST_WORST_CASE'=>'Cantidad último compromiso (peor escenario):',
  'LBL_QC_ROLL_BEST_VALUE'=>'Cantidad Dinámica Realizada (mejor escenario):',
  'LBL_QC_ROLL_LIKELY_VALUE'=>'Cantidad Dinámica Realizada (escenario probable):',
  'LBL_QC_ROLL_WORST_VALUE'=>'Cantidad Dinámica Realizada (peor escenario):',  
  'LBL_QC_COMMIT_BEST_CASE'=>'Cantidad comprometida (mejor escenario):',
  'LBL_QC_COMMIT_LIKELY_CASE'=>'Cantidad comprometida (escenario probable):',
  'LBL_QC_COMMIT_WORST_CASE'=>'Cantidad comprometida (peor escenario):',
  
  'LBL_FORECAST_FOR'=>'Hoja de presupuesto para: ',
  'LBL_FMT_ROLLUP_FORECAST'=>'(Dinámica)', // Móvil
  'LBL_FMT_DIRECT_FORECAST'=>'(Directa)',

  //labels used by the chart.
  'LBL_GRAPH_TITLE'=>'Historial de previsiones',
  'LBL_GRAPH_QUOTA_ALTTEXT'=>'Cuota para %s',
  'LBL_GRAPH_COMMIT_ALTTEXT'=>'Cantidad comprometida para %s',
  'LBL_GRAPH_OPPS_ALTTEXT'=>'El valor de las oportunidades cerradas en %s',

  'LBL_GRAPH_QUOTA_LEGEND'=>'Cuota',
  'LBL_GRAPH_COMMIT_LEGEND'=>'Previsión comprometida',
  'LBL_GRAPH_OPPS_LEGEND'=>'Oportunidades cerradas',
  'LBL_TP_QUOTA'=>'Cuota:',
  'LBL_CHART_FOOTER'=>'Historial de presupuesto<br/>Cantidad en Cuota vs Prevista vs Valor de Oportunidad Cerrada',
  'LBL_TOTAL_VALUE'=>'Totales:',
  'LBL_COPY_AMOUNT'=>'Cantidad total',
  'LBL_COPY_WEIGH_AMOUNT'=>'Cantidades totales ponderadas',
  'LBL_WORKSHEET_AMOUNT'=>'Cantidades totales estimadas',
  'LBL_COPY'=>'Copiar Valores',  
  'LBL_COMMIT_AMOUNT'=>'Suma de valores comprometidos.',
  'LBL_COPY_FROM'=>'Copiar valor de:',

  'LBL_CHART_TITLE' => 'Presupuestado vs. Comprometido vs. Real',
);


?>
