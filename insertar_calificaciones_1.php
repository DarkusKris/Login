<?php
  session_start();
  include 'serv.php';
  if(!isset($_SESSION['veri_code'], $_SESSION["nombre_docente"], $_SESSION["id_docente"])){
  echo '<script> window.location="indexdocentes.php"; </script>';
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Administracion de calificaciones</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">
<input type="button" value="Cerrar Sesion" class="btn btn-warning" OnClick="location.href='logout.php'">
<div class="tit2">ID: <?php echo $_SESSION["id_docente"]?></div>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
</header>
<div id="myCarousel" class="carousel slide homCar">
		<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:0px solid #222; border-radius:4px;">
		  <div class="item active">
			<img src="images/ING-TICs.png" alt="#" style="min-height:250px; min-width:100%"/>
		  </div>
		  <center><h1>Administracion y seguridad de redes</h1></center>
		  <center><h3>Grupo 801</h3></center>
 <br>
 <!-- -->
<?php
// Ya tienes la variable conect al hacer import a serv.php
//$connect=mysqli_connect("localhost","root","","basedatosmaster");
if ($connect) {
    echo "Conexion exitosa. <br />";
    foreach ($_POST['alumno'] as $id_alumno => $calificaciones){
        $unidad1= $calificaciones[0];
        $unidad2= $calificaciones[1];
        $unidad3= $calificaciones[2];
        $unidad4= $calificaciones[3];
         
        // SINTAXIS UPDATE: UPDATE tabla SET columna1 = valor1, columnaN = valorN WHERE condidional;
        $consulta="UPDATE calificaciones_1 SET unidad1 = '$unidad1', unidad2 = '$unidad2', unidad3 = '$unidad3', unidad4 = '$unidad4' WHERE id_alumno = '$id_alumno'";

        //detectar errores en la ejecucion
        try{
            $resultado=mysqli_query($connect,$consulta);
        }catch (Exception $e){
            echo $e;
            break;
        }  
    }
    //mysqli_close($connect);
    /*
    $unidad1= $_POST ['u1'];
    $unidad2= $_POST ['u2'];
    $unidad3= $_POST ['u3'];
    $unidad4= $_POST ['u4'];
    $unidad5= $_POST ['u5'];
    

    $consulta="INSERT INTO calificaciones_1 values ('$unidad1', '$unidad2', '$unidad3', '$unidad4', '$unidad5') ";
    
    $resultado=mysqli_query($connect,$consulta);
    */
    if ($resultado) {
      echo "Calificaciones almacenadas. <br />";
    }
    else {
      echo "error en la ejecución de la consulta. <br />";
    }

    if (mysqli_close($connect)){ 
      echo "Desconexion realizada. <br />";
    } 
    else {
      echo "Error en la desconexión";
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basedatosmaster";

function mostrarDatos ($resultados) {
if ($resultados !=NULL) {
echo "- Alumno: " .$resultados['nombre_alumno']."<br/>";
echo "- Unidad 1: ".$resultados['unidad1']."<br/> ";
echo "- Unidad 2: ".$resultados['unidad2']."<br/>";
echo "- Unidad 3: ".$resultados['unidad3']."<br/>";
echo "- Unidad 4: ".$resultados['unidad4']."<br/>";
 
echo "**********************************<br/>";}
else {echo "<br/>No hay más datos! <br/>";}
}


$link = mysqli_connect($servername,$username,$password);
mysqli_select_db($link, $dbname);
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
$result = mysqli_query($link, "SELECT * FROM calificaciones_1");

while ($fila = mysqli_fetch_array($result)){
mostrarDatos($fila);
}
mysqli_free_result($result);
mysqli_close($link);


?>
<h1><div align="center">Calificaciones agregadas/actualizadas con exito.</div></h1><br>
 <div><center><input type="button" class="btn btn-warning" value="Regresar" style='width:35%; height:30px;'OnClick="location.href='docentes.php'">
    
    </center>
    </div>

    <script>
        var mydate=new Date();
        var year=mydate.getYear();
        if (year < 1000)
            year+=1900;
        var day=mydate.getDay();
        var month=mydate.getMonth()+1;
        if (month<10)
            month="0"+month;
        var daym=mydate.getDate();
        if (daym<10)
            daym="0"+daym;
        document.write("<big><font color='000000' face='Arial'><b>"+daym+"/"+month+"/"+year+"</b></font></big>")
    </script>
  </body>
</html>