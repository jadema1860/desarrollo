
$(document).ready(function() {
    
    var f = new Date();
   
   var fechaNacimiento = f.getFullYear()+"-"+"08" + "-" + f.getDate() ;
  
  //  $('#fechaNacimiento').value(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear()); 
  $('#fechaNacimiento').val(fechaNacimiento);
    id=$("#depaNacimiento_id ").val();
    $.get('/municipios/'+id,function(data){
    //console.log(data.length);     
    $("#munNacimiento_id ").empty();
        for (let i = 0; i <data.length; i++) {                
            $("#munNacimiento_id ").append("<option value='"+data[i].id+"'>"+data[i].municipio+"</option>");                
        }
     });
  
    $("#depaNacimiento_id ").change(function(event){ 
        id=$("#depaNacimiento_id ").val();
        $.get('/municipios/'+id,function(data){
        //console.log(data.length);     
        $("#munNacimiento_id").empty();
            for (let i = 0; i <data.length; i++) {                
                $("#munNacimiento_id").append("<option value='"+data[i].id+"'>"+data[i].municipio+"</option>");                
            }
         });
    });

   /* $("#departamento2_id").change(function(event){ 
        id=$("#departamento2_id").val();
        $.get('/municipios/'+id,function(data){
        //console.log(data.length);     
        $("#municipio2_id").empty();
            for (let i = 0; i <data.length; i++) {                
                $("#municipio2_id").append("<option value='"+data[i].id+"'>"+data[i].municipio+"</option>");                
            }
         });
    });*/
});

