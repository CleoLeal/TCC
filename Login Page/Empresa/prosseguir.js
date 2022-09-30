const form = document.getElementById("form");
let razao = document.getElementById("razaoSocial")
let fantasia = document.getElementById("fantasia")
let email = document.getElementById("email")
let tel = document.getElementById("telefone")
form.addEventListener("submit", (e) =>{
    e.preventDefault();
})
function prosseguir1()
{
    window.location("criarContarEmpresa2.html")
}