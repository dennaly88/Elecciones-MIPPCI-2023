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

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$cedula=$_POST['cedula'];
$cargo=$_POST['cargo'];
$gerencia=$_POST['gerencia'];
$division=$_POST['division'];
$codigo=$_POST['codigo'];
$telefono1=$_POST['telefono1'];
$telefono2=$_POST['telefono2'];
$voto=$_POST['voto'];

$sSalt = '20adeb83e85f03cfc84d0fb7e5f4d290';
$sSalt = substr(hash('sha256', $sSalt, true), 0, 32);
$method = 'aes-256-cbc';
$iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
$clave = base64_encode(openssl_encrypt($contraseña, $method, $sSalt, OPENSSL_RAW_DATA, $iv));


$check = getimagesize($_FILES["imagen"]["tmp_name"]);
$image = $_FILES['imagen']['tmp_name'];
$ruta = addslashes(file_get_contents($image));




if (!$conexion) {

      die("Connection failed: " . mysqli_connect_error());
}
 
 $consulta8="SELECT nombres FROM nomina where nombres='$nombres'";
 $resultado8=mysqli_query($conexion,$consulta8);
 $filas8=mysqli_num_rows($resultado8);
 $data8 = mysqli_fetch_assoc($resultado8); 
    if($filas8>0){
      
      header("location:../principal.php?usu=4");
      }
      else{
     
            $sql = "INSERT INTO  nomina(nombres,apellidos,cedula,cargo,gerencia,division,codigo,telefono-casa,telefono-celular,voto,imagen) VALUES
            ('$nombres','$apellidos','$cedula','$cargo','$gerencia','$division','$codigo','$telefono1','$telefono2','$voto','$image')";
            if (mysqli_query($conexion, $sql)) {
                  
                  header("location:../index.php?usu=2");
              
            } else {
                 
                 header("location:../index.php?usu=7");
            }
            mysqli_close($conexion);
      }
     
      ?>

<script> 
      window.history.pushState("object", "", "../index.php?dat=3?>");             
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
	
