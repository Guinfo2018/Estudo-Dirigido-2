<?php 
 print "DIGITE O SEXO (F/M): ";
$sexy = fgetc(STDIN);

if($sexy == "F"){
    print "F - Feminino";
}elseif ($sexy == "M"){
    print "M - Masculino";
}else{
    print "Sexo inválido";
}


?>