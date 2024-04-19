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
	
	<div class="imagD">
		<img src="images/imgD2.jpg" /> 
	</div>
	<div class="btnD2">
		<a href="index.html"><input type="button" class="back" value="←"></a>
	</div>
	<div class="register">
        <form class= "form" method="post">
            <div class= form_container>
				<h2 class = "form_title"> Regístrate</h2>
            <div class="pd1">
            <p>Por favor llena todos los espacios</p>
            </div>
			<div class="form_group">
                <h4>Nombre Completo:</h4>
				<input type="text" required="name" class="form_input" placeholder=" " name="Nombre">
			</div>

            <div class="form_group">
                <h4>Usuario:</h4>
				<input type="text" required id="user" class="form_input" placeholder=" " name="User">
			</div>

			<div class="form_group">
                <h4>Email:</h4>
				<input type="text" required id="email" class="form_input" placeholder=" " name="Email">
			</div>

			<div class="form_group">
                <h4>Contraseña:</h4>
				<input type="password" required id="password" class="form_input" placeholder=" " name="Contraseña">
			</div>

            <div class="form_group">
                <h4>Confirmar Contraseña:</h4>
				<input type="password" required id="password2" class="form_input" placeholder=" " name="Contraseña2">
			</div>
			<input type="submit" class= "form_submit" name="Registrar" value ="Registrarse">
            <p class = "form_paragraph">¿Ya tienes cuenta? <a href="login.php" class= "form_link">Ingresar</a></p>
		</div>
	</form>
</div>
</body>
</html>