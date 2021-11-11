<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("assets/css/bootstrap.css")?>" />
    <title><?= $title ?></title>
</head>
<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="<?= base_url();?>" class="nav-link px-2 text-secondary">Listado</a></li>
                <li><a href="<?= base_url();?>welcome/saveForm" class="nav-link px-2 text-white">Nuevo Usuario</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" action="<?= base_url(); ?>">
                <div class="text-end">  
                    <input type="search" class="form-control form-control-sm form-control-dark" placeholder="Buscar usuario..." name="nombre" aria-label="Search">

                    <!-- <button type="button" class="btn btn-sm btn-warning">Sign-up</button> -->
                    
                </div>
            </form>
        </div>
        </div>
    </header>
    <div class="container">
        <br>
        <?= $content; ?>
    </div>

    
<script type="text/javascript" src="<?= base_url("assets/js/jquery-3.6.0.js")?>"></script>
<script type="text/javascript" src="<?= base_url("assets/js/bootstrap.js")?>"></script>
</body>
</html>