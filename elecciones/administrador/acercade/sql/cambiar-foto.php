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
$check = getimagesize($_FILES["imagen"]["tmp_name"]);
$image = $_FILES['imagen']['tmp_name'];
$ruta = addslashes(file_get_contents($image));

if (!$conexion) {
      
      header("location:../index.php?usu=6");
}


if (mysqli_query($conexion, "UPDATE usuarios SET id='$edit_id',imagen='$ruta' WHERE id='$edit_id'")) {
      
      header('location:../index.php?usu=1');
      

} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);

?>

<script>
	        window.history.pushState("object", "", "../index.php?usu=1");
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
	






