<?php
$popupMeta = array (
    'moduleMain' => 'Opportunity',
    'varName' => 'OPPORTUNITY',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'opportunities.name',
  'account_name' => 'accounts.name',
  'opportunity_type' => 'opportunities.opportunity_type',
  'sales_stage' => 'opportunities.sales_stage',
  'institution' => 'opportunities.institution',
  'city' => 'opportunities.city',
  'destination' => 'opportunities.destination',
  'courselevel' => 'opportunities.courselevel',
  'coursename' => 'opportunities.coursename',
  'weeks' => 'opportunities.weeks',
  'studentid' => 'opportunities.studentid',
  'assigned_user_id' => 'opportunities.assigned_user_id',
),
    'searchInputs' => array (
  0 => 'name',
  1 => 'account_name',
  2 => 'opportunity_type',
  3 => 'sales_stage',
  4 => 'institution',
  5 => 'city',
  6 => 'destination',
  7 => 'courselevel',
  8 => 'coursename',
  9 => 'weeks',
  10 => 'studentid',
  11 => 'assigned_user_id',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'account_name' => 
  array (
    'name' => 'account_name',
    'displayParams' => 
    array (
      'hideButtons' => 'true',
      'size' => 30,
      'class' => 'sqsEnabled sqsNoAutofill',
    ),
    'width' => '10%',
  ),
  'opportunity_type' => 
  array (
    'name' => 'opportunity_type',
    'width' => '10%',
  ),
  'sales_stage' => 
  array (
    'name' => 'sales_stage',
    'width' => '10%',
  ),
  'institution' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_INSTITUTION',
    'width' => '10%',
    'name' => 'institution',
  ),
  'city' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CITY',
    'width' => '10%',
    'name' => 'city',
  ),
  'destination' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DESTINATION',
    'width' => '10%',
    'name' => 'destination',
  ),
  'courselevel' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_COURSELEVEL',
    'width' => '10%',
    'name' => 'courselevel',
  ),
  'coursename' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_COURSENAME',
    'width' => '10%',
    'name' => 'coursename',
  ),
  'weeks' => 
  array (
    'type' => 'int',
    'label' => 'LBL_WEEKS',
    'width' => '10%',
    'name' => 'weeks',
  ),
  'studentid' => 
  array (
    'type' => 'int',
    'label' => 'LBL_STUDENTID',
    'width' => '10%',
    'name' => 'studentid',
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
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '30%',
    'label' => 'LBL_LIST_OPPORTUNITY_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'ACCOUNT_NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'id' => 'ACCOUNT_ID',
    'module' => 'Accounts',
    'default' => true,
    'sortable' => true,
    'ACLTag' => 'ACCOUNT',
    'name' => 'account_name',
  ),
  'AMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'amount',
  ),
  'DATE_CLOSED' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_CLOSED',
    'width' => '10%',
    'default' => true,
    'name' => 'date_closed',
  ),
  'INSTITUTION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_INSTITUTION',
    'width' => '10%',
    'default' => true,
  ),
  'DESTINATION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DESTINATION',
    'width' => '10%',
    'default' => true,
    'name' => 'destination',
  ),
  'CITY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CITY',
    'width' => '10%',
    'default' => true,
    'name' => 'city',
  ),
  'STUDENTID' => 
  array (
    'type' => 'int',
    'label' => 'LBL_STUDENTID',
    'width' => '10%',
    'default' => true,
    'name' => 'studentid',
  ),
  'SALES_STAGE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_SALES_STAGE',
    'default' => true,
    'name' => 'sales_stage',
  ),
  'COURSENAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_COURSENAME',
    'width' => '10%',
    'default' => true,
    'name' => 'coursename',
  ),
  'WEEKS' => 
  array (
    'type' => 'int',
    'label' => 'LBL_COURSENAME',
    'width' => '10%',
    'default' => true,
    'name' => 'weeks',
  ),
  'COURSELEVEL' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_COURSELEVEL',
    'width' => '10%',
    'default' => true,
    'name' => 'courselevel',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
