<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive table--no-card m-b-30">
                <h1>Contactos</h1>
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                            <th class="text-right">Pais</th>
                            <th class="text-right">Correo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($personal_model->num_rows()) :
                                foreach ($personal_model->result() as $row) :
                        ?>
                        <tr>
                            <td><?php echo $row->nombre; ?>
                            </td>
                            <td><?php echo $row->tipo; ?></td>
                            <td><?php echo $row->estado; ?></td>
                            <td class="text-right"><?php echo $row->pais; ?></td>
                            <td class="text-right"><?php echo $row->correo; ?></td>
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
            </div><!--END RESPONSIVE-->
        </div>
    </div>
</div>