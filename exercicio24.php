<?php

// Array de produtos organizados por categorias
$categorias = [
    "Máquina" => [
        [
            "nome" => "Notebook SAMSUNG Galaxybook 2",
            "preco" => 3500.00
        ]
    ],
    "Periféricos" => [
        [
            "nome" => "Mouse Logitech",
            "preco" => 45.90
        ],
        [
            "nome" => "Teclado Logitech",
            "preco" => 150.00
        ],
        [
            "nome" => "Monitor LG 24″",
            "preco" => 890.50
        ],
        [
            "nome" => "Webcam Logitech",
            "preco" => 220.00
        ]
    ]
];

echo "=== CATÁLOGO DE PRODUTOS ===\n\n";

// FOREACH ANINHADO (EXTERNO): percorre cada categoria
foreach ($categorias as $nomeCategoria => $produtos) {
    echo "CATEGORIA: " . strtoupper($nomeCategoria) . "\n";
    echo str_repeat("=", 50) . "\n";
    
    // FOREACH ANINHADO (INTERNO): percorre cada produto da categoria
    foreach ($produtos as $index => $produto) {
        echo "  • Produto " . ($index + 1) . ":\n";
        echo "    Nome: " . $produto["nome"] . "\n";
        echo "    Preço: R$ " . number_format($produto["preco"], 2, ',', '.') . "\n";
        echo "    " . str_repeat("-", 40) . "\n";
    }
    
    echo "\n";
}

// Calculando o total geral
$totalGeral = 0;
foreach ($categorias as $produtos) {
    foreach ($produtos as $produto) {
        $totalGeral += $produto["preco"];
    }
}

echo "TOTAL GERAL: R$ " . number_format($totalGeral, 2, ',', '.') . "\n";

?>
