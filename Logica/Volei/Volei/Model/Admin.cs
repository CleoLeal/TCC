using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Volei
{
    internal class Admin
    {
        //atributos
        private string nome;
        private string email;
        private string senha;

        //construtores
        public Admin()
        {
            nome = "";
            email = "";
            senha = "";
        }
        public Admin(string nm, string em, string snh)
        {
            this.nome = nm;
            this.email = em;
            this.senha = snh;
        }

        //get e set
        public string getNome()
        {
            return nome;
        }
        public void getNome(string nm)
        {
            this.nome = nm;
        }
        public string getEmail()
        {
            return email;
        }
        public void getEmail(string em)
        {
            this.email = em;
        }
        public void setEmail(string nm)
        {
            this.email = nm;
        }
        public string getSenha()
        {
            return senha;
        }
        public void getSenha(string snh)
        {
            this.senha = snh;
        }

        //metodos
        public void CadastroAdmin(string nm, string em, string snh)
        {
            nome = nm;
            email = em;
            senha = snh;
        }
        public void AlterarCadastroAdmin(string nm, string em, string snh)
        {
            nome = nm;
            email = em;
            senha = snh;
        }
        public void CancelarAdmin()
        {
            nome = "";
            email = "";
            senha = "";
        }
        public string ConsultarAdmin()
        {
            return "Nome: " + getNome() + "\nE-mail: " + getEmail() + "\nSenha: " + getSenha();
        }
    }
}