<?php

print "Digite um número: ";
$a = (int) fgets(STDIN);

print "Digite um número: ";
$b = (int) fgets(STDIN);

print "Digite um número: ";
$c = (int) fgets(STDIN);
function exibir_maior_numero($a, $b, $c){
    if($a>$b && $a>$c){
        print "$a é o maior número";
    }elseif ($b>$a && $b>$c){
        print "$b é o maior número";
    }elseif ($c>$a && $c>$b){
        print "$c é o maior número";
    }else{}
} 

function exibir_menor_numero($a, $b, $c){
    if($a<$b && $a<$c){
        print "$a é o menor número";

    }elseif ($b<$a && $b<$c){
        print "$b é o menor número";
    }elseif ($c<$a && $c<$b){
        print "$c é o menor número";
    }else{}

}

exibir_maior_numero($a, $b, $c);
print"\n";
exibir_menor_numero($a, $b, $c);

?>