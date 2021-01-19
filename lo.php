<?php
    $email=$_POST['email'];
    $contrasena=$_POST['contrasena'];

    //print("Datos del formulario.html: $usuario $contra");
    $conexion=mysqli_connect("sql107.260mb.net","n260m_21636751","SANTANA1");
    if (mysqli_connect_errno())
    {
        echo "Failed to conect:". mysqli_connect_error();
    }
    mysqli_select_db($conexion,"n260m_21636751_riace") or die("Error de la seleccion de base de datos");
    if(!$RS=mysqli_query($conexion,"SELECT email , contrasena FROM usuarios"))
       {
        echo("Error descripicion " . mysqli_error($conexion));
       }
            while($registro= mysqli_fetch_array($RS,MYSQL_BOTH))
       {
            $id_usuario=$registro['id_usuario'];
            $user=$registro['email'];
            $pass=$registro['password'];
            //print("Los datos de la tabla login: $user $pass");
           if(($email==$user)&&($password==$pass))

           {
             
            header('location:menu.php');
            break;
           //print("Los datos capturados en el formulario considen con los de la BD");
           }
           else
           {
           //print("Tu usuario o contraseña son incorreactos");
           header('location:index.php');
           }
           
       }

       mysqli_close($conexion);
    ?>
