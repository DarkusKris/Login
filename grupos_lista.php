<?php
  session_start();
  include 'serv.php';
  if(!isset($_SESSION['veri_code'])){
  echo '<script> window.location="indexdocentes.php"; </script>';
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Administracion de calificaciones</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">
<input type="button" value="Cerrar Sesion" class="btn btn-warning" OnClick="location.href='logout2.php'">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<div id="myCarousel" class="carousel slide homCar">
    <div class="carousel-inner" style="border-top:18px solid #222; border-bottom:0px solid #222; border-radius:4px;">
      <div class="item active">
      <img src="images/ING-TICs.png" alt="#" style="min-height:250px; min-width:100%"/>
      </div>
<body background="images/Fonfo3.png" style="background-repeat:no-repeat; background-size:cover" onLoad="show3()">
    <center><div class="tit"><h2 style="color: #000000; ">Docente (Fulanito)</h2></center>
  <div id="reloj" style="float:left; font-size:22px;"><script type="text/javascript">
function startTime(){
today=new Date();
h=today.getHours();
m=today.getMinutes();
s=today.getSeconds();
m=checkTime(m);
s=checkTime(s);
document.getElementById('reloj').innerHTML=h+":"+m+":"+s;
t=setTimeout('startTime()',500);}
function checkTime(i)
{if (i<10) {i="0" + i;}return i;}
window.onload=function(){startTime();}
</script>
</div>
<div style="float:right; font-size:22px;">
<script type="text/javascript">
//<![CDATA[
var  today = new Date();
var m = today.getMonth() + 1;
var mes = (m < 10) ? '0' + m : m;
  document.write('Fecha: '+today.getDate(),'/' +mes,'/'+today.getYear());
//]]> 
</script></div>

<h2><br>


<center><button data-toggle="collapse" data-target="#demo">Grupos</button>

<div id="demo" class="collapse">
<input type="button" class="btn btn-warning" value="TIC's 801" style='width:35%; height:30px;' OnClick="location.href='calificaciones1.php'">
</div>
</h2></center>

<!-- Footer
      ================================================== -->

    
  </style>
  </body>
</html>