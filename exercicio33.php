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
Descritivo: Crie um procedimento mostrarTabuada que receba um número e imprima sua tabuada de 1 a 10.
***************************/
// digite o seu número aqui;
$numero = 7;  

if(is_numeric($numero)) {
    // Imprime a tabuada do número
    for ($i = 1; $i <= 10; $i++) {
        echo $numero . " x " . $i . " = " . ($numero * $i) . "\n";
    }
} else {
    echo "Por favor, insira um número válido.\n";
}
?>

