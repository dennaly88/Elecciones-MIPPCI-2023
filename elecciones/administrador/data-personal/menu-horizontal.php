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
<header class="main-header">

    <a href="#" class="logo">
          <span class="logo-mini"><img href="#" src="imagenes/LOGO.ico" alt="logo"></span>
          <span class="logo-lg"><b>
          <img href="#" src="imagenes/logo-VTV.png" alt="logo">
    </a>

    
    <nav class="navbar navbar-static-top">  
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      
      <div class="navbar-custom-menu">
        
        <ul class="nav navbar-nav">
        
    <li class="treeview">
    
          <a>
        
             <span class="treeview">


             <span class="label label-danger pull-left">
              <?php echo  "VERSIÓN 1.0 "; ?>

            </span>  


             <span class="label label-primary pull-right">
                <?php  echo  date("d-M-Y"); ?>
                <?php 
                    date_default_timezone_set("America/Caracas");
                    $hora = date('h:i a',time() - 3600*date('I'));
                    print "&nbsp;$hora&nbsp;"; 
                  ?>
                  </span>  

             </span>
            


           </a>
   </li>
  

              <li class="dropdown notifications-menu">
                     <a href="https://web.whatsapp.com/" target="_blank" onclick="window.open(this.href, this.target, 'width=600,height=600'); return false;">
                      <i class="fa fa-whatsapp"></i>
                        <span class="label label-success"></span>
                      </a>
              </li>
              <li class="dropdown notifications-menu">
                     <a href="https://web.telegram.org/" target="_blank" onclick="window.open(this.href, this.target, 'width=600,height=600'); return false;">
                      <i class="fa fa-telegram"></i>
                        <span class="label label-success"></span>
                      </a>
              </li>
              <li class="dropdown notifications-menu">
                     <a href="https://mail.google.com/" target="_blank" onclick="window.open(this.href, this.target, 'width=600,height=600'); return false;" >
                      <i class="fa fa-google"></i>
                        <span class="label label-info"></span>
                      </a>
              </li> 



             
              <li class="dropdown notifications-menu">
                      <a href="https://vtvcorreo.vtv.gob.ve" target="_blank" onclick="window.open(this.href, this.target, 'width=600,height=600'); return false;">
                        <i class="fa fa-envelope-o" >
                      </i>  <span class="label label-primary"></span></a>
              </li>
              <li class="dropdown notifications-menu">
                      <a href="https://vtvtransfer.ddns.net/index.php/login" target="_blank _blank" onclick="window.open(this.href, this.target, 'width=600,height=600'); return false;"><i class="fa fa-cloud "></i>
                      <span class="label label-danger"></span>
                    </a>
              </li>

        
                    
              



          
         
          
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              
              
              <?php echo ' <img src="data:image/jpeg;base64,'.base64_encode($_SESSION["imagen"]).'" class="user-image" alt="User Image">'  ?>
                          <?php $imagen = $row["imagen"];?>
                          <?php echo  $imagen; ?>





              
              <span class="hidden-xs">
                
              
        
              <span class="label label-success pull-right">
              <?php echo  $perfil; ?>

            </span>  

            </span>
            </a>
            <ul class="dropdown-menu">
              
              <li class="user-header">



              <?php echo ' <img src="data:image/jpeg;base64,'.base64_encode($_SESSION["imagen"]).'" class="img-circle" alt="User Image">'  ?>
                          <br><?php $imagen = $row["imagen"];?>
								          <?php echo  $imagen; ?>	



                <p>
                 <?php echo  "    " . $_SESSION['nombres']; ?>
      
                 <?php echo  "    " . $_SESSION['apellidos']; ?>
                  <small>
                    
                  
                  
                
                  <span class="label label-success pull-center">
              <?php echo  $perfil; ?>

            </span>  
                
                
                
                </small>
                 
                </p>
              </li>

             
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-primary btn-dark"><?php echo  $perfil; ?></a>
                </div>
                <div class="pull-right text-light">
                  <a href="../../login/seguridad/destruir-sesion.php" class="btn btn-danger btn-dark ">SALIR</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>

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