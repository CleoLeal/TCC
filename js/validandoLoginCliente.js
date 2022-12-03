$(document).ready(function() {

    function limpa_formulário_email() {
        $("#senha").val();
    }
    
    //Quando o campo senha perde o foco.
    $("#senha").blur(function() {
    
        //Nova variável senha.
        var eemail = $("#usuario").val();
        var ssenha = $(this).val();
        //Verifica se campo senha possui valor informado.
        if (ssenha != "") {
    
            //Consulta no arquivo validarLogin.php
            $.getJSON("validarLogin.php?email="+ eemail + "&senha=" + ssenha , function(dados) {
    
                    if (!( dados.erro == true)) {

                        //Verificar se o email e senha retornam tem cadastro
                        let cadastro = dados.existente
                        if (!cadastro) {
                            
                            alert("Email e/ou Senha incorretos");
                        }
                    } //end if.
                    else {
                        //email e senha pesquisado não foi encontrado.
                        limpa_formulário_email();
                        alert("Erro ao consultar cadastro.");
                    }
            });
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_email();
        }
    });
    });
    