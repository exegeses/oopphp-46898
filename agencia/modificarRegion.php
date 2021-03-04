<?php
    require 'config/config.php';
    require 'clases/Conexion.php';
    require 'clases/Region.php';
    $Region = new Region;
    $Region->modificarRegion();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

    <main class="container">

        <h1>Modificaciónn de una región</h1>

<?php
        $mensaje = 'No se pudo modificar la región';
        $css = 'danger';
        if( $Region ) {
            $mensaje = 'Región: '.$Region->getRegNombre().' modificada correctemente';
            $css = 'success';
?>
            <div class="alert alert-<?= $css ?> col-6 mx-auto">
                <?= $mensaje ?><br>
                <a href="adminRegiones.php" class="btn btn-light">
                    Volver a panel
                </a>
            </div>
<?php
        }
?>





    </main>

<?php
    include 'includes/footer.php';
?>