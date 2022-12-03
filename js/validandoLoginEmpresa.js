$(document).ready(function() {

    function limpa_formulário_email() {
        $("#senha").val();
    }
    
    //Quando o campo senha perde o foco.
    $("#senha").blur(function() {
    
        //Nova variável eemail e ssenha.
        var eemail = $("#email").val();
        var ssenha = $(this).val();

        //Verifica se campo senha possui valor informado.
        if (ssenha != "") {
            //Consulta no arquivo validarLogin.php
            $.getJSON("validarLogin.php?email="+ eemail + "&senha=" + ssenha  , function(dados) {
    
                    if (!( dados.erro == true)) {
                        //Verificar se as informações retornadas tem cadastro
                        
                        let cadastro = dados.existente
                        if (!cadastro) {
                            
                            alert("E-mail e/ou senha estão incorretos");
                        }
                    } //end if.
                    else {
                        //informações pesquisadas não foram encontrado.
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
    