$(document).ready(function() {
  
   id_doc=$("#documento_id_text").val();
      
   $.get('/documentos/'+1,function(data){
    //console.log(data);
     $("#documento_id").empty();
        for (let i = 0; i <data.length; i++) {
            if(data[i].id==id_doc){
                $("#documento_id ").append("<option value='"+data[i].id+"' selected>"+data[i].documento+"</option>");        
            }else{
                $("#documento_id ").append("<option value='"+data[i].id+"'>"+data[i].documento+"</option>");                
            }       
        }
   });


     id=$("#genero_id_text").val();
     $.get('/genero/'+1,function(datag){
    
    $("#genero_id").empty();
        for (let i = 0; i <datag.length; i++) {
            if(datag[i].id==id){
                $("#genero_id").append("<option value='"+datag[i].id+"' selected>"+datag[i].sexo+"</option>");        
            }else{
                $("#genero_id").append("<option value='"+datag[i].id+"'>"+datag[i].sexo+"</option>");                
            }           
        }
     });
  
});