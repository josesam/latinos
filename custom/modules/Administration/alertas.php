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

<h1>Funcionalidad para Modificar las plantillas</h1>
<br/><br/>


<form id="cargaclientes" name="cargaclientes" method="post" enctype="multipart/form-data">
<input type="hidden"  name="module" id="module" value="Administration">
<input type="hidden"  name="action" id="action" value="alertas">
<input type="hidden"  name="return_action" id="return_action" value="alertas">
<input type="hidden"  name="bandera" id="bandera" value="alertas">
<?php 
$parametros = include 'custom/include/alertas/parametros.php';;
?>
<h2>Estudiante Contact Out After 14 days</h2>
<table>
    <tr>
        <td>Días:</td>
        <td><input type="text" name="diasEstudiante14" value="<?php echo $parametros['prospectos'][0]['dias']?>" /></td>
    </tr>
    <tr>
        <td>Subject:</td>
        <td><input type="text" name="subjectEstudiante14" value="<?php echo $parametros['prospectos'][0]['Subject']?>" /></td>
    </tr>
</table>
<br/><br/>
<h2>Estudiante Contact Out After 28 days</h2>
<table>
    <tr>
        <td>Días:</td>
        <td><input type="text" name="diasEstudiante28" value="<?php echo $parametros['prospectos'][1]['dias']?>" /></td>
    </tr>
    <tr>
        <td>Subject:</td>
        <td><input type="text" name="subjectEstudiante28" value="<?php echo $parametros['prospectos'][1]['Subject']?>" /></td>
    </tr>
</table>
<br/><br/>
<h2>Estudiante Contact Out After 42 days</h2>
<table>
    <tr>
        <td>Días:</td>
        <td><input type="text" name="diasEstudiante42" value="<?php echo $parametros['prospectos'][2]['dias']?>" /></td>
    </tr>
    <tr>
        <td>Subject:</td>
        <td><input type="text" name="subjectEstudiante42" value="<?php echo $parametros['prospectos'][2]['Subject']?>" /></td>
    </tr>
</table>

<br/><br/>
<h2>Estudiante Not Attenden</h2>
<table>
<!--    <tr>
        <td>Días:</td>
        <td><input type="text" name="diasEstudianteNotAttenden" value="<?php //echo $parametros['prospectos'][3]['dias']?>" /></td>
    </tr>-->
    <tr>
        <td>Subject:</td>
        <td><input type="text" name="subjectEstudianteNotAttenden" value="<?php echo $parametros['prospectos'][3]['Subject']?>" /></td>
    </tr>
</table>

<br/><br/>
<h2>Estudiante Attenden</h2>
<table>
<!--    <tr>
        <td>Días:</td>
        <td><input type="text" name="diasEstudianteNotAttenden" value="<?php //echo $parametros['prospectos'][3]['dias']?>" /></td>
    </tr>-->
    <tr>
        <td>Subject:</td>
        <td><input type="text" name="subjectEstudianteAttenden" value="<?php echo $parametros['prospectos'][4]['Subject']?>" /></td>
    </tr>
</table>

<br/><br/>
<h2>Aplicación Incomplete 14 days</h2>
<table>
    <tr>
        <td>Días:</td>
        <td><input type="text" name="diasAplicacion14" value="<?php echo $parametros['aplicacion'][0]['dias']?>" /></td>
    </tr>
    <tr>
        <td>Subject:</td>
        <td><input type="text" name="subjectAplicacion14" value="<?php echo $parametros['aplicacion'][0]['Subject']?>" /></td>
    </tr>
</table>

<br/><br/>
<h2>Aplicación Incomplete 35 days</h2>
<table>
    <tr>
        <td>Días:</td>
        <td><input type="text" name="diasAplicacion35" value="<?php echo $parametros['aplicacion'][1]['dias']?>" /></td>
    </tr>
    <tr>
        <td>Subject:</td>
        <td><input type="text" name="subjectAplicacion35" value="<?php echo $parametros['aplicacion'][1]['Subject']?>" /></td>
    </tr>
</table>

<br/><br/>
<h2>Aplicación Incomplete 55 days</h2>
<table>
    <tr>
        <td>Días:</td>
        <td><input type="text" name="diasAplicacion55" value="<?php echo $parametros['aplicacion'][2]['dias']?>" /></td>
    </tr>
    <tr>
        <td>Subject:</td>
        <td><input type="text" name="subjectAplicacion55" value="<?php echo $parametros['aplicacion'][2]['Subject']?>" /></td>
    </tr>
</table>

<br/><br/>
<h2>Conditional Offer</h2>
<table>
    <tr>
        <td>Subject:</td>
        <td><input type="text" name="subjectConditionalOffer" value="<?php echo $parametros['aplicacion'][3]['Subject']?>" /></td>
    </tr>
</table>

<br/><br/>
<h2>Unconditional Offer</h2>
<table>
    <tr>
        <td>Subject:</td>
        <td><input type="text" name="subjectUnconditionalOffer" value="<?php echo $parametros['aplicacion'][4]['Subject']?>" /></td>
    </tr>
</table>

<br/><br/>
<h2>Acceptance Sent</h2>
<table>
    <tr>
        <td>Subject:</td>
        <td><input type="text" name="subjectAcceptanceSent" value="<?php echo $parametros['aplicacion'][5]['Subject']?>" /></td>
    </tr>
</table>

<br/><br/>
<h2>Coe Received</h2>
<table>
    <tr>
        <td>Subject:</td>
        <td><input type="text" name="subjectCoeReceived" value="<?php echo $parametros['aplicacion'][6]['Subject']?>" /></td>
    </tr>
</table>

<br/><br/>
<h2>Visa Sent</h2>
<table>
    <tr>
        <td>Subject:</td>
        <td><input type="text" name="subjectVisaSent" value="<?php echo $parametros['aplicacion'][7]['Subject']?>" /></td>
    </tr>
</table>

<br/><br/>
<h2>Visa Received</h2>
<table>
    <tr>
        <td>Subject:</td>
        <td><input type="text" name="subjectVisaReceived" value="<?php echo $parametros['aplicacion'][8]['Subject']?>" /></td>
    </tr>
</table>
<br/><br/>
<input type="submit" id="boton_cargar" value="Modificar">
</form>

<br/><br/><br/><br/><br/><br/>

<?php
if(isset($_POST['bandera'])){
//    $path="custom/include/cargaCliente/CargaCliente.php";
//    if(file_exists($path)){
//        include_once $path;
//        $encuesta=new CargaCliente();
//        $lista=$encuesta->procesarYGuardar($_FILES['archivo'],$_POST['bandera']);
//        if (count($lista['error'])>0){
//            echo "<ul>";
//            foreach ($lista['error'] as $key =>$value){
//                echo "<li>En la Fila:". $value['fila'] . " se genero el siguiente error ".$value['detalle']."</li>";
//            }
//            echo "</ul>";
//
//
//        }else{
//            echo "El proceso se ejecutó correctamente";
//        }
//
//    }
}
    


//file_put_contents("custom/include/alertas/parametros_1.php", $ddd)
?>
