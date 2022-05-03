<?php
    //Resposta da questão 2 "Primos"
    //Código criado por: Cristiano Simão dos Santos

    function Primos(int $inicial,int $final){
        $resultado = [];
        
        for ($x = $inicial +1; $x < $final; $x++){
            $ok = true;
            for ($y = 2; $y<$x; $y++){
                if ($x % $y == 0){
                    $ok = false;
                    break;
                }       
            }
            if ($ok == true){
                $resultado[] = $x; 
            }
        }
        return $resultado;
    }
    
    //echo var_dump(Primos(10,29)); //Teste de execução
?>