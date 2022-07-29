<?php

include("conexion.php");

if(isset($_POST['user']) && isset($_POST['pass'])){


    $user=$_POST['user'];
    $pass=$_POST['pass'];

    $consultar="SELECT*FROM ingreso where user='$user' and pass='$pass'";

    $validar=mysqli_query($con_bd,$consultar);

    $row=mysqli_num_rows($validar);

    if($row<1){
        echo'<script language="javascript">alert("Intente de Nuevo");</script>';
    }else{
        header("location:login.php");
    }

}




?>