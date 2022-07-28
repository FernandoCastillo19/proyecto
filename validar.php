<?php
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
session_start();
$_SESSION['usuario']=$usuario;

include('db.php');

$consulta="SELECT*FROM usuarios where usarios='$usuario' and contrasena='$contrasena'";
$resultado=mysqli_querry($conexion,$consulta); 

$filas=mysqli_num_rows($resultado);

if($filas){
    hader("localtion:home.php");
}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
