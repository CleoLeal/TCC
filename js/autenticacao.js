//variáveis
var email = '';
var senha = '';

//função
function validarCliente()
{
    //pegando o valor dos inputs e colocando o valor dentro de uma variável
    email=document.getElementById('emailCliente').value;
    senha=document.getElementById('senhaCliente').value;

    //fiz condições de email e senha que não existem, só para testar. como ainda não usamos bando de dados, fica complicado.
    if(email=='cliente@gmail.com' && senha=='tnr2022')
    {
        //abre a home cliente
        window.location="./../Tcc-homeusuario/home.html";
    }
    else if(email=='' || senha=='')
    {
        //abre um alerta
        alert("Está faltando Email ou Senha");
    }
    else if((email!='cliente@gmail.com' && senha=='tnr2022') || (email=='cliente@gmail.com' && senha!='tnr2022') || (email!='cliente@gmail.com' && senha!='tnr2022'))
    {
         //abre um alerta
        alert("O Email ou Senha está errado");
    }
    
}

//funcao
function validarEmpresa()
{
    //pegando o valor dos inputs e colocando o valor dentro de uma variável
    email=document.getElementById('emailEmpresa').value;
    senha=document.getElementById('senhaEmpresa').value;

    //fiz condições de email e senha que não existem, só para testar. como ainda não usamos bando de dados, fica complicado.
    if(email=='toquenarede@gmail.com' && senha=='tnr2022')
    {
        //abre a home empresa
        window.location="./../Tcc-homeusuario/home_empresa.html";
    }
    else if(email=='' || senha=='')
    {
        //abre um alerta
        alert("Está faltando Email ou Senha");
    }
    else if((email!='toquenarede@gmail.com' && senha=='tnr2022') || (email=='toquenarede@gmail.com' && senha!='tnr2022') || (email!='toquenarede@gmail.com' && senha!='tnr2022'))
    {
        //abre um alerta
        alert("O Email ou Senha está errado");
    }
    
}