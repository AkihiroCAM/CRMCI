<div class="container edicion">
    <div class="row">
        <div class="col-12">
        <h1>Editar usuario</h1>
            <form action="<?php echo base_url() ?>cliente/editarEnlace/<?=$id?>" method="POST">
                <fieldset>
                    <label for="nombre_com">Nombre:</label>
                    <input type="text" name="nombre_com" class="form-control" required="true" value="<?=$nombre_com?>">
                </fieldset>
                <fieldset>
                    <label for="rfc">RFC:</label>
                    <input type="text" name="rfc" class="form-control" required="true" value="<?=$rfc?>">
                </fieldset>
                <fieldset>
                    <label for="edad">Edad:</label>
                    <input type="text" name="edad" class="form-control" required="true" value="<?=$edad?>">
                </fieldset>
                <fieldset>
                    <label for="prob_venta">Probabilidad de venta:</label>
                    <select name="prob_venta">
                        <option value="MuyBaja">Muy Baja</option>
                        <option value="Baja">Baja</option>
                        <option value="Media">Media</option>
                        <option value="Alta">Alta</option>
                        <option value="Seguro">Seguro</option>
                    </select>
                </fieldset>
                <fieldset>
                    <label for="estado">Estado:</label>
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
                    <label for="correo">Correo:</label>
                    <input type="email" name="correo" class="form-control" required="true" value="<?=$correo?>">
                </fieldset>
                <button class="btn btn-success">Modificar</button>
                <button class="btn btn-danger" href="<?php echo base_url();?>cuentas">Cancelar</button>
            </form>
        </div>
    </div>
</div>