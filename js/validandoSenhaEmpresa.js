$(document).ready(function() {

    function limpa_formulário_email() {
        $("#confirmar").val();
    }
    
    //Quando o campo cep perde o foco.
    $("#confirmar").blur(function() {
        //Nova variável eemail.
        var ssenha = $("#senha").val();
        var cconfirmar = $(this).val();
    
        //Verifica se campo cep possui valor informado.
        if (cconfirmar != "") {
    
            //Consulta o webservice viacep.com.br/
            $.getJSON("validarSenha.php?senha="+ ssenha + "&confirmar=" + cconfirmar , function(dados) {
    
    
                    if (!( dados.erro == true)) {
                        //Verificar se e-mail retornado não tem cadastro
                        
                        let senhas = dados.existente
                        if (!senhas) {
                            
                            alert("Senhas incorretas ");
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
    