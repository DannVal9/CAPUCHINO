<template>
    <body>
      <div class="imagD">
        <img src="capuchino/images/imgD2.jpg" />
      </div>
      <div class="btnD2">
          <router-link to="/login">
              <a href="index.html"><input type="button" class="back" value="←"></a>
             </router-link>
      </div>
      <div class="register">
        <form class="form" method="post">
          <div class="form_container">
            <h2 class="form_title">Regístrate</h2>
            <div class="pd1">
              <p>Por favor llena todos los espacios</p>
            </div>
            <div class="form_group">
              <h4>Nombre Completo:</h4>
              <input
                type="text"
                required="name"
                class="form_input"
                placeholder=" "
                name="Nombre"
              />
            </div>
  
            <div class="form_group">
              <h4>Usuario:</h4>
              <input
                type="text"
                required
                id="user"
                class="form_input"
                placeholder=" "
                name="User"
              />
            </div>
  
            <div class="form_group">
              <h4>Email:</h4>
              <input
                type="text"
                required
                id="email"
                class="form_input"
                placeholder=" "
                name="Email"
              />
            </div>
  
            <div class="form_group">
              <h4>Contraseña:</h4>
              <input
                type="password"
                required
                id="password"
                class="form_input"
                placeholder=" "
                name="Contraseña"
              />
            </div>
  
            <div class="form_group">
              <h4>Confirmar Contraseña:</h4>
              <input
                type="password"
                required
                id="password2"
                class="form_input"
                placeholder=" "
                name="Contraseña2"
              />
            </div>
            <router-link to="/login"><input
              type="submit"
              class="form_submit"
              name="Registrar"
              value="Registrarse"
            /></router-link>
            <p class="form_paragraph">
              ¿Ya tienes cuenta?
              <router-link class="form_link" to="/login">Ingresar</router-link>
            </p>
          </div>
        </form>
      </div>
    </body>
  </template>
  <script>
  export default {
    name: "registro",
  };
  </script>
  <style></style>