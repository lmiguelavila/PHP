<?php
require_once('includes/funciones.inc.php');
?>
<html>
<head>
	<title>Compresi&oacute;n de archivos</title>
</head>
<body>
	<div>
		<ul>
			<?php

			$carpetas = obtener_carpetas('archivos');

			foreach ($carpetas as $carpeta) {
				echo  '<li><a href="comprimir.php?folder=' .  $carpeta .  '">' . $carpeta . '</a></li>';
			}

			?>
		</ul>
	</div>
</body>
</html>