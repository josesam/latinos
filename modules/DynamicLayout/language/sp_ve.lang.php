<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/**
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2011 SugarCRM Inc.
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
 * Source: SugarCRM 6.1
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array (
  'LBL_ADVANCED' => 'Avanzado:',
  'DESC_USING_LAYOUT_TITLE' => 'Uso del editor de diseño',
  'LBL_EDIT_IN_PLACE' => 'Editar In Situ:',
  'DESC_USING_LAYOUT_SHORTCUTS' => 'Accesos directos:',
  'DESC_USING_LAYOUT_TOOLBAR' => 'Caja de herramientas:',
  'DESC_USING_LAYOUT_EDIT_ROWS' => 'Editar Filas:',
  'DESC_USING_LAYOUT_SELECT_FILE' => 'Seleccione un archivo:',
  'DESC_USING_LAYOUT_EDIT_FIELDS' => 'Editar campos:',
  'DESC_USING_LAYOUT_ADD_FIELD' => 'Agregar campo:',
  'DESC_USING_LAYOUT_REMOVE_ITEM' => 'Quitar un elemento:',
  'DESC_USING_LAYOUT_DISPLAY_HTML' => 'Mostrar código HTML:',
  'DESC_USING_LAYOUT_BLK1' => 'El Editor de Diseño le permite acomodar los campos, pestañas y paneles de acuerdo a sus necesidades. Primero seleccione la página que desea modificar y luego haga clic en el botón Selecccionar Archivo.',
  'DESC_USING_LAYOUT_BLK2' => ' le permite seleccionar otra página para editar; los cambios hechos en la página actual se pierden si no son guardados. Si no está seguro de que archivo editar puede marcar la opción Editar in situ; esto añadirá un icono de edición en los lugares que se pueden modificar en la aplicación. Escoja, mediante las pestañas, la página que desea modificar, haga clic en el icono para ingresar al modo de edición del archivo.',
  'DESC_USING_LAYOUT_BLK3' => ' arrastre y reubique los campos o sus etiquetas. Seleccione el icono ',
  'DESC_USING_LAYOUT_BLK4' => ' junto al campo o etiqueta que desea mover y haga clic en el icono en el sitio en donde quiere colocar el campo o etiqueta. Así moverá el objeto desde su ubicación actual a una nueva ubicación. Si en el lugar de destino ya existía un objeto, se intercambiarán las posiciones. Los subpaneles se mueven de la misma manera; seleccione el icono del subpanel origen y el icono de destino e intercambie su ubicación. Para eliminar un campo o formulario de la pantalla, arrastre el objeto al área de trabajo (staging area) de la Caja de Herramientas en el menú de la izquierda.',
  'DESC_USING_LAYOUT_BLK5' => ' cambia la vista para permitir la adición o eliminación de filas en el panel de detalles. Presione la tecla + para añadir una fila bajo la que está seleccionada  o presione la tecla - para eliminarla.',
  'DESC_USING_LAYOUT_BLK6' => 'La Caja de Herramientas tiene un área de trabajo que se puede usar para añadir campos y etiquetas a un formulario, retener temporalmente objetos eliminados y para desechar objetos.',
  'DESC_USING_LAYOUT_BLK7' => ' permite especificar el tipo de campo que desea añadir y la etiqueta asociada. Al presionar el botón Agregar se colocan el campo y su etiqueta en el área de trabajo de Toolbox. Desde aquí se puede añadir el campo seleccionando su icono y luego el icono para su ubicación en el formulario.',
  'DESC_USING_LAYOUT_BLK8' => ' se lleva a cabo seleccionando su icono y haciendo clic en el texto Arrastre objetos aquí. Los objetos seleccionados se depositarán en el área de trabajo de la Caja de Herramientas.',
  'DESC_USING_LAYOUT_BLK9' => ' muestra el lenguaje HTML que conforma cada campo. Aunque esto puede ser de utilidad, requiere mucho CPU y debe ser usado solamente cuando sea necesario.',
  'DESC_USING_LAYOUT_BLK10' => ' Para guardar los cambios presione el botón Guardar diseño. Para descartar los cambios simplemente haga clic en otra pestaña de la aplicación.',
  'NO_RECORDS_LISTVIEW' => 'Para editar una lista al menos debe existir una fila de datos. Por favor inserte un registro a la lista antes de intentar editarla.',
  'LBL_EDIT_LAYOUT' => 'Editar Diseño',
  'LBL_EDIT_ROWS' => 'Editar Filas',
  'LBL_EDIT_COLUMNS' => 'Editar Columnas',
  'LBL_EDIT_LABELS' => 'Editar Etiquetas',
  'LBL_EDIT_FIELDS' => 'Editar Campos',
  'LBL_ADD_FIELDS' => 'Agregar Campos',
  'LBL_DISPLAY_HTML' => 'Mostrar código HTML',
  'LBL_SELECT_FILE' => 'Seleccionar archivo',
  'LBL_SAVE_LAYOUT'=> 'Guardar diseño',
  'LBL_SELECT_A_SUBPANEL' => 'Seleccione un subpanel',
  'LBL_SELECT_SUBPANEL' => 'Seleccionar subpanel',
  'LBL_TOOLBOX' => 'Caja de Herramientas',
  'LBL_STAGING_AREA' => 'Area de trabajo (arrastre y suelte objetos aquí)',
  'LBL_SUGAR_FIELDS_STAGE' => 'Campos Sugar (haga clic en objeto para agregarlo al área de trabajo)',
  'LBL_SUGAR_BIN_STAGE' => 'Papelera Sugar (haga clic en objeto para agregarlo al área de trabajo)',
  'LBL_VIEW_SUGAR_FIELDS' => 'Ver campos Sugar',
  'LBL_VIEW_SUGAR_BIN' => 'Ver papelera Sugar', 
);


?>
