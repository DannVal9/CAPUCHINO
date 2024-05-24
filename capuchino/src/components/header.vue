<template>
    <header>
        <div>
            <div class="name">
                <h2>DASEAN</h2>
                <h2>ACADEMYC</h2>
            </div>
        <nav>
            <div class="barra"> 
            <a href="#">Inicio</a>
            <a href="#">Administrador</a>
            <router-link to="/cursos1"><a href="#">Cursos</a></router-link>
            <a href="#">Lives</a>
            <a href="#">Contáctanos</a>
            <router-link class="button" type="submit" to="/login">Ingresar</router-link>
            <router-link class="button2" type="submit" to="/registro">Registrarse</router-link>
        </div>
        </nav>
        </div>
        </header>
</template>

<script>
export default {
  name: 'header',
};
</script>