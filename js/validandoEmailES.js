$(document).ready(function() {

    function limpa_formulário_email() {
        $("#email").val();
    }
    
    //Quando o campo cep perde o foco.
    $("#email").blur(function() {
    
        //Nova variável eemail.
        var conta = $("#conta").val();
        var eemail = $(this).val();
        //Verifica se campo cep possui valor informado.
        if (eemail != "") {
    
            //Consulta o webservice viacep.com.br/
            $.getJSON("validarEmail.php?conta="+ conta + "&email=" + eemail , function(dados) {
   
                    if (!( dados.erro == true)) {
                        //Verificar se e-mail retornado não tem cadastro
                        
                        let emailCadastrado = dados.existente
                        if (!emailCadastrado) {
                            console.log("1");
                            alert("Esse Email não existe");
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
    