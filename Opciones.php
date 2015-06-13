<?php include './clases/Coneccion.php';?>
<?php session_start(); ?>
<?php
    if (isset($_SESSION['usuario'])) {



 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta property="og:title" content="Simulador de votación"/>
<title>Sistema de votación</title>

<link href="./css/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
<script src="./libs/jquery-2.10.js"></script>
<link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
<script src="./libs/validacion/jquery.validate.min.js"></script>
<script src="./libs/validacion/jquery.messages.min.js"></script>
<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>

</head>
<body class="inicio">

<header>
  <center><img src="img/JHMP.png" width="300" height="200" alt="TRIBUNAL"/></center>
  <center><h3>Registro de Partido</h3></center></br>
</header>

 <div class="container">
        <form action="validar.php" id="opciones" method="post" class="pager">
             <table class="table-bordered">
            <div class="input-sm">
                <div class="form-group ">
                <input class="checkbox-inline"  type="checkbox" name="checkbox[]" title="Aperturar Presidentes" id="checkbox" value="Presidentes"> Presidencial <br>
                <input class="checkbox-inline"  type="checkbox" name="checkbox[]" title="Aperturar Diputados" id="checkbox" value="Diputados"> Diputados <br>
                <input class="checkbox-inline"  type="checkbox" name="checkbox[]" title="Aperturar Alcaldes" id="checkbox" value="Alcaldes"> Alcaldes
                </div>
            </div>
          <br>
            <br><br>
             <div class="row">
                <div class="col-xs-2">
                Año a Efectuar:
                </div>
                <div class="col-xs-9">
                <input type="text" name="year" title="Aperturar Año" id="year" placeholder="Ingrese Año Electoral a Aperturar" class="required form-control" minlength="4" required="true"><br>
                </div>
            </div>


            <div class="row">
                <div colspan="2">
                    <input type="submit" name='bot' value='Guardar' class="btn btn-primary">
                    <input type="submit" name='bot' value='Cancelar' class="btn btn-primary">

                </div>

            </div>
            <div class="panel-heading">
            <a href="menu.php" class="label label-primary">Menu Principal</a><br>
            <a href="cerrar.php" class="label label-primary">Cerrar Sesion</a>
        </div>
           </table>
     </form>

</div>



</div>
<br><br><br>
 <script type="text/javascript">
        $().ready(function () {
            $("#opciones").validate({});
        });
    </script>
	<footer id="footer">
  Design <a href="http://www.facebook.com/DanielGarcia1994">DannyDj Garcia</a> And <a href="http://www.facebook.com/kevin.rogel08">Kvin Rögell</a> Thanks to ITCA Fepade Regional Zacatecoluca
  <p> &copy; Copyright DEKA 2015 Sistema Electoral </p>

</footer>
</body>
</html>
 <?php }else{
    header("Location:index.php");
 } ?>
