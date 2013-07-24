<?php
$viewdefs ['Opportunities'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
        'form' => 
      array (
        
        'enctype' => 'multipart/form-data',
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/include/scripts/sistema/SpOportunidad.js',
        ),
      ),
      'javascript' => '{$PROBABILITY_SCRIPT}',
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
          ),
          1 => 'account_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_closed',
          ),
          1 => 
          array (
            'name' => 'amount',
          ),
        ),
        2 => 
        array (
          0 => array (
            'name' => 'sales_stage',
            'customCode' => '<input type="text" name="sales_stage" readonly="yes" size="35" id="sales_stage" value="{$fields.sales_stage.value}"/>{if $fields.sales_stage.value!="Perdido"}<a href="javascript:void(0);" onclick="javascript:openEtapas(\'{$fields.sales_stage.value}\');" >Seleccionar Etapa</a>{/if}',
          ),
          1 => 'probability',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'institution',
            'comment' => 'Institución',
            'label' => 'LBL_INSTITUTION',
          ),
          1 => 
          array (
            'name' => 'city',
            'comment' => 'Ciudad',
            'label' => 'LBL_CITY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'destination',
            'comment' => 'Destino',
            'label' => 'LBL_DESTINATION',
          ),
          1 => 
          array (
            'name' => 'courselevel',
            'comment' => 'Nivel del curso',
            'label' => 'LBL_COURSELEVEL',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'coursename',
            'comment' => 'Nombre de Curso',
            'label' => 'LBL_COURSENAME',
          ),
          1 => 
          array (
            'name' => 'weeks',
            'comment' => 'Semanas del curso',
            'label' => 'LBL_WEEKS',
          ),
        ),
        6 => 
        array (
          0 => 'next_step',
          1 => 'description',
        ),
        7 => 
        array (
          0 => 'campaign_name',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'files',
        
            'label' => 'LBL_FILES',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
?>