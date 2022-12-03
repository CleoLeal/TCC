<?php
    class CNPJ
    {
        private $cnpj;

        //Método da classe

        function verificaCNPJ($valor)
        {
            $this->CNPJ=$valor;
            for($i=0;$i<=14;$i++)
            {
                //modifiquei convertendo de string para inteiro.
                $n[$i+1]=(int)substr($this->CNPJ, $i, 1);
            }
            //calculo do primerio dígito
            $soma1=($n[1]*5+$n[2]*4+$n[3]*3+$n[4]*2+$n[5]*9+$n[6]*8+$n[7]*7+$n[8]*6+$n[9]*5+$n[10]*4+$n[11]*3+$n[12]*2);
            $dgt1=11-($soma1%11);
            //se o resultado da sobra for 10 ou 11
            if($dgt1==10 || $dgt1==11)
            {
                //agora ele está valendo 0
                $dgt1=0;
            }
            //calculo do segundo dígito
            $soma2=($n[1]*6+$n[2]*5+$n[3]*4+$n[4]*3+$n[5]*2+$n[6]*9+$n[7]*8+$n[8]*7+$n[9]*6+$n[10]*5+$n[11]*4+$n[12]*3+$dgt1*2);
            $dgt2=11-($soma2%11);
            //se o resultado da sobre for 10 ou 11
            if($dgt2==10 || $dgt2==11)
            {
                //agora ele está valendo 0
                $dgt2=0;
            }

            //criei uma variável para armazenar o 10 e o 11 número. e modifiquei os números de string para inteiro
            $dgtGet1 = (int)$n[13];
            $dgtGet2 = (int)$n[14];
            
            //verifico se ele dgt1 é diferente do dgtGet1 ou dgt2 é diferente do dgtGet2
            if($dgt1!=$dgtGet1 && $dgt2!=$dgtGet2)
            {
                //se eles forem diferentes, é verdade que está errado
                $erro=true;
            }
            else
            {
                //se eles forem iguais, é falso que está errado
                $erro=false;
            }
            //retorna o erro
            return $erro;   
        }
    }
?>
