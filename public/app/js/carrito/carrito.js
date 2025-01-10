document.addEventListener('DOMContentLoaded', () => {
    let currentUrl = window.location.href;
    if (currentUrl.includes('carrito')) {
        carritoController.list();
    }

    carritoController.actualizarContador();

    document.addEventListener('click', (event) => {
        if (event.target.classList.contains('btn-pizza-card')) {
            let pizzaId = event.target.getAttribute('data-pizza-id');
            let pizzaNombre = event.target.getAttribute('data-pizza-nombre');
            let pizzaPrecio = parseFloat(event.target.getAttribute('data-pizza-precio'));
            let pizzaUrl = event.target.getAttribute('data-pizza-imgPath');
    
            console.log("Pizza clickeada:", pizzaNombre);
            showToastNotification(`${pizzaNombre} ha sido agregada al carrito`);
            carritoController.save(pizzaId, pizzaNombre, pizzaPrecio, pizzaUrl);
        }
    });

    function showToastNotification(message) {
        let toast = document.getElementById('toast-notification');
        toast.textContent = message;
        toast.classList.remove('hidden');
        toast.classList.add('show');
        
        // Desaparece después de 3 segundos
        setTimeout(() => {
            toast.classList.remove('show');
            toast.classList.add('hidden');
        }, 3000);
    }

    let btnClear = document.getElementById('btn-clear-all');
    if (btnClear != null) {
        btnClear.onclick = () => {
            carritoController.clear();
        }
    }

    let btnPedir = document.getElementById('btn-realizar-pedido');
    if (btnPedir != null) {
        btnPedir.onclick = () => {
            modal.style.display = 'flex';
            setTimeout(() => {
                modal.classList.add('show');
            }, 10);
        }
    }

    let btnCancelar = document.getElementById('btn-cancelar');
    if (btnCancelar != null) {
        btnCancelar.addEventListener('click', () => {
            modal.classList.remove('show');
            setTimeout(() => {
                modal.style.display = 'none';
            }, 300);
        });
    }

    let btnEnvio=document.getElementById('btn-pedir');
    if(btnEnvio!=null){

        btnEnvio.addEventListener('click',()=>{

            carritoController.enviarMensaje();

        })

    }


    let modal = document.getElementById('pedido-modal');
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.classList.remove('show');
            setTimeout(() => {
                modal.style.display = 'none';
            }, 300);
        }
    });
});