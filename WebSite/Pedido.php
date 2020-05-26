<html>

  <html lang="es">

<head>
  <meta charset="UTF-8">
  <title> Aplicacion Web </title>
  <link rel="stylesheet" type="text/css" href="/Proyecto/CSS/estilo(2).css">
</head>



<body>
  
    <div class="cont">
        <div class="item">
            <h3>¡ Los mejores Articulos !</h3> <br><br><br>
            <h2>DIDACTIC WORLD</h2>
            
            <button class="btn btn-primary"><a href="Carrito.html">Regresar</a></button>
            
        </div>
    </div>
    <br><br><br><br> <br><br><br><br>

    <div class="Tabla">
    <p style=" color:black;  text-align:center; font-family:'Open Sans', sans-serif; font-size: 35px; ">■ Los produsctos que pertenecen a la categoria son: </p><br><br><br><br>
    <?php 

    include("Conexion_BD.php");
    
    if(isset($_POST['buscar'])) {
        
        $consult= $_POST['consult'];
    
        $c= mysqli_query($conex,"SELECT * FROM productos WHERE  Categoria ='$consult' ");
       
        
        echo "<font color='#6F6F6F'>
            <tr>
                <td><b>Categoria&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspProducto&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspMarca&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspPrecio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspExistencia</b></td>
            </tr> 
        </font>";

        while($co=mysqli_fetch_array($c)){
        
            
            echo "<font color='#6F6F6F'>

               
                <tr>
                    <td><b><center>____________________________________________________________________________________</center></b></td>
                </tr>
                <tr>
                    <td>".$co['Categoria']."<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp»&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
                    <td>".$co['Producto']."<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp»&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
                    <td>".$co['Marca']."<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp»&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
                    <td>".$co['Precio']."<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp»&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
                    <td>".$co['Existencia']."<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp»&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
                </tr> 
                <tr>
                    <td><b><center>____________________________________________________________________________________</center></b></td>
                </tr><br>
            </font>"; 
        } 
        mysqli_close($conex);
    }
    ?>
    </div><br><br><br><br><br><br>

    <main>

    <div class="twinkling"></div>
    <footer>
      <h1>---------</h1>
      <h3>Gracias por visitarnos</h3><br>
      <hr />
      <p>"Didactic World"<br>
        La papeleria de alta Calidad<br>
      </p>
    </footer>

    </main>
</body>
</html>

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
                echo "hola";
            } else {
                echo"Error";
            }
            mysqli_free_result($resultado);
            mysqli_close($conex);
        } else {
            echo"Complete";
        }
    }
?>
