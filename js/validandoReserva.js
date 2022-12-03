$(document).ready(function() {

    function limpa_formulário_email() {
        $("#hora").val();
    }
    
    //Quando o campo hora perde o foco.
    $("#hora").blur(function() {
    
        //Nova variável data e hora.
        var x = $("#data").val();
        var hora = $(this).val();
        //Verifica se campo hora possui valor informado.
        if (hora != "") {
            //Consulta o arquivo validarReserva.php
            $.getJSON("validarReserva.php?data="+ x + "&hora=" + hora  , function(dados) {
                    if (!( dados.erro == true)) {

                        //Verificar se e-mail retornado não tem cadastro
                        let reserva = dados.existente
                        if (reserva) {
                            alert("Essa reserva não pode ser feita");
                        }
                    } //end if.
                    else {
                        //reserva pesquisado não foi encontrado.
                        limpa_formulário_email();
                        alert("Erro ao consultar reserva.");
                    }
            });
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_email();
        }
    });
    });
    