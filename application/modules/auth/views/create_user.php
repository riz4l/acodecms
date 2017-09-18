<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AcodeCMS | Create Users</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
  <?php $this->load->view('style');?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-black sidebar-mini">
<div class="wrapper">

  <!-- NAVBAR-->
    <?php $this->load->view('navbar'); ?>
  <!-- /END NAVBAR -->

  <!-- SIDEBAR-->
    <?php $this->load->view('sidebar'); ?>
  <!-- /END SIDEBAR -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li id="breadcumb_user"><a href="<?php echo base_url()?>auth">Users</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
              
              <div id="infoMessage"><?php echo $message;?></div>

                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title"><a href="<?php echo base_url()?>auth" class="btn btn-sm btn-info"><i class="fa fa-chevron-left"></i></a> <?php echo lang('create_user_heading');?></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <?php echo form_open('auth/create_user');?>
                      <div class="box-body">
                        <div class="form-group">
                             <?php echo lang('create_user_fname_label', 'first_name');?> <br />
                             <?php echo form_input($first_name);?>
                        </div>
                        <div class="form-group">
                            <?php echo lang('create_user_lname_label', 'last_name');?> <br />
                            <?php echo form_input($last_name);?>
                        </div>
                            <?php
                              if($identity_column!=='email') {
                                  echo '<p>';
                                  echo lang('create_user_identity_label', 'identity');
                                  echo '<br />';
                                  echo form_error('identity');
                                  echo form_input($identity);
                                  echo '</p>';
                              }
                            ?>
                        <div class="form-group">
                            <?php echo lang('create_user_company_label', 'company');?> <br />
                            <?php echo form_input($company);?>
                        </div>
                        <div class="form-group">
                            <?php echo lang('create_user_email_label', 'email');?> <br />
                            <?php echo form_input($email);?>
                        </div>
                        <div class="form-group">
                            <?php echo lang('create_user_phone_label', 'phone');?> <br />
                            <?php echo form_input($phone);?>
                        </div>
                        <div class="form-group">
                            <?php echo lang('create_user_password_label', 'password');?> <br />
                            <?php echo form_input($password);?>
                        </div>
                        <div class="form-group">
                            <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
                            <?php echo form_input($password_confirm);?>
                        </div>

                      </div>
                      <!-- /.box-body -->
                      <div class="box-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Create User</button>
                      </div>
                    <?php echo form_close();?>
                  </div>
          </div>
            <!-- /.box -->       
      </div>
    </div>  
  </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

  <!-- FOOTER -->
    <?php $this->load->view('footer'); ?>
  <!-- /END FOOTER -->

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>assets/plugins/jQueryUI/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/js/dataTables.bootstrap.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url();?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url();?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/app.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){

    $('input[type="text"]').addClass('form-control');
    $('input[type="password"]').addClass('form-control');
});

</script>