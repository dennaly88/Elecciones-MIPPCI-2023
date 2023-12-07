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

<aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
        <?php echo ' <img src="data:image/jpeg;base64,'.base64_encode($_SESSION["imagen"]).'" class="img-circle" alt="User Image">'  ?>
                          <br><?php $imagen = $row["imagen"];?>
								          <?php echo  $imagen; ?>	
         
         
        
        </div>

        <div class="pull-left info">

        <p>
        <?php echo  "    " . $_SESSION['nombres']; ?>
        <?php echo  "    " . $_SESSION['apellidos']; ?>
      </p>



          <a href="#"><i class="fa fa-circle text-success"></i>En Linea</a>
        </div>
      </div>

      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      
      <ul class="sidebar-menu" data-widget="tree">
          <li class="header">INICIO</li>

        <li>
          <a href="../inicio/index.php">
            <i class="fa fa-home"></i> <span>Principal</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-primary">INICIO</small>
            </span>
          </a>
        </li>


                 <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from usuarios";
                        $result=mysqli_query($conexion,$consulta);
                        $usuario = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $usuario = $usuario + 1;
                        }
  
                    ?>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-cog"></i> <span>Configuración</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
          <ul class="treeview-menu">
            
            <li>
              <a href="../usuarios/index.php"><i class="fa fa-user"></i>Usuarios MIPPCI
                  <span class="label label-primary pull-right"> <?php echo $usuario; ?>  </span>  
              </a>
            </li> 


            

          
          </ul>

        </li>
        <?php
                        include('sql/conexion.php');
                        
                        $sql = "SELECT COUNT(*) total FROM nomina";
                        $result = mysqli_query($conexion, $sql);
                        $nomina = mysqli_fetch_assoc($result);

                    ?>




        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil-square-o"></i>
            <span>Data Personal MIPPCI</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="../data-personal/index.php?dat=1"><i class="fa fa-users"></i>Personal MIPPCI
                  <span class="label label-danger pull-right"><?php echo $nomina['total']; ?></span>
              </a>
            </li>

            
          </ul>
        </li>


        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-area-chart"></i>
            <span>Estadisticas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../estadisticas/index.php?dat=1"><i class="fa fa-line-chart"></i>Por Direcciones
            <span class="label label-success pull-right">Control</span>
          </a>
        </li> 
          </ul>
          <ul class="treeview-menu">
            <li><a href="../estadisticas/index.php?dat=1"><i class="fa fa-line-chart"></i>Por Horas
            <span class="label label-success pull-right">Control</span>
          </a>
        </li> 
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil-square-o"></i>
            <span>Estadisticas por Horas</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="../data-personal/index.php?dat=1"><i class="fa fa-users"></i>Reporte por Horas
                  <span class="label label-danger pull-right"><?php echo $nomina['total']; ?></span>
              </a>
            </li>

            
          </ul>
        </li>
        

        

       
               

             <li class="treeview">
                  <a href="#">
                    <i class="fa fa-list"></i> <span>Opciones</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                <ul class="treeview-menu">   
                  <li>
                      
                        <a href="../inicio/index.php">
                           <i class="fa fa-cloud"></i> Pagina Principal
                              <span class="label label-primary pull-right">NUEVO</span>
                        </a>
                  </li> 
                  
                 
                        <li>
                              <a href="../../login/seguridad/destruir-sesion.php">
                                  <i class="fa fa-power-off"></i> Salir<span class="label bg-purple pull-right">NUEVO</span> 
                              </a>        
                        </li>  
                  </li>   



                  
      </ul>
      

      

        <li>
          <a href="../acercade/index.php">
            <i class="fa fa-info-circle"></i> <span>Acerca de </span>
            <span class="pull-right-container">
              <small class="label pull-right btn bg-maroon btn-flat">SISTEMA</small>
            </span>
          </a>
        </li>






      <ul class="sidebar-menu" data-widget="tree">
          <li class="header">ENLACES</li>

          <li class="treeview">
              <a href="http://www.cne.gob.ve/web/index.php" target="_blank" onclick="window.open(this.href, this.target, 'width=600,height=600'); return false;">
            <i class="fa fa-exchange"></i>
            <span>CNE</span><small class="label pull-right bg-red">PRINCIPAL</small>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>
        
        <li class="treeview">
              <a href="http://www.minci.gob.ve/" target="_blank" onclick="window.open(this.href, this.target, 'width=600,height=600'); return false;">
            <i class="fa fa-group"></i>
            <span>MIPPCI</span><small class="label pull-right bg-primary">PRINCIPAL</small>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>

        <li class="treeview">
              <a href="https://www.vtv.gob.ve/" target="_blank" onclick="window.open(this.href, this.target, 'width=600,height=600'); return false;">
            <i class="fa fa-chevron-down"></i>
            <span>VTV</span><small class="label label-success pull-right">PRINCIPAL</small>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>
       
        <li class="header">EL ESEQUIBO ES NUESTRO</li>
  <header class="main-header">
    <a href="#" class="logo">
      <span class="logo-mini"><img href="#" src="imagenes/logo1-vtv.ico" alt="logo"></span>
      <span class="logo-lg"> <img href="#" src="imagenes/LOGO8.png" alt="logo"><BR> <br>
      
      </span>
     
    </a>
</header>

      </ul>






      
    </section>
    
  </aside>
 
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

  