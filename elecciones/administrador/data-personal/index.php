<!-----------------------------------------------------------------------------------------------------|
|------------------------------------------------------------------------------------------------------|
| PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ                                                  |
| CEDULA    : V 16.029.567                                                                             |
| TELEFONO  : 0426-249-15-40                                                                           |
| CORREO    : DENNALY88@GMAIL.COM                                                                      |
| DIRECCIÓN : CUA , ESTADO MIRANDA  CONJUTO RESIDENCIAL EL CASTILLO APARTAMENTO 62-C                   |                                                     |
|------------------------------------------------------------------------------------------------------|
|------------------------------------------------------------------------------------------------------|  
|                                                                                                      |
|  VENEZOLANA DE TELEVISIÓN C.A                                                                        |
|  DIVISIÓN DESARROLLO DE SISTEMAS Y DIVISIÓN DE SERVIDORES Y REDES                                    |
|  CANAL 8                                                                                             |
|                                                                                                      |
|  PROYECTO SOCIOTECNOLOGICO                                                                           |
|  UNIVERSIDAD EXPERIMENTAL DE LA GRAN CARACAS UNEXCA                                                  |
|  PARA OPTAR POR EL TITULO DE INGENIERO EN SISTEMA                                                    |
|                                                                                                      | 
-------------------------------------------------------------------------------------------------------- 
------------------------------------------------------------------------------------------------------->
<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="imagenes/logo1-vtv.ico">
    <title>Elecciones 2023 | VTV</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>

<!-------------------------------------------------------------------------------------------------------- 
                                           PRINCIPAL SISTEMA
------------------------------------------------------------------------------------------------------->

<body class="hold-transition skin-blue sidebar-mini">
  
<div class="wrapper">

<?php
                session_start();
		            $usuario=$_SESSION['usuario'] ;
                $imagen=$_SESSION['imagen'];
                $nombres=$_SESSION['nombres'];
                $apellidos= $_SESSION['apellidos'];    
                $id_rol=$_SESSION['id_rol']; 
                $corre=$_SESSION['corre'];             
?> 

<!-------------------------------------------------------------------------------------------------------- 
                                           CONSULTA DE PERFIL
------------------------------------------------------------------------------------------------------->
<?php 
session_start();
include('sql/conexion.php');

  if(!$conexion)  
{
  include ('mensajes/conexion-fallida.php');  
}
else {
       
$id=$_SESSION['id'];          
$id_rol=$_SESSION['id_rol'];                       
$imagen=$_SESSION['imagen'];
$nombres=$_SESSION['nombres'];
$apellidos=$_SESSION['apellidos'];
$usuario=$_SESSION['usuario'];
$consulta=" SELECT * FROM usuarios u INNER JOIN roles r  ON u.id_rol=r.id  WHERE '$id'=u.id ";
$result=mysqli_query($conexion,$consulta);          
while($mostrar=mysqli_fetch_array($result)){
  ?> 
<?php
$perfil=$mostrar['nombre']; 
session_start();
$_SESSION['perfil']=$perfil;

}
  ?>	
<?php 
if ($id_rol == '1') {

  $perfil='Administrador';
   
  } else
  if ($id_rol == '2') {
  
    $perfil='Coordinador';
  
  
  } else
  if ($id_rol == '3'){
    $perfil='Tecnico';
  
  }
} 
?> 

<?php 
if ($id_rol == '1') {

  $perfil='Administrador';
   
  } else
  if ($id_rol == '2') {
  
    $perfil='Coordinador';
  
  
  } else
  if ($id_rol == '3'){
    $perfil='Tecnico';
  
  }


  ?>

       <?php
            if($perfil=='Administrador'){
              require ("../menus/menu-administrador.php");
                   
            }
            else 
            if($perfil=='Coordinador'){
              require ("../menus/menu-coordinador.php");

            }

            else
          if($perfil=='Tecnico'){
            require ("../menus/menu-tecnico.php");
          }

?>







<?php
session_start();
 
$_SESSION['edit_gerencias']=$edit_gerencias;          

  
$dat = $_GET["dat"];

