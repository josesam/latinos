<?php
if (!defined('sugarEntry'))define('sugarEntry', true);
require_once('include/entryPoint.php');
ob_start();
require_once('include/MVC/SugarApplication.php');
?>
<?php
if(isset($_POST['bandera'])){
    global $db;
    include 'custom/include/alertas/Alertas.php';
    include_once 'custom/include/alertas/GeneradorPlantilla.php';
    
    $generador=new GeneradorPlantilla();
    $alertas = new Alertas();
    
    $alerta_id = $_POST['alerta'];
    if(count($alerta_id)>0){
        for($i=0;$i<count($alerta_id);$i++){
            $query="SELECT * FROM alertas WHERE id='".$alerta_id[$i]."'";
            $result=$db->query($query);
            $rowAlerta = $db->fetchByAssoc($result);
            $alertas->setParentId($rowAlerta['id_registro']);
            $alertas->setParenttype($rowAlerta['modulo']);
            $alertas->setEmail($rowAlerta['email']);
            $alertas->sendMail($rowAlerta['subject'],$rowAlerta['plantilla_mail']);
            
            $queryAlumno="UPDATE alertas SET enviado='si' WHERE id=".$alerta_id[$i];
            $resultAlumno=$db->query($queryAlumno);
        }
        $mensaje='<h1>Alertas enviadas exitosamente</h1><p></p><p></p>';
    }
    
            
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

<script type="text/javascript" src="custom/include/scripts/genericas/varios/jquery.dataTables.js"></script>
<script type="text/javascript" src="custom/include/scripts/sistema/SpOportunidad.js"></script>
<script type="text/javascript" src="custom/include/scripts/sistema/SpReporte.js"></script>


<link rel="stylesheet" type="text/css" href="custom/include/scripts/demo_page.css" />
<link rel="stylesheet" type="text/css" href="custom/include/scripts/demo_table.css" />
<script>
$(document).ready(function(){
    $("#example").dataTable( {
        "sPaginationType": "full_numbers"
    } );
});
function toggleChecked(status) {
    $(".checkbox").each( function() {
    $(this).attr("checked",status);
    });
}
</script>

<h1>Funcionalidad de envio de alertas</h1>
<form id="cargaclientes" name="cargaclientes" method="post" enctype="multipart/form-data">
<input type="hidden"  name="module" id="module" value="Accounts">
<input type="hidden"  name="action" id="action" value="alertas">
<input type="hidden"  name="return_action" id="return_action" value="alertas">
<input type="hidden"  name="bandera" id="bandera" value="estudiante">
<table width='80%' border='1' class='display' id='example'>
    <thead>
        <tr>
            <th><input type='checkbox' onclick='toggleChecked(this.checked)'></th>
            <th align='center'><strong>Módulo</strong></th>
            <th align='center'><strong>Estudiante</strong></th>
            <th align='center'><strong>Tipo de alerta</strong></th>
        </tr>
    </thead>
    <?php
    global $db;
    global $current_user;
    $user_id=$current_user->id;
    $query="
                    SELECT * 
                    FROM alertas
                    WHERE enviado='no' AND usuario='".$user_id."'
                ";
    $result=$db->query($query);
    ?>
    <tbody>
        <?php
        while ($row = $db->fetchByAssoc($result)){
            echo "<tr>";
                echo '<td><input type="checkbox" class="checkbox" name="alerta[]" value="'.$row['id'].'" /></td>';
                echo '<td>'.$row['modulo'].'</td>';
                if($row['modulo']=='Estudiantes'){
                    $query1="SELECT name FROM accounts WHERE id='".$row['id_registro']."'";
                    $result1=$db->query($query1);
                    $row1 = $db->fetchByAssoc($result1);
                    echo '<td>'.$row1['name'].'</td>';
                }

                if($row['modulo']=='Aplicaciones'){
                    $query1="SELECT a.name name 
                             FROM accounts a, accounts_opportunities ao, opportunities o 
                             WHERE o.id='".$row['id_registro']."' AND a.id=ao.account_id AND o.id=ao.opportunity_id AND ao.deleted=0";
                    $result1=$db->query($query1);
                    $row1 = $db->fetchByAssoc($result1);
                    echo '<td>'.$row1['name'].'</td>';
                }
                
                echo '<td>'.$row['tipo_alerta'].'</td>';
            echo "</tr>";
        }   
        ?>
    </tbody>
</table>

<div style="text-align:center;">
    <input type="submit" value="Enviar Alertas" />
</div>
</form>
<?php
echo $mensaje;
?>