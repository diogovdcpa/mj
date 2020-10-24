<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diogo</title>
</head>

<body>
    <form action="<?php URL_BASE ."exercicio/calcularEx01" ?>" method="post">
        Nome 01:<input type="text" name="txt01">
        Nome 02:<input type="text" name="txt02">
        <input type="submit" value="imprimir" class="btn">
        <br><span><b><?php echo isset($resultado) ? $resultado:""; ?></b></span>
    </form>
</body>

</html>