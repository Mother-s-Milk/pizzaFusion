<section class="encabezado-pagina" style="background-image: url('app/img/heading-menu.webp');">
    <div class="encabezado-pagina-content">
        <h2>Hechas con amor y los mejores ingredientes</h2>
        <p>Pizzas al horno de leña, cada una preparada a mano con nuestra receta secreta de masa.</p>
    </div>
</section>

<section class="container section">
    <div class="text-container">
        <p>En PizzaFusión, creemos en la autenticidad. Cada pizza que sale de nuestro horno está hecha con ingredientes frescos y locales, cuidadosamente seleccionados para brindarte una experiencia única en cada bocado. Desde nuestras clásicas margaritas hasta las especialidades gourmet, el sabor siempre es lo primero.</p>
        <p>No importa cuál sea tu gusto, tenemos algo para vos: pizzas sin gluten, opciones veganas, o si lo preferís, podés personalizar tu pizza con tus ingredientes favoritos.</p>
    </div>
</section>

<div class="divisor-container">
    <hr class="divisor">
</div>

<section class="container section animation-section">
    <header class="header-section">
        <h2>Pizzas</h2>
    </header>
    <div class="section-menu">
        <aside class="aside-filter-menu">
            <!-- <h2>Filtros:</h2> -->
            <ul>
                <li><button type="button" class="filter-button active" data-filter="todas">Todas</button></li>
                <li><button type="button" class="filter-button" data-filter="1">Clásicas</button></li>
                <li><button type="button" class="filter-button" data-filter="2">Carnívoras</button></li>
                <li><button type="button" class="filter-button" data-filter="3">Gourmet</button></li>
                <li><button type="button" class="filter-button" data-filter="4">Blancas</button></li>
                <li><button type="button" class="filter-button" data-filter="5">Veggie</button></li>
            </ul>
        </aside>
        <section class="grid-menu" id="grid-pizza-menu">
        </section>
    </div>
    <!-- <div id="paginator">
        <button id="prevPage" onclick="menuController.changePage(-1)" disabled>Anterior</button>
        <button id="nextPage" onclick="menuController.changePage(1)" disabled>Siguiente</button>
    </div> -->
</section>

<div id="toast-notification" class="toast-notification hidden">
    ¡Pizza agregada al carrito!
</div>