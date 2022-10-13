<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUMA</title>
</head>

<style>
    body{background-color:plum; align-content: center}
    h1{font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif}
    label{font-family:Arial, Helvetica, sans-serif}
    input{height: 20px;}
    a{color: black; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif}
    div{background-color:violet; width: 200px}
</style>

<body>
    <center>
        <h1>SUMA</h1><br>
        <img src="https://definicion.de/wp-content/uploads/2009/06/signo-mas.png" alt="" height="100px" width="100px"><br><br>
        <label for="numero1">Ingresa un número:</label>
        <input type="text" id="numero1" onchange="suma();"><br>
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
    // si la respuesta que se espera es sumar
    function suma() {
        let resultado = "";
        var numero1 = document.getElementById('numero1').value;

        for (i = 1; i <= 10; i++) {
            var suma = parseInt(numero1) + parseInt(i);
            resultado+=`<label>${i}+${numero1}=${suma}</label><br>`;
        }
        document.getElementById('resultado').innerHTML = resultado;

    }
</script>

</html>