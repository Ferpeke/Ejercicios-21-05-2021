$(document).ready(function(){

  $('#btn_numero_aleatorios').click(function(){

    $('#imprime_numeros').html('');
    $.ajax({

      type : 'POST',
      url : './control/Genera_números_aleatorios.php',
      data : '',
      success : respuesta => {

        respuesta = JSON.parse(respuesta);
        console.log(respuesta)
        // $.each(respuesta, function(index, item){
        //   $('#imprime_numeros').html($('#imprime_numeros').html()+`
            // <tr>
            //   <th scope="row">${index + 1}</th>
            //   <td>${item}</td>
            
            // </tr>
        //   `);
        // });
        
        respuesta.forEach(
          function(valor, indice) {
          $('#imprime_numeros').html($('#imprime_numeros').html() +`
            
            <tr>
              <td scope="row">${indice + 1}</td>
              <td>${valor}</td>
            
            </tr> 
          
          `);
        })
        
      }
    });


  });



});
