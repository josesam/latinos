<script src="custom/include/clases/phpFileTree/php_file_tree.js" type="text/javascript"></script>
<link href="custom/include/clases/phpFileTree/styles/default/default.css" rel="stylesheet" type="text/css" media="screen" />

<script>
function actionurl(archivo){
    var data={
        archivolink:archivo
    }
    var urllista = "index.php?&module=Accounts&action=mostrararchivo";
    $("#mostrarpdf_div").text("generando...");
    $("#mostrarpdf_div").load(urllista,data, function(){ if("") {
            (nombre_ciudad);
        } });
}
</script>
<?php
include_once 'custom/include/clases/phpFileTree/php_file_tree.php';
echo php_file_tree("archivos/", "javascript:actionurl('[link]');");
//echo php_file_tree("archivos/", "http://localhost/latinosfinal/[link]");
?>
<div id="mostrarpdf_div"></div>