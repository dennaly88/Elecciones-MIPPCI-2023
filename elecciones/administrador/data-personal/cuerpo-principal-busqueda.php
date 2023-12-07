
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
              INTERFAZ DE  DATA PERSONAL VTV CANAL 8</h3></span> 
           </div>
           
           <div class="box-body">
           <center><a href="#registro_usuario" class='btn btn-primary btn-sm' data-toggle='modal'>
            <span class='glyphicon glyphicon-search'> </span>   Buscar por Gerencias</a></center>
             <table id="usuarios" class="table table-bordered table-striped">
               <thead>
                 <tr>
                                    <th>Id</th>
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
               <?php
               include('buscar-gerencia.php');
                  ?>  

<?php
include('sql/conexion.php');
$edit_gerencias=$_POST['edit_gerencias'];   
session_start();  
$_SESSION['gerencia']=$edit_gerencias; 
$gerencias=$_SESSION['gerencia'];
 

?>
               <?php
                         $sql="SELECT * from nomina where gerencia='$gerencias'";
                        // $sql="SELECT id,nombres,apellidos,telefono,corre,usuario,contraseña,estado,iamgen,pregunta,cedula,id_rol from usuarios order by id desc";

                         $result=mysqli_query($conexion,$sql);
                         while($row=mysqli_fetch_array($result)){
                         $imagen = '<img class="img-circle" width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
                         $voto=$row['voto'];
                         if($voto=='SI'){
                           
                           $voto='success'; 
                         }else
                         if($voto=='NO')
                         {

                           $voto='btn bg-maroon';
                         }
                       echo 
                     "<tr>
                           <td>".$row['id']."</td>
                           <td>".$row['codigo']."</td>
                           <td>".$row['apellidos']."</td>
                           <td>".$row['nombres']."</td>
                           <td>".$row['cargo']."</td>
                           <td>".$row['cedula']."</td>
                           <td>".$row['gerencia']."</td>
                           <td>".$row['division']."</td>
                           <td>".$row['telefono-casa']."</td>
                           <td>".$row['telefono-celular']."</td>
                           <td><a href='#voto_busqueda".$row['id']."' class='btn btn-$voto btn-xs' data-toggle='modal'>  ".$row['voto']."</a></td>
                     </tr>"; 
                     
                     include('voto_busqueda.php');
                     
                   }
                 ?>
               </tbody>
               <tfoot>
               <tr>
               <th>Id</th>
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
         <?php include('contador-votos.php');?>
   </section>

    


   <script src="librerias/js/usuario.js"></script>




</body>
</html>
