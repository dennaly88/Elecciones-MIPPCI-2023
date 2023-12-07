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
																				
<!DOCTYPE html>
<html lang="es">
  <head>
  <link rel="shortcut icon" href="../images/favicon-nuevo.png">
		    <title>Servi-Red | VTV</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
			<link rel="stylesheet" href="css/style.css">		
</head>
<script>
	window.history.pushState("object", "", "http://localhost/login/index.php");
</script>
	<body>
			<?php
				session_start(); 
				$usuario=$_SESSION['usuario'] ;
				$contraseña=$_SESSION['contraseña'] ;            
			?> 
	
			<section class="ftco-section">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-6 text-center mb-5"></center>
							<img src="images/logos.png" alt="logo" width='210' height='150'>
						       </div>
						          </div>
									<div class="row justify-content-center">
										<div class="col-md-6 col-lg-4">
											<div class="login-wrap p-0">
											
													
											      <?php
														unset($usu);
														$usu8 = $_GET["usu"];
															if ($usu8<2) {
																} else 
																	{
																		include 'mensajes/usuario-no-registrado.php';
														}  
										        	?>
														
														<?php
														unset($uru);
														$uru8 = $_GET["uru"];
															if ($uru8<2) {
																} else 
																	{
																		include 'mensajes/clave-no-registrado.php';
														}  
										        	?>

                                                    <?php
														unset($udu);
														$udu8 = $_GET["udu"];
															if ($udu8<2) {
																} else 
																	{
																		include 'mensajes/usuario-inactivo.php';
														}  
										        	?>

													<?php
														unset($mar);
														$mar8 = $_GET["mar"];
															if ($mar8<2) {
																} else 
																	{
																		include 'mensajes/conexion-fallida.php';
														}  
										        	?>
												<form action="sql/validar-usuario-2.php"  method="POST">
															<div class="form-group">
																<input type="text" class="form-control"  value="<?php echo $usuario; ?>" name="usuarios" >
															</div>
																		<?php
                                                                            $contra= $contraseña;
                                                                            $sSalt = '20adeb83e85f03cfc84d0fb7e5f4d290';
                                                                            $sSalt = substr(hash('sha256', $sSalt, true), 0, 32);
                                                                            $method = 'aes-256-cbc';
                                                                            $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
                                                                            $clave = openssl_decrypt(base64_decode($contra), $method, $sSalt, OPENSSL_RAW_DATA, $iv);
                                                                        ?>
															<div class="form-group">
																<input id="password-field" type="text" class="form-control" value="<?php echo $clave; ?> " name="contra" >
																<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
															</div><br>
															<div class="form-group">
																<button type="submit" class="form-control btn btn submit px-3">Entrar</button>
															</div>	
												</form>
												
												<form action="olvidosuclave.php"  method="POST">
															
															<div class="form-group">
																<button type="submit" class="form-control btn btn submit px-3">¿ Olvidaste tu usuario o clave ?</button>
															</div>	
												</form>
												<center><img src="images/logo.png" alt="logo">
							    </div><center> © Ministerio del Poder Popular para la Comunicación e Información MIPPCI Todos los Derechos Reservados- 2023</div></center>
							</div>
						</div>
		</section>
					<script src="js/jquery.min.js"></script>
					<script src="js/popper.js"></script>
					<script src="js/bootstrap.min.js"></script>
					<script src="js/main.js"></script>
	</body>
</html>
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
