<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("{$this->theme}/include/head"); ?>
        <title><?php echo $this->config->item('site_title'); ?> | Kategoriler</title>

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?php $this->load->view("{$this->theme}/include/topmenu"); ?>
            <!-- /.navbar -->

            <?php $this->load->view("{$this->theme}/include/menu"); ?>


            <?php /*   $Data->Usd_Buy = $this->currency->Usd_Buy();
    $Data->Usd_Sell = $this->currency->Usd_Sell();
    $Data->Eur_Buy = $this->currency->Eur_Buy();
    $Data->Eur_Sell = $this->currency->Eur_Sell();
    */?>

  
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1 class="m-0 text-dark">Hareket Dökümü</h1>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                                        <li class="breadcrumb-item active">Hareket Dökümü</li>
                                    </ol>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->
                    </div>

                    <!-- Main content -->
                    <section class="content">
                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-3">
                                    <div class="info-box">
                                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-dollar-sign"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Dolar Alış</span>
                                            <span class="info-box-number"><?php echo ($Usd_Buy); ?></span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                                <div class="col-12 col-sm-6 col-md-3">
                                    <div class="info-box mb-3">
                                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-dollar-sign"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Dolar Satış</span>
                                            <span class="info-box-number"><?php echo ($Usd_Sell); ?></span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <!-- /.col -->

                                <!-- fix for small devices only -->
                                <div class="clearfix hidden-md-up"></div>

                                <div class="col-12 col-sm-6 col-md-3">
                                    <div class="info-box mb-3">
                                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-euro-sign"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Euro Alış</span>
                                            <span class="info-box-number"><?php echo ($Eur_Buy); ?></span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                                <div class="col-12 col-sm-6 col-md-3">
                                    <div class="info-box mb-3">
                                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-euro-sign"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Euro Satış</span>
                                            <span class="info-box-number"><?php echo ($Eur_Sell); ?></span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                            </div>

<!-- Hareket Dökümü -->
<div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Hareket Dökümü</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Price</th>
                    <th>Sales</th>
                    <th>More</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
                      Some Product
                    </td>
                    <td>$13 USD</td>
                    <td>
                      <small class="text-success mr-1">
                        <i class="fas fa-arrow-up"></i>
                        12%
                      </small>
                      12,000 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Another Product
                    </td>
                    <td>$29 USD</td>
                    <td>
                      <small class="text-warning mr-1">
                        <i class="fas fa-arrow-down"></i>
                        0.5%
                      </small>
                      123,234 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Amazing Product
                    </td>
                    <td>$1,230 USD</td>
                    <td>
                      <small class="text-danger mr-1">
                        <i class="fas fa-arrow-down"></i>
                        3%
                      </small>
                      198 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Perfect Item
                      <span class="badge bg-danger">NEW</span>
                    </td>
                    <td>$199 USD</td>
                    <td>
                      <small class="text-success mr-1">
                        <i class="fas fa-arrow-up"></i>
                        63%
                      </small>
                      87 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>


                    </section>
                    </div>
                    <!-- /.content-header -->

                    <!-- /.content-wrapper -->

                    <!-- Main Footer -->
                    <?php $this->load->view("{$this->theme}/include/footer"); ?>

                </div>
                <!-- ./wrapper -->
                <?php $this->load->view("{$this->theme}/include/js"); ?>

                    <script>
                        $(function() {
                            $('#CategoryTable').DataTable({
                                "language": {
                                    "url": "http://cdn.datatables.net/plug-ins/1.10.12/i18n/Turkish.json"
                                }
                            });
                        });
                    </script>

</body>

</html>