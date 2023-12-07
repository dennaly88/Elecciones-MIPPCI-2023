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

 
<div class="modal fade" id="observa_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		<div class="modal-header ">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><button class="btn bg-navy btn-sm" type="button"> <span class='glyphicon glyphicon-user'></span>&nbsp;Observacion del Sufragio</button></center>
				<br><div class="box box-primary">
			</div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="sql/voto.php" >
							<input type="hidden" class="form-control" name="edit_id" value="<?php echo $row['id']; ?>">
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Trabajador:</label>
								</div>
								<div class="col-sm-10">
                              <?php  $imagen = '<img class="img-circle"  width="100" height="100" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';?>
								<?php echo  $imagen; ?>	
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Nombres:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_contraseña" value="<?php echo $row["nombres"]; ?>" readonly>
					            </div>
								
							</div>

							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Apellidos:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_contraseña" value="<?php echo $row["apellidos"]; ?>" readonly>
					            </div>
								 
							</div>
							
							

							


                                              
               <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Estado Electoral</label>
					</div>
					<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_contraseña" value="<?php echo $row["voto"]; ?>" readonly>
					</div>
				</div>
						
				
				
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Observacion</label>
					</div>
					<div class="col-sm-10">
									

									<textarea name="textarea" rows="10" cols="50" readonly><?php echo $row["observacion"]; ?></textarea>
					</div>
				</div>	

                




						</div> 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Salir</button>
							
			</form>
            </div>
			</div>
        </div>
    </div>
</div>
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
