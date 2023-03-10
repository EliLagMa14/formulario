<?php 
require_once '/xampp/htdocs/admin/pages/forms/php/conexion.php';

$con = conectabd();

    $Nombre =  $_POST['nombre'];
    $fechaNac =  $_POST['InputfechaNac'];
    $edads = $_POST['Edad'];
    $bachillerato= $_POST['bachillerato'];
    $promedio= $_POST['promedio'];
    $municipio= $_POST['municipio'];
    $certificados= $_POST['customRadio'];
   
    $fecha_mysql = date("Y-m-d", strtotime($fechaNac));
    

    $imageNombre = $_FILES['fotos']['name'];
    
    if (isset($imageNombre) && $imageNombre) {
        $tipo = $_FILES['fotos']['type'];
        $temp = $_FILES['fotos']['tmp_name'];

        if (!((strpos($tipo, 'gif') || strpos($tipo, 'png') || strpos($tipo, 'jpeg')))) {
            header("location: ../general.php");
        } else {
            $insertDatos = "INSERT INTO alumnos (Nombre,fechaNac,edad,bachillerato,promedio,municipio,certificado,foto) VALUES('".$Nombre."','".$fecha_mysql."',".$edads.", '".$bachillerato."',".$promedio.",'".$municipio."', '".$certificados."','".$imageNombre."')";
            $ejecutarInsertar = mysqli_query($con, $insertDatos);
            if($ejecutarInsertar){
                move_uploaded_file($temp, '/xampp/htdocs/admin/image/'.$imageNombre);
                header("location: ../general.php");
            }else{
                echo "ocurrio un error en el servidor";
            }
        }
    }
?>
