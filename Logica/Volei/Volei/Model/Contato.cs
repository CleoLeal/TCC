using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Volei
{
    internal class Contato
    {
        //atributos
        private string telefone;
        private string email;
        private string facebook;
        private string instagram;
        private string webPage;

        //construtor
        public Contato()
        {
            telefone = "";
            email = "";
            facebook = "";
            instagram = "";
            webPage = "";
        }
        public Contato(string telefone, string email, string facebook, string instagram, string webPage)
        {
            this.telefone = telefone;
            this.email = email;
            this.facebook = facebook;
            this.instagram = instagram;
            this.webPage = webPage;
        }

        //get e set
        public string getTelefone()
        {
            return telefone;
        }
        public void setTelefone(string telefone)
        {
            this.telefone = telefone;
        }
        public string getEmail()
        {
            return email;
        }
        public void setEmail(string email)
        {
            this.email = email;
        }
        public string getFacebook()
        {
            return facebook;
        }
        public void setFacebook(string facebook)
        {
            this.facebook = facebook;
        }
        public string getInstagram()
        {
            return instagram;
        }
        public void setInstagram(string instagram)
        {
            this.instagram = instagram;
        }
        public string getWebPage()
        {
            return webPage;
        }
        public void setWebPage(string webPage)
        {
            this.webPage = webPage;
        }

        //metodos
        public void CadastroContato(string tel, string em, string face, string insta, string wp)
        {
            telefone = tel;
            email = em;
            facebook = face;
            instagram = insta;
            webPage = wp;
        }
        public void AlterarContato(string tel, string em, string face, string insta, string wp)
        {
            telefone = tel;
            email = em;
            facebook = face;
            instagram = insta;
            webPage = wp;
        }
        public string ConsultarContato()
        {
            return "Telefone: " + getTelefone() + "\nEmail: " + getEmail() + "\nFacebook: " + getFacebook() + "\nInstagram: " + getInstagram() + "\nWeb Page: " + getWebPage();
        }
    }
}