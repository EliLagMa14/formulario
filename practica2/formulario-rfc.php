<html>
<head>
    <title>RFC-API</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=7,9,10">
    <link rel="shortcut icon" href="cloud.ico">
    <link href="estilo.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script>
        //Single Page Application
        $(document).ready(function () {
            $('#ejecutar').click(function () {
                var cad1;
                var cad2;
                var cad3;
                const characters ='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
                let result1= '';
                var fecha = document.getElementById("start").value;
                if ($('#valor1').val() == "" || $('#valor1').val() == "Nombre" || $('#valor2').val() == "" || $('#valor2').val() == "Apellido Paterno" ||  $('#valor3').val() == "" || $('#valor3').val() == "Apellido Materno" || $('#start').val() == "") {
                    alert("campos Vacios");
                }
                else {
                   cad1 = $('#valor2').val().substring(0,2);
                   cad2 = $('#valor3').val().substring(0,1);
                   cad3 = $('#valor1').val().substring(0,1);
                    var año =  fecha.substring(2,4)+ fecha.substring(5,7)+ fecha.substring(8,10);
                    const charactersLength = characters.length;
                    for ( let i = 0; i < 3; i++ ) {
                        result1 += characters.charAt(Math.floor(Math.random() * charactersLength));
                    }
                }
                $('#resultado').val(cad1.toUpperCase()+cad2.toUpperCase()+cad3.toUpperCase()+año+result1);
            });
            $('#consultar').click(function () {
                var id = document.getElementById("id").value;
                if($('#id').val()== '' || $('#id').val() == "Id"){
                    alert("Debe Ingresar su ID");
                }
                else{
                    $.ajax({
                        url: "https://jsonplaceholder.typicode.com/users/"+id,
                        method: "GET",
                        success: function(data) {
                            $('#nombre').val(data.name);
                            $('#email').val(data.email);
                            $('#phone').val(data.phone);
                        },
                        error: function(error){
                            alert("No existe el usuario");
                            $('#nombre').val("");
                            $('#email').val("");
                            $('#phone').val("");
                        }
                    });
                }
            });
            
        });
    </script>
</head>
<body>
    <div class="panel-1" id="el1"><B>Generar RFC - AJAX Api Rest<B></div>
    <br>
    <form class = "formulario" id="formu">
        <label class="selector-form" for="start">Nombre:</label><br>
        <input type="text" class="input" id="valor1" name="num1" placeholder="Nombre"><br><br>
        <label class="selector-form" for="start">Apellido Paterno:</label><br>
        <input type="text" class="input" id="valor2" name="num2" placeholder="Apellido Paterno"><br><br>
        <label class="selector-form" for="start">Apeliido Materno:</label><br>
        <input type="text" class="input" id="valor3" name="num1" placeholder="Apeliido Materno"><br><br>
        <br><br>
        <label class="selector-form" for="start">Fecha de Nacimiento:</label>
        <input type="date" id="start">
        <br><br>     
        <button type ="button" class ="button1" id="ejecutar">Generar RFC</button>
        <br>
        <label class="selector-form">RFC:</label>
        <br>
        <input type="text" class="input" id="resultado" name="num2" readonly>
    </form>
    <form class="formulario" id="form">
        <label class="selector-form">ID:</label>
        <input type="number" class="input" id="id" name="id" placeholder="Id">
        <br><br>
        <button type="button" class="button1" id="consultar">Consultar</button>
        <br>
        <label class="selector-form">Nombre:</label><br>
        <input type="text" class="input" id="nombre" name="num2" placeholder="Nombre" readonly><br><br>
        <label class="selector-form">Email:</label><br>
        <input type="text" class="input" id="email" name="num1" placeholder="Email" readonly><br><br>    
        <label class="selector-form">Phone:</label>
        <input type="text" class="input" id="phone" name="num2" placeholder="phone" readonly>
    </form>
    <br>
</body>
</html>