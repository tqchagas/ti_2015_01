$(function(){
     
    $("select[name=estado_id]").change(function(){
 
        estado = $(this).val();
         
        if ( estado === '')
            return false;

        resetaCombo('cidade_id');
             
        $.getJSON( path + '/pessoa/listar_cidades/' + estado, function (data){
 
            var option = new Array();
 
            $.each(data, function(i, obj){
                option[i] = document.createElement('option');
                $( option[i] ).attr( {value : obj.id} );
                $( option[i] ).append( obj.descricao );
 
                $("select[name='cidade_id']").append( option[i] );
         
            });
     
        });
     
    });
 
});

function resetaCombo( el ) {
   $("select[name='"+el+"']").empty();
   var option = document.createElement('option');                                  
   $( option ).attr( {value : ''} );
   $( option ).append( 'Escolha' );
   $("select[name='"+el+"']").append( option );
}