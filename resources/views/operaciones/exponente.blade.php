<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXPONENTE</title>
</head>

<style>
    body{background-color:black; align-content: center; color:white}
    h1{font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif}
    label{font-family:Arial, Helvetica, sans-serif}
    input{height: 20px;}
    a{color:gold; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif}
    div{background-color:darkslateblue; width: 200px}
</style>

<body>
    <center>
        <h1>EXPONENTE</h1><br>
        <img src="https://miracomosehace.com/wp-content/uploads/2020/03/poner-exponentes-en-word.jpg" alt="" height="150px" width="300px"><br><br>
        <label for="numero1">Ingresa un número:</label>
        <input type="text" id="numero1" onchange="exponente();"><br>
        <br>
        <div id="resultado"></div>

        <br>
        <br>
        <a href="http://localhost/lrvl/calculadora/public/operaciones/index">MENU</a><br>
        <br>
        <a href="http://localhost/lrvl/calculadora/public/operaciones/salir">SALIR</a><br>
    </center>
</body>

<script>
    function exponente() {
        let resultado = "";
        var numero1 = document.getElementById('numero1').value;

        for (i = 1; i <= 10; i++) {
            var exponente =  Math.pow(numero1, i);
            resultado+=`<label>${i}^${numero1}=${exponente}</label><br>`;
        }
        document.getElementById('resultado').innerHTML = resultado;

    }
</script>


</html>