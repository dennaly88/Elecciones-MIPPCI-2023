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

<div class="modal fade" id="registro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		
            <div class="modal-header">
			
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel"><button class="btn bg-navy btn-sm" type="button"><span class='fa fa-user'>&nbsp;</span>Registrar Empleados</button></h4></center>
<br>
				<div class="box box-primary"><br>
				</div> 
				
            <div class="modal-body"> 
			<div class="container-fluid">
<form action="sql/insertar-usuario.php" method="POST" enctype="multipart/form-data">
				 
				
				<div class="row form-group"> 
					<div class="col-sm-2">
						<label class="control-label modal-label">Nombres:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombres" placeholder="Ingresar Nombres" required>
					</div> 
				</div>





				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Apellidos:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="apellidos" placeholder="Ingresar Apellidos" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Cedula:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="cedula" placeholder="Ingresar Cedula" required>
					</div>
				</div>




				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Cargo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="cargo" placeholder="Ingresar Cargo" required>
					</div>
				</div>

				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Gerencia:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="gerencia" placeholder="Ingresar Gerencia" required>
					</div>
				</div>




				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">División:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="division" placeholder="Ingresar la División" required>
					</div>
				</div>


				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Codigo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="codigo" placeholder="Ingresar Codigo de Empleado" required>
					</div>
				</div>





				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Telefono Casa:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="telefono1" placeholder="Ingresar Telefono Local" required>
					</div>
				</div>


				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Telefono Celular:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="telefono2" placeholder="Ingresar Telefono Celular" required>
					</div>
				</div>

				
				      <div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Voto:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="voto" value="NO" readonly>
					            </div>
								
							</div>
		
					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Foto:</label>
						</div>
						<div class="col-sm-10">
						<input type="file" id="imagen" name="imagen" accept=".jpg, .jpeg, .png, .git" class="form-control" id="exampleInputEmail1" placeholder="IMAGEN DE PERFIL"required >
						<output id="list"></output>	
						</div>
					</div>


					<center><img href="#" src="imagenes/lonegro.png" alt="logo">&copy; <br>

	<script>
              function archivo(evt) {
                  var files = evt.target.files; 
                  for (var i = 0, f; f = files[i]; i++) {
                    if (!f.type.match('image.*')) {
                        continue;
                    }
             
                    var reader = new FileReader();
                    reader.onload = (function(theFile) {
                        return function(e) {
                         document.getElementById("list").innerHTML = ['<img class="thumb"  width="80" height="85" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f); 
             
                    reader.readAsDataURL(f);
                  }
              } 
             
              document.getElementById('imagen').addEventListener('change', archivo, false);
      </script>
			
				   
			
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="ingresar_usuario" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-floppy-disk"></span>Guardar</a>
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
