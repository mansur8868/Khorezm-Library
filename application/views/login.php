
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ARM Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Datetimepicker -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>ARM</b> Логин</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <?php if($error!=null){?>

            <div class="info-box bg-red">
                <span class="info-box-icon"><i class="fa fa-user-times"></i></span>

                <div class="info-box-content" style="vertical-align: middle!important;">
                    <h4><?=$error?></h4>
                </div>
                <!-- /.info-box-content -->
            </div>

        <?php }?>
        <form action="<?=base_url()?>/admin/login " method="post">
            <div class="form-group has-feedback">
                <input name="login" type="text" class="form-control" placeholder="Логин">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input name="password" type="password" class="form-control" placeholder="Парол">
                <span class="glyphicon glyphicon-lock form-control-feedback "></span>
            </div>
            <div class="row text-center">

                <button type="submit" class="btn btn-primary btn-block btn-flat">Логин</button>

                <!-- /.col -->
            </div>
        </form>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo site_url('resources/js/demo.js');?>"></script>
<!-- DatePicker -->
<script src="<?php echo site_url('resources/js/moment.js');?>"></script>
<script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
<script src="<?php echo site_url('resources/js/global.js');?>"></script>
</body>
</html>
