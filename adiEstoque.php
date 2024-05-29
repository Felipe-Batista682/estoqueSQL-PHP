<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>ADICIONAR PRODUTO</title>
</head>
<body>
    
   <h1 class="titulo">ADICIONAR PRODUTO</h1>

   <?php require_once("./menu.php");?>
   
   <div class="container">
   <form action="./adiEstoquebd.php" method="post">
    <div class="row">
        <div class="col">
            <label for="nome do estoque">Nome do estoque</label>
            <input
            type="text"
            name="nome"
            id="nome"
            placeholder="Nome do produto">
         </div>
    </div>
   <div class="row">
        <div class="col">
            <label for="quantidade atual do estoque">quantidade atual do estoque</label>
            <input
            type="text"
            name="quantAtual"
            id="quantAtual"
            placeholder="quantidade Atual">
        </div> 
    </div>
   <div class="row">
            <div class="col">
            <label for="quantidade minima do estoque">quantidade minima do estoque</label>
            <input
            type="text"
            name="quantMinima"
            id="quantMinima"
            placeholder="quantidade Minima">
        </div> 
    </div>
    <div class="row">
                <div class="col">
                    <input type="submit" value="SALVAR">
                </div>
            </div>
        </form>
    </div>
</body>
</html>