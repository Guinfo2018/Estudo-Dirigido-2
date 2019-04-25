<?php

print "Digite um número: ";
$a = (float) fgets(STDIN);

print "Digite um número: ";
$b = (float) fgets(STDIN);

print "Digite um número: ";
$c = (float) fgets(STDIN);

if($a>$b && $a>$c){
    print "$a é o maior número";

}elseif ($b>$a && $b>$c){
    print "$b é o maior número";
}elseif ($c>$a && $c>$b){
    print "$c é o maior número";
}else{}
    
?>

