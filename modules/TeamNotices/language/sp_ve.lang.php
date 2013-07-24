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
  'LBL_MODULE_NAME' => 'Noticias de Equipo',
  'LBL_MODULE_TITLE' => 'Noticias de Equipo: Inicio',
  'LBL_SEARCH_FORM_TITLE' => 'Buscar de Noticias de Equipo',
  'LBL_LIST_FORM_TITLE' => 'Listar Noticias de Equipo',
  'LBL_PRODUCTTYPE' => 'Noticia de Equipo',
  'LBL_NOTICES' => 'Noticias de Equipo',
  'LBL_LIST_NAME' => 'Título',
  'LBL_URL' => 'URL',
  'LBL_URL_TITLE' => 'Título de URL',
  'LBL_LIST_DESCRIPTION' => 'Descripción',
  'LBL_NAME' => 'Título',
  'LBL_DESCRIPTION' => 'Descripción',
  'LBL_LIST_LIST_ORDER' => 'Orden',
  'LBL_LIST_ORDER' => 'Orden',
  'LBL_DATE_START' => 'Fecha inicio',
  'LBL_DATE_END' => 'Fecha fin',
  'LBL_STATUS' => 'Estado',
  'LNK_NEW_TEAM' => 'Nuevo Equipo',
  'LNK_NEW_TEAM_NOTICE' => 'Nueva Noticia de Equipo',
  'LNK_LIST_TEAM' => 'Equipos',
  'LNK_LIST_TEAMNOTICE' => 'Noticias de Equipo',
  'LNK_PRODUCT_LIST' => 'Productos con Precio de Lista',
  'LNK_NEW_PRODUCT' => 'Nuevo Producto',
  'LNK_NEW_MANUFACTURER' => 'Proveedores',
  'LNK_NEW_SHIPPER' => 'Transportistas',
  'LNK_NEW_PRODUCT_CATEGORY' => 'Categorías de Producto',
  'LNK_NEW_PRODUCT_TYPE' => 'Lista de Tipos de Producto',
  'NTC_DELETE_CONFIRMATION' => '¿Está seguro de eliminar este registro?',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para eliminar el tipo de producto.',
  'NTC_LIST_ORDER' => 'Defina el orden en que este Tipo de Producto aparecerá en las listas desplegables',
  'dom_status' => 
  array (
    'Visible' => 'Visible',
    'Hidden' => 'Oculto',
  ),
  'LBL_TEAM_NOTICE_FEATURES' => 'Características:
* Interfaz de Usuario Mejorado y un nuevo Asistente que combinan un diseño simple e intuitivo con un proceso paso a paso para guiar al usuario a través de la creación de informes.
* Los Conjuntos de Informes Complejos permiten a los usuarios crear informes a través de múltiples módulos utilizando lógica compleja.
* Los Informes Matriciales le ofrecen la habilidad de realizar agrupaciones por múltiples atributos en un diseño flexible de cuadrícula. Los usuarios pueden crear complejas tablas dinámicas con la capacidad de mostrar operaciones como la Suma, Media, Cuenta y Porcentaje.
* Los Filtros en Tiempo de Ejecución permiten que un usuario cambie los atributos de un informe en tiempo real.',
  'LBL_TEAM_NOTICE_WIRELESS' => 'La nueva vista móvil de la aplicación SugarCRM rompe con la noción clásica del sacrificio de la usabilidad en favor de la movilidad.
Características:
* El Interfaz de Usuario Mejorado proporciona al usuario las vistas de edición, detalle, lista y registros relacionados,así como la habilidad de acceder al directorio de empleados, guardar preferencias, y ver los elementos recientes.
* La Independencia de Dispositivo permite que los usuarios vean los datos de SugarCRM desde cualquier PDA o smartphone, incluyendo Blackberry e iPhone.
* El Cliente de HTML Enriquecido aporta una presentación clara de los datos de SugarCRM a través de un navegador web estándar.
* Las Nuevas Capacidades de Búsqueda permiten a los usuarios encontrar la información rápidamente.',
  'LBL_TEAM_NOTICE_DATA_IMPORT' => 'Las Mejoras a la Importación de Datos hacen aún más fácil la migración de datos a SugarCRM desde aplicaciones como Excel, Act!, Microsoft Outlook, y Salesforce.com.
Mejoras:
* El Interfaz de Usuario Mejorado del mapeo proporciona más opciones para garantizar que las transferencias de datos a SugarCRM se ejecutan con precisión y sin problemas.
* Los Controles de Calidad de Datos permiten que los administradores especifiquen si las importaciones de datos deberían crear nuevos registros o actualizar los existentes, reduciendo así la información duplicada.
* La Importación en Todos los Módulos proporciona la habilidad de llevar la información de otras aplicaciones CRM a cualquier módulo, reduciendo la repetición de la introducción de datos.',
  'LBL_TEAM_NOTICE_MODULE_BUILDER' => 'El Constructor de Módulos le permite extender SugarCRM de formas nuevas e innovadoras.
Mejoras:
* Las Nuevas Relaciones permiten que tanto los módulos nuevos como los existentes sean relacionados de nuevas maneras.
* La Auditoría proporciona un historial completo de la creación y modificación de módulos para poder hacer un seguimiento de las personalizaciones.
* El Soporte de Dashlets permite que la funcionalidad de módulos y objetos personalizados sea mostrada en contenedores AJAX ubicados en la página de inicio.
* Las Nuevas Plantillas proporcionan un modo de monitorizar fácilmente la información de archivos y oportunidades.',
  'LBL_TEAM_NOTICE_TRACKER' => 'La Monitorización proporcionan una vista detallada del uso y rendimiento de SugarCRM.
Características:
* Los Informes de Monitorización proporcionan una instantánea de la utilización del sistema para mejorar la adopción por parte de los usuarios y la visibilidad sobre la utilización del CRM. Los Usuarios pueden ver informes sobre actividades semanales en el CRM, registros y módulos vistos, tiempo de sesión acumulado y estado en línea de otros miembros de equipo.
* La Monitorización del Sistema proporciona a los administradores información sobre cómo el sistema está siendo utilizado y sobre potenciales puntos de sobrecarga en la aplicación.',
  );


?>
