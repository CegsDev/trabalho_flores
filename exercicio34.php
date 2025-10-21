<?php
/**************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2A
Componentes:
 25119616-2 -Lucas Henrique Zeferino
 25148436-2 - Carlos Eduardo Galdino Sousa 
 25165588-2 - Maikon V. Duarte dos Santos
 25161143-2 - Gabriel Hikari Uchida Requião 
25178371-2 - Pedro Henrique Santos Sinhuk
25229817-2 - Guilherme Garcia Da Cruz 
25201449-2 - Luan Raio Amorim 

Data: 08 de Outubro de 2025
Descritivo: Elabore um procedimento verificarParImpar que receba um número e imprima se ele é "Par" ou "Ímpar".
***************************/
function verificarParImpar($numero) {
    if (!is_numeric($numero)) {
        echo "Valor inválido. Insira um número.\n";
        return;
    }

    if ($numero % 2 == 0) {
        echo "O número $numero é PAR.\n";
    } else {
        echo "O número $numero é ÍMPAR.\n";
    }
}

// Digite o seu número aqui;
$numero = 13;

// Aqui vai verificar se o número é par ou ímpar;
verificarParImpar($numero);
?>

