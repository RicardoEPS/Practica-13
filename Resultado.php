<?php
    if ($_POST {"Valor1"} != "" and $_POST ["Valor2"] != "")
    {
        if($_POST ["Operador"] == "Suma")
        {
            echo 'El resultado de la suma es: <br>';
            echo $Resultado = $_POST ["Valor1"] + $_POST ["Valor2"];
            echo '<br /><a href="index.php">Volver</a>';
        }
        elseif($_POST ["Operador"] == "Resta")
        {
            echo 'El resultado de la suma es: <br>';
            echo $Resultado = $_POST ["Valor1"] - $_POST ["Valor2"];
            echo '<br /><a href="index.php">Volver</a>';
        }
        elseif($_POST ["Operador"] == "Multiplicacion")
        {
            print 'El resultado de la suma es: <br>';
            print $Resultado = $_POST ["Valor1"] * $_POST ["Valor2"];
            print '<br /><a href="index.php">Volver</a>';
        }
        elseif($_POST ["Operador"] == "Division")
        {
            print 'El resultado de la suma es: <br>';
            print $Resultado = $_POST ["Valor1"] / $_POST ["Valor2"];
            print '<br /><a href="index.php">Volver</a>';
        }
    }
    else
    {
        print ("Ingresa alg&uacute; n Valor");
        print ('<br /><a href="index.php>Volver</a>');
    }
?>