<?php
if(!isset($_REQUEST['option']))
    include_once 'custom/modules/Administration/catalogos/lista.php';
else{
    $option=$_REQUEST['option'];
    if($option==='pais')
        include_once 'custom/modules/Administration/catalogos/crear_pais.php';
    else if ($option=='ciudad')
        include_once 'custom/modules/Administration/catalogos/crear_ciudad.php';
    else if ($option=='institucion')
        include_once 'custom/modules/Administration/catalogos/crear_institucion.php';
       
}
?>
