<div class="container registro">
    <div class="row">
        <div class="col-12">
            <h1>Ingresa vehiculo</h1>
            <form action="<?php echo base_url() ?>vehiculo/crear_vehiculo" method="get">
                <fieldset>
                    <label>Marca:</label>
                    <input type="text" name="marca">
                </fieldset>
                <fieldset>
                    <label>Modelo:</label>
                    <input type="text" name="modelo">
                </fieldset>
                <fieldset>
                    <label>Anio:</label>
                    <input type="text" name="anio">
                </fieldset>
                <fieldset>
                    <label>Costo Total:</label>
                    <input type="text" name="costo_total">
                </fieldset>
                <button class="btn btn-success">Subir</button>
            </form>
        </div>
    </div>
</div>