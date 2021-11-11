<!--<a href="<?= base_url('index.php/welcome/saveForm'); ?>">Nuevo</a>-->
<button class="btn btn-success btn-sm" onclick="window.location.href = '<?= base_url(); ?>welcome/saveForm'">Registrar Usuario</button>
<br><br>
<div class="jumbotron">
    <table class="table table-hover"> 
        <thead class="table-dark">
        <tr>
            <td>#</td>
            <td>Nombres</td>
            <td>Correo</td>
            <td>Fecha</td>
            <td>Edad</td>
            <td></td>
            <td></td>
        </tr>
        </thead>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td><?= $user->id; ?></td>
                <td><?= $user->nombre; ?></td>
                <td><?= $user->correo; ?></td>
                <td><?= $user->fecha_nacimiento; ?></td>
                <td><?= $user->edad; ?></td>
                <td>
                    <button class="btn btn-sm btn-primary" onclick="window.location.href = '<?= base_url(); ?>welcome/saveForm/<?= $user->id ?>'">Actualizar</button>
                </td>
                <td>
                    <button class="btn btn-sm btn-danger" onclick="window.location.href ='<?= base_url(); ?>welcome/saveForm/<?= $user->id ?>/1'">Eliminar</button>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>