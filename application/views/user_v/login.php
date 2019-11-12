<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("{$this->theme}/include/head"); ?>
        <title>Personel Girişi | <?php echo $this->config->item('site_title'); ?></title>
        <style>
            .login-logo a,
            .register-logo a {
                color: white;
            }
        </style>
</head>

<body class="login-page" style="min-height: 512.391px; background-color: #343A40;">
    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>Personel Girişi</b></a>
        </div>

        <div class="card">
            <div class="card-body login-card-body">
            <?php echo validation_errors(); ?>

                <form action="<?php echo base_url('login'); ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="<?php if(validation_errors() || $this->session->flashdata('error')) echo set_value("Username");  ?>" name="Username" placeholder="Kullanıcı adı veya E-Posta" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="Password" class="form-control" placeholder="Şifre" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                 
                    <div class="input-group mb-3">
                        <div class="g-recaptcha" name="recaptcha" data-sitekey="6Lfe5hIUAAAAAG46UQRH6Ii128GCYoG06B2Y_Nj1"></div>

                    </div>
                    <div class="row">

                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fas fa-lock-open"></i> Oturum Aç</button>
                        </div>
                        <!-- /.col -->
                    </div>

                </form>
<?php /*
                <div class="text-center mb-3" style="margin: 10px 0;">
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fas fa-key mr-2"></i>Şifremi Unuttum</a>
                </div>
                */ ?>

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <?php $this->load->view("{$this->theme}/include/js"); ?>

<?php if($this->session->flashdata('success')) {?>
<script type="text/javascript">
swal({
  title: "Başarılı",
  text: '<?php echo $this->session->flashdata('success'); ?>',
  icon: "success",
  //  button: "Aww yiss!",
  buttons: false,
  closeOnClickOutside: false,
});
</script>
<?php } ?>

<?php if($this->session->flashdata('error')) {?>
<script type="text/javascript">
swal({
  title: "Hata",
  text: '<?php echo $this->session->flashdata('error'); ?>',
  icon: "error",
  button: "Tamam"
});
</script>
<?php } ?>

</body>

</html>