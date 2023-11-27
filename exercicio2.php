<!-- Crie um algoritmo que solicite a entrada de um número, 
e exiba a tabuada de 0 a 10 de acordo com o número solicitado -->

<html>
    <form method="post">
        <input type="text" name='value' placeholder="digite um numero">
        <input type="submit">
    </form>

    <?php
    
        if(!isset($_POST['value'])){
            echo '<h1>Digite um valor para começar!';
        }else{
            
            $numero = $_POST['value'];
            for($i = 0; $i<=10; $i++){
                echo '<h1>' . $numero . ' x ' . $i . ' = ' . $numero*$i;
            }
        }
    
    ?>

</html>