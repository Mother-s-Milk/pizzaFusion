//El botón de cada tarjeta debe tener un "agregar al carro" al hacer click que le pase el data de esa pizza
let menuController = {
    pizzas: [],
    //Función para obtener las pizzas desde el servicio
    fetchPizzas: () => {
        menuService.getAllPizzas()
            .then(response => {
                menuController.pizzas = response; //Guarda las pizzas en el controlador
                menuController.displayPizzas(); //Muestra las pizzas en la vista
            })
            .catch(error => {
                console.error("Error al cargar las pizzas:", error);
            });
    },
    //Función para mostrar las pizzas en el menú
    displayPizzas: () => {
        let gridPizzaMenu = document.getElementById("grid-pizza-menu");
        gridPizzaMenu.innerHTML = '';

        if (menuController.pizzas.length === 0) {
            gridPizzaMenu.innerHTML = '<p class="text-muted">No se encontraron pizzas registradas</p>';
            return;
        }
        
        menuController.pizzas.forEach(pizza => {
            let pizzaCard = `
                <div class="pizza-card">
                    <img src="${pizza.imgPath}" alt="${pizza.nombre}">
                    <h3>${pizza.nombre}</h3>
                    <p>${pizza.descripcion}</p>
                    <p>$${parseFloat(pizza.precio).toFixed(2)}</p>
                    <button type="button" class="btn btn-pizza-card" 
                        data-pizza-id="${pizza.id}" 
                        data-pizza-nombre="${pizza.nombre}" 
                        data-pizza-precio="${pizza.precio}"
                        data-pizza-imgPath="${pizza.imgPath}"
                        aria-label="Agregar ${pizza.nombre} al carrito">
                        Agregar
                    </button>
                </div>
            `;
            gridPizzaMenu.insertAdjacentHTML('beforeend', pizzaCard);
        });
    },
    //Nueva función de filtrado
    filterById: (filterId) => {
        menuService.filterById(filterId)
            .then(response => {
                //console.log("Pizzas filtradas recibidas:", response);
                menuController.pizzas = response; //Actualizamos las pizzas filtradas
                menuController.displayPizzas(); //Mostramos las pizzas filtradas
            })
            .catch(error => {
                console.error("Error al filtrar las pizzas:", error);
            });
    },
};

document.addEventListener("DOMContentLoaded", () => {
    menuController.fetchPizzas();

    /*let filtersLinks = document.querySelectorAll('.filter-button');

    filtersLinks.forEach(filter => {
        filter.onclick = () => {
            filtersLinks.forEach(f => f.parentElement.classList.remove('active'));
            let filterId = filter.getAttribute('data-filter');
            if (filterId === 'todas') {
                menuController.fetchPizzas();
            }
            else {
                menuController.filterById(filterId);
            }
            filter.parentElement.classList.add('active');
        }
    });*/

    // Obtener todos los botones de filtro
let filtersLinks = document.querySelectorAll('.filter-button');

// Identificar el <li> que contiene el botón activo al cargar la página
let activeFilterLi = document.querySelector('.aside-filter-menu li.active');

// Recorrer cada botón de filtro
filtersLinks.forEach(filter => {
    // Asignar un evento de click a cada botón de filtro
    filter.onclick = () => {
        let parentLi = filter.parentElement;

        // Si el filtro seleccionado es diferente del actual, actualizar
        if (activeFilterLi !== parentLi) {
            // Remover la clase 'active' del <li> actual
            if (activeFilterLi) {
                activeFilterLi.classList.remove('active');
            }
            
            // Añadir la clase 'active' al nuevo <li> del filtro seleccionado
            parentLi.classList.add('active');
            // Actualizar la variable 'activeFilterLi'
            activeFilterLi = parentLi;

            // Obtener el id del filtro
            let filterId = filter.getAttribute('data-filter');

            // Llamar al controlador dependiendo del filtro seleccionado
            if (filterId === 'todas') {
                menuController.fetchPizzas(); // Mostrar todas las pizzas
            } else {
                menuController.filterById(filterId); // Filtrar por categoría
            }
        }
    };
});



});

