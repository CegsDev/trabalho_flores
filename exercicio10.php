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
Descritivo: : Crie um programa que conte quantos dígitos tem um número inteiro fornecido pelo usuário.
*******************************************************************************/
   echo "Digite um número inteiro: ";
        $linha = fgets(STDIN); // Lê do terminal
        $numero = (int)$linha;

// Transforma em positivo (para evitar problemas com números negativos)
    if ($numero < 0) {
        $numero = $numero * -1;
}

// Início da contagem
        $contador = 0;

// Se o número for 0, ele tem 1 dígito
    if ($numero === 0) {
    $contador = 1;
}   else {
    while ($numero > 0) {
        $numero = (int)($numero / 10);
        $contador = $contador + 1;
    }
}

echo "O número tem $contador dígito(s).\n";
?>

