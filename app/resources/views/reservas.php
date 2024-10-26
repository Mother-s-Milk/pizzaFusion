<section class="heading-page" style="background-image: url('app/img/heading-reservas.jpeg');">
    <div class="heading-page-content">
        <h2>El sabor de lo auténtico te está esperando</h2>
        <p>Reserva tu mesa y disfruta de nuestras pizzas al horno de leña, hechas a mano con los mejores ingredientes.</p>
    </div>  
</section>

<section class="container section">
    <header class="header-section">
        <h2>Reservá ahora, es fácil</h2>
        <p>Podes hacerlo completando y enviando el siguiente formulario:</p>
    </header>
    <div class="section-content one">
        <form class="form-reservation" method="POST">
            <div>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre completo" required>
            </div>
            <div>
                <input type="email" id="email" name="email" placeholder="Correo electrónico" required>
            </div>
            <div>
                <input type="tel" id="telefono" name="telefono" placeholder="Teléfono" required>
            </div>
            <div>
                <input type="date" id="fecha" name="fecha" required>
            </div>
            <div>
                <input type="time" id="hora" name="hora" required>
            </div>
            <div>
                <input type="number" id="personas" name="personas" min="1" max="20" placeholder="Número de personas" required>
            </div>
            <div>
                <textarea id="comentario" placeholder="Peticiones especiales (opcional)"></textarea>
            </div>
            <button type="submit" class="btn btn-reservacion">Reservar</button>
        </form>
    </div>
</section>