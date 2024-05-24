<template>

    <body>
        
        <div class="imagD2">
            <img src="capuchino/images/imgD3.png" /> 
        </div>
        <div class="btnD2">
           <router-link to="/">
            <a href="index.html"><input type="button" class="back" value="←"></a>
           </router-link>
        </div>
        <div class="login">
            <form class="form" method="post">
                <div class="form_container2">
                    <h2 class="form_title2">¡Bienvenido!</h2>
                <div class="form_group2">
                    <h4>Usuario:</h4>
                    <input type="text" required id="user" class="form_input2" placeholder=" " name="User">
                </div>
    
                <div class="form_group2">
                    <h4>Contraseña:</h4>
                    <input type="password" required id="password" class="form_input2" placeholder=" " name="Contraseña">
                </div>
                <router-link to="/perfil"><input type="submit" class="form_submit2" name="Ingresar" value="Ingresar"></router-link>
                <p class="form_paragraph2">¿Aun no una tienes cuenta?<router-link class="form_link" to="/registro">Registrate</router-link></p>
                <div class="contr">
                    <router-link class="form_link" to="/recuperar">¿Olvidaste tu contraseña?</router-link>
                </div>
            </div>
        </form>
    </div>
    </body>
    </template>
    
    
   