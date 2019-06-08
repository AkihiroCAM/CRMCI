<div class="container existente">
    <div class="row">
        <div class="col-12">
            <div class="row">
            <div class="col-8">
                    <h1>Clientes existentes</h1>
                </div>
                <div class="col-4">
                    <a href="<?php echo base_url(); ?>cliente/agregarCliente" class="btn btn-primary active botonadd" role="button" aria-pressed="true">Agregar Cliente</a>
                </div>
            </div>
            <div class="table-responsive table--no-card m-b-30">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>RFC</th>
                            <th>Documentos</th>
                            <th>Edad</th>
                            <th>Probabilidad de Venta</th>
                            <th>Estado</th>
                            <th>Correo</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Anio</th>
                            <th>Costo Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($cliente_model->num_rows()) :
                                foreach ($cliente_model->result() as $row) :
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $row->nombre_com; ?>
                            </td>
                            <td class="text-center"><?php echo $row->rfc; ?></td>
                            <td class="text-center"></td>
                            <td class="text-center"><?php echo $row->edad; ?></td>
                            <td class="text-center"><?php echo $row->prob_venta; ?></td>
                            <td class="text-center"><?php echo $row->estado; ?></td>
                            <td class="text-center"><?php echo $row->correo; ?></td>
                        </tr>
                        <?php
                                endforeach;
                            else :
                        ?>
                        <p class="mensaje">No se encontraron usuarios.</p>
                        <?php
                            endif;
                        ?>
                    </tbody>
                </table><!--END TABLE-->
            </div>
            <!-- <div class="row">
                <div class="col-8">
                    <h1>Clientes existentes</h1>
                </div>
                <div class="col-4">
                    <a href="<?php echo base_url(); ?>cliente/agregarCliente" class="btn btn-primary active botonadd" role="button" aria-pressed="true">Agregar Cliente</a>
                </div>
            </div>
            <?php
                if($cliente_model->num_rows()) :
                    foreach ($cliente_model->result() as $row) :
            ?>
            <article class="usuario">
                <div>
                    <h3 class="nom_usuario"><a href="<?php echo base_url(); ?>perfil"><?php echo $row->nombre_com; ?></a></h3>
                    <br>
                    <a href="mailto:<?php echo $row->correo; ?>"><?php echo $row->correo; ?></a>
                    <br>
                </div>
                <div class="btn-group ml-auto" id="opciones">
                    <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?php echo base_url(); ?>inicio/perfil">Ver perfil (En proceso)</a>
                        <a class="dropdown-item" href="<?php echo base_url(); ?>cliente/edit/<?php echo $row->id;?>">Editar</a>
                        <a class="dropdown-item" href="<?php echo base_url(); ?>cliente/deleteUser/<?php echo $row->id;?>">Eliminar</a>
                    </div>
                </div>
            </article>
            <?php
                    endforeach;
                    else :
            ?>
            <p class="mensaje">No se encontraron clientess.</p>
            <?php
                endif;
            ?> -->
        </div>
    </div>
</div>
