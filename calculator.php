<?php
$Operator=readline("welke operator wil je gebruiken? (+, -)");
$getal1=readline("wat is het eerste getal?");
$getal2=readline("wat is het tweede getal?");

if($Operator == "+"){
    echo("het antwoord is ".($getal1+$getal2));
}else if($Operator == "-"){
    echo("het antwoord is ".($getal1-$getal2));
}

