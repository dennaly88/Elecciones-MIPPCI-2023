<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
 
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
 
</head>
<body class="hold-transition skin-blue sidebar-mini">



<section class="content">
     
        

         <div class="box box-primary">
           <div class="box-header">

          
              
           
             
             <h3 class="box-title"> <span class="label btn bg-navy btn-fla  pull-left">
              INTERFAZ DE USUARIOS MIPPCI</h3></span> 
           </div>
           
           <div class="box-body">
           <center><a href="#registro_usuario" class='btn btn-primary btn-sm' data-toggle='modal'>
            <span class='glyphicon glyphicon-plus'></span>Agregar Usuarios</a></center>
             <table id="usuarios" class="table table-bordered table-striped">
               <thead>
                 <tr>
                                    <th>Id</th>
                                    <th>Foto</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Cedula</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                    <th>Usuario</th>
                                    <th>Estado</th>
                                    <th>Pregunta</th>
                                    <th>Contraseña</th>
                                    <th>Perfil</th>
                                    <th>Acción</th>
                 
                </tr>
               </thead>
               <tbody>
               
               
            
               <?php
                         


                         $sql="SELECT * from usuarios order by id";
                        // $sql="SELECT id,nombres,apellidos,telefono,corre,usuario,contraseña,estado,iamgen,pregunta,cedula,id_rol from usuarios order by id desc";

                       
                         $result=mysqli_query($conexion,$sql);
                         while($row=mysqli_fetch_array($result)){
                         $imagen = '<img class="img-circle" width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
                         $estado=$row['estado'];
                         if($estado=='Activo'){
                           
                           $estado='success'; 
                         }else{
                           $estado='btn bg-maroon';
                         }
                       echo 
                     "<tr>
                           <td>".$row['id']."</td>
                           <td><a href='#foto_".$row['id']."'  data-toggle='modal'><span class='img-circle'>$imagen</a></td>
                           <td>".$row['nombres']."</td>
                           <td>".$row['apellidos']."</td>
                           <td>".$row['cedula']."</td>
                           <td>".$row['telefono']."</td>
                           <td>".$row['corre']."</td>
                           <td>".$row['usuario']."</td> 
                          <td><a href='#estado_".$row['id']."' class='btn btn-$estado btn-xs' data-toggle='modal'>  ".$row['estado']."</a></td>
                          <td>".$row['pregunta']."</td>
                       <td> <a href='#contraseña_".$row['id']."' class='btn btn-dark btn-lg' data-toggle='modal'><span class='fa fa-eye'></span> </a></td>
                       <td> <a href='#perfil_".$row['id']."' class='btn btn-dark btn-lg' data-toggle='modal'><span class='fa fa-user'></span> </a></td>
                       <td>
                         <a href='#edit_".$row['id']."'title='Editar' class='btn btn-info btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> </a>
                         <a href='#delete_".$row['id']."'title='Eliminar' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> </a>
                       </td>
                     </tr>";
                    
                     include('actualizar-usuario.php');
                     include('perfil.php');
                     include('cambiar-foto.php');
                     include('registrar-usuario.php');
                     include('eliminar-usuario.php');
                     include('estado.php');
                     include('contraseña.php');
                    
                      
                   }
                 
                 ?>
               
               
             
             
          
               </tbody>
               <tfoot>
               <tr>
               <th>Id</th>
                                    <th>Foto</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Cedula</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                    <th>Usuario</th>
                                    <th>Estado</th>
                                    <th>Pregunta</th>
                                    <th>Contraseña</th>
                                    <th>Perfil</th>
                                    <th>Acción</th>
               </tr>
               </tfoot>
             </table>
           </div>
         </div>
         <?php include('contador-usuarios.php');?>
   </section>

   


   <script src="librerias/js/usuario.js"></script>




</body>
</html>
