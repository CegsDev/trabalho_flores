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
Descritivo: impressão do nome e preço de cada produto, com FOREACH Aninhado.
*******************************************************************************/

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



