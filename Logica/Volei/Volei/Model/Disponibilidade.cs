using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Volei
{
    internal class Disponibilidade
    {
        //atribuitos
        private string dataDisponivel;
        private string horarioDisponivel;

        //construtor
        public Disponibilidade()
        {
            dataDisponivel = "";
            horarioDisponivel = "";
        }
        public Disponibilidade(string dd, string hr)
        {
            this.dataDisponivel = dd;
            this.horarioDisponivel = hr;
        }
        //get e set 
        public string getDataDisponivel()
        {
            return dataDisponivel;
        }
        public void setDataDisponivel(string dataDisponivel)
        {
            this.dataDisponivel = dataDisponivel;
        }
        public string getHorarioDisponivel()
        {
            return horarioDisponivel;
        }
        public void setHorarioDisponivel(string horarioDisponivel)
        {
            this.horarioDisponivel = horarioDisponivel;
        }
        //metodos
        public void CadastrarDisponibilidade(string dd, string hr)
        {
            dataDisponivel = dd;
            horarioDisponivel = hr;
        }


        public void AlterarDisponibilidade(string dd, string hr)
        {
            dataDisponivel = dd;
            horarioDisponivel = hr;
        }
        public string ConsultarDisponibilidade()
        {
            return "Data Disponível: " + getDataDisponivel() + "\nHorario Disponéivel: " + getHorarioDisponivel();
        }
    }
}