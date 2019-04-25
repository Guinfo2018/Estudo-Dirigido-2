<?php 

print "Digite a primeira nota: ";
$n1 = (float) fgets(STDIN);

print "Digite a segunda nota: ";
$n2 = (float) fgets(STDIN);

$media = ($n1+$n2)/2;

if($media==10){
    print "Aluno aprovado Distinção";   
}elseif($media<7){
    print "Aluno reprovado com media $media";
}elseif($media>=7){
    print "Aluno aprovado com media $media";
}else{}

?>