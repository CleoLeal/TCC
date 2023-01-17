using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Volei
{
    internal class Cliente
    {
        //atributos
        private string nomeCliente;
        private string cep;
        private string emailCliente;
        private string telefoneCliente;
        private string dtnc;
        private string senha;
        //construtor
        public Cliente()
        {
            nomeCliente = "";
            cep = "";
            emailCliente = "";
            telefoneCliente = "";
            dtnc = "";
            senha = "";
        }
        public Cliente(string nomeCliente, string cep, string emailCliente, string telefoneCliente, string dtnc, string senha)
        {
            this.nomeCliente = nomeCliente;
            this.cep = cep;
            this.emailCliente = emailCliente;
            this.telefoneCliente = telefoneCliente;
            this.dtnc = dtnc;
            this.senha = senha;
        }

        //get e set
        public string getNomeCliente()
        {
            return nomeCliente;
        }
        private void setNomeCiente(string nomeCliente)
        {
            this.nomeCliente = nomeCliente;
        }
        public string getCep()
        {
            return cep;
        }
        private void setCep(string cep)
        {
            this.cep = cep;
        }
        public string getEmailCliente()
        {
            return emailCliente;
        }
        private void setEmailCiente(string emailCliente)
        {
            this.emailCliente = emailCliente;
        }
        public string getTelefoneCliente()
        {
            return telefoneCliente;
        }
        private void setTelefoneCiente(string telefoneCliente)
        {
            this.telefoneCliente = telefoneCliente;
        }
        public string getDtnc()
        {
            return dtnc;
        }
        private void setDtnc(string dtnc)
        {
            this.dtnc = dtnc;
        }
        public string getSenha()
        {
            return senha;
        }
        private void setSenha(string senha)
        {
            this.senha = senha;
        }

        //metodos
        public void CadastroCliente(string nc, string cc, string ec, string tc, string dt, string snh)
        {
            nomeCliente = nc;
            cep = cc;
            emailCliente = ec;
            telefoneCliente = tc;
            dtnc = dt;
            senha = snh;
        }
        public void AlterarCadastro(string nc, string cc, string ec, string tc, string dt, string snh)
        {
            nomeCliente = nc;
            cep = cc;
            emailCliente = ec;
            telefoneCliente = tc;
            dtnc = dt;
            senha = snh;
        }

        public string ConsultarCadastro()
        {
            return "Nome: " + getNomeCliente() + "\nCEP: " + getCep() + "\nEmail: " + getEmailCliente() + "\nTelefone: " + getTelefoneCliente() + "\nData de Nascimento: " + getDtnc() + "\nSenha: " + getSenha();
        }
    }
}