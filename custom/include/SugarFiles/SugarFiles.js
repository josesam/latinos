/*
 *
 * @author Jose Sambrano
 */
        jQuery("#OpportunitiesAmbienteTableF").on('click', 'a', function(e) {
                e.preventDefault();
                
            });

        
        var filaf=0;

        this.hacerFilaf = function(id, celdas){
		html = "<tr id="+id+">";
		for(var i=0;i<celdas.length;i++)
			html += "<td>"+celdas[i]+"</td>";
		html += "</tr>";
		return html;
	};
        this.limpiarProductosf = function(){
		jQuery('tr[id^=prod_row_]').remove();
	};

        

         addFile=function(tableId){

             var el = document.getElementById("prod_rowf_"+filaf);
             if(el) return
             
             if (tableId==='')
                    return;
             
              

		id_control = "<input type='hidden' name='prodf_"+filaf+"' id='prodf_"+filaf+"' value='"+filaf+"' />";
                
                
                tipo_archivo = "<select name='tipo_archivo_"+filaf+"' id='tipo_archivo_"+filaf+"'>";
                    tipo_archivo += "<option value=''></option>";
                    tipo_archivo += "<option value='Application Sent'>Application Sent</option>";
                    tipo_archivo += "<option value='Application Unsuccessful'>Application Unsuccessful</option>";
                    tipo_archivo += "<option value='Conditional Offer'>Conditional Offer</option>";
                    tipo_archivo += "<option value='Unconditional Offer'>Unconditional Offer</option>";
                    tipo_archivo += "<option value='Acceptance Sent'>Acceptance Sent</option>";
                    tipo_archivo += "<option value='COE Received'>COE Received</option>";
                    tipo_archivo += "<option value='Visa Denied'>Visa Denied</option>";
                    tipo_archivo += "<option value='Visa Received'>Visa Received</option>";
                    tipo_archivo += "<option value='Student Documents'>Student Documents</option>";
                    tipo_archivo += "<option value='University Documents'>University Documents</option>";
                tipo_archivo += "</select>"
                    
                    
                
                filetxt = "<input type='file' readonly='true' name='filetxt_"+filaf+"' id='filetxt_"+filaf+"' value='' size='25' />";
		
           
                remove_control = "<a href='javascript:void(0);' onclick='borrarf(\""+filaf+"\");'>X</a>";
                
                
                

             celdas=[
                 tipo_archivo,filetxt,remove_control,id_control
             ];
            row = this.hacerFilaf('prod_rowf_'+filaf, celdas);
	    jQuery('#'+tableId).append(row);
            filaf++;
            
   
        };

   
   borrarf=function (filaf){
       jQuery("#prod_rowf_"+filaf).remove();
       
      
   };
  
