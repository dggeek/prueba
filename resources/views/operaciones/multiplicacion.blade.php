<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MULTIPLICACION</title>
</head>

<style>
    body{background-color:sandybrown; align-content: center}
    h1{font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif}
    label{font-family:Arial, Helvetica, sans-serif}
    input{height: 20px;}
    a{color: black; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif}
    div{background-color:peru; width: 200px}
</style>

<body>
    <center>
        <h1>MULTIPLICACIÓN</h1><br>
        <img src="https://definicion.de/wp-content/uploads/2010/08/multiplicacion.png" alt="" height="100px" width="100px"><br><br>
        <label for="numero1">Ingresa un número:</label>
        <input type="text" id="numero1" onchange="multiplicacion();"><br>
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
    
    function multiplicacion() {
        let resultado = "";
        var numero1 = document.getElementById('numero1').value;

        for (i = 1; i <= 10; i++) {
            var multiplicacion = parseInt(numero1) * parseInt(i);
            resultado+=`<label>${i}*${numero1}=${multiplicacion}</label><br>`;
        }
        document.getElementById('resultado').innerHTML = resultado;

    }
</script>

</html>