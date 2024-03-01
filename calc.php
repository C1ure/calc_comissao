<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet" type="text/css" >
    <title>Resultado</title>
</head>
<body>
    <div class="container">
    <a href="./index.html"> <- Voltar </a>
    <h2> Resutado da comissão </h2>
 
    <?php
        $vendedor = $_POST['vendedor'];
        $vendas = $_POST['vendas'];
        $comissao = $_POST['comissao'];
        // Faça o que deseja com esses valores
        // Por exemplo, você pode calcular a comissão aqui
        // Exemplo de saída dos valores recebidos
        echo "Vendedor: $vendedor <br>";
        echo "Vendas: $vendas <br>";
        echo "Comissão: $comissao <br>";
        $total = $vendas * ($comissao/100);
        echo "Total: $total";
        echo("<p>");

        if($total >= 1000 ){
            echo("Você ganhou acima de 1000, PARABENS !! ");
            echo("<p>");
        }else {
            echo("Se esforçe mais, meta não concluida");
            echo("<p>");
        }
    ?>
    


 </div>
</body>
</html>