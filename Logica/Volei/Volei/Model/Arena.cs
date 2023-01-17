using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Volei
{
    internal class Arena
    {
        //atributos
        private string nomeArena;

        //construtores
        public Arena()
        {
            nomeArena = "";
        }
        public Arena(string nomeArena)
        {
            this.nomeArena = nomeArena;
        }

        //get e set
        public string getNomeArena()
        {
            return nomeArena;
        }
        public void setNomeArena(string nomeArena)
        {
            this.nomeArena = nomeArena;
        }

        //metodos
        public void CadastrarArena(string na)
        {
            nomeArena = na;
        }
        public void AlterarArena(string na)
        {
            nomeArena = na;
        }
        public string ConsultarArena()
        {
            return "Nome da Arena: " + getNomeArena();
        }
    }
}