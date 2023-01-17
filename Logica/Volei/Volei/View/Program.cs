using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Volei
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Cliente cliente = new Cliente();
            Empresa empresa = new Empresa();
            Admin admin = new Admin();
            Contato contato = new Contato();
            Arena arena = new Arena();
            Disponibilidade disponibilidade = new Disponibilidade();
            Reserva reserva = new Reserva();
            Torneio torneio = new Torneio();

            int opcao = 0;
            do
            {
                Console.Clear();
                Console.WriteLine("1 - Cliente \n2 – Empresa\n3 - Sair");
                opcao = int.Parse(Console.ReadLine());
                if (opcao == 1)
                {
                    int op1 = 0;
                    do
                    {
                        Console.Clear();
                        string nome;
                        string cc;
                        string ec;
                        string tc;
                        string dt;
                        string snh;
                        Console.WriteLine("1 - Cadastro\n2 - Alterar Dados\n3 - Consultar dados\n4 - Reservar \n5 - Sair");
                        op1 = int.Parse(Console.ReadLine());
                        if (op1 == 1)
                        {
                            Console.WriteLine("Qual é o nome?");
                            nome = Console.ReadLine();
                            Console.WriteLine("Qual é o seu CEP?");
                            cc = Console.ReadLine();
                            Console.WriteLine("Qual é o seu E-mail?");
                            ec = Console.ReadLine();
                            Console.WriteLine("Qual é o seu telefone?");
                            tc = Console.ReadLine();
                            Console.WriteLine("Qual é a sua data de aniversário?");
                            dt = Console.ReadLine();
                            Console.WriteLine("Senha:");
                            snh = Console.ReadLine();
                            cliente.CadastroCliente(nome, cc, ec, tc, dt, snh);
                        }
                        else if (op1 == 2)
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
                                break;
                            }
                        }
                        else if (op1 == 3)
                        {
                            Console.WriteLine(cliente.ConsultarCadastro());
                        }
                        else if (op1 == 4)
                        {
                           string data;
                           string horario;
                           string local;
                           int op = 0;
                            do
                            {
                                Console.Clear();
                                Console.WriteLine("1 - Reservar\n2 – Cancelar Reserva\n3 - Alterar reserva\n4 - Consultar reserva\n5 - Sair");
                                op = int.Parse(Console.ReadLine());
                           
                                if (op == 1)
                                {
                                   Console.Clear();
                                   Console.WriteLine("Qual a data que você quer reservar?");
                                   data = (Console.ReadLine());
                                   Console.WriteLine("Qual o horário que você quer reservar?");
                                   horario = (Console.ReadLine());
                                   Console.WriteLine("Qual o local que você quer reservar?");
                                   local = (Console.ReadLine());
                                   reserva.CadastroReserva(data, horario, local);
                                   Console.WriteLine("Reserva concluída");
                                }
                                else if (op == 2)
                                {
                                    Console.WriteLine("Você quer cancelar a reserva? (S/N)");
                                    char resposta2 = char.Parse(Console.ReadLine());
                                    if (resposta2 == 'S' || resposta2 == 's')
                                    {
                                        Console.WriteLine(reserva.CancelarReserva());
                                    }
                                    else
                                    {
                                        Console.WriteLine("A reserva não foi cancelada");
                                        break;
                                    }
                                }
                                else if (op == 3)
                                {
                                    Console.WriteLine("Você quer alterar os dados?");
                                    char resposta3 = char.Parse(Console.ReadLine());
                                    if (resposta3 == 'S' || resposta3 == 's')
                                    {
                                        Console.WriteLine("Para qual data você quer reservar?");
                                        data = (Console.ReadLine());
                                        Console.WriteLine("Para qual horário você quer reservar?");
                                        horario = (Console.ReadLine());
                                        reserva.AlterarReserva(data, horario);
                                    }
                                    else
                                    {
                                        break;
                                    }
                                }
                                else if (op == 4)
                                {
                                    Console.WriteLine(reserva.ConsultarReserva());
                                }
                                else
                                {
                                    break;
                                }
                                Console.ReadKey();
                           } while (op != 0);
                        }
                        else
                        {
                            break;
                        }
                        Console.ReadKey();
                    } while (op1 != 0);

                }
                else if (opcao == 2)
                {
                    int op2 = 0;
                    do
                    {
                        Console.Clear();
                        string cpnj;
                        string rs;
                        string fnts;
                        string ee;
                        string te;
                        string cep;
                        string nro;
                        string ie;
                        string nomeAdm;
                        string emailAdm;
                        string senhaAdm;
                        Console.WriteLine("1 - Cadastrar Empresa\n2 - Alterar Dados\n3 - Consultar dados\n4 - Admin\n5 - Cadastrar Arena\n6 - Sair");
                        op2 = int.Parse(Console.ReadLine());
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
                                break;
                            }
                        }
                        else if (op2 == 3)
                        {
                            Console.WriteLine(empresa.ConsultarCadastro());
                        }
                        else if (op2 == 4)
                        {
                            int opAdm = 0;
                            do
                            {
                                Console.Clear();
                                Console.WriteLine("1- Cadastrar Admin \n2- Consultar Admin\n3- Cancelar Admin\n4- Alterar Admin\n5- Sair");
                                opAdm = int.Parse(Console.ReadLine());
                                if (opAdm == 1)
                                {
                                    Console.WriteLine("Nome:");
                                    nomeAdm = Console.ReadLine();
                                    Console.WriteLine("E-mail:");
                                    emailAdm = Console.ReadLine();
                                    Console.WriteLine("Senha:");
                                    senhaAdm = Console.ReadLine();
                                    admin.CadastroAdmin(nomeAdm, emailAdm, senhaAdm);
                                }
                                else if (opAdm == 2)
                                {
                                    Console.WriteLine(admin.ConsultarAdmin());
                                }
                                else if(opAdm == 3)
                                {
                                    char rsp;
                                    Console.WriteLine("Você quer cancelar a conta?");
                                    rsp = char.Parse(Console.ReadLine());
                                    if(rsp=='s' || rsp=='S')
                                    {
                                        admin.CancelarAdmin();
                                        Console.WriteLine("Conta cancelada");
                                    }
                                    else
                                    {
                                        Console.WriteLine("Conta não cancelada");
                                    }
                                }
                                else if (opAdm == 4)
                                {
                                    Console.WriteLine("Você quer alterar os dados?");
                                    char resposta = char.Parse(Console.ReadLine());
                                    if (resposta == 's' || resposta == 'S')
                                    {
                                        Console.WriteLine("Nome:");
                                        nomeAdm = Console.ReadLine();
                                        Console.WriteLine("E-mail:");
                                        emailAdm = Console.ReadLine();
                                        Console.WriteLine("Senha:");
                                        senhaAdm = Console.ReadLine();
                                        admin.AlterarCadastroAdmin(nomeAdm, emailAdm, senhaAdm);
                                    }
                                    else
                                    {
                                        break;
                                    }
                                }
                                else
                                {
                                    break;
                                }
                                Console.ReadKey();
                            } while (opAdm != 0);
                        }
                        else if (op2 == 5)
                        {
                            int opArena = 0;
                            do 
                            {
                                Console.Clear();
                                string nome;
                                Console.WriteLine("1- Cadastrar Arena \n2- Consultar Arena\n3- Alterar Arena\n4- Sair");
                                opArena = int.Parse(Console.ReadLine());
                                if (opArena == 1)
                                {
                                    Console.WriteLine("Nome da Arena:");
                                    nome = Console.ReadLine();
                                    arena.CadastrarArena(nome);
                                }
                                else if (opArena == 2)
                                {
                                    Console.WriteLine(arena.ConsultarArena());
                                }
                                else if (opArena == 3)
                                {
                                    Console.WriteLine("Você quer alterar os dados?(s/n)");
                                    char resposta = char.Parse(Console.ReadLine());
                                    if (resposta == 's' || resposta == 'S')
                                    {
                                        Console.WriteLine("Nome:");
                                        nome = Console.ReadLine();
                                        arena.CadastrarArena(nome);
                                    }
                                    else
                                    {
                                        break;
                                    }
                                }
                                else
                                {
                                    break;
                                }
                                Console.ReadKey();
                            } while (opArena!=0);
                        }
                        else
                        {
                            break;
                        }
                        Console.ReadKey();
                    } while (op2 != 0);
                }
                else
                {
                    Environment.Exit(0);
                }
                Console.ReadKey();
            } while (opcao != 0);
        }
    }
}