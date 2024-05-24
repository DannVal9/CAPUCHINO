const probarCamaraButton = document.getElementById('probarCamara');
const apagarCamaraButton = document.getElementById('apagarCamara');
const contenedorVideo = document.getElementById('contenedorVideo');
const videoElement = document.getElementById('video');

probarCamaraButton.addEventListener('click', () => {
  // Mostrar el contenedor de la cámara y el botón de apagar
  contenedorVideo.classList.remove('oculto');
  apagarCamaraButton.style.display = 'block';

  // Acceder a la cámara del dispositivo
  navigator.mediaDevices.getUserMedia({ video: true })
    .then((stream) => {
      videoElement.srcObject = stream;
    })
    .catch((error) => {
      console.error('Error al acceder a la cámara: ', error);
    });
});

apagarCamaraButton.addEventListener('click', () => {
  // Ocultar el contenedor de la cámara y el botón de apagar
  contenedorVideo.classList.add('oculto');
  apagarCamaraButton.style.display = 'none';

  // Detener el stream de la cámara
  const stream = videoElement.srcObject;
  const tracks = stream.getTracks();

  tracks.forEach(track => {
    track.stop();
  });

  videoElement.srcObject = null;
});