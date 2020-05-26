<?php
 
include('Conexion_BD.php');

if (isset($_POST['register'])) {
    if (strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1) {

        $email = $_POST['email'];
        $clave = $_POST['password'];

        $consulta="SELECT * FROM usuarios WHERE  Correo='$email' and Clave='$clave'";
        $resultado=mysqli_query($conex,$consulta);

        $filas=mysqli_num_rows($resultado);

        if($filas>0){
            header("location:Carrito.html");
        } else {
            echo" <SCRIPT LANGUAGE='Javascript'  TYPE='text/Javascript'> alert('-- Verifica tus datos --' )
            window.location='Registro(1).html' </SCRIPT>";
        }

        if($email=="alberto180310@gmail.com" && $clave=="123"){
            header("location:Administrar.html");
        } else{
            echo" <SCRIPT LANGUAGE='Javascript'  TYPE='text/Javascript'> alert('-- Verifica tus datos --' )
            window.location='Registro(1).html' </SCRIPT>";
        }

        mysqli_free_result($resultado);
        mysqli_close($conex);
    } else {
        echo" <SCRIPT LANGUAGE='Javascript'  TYPE='text/Javascript'> alert('-- Complete los Campos --' )
            window.location='Registro(1).html' </SCRIPT>";  
    }
}

if (isset($_POST['crear'])) {
    header("location:Registro.html");
}

?>

