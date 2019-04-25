<?php 
 print "\nDigite um número: ";
 $a = trim(fgets(STDIN));

 print "\nDigite um número: ";
 $b = trim(fgets(STDIN));

 if ($a>$b) {
    print "O maior número é $a";
 } else{
    print "O maior número é $b";
}

?>