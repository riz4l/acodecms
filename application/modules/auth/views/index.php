<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AcodeCMS | Users</title>
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
		            <div class="box-header">
		              <h3 class="box-title">
                    <button class="btn btn-sm btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i></button>
                    <a href="<?php echo base_url()?>auth/create_user" class="btn btn-info btn-sm"><i class="fa fa-plus"></i> Add</a>
                    Data Users
                  </h3>
		            </div>
            		<!-- /.box-header -->
            		<div class="box-body">

                    <?php if($this->session->flashdata('message')){?>
                      <div id="infoMessage">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <?php echo $message;?>
                        </div>
                      </div>
                    <?php } ?>

                      <table id="table" class="table table-striped table-hover table-bordered" cellspacing="0" width="100%">
                          <thead>
                              <tr style="background-color:#e1e1e1;">
                                  <th width="5%">No</th>
                                  <th width="15%">First Name</th>
                                  <th width="15%">Last Name</th>
                                  <th width="20%">Email</th>
                                  <th width="20%">Group</th>
                                  <th width="12%">Status</th>
                                  <th width="5%">Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                          </tbody>
                      </table>
					      </div>
            		<!-- /.box-body -->
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
  
  var table;
  var base_url = "<?php echo base_url()?>";

  $(document).ready(function(){

     //datatables
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('auth_ajx/ajax_list')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });

      function reload_table()
  {
      table.ajax.reload(null,false); //reload datatable ajax 
  }

  });
</script>
</body>
</html>