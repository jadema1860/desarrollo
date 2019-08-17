
$(document).ready(function() {
   $("#departamento_id").change(function(event){ 
    
    id=$("#departamento_id").val();
    
     $.get('http://localhost:8000/municipios/'+id,function(data){
        console.log(data.length);
       // var content = JSON.parse(data);
      //  console.log(data[0].municipio);
     
             $("#municipio_id").empty();
         for (let i = 0; i <data.length; i++) {
            
            $("#municipio_id").append("<option>"+data[i].municipio+"</option>");
             
         }
     });

});

});

