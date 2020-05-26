<?php 

include("Conexion_BD.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['apellidos']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['clave']) >= 1 && strlen( $_POST['address']) >= 1 && strlen($_POST['local']) >= 1 && strlen($_POST['postal']) >= 1 && strlen($_POST['pais']) >= 1 && strlen($_POST['telephone']) >= 1 ) {
    
        
        $name = trim($_POST['name']);
        $apellidos = trim($_POST['apellidos']);
        $email = trim($_POST['email']);
        $clave = trim($_POST['clave']);
        $address = trim($_POST['address']);
        $local = trim($_POST['local']);
        $postal = trim($_POST['postal']);
        $pais = trim($_POST['pais']);
        $fon = trim($_POST['telephone']);
        $fechareg = date("d/m/y");
        
	    $consulta = "INSERT INTO `usuarios` (`Id_Usuario`, `Username`, `Apellidos`, `Correo`, `Clave`, `Direccion`, `Localidad`, `Postal`, `Pais`, `Telefono`, `Fecha_reg`) VALUES (NULL,'$name','$apellidos','$email','$clave','$address','$local','$postal','$pais','$fon','$fechareg ')";
        $resultado = mysqli_query($conex,$consulta);
        
	    if ($resultado) {
         
            header("location:Carrito.html");
           
        } else {
            
            echo" <SCRIPT LANGUAGE='Javascript'  TYPE='text/Javascript'> alert('-- Ocurrio un Error --' )
            window.location='Registro.html' </SCRIPT>"; 
 
        }
        mysqli_free_result($resultado);
        mysqli_close($conex);

    } else {
        echo" <SCRIPT LANGUAGE='Javascript'  TYPE='text/Javascript'> alert('-- Complete los Campos--' )
            window.location='Registro.html' </SCRIPT>";           
    }
}

?>
