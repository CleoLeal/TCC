var email = '';
var senha = '';
function validar()
{
    email=document.getElementById('emailEmpresa').value;
    senha=document.getElementById('senhaEmpresa').value;

    if(email=='toquenarede@gmail.com' && senha=='tnr2022')
    {
        window.location="./../Tcc-homeusuario/home_empresa.html";
    }
    else if(email=='' || senha=='')
    {
        alert("Está faltando Email ou Senha");
    }
    else if((email!='toquenarede@gmail.com' && senha=='tnr2022') || (email=='toquenarede@gmail.com' && senha!='tnr2022') || (email!='toquenarede@gmail.com' && senha!='tnr2022'))
    {
        alert("O Email ou Senha está errado");
    }
    
}