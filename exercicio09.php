<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2A
Componentes:
 25148436-2 - Carlos Eduardo Galdino Sousa 
 25001132-2 - Cauã Chaerki Bobato
 25161143-2 - Gabriel Hikari Uchida Requião 
 25229817-2 - Guilherme Garcia Da Cruz 
 25201449-2 - Luan Raio Amorim 
 25119616-2 - Lucas Henrique Zeferino
 25165588-2 - Maikon V. Duarte dos Santos
 25178371-2 - Pedro Henrique Santos Sinhuk

Data: 08 de Outubro de 2025
Descritivo: Escreva um programa que leia números do usuário até que ele digite 0 e, no final, mostre a soma de todos os números digitados.
*******************************************************************************/
     //Declarar variável

$soma = 0;

    echo "Digite números para realizar uma soma (Para sair do programa, digite 0) :\n";

     //Leia os números

$numero = (int) readline("Digite um número: ");
    while ($numero != 0) {
         $soma += $numero;

    // Leia o próximo número
    $numero = (int) readline("Digite um número: ");
    }







?>