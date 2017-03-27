<!DOCTYPE html>
<html>
    <head>
        <title>Calculadora</title>
        <style type="text/css">
            .auto-style1{
                margin-left: 116px;
                margin-top: 20px;
            }
            .auto-style2{
                margin-left: 127px;
            }
            .auto-style3{
                margin-left: 170px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div style="background-color: #812B4F; margin-left: 500px; width: 400px">
            <form action="Resultado.php" method="post">
                <select name="Operador" class="auto-style1" style="width: 169px">
                    <option value="Suma">Suma</option>
                    <option value="Resta">Resta</option>
                    <option value="Multiplicacion">Multiplicacion</option>
                    <option value="Division">Division</option>
                </select><br/>
                <p style="color: white; text-align: center">Valor 1: </p>
                <input type="text" name="Valor1" class="auto-style2"><br>
                <p style="color: white; text-align: center">Valor 2: </p>
                <input type="text" name="Valor2" class="auto-style2"><br>
                <br>
                <input type="submit" value="Calcular" class="auto-style3">            
            </form>
        </div>
    </body>
</html>