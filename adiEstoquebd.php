<?php
    //echo("<pre>");
    //    print_r($_POST);
    //echo("</pre>");

    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $quantAtual = filter_input(INPUT_POST, "quantAtual", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $quantMinima = filter_input(INPUT_POST, "quantMinima", FILTER_SANITIZE_FULL_SPECIAL_CHARS);


    try {
        require_once("./conexao/conexao.php");

        $comandoSQL = $conexao->prepare("
            INSERT INTO estoque (
                nomeEstoque,
                quantAtualEstoque,
                quantMinimaEstoque)
            VALUES(
                :nomeEstoque,
                :quantAtualEstoque,
                :quantMinimaEstoque
                )
        ");

        $comandoSQL->execute(array(
            ":nomeEstoque"        => $nome,
            ":quantAtualEstoque"  => $quantAtual,
            ":quantMinimaEstoque" => $quantMinima,
        ));

        if($comandoSQL->rowCount() > 0){
            //echo("Inserido com sucesso!");
            header("location:./estoque.php");
            exit();

        }
        else{
            echo("Erro na inserção.");
        }
    } catch (PDOException $erro) {
        echo("Entre em contato com o suporte.");
    }