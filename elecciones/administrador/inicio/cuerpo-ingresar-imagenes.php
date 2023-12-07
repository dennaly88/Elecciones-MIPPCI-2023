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
           <center><a href="#registro" class='btn btn-success btn-sm' data-toggle='modal'>
            <span class='glyphicon glyphicon-user'> </span>Registrar Empleado</a></center>
            
            <br>
            <center><a href="#registro_usuario" class='btn btn-primary btn-sm' data-toggle='modal'>
            <span class='glyphicon glyphicon-search'> </span>Buscar por Gerencias</a></center>
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
               <?php
               include('buscar-gerencia.php');
                  ?>      
<?php
session_start();
$edit_gerencias=$_POST['edit_gerencias'];   
$_SESSION['edit_gerencias']=$edit_gerencias;          
$busqueda_gerencias=$_SESSION['edit_gerencias'];

$dat = $_GET["dat"];
$gerencias=$_GET["edit_gerencia"];
$codnom=$_GET["codnom"];
if ($codnom =='1') {
  $gerencias = 'OFICINA DE ATENCION CIUDADANA';
  } else
  if ($codnom =='2') {
    $gerencias = 'PRESIDENCIA';
  } else
  if ($codnom =='3') {
    $gerencias = 'RELACIONES PUBLICAS';
  }
  if ($codnom =='4') {
    $gerencias = 'CONSULTORIA JURIDICA';
  }
  if ($codnom =='5') {
    $gerencias = 'UNIDAD DE AUDITORIA INTERNA';
  } if ($codnom =='6') {
    $gerencias = 'JUNTA DIRECTIVA';
  } if ($codnom =='7') {
    $gerencias = 'INGENIERIA';
  } if ($codnom =='8') {
    $gerencias = 'VICEPRESIDENCIA DE SOPORTE TECNOLOGICO';
  } if ($codnom =='9') {
    $gerencias = 'SERVICIOS A LA PRODUCCION';
  } if ($codnom =='10') {
    $gerencias = 'GESTION HUMANA';
  } if ($codnom =='11') {
    $gerencias = 'COMERCIALIZACION Y VENTAS';
  } if ($codnom =='12') {
    $gerencias = 'VICEPRESIDENCIA EJECUTIVA';
  } if ($codnom =='13') {
    $gerencias = 'PLANIFICACION Y PRESUPUESTO';
  } if ($codnom =='14') {
    $gerencias = 'ASUNTOS PUBLICOS';
  } if ($codnom =='15') {
    $gerencias = 'SERVICIOS INFORMATIVOS';
  } if ($codnom =='16') {
    $gerencias = 'VICEPRESIDENCIA DE INFORMACION';
  } if ($codnom =='17') {
    $gerencias = 'PROGRAMACION';
  } if ($codnom =='18') {
    $gerencias = 'VICEPRESIDENCIA EJECUTIVA DE PRODUCCION';
  } if ($codnom =='19') {
    $gerencias = 'PROGRAMAS';
  } if ($codnom =='20') {
    $gerencias = 'MULTIMEDIOS';
  } if ($codnom =='21') {
    $gerencias = 'ARCHIVO AUDIOVISUAL';
  } if ($codnom =='22') {
    $gerencias = 'CONTRATACIONES PUBLICAS';
  } if ($codnom =='23') {
    $gerencias = 'ADMINISTRACION Y FINANZAS';
  } if ($codnom =='24') {
    $gerencias = 'INFRAESTRUCTURA Y SERVICIOS GENERALES';
  } if ($codnom =='25') {
    $gerencias = 'SEGURIDAD INTEGRAL';
  } if ($codnom =='26') {
    $gerencias = 'TECNOLOGIA DE LA INFORMACION Y COMUNICACION';
  } if ($codnom =='27') {
    $gerencias = 'IMAGEN';
  }



switch ($dat) { 
  case 1:
    $gerencia='TECNOLOGIA DE LA INFORMACION Y COMUNICACION';  
    $_SESSION['gerencia']=$gerencia; 
    

  break;
  case 2:
    $gerencia=$busqueda_gerencias;
    $_SESSION['gerencia']=$gerencia;
    break;
  case 3:
    $gerencia=$gerencias; 
    break;   
   } 
			?>
  <?php echo  $gerencia; ?>
               <?php
                         $sql="SELECT * from nomina where gerencia='$gerencia'";
                        // $sql="SELECT id,nombres,apellidos,telefono,corre,usuario,contraseña,estado,iamgen,pregunta,cedula,id_rol from usuarios order by id desc";
                        
                         $result=mysqli_query($conexion,$sql);
                         while($row=mysqli_fetch_array($result))
                         
                         {
                         $imagen = '<img class="img-circle"  width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
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
                     <td><a href='#foto_".$row['id']."'  data-toggle='modal'><span class='img-circle'>$imagen</a></td>
                           <td>".$row['codigo']."</td>
                           <td>".$row['apellidos']."</td>
                           <td>".$row['nombres']."</td>
                           <td>".$row['cargo']."</td>
                           <td>".$row['cedula']."</td>
                           <td>".$row['gerencia']."</td>
                           <td>".$row['division']."</td>
                           <td>".$row['telefono-casa']."</td>
                           <td>".$row['telefono-celular']."</td>
<td><a href='#voto_".$row['id']."' class='btn btn-$voto btn-xs' data-toggle='modal'>  ".$row['voto']."</a></td>
                     </tr>"; 
                     
                     include('voto.php');
                     include('cambiar-foto.php');
                     include('registro.php');
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
         <?php include('contador-votos.php');?>
   </section>
   <script src="librerias/js/usuario.js"></script>
</body>
</html>
