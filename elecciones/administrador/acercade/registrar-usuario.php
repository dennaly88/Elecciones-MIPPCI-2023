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

<div class="modal fade" id="registro_usuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		
            <div class="modal-header">
			
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel"><button class="btn bg-navy btn-sm" type="button"><span class='fa fa-user'>&nbsp;</span>Registrar Usuario </button></h4></center>
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
						<label class="control-label modal-label">Correo:</label>
					</div>
					<div class="col-sm-10">
						<input type="email" class="form-control" name="corre" placeholder="Ingresar Correo Electrónico" required>
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
						<label class="control-label modal-label">Telefono:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="telefono" placeholder="Ingresar Telefono" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Usuario:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="usuario" placeholder="Ingresar Usuario " required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Contraseña:</label>
					</div>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="contraseña" placeholder="Ingresar Contraseña" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Pregunta Seguridad:</label>
					</div>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="pregunta" placeholder="Ingresar Contraseña" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Perfil</label>
					</div>
					<div class="col-sm-10">
						
					   <select class="form-control form-control-sm" placeholder="Seleccione el Perfil" name="id_rol" required>
					                    <option value="">Selecciona una opción</option>
					                    <option value="1">Administrador</option>
										<option value="2">Coordinador</option>
										<option value="3">Basico</option>
					   </select>
					</div>
				</div>
 
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Estado</label>
					</div>
					<div class="col-sm-10">
						
					<select class="form-control form-control-sm" placeholder="Seleccione el Estado" name="estado" required>
					                    <option value="">Selecciona una opción</option>
					                    <option value="Activo">Activo</option>
										<option value="Inactivo">Inactivo</option>
										
					   </select> 


					</div> 
				</div>
		<!----		
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Pregunta:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="pregunta" placeholder="Incresar Pregunta de Seguridad " required>
					</div>
				</div>---->	
					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Foto:</label>
						</div>
						<div class="col-sm-10">
						<input type="file" id="imagen" name="imagen" accept=".jpg, .jpeg, .png, .git" class="form-control" id="exampleInputEmail1" placeholder="IMAGEN DE PERFIL"required >
						<output id="list"></output>	
						</div>
					</div>

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
