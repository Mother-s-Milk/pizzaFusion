<section class="heading-page banner-page" style="background-image: url('app/img/heading-nosotros.webp');">
    <div class="heading-page-content">
        <h2>Nuestra Historia</h2>
        <p>Con cada pizza, honramos nuestra tradición y pasión. Hechas a mano, con ingredientes frescos y el sabor auténtico del horno de leña.</p>
    </div>
</section>

<section class="container section">
    <header class="header-section">
        <h2>Tu Carrito</h2>
    </header>
    <div class="section-content">
        <table class="table-cart">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody id="body-cart-products">
                <tr>
                    <td>No hay productos cargados</td>
                </tr>
            </tbody>
            <tfoot hidden>
                <tr>
                    <th colspan="5" style="text-align: right;">Total:</th>
                    <th id="total-sale">$0.00</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <footer id="cart-section-footer">
        <button type="button" class="btn btn-realizar-pedido" id="btn-realizar-pedido">Realizar pedido</button>
        <button type="button" class="btn btn-clear-all" id="btn-clear-all">Borrar todo</button>
    </footer>
</section>

<!-- Modal formulario de envío -->
<div id="pedido-modal" class="modal">
    <div class="pedido-modal-content">
        <header>
            <h2>Formulario de pedidos</h2>
        </header>
        <form class="form-pedido">
            <div>
                <input type="text" placeholder="Nombre">
            </div>
            <div>
                <input type="text" placeholder="Dirección">
            </div>
            <div>
                <input type="text" placeholder="Teléfono">
            </div>
            <div>
                <select name="" id="">
                    <option value="" disabled selected hidden>Selecciona un tipo de pedido</option>
                    <option value="">Retirar</option>
                    <option value="">Delivery</option>
                </select>
            </div>
            <div>
                <select name="" id="">
                    <option value="" disabled selected hidden>Selecciona un medio de pago</option>
                    <option value="">Efectivo</option>
                    <option value="">Mercado Pago</option>
                </select>
            </div>
            <div>
                <textarea name="" id="" placeholder="Comentario"></textarea>
            </div>
            <div>
                <button type="button" class="btn btn-pedir" id="btn-pedir">Pedir ahora</button>
                <button type="button" class="btn btn-cancelar" id="btn-cancelar">Cancelar</button>
            </div>
        </form>
    </div>
</div>