let micStream; // Variable para almacenar el flujo de audio del micrófono
const pruebaMicrofono = document.getElementById('pruebaMicrofono');
const apagarMicrofono = document.getElementById('apagarMicrofono');
const contenedorMicrofono = document.getElementById('contenedorMicrofono');
const nivelAudio = document.getElementById('nivelAudio');

// Función para mostrar el botón "Apagar micrófono"
function mostrarBotonApagar() {
    apagarMicrofono.style.display = 'block';
}

// Función para iniciar la prueba del micrófono
async function iniciarPruebaMicrofono() {
    try {
        micStream = await navigator.mediaDevices.getUserMedia({ audio: true });
        const audioContext = new AudioContext();
        const mediaStreamSource = audioContext.createMediaStreamSource(micStream);
        const analyser = audioContext.createAnalyser();
        mediaStreamSource.connect(analyser);

        // Configurar el analizador de audio
        analyser.fftSize = 256;
        const bufferLength = analyser.frequencyBinCount;
        const dataArray = new Uint8Array(bufferLength);

        // Actualizar el medidor de nivel de audio en tiempo real
        function actualizarNivelAudio() {
            requestAnimationFrame(actualizarNivelAudio);
            analyser.getByteFrequencyData(dataArray);
            const nivel = dataArray.reduce((a, b) => Math.max(a, b), 0) / 255;
            nivelAudio.style.height = `${nivel * 100}%`;
        }
        actualizarNivelAudio();

        // Mostrar el contenedor del micrófono y habilitar el botón de apagado
        contenedorMicrofono.style.display = 'block';
        mostrarBotonApagar();
    } catch (error) {
        console.error('Error al acceder al micrófono:', error);
    }
}

// Función para apagar el micrófono
function apagarPruebaMicrofono() {
    if (micStream) {
        micStream.getTracks().forEach(track => track.stop());
        nivelAudio.style.height = '0%'; // Reiniciar el medidor de nivel de audio
        contenedorMicrofono.style.display = 'none'; // Ocultar el contenedor del micrófono
        apagarMicrofono.style.display = 'none'; // Ocultar el botón "Apagar micrófono"
    }
}

pruebaMicrofono.addEventListener('click', iniciarPruebaMicrofono);
apagarMicrofono.addEventListener('click', apagarPruebaMicrofono);