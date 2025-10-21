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
Descritivo: Crie um menu de opções (1. Iniciar, 2. Parar, 3. Sair) e use do-while para mostrar o menu até que o usuário escolha "Sair".
*******************************************************************************/
    $opcao = 0;

        do {
            echo "\nMenu de Opções:\n";
            echo "1. Iniciar\n";
            echo "2. Parar\n";
            echo "3. Sair\n";
            echo "Escolha uma opção: ";

         $opcao = (int)trim(fgets(STDIN));

    //um array de mensagens indexado pelas opções válidas
        $mensagens = [
             1 => "Você escolheu: Iniciar\n",
             2 => "Você escolheu: Parar\n",
             3 => "", // não mostra nada na saída final ao sair
    ];

    //mensagem correspondente, se existir
    // Isso evita if, usando apenas array
        echo $mensagens[$opcao] ?? "Opção inválida. Tente novamente.\n";

         } while ($opcao !== 3);

        echo "Programa encerrado.\n";
?>

