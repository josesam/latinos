<?php

/*
 * Controlador de vistas
 * @author josesambrano
 */
class AccountsController extends SugarController{
    
    public function action_Paisinteres(){
        $this->view='paisinteres';
    }
     public function action_Proceso(){
        $this->view='proceso';
    }
    
    public function action_Verificainfo(){
        $this->view='verificainfo';
    }
    public function action_Buscar(){
        $this->view='buscar';
    }
    
    public function action_Mostrararchivo(){
        $this->view='mostrararchivo';
    }
    public function action_reagendar(){
        $this->view='reagendar';
    }
    public function action_contactin(){
        $this->view='contactin';
    }
    
}
?>

