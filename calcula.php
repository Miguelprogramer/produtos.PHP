<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo da Compra</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    $produto1   = $_POST["produto1"];	
    $preco1     = $_POST["preco1"];
    $qtde1      = $_POST["qtde1"];

    $produto2   = $_POST["produto2"];	
    $preco2     = $_POST["preco2"];
    $qtde2      = $_POST["qtde2"];	

    $total1 = $preco1 * $qtde1;
    $total2 = $preco2 * $qtde2;
    $final = $total1 + $total2;
?>

<div class="resumo-container">
    <h1>Resumo da Compra</h1>
    <div class="produto">
        <h2>Produto 1</h2>
        <p><strong>Nome:</strong> <?php echo $produto1; ?></p>
        <p><strong>Preço:</strong> R$ <?php echo number_format($preco1, 2, ',', '.'); ?></p>
        <p><strong>Quantidade:</strong> <?php echo $qtde1; ?></p>
        <p><strong>Total:</strong> R$ <?php echo number_format($total1, 2, ',', '.'); ?></p>
    </div>

    <div class="produto">
        <h2>Produto 2</h2>
        <p><strong>Nome:</strong> <?php echo $produto2; ?></p>
        <p><strong>Preço:</strong> R$ <?php echo number_format($preco2, 2, ',', '.'); ?></p>
        <p><strong>Quantidade:</strong> <?php echo $qtde2; ?></p>
        <p><strong>Total:</strong> R$ <?php echo number_format($total2, 2, ',', '.'); ?></p>
    </div>

    <h2 class="total-final">Total da Compra: R$ <?php echo number_format($final, 2, ',', '.'); ?></h2>
    
    <a href="index.html" class="btn-voltar">Voltar</a>
</div>

</body>
</html>
