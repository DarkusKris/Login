<?php
session_start();
session_destroy();
echo 'Cerraste sesión';
echo '<script> window.location="indexdocentes.php"; </script>';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Saliendo...</title>
	<meta charset="utf-8">
</head>
<body>
<script language="javascript">location.href = "indexdocentes.php";</script>
</body>
</html>