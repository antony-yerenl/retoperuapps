<div class="container">
    <form action="<?= base_url(); ?>index.php/welcome/<?= $action ?>" method="post">
        <?php if (!empty($user)) { ?>
            <input type="hidden" name="id" value="<?= $user['id'] ?? ''; ?>" readonly />
        <?php } ?>
        <input class="btn btn-success btn-small" type="submit" value="<?= $action_alias ?>" />
        <table class="table table-hover">
            <tr>
                <td>Nombres</td>
                <td>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="<?= htmlentities($user['nombre'] ?? ''); ?>" <?= $action == 'delete' ? 'readonly' : ''; ?>>
                </td>
            </tr>
            <tr>
                <td>Correo</td>
                <td>
                    <input type="email" name="correo" id="correo" class="form-control" value="<?= htmlentities($user['correo'] ?? ''); ?>" <?= $action == 'delete' ? 'readonly' : ''; ?>>
                </td>
            </tr>
            <tr>
                <td>Fecha de nacimiento</td>
                <td>
                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="<?= htmlentities($user['fecha_nacimiento'] ?? ''); ?>" <?= $action == 'delete' ? 'readonly' : ''; ?>>
                </td>
            </tr>
            <tr>
                <td>Edad</td>
                <td>
                    <input type="number" name="edad" id="edad" class="form-control" value="<?= htmlentities($user['edad'] ?? ''); ?>" <?= $action == 'delete' ? 'readonly' : ''; ?>>
                </td>
            </tr>
            <tr>
                <td>Nombre Usuario</td>
                <td>
                    <input type="text" name="nombre_usuario" id="nombre_usuario" class="form-control" value="<?= htmlentities($user['nombre_usuario'] ?? ''); ?>" <?= $action == 'delete' ? 'readonly' : ''; ?>>
                </td>
            </tr>
            <tr>
                <td>Contraseña</td>
                <td>
                    <input type="password" name="contrasena" id="contrasena" class="form-control" value="<?= htmlentities($user['contrasena'] ?? ''); ?>" <?= $action == 'delete' ? 'readonly' : ''; ?>>
                </td>
            </tr>
        </table>
    </form>

</div>