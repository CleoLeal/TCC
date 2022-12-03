$(document).ready(function() {

    function limpa_formulário_email() {
        $("#email").val();
    }
    
    //Quando o campo email perde o foco.
    $("#email").blur(function() {
    
        //Nova variável conta e email.
        var conta = $("#conta").val();
        var eemail = $(this).val();

        //Verifica se campo email possui valor informado.
        if (eemail != "") {
    
            //Consulta o arquivo validarEmail.php
            $.getJSON("validarEmail.php?conta="+ conta + "&email=" + eemail , function(dados) {
   
                    if (!( dados.erro == true)) {

                        //Verificar se e-mail retornado tem cadastro
                        let emailCadastrado = dados.existente
                        if (!emailCadastrado) {
                            alert("Esse Email não existe");
                        }
                    } //end if.
                    else {
                        //email pesquisado não foi encontrado.
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
    