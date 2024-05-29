<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Estoque</title>
</head>
<body>
    <h1 class="titulo">ESTOQUE</h1>
    <?php require_once("./menu.php");?>
    <div class="container">
        
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Nome do estoque</th>
                <th>quantidade atual do estoque</th>
                <th>quantidade minima do estoque</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once("./estoquebd.php");
            if($totalRegistros > 0){
                foreach($dados as $linha){
                    ?>
                    <tr>
                        <td align="center"><?=$linha["IDEstoque"];?></td>
                        <td><?=$linha["nomeEstoque"];?></td>
                        <td><?=$linha["quantAtualEstoque"];?></td>
                        <td><?=$linha["quantMinimaEstoque"];?></td>
                    </tr>
                    <?php
                           }
                        }
                    ?>
            </tbody>
        </table>
    </div>
</body>
</html>