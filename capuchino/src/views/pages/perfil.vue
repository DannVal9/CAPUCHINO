<template>
    <body>
      <div class="cuerpo">
        <div class="izq">
          <a href="Admin1.html" class="tit"><h1 class="titulo">DASEAN ACADEMYC</h1></a>
          <router-link to="/perfil"><a href="Admin1.html" class="boton"
            ><i class="fa-solid fa-house-user icons1"></i>Perfil</a
          ></router-link>
          <router-link to="/lives"><a href="Admin2.html" class="boton"
            ><i class="fa-solid fa-circle-dot icons1"></i>Iniciar Live</a
          ></router-link>
          <router-link to="/curso"><a href="Admin3.html" class="boton"><i class="fa-regular fa-circle-up icons1"></i>Subir Curso</a></router-link>
          <router-link to="/"><a href="Home.html" class="boton2">Cerrar Sesion</a></router-link> 
        </div>
        <div class="der">
          <div class="arriba">
            <div class="der-izq">
              <h1 class="titulo2">Bienvenido a tu Perfil</h1>
            </div>
            <div class="der-der">
              <a href="Home.html" class="tit"
                ><i class="fa-regular fa-comments icons2"></i
              ></a>
              <a href="Home.html" class="tit"
                ><i class="fa-solid fa-gear icons2"></i
              ></a>
            </div>
          </div>
  
          <div class="abajo"></div>
        </div>
      </div>
    </body>
  </template>
  <script>
  export default {
    name: "perfil",
  };
  </script>
  <style>
  body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
  }
  
  .cuerpo {
    display: flex;
  }
  
  
  .izq {
    width: 250px;
    background-color: #6100ff;
    color: white;
    padding: 15px;
    border-right: 2px solid black;
  }
  
  .tit {
    text-decoration: none;
    color: white;
  }
  
  .titulo {
    text-align: left;
    padding: 0px 25px;
    font-family: Georgia, "Times New Roman", Times, serif;
    color: #fff;
  }
  
  .boton {
    display: inline-block;
    text-decoration: none;
    color: #fff;
    border-radius: 10px;
    border: 1px solid rgb(0, 0, 0);
    width: 180px;
    height: 30px;
    padding: 10px 30px;
    margin-top: 20px;
    margin-bottom: 10px;
    font-size: 20px;
    font-weight: bold;
  }
  
  .boton2 {
    display: inline-block;
    text-decoration: none;
    color: #fff;
    border-radius: 10px;
    border: 1.5px solid rgb(0, 0, 0);
    padding: 10px 30px;
    margin-bottom: 10px;
    text-align: center;
    width: 180px;
    height: 30px;
    margin-top: 280px;
    font-size: 20px;
    font-weight: bold;
  }
  
  .boton:hover,
  .boton2:hover {
    background-color: #00b3ff;
  }
  
  .icons1 {
    margin-right: 10px;
    font-size: 25px;
    margin: 0px 20px 0px 15px;
  }
  
  /* ####################################################### */
  
  .der {
    flex: 1;
    background-color: #6c50ad;
    color: #fff;
    display: flex;
    flex-direction: column;
  }
  
  .arriba {
    background-color: #6100ff;
    border-bottom: 2px solid black;
    height: 85px;
  }
  .abajo {
    flex: 1;
  }
  
  .titulo2 {
    width: 90%;
    position: relative;
    top: 5px;
    left: 3%;
  }
  
  .icons2 {
    font-size: 45px;
    position: relative;
    top: -58px;
    left: 85%;
    padding: 0px 10px;
  }
  </style>