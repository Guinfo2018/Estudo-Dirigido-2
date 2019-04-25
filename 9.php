<?php 

print "Digite um número: ";
$a = (int) fgets(STDIN);

print "Digite um número: ";
$b = (int) fgets(STDIN);

print "Digite um número: ";
$c = (int) fgets(STDIN);

if($a>$b && $b>$c){
    print "A ordem descrescente é: $a $b $c";
}elseif($a>$c && $c>$b){
    print "A ordem descrescente é: $a $c $b";
}elseif($b>$a && $a>$c){
    print "A ordem descrescente é: $b $a $c";
}elseif($b>$c && $c>$a){
    print "A ordem descrescente é: $b $c $a";
}elseif($c>$a && $a>$b){
    print "A ordem descrescente é: $c $a $b";
}elseif($c>$b && $b>$a){
    print "A ordem descrescente é: $c $b $a";
}

?>