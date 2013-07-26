<?php
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class OpportunitiesViewResultadobuscarinstitucion extends ViewEdit {

 	function OpportunitiesViewResultadobuscarinstitucion(){
 		parent::ViewEdit();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){
            global $db;
            $filtroBusqueda = $_REQUEST['filtro'];
            $filtro='';
            if($filtroBusqueda ==! '')
                    $filtro = " and (c.valor like '%$filtroBusqueda%' or p.valor like '%$filtroBusqueda%') " ;
            
            $sql="SELECT i.valor as institucion ,c.id idciudad,c.valor ciudad , p.id idpais,p.valor as pais
                  FROM 
                  CATALOGO i left join CATALOGO c on i.padre_id=c.id
                  left join CATALOGO p on p.id=c.padre_id
                  where (p.clase='paisinteres' or c.clase='ciudadinteres' or p.clase='institucion') $filtro
                  order by ciudad, pais limit 0,20";
            $result =$db->query($sql);
            
            echo '
                <table width="100%">
                <tr>
                    <td align="center"><strong>País</strong></td>
                    <td align="center"><strong>Ciudad</strong></td>
                    <td align="center"><strong>Institución</strong></td>
                </tr>';
            while ($a=$db->fetchByAssoc($result)){
                echo "<tr>
                        <td>".$a["pais"]."</td>
                        <td>".$a["ciudad"]."</td>
                        <td><a href='javascript:void(0)' onclick='cargarInstitucion(\"$a[pais]\",\"$a[ciudad]\",\"$a[institucion]\")'>".$a['institucion']."</a></td>
                    </tr>";
            }
            echo '</table>';


 	}
}
?>
