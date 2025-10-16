<?php

// Array de produtos (array associativo)
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
        "nome" => "Monitor LG 24"",
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
