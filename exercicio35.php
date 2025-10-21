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
Descritivo: : Crie um procedimento imprimirArray que receba um array e imprima todos os seus elementos.
***************************/
function imprimirArray($array) {
    if (!is_array($array)) {
        echo "O valor informado não é um array.\n";
        return;
    }

    foreach ($array as $elemento) {
        echo $elemento . "\n";
    }
}

// Aray vai aqui;
$meuArray = [10, 20, 30, 40, 50];

imprimirArray($meuArray);
?>

