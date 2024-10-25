let menuService = {
    //Función para obtener todas las pizzas
    getAllPizzas: () => {
        return fetch("pizza/list") //Ajusta la URL según tu configuración
            .then(response => {
                //console.log("Respuesta completa del servidor:", response);
                if (!response.ok) {
                    throw new Error("Error en la respuesta del servidor");
                }
                //return response.text();
                return response.json(); //Devuelve las pizzas como un JSON
            })
            .catch(error => {
                console.error("ERROR EN LA PETICIÓN DE TODAS LAS PIZZAS", error);
            });
    },
    filterById: (filterId) => {
        return fetch(`pizza/filterById/${filterId}`) //Ajusta la URL según tu configuración
            .then(response => {
                //console.log("Respuesta completa del servidor:", response);
                if (!response.ok) {
                    throw new Error("Error en la respuesta del servidor");
                }
                return response.json();  //Devolvemos el JSON con las pizzas filtradas
                //return response.text();
            })
            .catch(error => {
                console.error("ERROR EN LA PETICIÓN DE FILTRADO", error);
            });
    }
};