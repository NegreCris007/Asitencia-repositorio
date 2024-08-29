<?php
// Activamos almacenamiento en el buffer
ob_start();
session_start();
if (!isset($_SESSION['nombre'])) {
  header("Location: login.php");
} else {
  require 'header.php';
  require_once('../modelos/Usuario.php');
  $usuario = new Usuario();
  $rsptan = $usuario->cantidad_usuario();
  $reg = $rsptan->fetch_object();
?>

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-header with-border text-center">
              <h3 class="box-title">Panel de Control</h3>
            </div>
            <div class="box-body">
              <div class="row d-flex justify-content-center">
                <!-- Tarjetas Modernas -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                  <div class="card border-0 shadow-lg rounded-lg overflow-hidden">
                    <div class="card-img-top bg-gradient-primary text-white p-4 text-center">
                      <i class="fa fa-list fa-4x"></i> <!-- Icono más grande -->
                      <h4 class="mt-2"><strong>Lista de asistencias</strong></h4>
                    </div>
                    <div class="card-body text-center">
                      <p>Accede al módulo de lista de asistencias para ver y gestionar las entradas de asistencia de los empleados.</p>
                      <a href="<?php echo ($_SESSION['tipousuario'] == 'Administrador') ? 'asistencia.php' : 'asistenciau.php'; ?>" class="btn btn-primary">
                        <i class="fa fa-arrow-right"></i> Acceder
                      </a>
                    </div>
                  </div>
                </div>

                <?php if ($_SESSION['tipousuario'] == 'Administrador') { ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                  <div class="card border-0 shadow-lg rounded-lg overflow-hidden">
                    <div class="card-img-top bg-gradient-warning text-white p-4 text-center">
                      <i class="fa fa-users fa-4x"></i> <!-- Icono más grande -->
                      <h4 class="mt-2"><strong>Empleados</strong></h4>
                    </div>
                    <div class="card-body text-center">
                      <p>Total de empleados registrados: <?php echo $reg->nombre; ?></p>
                      <p>Gestiona los datos de los empleados del sistema.</p>
                      <a href="usuario.php" class="btn btn-warning">
                        <i class="fa fa-arrow-right"></i> Gestionar
                      </a>
                    </div>
                  </div>
                </div>
                <?php } ?>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                  <div class="card border-0 shadow-lg rounded-lg overflow-hidden">
                  <div class="card-img-top bg-gradient-info text-white p-4 text-center">
                  <i class="fa fa-list fa-4x"></i> <!-- Icono más grande -->
                     
                      <h4 class="mt-2"><strong>Reporte de asistencias</strong></h4>
                    </div>
                    <div class="card-body text-center">
                      <p>Genera y visualiza reportes detallados de asistencias.</p>
                      <a href="<?php echo ($_SESSION['tipousuario'] == 'Administrador') ? 'rptasistencia.php' : 'rptasistenciau.php'; ?>" class="btn btn-info">
                        <i class="fa fa-arrow-right"></i> Ver Reporte
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-12 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

<?php
require 'footer.php'; 
}
ob_end_flush();
?>
