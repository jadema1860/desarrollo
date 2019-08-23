$(document).ready(function() {

  
   id=$("#valor ").val();
     $.get('/documentos/'+1,function(data){
    
    $("#documento_id ").empty();
        for (let i = 0; i <data.length; i++) {
            if(+data[i].id==id){
                $("#documento_id ").append("<option value='"+data[i].id+"' selected>"+data[i].documento+"</option>");        
            }else{
                $("#documento_id ").append("<option value='"+data[i].id+"'>"+data[i].documento+"</option>");                
            }           
        }
     });

     id=$("#genero_id_text").val();
     $.get('/genero/'+1,function(data){
    
    $("#genero_id").empty();
        for (let i = 0; i <data.length; i++) {
            if(+data[i].id==id){
                $("#genero_id").append("<option value='"+data[i].id+"' selected>"+data[i].sexo+"</option>");        
            }else{
                $("#genero_id").append("<option value='"+data[i].id+"'>"+data[i].sexo+"</option>");                
            }           
        }
     });
  
});