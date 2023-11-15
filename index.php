<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício BinDec</title>
</head>
<body>
    <?php 
        require 'autoload.php';
        use class\BinDec;

        $number = (string) $_POST['numBin'] ?? 0;
        $conversion = new BinDec($number);
    ?>

    <h1>Exercício PHP</h1>
    <h3>Conversão de número binário para decimal</h3>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="bin">Digite sua sequência de números binários:</label></br>
        <input type="text" name="numBin" id="bin" value="<?=$number?>" pattern="{1,8}$" require></br></br>
        <input type="submit" value="Enviar">
    </form>

    <section>
        <h1>O resultado da sua conversão</h1>
        <h4>O número binário <?=$number?> em decimal é <?=$conversion->conversionBinDec()?></h4>
    </section>


</body>
</html>