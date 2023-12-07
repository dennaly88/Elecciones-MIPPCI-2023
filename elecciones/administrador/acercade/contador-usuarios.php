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
                        include('sql/conexion.php');
                        $consulta="SELECT * from usuarios";
                        $result=mysqli_query($conexion,$consulta);
                        $total = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $total = $total + 1;
                        }
  
                    ?>
                   <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from usuarios where id_rol=1";
                        $result=mysqli_query($conexion,$consulta);
                        $administrador = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $administrador = $administrador + 1;
                        }
                    ?>
                    <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from usuarios where id_rol=2";
                        $result=mysqli_query($conexion,$consulta);
                        $coordinador = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $coordinador = $coordinador + 1;
                        }
                    ?>
                    <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from usuarios where id_rol=3";
                        $result=mysqli_query($conexion,$consulta);
                        $tecnico = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $tecnico = $tecnico + 1;
                        }
                    ?>
<div class="box box-primary"><br>
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?php echo $total; ?></h3>
        <p>Total de Usuarios</p>
      </div>
      <div class="icon">
        <i class="ion-ios-people"></i>
      </div>
      <a href="#" class="small-box-footer">Mas Información<i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-green">
      <div class="inner">
        <h3> <?php echo $administrador; ?><sup style="font-size: 20px"></sup></h3>
        <p>Usuarios Administradores</p>
      </div>
      <div class="icon">
        <i class="ion-person-stalker"></i>
      </div>
      <a href="#" class="small-box-footer">Mas Información <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3>    <?php echo $coordinador; ?></h3>
        <p>Usuarios Coordinadores</p>
      </div>
      <div class="icon">
        <i class="ion-person-add"></i>
       
      </div>
      <a href="#" class="small-box-footer">Mas Información<i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-red">
      <div class="inner">
        <h3> <?php echo $tecnico; ?></h3>
        <p>Usuarios Tecnicos</p>
      </div>
      <div class="icon">
        <i class="ion-person"></i>
      </div>
      <a href="#" class="small-box-footer">Mas Información<i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>
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

