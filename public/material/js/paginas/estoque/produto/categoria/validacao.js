function validarformulario(){


    var   categoria=  document.getElementById("categoria").value;
    if(categoria==''){
        $('#categoria-error').html('* Categoria deve ser informado');
        setInterval(function(){
            $('#categoria-error').html('');
        }, 10000);
        return;
        }else{
            $('#categoria-error').html('');

        }



    var   und_medida=  document.getElementById("und_medida").value;
    if(und_medida==''){
        $('#und_medida-error').html('* O Tipo de Medida deve ser informado');
        setInterval(function(){
            $('#und_medida-error').html('');
        }, 10000);
        return;
        }else{
            $('#und_medida-error').html('');

        }

    var   produto=  document.getElementById("produto").value;
    var produto = produto.trim();
    if(produto==''){
        $('#produto-error').html('* O Produto deve ser informado');
        setInterval(function(){
            $('#produto-error').html('');
          }, 10000);
          return;
        }else{
            $('#produto-error').html('');

        }

        document.getElementById('Cadastrar').submit();

}
