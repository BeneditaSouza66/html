<?php

$nome = "Benedita"; //DECLARAR VARIÁVEL
$sobrenome = "Souza"; //$: É CHAMADO DE SIFRÃO
$idade = 29;


echo "<h2>print_r</h2>";

$pessoa = [ //variável TODAS ELAS SÃO TAGS HTML 
    "nome" => "Benedita", //da linha 10 a 14 se chama
    "sobrenome" => "Souza",
    "idade" => 29
];

print_r($pessoa); //exibir os dados de dentro de um array
echo "<br><hr>"; // o hr: criA LINHAS
echo "<h2>printf</h2>"; // o echo: signica escreva

printf("Meu nome é: %s", $nome);
echo "<br>";

printf("Meu sobrenome é: %s", $sobrenome); //imprimir na tela e consegue passar parametros dentro dele
echo "<br>"; //para dar um enter na página

printf("Minha idade é: %d", $idade);
echo "<hr>"; //Pular 1 linha

vprintf("Meu nome é: %s %s e minha idade é: %d", 
$pessoa
);


