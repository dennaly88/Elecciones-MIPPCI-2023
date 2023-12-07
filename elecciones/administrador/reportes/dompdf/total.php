<?php ob_start(); ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">  
<link rel="stylesheet" href="estilos.css">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<section class="content">
<div class="box box-primary">
<div class="box-header">

<style>
     table {
  
  border: 1px solid #000;
  border-collapse: collapse;
}
th, td {
  text-align: center;
  border: 1px solid #000;
}

    </style>

<?php

include('conexion.php');
$query="SELECT * from imagenes WHERE id='10' ";         
$resultado=mysqli_query($conexion,$query);
while($mostrar=mysqli_fetch_array($resultado))
                         
{
   $logo = '<img class="img-circle"  width="1030" height="100" src="data:image/jpeg;base64,'.base64_encode($mostrar["imagen"]).'"/>';
   

  }
  
?>
<?php

include('conexion.php');
$query="SELECT * from imagenes WHERE id='11' ";         
$resultado=mysqli_query($conexion,$query);
while($mostrar=mysqli_fetch_array($resultado))
                         
{
   $logo1 = '<img class="img-circle"  width="1030" height="100" src="data:image/jpeg;base64,'.base64_encode($mostrar["imagen"]).'"/>';
   

  }
  
?>
<img src="logo.gif" alt="HTML desde Cero"  value="<?php echo $logo;?>
<img src="logo.gif" alt="HTML desde Cero"  value="<?php echo $logo1;?>


<center></a></center>
<BR>
              
                 
</div>           
           <div class="box-body">
           
            <CENTER> <table>
               <thead>
                 <tr >
                                    
                                   <th>APELLIDOS</th>
                                    <th>NOMBRES</th>
                                    <th>CARGOS</th>
                                    <th>CEDULA</th>
                                    <th>GERENCIA</th>
                                    <th>VOTO</th>
                </tr>
               </thead>
               <tbody>
                 

               <?php echo  $gerencia; ?>
               <?php
               include('conexion.php');
               $sql="SELECT * from nomina ";

              
                        
                         $result=mysqli_query($conexion,$sql);
                         while($row=mysqli_fetch_array($result))
                         
                         {
                            $imagen = '<img class="img-circle"  width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
                           
                         
                       echo 
                     "<tr>
                    
                           <td>".$row['apellidos']."</td>
                           <td>".$row['nombres']."</td>
                           <td>".$row['cargo']."</td>
                           <td>".$row['cedula']."</td>
                           <td>".$row['gerencia']."</td>
                           <td>".$row['voto']."</td>

                     </tr>"; 
                     
                   
                   }
                 ?>
               </tbody>
               <tfoot>
               <tr>
  
                                    <th>APELLIDOS</th>
                                    <th>NOMBRES</th>
                                    <th>CARGOS</th>
                                    <th>CEDULA</th>
                                    <th>GERENCIA</th>
                                    <th>VOTO</th>
               </tr>
               </tfoot>
             </table>
             <?php
                        include('conexion.php');
                        $sql = "SELECT COUNT(*) total FROM nomina ";
                        $result = mysqli_query($conexion, $sql);
                        $nomina = mysqli_fetch_assoc($result);

              ?>



             








<CENTER><br><br><table>
               <thead>
                 <tr >
                 <th>Empresa</th>
                                    <th>Cantidad de Empleados</th>
                                    
                </tr>
               </thead>
               <tbody>
  <tr>      

      <td>Ministerio del Poder Popular para la Comunicación y la Información (MIPPCI)</td>
      <td><?php 
echo $nomina['total']; 
?></td>
      
      

</tr>
                   
</tbody>
               <tfoot>
               <tr>
                                   <th>Empresa</th>
                                    <th>Cantidad de Empleados</th>
                                    
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



//echo  $html;
require_once('autoload.inc.php');
use Dompdf\Dompdf;
use Dompdf\Options;
$dompdf = new Dompdf();
$options = new Options();
$options->set('isRemoteEnabled', true);

$dompdf = new Dompdf($options);
$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);
$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'landscape');

//$dompdf->loadHtml("Hola Danny");
//$dompdf->setPaper('letter');
//$dompdf->setPaper('letter');
//$dompdf->setPaper('A4', 'landscape');

$dompdf->render();
$dompdf->stream("archivo.pdf", array("Attachment" => false));

?>