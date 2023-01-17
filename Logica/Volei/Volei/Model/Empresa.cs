using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Volei
{
    internal class Empresa
    {
        //atributos
        private string cnpj;
        private string razaoSocial;
        private string fantasia;
        private string emailEmpresa;
        private string telefoneEmpresa;
        private string cepEmpresa;
        private string nroEmpresa;
        private string inscricaoEstadual;

        //construtores
        public Empresa()
        {
            cnpj = "";
            razaoSocial = "";
            fantasia = "";
            emailEmpresa = "";
            telefoneEmpresa = "";
            cepEmpresa = "";
            nroEmpresa = "";
            inscricaoEstadual = "";
        }
        public Empresa(string cnpj, string razaoSocial, string fantasia, string emailEmpresa, string telefoneEmpresa, string cepEmpresa, string nroEmpresa, string inscicaoEstadual)
        {
            this.cnpj = cnpj;
            this.razaoSocial = razaoSocial;
            this.fantasia = fantasia;
            this.emailEmpresa = emailEmpresa;
            this.telefoneEmpresa = telefoneEmpresa;
            this.cepEmpresa = cepEmpresa;
            this.nroEmpresa = nroEmpresa;
            this.inscricaoEstadual = inscicaoEstadual;
        }

        // get e set
        public string getCnpj()
        {
            return cnpj;
        }
        public void setCpnj(string cnpj)
        {
            this.cnpj = cnpj;
        }
        public string getRazaoSocial()
        {
            return razaoSocial;
        }
        public void setRazaoSocial(string razaoSocial)
        {
            this.razaoSocial = razaoSocial;
        }
        public string getFantasia()
        {
            return fantasia;
        }
        public void setFantasia(string fantasia)
        {
            this.fantasia = fantasia;
        }
        public string getEmailEmpresa()
        {
            return emailEmpresa;
        }
        public void setEmailEmpresa(string emailEmpresa)
        {
            this.emailEmpresa = emailEmpresa;
        }
        public string getTelefoneEmpresa()
        {
            return telefoneEmpresa;
        }
        public void setTelefoneEmpresa(string telefoneEmpresa)
        {
            this.telefoneEmpresa = telefoneEmpresa;
        }
        public string getCepEmpresa()
        {
            return cepEmpresa;
        }
        public void setCepEmpresa(string cepEmpresa)
        {
            this.cepEmpresa = cepEmpresa;
        }
        public string getNroEmpresa()
        {
            return nroEmpresa;
        }
        public void setNroEmpresa(string nroEmpresa)
        {
            this.nroEmpresa = nroEmpresa;
        }
        public string getInscricaoEstadual()
        {
            return inscricaoEstadual;
        }
        public void setInscricaoEstadual(string inscricaoEstadual)
        {
            this.inscricaoEstadual = inscricaoEstadual;
        }

        //métodos
        public void CadastroEmpresa(string Cnpj, string rs, string fnts, string ee, string te, string ce, string ne, string ie)
        {
            cnpj = Cnpj;
            razaoSocial = rs;
            fantasia = fnts;
            emailEmpresa = ee;
            telefoneEmpresa = te;
            cepEmpresa = ce;
            nroEmpresa = ne;
            inscricaoEstadual = ie;
        }
        public void AlterarDados(string Cnpj, string rs, string fnts, string ee, string te, string ce, string ne, string ie)
        {
            cnpj = Cnpj;
            razaoSocial = rs;
            fantasia = fnts;
            emailEmpresa = ee;
            telefoneEmpresa = te;
            cepEmpresa = ce;
            nroEmpresa = ne;
            inscricaoEstadual = ie;
        }

        public string ConsultarCadastro()
        {
            return "CNPJ: " + getCnpj() + "\nRazão Social: " + getRazaoSocial() + "\nFantasia: " + getFantasia() + "\nE-mail: " + getEmailEmpresa() + "\nTelefone: " + getTelefoneEmpresa() + "\n CEP: " + getCepEmpresa() + "\nNúmero: " + getNroEmpresa() + "\nInscrição Estadual: " + getInscricaoEstadual();
        }
    }
}