switch ($dat) { 

  /******************************************** AL MARCAR DATA PERSONAL TE SALE POR DEFECTO OFICINA DE GESTION HUMANA dat 1 *********************************************************/

  case 1:      
  $gerencia='OFICINA DE TECNOLOGIAS DE LA INFORMACION Y LA COMUNICACION';  
  break;

/*************************************************************************************************************************************************************************************************/        
  

/***************************************************  AL MARCAR BUSCAR POR DIRECCION  dat 2  ****************************************************************************************************/

case 2:  
$edit_gerencias=$_POST['edit_gerencias'];  
$gerencia=$edit_gerencias;
break;

/**********************************************************************************************************************************************************************************************/        


/**********************************************************************  AL MARCAE VOTO SIGUE EN LA DIRRECION dat 3 ****************************************************************************/

case 3:
  $codnom=$_GET["codnom"];

  if ($codnom =='1') {
    $gerencias = 'AUDITORIA INTERNA  (ESTRUCTURA ANTERIOR)';
    } else
    if ($codnom =='2') {
      $gerencias = 'CONSULTORIA  JURIDICA  (ESTRUCTURA ANTERIOR)';
    } else
    if ($codnom =='3') {
      $gerencias = 'CONSULTORIA JURIDICA';
    }else
    if ($codnom =='4') {
      $gerencias = 'COORD.DE SERVICIOS GENERALES  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='5') {
      $gerencias = 'CORREO DEL ORINOCO (ESTRUCTURA ANTERIOR)';
    }else
     if ($codnom =='6') {
      $gerencias = 'DEPARTAMENTO CANAL ONDA CORTA  (ESTRUCTURA ANTERIOR)';
    }else
     if ($codnom =='7') {
      $gerencias = 'DEPARTAMENTO DE REGISTRO Y CONTROL  (ESTRUCTURA ANTERIOR)';
    }else
     if ($codnom =='8') {
      $gerencias = 'DEPARTAMENTO DE RELACIONES INTERNACIONALES (ESTRCTURA ANTERIOR)';
    }else
     if ($codnom =='9') {
      $gerencias = 'DEPARTAMENTO DE SERV. GENERALES (ESTRCTURA ANTERIOR)';
    }else
     if ($codnom =='10') {
      $gerencias = 'DESPACHO DEL MINISTRO';
    }else
     if ($codnom =='11') {
      $gerencias = 'DESPACHO DEL VICEMINISTRO DE COMUNICACION E INFORMACION';
    }else
     if ($codnom =='12') {
      $gerencias = 'DESPACHO DEL VICEMINISTRO DE GESTION COMUNICACIONAL';
    }else
     if ($codnom =='13') {
      $gerencias = 'DESPACHO DEL VICEMINISTRO DE NUEVAS FORMAS DE COMUNICACION (ESTRCTURA ANTERIOR)';
    }else
     if ($codnom =='14') {
      $gerencias = 'DESPACHO DEL VICEMINISTRO DE PLANIFICACION Y  ESTRATEGIA COMUNICACIONAL';
    }else
     if ($codnom =='15') {
      $gerencias = 'DESPACHO DEL VICEMINISTRO DE SOPORTE DE PLATAFORMA COMUNICACIONAL';
    }else
     if ($codnom =='16') {
      $gerencias = 'DESPACHO VICEMINISTERIO DE ESTRAT. COMUNICACIONAL (ESTRCTURA ANTERIOR)';
    }else
     if ($codnom =='17') {
      $gerencias = 'DESPACHO VICEMINISTERIO DE GESTION COMUNICACIONAL  (ESTRUCTURA ANTERIOR)';
    }else
     if ($codnom =='18') {
      $gerencias = 'DIREC. GRAL. DE MEDIOS ALTERNATIVOS Y COMUNITARIOS  (ESTRUCTURA ANTERIOR)';
    }else
     if ($codnom =='19') {
      $gerencias = 'DIRECCION  DE PRODUCCION NACIONAL INDEPENDIENTE (P.N.I.)';
    }else
     if ($codnom =='20') {
      $gerencias = 'DIRECCION  DEL DESPACHO DEL MINISTRO  (ESTRUCTURA ANTERIOR)';
    }else
     if ($codnom =='21') {
      $gerencias = 'DIRECCION CREATIVA  (ESTRUCTURA ANTERIOR)';
    }else
     if ($codnom =='22') {
      $gerencias = 'DIRECCION DE ADMINISTRACION';
    }else
     if ($codnom =='23') {
      $gerencias = 'DIRECCIÓN DE ADMINISTRACIÓN  (ESTRUCTURA ANTERIOR)';
    }else
     if ($codnom =='24') {
      $gerencias = 'DIRECCION DE ADMINISTRACION (ESTRCTURA ANTERIOR)';
    }else
     if ($codnom =='25') {
      $gerencias = 'DIRECCION DE ANALISIS DEL ENTORNO';
    }else
     if ($codnom =='26') {
      $gerencias = 'DIRECCION DE ANALISIS DEL ENTORNO  (ESTRUCTURA ANTERIOR)';
    }else
     if ($codnom =='27') {
      $gerencias = 'DIRECCION DE ANALISIS Y MONITOREO';
    }else
    if ($codnom =='28') {
      $gerencias = 'DIRECCION DE ARCHIVO GENERAL';
    }else
    if ($codnom =='29') {
      $gerencias = 'DIRECCION DE ARCHIVO GENERAL  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='30') {
      $gerencias = 'DIRECCION DE ARTE';
    }else
    if ($codnom =='31') {
      $gerencias = 'DIRECCION DE ARTICULACION OPERATIVA CON MEDIOS';
    }else
    if ($codnom =='32') {
      $gerencias = 'DIRECCION DE AUDIOVISUAL  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='33') {
      $gerencias = 'DIRECCION DE AUDIOVISUALES';
    }else
    if ($codnom =='34') {
      $gerencias = 'DIRECCIÓN DE AUDITORIA INTERNA  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='35') {
      $gerencias = 'DIRECCION DE COBERTURA AUDIOVISUAL PRESIDENCIAL';
    }else
    if ($codnom =='36') {
      $gerencias = 'DIRECCION DE COMPRAS  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='37') {
      $gerencias = 'DIRECCION DE COMPRAS Y SERVICIOS';
    }else
    if ($codnom =='38') {
      $gerencias = 'DIRECCIÓN DE CONSULTORÍA JURÍDICA  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='39') {
      $gerencias = 'DIRECCION DE CONTABILIDAD';
    }else
    if ($codnom =='40') {
      $gerencias = 'DIRECCION DE CONTENIDO MULTIMEDIA';
    }else
    if ($codnom =='41') {
      $gerencias = 'DIRECCION DE CONTRATACIONES';
    }else
    if ($codnom =='42') {
      $gerencias = 'DIRECCION DE CREATIVOS';
    }else
    if ($codnom =='43') {
      $gerencias = 'DIRECCION DE DIFUSION';
    }else
    if ($codnom =='44') {
      $gerencias = 'DIRECCION DE DISEÑO DE ESTRATEGIA';
    }else
    if ($codnom =='45') {
      $gerencias = 'DIRECCION DE DISEÑO DE ESTRATEGIA  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='46') {
      $gerencias = 'DIRECCION DE ENLACE SICI';
    }else
    if ($codnom =='47') {
      $gerencias = 'DIRECCION DE INVESTIGACION SOCIAL';
    }else
    if ($codnom =='48') {
      $gerencias = 'DIRECCION DE LA OFICINA DE INFORMACION REGIONAL (OIR)';
    }else
    if ($codnom =='49') {
      $gerencias = 'DIRECCION DE MEDIOS NO CONVENCIONALES (COMUNICALLE)';
    }else
    if ($codnom =='50') {
      $gerencias = 'DIRECCION DE OFICINA DE INFORMACION REGIONAL  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='51') {
      $gerencias = 'DIRECCION DE PAUTAS PUBLICITARIAS  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='52') {
      $gerencias = 'DIRECCION DE PLANIFICACION';
    }else
    if ($codnom =='53') {
      $gerencias = 'DIRECCION DE PLATAFORMA WEB';
    }else
    if ($codnom =='54') {
      $gerencias = 'DIRECCION DE PRENSA (ESTRUCTURA ANTERIOR)';
    }else
    if($codnom =='55') {
      $gerencias = 'DIRECCION DE PRENSA PRESIDENCIAL';
    }else
    if ($codnom =='56') {
      $gerencias = 'DIRECCION DE PRESUPUESTO';
    }else
    if ($codnom =='57') {
      $gerencias = 'DIRECCION DE PUBLICACIONES';
    }else
    if ($codnom =='58') {
      $gerencias = 'DIRECCION DE PUBLICACIONES  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='59') {
      $gerencias = 'DIRECCION DE RESPONSABILIDAD SOCIAL';
    }else
    if ($codnom =='60') {
      $gerencias = 'DIRECCION DE SERVICIOS GENERALES';
    }else
    if ($codnom =='61') {
      $gerencias = 'DIRECCION DE SERVICIOS GENERALES  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='62') {
      $gerencias = 'DIRECCIÓN DE TECNOLOGÍA E INFORMACIÓN  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='63') {
      $gerencias = 'DIRECCION DEL DESPACHO  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='64') {
      $gerencias = 'DIRECCION GENERAL DE ARTICULACION CON MEDIOS NAC. E INTERNACIONALES';
    }else
    if ($codnom =='65') {
      $gerencias = 'DIRECCION GENERAL DE COMUNICACION DE GOBIERNO';
    }else
    if ($codnom =='66') {
      $gerencias = 'DIRECCION GENERAL DE COMUNICACION DIGITAL';
    }else
    if ($codnom =='67') {
      $gerencias = 'DIRECCION GENERAL DE COMUNICACION INTERNACIONAL  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='68') {
      $gerencias = 'DIRECCION GENERAL DE COMUNICACION NACIONAL  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='69') {
      $gerencias = 'DIRECCION GENERAL DE COMUNICACIONES PRESIDENCIALES  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='70') {
      $gerencias = 'DIRECCION GENERAL DE COORDINACION INSTITUCIONAL  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='71') {
      $gerencias = 'DIRECCION GENERAL DE DIFUSION METRICA Y DIGITAL (ESTRCTURA ANTERIOR)';
    }else
    if ($codnom =='72') {
      $gerencias = 'DIRECCION GENERAL DE DIFUSION Y PUBLICIDAD  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='73') {
      $gerencias = 'DIRECCION GENERAL DE DISEÑO DE CONTENIDOS ALTERNATIVOS (ESTRCTURA ANTERIOR)';
    }else
    if ($codnom =='74') {
      $gerencias = 'DIRECCION GENERAL DE ESTRATEGIA COMUNICACIONAL';
    }else
    if ($codnom =='75') {
      $gerencias = 'DIRECCIÓN GENERAL DE ESTRATEGIA COMUNICACIONAL  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='76') {
      $gerencias = 'DIRECCION GENERAL DE GESTION ADMINISTRATIVA  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='77') {
      $gerencias = 'DIRECCION GENERAL DE GESTION INFORMATIVA  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='78') {
      $gerencias = 'DIRECCION GENERAL DE INTEGRACION Y REDES TECNOLOGICAS';
    }else
    if ($codnom =='79') {
      $gerencias = 'DIRECCION GENERAL DE MEDIOS ALTERNATIVOS Y COMUNITARIOS';
    }else
    if ($codnom =='80') {
      $gerencias = 'DIRECCION GENERAL DE MEDIOS OFICIALES Y OIR  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='81') {
      $gerencias = 'DIRECCION GENERAL DE PLANES COMUNICACIONALES';
    }else
    if ($codnom =='82') {
      $gerencias = 'DIRECCION GENERAL DE PRENSA  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='83') {
      $gerencias = 'DIRECCION GENERAL DE PRODUCCION DE CONTENIDO';
    }else
    if ($codnom =='84') {
      $gerencias = 'DIRECCION GENERAL DE RELACIONES INTERINSTITUCIONALES  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='85') {
      $gerencias = 'DIRECCION GENERAL DE RESPONSABILIDAD SOCIAL  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='86') {
      $gerencias = 'DIRECCION GENERAL DE RESPONSABILIDAD SOCIAL Y PROD. NAC. INDEPEND.';
    }else
    if ($codnom =='87') {
      $gerencias = 'DIRECCION GENERAL DE SEGUIMIENTO Y POLITICAS';
    }else
    if ($codnom =='88') {
      $gerencias = 'DIRECCION GENERAL DE TRANSMISIONES';
    }else
    if ($codnom =='89') {
      $gerencias = 'DIRECCION GENERAL DEL DESPACHO';
    }else
    if ($codnom =='90') {
      $gerencias = 'DIRECCION GRUPO EDITORIAL';
    }else
    if ($codnom =='91') {
      $gerencias = 'DIVISION DE PERSONAL  (ESTRCTURA ANTERIOR)';
    }else
    if ($codnom =='92') {
      $gerencias = 'DIVISION DE PERSONAL  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='93') {
      $gerencias = 'DIVISION DE PRESUPUESTO  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='94') {
      $gerencias = 'DIVISION DE TRANSMISION  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='95') {
      $gerencias = 'JEFATURA SERV. AUTONO. IMP. NAC. Y GACETA (ESTRCTURA ANTERIOR)';
    }else
    if ($codnom =='96') {
      $gerencias = 'JEFATURA SERVICIO AUTONOMO RADIO VENPRES  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='97') {
      $gerencias = 'OFIC. CONSULTORIA Y ANALISIS JURIDICO  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='98') {
      $gerencias = 'OFIC. ESTRATEGICA DE SEGUIMIENTO Y EVALUACION DE POLITICAS PUBLICAS';
    }else
    if ($codnom =='99') {
      $gerencias = 'OFIC. GESTION INTERNA  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='100') {
      $gerencias = 'OFIC. INVESTIGACION COMUNICACIONAL (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='101') {
      $gerencias = 'OFIC. PLANIFICACION Y PRESUPUESTO (ESTRCTURA ANTERIOR)';
    }else
    if ($codnom =='102') {
      $gerencias = 'OFICINA DE ADMINISTRACION Y FINANZAS  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='103') {
      $gerencias = 'OFICINA DE ASUNTOS PRESIDENCIALES  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='104') {
      $gerencias = 'OFICINA DE ATENCION CIUDADANA';
    }else
    if ($codnom =='105') {
      $gerencias = 'OFICINA DE AUDITORIA INTERNA';
    }else
    if ($codnom =='106') {
      $gerencias = 'OFICINA DE GESTION ADMINISTRATIVA';
    }else
    if ($codnom =='107') {
      $gerencias = 'OFICINA DE GESTION COMUNICACIONAL';
    }else
    if ($codnom =='108') {
      $gerencias = 'OFICINA DE GESTION HUMANA';
    }else
    if ($codnom =='109') {
      $gerencias = 'OFICINA DE INTEGRACION Y ASUNTOS INTERNACIONALES';
    }else
    if ($codnom =='110') {
      $gerencias = 'OFICINA DE PLANIFICACION  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='111') {
      $gerencias = 'OFICINA DE PLANIFICACION Y PRESUPUESTO';
    }else
    if ($codnom =='112') {
      $gerencias = 'OFICINA DE PRENSA PRESIDENCIAL';
    }else
    if ($codnom =='113') {
      $gerencias = 'OFICINA DE PRESUPUESTO  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='114') {
      $gerencias = 'OFICINA DE RECURSOS HUMANOS  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='115') {
      $gerencias = 'OFICINA DE SEGURIDAD Y PROTECCION INTEGRAL';
    }else
    if ($codnom =='116') {
      $gerencias = 'OFICINA DE TECNOLOGIA  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='117') {
      $gerencias = 'OFICINA DE TECNOLOGIAS DE LA INFORMACION Y LA COMUNICACION';
    }else
    if ($codnom =='118') {
      $gerencias = 'PERSONAL PENSIONADOS Y JUBILADOS AGENCIA BOLIVARIANA  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='119') {
      $gerencias = 'PERSONAL PENSIONADOS Y JUBILADOS RADIO NACIONAL DE VENEZUELA  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='120') {
      $gerencias = 'PLANTA DE CARABOBO  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='121') {
      $gerencias = 'PLANTA DE PUERTO ORDAZ  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='122') {
      $gerencias = 'PLANTA LA RINCONADA  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='123') {
      $gerencias = 'UNIDAD DE AUDITORIA INTERNA (ESTRCTURA ANTERIOR)';
    }else
    if ($codnom =='124') {
      $gerencias = 'VICEMINISTERIO DE ESTRATEGIA COMUNICACIONAL  (ESTRUCTURA ANTERIOR)';
    }else
    if ($codnom =='125') {
      $gerencias = 'VICEMINISTERIO DE GESTIÓN COMUNICACIONAL  (ESTRUCTURA ANTERIOR)';
    }

    $gerencia=$gerencias; 
     
    break;   
/**********************************************************************************************************************************************************************************************/        

/***************************************************************  AL MARCAR CAMBIAR LA FOTO SERIA dat 4 ****************************************************************************************/

    case 4:  
      $codnom=$_GET["codnom"];

      if ($codnom =='1') {
        $gerencias = 'AUDITORIA INTERNA  (ESTRUCTURA ANTERIOR)';
        } else
        if ($codnom =='2') {
          $gerencias = 'CONSULTORIA  JURIDICA  (ESTRUCTURA ANTERIOR)';
        } else
        if ($codnom =='3') {
          $gerencias = 'CONSULTORIA JURIDICA';
        }else
        if ($codnom =='4') {
          $gerencias = 'COORD.DE SERVICIOS GENERALES  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='5') {
          $gerencias = 'CORREO DEL ORINOCO (ESTRUCTURA ANTERIOR)';
        }else
         if ($codnom =='6') {
          $gerencias = 'DEPARTAMENTO CANAL ONDA CORTA  (ESTRUCTURA ANTERIOR)';
        }else
         if ($codnom =='7') {
          $gerencias = 'DEPARTAMENTO DE REGISTRO Y CONTROL  (ESTRUCTURA ANTERIOR)';
        }else
         if ($codnom =='8') {
          $gerencias = 'DEPARTAMENTO DE RELACIONES INTERNACIONALES (ESTRCTURA ANTERIOR)';
        }else
         if ($codnom =='9') {
          $gerencias = 'DEPARTAMENTO DE SERV. GENERALES (ESTRCTURA ANTERIOR)';
        }else
         if ($codnom =='10') {
          $gerencias = 'DESPACHO DEL MINISTRO';
        }else
         if ($codnom =='11') {
          $gerencias = 'DESPACHO DEL VICEMINISTRO DE COMUNICACION E INFORMACION';
        }else
         if ($codnom =='12') {
          $gerencias = 'DESPACHO DEL VICEMINISTRO DE GESTION COMUNICACIONAL';
        }else
         if ($codnom =='13') {
          $gerencias = 'DESPACHO DEL VICEMINISTRO DE NUEVAS FORMAS DE COMUNICACION (ESTRCTURA ANTERIOR)';
        }else
         if ($codnom =='14') {
          $gerencias = 'DESPACHO DEL VICEMINISTRO DE PLANIFICACION Y  ESTRATEGIA COMUNICACIONAL';
        }else
         if ($codnom =='15') {
          $gerencias = 'DESPACHO DEL VICEMINISTRO DE SOPORTE DE PLATAFORMA COMUNICACIONAL';
        }else
         if ($codnom =='16') {
          $gerencias = 'DESPACHO VICEMINISTERIO DE ESTRAT. COMUNICACIONAL (ESTRCTURA ANTERIOR)';
        }else
         if ($codnom =='17') {
          $gerencias = 'DESPACHO VICEMINISTERIO DE GESTION COMUNICACIONAL  (ESTRUCTURA ANTERIOR)';
        }else
         if ($codnom =='18') {
          $gerencias = 'DIREC. GRAL. DE MEDIOS ALTERNATIVOS Y COMUNITARIOS  (ESTRUCTURA ANTERIOR)';
        }else
         if ($codnom =='19') {
          $gerencias = 'DIRECCION  DE PRODUCCION NACIONAL INDEPENDIENTE (P.N.I.)';
        }else
         if ($codnom =='20') {
          $gerencias = 'DIRECCION  DEL DESPACHO DEL MINISTRO  (ESTRUCTURA ANTERIOR)';
        }else
         if ($codnom =='21') {
          $gerencias = 'DIRECCION CREATIVA  (ESTRUCTURA ANTERIOR)';
        }else
         if ($codnom =='22') {
          $gerencias = 'DIRECCION DE ADMINISTRACION';
        }else
         if ($codnom =='23') {
          $gerencias = 'DIRECCIÓN DE ADMINISTRACIÓN  (ESTRUCTURA ANTERIOR)';
        }else
         if ($codnom =='24') {
          $gerencias = 'DIRECCION DE ADMINISTRACION (ESTRCTURA ANTERIOR)';
        }else
         if ($codnom =='25') {
          $gerencias = 'DIRECCION DE ANALISIS DEL ENTORNO';
        }else
         if ($codnom =='26') {
          $gerencias = 'DIRECCION DE ANALISIS DEL ENTORNO  (ESTRUCTURA ANTERIOR)';
        }else
         if ($codnom =='27') {
          $gerencias = 'DIRECCION DE ANALISIS Y MONITOREO';
        }else
        if ($codnom =='28') {
          $gerencias = 'DIRECCION DE ARCHIVO GENERAL';
        }else
        if ($codnom =='29') {
          $gerencias = 'DIRECCION DE ARCHIVO GENERAL  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='30') {
          $gerencias = 'DIRECCION DE ARTE';
        }else
        if ($codnom =='31') {
          $gerencias = 'DIRECCION DE ARTICULACION OPERATIVA CON MEDIOS';
        }else
        if ($codnom =='32') {
          $gerencias = 'DIRECCION DE AUDIOVISUAL  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='33') {
          $gerencias = 'DIRECCION DE AUDIOVISUALES';
        }else
        if ($codnom =='34') {
          $gerencias = 'DIRECCIÓN DE AUDITORIA INTERNA  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='35') {
          $gerencias = 'DIRECCION DE COBERTURA AUDIOVISUAL PRESIDENCIAL';
        }else
        if ($codnom =='36') {
          $gerencias = 'DIRECCION DE COMPRAS  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='37') {
          $gerencias = 'DIRECCION DE COMPRAS Y SERVICIOS';
        }else
        if ($codnom =='38') {
          $gerencias = 'DIRECCIÓN DE CONSULTORÍA JURÍDICA  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='39') {
          $gerencias = 'DIRECCION DE CONTABILIDAD';
        }else
        if ($codnom =='40') {
          $gerencias = 'DIRECCION DE CONTENIDO MULTIMEDIA';
        }else
        if ($codnom =='41') {
          $gerencias = 'DIRECCION DE CONTRATACIONES';
        }else
        if ($codnom =='42') {
          $gerencias = 'DIRECCION DE CREATIVOS';
        }else
        if ($codnom =='43') {
          $gerencias = 'DIRECCION DE DIFUSION';
        }else
        if ($codnom =='44') {
          $gerencias = 'DIRECCION DE DISEÑO DE ESTRATEGIA';
        }else
        if ($codnom =='45') {
          $gerencias = 'DIRECCION DE DISEÑO DE ESTRATEGIA  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='46') {
          $gerencias = 'DIRECCION DE ENLACE SICI';
        }else
        if ($codnom =='47') {
          $gerencias = 'DIRECCION DE INVESTIGACION SOCIAL';
        }else
        if ($codnom =='48') {
          $gerencias = 'DIRECCION DE LA OFICINA DE INFORMACION REGIONAL (OIR)';
        }else
        if ($codnom =='49') {
          $gerencias = 'DIRECCION DE MEDIOS NO CONVENCIONALES (COMUNICALLE)';
        }else
        if ($codnom =='50') {
          $gerencias = 'DIRECCION DE OFICINA DE INFORMACION REGIONAL  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='51') {
          $gerencias = 'DIRECCION DE PAUTAS PUBLICITARIAS  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='52') {
          $gerencias = 'DIRECCION DE PLANIFICACION';
        }else
        if ($codnom =='53') {
          $gerencias = 'DIRECCION DE PLATAFORMA WEB';
        }else
        if ($codnom =='54') {
          $gerencias = 'DIRECCION DE PRENSA (ESTRUCTURA ANTERIOR)';
        }else
        if($codnom =='55') {
          $gerencias = 'DIRECCION DE PRENSA PRESIDENCIAL';
        }else
        if ($codnom =='56') {
          $gerencias = 'DIRECCION DE PRESUPUESTO';
        }else
        if ($codnom =='57') {
          $gerencias = 'DIRECCION DE PUBLICACIONES';
        }else
        if ($codnom =='58') {
          $gerencias = 'DIRECCION DE PUBLICACIONES  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='59') {
          $gerencias = 'DIRECCION DE RESPONSABILIDAD SOCIAL';
        }else
        if ($codnom =='60') {
          $gerencias = 'DIRECCION DE SERVICIOS GENERALES';
        }else
        if ($codnom =='61') {
          $gerencias = 'DIRECCION DE SERVICIOS GENERALES  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='62') {
          $gerencias = 'DIRECCIÓN DE TECNOLOGÍA E INFORMACIÓN  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='63') {
          $gerencias = 'DIRECCION DEL DESPACHO  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='64') {
          $gerencias = 'DIRECCION GENERAL DE ARTICULACION CON MEDIOS NAC. E INTERNACIONALES';
        }else
        if ($codnom =='65') {
          $gerencias = 'DIRECCION GENERAL DE COMUNICACION DE GOBIERNO';
        }else
        if ($codnom =='66') {
          $gerencias = 'DIRECCION GENERAL DE COMUNICACION DIGITAL';
        }else
        if ($codnom =='67') {
          $gerencias = 'DIRECCION GENERAL DE COMUNICACION INTERNACIONAL  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='68') {
          $gerencias = 'DIRECCION GENERAL DE COMUNICACION NACIONAL  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='69') {
          $gerencias = 'DIRECCION GENERAL DE COMUNICACIONES PRESIDENCIALES  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='70') {
          $gerencias = 'DIRECCION GENERAL DE COORDINACION INSTITUCIONAL  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='71') {
          $gerencias = 'DIRECCION GENERAL DE DIFUSION METRICA Y DIGITAL (ESTRCTURA ANTERIOR)';
        }else
        if ($codnom =='72') {
          $gerencias = 'DIRECCION GENERAL DE DIFUSION Y PUBLICIDAD  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='73') {
          $gerencias = 'DIRECCION GENERAL DE DISEÑO DE CONTENIDOS ALTERNATIVOS (ESTRCTURA ANTERIOR)';
        }else
        if ($codnom =='74') {
          $gerencias = 'DIRECCION GENERAL DE ESTRATEGIA COMUNICACIONAL';
        }else
        if ($codnom =='75') {
          $gerencias = 'DIRECCIÓN GENERAL DE ESTRATEGIA COMUNICACIONAL  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='76') {
          $gerencias = 'DIRECCION GENERAL DE GESTION ADMINISTRATIVA  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='77') {
          $gerencias = 'DIRECCION GENERAL DE GESTION INFORMATIVA  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='78') {
          $gerencias = 'DIRECCION GENERAL DE INTEGRACION Y REDES TECNOLOGICAS';
        }else
        if ($codnom =='79') {
          $gerencias = 'DIRECCION GENERAL DE MEDIOS ALTERNATIVOS Y COMUNITARIOS';
        }else
        if ($codnom =='80') {
          $gerencias = 'DIRECCION GENERAL DE MEDIOS OFICIALES Y OIR  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='81') {
          $gerencias = 'DIRECCION GENERAL DE PLANES COMUNICACIONALES';
        }else
        if ($codnom =='82') {
          $gerencias = 'DIRECCION GENERAL DE PRENSA  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='83') {
          $gerencias = 'DIRECCION GENERAL DE PRODUCCION DE CONTENIDO';
        }else
        if ($codnom =='84') {
          $gerencias = 'DIRECCION GENERAL DE RELACIONES INTERINSTITUCIONALES  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='85') {
          $gerencias = 'DIRECCION GENERAL DE RESPONSABILIDAD SOCIAL  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='86') {
          $gerencias = 'DIRECCION GENERAL DE RESPONSABILIDAD SOCIAL Y PROD. NAC. INDEPEND.';
        }else
        if ($codnom =='87') {
          $gerencias = 'DIRECCION GENERAL DE SEGUIMIENTO Y POLITICAS';
        }else
        if ($codnom =='88') {
          $gerencias = 'DIRECCION GENERAL DE TRANSMISIONES';
        }else
        if ($codnom =='89') {
          $gerencias = 'DIRECCION GENERAL DEL DESPACHO';
        }else
        if ($codnom =='90') {
          $gerencias = 'DIRECCION GRUPO EDITORIAL';
        }else
        if ($codnom =='91') {
          $gerencias = 'DIVISION DE PERSONAL  (ESTRCTURA ANTERIOR)';
        }else
        if ($codnom =='92') {
          $gerencias = 'DIVISION DE PERSONAL  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='93') {
          $gerencias = 'DIVISION DE PRESUPUESTO  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='94') {
          $gerencias = 'DIVISION DE TRANSMISION  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='95') {
          $gerencias = 'JEFATURA SERV. AUTONO. IMP. NAC. Y GACETA (ESTRCTURA ANTERIOR)';
        }else
        if ($codnom =='96') {
          $gerencias = 'JEFATURA SERVICIO AUTONOMO RADIO VENPRES  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='97') {
          $gerencias = 'OFIC. CONSULTORIA Y ANALISIS JURIDICO  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='98') {
          $gerencias = 'OFIC. ESTRATEGICA DE SEGUIMIENTO Y EVALUACION DE POLITICAS PUBLICAS';
        }else
        if ($codnom =='99') {
          $gerencias = 'OFIC. GESTION INTERNA  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='100') {
          $gerencias = 'OFIC. INVESTIGACION COMUNICACIONAL (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='101') {
          $gerencias = 'OFIC. PLANIFICACION Y PRESUPUESTO (ESTRCTURA ANTERIOR)';
        }else
        if ($codnom =='102') {
          $gerencias = 'OFICINA DE ADMINISTRACION Y FINANZAS  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='103') {
          $gerencias = 'OFICINA DE ASUNTOS PRESIDENCIALES  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='104') {
          $gerencias = 'OFICINA DE ATENCION CIUDADANA';
        }else
        if ($codnom =='105') {
          $gerencias = 'OFICINA DE AUDITORIA INTERNA';
        }else
        if ($codnom =='106') {
          $gerencias = 'OFICINA DE GESTION ADMINISTRATIVA';
        }else
        if ($codnom =='107') {
          $gerencias = 'OFICINA DE GESTION COMUNICACIONAL';
        }else
        if ($codnom =='108') {
          $gerencias = 'OFICINA DE GESTION HUMANA';
        }else
        if ($codnom =='109') {
          $gerencias = 'OFICINA DE INTEGRACION Y ASUNTOS INTERNACIONALES';
        }else
        if ($codnom =='110') {
          $gerencias = 'OFICINA DE PLANIFICACION  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='111') {
          $gerencias = 'OFICINA DE PLANIFICACION Y PRESUPUESTO';
        }else
        if ($codnom =='112') {
          $gerencias = 'OFICINA DE PRENSA PRESIDENCIAL';
        }else
        if ($codnom =='113') {
          $gerencias = 'OFICINA DE PRESUPUESTO  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='114') {
          $gerencias = 'OFICINA DE RECURSOS HUMANOS  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='115') {
          $gerencias = 'OFICINA DE SEGURIDAD Y PROTECCION INTEGRAL';
        }else
        if ($codnom =='116') {
          $gerencias = 'OFICINA DE TECNOLOGIA  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='117') {
          $gerencias = 'OFICINA DE TECNOLOGIAS DE LA INFORMACION Y LA COMUNICACION';
        }else
        if ($codnom =='118') {
          $gerencias = 'PERSONAL PENSIONADOS Y JUBILADOS AGENCIA BOLIVARIANA  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='119') {
          $gerencias = 'PERSONAL PENSIONADOS Y JUBILADOS RADIO NACIONAL DE VENEZUELA  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='120') {
          $gerencias = 'PLANTA DE CARABOBO  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='121') {
          $gerencias = 'PLANTA DE PUERTO ORDAZ  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='122') {
          $gerencias = 'PLANTA LA RINCONADA  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='123') {
          $gerencias = 'UNIDAD DE AUDITORIA INTERNA (ESTRCTURA ANTERIOR)';
        }else
        if ($codnom =='124') {
          $gerencias = 'VICEMINISTERIO DE ESTRATEGIA COMUNICACIONAL  (ESTRUCTURA ANTERIOR)';
        }else
        if ($codnom =='125') {
          $gerencias = 'VICEMINISTERIO DE GESTIÓN COMUNICACIONAL  (ESTRUCTURA ANTERIOR)';
        }
      
    
    
        $gerencia=$gerencias; 
          break;

  case 5:  

$codigo='SI';

break;
    


   
  }
   
