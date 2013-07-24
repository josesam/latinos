<?php
/*
 * Funcionalidad para cargar de clientes Escuela de Empresas
 * 
 */
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

<h1>Funcionalidad para cargar Estudiantes</h1>
<h2>Notas</h2>
<ul>
    <li>Permite: Archivos excel 2003</li>
    <li>Debe ser cargado tal y cual esta en las plantillas, con las cabeceras especificas , 
        casos contrario no podra cargar la información correctamente </li>
</ul>
<h3>Nota: </h3>
<p>Esta funcionalidad validara como campo unico el email, recordar que si el email esta repetido o en la
base de datos , ese regitro no se modificara o actualizara , si existiense algun error en la data
no se registra en el sistema dicho estudiante
</p>
<form id="cargaclientes" name="cargaclientes" method="post" enctype="multipart/form-data">
<input type="hidden"  name="module" id="module" value="Accounts">
<input type="hidden"  name="action" id="action" value="cargar">
<input type="hidden"  name="return_action" id="return_action" value="cargar">
<input type="hidden"  name="bandera" id="bandera" value="clientes">
<div class="seccion" >
    <div class="seccion_head">
            Importación de Clientes
    </div>
<label>Archivo</label>
<input type="file"  name="archivo" id="archivo" value="">
<br>
<input type="submit" id="boton_cargar" value="cargar">
</div>
<br>
</form>

<br/><br/><br/><br/><br/><br/>

<?php
if(isset($_POST['bandera'])){
    $path="custom/include/cargaCliente/CargaCliente.php";
    if(file_exists($path)){
        include_once $path;
        $encuesta=new CargaCliente();
        $lista=$encuesta->procesarYGuardar($_FILES['archivo'],$_POST['bandera']);
        if (count($lista['error'])>0){
            echo "<ul>";
            foreach ($lista['error'] as $key =>$value){
                echo "<li>En la Fila:". $value['fila'] . " se genero el siguiente error ".$value['detalle']."</li>";
            }
            echo "</ul>";


        }else{
            echo "El proceso se ejecutó correctamente";
        }

    }
}
    
?>
