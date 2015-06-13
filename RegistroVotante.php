<?php include './clases/Coneccion.php';?>


<?php
$conexion = new mysqli('127.0.0.1', 'root', '', 'sistema_votacion');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta property="og:title" content="Simulador de votación"/>
<title>Sistema de votación :: Votante</title>

<link href="./css/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <script src="./libs/jquery-2.10.js"></script>
        <script src="./libs/jquery-ui/js/jquery.js"></script>
        <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
        <script src="./libs/validacion/jquery.validate.min.js"></script>
        <script src="./libs/validacion/jquery.messages.min.js"></script>
        <script src="./libs/validacion/validacion_text_y_num.js"></script>
        <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>

</head>
<body class="inicio">

<header>
<img src="img/JHMP.png" width="250px" height="200"><br>
<p>Formulario De Registro de Votantes</p>
</header>
 <div class="container">
        <form action="manejadorVotante.php?accion=save" method="post" id="registro" class="pager">
             <table class="table-bordered">
             <div class="row">

                <div class="col-xs-2">
                    DUI:
                </div>
               <div class="col-xs-2">
                   <input type="text" name="dui" onkeyup="mascara(this,'-',patron3,true)" onkeypress="return justNumbers(event);" maxlength="10" placeholder="00000000-0" class="required form-control" minlength="10" required="true">
               </div>
           </div>
<br>
          <div class="row">

                <div class="col-xs-2">
                    Nombre:
                </div>
               <div class="col-xs-2">
                   <input type="text" name="nombre" placeholder="Ingrese Su Nombre" class="required form-control" minlength="2" required="true" onkeydown="return validarLetras(event)">
               </div>
           </div>
<br>
           <div class="row">

                <div class="col-xs-2">
                    Apellido:
                </div>
               <div class="col-xs-2">
                   <input type="text" name="apellido" placeholder="Ingrese Su Apellido" class="required form-control" minlength="2" required="true" onkeydown="return validarLetras(event)">
               </div>
           </div>
<br>
           <div class="row">
        <div class="col-xs-2">
        Foto:
        </div>

        <div id="preview" class="thumbnail">

        <a href="#" id="file-select" class="btn btn-default">Elegir archivo</a>
        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNzEiIGhlaWdodD0iM
        TgwIj48cmVjdCB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgZmlsbD0iI2VlZSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9Ijg1LjU
        iIHk9IjkwIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhb
        nMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MTcxeDE4MDwvdGV4dD48L3N2Zz4="/>
        <input class="input" id="filename" name="foto" type="file"/>
      </div>
    </div>
<br>
           <div class="row">

                <div class="col-xs-2">
                    Gènero:
                </div>
               <div class="col-xs-3-1" >
                Hombre <input type="radio" name ="genero" value="Hombre" required="">
                Mujer <input type="radio" name ="genero" value="Mujer" required="">

               </div>
           </div>
<br>
          <div class="row">

                <div class="col-xs-2">
                    Fecha de Vencimiento:
                </div>
               <div class="col-xs-5">
                   <div class="input-group">
                    <input type="text" name="fecha" placeholder="Ingrese Fecha" id="fechac" class="required form-control">
                    <span id="fechac" class="input-group-addon glyphicon glyphicon-calendar"></span>
               </div>
           </div>
       </div>
   </div>
   <br>
                 <div class="row">

                <div class="col-xs-2">
                    Direcciòn:
                </div>
               <div class="col-xs-2">
                <textarea name="direccion" cols="40" rows="2" placeholder="Ingrese Su Direcciòn" class="required form-control" minlength="2" required="true" onkeydown="return validarLetras(event)"></textarea>

               </div>
           </div>
<br>
            <div class="row">

                <div class="col-xs-2">
                    Departamento:
                </div>
               <div class="col-xs-2">
               <Select name="iddepa" id="depto" class="required form-control" required="true" onkeydown="return validarLetras(event)">
                        <option value="">[Seleccionar...]</option>

                  <?php
                  $result = $conexion->query("SELECT * FROM departamentos");
                  if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                  echo '<option value="'.$row['codigo'].'">'.utf8_encode($row['nombre']).'</option>';
                  }
                }
                  ?>
               </select>
               </div>
           </div>
<br>
            <div class="row">

                <div class="col-xs-2">
                 Municipio:
                </div>
               <div class="col-xs-2">
               <Select name="idmuni" id="municipio" class="required form-control" required="true" onkeydown="return validarLetras(event)">
                        <option value="">[Seleccionar...]</option>

               </select>
               </div>
           </div>

 <br>
            <div class="row">
                <td colspan="2">
                    <input type="submit" name='bot' value='Enviar' class="btn btn-primary">
                    <a href="index.php"><input type="button" name='bot' value='Cancelar'></center><br>
                    <a href="cerrar.php" class="label label-primary">Cerrar Sesion</a>
                </div>

         <div class="panel-heading">


        </div>

            </div>
        </table>


     </form>

</div>



</div>
<script language="javascript">
    $(document).ready(function(){
        $("#depto").change(function () {
            $("#depto option:selected").each(function () {
                id_depto = $(this).val();
                $.post("municipios.php", { id_depto: id_depto }, function(data){
                    $("#municipio").html(data);
                });
            });
        })
    });
</script>
<br><br><br>
       <script type="text/javascript">
        $().ready(function () {
            $("#registro").validate({});
        });
        $(document).ready(
            function(){
                $("#fechac").datepicker(
                    {
                        changeMonth: true,
                        changeYear: true,
                        dateFormat: 'yy-mm-dd',
                        showAnim:'slide'
                    }

                 );
            }

       )
    </script>
    <script>
    $(document).on('ready', function() {
    $('#preview').hover(
        function() {
            $(this).find('a').fadeIn();
        }, function() {
            $(this).find('a').fadeOut();
        }
    )
    $('#file-select').on('click', function(e) {
         e.preventDefault();

        $('#filename').click();
    })

    $('input[type=file]').change(function() {
        var file = (this.files[0].name).toString();
        var reader = new FileReader();

        $('#file-info').text('');
        $('#file-info').text(file);

         reader.onload = function (e) {
             $('#preview img').attr('src', e.target.result);
         }

         reader.readAsDataURL(this.files[0]);
    });
});
    </script>
</body>
</html>
