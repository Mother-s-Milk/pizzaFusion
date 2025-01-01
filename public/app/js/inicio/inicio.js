//Deberia hacer un controller para obtener las promociones, estilos y mas vendidas.

document.addEventListener('DOMContentLoaded', () => {
    const btnHero = document.getElementById('btn-hero');
    //Añade un pequeño "bounce" al botón CTA cada cierto tiempo
    setInterval(() => {
        if (btnHero) {
            btnHero.classList.add('animate-bounce');
            setTimeout(() => {
                btnHero.classList.remove('animate-bounce');
            }, 600); //Duración de la animación
        }
    }, 6000); //El botón rebota cada 6 segundos
});