<?php
    require 'config/config.php';
    require 'clases/Conexion.php';
    require 'clases/Destino.php';
    $Destino = new Destino;
    $Destino->agregarDestino();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

    <main class="container">

        <h1>Alta de un destino</h1>

<?php
        $mensaje = 'No se pudo agregar el destino';
        $css = 'danger';
        if( $Destino ) {
            $mensaje = 'Destino: '.$Destino->getDestNombre().' agregado correctemente';
            $css = 'success';
?>
            <div class="alert alert-<?= $css ?> col-6 mx-auto">
                <?= $mensaje ?><br>
                <a href="adminDestinos.php" class="btn btn-light">
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