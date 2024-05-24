<template>
    <body>
      <div class="imagS">
        <img src="capuchino/imagenes/figura2.png" />
      </div>
  
      <div class="atras">
          <router-link to="/login">
              <a href="index.html"><input type="button" class="backS" value="←"></a>
             </router-link>
      </div>
  
      <div class="recup">
        <form class="formu" method="post">
          <h1>¿Has olvidado tu Contraseña?</h1>
          <div class="datosS">
            <h3>Ingrese su correo electrónico:</h3>
            <input
              type="email"
              class="correoS"
              placeholder="  Email"
              required="Email"
              name="correoS"
            />
          </div>
          <router-link to="/login"><div class="botonS">
            <input
              type="submit"
              class="envioS"
              value="Reestablecer Contraseña"
              name="envioS"
            />
            <h4>ó <router-link to="/login">Inicio de sesion</router-link></h4>
          </div></router-link> 
        </form>
        <img src="capuchino/imagenes/figura.png" alt="" />
      </div>
    </body>
  </template>
  <script>
  export default {
      name:'recuperar',
  };
  </script>
  <style></style>