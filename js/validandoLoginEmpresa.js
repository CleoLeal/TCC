$(document).ready(function() {

    function limpa_formulário_email() {
        $("#senha").val();
    }
    
    //Quando o campo cep perde o foco.
    $("#senha").blur(function() {
    
        //Nova variável eemail.
        var eemail = $("#email").val();
        var ssenha = $(this).val();
        //Verifica se campo cep possui valor informado.
        if (ssenha != "") {
            //Consulta o webservice viacep.com.br/
            $.getJSON("validarLogin.php?email="+ eemail + "&senha=" + ssenha  , function(dados) {
    
                    if (!( dados.erro == true)) {
                        //Verificar se e-mail retornado não tem cadastro
                        
                        let emailCadastrado = dados.existente
                        if (!emailCadastrado) {
                            
                            alert("E-mail e/ou senha estão incorretos");
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
    