/**********************************************************************************************************************************************************************************************/        
/**********************************************************************************************************************************************************************************************/        
 
			?>

                         <?php
                          $usu=$_GET["usu"];
                          switch ($usu) { 
                              case 1:require ("mensajes/foto.php");                           
                              break;
                              case 2:require ("mensajes/voto.php");                           
                              break;



                                   } 
                                   
                                   
                                  
                                    
                       
                                           
                                           
                                           
                                           
                                           
                                           
                                           
                                           
                                           ?>  
                    
                    
                   



      
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- 
                                         PAGINA PRINCIPAL DE DATA PESONAL
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

      <?php require ("libreria.php");?>
      <?php require ("menu-horizontal.php");?>
      <?php require ("menu-vertical.php");?>
     
  <div class="content-wrapper">
        <?php require ("cuerpo-superior.php");?>
        <?php require ("cuerpo-principal.php");?>
        
  </div>
       <?php require ("footer.php");?>

       <?php

$da=$_GET["da"];
switch ($da) { 
    
    case 88:require ("mensajes/voto.php"); 
    break;
    
}  
?>  
      
</div>
</body>

<!-------------------------------------------------------------------------------------------------------- 
                                           
------------------------------------------------------------------------------------------------------->

</html>
<!-----------------------------------------------------------------------------------------------------|
|------------------------------------------------------------------------------------------------------|
| PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ                                                  |
| CEDULA    : V 16.029.567                                                                             |
| TELEFONO  : 0426-249-15-40                                                                           |
| CORREO    : DENNALY88@GMAIL.COM                                                                      |
| DIRECCIÓN : CUA , ESTADO MIRANDA  CONJUTO RESIDENCIAL EL CASTILLO APARTAMENTO 62-C                   |                                                     |
|------------------------------------------------------------------------------------------------------|
|------------------------------------------------------------------------------------------------------|  
|                                                                                                      |
|  VENEZOLANA DE TELEVISIÓN C.A                                                                        |
|  DIVISIÓN DESARROLLO DE SISTEMAS Y DIVISIÓN DE SERVIDORES Y REDES                                    |
|  CANAL 8                                                                                             |
|                                                                                                      |
|  PROYECTO SOCIOTECNOLOGICO                                                                           |
|  UNIVERSIDAD EXPERIMENTAL DE LA GRAN CARACAS UNEXCA                                                  |
|  PARA OPTAR POR EL TITULO DE INGENIERO EN SISTEMA                                                    |
|                                                                                                      | 
-------------------------------------------------------------------------------------------------------- 
------------------------------------------------------------------------------------------------------->


