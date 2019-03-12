<?php

//@author Jefferson Carvalho <jeffersoncarvalho60@outlook.com>

$jogos = gerarJogos(0, 10); //Exemplo gerando 10 jogos da Lotomania

imprimirJogos($jogos);

function gerarJogos($tipo, $quantidade){ //A função recebe dois parâmetros, o tipo do jogo e a quantidade de jogos

    //Tipo 0 = Lotofácil           
    //Tipo 1 = Lotomania
    //Tipo 2 = Mega Sena
    //Tipo 3 = Quina

    $tipos = array(
        0 => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25],
        1 => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99],
        2 => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60],
        3 => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80]
    );

    $jogos = array();

    for ($i=0; $i < $quantidade; $i++) { 

        $numeros = $tipos[$tipo];

        if($tipo == 0){
            $count = 15;
        }else if($tipo == 1){
            $count = 50;
        }else if($tipo == 2){
            $count = 6;
        }else if($tipo = 3){
            $count = 5;
        }
   
        $jogo = array();
   
        for ($j=0; $j < $count; $j++) { 

            $num = rand(0, (count($numeros) - 1));
   
            array_push($jogo, $numeros[$num]);
   
            $numeros[$num] = end($numeros);
   
            array_pop($numeros);
   
        }
   
        sort($jogo);
        array_push($jogos, $jogo);
    }

   return $jogos;
}

//Imprime os jogos gerados 

function imprimirJogos($jogos){ //Recebe o array de jogos como parâmetro
    
    foreach ($jogos as $jogo) {
        for ($i=0; $i < count($jogo); $i++) { 
            echo $jogo[$i]." ";
        }
    
        echo "<br>";
    }

}

?>