<?php

$pessoa = [ //variável $pessoa TODAS ELAS SÃO TAGS HTML 
    "nome" => "Benedita", //da linha 10 a 14 se chama array
    "sobrenome" => "Souza",
    "idade" => 29 , //"idade", "nome", "sobrenome", "cpf" é chamado de parametros
    "cpf" => 11111111111,
];

echo $pessoa["idade"];
if ($pessoa["idade"] >= 18 ){
    echo "{$pessoa["nome"]} É maior de idade ";

}else{
echo "Sou menor de idade";
}

var_dump($pessoa); //pegar dados dentro da lista