let menuController = {
    pizzas: [],
    //Función para obtener las pizzas desde el servicio
    obtenerPizzas: () => {
        menuService.obtenerPizzas()
            .then(response => {
                menuController.pizzas = response.result;
                menuController.mostrarPizzas(menuController.pizzas);
            })
            .catch(error => {
                console.error("Error al cargar las pizzas:", error);
            });
    },
    //Función para mostrar las pizzas en el menú
    mostrarPizzas: (pizzas) => {
        let gridPizzaMenu = document.getElementById("grid-pizza-menu");
        gridPizzaMenu.innerHTML = '';

        if (pizzas.length === 0) {
            gridPizzaMenu.innerHTML = '<p class="text-muted">No se encontraron pizzas registradas</p>';
            return;
        }
        
        pizzas.forEach(pizza => {
            let pizzaCard = `
                <div class="pizza-card">
                    <img src="${pizza.imgPath}" alt="${pizza.nombre}">
                    <h3>${pizza.nombre}</h3>
                    <!--<p>${pizza.descripcion}</p>-->
                    <p>$${parseFloat(pizza.precio).toFixed(2)}</p>
                    <button type="button" class="btn-pizza-card" 
                        data-pizza-id="${pizza.id}" 
                        data-pizza-nombre="${pizza.nombre}" 
                        data-pizza-precio="${pizza.precio}"
                        data-pizza-imgPath="${pizza.imgPath}"
                        aria-label="Agregar ${pizza.nombre} al carrito">
                        Agregar
                    </button>
                    <button type="button" class="btn-pizza-card" 
                        data-pizza-id="${pizza.id}" 
                        data-pizza-nombre="${pizza.nombre}" 
                        data-pizza-precio="${pizza.precio}"
                        data-pizza-imgPath="${pizza.imgPath}"
                        aria-label="Agregar ${pizza.nombre} al carrito">
                        Ver más
                    </button>
                </div>
            `;
            gridPizzaMenu.insertAdjacentHTML('beforeend', pizzaCard);
        });
    },
    filtrarPizzas: (estilo) => {
        let pizzasFiltradas = [];

        menuController.pizzas.forEach (pizza => {
            if (pizza.estiloId == estilo) {
                pizzasFiltradas.push(pizza);
            }
        });
        
        menuController.mostrarPizzas(pizzasFiltradas);
    }
};

document.addEventListener("DOMContentLoaded", () => {
    menuController.obtenerPizzas();

    let filtersLinks = document.querySelectorAll('.filter-button');
    //Identificar el <li> que contiene el botón activo al cargar la página
    let activeFilterLi = document.querySelector('.filter-button.active');
    // Recorrer cada botón de filtro
    filtersLinks.forEach(filter => {
        // Asignar un evento de click a cada botón de filtro
        filter.onclick = () => {
            //let parentLi = filter.parentElement;
            // Si el filtro seleccionado es diferente del actual, actualizar
            if (activeFilterLi !== filter) {
                // Remover la clase 'active' del <li> actual
                if (activeFilterLi) {
                    activeFilterLi.classList.remove('active');
                }
                // Añadir la clase 'active' al nuevo <li> del filtro seleccionado
                filter.classList.add('active');
                // Actualizar la variable 'activeFilterLi'
                activeFilterLi = filter;
                // Obtener el id del filtro
                let filterId = filter.getAttribute('data-filter');
                
                if (filterId === 'todas') {
                    menuController.mostrarPizzas(menuController.pizzas);
                } else {
                    menuController.filtrarPizzas(filterId);
                }
            }
        };
    });

});