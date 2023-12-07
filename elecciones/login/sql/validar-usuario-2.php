<!-----------------------------------------------------------------------------------------------------|
|------------------------------------------------------------------------------------------------------|
| PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ                                                  |
| CEDULA    : V 16.029.567                                                                             |
| TELEFONO  : 0426-249-15-40                                                                           |
| CORREO    : DENNALY88@GMAIL.COM                                                                      |
| DIRECCIÓN : CUA , ESTADO MIRANDA  CONJUTO RESIDENCIAL EL CASTILLO APARTAMENTO 62-C                   |                                                     |
|------------------------------------------------------------------------------------------------------|
|------------------------------------------------------------------------------------------------------|  
|                                                                                                      |
|  VENEZOLANA DE TELEVISIÓN C.A                                                                        |
|  DIVISIÓN DESARROLLO DE SISTEMAS Y DIVISIÓN DE SERVIDORES Y REDES                                    |
|  CANAL 8                                                                                             |
|                                                                                                      |
|  PROYECTO SOCIOTECNOLOGICO                                                                           |
|  UNIVERSIDAD EXPERIMENTAL DE LA GRAN CARACAS UNEXCA                                                  |
|  PARA OPTAR POR EL TITULO DE INGENIERO EN SISTEMA                                                    |
|                                                                                                      | 
-------------------------------------------------------------------------------------------------------- 
------------------------------------------------------------------------------------------------------->
<?php
 include "conexion.php";
 if(!$conexion)  
  { 
      header ("location:../index.php?mar=10");
  }
else {
 $usuario = $_POST['usuarios'];
 

 session_start(); 

 $contraseña=$_SESSION['contraseña'] ;            




 $consulta8="SELECT usuario FROM usuarios where usuario='$usuario'";
 $resultado8=mysqli_query($conexion,$consulta8);
 $filas8=mysqli_num_rows($resultado8);
 $data8 = mysqli_fetch_assoc($resultado8);  
 if ($filas8>0) 
 {
                      $consulta="SELECT * FROM usuarios where  usuario='$usuario' and contraseña='$contraseña'";
                      $resultado=mysqli_query($conexion,$consulta);
                      $filas=mysqli_num_rows($resultado);
                      $data = mysqli_fetch_assoc($resultado); 
                      if ($filas>0)
                       {
                                      $consulta1="SELECT * FROM usuarios where usuario='$usuario' and  estado='Activo'";
                                      $resultado1=mysqli_query($conexion,$consulta1);
                                      $filas1=mysqli_num_rows($resultado1);
                                      $data1 = mysqli_fetch_assoc($resultado1);
                                      if ($filas1>0){

                                        session_start();  
                                        $_SESSION['usuario']=$data['usuario'];
                                        $usuario=$_SESSION['usuario'] ;
                                        $sql="SELECT * from usuarios where '$usuario'=usuario;";
                                        $result=mysqli_query($conexion,$sql);
                                        while($mostrar=mysqli_fetch_array($result))
                                        {
                                            $id=$mostrar['id']; 
                                            $id_rol=$mostrar['id_rol']; 
                                            $imagen=$mostrar['imagen']; 
                                            $nombres=$mostrar['nombres']; 
                                            $apellidos=$mostrar['apellidos']; 
                                            session_start();  
                                            $_SESSION['id']=$id;          
                                            $_SESSION['id_rol']=$id_rol;                       
                                            $_SESSION['imagen']=$imagen;
                                            $_SESSION['nombres']=$nombres;
                                            $_SESSION['apellidos']=$apellidos;
                                           
                                        }
                                         header ("location:../../administrador/inicio/index.php?dan=88");

                                         echo $claves;
                                        }else{header ("location:../index.php?udu=8");/*USUARIO NO REGISTRADO*/ 
                                        }mysqli_free_result($resultado1);mysqli_close($conexion);
                        }else{header ("location:../index.php?uru=8");/*USUARIO NO REGISTRADO*/ 
    }mysqli_free_result($resultado);mysqli_close($conexion);        
 }
 else{header ("location:../index.php?usu=8");/*USUARIO NO REGISTRADO*/ 
 }mysqli_free_result($resultado);mysqli_close($conexion);  
          }
?>
                        
<!-----------------------------------------------------------------------------------------------------|
|------------------------------------------------------------------------------------------------------|
| PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ                                                  |
| CEDULA    : V 16.029.567                                                                             |
| TELEFONO  : 0426-249-15-40                                                                           |
| CORREO    : DENNALY88@GMAIL.COM                                                                      |
| DIRECCIÓN : CUA , ESTADO MIRANDA  CONJUTO RESIDENCIAL EL CASTILLO APARTAMENTO 62-C                   |                                                     |
|------------------------------------------------------------------------------------------------------|
|------------------------------------------------------------------------------------------------------|  
|                                                                                                      |
|  VENEZOLANA DE TELEVISIÓN C.A                                                                        |
|  DIVISIÓN DESARROLLO DE SISTEMAS Y DIVISIÓN DE SERVIDORES Y REDES                                    |
|  CANAL 8                                                                                             |
|                                                                                                      |
|  PROYECTO SOCIOTECNOLOGICO                                                                           |
|  UNIVERSIDAD EXPERIMENTAL DE LA GRAN CARACAS UNEXCA                                                  |
|  PARA OPTAR POR EL TITULO DE INGENIERO EN SISTEMA                                                    |
|                                                                                                      | 
-------------------------------------------------------------------------------------------------------- 
------------------------------------------------------------------------------------------------------->













