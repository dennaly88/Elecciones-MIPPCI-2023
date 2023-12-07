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
	<body>
			<section class="ftco-section">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-6 text-center mb-5">
							<img src="images/logos.png" alt="logo" width='210' height='150'>
							
						       </div>
						          </div>
									<div class="row justify-content-center">
										<div class="col-md-6 col-lg-4">
											<div class="login-wrap p-0">
											        <?php
														unset($usu);
														$usu8 = $_GET["oro"];
															if ($usu8<2) {
																} else 
																	{
																		include 'mensajes/cedula.php';
														}  
										        	?>
													<?php
														unset($usu);
														$usu8 = $_GET["oro1"];
															if ($usu8<2) {
																} else 
																	{ 
																		include 'mensajes/pregunta.php';
														}  
										        	?>
													 	
                                         			<form action="sql/olvidode-clave.php"  method="POST">
													 
														  <div class="form-group">
																<input type="" class="form-control" placeholder="Ingrese su Numedo de Cedula" name="cedula" required>
															</div> 
															<div class="form-group">
																<input type="text" class="form-control" placeholder="Pregunta de Seguridad" name="pregunta" required>
															</div>
															
															<br>
															<div class="form-group">
																<button type="submit" class="form-control btn btn submit px-3">ENVIANDO</button>
														   </div>
														   <div class="form-group">
																
															</div>		
												    </form>
													<button type="submit" class="form-control btn btn submit px-3"> <a href="index.php">REGRESAR</button>




											
												
												<center><br><img src="images/logo.png" alt="logo">
							    </div><br><center>© Ministerio del Poder Popular para la Comunicación e Información MIPPCI
Todos los Derechos Reservados- 2023</div></center>
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
