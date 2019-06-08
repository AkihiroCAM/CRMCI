<div class="container registro">
    <div class="row">
        <div class="col-12">
            <h1>Insertar usuario</h1>
            <form action="<?php echo base_url() ?>cuentas/crear_usuario" method="get">
                <fieldset>
                    <label>Nombre:</label>
                    <input type="text" name="nombre">
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