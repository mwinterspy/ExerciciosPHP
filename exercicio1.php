<!-- Crie um algoritmo que receba um número digitado pelo usuário e 
verifique se esse valor é positivo, negativo ou igual a zero. 
A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero". -->

<html>

<form method="post">
    <input type="text" name='valor' placeholder="digite um número real">
    <input type="submit" value="enviar">
</form>


<?php
if (!isset($_POST['valor'])) {
    echo '<h1>Digite um numero para prosseguir</h1>';
} else {
    $numero = $_POST['valor'];
    echo "<h1> O valor é: " . $numero;
    if ($numero > 0) {
        echo "<h1>O valor é positivo";
    } elseif ($numero < 0) {
        echo '<h1>O numero é negativo';
    }else{
        echo '<h1>Nem positivo nem negativo. Muito pelo contrário</h1>';
    }


}



?>

</html>