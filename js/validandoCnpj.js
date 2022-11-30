$(document).ready(function() {

    function limpa_formulário_email() {
        $("#cnpj").val("Informe e-mail válido");
    }
    
    //Quando o campo cep perde o foco.
    $("#cnpj").blur(function() {
    
        //Nova variável eemail.
        var cnpj = $(this).val();
        //Verifica se campo cep possui valor informado.
        if (cnpj != "") {
            //Consulta o webservice viacep.com.br/
            $.getJSON("validarCnpj.php?cnpj="+ cnpj  , function(dados) {
    
    
                    if (!( dados.erro == true)) {
                        //Verificar se e-mail retornado não tem cadastro
                        
                        let emailCadastrado = dados.existente
                        if (!emailCadastrado) {
                            
                            alert("O cnpj está incorreto");
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
    