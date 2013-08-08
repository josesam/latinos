<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once("include/Sugar_Smarty.php");
require_once("include/JSON.php");
require_once("data/SugarBean.php");


class SugarHistorico extends SugarBean {
	var $table_name = ' historico ';
	var $id;
        var $module;
        /**
	 * Sole constructor
	 */
	function __construct($id='',$module='') {
		
                parent::SugarBean();
		$this->id=$id;
                $this->module=$module;
                $this->smarty = new Sugar_Smarty();

         }

	function save($cotizacion, $module) {
                global $timedate;
                $ids = array();

		$datos = $_POST;
                
		foreach ($datos as $key => $value) {
			$pos = strpos($key, 'prodf_');
			if ($pos === false || $pos > 0)
				continue;
			$id = str_replace('prodf_', '', $key);
                        if(!empty($datos['idf_' . $id]))
                        $ids[]=$datos['idf_' . $id];
                        $data=array(
                            'id'=>  $datos['idp_' . $id],
                            'archivo'=>  $_FILES['filetxt_' . $id]['name'],
                            'realarchivo'=>  $_FILES['filetxt_' . $id],
                            'oportunidad_id'=>$cotizacion,
                            'nombre_campo'=>'filetxt_' . $id
                        );
                        self::AddUpdate($data);

		}
                
		return $productos;

	}

        function AddUpdate($data=array()){
            
         
          return;

	}
        function delete($ids=array(),$actual=array()){
            if(is_array($actual)){
                $temp=$actual;
                foreach($actual as $key =>$value){

                    if(in_array($value['id'],$ids)){
                        unset($temp[$key]);
                    }
                }
                if(count($temp)){
                    foreach($temp as $key => $data){
                        $query="Update ".$this->table_name." set deleted=1 where id =".$data['id'];
                        $this->db->query($query);
                    }
                }

            }
        }
	/**
	 * Returns all email addresses by parent's GUID
	 * @param string $id Parent's GUID
	 * @param string $module Parent's module
	 * @return array
	 */
	function getHistoricoByGUID($id, $module) {
		$return = array();

                $q = "SELECT date(fecha) fecha,origen,datos FROM ".$this->table_name." det
                        where  parent_id='$id'
                        order by det.id ";
//                $q = "SELECT id,date(fecha) fecha,origen,datos FROM ".$this->table_name." det
//                        order by det.id ";
		$r = $this->db->query($q);
		while($a = $this->db->fetchByAssoc($r)) {
			$return[] = $a;
		}

		return $return;
	}


	/**
	 * Returns the HTML/JS for the EmailAddress widget
	 * @param string $parent_id ID of parent bean, generally $focus
	 * @param string $module $focus' module
	 * @param bool asMetadata Default false
	 * @return string HTML/JS for widget
	 */
	function getHistoricoWidgetEditView($id, $module) {
		global $app_strings;
                $prefillDataArr = array();
		if(!empty($id))
			$prefillDataArr = $this->getHistoricoByGUID ($id, $module);


                $assign=array();
                foreach($prefillDataArr as $key => $ambientes) {
			$assign[] = array('id' => $key,
		           		  'fecha' =>$ambientes['fecha'],
			        	  'origen'=>$ambientes['origen'],
                                          'datos'=>$ambientes['datos'],
                                          


			);
		}
                $this->smarty->assign('datos', json_encode($assign));
                $template = empty($tpl) ? "custom/include/SugarHistorico/templates/EditView.html" : $tpl;
		$newEmail = $this->smarty->fetch($template);

		return $newEmail;
	}


	function getHistoricoWidgetDetailView($focus, $tpl='') {
		global $app_strings;
		
                if(empty($focus->id))return '';
                    $prefillData = $this->getHistoricoByGUID($focus->id, $focus->module_dir);

                foreach($prefillData as $key => $ambientes) {
			$assign[] = array(
                                          'id'=>$ambientes['id'],
		           		  'fecha' =>$ambientes['fecha'],
			        	  'origen'=>$ambientes['origen'],
                                          'datos'=>$ambientes['datos']
                                          


			);
		}
                
                $this->smarty->assign('datos', json_encode($assign));
                

		$templateFile = empty($tpl) ? "custom/include/SugarHistorico/templates/DetailView.html" : $tpl;
		$return = $this->smarty->fetch($templateFile);
		return $return;
	}

    function setView($view) {
	   $this->view = $view;
	}


} // end class def
/**
 * Convenience function for MVC (Mystique)
 * @param object $focus SugarBean
 * @param string $field unused
 * @param string $value unused
 * @param string $view DetailView or EditView
 * @return string
 */
function getHistoricoWidget($focus, $field, $value, $view) {
	$sea = new SugarHistorico();
	$sea->setView($view);
	if($view == 'EditView' || $view == 'QuickCreate') {
			return $sea->getHistoricoWidgetEditView($focus->id, $focus->module_dir,$focus->convertida, false);
	}
	return $sea->getHistoricoWidgetDetailView($focus);
}

?>
