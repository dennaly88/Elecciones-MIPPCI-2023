<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
 
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
 
</head>
<body class="hold-transition skin-blue sidebar-mini">

<?php
session_start();
$edit_gerencias=$_POST['edit_gerencias'];   
$_SESSION['edit_gerencias']=$edit_gerencias;          
$busqueda_gerencias=$_SESSION['edit_gerencias'];

$dat = $_GET["dat"];
$gerencias=$_GET["edit_gerencia"];
$codnom=$_GET["codnom"];



switch ($dat) { 
  case 1:
    $gerencia='OFICINA DE TECNOLOGIAS DE LA INFORMACION Y LA COMUNICACION';  
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

<section class="content">
     
        

         <div class="box box-primary">
           <div class="box-header">

          
          

             <h3 class="box-title"> <span class="label btn bg-navy btn-fla  pull-left">
              INTERFAZ DE ESTADISTICAS POR DIRECCIONES MIPPCI</h3></span>
              <div class="pad margin no-print">

       
    </div>

    <center><a href="#registro_usuario" class='btn btn-primary btn-sm' data-toggle='modal'>
            <span class='glyphicon glyphicon-search'> </span>Buscar por Gerencias</a></center>
    <section class="invoice">
    
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <img href="#" src="imagenes/logo1-vtv.ico" alt="logo">
            <?php echo  $gerencia; ?>

           

            <small class="pull-right">
               <a href="#registro_usuario" class='btn btn-success btn-sm' data-toggle='modal'>
                FECHA : <?php  echo  date("d-M-Y"); ?>
                HORA :<?php 
                    date_default_timezone_set("America/Caracas");
                    $hora = date('h:i a',time() - 3600*date('I'));
                    print "&nbsp;$hora&nbsp;"; 
                  ?>
                  </a>
                </small>
          </h2>
        </div>
       
      </div>
     

      <div class="row">
        
       
  
      </div>
      <?php include('buscar-gerencia.php');?> 

                <?php
                        include('sql/conexion.php');
                         
                        $sql = "SELECT COUNT(*) total FROM nomina where gerencia='$gerencia'";
                        $result = mysqli_query($conexion, $sql);
                        $totalgerencia = mysqli_fetch_assoc($result);

                    ?>
                   <?php
                        include('sql/conexion.php');
                         
                        $sql = "SELECT COUNT(*) total FROM nomina where gerencia='$gerencia' and voto='SI'";
                        $result = mysqli_query($conexion, $sql);
                        $sivotarongerencia = mysqli_fetch_assoc($result);

                    ?>
                 <?php
                        include('sql/conexion.php');
                         
                        $sql = "SELECT COUNT(*) total FROM nomina where gerencia='$gerencia' and voto='NO'";
                        $result = mysqli_query($conexion, $sql);
                        $novotarongerencia = mysqli_fetch_assoc($result);

                    ?>
      <section class="content">
    
  
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Estadisticas de la Gerencia</h3>

            
            </div>
            
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                      <th>Nombre</th>
                      <th>Cantidad</th>
                      <th>Status</th>
                      <th>Información</th>
                </tr>
                <tr> 
                      <td>Cantidad de la Gerencia</td>
                      <td> <?php echo  $totalgerencia['total']; ?>  </td>
                      <td><span class="label label-success">TOTAL</span></td>
                      <td>Cantidad Total de los Trabajadores por la Gerencia.</td>
                </tr>
                <tr>
                      <td>Votaron SI</td>
                      <td><?php echo   $sivotarongerencia['total']; ?></td>
                      <td><span class="label label-primary">SI</span></td>
                      <td>Cantidad Total de los Trabajadores que SI Votaron por esta Gerencia.</td>
                </tr>
                <tr>
                      <td>Votaron NO</td>
                      <td><?php echo   $novotarongerencia['total']; ?></td>
                      <td><span class="label label-danger">NO</span></td>
                      <td>Cantidad Total de los Trabajadores que NO Votaron por esta Gereancia .</td>
                </tr>
               
              </table>
            </div>
           
          </div>
          
        </div>
      </div>
    </section>
    
      <div class="row no-print">
        <div class="col-xs-12">
          
      

        <?php
 
$gerencias=$gerencia;

        if ( $gerencias == 'OFICINA DE ATENCION CIUDADANA') {
    $codnom='1'; 
} else
if ( $gerencias == 'CONSULTORIA  JURIDICA  (ESTRUCTURA ANTERIOR)') {
   $codnom='2'; 
} 
  else
if ( $gerencias == 'CONSULTORIA JURIDICA') {
    $codnom='3'; 
} 
else
if ( $gerencias == 'COORD.DE SERVICIOS GENERALES  (ESTRUCTURA ANTERIOR)') {
$codnom='4'; 
 } else
if ( $gerencias == 'CORREO DEL ORINOCO (ESTRUCTURA ANTERIOR)') {
$codnom='5'; 
} else
if ( $gerencias == 'DEPARTAMENTO CANAL ONDA CORTA  (ESTRUCTURA ANTERIOR)') {
$codnom='6'; 
} else
if ( $gerencias == 'DEPARTAMENTO DE REGISTRO Y CONTROL  (ESTRUCTURA ANTERIOR)') {
$codnom='7'; 
} else
if ( $gerencias == 'DEPARTAMENTO DE RELACIONES INTERNACIONALES (ESTRCTURA ANTERIOR)') {
$codnom='8'; 
} else
if ( $gerencias == 'DEPARTAMENTO DE SERV. GENERALES (ESTRCTURA ANTERIOR)') {
    $codnom='9'; 
    } else
if ( $gerencias == 'DESPACHO DEL MINISTRO ') {
    $codnom='10'; 
    } else
if ( $gerencias == 'DESPACHO DEL VICEMINISTRO DE COMUNICACION E INFORMACION') {
$codnom='11'; 
    } else
if ( $gerencias == 'DESPACHO DEL VICEMINISTRO DE GESTION COMUNICACIONAL') {
$codnom='12'; 
} else
if ( $gerencias == 'DESPACHO DEL VICEMINISTRO DE NUEVAS FORMAS DE COMUNICACION (ESTRCTURA ANTERIOR)') {
$codnom='13'; 
} else
 if ( $gerencias == 'DESPACHO DEL VICEMINISTRO DE PLANIFICACION Y  ESTRATEGIA COMUNICACIONAL') {
$codnom='14'; 
} else
 if ( $gerencias == 'DESPACHO DEL VICEMINISTRO DE SOPORTE DE PLATAFORMA COMUNICACIONAL') {
 $codnom='15'; 
} else
if ( $gerencias == 'DESPACHO VICEMINISTERIO DE ESTRAT. COMUNICACIONAL (ESTRCTURA ANTERIOR)') {
$codnom='16'; 
 } else
 if ( $gerencias == 'DESPACHO VICEMINISTERIO DE GESTION COMUNICACIONAL  (ESTRUCTURA ANTERIOR)') {
$codnom='17'; 
} else
if ( $gerencias == 'DIREC. GRAL. DE MEDIOS ALTERNATIVOS Y COMUNITARIOS  (ESTRUCTURA ANTERIOR)') {
$codnom='18'; 
} else
if ( $gerencias == 'DIRECCION  DE PRODUCCION NACIONAL INDEPENDIENTE (P.N.I.)') {
$codnom='19'; 
} else
if ( $gerencias == 'DIRECCION  DEL DESPACHO DEL MINISTRO  (ESTRUCTURA ANTERIOR)') {
$codnom='20'; 
} else
if ( $gerencias == 'DIRECCION CREATIVA  (ESTRUCTURA ANTERIOR)') {
$codnom='21'; 
} else
if ( $gerencias == 'DIRECCION DE ADMINISTRACION') {
$codnom='22'; 
} else
if ( $gerencias == 'DIRECCIÓN DE ADMINISTRACIÓN  (ESTRUCTURA ANTERIOR)') {
$codnom='23'; 
 } else
if ( $gerencias == 'DIRECCION DE ADMINISTRACION (ESTRCTURA ANTERIOR)') {
$codnom='24'; 
} else
if ( $gerencias == 'DIRECCION DE ANALISIS DEL ENTORNO') {
$codnom='25'; 
} else
if ( $gerencias == 'DIRECCION DE ANALISIS DEL ENTORNO  (ESTRUCTURA ANTERIOR)') {
$codnom='26'; 
 } else
if ( $gerencias == 'DIRECCION DE ANALISIS Y MONITOREO') {
$codnom='27'; 
} else
if ( $gerencias == 'DIRECCION DE ARCHIVO GENERAL') {
$codnom='28'; 
} else
if ( $gerencias == 'DIRECCION DE ARCHIVO GENERAL  (ESTRUCTURA ANTERIOR)') {
$codnom='29'; 
} else
if ( $gerencias == 'DIRECCION DE ARTE') {
$codnom='30'; 
} else
if ( $gerencias == 'DIRECCION DE ARTICULACION OPERATIVA CON MEDIOS') {
$codnom='31'; 
} else
if ( $gerencias == 'DIRECCION DE AUDIOVISUAL  (ESTRUCTURA ANTERIOR)') {
$codnom='32'; 
} else
if ( $gerencias == 'DIRECCION DE AUDIOVISUALES') {
$codnom='33'; 
} else
if ( $gerencias == 'DIRECCIÓN DE AUDITORIA INTERNA  (ESTRUCTURA ANTERIOR)') {
$codnom='34'; 
} else
if ( $gerencias == 'DIRECCION DE COBERTURA AUDIOVISUAL PRESIDENCIAL') {
$codnom='35'; 
} else
if ( $gerencias == 'DIRECCION DE COMPRAS  (ESTRUCTURA ANTERIOR)') {
$codnom='36'; 
} else
if ( $gerencias == 'DIRECCION DE COMPRAS Y SERVICIOS') {
$codnom='37'; 
} else
if ( $gerencias == 'DIRECCIÓN DE CONSULTORÍA JURÍDICA  (ESTRUCTURA ANTERIOR)') {
$codnom='38'; 
} else
if ( $gerencias == 'DIRECCION DE CONTABILIDAD') {
$codnom='39'; 
} else
if ( $gerencias == 'DIRECCION DE CONTENIDO MULTIMEDIA') {
$codnom='40'; 
} else
if ( $gerencias == 'DIRECCION DE CONTRATACIONES') {
$codnom='41'; 
} else
if ( $gerencias == 'DIRECCION DE CREATIVOS') {
$codnom='42'; 
} else
if ( $gerencias == 'DIRECCION DE DIFUSION') {
$codnom='43'; 
} else
if ( $gerencias == 'DIRECCION DE DISEÑO DE ESTRATEGIA') {
$codnom='44'; 
} else
if ( $gerencias == 'DIRECCION DE DISEÑO DE ESTRATEGIA  (ESTRUCTURA ANTERIOR)') {
$codnom='45'; 
} else
if ( $gerencias == 'DIRECCION DE ENLACE SICI') {
$codnom='46'; 
} else
if ( $gerencias == 'DIRECCION DE INVESTIGACION SOCIAL') {
$codnom='47'; 
} else
if ( $gerencias == 'DIRECCION DE LA OFICINA DE INFORMACION REGIONAL (OIR)') {
$codnom='48'; 
} else
if ( $gerencias == 'DIRECCION DE MEDIOS NO CONVENCIONALES (COMUNICALLE)') {
$codnom='49'; 
} else
if ( $gerencias == 'DIRECCION DE OFICINA DE INFORMACION REGIONAL  (ESTRUCTURA ANTERIOR)') {
$codnom='50'; 
} else
if ( $gerencias == 'DIRECCION DE PAUTAS PUBLICITARIAS  (ESTRUCTURA ANTERIOR)') {
$codnom='51'; 
} else
if ( $gerencias == 'DIRECCION DE PLANIFICACION') {
$codnom='52'; 
} else
if ( $gerencias == 'DIRECCION DE PLATAFORMA WEB') {
$codnom='53'; 
} else
if ( $gerencias == 'DIRECCION DE PRENSA (ESTRUCTURA ANTERIOR)') {
$codnom='54'; 
} else
if ( $gerencias == 'DIRECCION DE PRENSA PRESIDENCIAL') {
$codnom='55'; 
} else
if ( $gerencias == 'DIRECCION DE PRESUPUESTO') {
$codnom='56'; 
} else
if ( $gerencias == 'DIRECCION DE PUBLICACIONES') {
$codnom='57'; 
} else
if ( $gerencias == 'DIRECCION DE PUBLICACIONES  (ESTRUCTURA ANTERIOR)') {
    $codnom='58'; 
} else
if ( $gerencias == 'DIRECCION DE RESPONSABILIDAD SOCIAL') {
$codnom='59'; 
} else
if ( $gerencias == 'DIRECCION DE SERVICIOS GENERALES') {
$codnom='60'; 
} else
if ( $gerencias == 'DIRECCION DE SERVICIOS GENERALES  (ESTRUCTURA ANTERIOR)') {
$codnom='61'; 
} else
if ( $gerencias == 'DIRECCIÓN DE TECNOLOGÍA E INFORMACIÓN  (ESTRUCTURA ANTERIOR)') {
$codnom='62'; 
} else
if ( $gerencias == 'DIRECCION DEL DESPACHO  (ESTRUCTURA ANTERIOR)') {
$codnom='63'; 
} else
if ( $gerencias == 'DIRECCION GENERAL DE ARTICULACION CON MEDIOS NAC. E INTERNACIONALES') {
$codnom='64'; 
} else
if ( $gerencias == 'DIRECCION GENERAL DE COMUNICACION DE GOBIERNO') {
$codnom='65'; 
} else
if ( $gerencias == 'DIRECCION GENERAL DE COMUNICACION DIGITAL') {
$codnom='66'; 
} else
if ( $gerencias == 'DIRECCION GENERAL DE COMUNICACION INTERNACIONAL  (ESTRUCTURA ANTERIOR)') {
$codnom='67'; 
} else
if ( $gerencias == 'DIRECCION GENERAL DE COMUNICACION NACIONAL  (ESTRUCTURA ANTERIOR)') {
$codnom='68'; 
} else
if ( $gerencias == 'DIRECCION GENERAL DE COMUNICACIONES PRESIDENCIALES  (ESTRUCTURA ANTERIOR)') {
$codnom='69'; 
} else
if ( $gerencias == 'DIRECCION GENERAL DE COORDINACION INSTITUCIONAL  (ESTRUCTURA ANTERIOR)') {
$codnom='70'; 
} else
if ( $gerencias == 'DIRECCION GENERAL DE DIFUSION METRICA Y DIGITAL (ESTRCTURA ANTERIOR)') {
$codnom='71'; 
} else
if ( $gerencias == 'DIRECCION GENERAL DE DIFUSION Y PUBLICIDAD  (ESTRUCTURA ANTERIOR)') {
$codnom='72'; 
} else
if ( $gerencias == 'DIRECCION GENERAL DE DISEÑO DE CONTENIDOS ALTERNATIVOS (ESTRCTURA ANTERIOR)') {
$codnom='73'; 
} else
if ( $gerencias == 'DIRECCION GENERAL DE ESTRATEGIA COMUNICACIONAL') {
$codnom='74'; 
} else
if ( $gerencias == 'DIRECCIÓN GENERAL DE ESTRATEGIA COMUNICACIONAL  (ESTRUCTURA ANTERIOR)') {
$codnom='75'; 
} else
if ( $gerencias == 'DIRECCION GENERAL DE GESTION ADMINISTRATIVA  (ESTRUCTURA ANTERIOR)') {
$codnom='76'; 
} else
if ( $gerencias == 'DIRECCION GENERAL DE GESTION INFORMATIVA  (ESTRUCTURA ANTERIOR)') {
$codnom='77'; 
} else
if ( $gerencias == 'DIRECCION GENERAL DE INTEGRACION Y REDES TECNOLOGICAS') {
$codnom='78'; 
} else
if ( $gerencias == 'DIRECCION GENERAL DE MEDIOS ALTERNATIVOS Y COMUNITARIOS') {
$codnom='79'; 
} else
if ( $gerencias == 'DIRECCION GENERAL DE MEDIOS OFICIALES Y OIR  (ESTRUCTURA ANTERIOR)') {
$codnom='80'; 
} else
if ( $gerencias == 'DIRECCION GENERAL DE PLANES COMUNICACIONALES') {
$codnom='81'; 
} else
if ( $gerencias == 'DIRECCION GENERAL DE PRENSA  (ESTRUCTURA ANTERIOR)') {
$codnom='82'; 
} else
if ( $gerencias == 'DIRECCION GENERAL DE PRODUCCION DE CONTENIDO') {
$codnom='83'; 
} else
if ( $gerencias == 'DIRECCION GENERAL DE RELACIONES INTERINSTITUCIONALES  (ESTRUCTURA ANTERIOR)') {
$codnom='84'; 
} else
if ( $gerencias == 'DIRECCION GENERAL DE RESPONSABILIDAD SOCIAL  (ESTRUCTURA ANTERIOR)') {
$codnom='85'; 
} else
if ( $gerencias == 'DIRECCION GENERAL DE RESPONSABILIDAD SOCIAL Y PROD. NAC. INDEPEND.') {
$codnom='86'; 
} else
if ( $gerencias == 'DIRECCION GENERAL DE SEGUIMIENTO Y POLITICAS') {
$codnom='87'; 
} else
if ( $gerencias == 'DIRECCION GENERAL DE TRANSMISIONES') {
$codnom='88'; 
} else
if ( $gerencias == 'DIRECCION GENERAL DEL DESPACHO') {
$codnom='89'; 
} else
if ( $gerencias == 'DIRECCION GRUPO EDITORIAL') {
$codnom='90'; 
} else
if ( $gerencias == 'DIVISION DE PERSONAL  (ESTRCTURA ANTERIOR)') {
$codnom='91'; 
} else
if ( $gerencias == 'DIVISION DE PERSONAL  (ESTRUCTURA ANTERIOR)') {
$codnom='92'; 
} else
if ( $gerencias == 'DIVISION DE PRESUPUESTO  (ESTRUCTURA ANTERIOR)') {
$codnom='93'; 
} else
if ( $gerencias == 'DIVISION DE TRANSMISION  (ESTRUCTURA ANTERIOR)') {
$codnom='94'; 
} else
if ( $gerencias == 'JEFATURA SERV. AUTONO. IMP. NAC. Y GACETA (ESTRCTURA ANTERIOR)') {
$codnom='95'; 
} else
if ( $gerencias == 'JEFATURA SERVICIO AUTONOMO RADIO VENPRES  (ESTRUCTURA ANTERIOR)') {
$codnom='96'; 
} else
if ( $gerencias == 'OFIC. CONSULTORIA Y ANALISIS JURIDICO  (ESTRUCTURA ANTERIOR)') {
$codnom='97'; 
} else
if ( $gerencias == 'OFIC. ESTRATEGICA DE SEGUIMIENTO Y EVALUACION DE POLITICAS PUBLICAS') {
$codnom='98'; 
} else
if ( $gerencias == 'OFIC. GESTION INTERNA  (ESTRUCTURA ANTERIOR)') {
$codnom='99'; 
} else
if ( $gerencias == 'OFIC. INVESTIGACION COMUNICACIONAL (ESTRUCTURA ANTERIOR)') {
$codnom='100'; 
} else
if ( $gerencias == 'OFIC. PLANIFICACION Y PRESUPUESTO (ESTRCTURA ANTERIOR)') {
$codnom='101'; 
} else
if ( $gerencias == 'OFICINA DE ADMINISTRACION Y FINANZAS  (ESTRUCTURA ANTERIOR)') {
$codnom='102'; 
} else
if ( $gerencias == 'OFICINA DE ASUNTOS PRESIDENCIALES  (ESTRUCTURA ANTERIOR)') {
$codnom='103'; 
} else
if ( $gerencias == 'OFICINA DE ATENCION CIUDADANA') {
$codnom='104'; 
} else
if ( $gerencias == 'OFICINA DE AUDITORIA INTERNA') {
$codnom='105'; 
} else
if ( $gerencias == 'OFICINA DE GESTION ADMINISTRATIVA') {
$codnom='106'; 
} else
if ( $gerencias == 'OFICINA DE GESTION COMUNICACIONAL') {
$codnom='107'; 
} else
if ( $gerencias == 'OFICINA DE GESTION HUMANA') {
$codnom='108'; 
} else
if ( $gerencias == 'OFICINA DE INTEGRACION Y ASUNTOS INTERNACIONALES') {
$codnom='109'; 
} else
if ( $gerencias == 'OFICINA DE PLANIFICACION  (ESTRUCTURA ANTERIOR)') {
$codnom='110'; 
} else
if ( $gerencias == 'OFICINA DE PLANIFICACION Y PRESUPUESTO') {
$codnom='111'; 
} else
if ( $gerencias == 'OFICINA DE PRENSA PRESIDENCIAL') {
$codnom='112'; 
} else
if ( $gerencias == 'OFICINA DE PRESUPUESTO  (ESTRUCTURA ANTERIOR)') {
$codnom='113'; 
} else
if ( $gerencias == 'OFICINA DE RECURSOS HUMANOS  (ESTRUCTURA ANTERIOR)') {
$codnom='114'; 
} else
if ( $gerencias == 'OFICINA DE SEGURIDAD Y PROTECCION INTEGRAL') {
$codnom='115'; 
} else
if ( $gerencias == 'OFICINA DE TECNOLOGIA  (ESTRUCTURA ANTERIOR)') {
$codnom='116'; 
} else
if ( $gerencias == 'OFICINA DE TECNOLOGIAS DE LA INFORMACION Y LA COMUNICACION') {
$codnom='117';
 } else
 if ( $gerencias == 'PERSONAL PENSIONADOS Y JUBILADOS AGENCIA BOLIVARIANA  (ESTRUCTURA ANTERIOR)') {
$codnom='118'; 
} else
if ( $gerencias == 'PERSONAL PENSIONADOS Y JUBILADOS RADIO NACIONAL DE VENEZUELA  (ESTRUCTURA ANTERIOR)') {
$codnom='119'; 
} else
if ( $gerencias == 'PLANTA DE CARABOBO  (ESTRUCTURA ANTERIOR)') {
$codnom='120'; 
} else
if ( $gerencias == 'PLANTA DE PUERTO ORDAZ  (ESTRUCTURA ANTERIOR)') {
$codnom='121'; 
} else
if ( $gerencias == 'PLANTA LA RINCONADA  (ESTRUCTURA ANTERIOR)') {
$codnom='122'; 
} else
if ( $gerencias == 'UNIDAD DE AUDITORIA INTERNA (ESTRCTURA ANTERIOR)') {
$codnom='123'; 
} else
if ( $gerencias == 'VICEMINISTERIO DE ESTRATEGIA COMUNICACIONAL  (ESTRUCTURA ANTERIOR)') {
$codnom='124'; 
} else
if ( $gerencias == 'VICEMINISTERIO DE GESTIÓN COMUNICACIONAL  (ESTRUCTURA ANTERIOR)') {
$codnom='125'; 
} 


?>







        <div class="col-lg-4 col-xs-6">
                      <div class="small-box bg-red">
                        <div class="inner">
                          <h3>   <?php echo $novotaron['total']; ?></h3>
                          <p><img href="#" src="imagenes/logo-VTV.png" alt="logo" width="80" height="30"></p></p>
                        </div>
                        <div class="icon">
                          <i class="ion-person-stalker"></i>
                         
                        </div>


                        <a href="../reportes/dompdf/estadsticas-pordirecciones.php?codnom=$codnom" class="small-box-footer"> <i class="fa fa-download"></i> Generate PDF<i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>

 
          
            
         
          </button>
        </div>
      </div>
    </section>
              
   </section>

   





   <script>

   </script>

   <script src="librerias/js/usuario.js"></script>




</body>
</html>
