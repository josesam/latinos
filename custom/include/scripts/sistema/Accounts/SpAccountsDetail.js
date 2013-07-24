/*
 * @author Jose Sambrano
 */

jQuery("#paisinteres_div").on('click', 'a', function(e) {
                e.preventDefault();
                
            });
jQuery("#lb_paisinteres").on('click', 'a', function(e) {
                e.preventDefault();
                
            });            
           
jQuery(document).ready(function() {
     
    
    jQuery("#proceso").bind('click',function(e){
        e.preventDefault();
        abrir_procesos();
    });  
});


abrir_procesos=function(){
    
    var data={
        parent_id:jQuery("#parent_id").val()
    };
              jQuery("#proceso_dlg").dialog({
                            closeOnEscape: true,
                            height: 500 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Verificador de Informacion',
                            width: 800
                            });

                var urllista = "index.php?module=Accounts&action=proceso";
                
                jQuery("#procesos_div").text("verificando informacion...");
                jQuery("#procesos_div").load(urllista,data, function(response, status, xhr){
                    if(status==="success"){
                        jQuery("#procesos_div").html(response);
                    }else
                        return false;
                });
        return false;
 
 return false;

};



