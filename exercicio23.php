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

Data: 16 de Outubro de 2025
Descritivo: Array associativo com nome e preço de cada produto.
*******************************************************************************/

// (array associativo)
$produtos = [
    [
        "nome" => "Notebook SAMSUNG GalaxyBook 2",
        "preco" => 3500.00
    ],
    [
        "nome" => "Mouse Logitech",
        "preco" => 45.90
    ],
    [
        "nome" => "Teclado Logitech",
        "preco" => 150.00
    ],
    [
        "nome" => "Monitor LG 24",
        "preco" => 890.50
    ],
    [
        "nome" => "Webcam Logitech",
        "preco" => 220.00
    ]
];

// Exibindo os produtos
echo "=== LISTA DE PRODUTOS ===\n\n";

foreach ($produtos as $index => $produto) {
    echo "Produto " . ($index + 1) . ":\n";
    echo "Nome: " . $produto["nome"] . "\n";
    echo "Preço: R$ " . number_format($produto["preco"], 2, ',', '.') . "\n";
    echo "-------------------\n";
}

// Calculando o total
$total = 0;
foreach ($produtos as $produto) {
    $total += $produto["preco"];
}

echo "\nTotal de todos os produtos: R$ " . number_format($total, 2, ',', '.') . "\n";

?>




