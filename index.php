<?php
$elementos = array();

while (true) {
    echo "Escolha uma opção:\n";
    echo "1 - Inserir elemento\n";
    echo "2 - Listar elementos\n";
    echo "3 - Excluir elemento\n";
    echo "4 - Ver a quantidade de elementos registrados\n";
    echo "5 - Listar elementos na ordem inversa\n";
    echo "6 - Encerrar o programa\n";

    $opcao = intval(readline("Opção: "));

    switch ($opcao) {
        case 1:
            $numero = intval(readline("Insira um número: "));
            if ($numero >= 0) {
                array_push($elementos, $numero);
                echo "Elemento registrado com sucesso!\n";
            } else {
                echo "Não é permitido registrar números negativos.\n";
            }
            break;

        case 2:
            echo "Elementos registrados: " . implode(', ', $elementos) . "\n";
            break;

        case 3:
            $indice = intval(readline("Digite o índice do elemento a ser excluído: "));
            if (isset($elementos[$indice])) {
                array_splice($elementos, $indice, 1);
                echo "Elemento excluído com sucesso!\n";
            } else {
                echo "Índice inválido.\n";
            }
            break;

        case 4:
            echo "Quantidade de elementos registrados: " . count($elementos) . "\n";
            break;

        case 5:
            echo "Elementos na ordem inversa: " . implode(', ', array_reverse($elementos)) . "\n";
            break;

        case 6:
            echo "Encerrando o programa.\n";
            exit();

        default:
            echo "Opção inválida. Tente novamente.\n";
            break;
    }
}
?>
