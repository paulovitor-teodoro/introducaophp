<?php
 $Estados = [
     ['SP' => 'São Paulo'],
     ['RJ' => 'Rio de Janeiro'],
     ['MG' => 'Minas Gerais']
 ];
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Array Multidimensional</title>
    </head>
    <body>
        <?php
        foreach ($Estados as $estado) {
        foreach ($estado as $uf => $nome) {
        echo "UF: $uf - Estado: $nome <br>";
    }
}
        ?>
        
    </body>

</html>