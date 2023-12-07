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
<?php ob_start(); ?>

<div class="box box-primary"><br>
<div class="row">
  
  
  
</div>

                  <?php
                        include('sql/conexion.php');
                         
                        $sql = "SELECT COUNT(*) total FROM nomina";
                        $result = mysqli_query($conexion, $sql);
                        $nomina = mysqli_fetch_assoc($result);

                    ?>

                <?php
                        include('sql/conexion.php');
                        
                        $sql = "SELECT COUNT(*) total FROM nomina where voto='SI' ";
                        $result = mysqli_query($conexion, $sql);
                        $sivotaron = mysqli_fetch_assoc($result);

                    ?>


<?php
                        include('sql/conexion.php');
                        
                        $sql = "SELECT COUNT(*) total FROM nomina where voto='NO' ";
                        $result = mysqli_query($conexion, $sql);
                        $novotaron = mysqli_fetch_assoc($result);

                    ?>
                  <div class="row">
                    <div class="col-lg-4 col-xs-6">
                      <div class="small-box bg-primary">
                        <div class="inner">
                          <h3><?php echo $nomina['total']; ?>   </h3>
                          <p>Personal MIPPCI</p>
                        </div>
                        <div class="icon">
                          <i class="ion-ios-people"></i>
                        </div>
                        <a href="#" class="small-box-footer">Nomina Completra de MIPPCI  <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>

                    <div class="col-lg-4 col-xs-6">
                      <div class="small-box bg-green">
                        <div class="inner">
                          <h3><?php echo $sivotaron['total']; ?><sup style="font-size: 20px"></sup></h3>
                          <p>Si Votaron</p>
                        </div>
                        <div class="icon">
                          <i class="ion-person-add"></i>
                        </div>
                        
                        <a href="#" class="small-box-footer">Empleados que Si Votaron MIPPCI<i class="fa fa-arrow-circle-right"></i></a>

   <!--------------- PDF BUENO

   

    -------------------->
                      </div>
                    </div>



                    <div class="col-lg-4 col-xs-6">
                      <div class="small-box bg-red">
                        <div class="inner">
                          <h3>   <?php echo $novotaron['total']; ?></h3>
                          <p>No Votaron</p>
                        </div>
                        <div class="icon">
                          <i class="ion-person-stalker"></i>
                         
                        </div>
                        <a href="#" class="small-box-footer">Empleados que NO Votaron MIPPCI<i class="fa fa-arrow-circle-right"></i></a>
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

