<div class="container registro">
    <div class="row">
        <div class="col-12">
            <h1>Insertar usuario</h1>
            <form action="<?php echo base_url() ?>cliente/crear_usuario" method="get">
                <fieldset>
                    <label>Nombre completo:</label>
                    <input type="text" name="nombre_com">
                </fieldset>
                <fieldset>
                    <label>RFC:</label>
                    <input type="text" name="rfc">
                </fieldset>
                <fieldset>
                    <label>edad:</label>
                    <input type="text" name="edad">
                </fieldset>
                <fieldset>
                    <label>Probabilidad de venta:</label>
                    <select name="prob_venta">
                        <option value="MuyBaja">Muy Baja</option>
                        <option value="Baja">Baja</option>
                        <option value="Media">Media</option>
                        <option value="Alta">Alta</option>
                        <option value="Seguro">Seguro</option>
                    </select>
                </fieldset>
                <fieldset>
                    <label>Estado:</label>
                    <select name="estado">
                        <option value="Prospecto">Prospecto</option>
                        <option value="Cotizacion de vehiculo">Cotizacion de vehiculo</option>
                        <option value="Esperando">Esperando</option>
                        <option value="Aprobado">Aprobado</option>
                        <option value="Entregado">Entregado</option>
                        <option value="Vendido">Vendido</option>
                        <option value="Posventa">Posventa</option>
                    </select>
                </fieldset>
                <fieldset>
                    <label>Correo:</label>
                    <input type="email" name="correo">
                </fieldset>
                <fieldset>
                    <label>Contrasena:</label>
                    <input type="password" name="contrasena">
                </fieldset>
                <button class="btn btn-primary">Crear usuario</button>
            </form>
            <a href="<?php echo base_url();?>cuentas" class="btn btn-danger active" role="button" aria-pressed="true">Cancelar</a>
        </div>
    </div>
</div>