$(document).ready(function() {

    function limpa_formulário_email() {
        $("#hora").val();
    }
    
    //Quando o campo cep perde o foco.
    $("#hora").blur(function() {
    
        //Nova variável eemail.
        var x = $("#data").val();
        var hora = $(this).val();
        //Verifica se campo cep possui valor informado.
        if (hora != "") {
            
            //Consulta o webservice viacep.com.br/
            $.getJSON("validarReserva.php?data="+ x + "&hora=" + hora  , function(dados) {
                    if (!( dados.erro == true)) {
                        //Verificar se e-mail retornado não tem cadastro
                        
                        let reserva = dados.existente
                        console.log(x);
                        console.log(hora);
                        if (reserva) {
                            alert("Essa reserva não pode ser feita");
                        }
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_email();
                        alert("Erro ao consultar e-mail.");
                    }
            });
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_email();
        }
    });
    });
    