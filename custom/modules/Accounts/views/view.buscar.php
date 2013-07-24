<?php
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");

//require_once('custom/include/scripts/HandleForm.php');

class AccountsViewBuscar extends ViewEdit {

function AccountsViewBuscar(){
        parent::ViewEdit();
}

function process() {
        $this->display();
}

function display(){
    global $db;
    $form=$_REQUEST;
    
    echo '<script>
            $(document).ready(function(){
                $("#example").dataTable( {
                    "sPaginationType": "full_numbers"
                } );
              });
          </script>';
    
    $filtros = '';
    if($form['nombre']!='')
        $filtros .= ' AND a.name LIKE "%'.$form['nombre'].'%"';
    
    if($form['fecha_inicio1']!='' && $form['fecha_inicio2']!='')
        $filtros .= ' AND o.date_closed BETWEEN "'.$form['fecha_inicio1'].'" AND "'.$form['fecha_inicio2'].'"';
    
    if($form['estado_aplicacion']!='' &&  $form['estado_aplicacion']!='null')
        $filtros .= ' AND o.sales_stage = "'.$form['estado_aplicacion'].'"';
    
    if($form['asesor']!='' &&  $form['asesor']!='null')
        $filtros .= ' AND a.assigned_user_id = "'.$form['asesor'].'"';
    
    if($form['nivel_curso']!='' &&  $form['nivel_curso']!='null')
        $filtros .= ' AND o.courselevel = "'.$form['nivel_curso'].'"';
    
    if($form['nombre_curso']!='')
        $filtros .= ' AND o.coursename LIKE "%'.$form['nombre_curso'].'%"';
    
    if($form['destino_estudiante']!='' &&  $form['destino_estudiante']!='null')
        $filtros .= ' AND o.destination = "'.$form['destino_estudiante'].'"';
    
    if($form['ciudad_destino']!='' &&  $form['ciudad_destino']!='null')
        $filtros .= ' AND o.city = "'.$form['ciudad_destino'].'"';
    
    $sql = 'SELECT a.id idestudiante,a.name estudiante, o.name aplicacion, a.status status, a.levelinterest levelinterest, a.areainterest areainterest, 
                   a.groupassociation groupassociation, a.registrationdate registrationdate, a.phone_office phone_office, 
                   CONCAT(u.first_name," ",u.last_name) usuario, a.date_entered date_entered
            FROM accounts a, opportunities o, users u, accounts_opportunities ao
            WHERE a.id=ao.account_id AND o.id=ao.opportunity_id AND a.assigned_user_id=u.id
                  AND ao.deleted=0 AND a.deleted=0 AND o.deleted=0 '.$filtros;
    
    $result=$db->query($sql);
    echo "<table width='80%' border='1' class='display' id='example'>
            <thead>
            <tr>
                <th align='center'><strong>Estudiante</strong></th>
                <th align='center'><strong>Aplicación</strong></th>
                <th align='center'><strong>Estado del Estudiante</strong></th>
                <th align='center'><strong>Dirección correo</strong></th>
                <th align='center'><strong>Nivel de Interes</strong></th>
                <th align='center'><strong>Área de Interes</strong></th>
                <th align='center'><strong>Grupo Asociado</strong></th>
                <th align='center'><strong>Fecha de registro</strong></th>
                <th align='center'><strong>Teléfono</strong></th>
                <th align='center'><strong>Asignado a</strong></th>
                <th align='center'><strong>Fecha creación</strong></th>
            </tr>
            </thead>
            <tbody>";
    while ($row = $db->fetchByAssoc($result)){
        echo "<tr>";
            echo "<td>".$row['estudiante']."</td>";
            echo "<td>".$row['aplicacion']."</td>";
            echo "<td>".$row['status']."</td>";
            $filtrosEmail = '';
            if($form['email']!='')
                $filtrosEmail .= ' AND email_address LIKE "%'.$form['email'].'%" ';
            $sql1 = "SELECT email_address 
                     FROM email_addr_bean_rel br, email_addresses ea
                     WHERE br.email_address_id=ea.id AND bean_module='Accounts' AND br.deleted = 0 AND 
                           ea.deleted=0 AND bean_id='".$row['idestudiante']."'" .$filtrosEmail;
            $result1=$db->query($sql1);
            $correo='';
            while ($row1 = $db->fetchByAssoc($result1))
                $correo = $row1['email_address'];
            echo "<td>".$correo."</td>";
            echo "<td>".$row['levelinterest']."</td>";
            echo "<td>".$row['areainterest']."</td>";
            echo "<td>".$row['groupassociation']."</td>";
            echo "<td>".$row['registrationdate']."</td>";
            echo "<td>".$row['phone_office']."</td>";
            echo "<td>".$row['usuario']."</td>";
            echo "<td>".$row['date_entered']."</td>";
        echo "</tr>";
        
    }
    echo "</tbody></table>";

//            $db = DBManagerFactory::getInstance();

            
                
                
}
                
}
?>