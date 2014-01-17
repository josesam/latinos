<?php
// Gantt
if(ACLController::checkAccess('tr_Reportes', 'list', true)) {
    $module_menu[] = array('index.php?module=tr_Reportes&action=reportes','Ver Reportes' );
}
?>