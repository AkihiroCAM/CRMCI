<!--Usuarios Existentes-->
<div class="container existente">
    <div class="row">
        <div class="col-12">
            <h1>Usuarios existentes</h1>
            <?php
                if($usuarios->num_rows()) :
                    foreach ($usuarios->result() as $row) :
            ?>
            <article class="usuario">
                <div>
                    <h3><?php echo $row->nombre; ?></h3>
                    <br>
                    <a href="mailto:<?php echo $row->correo; ?>"><?php echo $row->correo; ?></a>
                    <br>
                </div>
                <fieldset>
                    <a href="<?php echo base_url(); ?>home/edit/<?php echo $row->id;?>">Editar</a>
                    <a href="<?php echo base_url(); ?>home/delete?id=<?php echo $row->id;?>">Eliminar</a>
                </fieldset>
            </article>
            <?php
                    endforeach;
                    else :
            ?>
            <p class="mensaje">No se encontraron usuarios.</p>
            <?php
                endif;
            ?>
        </div>
    </div>
</div>
<div class="container registro">
    <div class="row">
        <div class="col-12">
            <h1>Insertar usuario</h1>
            <form action="<?php echo base_url() ?>home/crear_usuario" method="get">
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
        </div>
    </div>
</div>
