let carrito = [] //Base de datos
//let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

let carritoKey = 'carrito'; // Clave para almacenar en localStorage

const carritoService = {
    // Guardar el producto en el carrito
    save: (pizza) => {
        console.log("Recibido en el servicio:", pizza); // Verifica que pizza tiene los datos correctos

        let carrito = JSON.parse(localStorage.getItem(carritoKey)) || []; // Obtener carrito existente
        carrito.push(pizza);
        localStorage.setItem(carritoKey, JSON.stringify(carrito)); // Guardar carrito actualizado
        
        // Verificar que se haya guardado correctamente
        console.log("Carrito después de guardar:", JSON.parse(localStorage.getItem(carritoKey)));
    },
    // Listar los productos en el carrito
    list: () => {
        let carrito = JSON.parse(localStorage.getItem(carritoKey)) || []; // Devolver carrito o vacío si no existe
        //console.log("Carrito recuperado:", carrito); // Verifica que el carrito contenga datos
        return carrito; // Asegúrate de que se devuelve el carrito
    },
    // Eliminar un producto del carrito
    remove: (idPizza) => {
        console.log("Intentando eliminar el producto con ID:" + idPizza)
        let carrito = JSON.parse(localStorage.getItem(carritoKey)) || [];
        console.log(carrito);
        carrito = carrito.filter(product => product.idPizza !== String(idPizza)); // Filtrar el producto
        localStorage.setItem(carritoKey, JSON.stringify(carrito)); // Actualizar carrito en localStorage
    },
    // Limpiar el carrito
    clear: () => {
        localStorage.removeItem(carritoKey); // Eliminar el carrito del localStorage
    },
    agregarUno: (id) => {
        // Recuperar el carrito existente
        let carrito = JSON.parse(localStorage.getItem(carritoKey)) || [];
    
        // Buscar el producto en el carrito
        carrito.forEach(producto => {
            if (parseInt(producto.idPizza) === id) {
                producto.cantidad++; // Incrementar la cantidad del producto
            }
        });
    
        // Guardar el carrito actualizado en localStorage
        localStorage.setItem(carritoKey, JSON.stringify(carrito));
    
        // Verificar que se haya actualizado correctamente
        console.log("Carrito actualizado después de agregar uno:", JSON.parse(localStorage.getItem(carritoKey)));
    },
    restarUno: (id) => {
        // Recuperar el carrito existente
        let carrito = JSON.parse(localStorage.getItem(carritoKey)) || [];
    
        // Buscar el producto en el carrito
        carrito.forEach(producto => {
            if (parseInt(producto.idPizza) === id && producto.cantidad > 1) {
                producto.cantidad--; // Incrementar la cantidad del producto
            }
        });
    
        // Guardar el carrito actualizado en localStorage
        localStorage.setItem(carritoKey, JSON.stringify(carrito));
    
        // Verificar que se haya actualizado correctamente
        console.log("Carrito actualizado después de agregar uno:", JSON.parse(localStorage.getItem(carritoKey)));
    }
}
