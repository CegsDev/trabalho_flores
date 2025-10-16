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

Data: 16 de Outubro de 2025
Descritivo: Dado no formato "chave: valor".
*******************************************************************************/
<?php
$aluno = [
    "nome" => "Maikon Duarte",
    "idade" => 20,
    "curso" => "Engenharia de Software"
];

// Calcula o tamanho máximo da chave para alinhar os valores
$tamanhoChaveMax = 0;
foreach ($aluno as $chave => $valor) {
    $len = strlen($chave);
    if ($len > $tamanhoChaveMax) {
        $tamanhoChaveMax = $len;
    }
}

// Cabeçalho
echo str_repeat("=", 30) . "\n";
echo "      DADOS DO ALUNO\n";
echo str_repeat("=", 30) . "\n";

// Imprime cada linha com chave: valor
foreach ($aluno as $chave => $valor) {
    printf("%-{$tamanhoChaveMax}s: %s\n", $chave, $valor);
}

// Rodapé
echo str_repeat("=", 30) . "\n";
?>


