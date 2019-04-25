<?php 

print "Digite um número: ";
$a = (int) fgets(STDIN);

print "Digite um número: ";
$b = (int) fgets(STDIN);

print "Digite um número: ";
$c = (int) fgets(STDIN);

print "Digite um número: ";
$d = (int) fgets(STDIN);

print "Digite um número: ";
$e = (int) fgets(STDIN);
print "\n";
function somar_e_media($a, $b, $c, $d, $e){
    $soma = $a + $b + $c + $d + $e;
    print "A soma dos números é: $soma\n";
    $media = $soma/5;
    print "A média dos números é: $media";
    print "\n";
}

somar_e_media($a, $b, $c, $d, $e);

?>