<?php

include("Conexion_BD.php");

if (isset($_POST['modificar'])) {

    $Code = trim($_POST['Code']);
    $Categoria = trim( $_POST['Categoria']);
    $Producto = trim( $_POST['Producto']);
    $Marca =trim(  $_POST['Marca']);
    $Precio =  trim($_POST['Precio']);
    $Existencia =  trim($_POST['Existencia']);

    
    if($Code ==" " && $Categoria ==" " && $Producto ==" " &&  $Marca ==" " && $Precio ==" " && $Existencia ==" " ){
        echo" <SCRIPT LANGUAGE='Javascript'  TYPE='text/Javascript'> alert('-- Complete los Campos --' )
            window.location='Administrar.html' </SCRIPT>";
    } else{

    $_U=mysqli_query($conex,"UPDATE productos SET Categoria='$Categoria',Producto='$Producto',Marca='$Marca',Precio='$Precio',Existencia='$Existencia' WHERE Id_Producto='$Code'");

    if($_U){
        echo" <SCRIPT LANGUAGE='Javascript'  TYPE='text/Javascript'> alert('-- Se modifico los datos correctamente --' )
        window.location='Administrar.html' </SCRIPT>";
    }
    else {
        echo" <SCRIPT LANGUAGE='Javascript'  TYPE='text/Javascript'> alert('-- No se modifico los datos correctamente --' )
        window.location='Administrar.html' </SCRIPT>";

    }
}

}

if (isset($_POST['eliminar'])) {

    $Cod = trim($_POST['registro']);

    if($Cod == " "){
        echo" <SCRIPT LANGUAGE='Javascript'  TYPE='text/Javascript'> alert('-- Complete el Campo --' )
            window.location='Administrar.html' </SCRIPT>";
    } else{

        $_i=mysqli_query($conex,"DELETE FROM productos WHERE Id_Producto='$Cod'");

        if($_i){
            echo" <SCRIPT LANGUAGE='Javascript'  TYPE='text/Javascript'> alert('-- Se ELIMINO correctamente EL REGISTRO --' )
                window.location='Administrar.html' </SCRIPT>";
        } else {
            echo" <SCRIPT LANGUAGE='Javascript'  TYPE='text/Javascript'> alert('-- No se ELIMINO  correctamente --' )
            window.location='Administrar.html' </SCRIPT>";
        }
    }   
}
?>