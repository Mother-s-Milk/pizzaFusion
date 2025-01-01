let menuService = {
    obtenerPizzas: () => {
        return fetch("menu/obtenerPizzas", {
            method: "GET",
            headers: {
              "Content-Type": "application/json",
              "Accept": "application/json",
            },
            })
            .then((response) => {
              if (!response.ok) {
                throw new Error(response.status);
              }
              return response.json();
            })
            .then((data) => {
              return data;
              })
              .catch((error) => {
                console.error("Error en la petición: ", error);
                throw error;
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