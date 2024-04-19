<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UFT-8">
	<meta charset="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title>DATABASE REGISTRO</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
	<div class="imagD2">
		<img src="images/imgD3.png" /> 
	</div>
	<div class="btnD2">
       <a href="index.html"><input type="button" class="back" value="←"></a> 
    </div>
	<div class="login">
        <form class= "form" method="post">
            <div class= form_container2>
				<h2 class = "form_title2">¡Bienvenido!</h2>
            <div class="form_group2">
                <h4>Usuario:</h4>
				<input type="text" required id="user" class="form_input2" placeholder=" " name="User">
			</div>

            <div class="form_group2">
                <h4>Contraseña:</h4>
				<input type="password" required id="password" class="form_input2" placeholder=" " name="Contraseña">
			</div>
            <input type="submit" class= "form_submit2" name="Ingresar" value ="Ingresar">
            <p class = "form_paragraph2">¿Aun no una tienes cuenta? <a href="register.php" class= "form_link">Regístrate</a></p>
            <div class="contr">
                <a href="#" class= "form_link">¿Olvidaste tu contraseña?</a>
            </div>
		</div>
	</form>
</div>
</body>
</html>