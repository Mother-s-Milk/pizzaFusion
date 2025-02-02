<section class="encabezado-pagina" style="background-image: url('app/img/encabezado-carrito.webp');">
    <div class="encabezado-pagina-content">
        <h2>Tu selección de pizzas está lista</h2>
        <p>Revisa tu pedido y confirma las delicias que disfrutarás en tu próxima comida. Estamos listos para prepararlas con amor y enviarlas directo a tu mesa.</p>
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

<div id="pedido-modal" class="modal">
    <div class="pedido-modal-content">
        <header>
            <h2>Formulario de pedidos</h2>
        </header>
        <form class="form-pedido">
            <div>
                <input type="text" value="Joel" placeholder="Nombre" id="nombre-envio">
            </div>
            <div>
                <input type="text" value="Eva Perón 252" placeholder="Dirección" id="direccion-envio">
            </div>
            <div>
                <input type="text" value="2974735950" placeholder="Teléfono" id="telefono-envio">
            </div>
            <div>
                <select name="" id="retiro-envio">
                    <option value="" disabled selected hidden>Selecciona un tipo de pedido</option>
                    <option value="Retirar">Retirar</option>
                    <option value="Delivery">Delivery</option>
                </select>
            </div>
            <div>
                <select name="" id="pago-envio">
                    <option value="" disabled selected hidden>Selecciona un medio de pago</option>
                    <option value="Efectivo">Efectivo</option>
                    <option value="Transferencia">Mercado Pago</option>
                </select>
            </div>
            <div>
                <textarea name="" id="comentario-envio" placeholder="Comentario"></textarea>
            </div>
            <div>
                <button type="button" class="btn btn-pedir" id="btn-pedir">Enviar</button>
                <button type="button" class="btn btn-cancelar" id="btn-cancelar">Cancelar</button>
            </div>
        </form>
    </div>
</div>