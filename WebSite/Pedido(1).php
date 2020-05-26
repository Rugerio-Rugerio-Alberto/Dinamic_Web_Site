<?php

include("Conexion_BD.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['telephone']) >= 1 && strlen( $_POST['subject']) >= 1 && strlen($_POST['num']) >= 1 && strlen($_POST['postal']) >= 1 && strlen($_POST['direccion']) >= 1 ) {
    
        
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $fon = trim($_POST['telephone']);
        $producto = trim($_POST['subject']);
        $cantidad = trim($_POST['num']);
        $postal = trim($_POST['postal']);
        $address = trim($_POST['direccion']);
        $fechareg = date("d/m/y");
        
	    $consulta = "INSERT INTO `pedidos` (`Id_Pedido`, `Username`, `Correo`, `Telefono`, `PRODUCTO`, `CANTIDAD`, `Postal`, `Direccion`, `Fecha_reg`) VALUES (NULL,'$name','$email','$fon','$producto','$cantidad','$postal','$address','$fechareg')";
        $resultado = mysqli_query($conex,$consulta);
        
	    if ($resultado) {
            echo" <SCRIPT LANGUAGE='Javascript'  TYPE='text/Javascript'> alert('-- Tu pedido fue realizado --' )
            window.location='Carrito.html' </SCRIPT>";
            } else {
                echo" <SCRIPT LANGUAGE='Javascript'  TYPE='text/Javascript'> alert('-- Verifica tus datos --' )
                window.location='Carrito.html' </SCRIPT>";
            }
            mysqli_free_result($resultado);
            mysqli_close($conex);
        } else {
            echo" <SCRIPT LANGUAGE='Javascript'  TYPE='text/Javascript'> alert('-- Complete los Campos --' )
            window.location='Carrito.html' </SCRIPT>";  
        }
    }
?>