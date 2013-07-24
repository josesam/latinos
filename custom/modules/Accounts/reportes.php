<?php
if (!defined('sugarEntry'))define('sugarEntry', true);
require_once('include/entryPoint.php');
ob_start();
require_once('include/MVC/SugarApplication.php');
?>

<?php 
global $app_list_strings, $db;
$etapaVenta=$app_list_strings['sales_stage_dom'];

$nivelCurso=$app_list_strings['levelinteres_dom'];

$sql = "SELECT id, CONCAT(first_name,' ',last_name) nombre FROM users WHERE deleted=0 AND status='Active' ORDER BY last_name";
$result=$db->query($sql);

$sql1 = "SELECT DISTINCT(valor) FROM catalogo WHERE clase='institucion' ORDER BY valor";
$resultDestino=$db->query($sql1);

$sql2 = "SELECT DISTINCT(valor) FROM catalogo WHERE clase='ciudadinteres' ORDER BY valor";
$resultCiudad=$db->query($sql2);

?>

<style>
    label{
        width:150px;
        float:left;
        font-weight: bold;
    }
    input.datos{
        
        margin: 0 5px;
    }
.seccion{
	border: 1px solid black;
	padding: 5px;
	margin:5px;
	width:40%;
	float:left;
}
.seccion_head{
	font-weight: bold;
	padding:2px;
	text-align: center;
	background-image: url("./custom/include/images/bg_top.jpg");
	color:#CCC;
}
</style>

<link rel="stylesheet" type="text/css" href="custom/include/scripts/genericas/jquery/css/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="custom/include/css/tabla/style.css" />

<script type="text/javascript" src="custom/include/scripts/genericas/varios/jquery.dataTables.js"></script>

<link rel="stylesheet" type="text/css" href="custom/include/scripts/demo_page.css" />
<link rel="stylesheet" type="text/css" href="custom/include/scripts/demo_table.css" />

<h1>Funcionalidad generar reportes rapidos y lista de publico objetivos para genración de campanas</h1>
<table>
    <tr>
        <td>Tipo de búsqueda:</td>
        <td>
            <select id="tipo_busqueda" name="tipo_busqueda">
                <option value="">Seleccione...</option>
                <option value="todos">Todos</option>
                <option value="aplicaciones">Aplicaciones</option>
            </select>
        </td>
        
    </tr>
    <tr>
        <td>Nombre:</td>
        <td><input type="text" name="nombre" id="nombre" /> </td>
        <td>Email:</td>
        <td><input type="text" name="email" id="email" /> </td>
    </tr>
    <tr>
        <td>Fecha inicio de curso:</td>
        <td>Entre <input type="text" name="fecha_inicio1" id="fecha_inicio1" /> y <input type="text" name="fecha_inicio2" id="fecha_inicio2" /> </td>
    </tr>
<!--    <tr>
        <td>Fecha fin de curso:</td>
        <td>Entre <input type="text" name="fecha_fin1" id="fecha_fin1" /> y <input type="text" name="fecha_fin2" id="fecha_fin2" /> </td>
    </tr>-->
    <tr>
        <td>Estado de aplicación:</td>
        <td>
            <select name="estado_aplicacion" id="estado_aplicacion" size="4">
                 <?php foreach ($etapaVenta as $key =>$value): ?>
                    <option value="<?php echo $key; ?>"><?php echo $value ?> </option>
                 <?php endforeach; ?>
            </select>
        </td>
        <td>Asesor comercial:</td>
        <td>
            <select name="asesor" id="asesor" size="4">
                 <?php while ($row = $db->fetchByAssoc($result)){  ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre'] ?> </option>
                 <?php } ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Nivel del Curso:</td>
        <td>
            <select name="nivel_curso" id="nivel_curso" size="4">
                 <?php foreach ($nivelCurso as $key =>$value): ?>
                    <option value="<?php echo $key; ?>"><?php echo $value ?> </option>
                 <?php endforeach; ?>
            </select>
        </td>
        <td>Nombre del curso:</td>
        <td><input type="text" name="nombre_curso" id="nombre_curso" /> </td>
    </tr>
    <tr>
        <td>Destino del estudiante:</td>
        <td>
            <select name="destino_estudiante" id="destino_estudiante" size="4">
                 <?php while ($row = $db->fetchByAssoc($resultDestino)){  ?>
                    <option value="<?php echo $row['valor']; ?>"><?php echo $row['valor'] ?> </option>
                 <?php } ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Ciudad de destino:</td>
        <td>
            <select name="ciudad_destino" id="ciudad_destino" size="4">
                 <?php while ($row = $db->fetchByAssoc($resultCiudad)){  ?>
                    <option value="<?php echo $row['valor']; ?>"><?php echo $row['valor'] ?> </option>
                 <?php } ?>
            </select>
        </td>
    </tr>
</table>
<div style="text-align:center;">
  <input type="submit" value="Buscar" onclick="actionurl()" />
    </div>
<div id="resultadobusqueda"></div>
<script>
    function actionurl(){
        var data={
            tipo_busqueda:$("#tipo_busqueda").val(),
            nombre:$("#nombre").val(),
            email:$("#email").val(),
            fecha_inicio1:$("#fecha_inicio1").val(),
            fecha_inicio2:$("#fecha_inicio2").val(),
//            fecha_fin1:$("#fecha_fin1").val(),
//            fecha_fin2:$("#fecha_fin2").val(),
            estado_aplicacion:$("#estado_aplicacion").val(),
            asesor:$("#asesor").val(),
            nivel_curso:$("#nivel_curso").val(),
            nombre_curso:$("#nombre_curso").val(),
            destino_estudiante:$("#destino_estudiante").val(),
            ciudad_destino:$("#ciudad_destino").val()
        }
        var urllista = "index.php?&module=Accounts&action=buscar";
        $("#resultadobusqueda").text("generando...");
        $("#resultadobusqueda").load(urllista,data, function(){ if("") {
                (nombre_ciudad);
            } });
    }

</script>
