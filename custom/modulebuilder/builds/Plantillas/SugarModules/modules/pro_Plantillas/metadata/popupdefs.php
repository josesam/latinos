<?php
$popupMeta = array (
    'moduleMain' => 'pro_Plantillas',
    'varName' => 'pro_Plantillas',
    'orderBy' => 'pro_plantillas.name',
    'whereClauses' => array (
  'name' => 'pro_plantillas.name',
  'tipoplantilla' => 'pro_plantillas.tipoplantilla',
  'archivo_c' => 'pro_plantillas.archivo_c',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'tipoplantilla',
  5 => 'archivo_c',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'tipoplantilla' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TIPOPLANTILLA',
    'width' => '10%',
    'name' => 'tipoplantilla',
  ),
  'archivo_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ARCHIVO_C',
    'width' => '10%',
    'name' => 'archivo_c',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'ARCHIVO_C' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ARCHIVO_C',
    'width' => '10%',
    'default' => true,
  ),
  'TIPOPLANTILLA' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TIPOPLANTILLA',
    'width' => '10%',
  ),
),
);
