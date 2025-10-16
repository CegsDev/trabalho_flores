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
