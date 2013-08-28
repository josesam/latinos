<?php
if(isset($_POST['bandera'])){
$texto = "
<?php return array(   
         'prospectos'=> 
          array( 
              '0'=>array( 
                  'tipo'=>'14_dias_despues',
                  'dias'=>".$_POST['diasEstudiante14'].",       
                  'plantilla'=>'14_dias_despues', 
                  'Subject'=>'".$_POST['subjectEstudiante14']."', 
                  'default'=>'andres.garcia@greenfieldcrm.com'
                  ),
              '1'=>array( 
                  'tipo'=>'28_dias_despues',
                  'dias'=>".$_POST['diasEstudiante28'].",       
                  'plantilla'=>'28_dias_despues', 
                  'Subject'=>'".$_POST['subjectEstudiante28']."', 
                  'default'=>'andres.garcia@greenfieldcrm.com'
                  ),
              '2'=>array( 
                  'tipo'=>'42_dias_despues',
                  'dias'=>".$_POST['diasEstudiante42'].",       
                  'plantilla'=>'42_dias_despues', 
                  'Subject'=>'".$_POST['subjectEstudiante42']."', 
                  'default'=>'andres.garcia@greenfieldcrm.com'
                  ),
              '3'=>array( 
                  'tipo'=>'not_attended',
                  'dias'=>0,       
                  'plantilla'=>'not_attended', 
                  'Subject'=>'".$_POST['subjectEstudianteNotAttenden']."', 
                  'default'=>'andres.garcia@greenfieldcrm.com'
                  ),
              '4'=>array( 
                  'tipo'=>'attended',
                  'dias'=>0,       
                  'plantilla'=>'".$_POST['subjectEstudianteAttenden']."', 
                  'Subject'=>'Interview attended', 
                  ),
              ), 
    
    'aplicacion'=>
        array( 
            '0'=>array( 
                  'tipo'=>'14_dias_incomplete',
                  'dias'=>".$_POST['diasAplicacion14'].",       
                  'plantilla'=>'14_dias_incomplete', 
                  'Subject'=>'".$_POST['subjectAplicacion14']."', 
                  'default'=>'andres.garcia@greenfieldcrm.com'
                  ),
            '1'=>array(    
                'tipo'=>'35_dias_incomplete',
                  'dias'=>".$_POST['diasAplicacion35'].",       
                  'plantilla'=>'35_dias_incomplete', 
                  'Subject'=>'".$_POST['subjectAplicacion35']."', 
                  'default'=>'andres.garcia@greenfieldcrm.com'
                ), 
            '2'=>array( 
                'tipo'=>'55_dias_incomplete',
                  'dias'=>".$_POST['diasAplicacion55'].",       
                  'plantilla'=>'55_dias_incomplete', 
                  'Subject'=>'".$_POST['subjectAplicacion55']."', 
                  'default'=>'andres.garcia@greenfieldcrm.com'
                ), 
            '3'=>array( 
                'tipo'=>'conditional_offer',
                  'dias'=>0,       
                  'plantilla'=>'conditional_offer', 
                  'Subject'=>'".$_POST['subjectConditionalOffer']."', 
                  'default'=>'andres.garcia@greenfieldcrm.com'
                ), 
            '4'=>array( 
                'tipo'=>'unconditional_offer',
                  'dias'=>0,       
                  'plantilla'=>'unconditional_offer', 
                  'Subject'=>'".$_POST['subjectUnconditionalOffer']."', 
                  'default'=>'andres.garcia@greenfieldcrm.com'
                ), 
            '5'=>array( 
                'tipo'=>'acceptance_sent',
                  'dias'=>0,       
                  'plantilla'=>'acceptance_sent', 
                  'Subject'=>'".$_POST['subjectAcceptanceSent']."', 
                  'default'=>'andres.garcia@greenfieldcrm.com'
                ), 
            '6'=>array( 
                'tipo'=>'coe_received',
                  'dias'=>0,       
                  'plantilla'=>'coe_received', 
                  'Subject'=>'".$_POST['subjectCoeReceived']."', 
                  'default'=>'andres.garcia@greenfieldcrm.com'
                ), 
            '7'=>array( 
                'tipo'=>'visa_sent',
                  'dias'=>0,       
                  'plantilla'=>'visa_sent', 
                  'Subject'=>'".$_POST['subjectVisaSent']."', 
                  'default'=>'andres.garcia@greenfieldcrm.com'
                ), 
            '8'=>array( 
                'tipo'=>'visa_received',
                  'dias'=>0,       
                  'plantilla'=>'visa_received', 
                  'Subject'=>'".$_POST['subjectVisaReceived']."', 
                  'default'=>'andres.garcia@greenfieldcrm.com'
                ), 
            ),
    
    );
?>
    ";

file_put_contents("custom/include/alertas/parametros.php", $texto);

}
    


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
