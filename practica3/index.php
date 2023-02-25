<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css" type="text/css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var count = 1;
            var NEntrada;
            $("#btn1").click(function() {
                NEntrada = 
                    '<di id="row">'+
                    '<label for="entrada" class="jugador">Jugador: ' + count + '</label>' +
                    '<input type="text" class="form-control m-input">' +
                    '<button class=" btn-danger" id="btn2" type="button">' +
                    '<img src =elimina.png></button> </div>';
            $('#conte').append(NEntrada);
            count++;
            });

            $("body").on("click", "#btn2", function () {
                count--;
                $(this).parents("#row").remove();
            });
    });
    </script>
    
</head>
<body>
    <div><h1>Practica 3</h1><br>
        <div class="panel">
            <form>
                <label for="equipo"> Equipo de futbol: </label>
                <input type="text" name="" id="equipo" class="input-eq"><br>
                <button id="btn1" type="button" class="add">Agregar jugador</button>
                <div id="conte"></div>
            </form>
        </div>
</body>
</html>