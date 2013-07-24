<?php
$viewdefs ['Opportunities'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
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
          0 => 'name',
          1 => 'account_name',
        ),
        1 => 
        array (
          0 => 'date_closed',
          1 => 
          array (
            'name' => 'amount',
            'label' => '{$MOD.LBL_AMOUNT} ({$CURRENCY})',
          ),
        ),
        2 => 
        array (
          0 => 'sales_stage',
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
          1 => 
          array (
            'name' => 'description',
            'nl2br' => true,
          ),
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
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
      ),
    ),
  ),
);
?>
