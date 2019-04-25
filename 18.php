<?php 
$p = 0;
$i = 0;
$c = 1;
 while ($c<=10){   
    print "Digite um número:";
    $num = (int) fgets(STDIN);
    $c++;

    if($num%2 == 0){
        $p = $p +1;

    }else{
        $i = $i+1;
    }
 }
    print "Quantidade de números pares: $p\n";
    print "Quantidade de números impares: $i";

    ?>