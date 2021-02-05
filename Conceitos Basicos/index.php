<?php

    $nome = 'Joao Paulo';
    echo " Meu nome é <br/>";
    echo $nome;
    echo "<br/>";

    /*String*/

    $var = 'valor';

    /*Inteiro*/

    $num = 10;

    /*Double*/

    $numDouble = 10.09;

    /*Booleano*/

    $bool = true;

   

    /*-------------------CONSTANTES----------------------------*/
    /*define*/

    define('NOME', 'João Paulo');

    echo NOME;

    /*-------------------ARRAYS----------------------------*/

    $array = array('array 1 ','array 2',' array 3');

    $nomes[] = 'Joao'; // nomes[0]
    $nomes[] = 'Joao Paulo'; // nomes[1]

    $nomes[7]= 'jorge'; // setando a posição 
    
    $array = ['nome 1','nome 2','nome 3', 100, true, 10.09];

    $informacao['nome'] = "nome";
    $informacao['idade'] = 22;

    /*-------------------CONCATENAÇÃO----------------------------*/

     echo 'texto ' .$var. ' Texto texto <br/>';// aspas simples
     echo "Meu nome é $var";// aspas duplas

    /*-------------------OPERAÇÕES MATEMATICAS----------------------------*/

    $numero = 10;
    $soma = 5+5;
    $sub = 10 - 5 ;
    
    $resto = 100 % 3;

    /*-------------------CONDIÇÕES----------------------------*/

    /*if ($var1 == $var2){

        
    }

    else{

    }*/

    /*-------------------LOOP----------------------------*/


    for( $contador = 0 ; $contador<10 ;$contador++ ){
    
        echo 'Ola Mundo';
        echo '<br/>';
        echo $contador;
        echo '<hr>';
    
    }

    $count = 0;

    while($count < 10){

        echo 'hello';
        echo '<hr>';

        $count+=1;


    }
    
?>