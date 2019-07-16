$(obtener_registros());

function obtener_registros(asistencia1)
{
    $.ajax({
        url : '../includes/consulta.php',
        type : 'POST',
        datatype : 'html',
        data : { asistencia1 : asistencia1 },
    })
    
    .done(function(resultado){
          
          $("#tabla_resultado").html(resultado);
          })
}

$(document).on('keyup', '#busqueda', function()
{
               var
               valorBusqueda=$(this).val();
    if  (valorBusqueda!="")
{
    obtener_registros(valorBusqueda);
    
}
else{
    obtener_registros();
}
                 });