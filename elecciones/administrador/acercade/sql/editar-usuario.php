<!--------------------------------------------------------------------------------------------------------
|--------------------------------------------------------------------------------------------------------
| PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ   
| TELEFONO :0426-249-15-40
| CORREO : DENNALY88@GMAIL.COM
|------------------------------------------------------------------------------------------------------------
|  
|  DIVISIÓN DESARROLLO DE SISTEMAS Y DIVISION DE SERVIDORES Y REDES
|  VENEZOLANA DE TELEVISION C.A
|  CANAL 8
|  PROYECTO SOCIOTECNOLOGICO 
|  UNIVERSIDAD EXPERIMENTAL DE LA GRAN CARACAS UNEXCA
|  PARA OPTAR POR EL TITULO DE INGENIERO EN SISTEMA 
| 
| 
--------------------------------------------------------------------------------------------------------->

<?php
include('conexion.php');
$edit_id=$_POST['edit_id'];
$edit_nombres=$_POST['edit_nombres'];
$edit_apellidos=$_POST['edit_apellidos'];
$edit_telefono=$_POST['edit_telefono'];
$edit_correo=$_POST['edit_correo'];
$edit_usuario=$_POST['edit_usuario'];
if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
} 
 
$sql = "UPDATE usuarios SET id='$edit_id', nombres='$edit_nombres', apellidos='$edit_apellidos',telefono='$edit_telefono', corre='$edit_correo' ,usuario='$edit_usuario' 
                                      WHERE id='$edit_id'" ;
 
if (mysqli_query($conexion, $sql)) {
      header("location:../index.php?usu=1");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
      //header("location:../principal.php?usu=6");
}
mysqli_close($conexion);
?>

<script>
	        window.history.pushState("object", "", "../index.php?usu=5");
              location.reload()
</script>
<!--------------------------------------------------------------------------------------------------------
|--------------------------------------------------------------------------------------------------------
| PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ   
| TELEFONO :0426-249-15-40
| CORREO : DENNALY88@GMAIL.COM
|------------------------------------------------------------------------------------------------------------
|  
|  DIVISIÓN DESARROLLO DE SISTEMAS Y DIVISION DE SERVIDORES Y REDES
|  VENEZOLANA DE TELEVISION C.A
|  CANAL 8
|  PROYECTO SOCIOTECNOLOGICO 
|  UNIVERSIDAD EXPERIMENTAL DE LA GRAN CARACAS UNEXCA
|  PARA OPTAR POR EL TITULO DE INGENIERO EN SISTEMA 
| 
| 
--------------------------------------------------------------------------------------------------------->


