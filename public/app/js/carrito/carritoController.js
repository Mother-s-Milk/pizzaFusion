let cartProduct = {
    idPizza: 0,
    url: '',
    nombrePizza: '',
    precioPizza: 0,
    cantidad: 0
}

const carritoController = {
    save: (id, nombre, precio, url) => {
        let allProducts = carritoService.list();
        console.log("Productos en el carrito:", allProducts);

        // Buscar si el producto ya existe en el carrito
        let existingProduct = allProducts.find(product => product.idPizza === id);
        console.log("Producto existente:", existingProduct);

        if (existingProduct) {
            // Si existe, aumentar la cantidad
            console.log(`El producto con ID ${id} ya existe. Incrementando cantidad.`);
            carritoController.agregarUno(parseInt(id));
            //showToastNotification(`¡Se ha incrementado la cantidad de ${nombre}!`);
        } else {
            // Si no existe, crear un nuevo producto y guardarlo
            let newProduct = {
                idPizza: id,
                url: url,
                nombrePizza: nombre,
                precioPizza: parseFloat(precio),
                cantidad: 1
            };
            console.log("Guardando nuevo producto:", newProduct);
            carritoService.save(newProduct);
        }

        // Actualizar el contador siempre
        carritoController.actualizarContador();
        //showToastNotification(`${nombre} ha sido agregada al carrito`);
    },
    list: () => {
        let allProducts = carritoService.list();
        let bodyCartProducts = document.getElementById('body-cart-products');
        let footerCart = document.getElementById('cart-section-footer');

        if (allProducts.length === 0) {
            let row = `
                <tr>
                    <td colspan="7">
                        No hay productos registrados
                    </td>
                </tr>
            `;
            bodyCartProducts.innerHTML = row;
            bodyCartProducts.nextElementSibling.hidden = true;
            footerCart.style.display = "none";
        }
        else {
            bodyCartProducts.innerHTML = '';
            let total = 0;
            let row;
            let contador = 1;
            allProducts.forEach(producto => {
                row = `
                    <tr>
                        <td>${contador}</td>
                        <td><img src="${producto.url}"></td>
                        <td>${producto.nombrePizza}</td>
                        <td>$${producto.precioPizza}</td>
                        <td class="agregar-borrar"><button type="button" class="plus-minus" onclick="carritoController.restarUno(${producto.idPizza})"><i class="fa-solid fa-minus"></i></button><span class="cart-cantidad">${producto.cantidad}</span><button type="button" class="plus-minus" onclick="carritoController.agregarUno(${producto.idPizza})"><i class="fa-solid fa-plus"></i></button></td>
                        <td>$${producto.precioPizza * producto.cantidad}</td>
                        <td><button type="button" class="btn-trash" onclick="carritoController.delete(${producto.idPizza})"><i class="fa-solid fa-trash-can"></i></button></td>
                    </tr>
                `;
                contador++;
                total += producto.precioPizza * producto.cantidad;
                bodyCartProducts.insertAdjacentHTML('beforeend', row);
                footerCart.style.display = "flex";
            });
            let totalSale = document.getElementById('total-sale');
            totalSale.textContent = '$' + total.toFixed(2);
            bodyCartProducts.nextElementSibling.hidden = false;
        }
    },
    delete: (id) => {
        console.log('Eliminando..' + typeof(id));
        carritoService.remove(id);
        carritoController.list();
        carritoController.actualizarContador();
    },
    actualizarContador: () => {
        let count = document.getElementById('cart-count');
        let carrito = carritoService.list();
        let carritoCount = carrito.length;
        count.textContent = carritoCount;
    },
    clear: () => {
        carritoService.clear();
        carritoController.list();
        carritoController.actualizarContador();
    },
    agregarUno: (id) => {
        carritoService.agregarUno(id);
        carritoController.list();
    },
    restarUno: (id) => {
        carritoService.restarUno(id);
        carritoController.list();
    },

    enviarMensaje: () => {
        const nombre = document.getElementById('nombre-envio').value;
        const direccion = document.getElementById('direccion-envio').value;
        const telefono = document.getElementById('telefono-envio').value;
        const retiro = document.getElementById('retiro-envio').value;
        const pago = document.getElementById('pago-envio').value;
        let comentario = document.getElementById('comentario-envio').value;
    
        if (comentario === '') {
            comentario = 'Sin Observaciones';
        }
    
        if (nombre === '' || direccion === '' || telefono === '' || retiro === '' || pago === '') {
            alert('Por favor complete todos los campos');
            return;
        }
    
        const productos = carritoService.list();
        const detalleProductos = productos.map(item => `🍕 *${item.nombrePizza}* (x${item.cantidad}) - $${item.precioPizza}`).join('%0A');
        
        const precioTotal = productos.reduce((total, item) => total + (item.precioPizza * item.cantidad), 0);
    
        const mensaje = `*🍕 Pizza Fusión - Nuevo Pedido*%0A` +
                `——————%0A` +
                `*📋 Detalles del Pedido*%0A` +
                `*👤 Nombre:* ${nombre}%0A` +
                `*🏠 Dirección:* ${direccion}%0A` +
                `*📞 Teléfono:* ${telefono}%0A` +
                `*🚚 Retiro:* ${retiro}%0A` +
                `*📝 Comentario:* ${comentario}%0A` +
                `*💳 Pago:* ${pago}%0A` +
                `——————%0A` +
                `*🛒 Productos:*%0A${detalleProductos}%0A` +
                `——————%0A` +
                `*💰 Total a Pagar:* $${precioTotal}%0A` +
                `——————%0A` +
                `*✅ ¡Gracias por tu pedido! Te esperamos pronto.*%0A`;

    
        const numeroWhatsApp = '5492975488673'; // Reemplaza con el número de WhatsApp del negocio
        const url = `https://wa.me/${numeroWhatsApp}?text=${mensaje}`;
    
        // Abrir WhatsApp
        window.open(url, '_blank');
    }
    
    
    

}