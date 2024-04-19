let pantallaStream;
const botonCompartir = document.getElementById('botonCompartir');
const botonDejarCompartir = document.getElementById('botonDejarCompartir');
const contenedorPantalla = document.getElementById('contenedorPantalla');
const pantallaCompartida = document.getElementById('pantallaCompartida');

// Función para iniciar la prueba de pantalla compartida
async function iniciarPruebaPantalla() {
    try {
        pantallaStream = await navigator.mediaDevices.getDisplayMedia({ video: true });
        pantallaCompartida.srcObject = pantallaStream;
        contenedorPantalla.style.display = 'block'; // Mostrar el contenedor de pantalla compartida
        botonDejarCompartir.style.display = 'block'; // Mostrar el botón de dejar de compartir
    } catch (error) {
        console.error('Error al acceder a la pantalla compartida:', error);
    }
}

// Función para dejar de compartir pantalla
function dejarDeCompartirPantalla() {
    if (pantallaStream) {
        pantallaStream.getTracks().forEach(track => track.stop());
        contenedorPantalla.style.display = 'none'; // Ocultar el contenedor de pantalla compartida
        botonDejarCompartir.style.display = 'none'; // Ocultar el botón de dejar de compartir
    }
}

botonCompartir.addEventListener('click', iniciarPruebaPantalla);
botonDejarCompartir.addEventListener('click', dejarDeCompartirPantalla);