<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=7,9,10">
    <title>Control de Alumnos</title>
    <link rel="stylesheet"  href="estilos.css" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#btn1').click(function () {
                $('#el1').show();
                $('#btn1').hide();

            });
            $('#btn2').click(function () {
                $('#el1').hide();
                $('#btn1').show();
            });
            $('#ejecutar').click(function () {
                var priValor = $('#valor1').val();
                var segValor = $('#valor2').val();
                var opSeleccionada = document.getElementById("aritmetica").value;
                if ($('#valor1').val() == "" || $('#valor1').val() == "Primer numero" || $('#valor2').val() == "" || $('#valor2').val() == "Segundo numero") {
                    alert("Ingrese los números");
                    var resultado = 0;
                }
                else {
                    if (opSeleccionada == '') {
                        alert("Opción no seleccionada");
                        var resultado = '';
                    }
                    else {
                        if (opSeleccionada == 'suma') {
                            var resultado = parseInt(priValor) + parseInt(segValor);

                        }
                        else if (opSeleccionada == 'resta') {
                            if (segValor > priValor) {
                                alert(" Error NO se puede obtener numeros negativos intentente de nuevo");
                                var resultado = 0;
                            }
                            else {
                                var resultado = parseInt(priValor) - parseInt(segValor);
                            }
                        }
                        else {
                            var resultado = parseInt(priValor) * parseInt(segValor);
                        }

                    }

                }
                document.getElementById("resultado").value = resultado;
                $('#valor1').val('');
                $('#valor2').val('');

            });
        });
</script>
</head>
<body>
    <div class="panel-1" id="el1"><B>Calculadora<B></div>
    <br>
    <form class = "formulario">
        <input type="number" class="input" id="valor1" name="num1" placeholder="Primer numero"><br><br>
        <input type="number" class="input" id="valor2" name="num2" placeholder="Segundo numero">
        <br><br>
        <label class="selector-form" for="aritmetica"> Operacion: </label>
        <br>
        <select class="selector" id="aritmetica">
            <option value="">Selecciona una opción </option>
            <option value="suma">Suma</option>
            <option value="resta">Restar</option>
            <option value="multiplicar">Multiplicar</option>
        </select>
        <button type="button" id="ejecutar">Ejectuar</button>
        <br>
        <label class="selector-form"> Resultado:</label>
        <br>
        <input type="text" class="input" id="resultado" name="num2" placeholder="Total">
    </form>
    <br>
    
    <div>
    <button id="btn1">Activar</button>
    <button id="btn2">Ocultar</button>
    </div>
    <br>   

</body>
</html>