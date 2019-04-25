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

$nums = array($a, $b, $c, $d, $e);
rsort($nums);

print $nums[0];



?>