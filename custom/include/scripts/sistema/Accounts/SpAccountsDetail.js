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
    jQuery("#reagendar").bind('click',function(e){
        e.preventDefault();
        reagendar();
    });
    jQuery("#contactin").bind('click',function(e){
        e.preventDefault();
        contactin();
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
                            title: 'Verificador de Proceso',
                            width: 800
                            });

                var urllista = "index.php?module=Accounts&action=proceso";
                
                jQuery("#procesos_div").text("procesando...");
                jQuery("#procesos_div").load(urllista,data, function(response, status, xhr){
                    if(status==="success"){
                        jQuery("#procesos_div").html(response);
                    }else
                        return false;
                });
        return false;
 
 return false;

};

reagendar=function(){
    
    var data={
        parent_id:jQuery("#parent_id").val(),
        status:jQuery("#estadoprospecto").val()        
    };
              jQuery("#reagendar_dlg").dialog({
                            closeOnEscape: true,
                            height: 500 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Reagenda Cita',
                            width: 800
                            });

                var urllista = "index.php?module=Accounts&action=reagendar";
                
                jQuery("#reagendar_div").text("reagendando...");
                jQuery("#reagendar_div").load(urllista,data, function(response, status, xhr){
                    if(status==="success"){
                        jQuery("#reagendar_div").html(response);
                    }else
                        return false;
                });
        return false;
 
 return false;

};


contactin=function(){
    
    var data={
        parent_id:jQuery("#parent_id").val(),
        status:jQuery("#estadoprospecto").val()        
    };
              jQuery("#reagendar_dlg").dialog({
                            closeOnEscape: true,
                            height: 500 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Contact in',
                            width: 800
                            });

                var urllista = "index.php?module=Accounts&action=contactin";
                
                jQuery("#reagendar_div").text("cambiando estado...");
                jQuery("#reagendar_div").load(urllista,data, function(response, status, xhr){
                    if(status==="success"){
                        jQuery("#reagendar_div").html(response);
                    }else
                        return false;
                });
        return false;
 
 return false;

};

