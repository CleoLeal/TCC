using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Volei
{
    internal class Reserva
    {
        //atributos
        private string dataReserva;
        private string horaReserva;
        private string localReserva;
        private string dataAlteracao;
        private string horaAlteracao;

        //construtor
        public Reserva()
        {
            dataAlteracao = "";
            horaReserva = "";
            localReserva = "";
            dataAlteracao = "";
            horaAlteracao = "";
        }

        public Reserva(string dataReserva, string horaReserva, string localReserva, string dataAlteracao, string horaAlteracao)
        {
            this.dataReserva = dataReserva;
            this.horaReserva = horaReserva;
            this.localReserva = localReserva;
            this.dataAlteracao = dataAlteracao;
            this.horaAlteracao = horaAlteracao;
        }

        //get e set

        public string getDataReserva()
        {
            return dataReserva;
        }

        public void setDataReserva(string dataReserva)
        {
            this.dataReserva = dataReserva;
        }
        public string getHoraReserva()
        {
            return horaReserva;
        }
        public void setHoraReserva(string horaReserva)
        {
            this.horaReserva = horaReserva;
        }
        public string getLocalReserva()
        {
            return localReserva;
        }
        public void setLocalReserva(string localReserva)
        {
            this.localReserva = localReserva;
        }
        public string getDataAlteracao()
        {
            return dataAlteracao;
        }
        public void setDataAlteracao(string dataAlteracao)
        {
            this.dataAlteracao = dataAlteracao;
        }
        public string getHoraAlteracao()
        {
            return horaAlteracao;
        }
        public void setHoraAlteracao(string horaAlteracao)
        {
            this.horaAlteracao = horaAlteracao;
        }

        //métodos
        public void CadastroReserva(string DR, string HR, string LR)
        {
            dataReserva = DR;
            horaReserva = HR;
            localReserva = LR;
        }
        public bool CancelarReserva()
        {
            dataReserva = "";
            horaReserva = "";
            localReserva = "";
            dataAlteracao = "";
            return false;
        }

        public void AlterarReserva(string DA, string HA)
        {
            dataAlteracao = DA;
            horaAlteracao = HA;
        }
        public string ConsultarReserva()
        {
            return "Data: " + getDataReserva() + "\nHorário: " + getHoraReserva() + "\nLocal: " + getLocalReserva();
        }
        public string ConsultarReservaAlterada()
        {
            return "Data: " + getDataAlteracao() + "\nHorário: " + getHoraAlteracao() + "\nLocal: " + getLocalReserva();
        }
    }
}