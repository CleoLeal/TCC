using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Volei
{
    internal class Torneio
    {
        //atributos
        private string nome;
        private string data;
        private string dataAlteracao;

        //construtores
        public Torneio()
        {
            nome = "";
            data = "";
            dataAlteracao = "";
        }

        public Torneio(string nome, string data, string dataAlteracao)
        {
            this.nome = nome;
            this.data = data;
            this.dataAlteracao = dataAlteracao;
        }

        //get e set
        public string getNome()
        {
            return nome;
        }
        public void setNome(string nome)
        {
            this.nome = nome;
        }
        public string getData()
        {
            return data;
        }
        public void setData(string data)
        {
            this.data = data;
        }
        public string getDataAlteracao()
        {
            return dataAlteracao;
        }
        public void setDataAlteracao(string dataAlteracao)
        {
            this.dataAlteracao = dataAlteracao;
        }

        //metodos
        public void CadastroTorneio(string nm, string dt, string da)
        {
            this.nome = nm;
            this.data = dt;
            this.dataAlteracao = da;
        }
        public void AlterarTorneio(string nm, string dt, string da)
        {
            this.nome = nm;
            this.data = dt;
            this.dataAlteracao = da;
        }

        public string ConsultarTorneio()
        {
            return "Nome: " + getNome() + "\nData do Torneio: " + getData();
        }
    }

}