<?php
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");

//require_once('custom/include/scripts/HandleForm.php');

class AccountsViewMostrararchivo extends ViewEdit {

function AccountsViewMostrararchivo(){
        parent::ViewEdit();
}

function process() {
        $this->display();
}

function display(){
    echo '<script src="custom/include/scripts/genericas/varios/jquery.media.js" type="text/javascript"></script>';
    echo "<script>
            $(document).ready(function(){
                $('a.media').media({width:1000, height:600});
            });
          </script>";
    echo '<a class="media" href="http://localhost/latinosfinal/'.$_REQUEST['archivolink'].'">Visualización de archivo</a>';
}
                
}
?>