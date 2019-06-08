<div class="container edicion">
    <div class="row">
        <div class="col-12">
        <h1>Editar usuario</h1>
            <form action="<?php echo base_url() ?>cuentas/editarEnlace/<?=$id?>" method="POST">
                <fieldset>
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" class="form-control" required="true" value="<?=$nombre?>">
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