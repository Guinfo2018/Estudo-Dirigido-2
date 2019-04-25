<?php 

print "Digite o número da base: ";
$base = (int) fgets(STDIN);

print "Digite o número do expoente: ";
$exp = (int) fgets(STDIN);
$num = $base ** $exp;

print "$base elevado a $exp é igual a $num \n";

?>