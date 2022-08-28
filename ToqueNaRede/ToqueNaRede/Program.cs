using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ToqueNaRede
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Reserva reserva = new Reserva();
            Empresa empresa = new Empresa();
            Cliente cliente = new Cliente();    
            int opcao = 0;
            int op1 = 0;

            do
            {
                Console.Clear();
                Console.WriteLine("\n1 - Reservar\n2 - Cliente \n3 – Empresa\n4 - Sair");
                op1 = int.Parse(Console.ReadLine());
                if (op1 == 1)
                {
                    do
                    {

                        Console.Clear();
                        Console.WriteLine("1 - Rervar\n2 – Cancelar Reserva\n3 - Alterar reserva\n4 - Consultar reserva\n5 - Sair");
                        opcao = int.Parse(Console.ReadLine());

                        string data;
                        string horario;
                        string local;
                        if (opcao == 2)
                        {
                            Console.WriteLine("Qual a data que você quer reservar?");
                            data = (Console.ReadLine());
                            Console.WriteLine("Qual o horário que você quer reservar?");
                            horario = (Console.ReadLine());
                            Console.WriteLine("Qual o local que você quer reservar?");
                            local = (Console.ReadLine());
                            reserva.CadastroReserva(data, horario, local);
                            Console.WriteLine("Reserva concluída");
                        }
                        else if (opcao == 2)
                        {
                            Console.WriteLine("Você quer cancelar a reserva? (S/N)");
                            char resposta = char.Parse(Console.ReadLine());
                            if (resposta == 'S' || resposta == 's')
                            {
                                Console.WriteLine(reserva.CancelarReserva());
                            }
                            else
                            {
                                Console.WriteLine("A reserva não foi cancelada");
                            }
                        }
                        else if (opcao == 3)
                        {
                            Console.WriteLine("Você quer alterar os dados?");
                            char resposta = char.Parse(Console.ReadLine());
                            if (resposta == 'S' || resposta == 's')
                            {
                                Console.WriteLine("Para qual data você quer reservar?");
                                data = (Console.ReadLine());
                                Console.WriteLine("Para qual horário você quer reservar?");
                                horario = (Console.ReadLine());
                                reserva.AlterarReserva(data, horario);
                            }
                            else
                            {
                                Environment.Exit(1);
                            }

                        }
                        else if (opcao == 4)
                        {
                            Console.WriteLine(reserva.ConsultarReserva());
                        }
                        else if (opcao == 0)
                        {
                            Environment.Exit(0);
                        }
                        Console.ReadKey();
                    } while (opcao != 0);
                }
                else if(op1==2)
                {
                    int op3 = 0;
                    do
                    {
                        Console.Clear();
                        Console.WriteLine("1 - Cadastro\n2 - Alterar Dados\n3 - Consultar dados\n4 - Sair");
                        op3 = int.Parse(Console.ReadLine());
                        string nome;
                        string cc;
                        string ec;
                        string tc;
                        string dt;
                        string snh;
                        if (op3 == 1)
                        {
                            Console.WriteLine("Qual é o nome?");
                            nome = Console.ReadLine();
                            Console.WriteLine("Qual é o seu CEP?");
                            cc = Console.ReadLine();
                            Console.WriteLine("Qual é o seu E-mail?");
                            ec = Console.ReadLine();
                            Console.WriteLine("Qual é o seu Número?");
                            tc = Console.ReadLine();
                            Console.WriteLine("Qual é a sua data de aniversário?");
                            dt = Console.ReadLine();
                            Console.WriteLine("Senha:");
                            snh = Console.ReadLine();
                            cliente.CadastroCliente(nome, cc, ec, tc, dt, snh);
                        }
                        else if (op3 == 2)
                        {
                            Console.WriteLine("Você quer alterar os dados?");
                            char resposta = char.Parse(Console.ReadLine());
                            if (resposta == 's' || resposta == 'S')
                            {
                                Console.WriteLine("Qual é o nome?");
                                nome = Console.ReadLine();
                                Console.WriteLine("Qual é o seu CEP?");
                                cc = Console.ReadLine();
                                Console.WriteLine("Qual é o seu E-mail?");
                                ec = Console.ReadLine();
                                Console.WriteLine("Qual é o seu Número?");
                                tc = Console.ReadLine();
                                Console.WriteLine("Qual é a sua data de aniversário?");
                                dt = Console.ReadLine();
                                Console.WriteLine("Senha:");
                                snh = Console.ReadLine();
                                cliente.AlterarCadastro(nome, cc, ec, tc, dt, snh);
                            }
                            else
                            {
                                Environment.Exit(1);
                            }

                        }
                        else if (op3 == 3)
                        {
                            Console.WriteLine(cliente.ConsultarCadastro());
                        }
                        else
                        {
                            Environment.Exit(1);
                        }
                        Console.ReadKey();
                    } while (op3 != 0);
                }
                else if (op1 == 3)
                {
                    int op2 = 0;
                    do
                    {
                        Console.Clear();
                        Console.WriteLine("1 - Cadastrar Empresa\n2 - Alterar Dados\n3 - Consultar dados\n4 - Sair");
                        op2 = int.Parse(Console.ReadLine());
                        string cpnj;
                        string rs;
                        string fnts;
                        string ee;
                        string te;
                        string cep;
                        string nro;
                        string ie;
                        if (op2 == 1)
                        {
                            Console.WriteLine("Qual é o CNPJ?");
                            cpnj = Console.ReadLine();
                            Console.WriteLine("Qual é a Razão Social?");
                            rs = Console.ReadLine();
                            Console.WriteLine("Qual é a Fantasia?");
                            fnts = Console.ReadLine();
                            Console.WriteLine("Qual é o E-mail?");
                            ee = Console.ReadLine();
                            Console.WriteLine("Qual é o Telefone?");
                            te = Console.ReadLine();
                            Console.WriteLine("Qual é o CEP?");
                            cep = Console.ReadLine();
                            Console.WriteLine("Qual é o Número?");
                            nro = Console.ReadLine();
                            Console.WriteLine("Qual é o Inscrição Estadual?");
                            ie = Console.ReadLine();
                            empresa.CadastroEmpresa(cpnj, rs, fnts, ee, te, cep, nro, ie);
                        }
                        else if (op2 == 2)
                        {
                            Console.WriteLine("Você quer alterar os dados?");
                            char resposta = char.Parse(Console.ReadLine());
                            if (resposta == 's' || resposta == 'S')
                            {
                                Console.WriteLine("Qual é o CNPJ?");
                                cpnj = Console.ReadLine();
                                Console.WriteLine("Qual é a Razão Social?");
                                rs = Console.ReadLine();
                                Console.WriteLine("Qual é a Fantasia?");
                                fnts = Console.ReadLine();
                                Console.WriteLine("Qual é o E-mail?");
                                ee = Console.ReadLine();
                                Console.WriteLine("Qual é o Telefone?");
                                te = Console.ReadLine();
                                Console.WriteLine("Qual é o CEP?");
                                cep = Console.ReadLine();
                                Console.WriteLine("Qual é o Número?");
                                nro = Console.ReadLine();
                                Console.WriteLine("Qual é o Inscrição Estadual?");
                                ie = Console.ReadLine();
                                empresa.AlterarDados(cpnj, rs, fnts, ee, te, cep, nro, ie);
                            }
                            else
                            {
                                Environment.Exit(1);
                            }

                        }
                        else if (op2 == 3)
                        {
                            Console.WriteLine(empresa.ConsultarCadastro());
                        }
                        else
                        {
                            Environment.Exit(1);
                        }
                        Console.ReadKey();
                    } while (op2 != 0);
                }
                else
                {
                    Environment.Exit(0);
                }
                Console.ReadKey();
            } while (op1!=0);
            
        }
    }
}
