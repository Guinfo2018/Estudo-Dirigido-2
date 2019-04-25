<?php 
 
print "Digite uma letra: ";
$letter = fgetc(STDIN);

if($letter =="a" or $letter =="e"or $letter =="i" or $letter =="o"or $letter =="u"){
    print "$letter é vogal";
}else{
    print"$letter é consoante";
}

?>