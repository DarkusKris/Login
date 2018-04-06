<?php
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
<head>
	<title>Validando...</title>
	<meta charset="utf-8">
</head>
</head>
<body>
		<?php
			include 'serv.php';
			if(isset($_POST['login'])){
				$curp = $_POST['curp'];
				$usuario = $_POST['veri_code'];
				$password = $_POST['password'];
				$result = mysqli_query($connect, "SELECT * FROM docentes WHERE veri_code='$usuario' AND password='$password' AND curp='$curp'");
				if (mysqli_num_rows($result)>0) {
					$row = mysqli_fetch_array($result);
					$_SESSION["veri_code"] = $row['veri_code'] & $row['curp'] & $row['password'];
					$_SESSION["id_docente"] = $row['id_docente'];
					$_SESSION["nombre_docente"] = $row['nombre_docente']; 
					  $msg = "Iniciando sesión para {$_SESSION['nombre_docente']} <p>";
					  $to = "docentes.php";
					  //echo '<script> window.location="index2.php"; </script>';
				}
				else{
					$msg ='<script> alert("Usuario o contraseña incorrectos.");</script>';
					$to = "indexdocentes.php";
					//echo '<script> window.location="index.php"; </script>';
				}
				echo $msg;
				echo "<script> window.location='{$to}'; </script>";
			}
		?>	
</body>
</html>