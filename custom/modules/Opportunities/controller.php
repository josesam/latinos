<?php
/**
 *Verifica la informacion , requerida y el numero de cedula
 * @author Jose Sambrano
 */
class OpportunitiesController extends SugarController
{
     
    function action_Controletapas(){
        $this->view = 'controletapas';
    }
    
    function action_Procesosabiertos(){
        $this->view = 'procesosabiertos';
    }
    
    function action_Cerraraplicacion(){
        $this->view = 'cerraraplicacion';
    }
    
    function action_Buscarinstitucion(){
        $this->view = 'buscarinstitucion';
    }
    
    function action_Resultadobuscarinstitucion(){
        $this->view = 'resultadobuscarinstitucion';
    }
}
?>