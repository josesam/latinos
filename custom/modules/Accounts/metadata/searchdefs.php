<?php
$searchdefs ['Accounts'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'lae' => 
      array (
        'type' => 'multienum',
        'label' => 'LBL_LAE',
        'width' => '10%',
        'default' => true,
        'name' => 'lae',
      ),
      'levelinterest' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_LEVELINTEREST',
        'width' => '10%',
        'default' => true,
        'name' => 'levelinterest',
      ),
      'areainteres' => 
      array (
        'type' => 'multienum',
        'label' => 'LBL_AREAINTEREST',
        'width' => '10%',
        'default' => true,
        'name' => 'areainteres',
      ),
      'potential' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_POTENTIAL',
        'width' => '10%',
        'default' => true,
        'name' => 'potential',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'name' => 'status',
      ),
      'registrationdate' => 
      array (
        'type' => 'date',
        'label' => 'LBL_REGISTRATIONDATE',
        'width' => '10%',
        'default' => true,
        'name' => 'registrationdate',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'lae' => 
      array (
        'type' => 'multienum',
        'label' => 'LBL_LAE',
        'width' => '10%',
        'default' => true,
        'name' => 'lae',
      ),
      'areainteres' => 
      array (
        'type' => 'multienum',
        'label' => 'LBL_AREAINTEREST',
        'width' => '10%',
        'default' => true,
        'name' => 'areainteres',
      ),
      'levelinterest' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_LEVELINTEREST',
        'width' => '10%',
        'default' => true,
        'name' => 'levelinterest',
      ),
      'potential' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_POTENTIAL',
        'width' => '10%',
        'default' => true,
        'name' => 'potential',
      ),
      'dateofbirth' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DATEOFBIRTH',
        'width' => '10%',
        'default' => true,
        'name' => 'dateofbirth',
      ),
      'registrationdate' => 
      array (
        'type' => 'date',
        'label' => 'LBL_REGISTRATIONDATE',
        'width' => '10%',
        'default' => true,
        'name' => 'registrationdate',
      ),
      'phone' => 
      array (
        'name' => 'phone',
        'label' => 'LBL_ANY_PHONE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'name' => 'status',
      ),
      'groupassociation' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_GROUPASSOCIATION',
        'width' => '10%',
        'default' => true,
        'name' => 'groupassociation',
      ),
      'email' => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'paisinteres' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PAISINTEREST',
        'width' => '10%',
        'default' => true,
        'name' => 'paisinteres',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>