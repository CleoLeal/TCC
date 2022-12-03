$(document).ready(function() {

    function limpa_formulário_email() {
        $("#confirmar").val();
    }
    
    //Quando o campo confirmar perde o foco.
    $("#confirmar").blur(function() {
        //Nova variável eemail.
        var ssenha = $("#senha").val();
        var cconfirmar = $(this).val();
    
        //Verifica se campo confirmar possui valor informado.
        if (cconfirmar != "") {
    
            //Consulta no arquivo validarSenha.php
            $.getJSON("validarSenha.php?senha="+ ssenha + "&confirmar=" + cconfirmar , function(dados) {
    
    
                    if (!( dados.erro == true)) {
                        //Verificar se as senhas estão iguais
                        
                        let senhas = dados.existente
                        if (!senhas) {
                            
                            alert("Senhas incorretas ");
                        }
                    } //end if.
                    else {
                        //senha pesquisado não foi encontrado.
                        limpa_formulário_email();
                        alert("Erro ao consultar as senhas.");
                    }
            });
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_email();
        }
    });
    });
    