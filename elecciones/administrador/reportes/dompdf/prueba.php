<?php
      ob_start(); 
?>

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

          
             <h3 class="box-title"> <span class="label label-success pull-left">
              <center>TRABAJADORES DE VTV CANAL 8 QUE SI VOTARON</h3></span> 
           </div>           
           <div class="box-body">
           
             <table id="usuarios" class="table table-bordered table-striped">
               <thead>
                 <tr>
                                    <th>Foto</th>
                                    <th>Codigo</th>
                                    <th>Apellidos</th>
                                    <th>Nombres</th>
                                    <th>Cargo</th>
                                    <th>Cedula</th>
                                    <th>Gerencia</th>
                                    <th>División</th>
                                    <th>Telefono Casa</th>
                                    <th>Telefono Celular</th>
                                    <th>Voto</th>
                </tr>
               </thead>
              <tbody>
                 

  <?php echo  $gerencia; ?>
               <?php
               include('conexion.php');
                         $sql="SELECT * from nomina where voto='SI'";
                        // $sql="SELECT id,nombres,apellidos,telefono,corre,usuario,contraseña,estado,iamgen,pregunta,cedula,id_rol from usuarios order by id desc";
                        
                         $result=mysqli_query($conexion,$sql);
                         while($row=mysqli_fetch_array($result))
                         
                         {
                         $imagen = '<img class="img-circle"  width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
                         
                       echo 
                     "<tr>
                           <td>".$row['imagen']."</td>
                           <td>".$row['codigo']."</td>
                           <td>".$row['apellidos']."</td>
                           <td>".$row['nombres']."</td>
                           <td>".$row['cargo']."</td>
                           <td>".$row['cedula']."</td>
                           <td>".$row['gerencia']."</td>
                           <td>".$row['division']."</td>
                           <td>".$row['telefono-casa']."</td>
                           <td>".$row['telefono-celular']."</td>
                           <td>".$row['voto']."</td>

                     </tr>"; 
                     
                   
                   }
                 ?>
               </tbody>
               <tfoot>
               <tr>
                                    <th>Foto</th>
                                    <th>Codigo</th>
                                    <th>Apellidos</th>
                                    <th>Nombres</th>
                                    <th>Cargo</th>
                                    <th>Cedula</th>
                                    <th>Gerencia</th>
                                    <th>División</th>
                                    <th>Telefono Casa</th>
                                    <th>Telefono Celular</th>
                                    <th>Voto</th>
               </tr>
               </tfoot>
             </table>
           </div>
         </div>
   </section>
</body>
</html>

<?php
$html=ob_get_clean();
echo  $html;
?>