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

<?php

include('conexion.php');
$edit_id=$_POST['edit_id'];
$edit_voto=$_POST['edit_voto'];
$gerencias=$_POST['edit_gerencia'];
$edit_observacion=$_POST['edit_observacion'];



//$dat = $_GET["dat"];
//$gerencias=$_POST["edit_gerencia"];


$codnom=$_GET["codnom"];

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
                                                                                                                                                                                                                                                                                                                                                                                                            
 
if (!$conexion) {
     
      header("location:../index.php?usu=6");
}
 
$sql = "UPDATE nomina SET id='$edit_id',voto='$edit_voto',observacion='$edit_observacion' WHERE id='$edit_id'" ;

if (mysqli_query($conexion, $sql)) {
      
    
      header("location:../index.php?dat=3&usu=2&codnom=$codnom");

} else { 

      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
      
}
mysqli_close($conexion);
?>














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
	
















