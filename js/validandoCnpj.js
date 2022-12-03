$(document).ready(function() {

    function limpa_formulário_email() {
        $("#cnpj").val("Informe e-mail válido");
    }
    
    //Quando o campo cnpj perde o foco.
    $("#cnpj").blur(function() {
    
        //Nova variável cnpj.
        var cnpj = $(this).val();
        //Verifica se campo cnpj possui valor informado.
        if (cnpj != "") {
            //Consulta o arquivo validarCnpj.php
            $.getJSON("validarCnpj.php?cnpj="+ cnpj  , function(dados) {

                    if (!( dados.erro == true)) {
                        //Verificar se cnpj retornado não tem cadastro
                        
                        let cnpjj = dados.existente
                        if (!cnpjj) {
                            
                            alert("O cnpj está incorreto");
                        }
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_email();
                        alert("Erro ao consultar o CNPJ.");
                    }
            });
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_email();
        }
    });
    });
    