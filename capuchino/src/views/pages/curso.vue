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
              <h1 class="titulo2">Subir Curso</h1>
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
  
          <div class="abajo">
            <input
              class="live"
              type="text"
              id="tituloLive"
              placeholder="Título para el Curso"
            />
            <textarea
              class="descp"
              id="descripcion"
              placeholder="Agrega una descripción"
            ></textarea>
            <select class="categoria">
              <option value="" disabled selected>Categoría</option>
              <option value="categoria 2">Ingeneria Informatica</option>
              <option value="categoria 3">Diseño Visual</option>
              <option value="categoria 4">Administracion de Empresas</option>
              <option value="categoria 5">Contaduria Publica</option>
            </select>
  
            <h1 class="fecha">
              <i class="fa-solid fa-calendar-days icons3"></i>Programar Curso:
            </h1>
            <input
              class="fecha2"
              type="datetime-local"
              id="fechaHora"
              name="fechaHora"
            />
          </div>
        </div>
      </div>
    </body>
  </template>
  <script>
  export default {
      name: 'curso',
  };
  </script>
  <style>
  body
  {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
  }
  
  .cuerpo
  {
      display: flex;
  }
  
  /* ####################################################### */
  
  .izq
  {
      width: 250px;
      background-color: #6100ff;
      color: white;
      padding: 15px;
      border-right: 2px solid black;
     
  }
  
  .tit
  {
      text-decoration: none;
      color: white;
  }
  
  .titulo{
     
      text-align: left;
      padding: 0px 25px;
      font-family:Georgia, 'Times New Roman', Times, serif;
      color: #fff;
      
  }
  
  .boton
  {
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
  
  .boton2
  {
      display: inline-block;
      text-decoration: none;
      color: #fff;
      border-radius: 10px;
      border: 1.5px solid rgb(0, 0, 0);
      padding: 10px 30px;
      margin-bottom: 10px;
      width: 180px; 
      height: 30px; 
      margin-top: 280px;
      font-size: 20px;
      font-weight: bold;
      display: flex; 
      justify-content: center;
      align-items: center; 
  }
  
  .boton:hover,
  .boton2:hover
  {
      background-color: #00b3ff;
  }
  
  .icons1
  {
      margin-right: 10px;
      font-size: 25px;
      margin: 0px 20px 0px 15px;
  }
  
  /* ####################################################### */
  
  .der
  {
      flex: 1;
      background-color: #6C50AD; 
      color: #fff; 
      display: flex;
      flex-direction: column;
  }
  
  .arriba
  {
      background-color: #6100FF;
      border-bottom: 2px solid black; 
      height: 85px;
  }
  .abajo
  {
      display: flex;
      flex-direction: column;
  }
  
  .titulo2
  {
    width: 90%;
    position: relative;
    top: 5px;
    left: 3%;
  }
  
  .icons2
  {
      font-size: 45px;
      position: relative;
      top: -58px;
      left: 85%;
      padding: 0px 10px;
  }
  
  /* ####################################################### */
  
  .live {
      width: 90%;
      padding: 12px 20px;
      margin: 30px 0px 0px 35px;
      border: 0px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      background-color: #9c81da;
      border-bottom: 2px solid rgb(255, 255, 255);
      font-size: 20px;
      color: white;
  }
  
  .live::placeholder {
      color: white;
      font-weight: bold;
      font-family: Arial, Helvetica, sans-serif;
  }
  
  .descp {
      width: 90%;
      padding: 12px 20px;
      margin: 20px 0px 0px 35px;
      border: 0px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      background-color: #9c81da;
      border-bottom: 2px solid rgb(255, 255, 255);
      font-size: 20px;
      resize: none;
      color: white;
  }
  
  
  .descp::placeholder{
      color: white;
      font-weight: bold;
      font-family: Arial, Helvetica, sans-serif;
  }
  
  .categoria{
      width: 93.3%;
      padding: 12px 20px;
      margin: 15px 0px 0px 35px;
      border: 0px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      background-color: #9c81da;
      border-bottom: 2px solid rgb(255, 255, 255);
      font-size: 20px;
      color: white;
      font-weight: bold;
      font-family: Arial, Helvetica, sans-serif;
  }
  
  .fecha{
      display: flex;
      justify-content: center;
      align-items: center;
      width: 25%;
      padding: 12px 20px;
      margin: 10px 0px 0px 35px;
      font-size: 30px;
      color: white;
      font-weight: normal;
      font-family: Arial, Helvetica, sans-serif;
      pointer-events: none;
  }
  
  .icons3{
      padding-right: 20px;
      font-size: 45px;
  }
  
  
  .fecha2{
      position: relative;
      margin-top: -58px;
      margin-left: 32%;
      width: 23%;
      padding: 12px 20px;
      border: 0px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      background-color: #9c81da;
      border-bottom: 2px solid rgb(255, 255, 255);
      font-size: 20px;
      color: white;
      font-weight: bold;
      font-family: Arial, Helvetica, sans-serif;
  }
  
  </style>