<!DOCTYPE html>
<html>

	<head>

	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	    <title>Dashboard </title>
	    <!-- <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/Logo_IAIN_Raden_Intan_Bandar_Lampung.png"/> -->
	    <link href="<?=base_url()?>assets/assets/css/bootstrap.min.css" rel="stylesheet">
	    <link href="<?=base_url()?>assets/assets/font-awesome/css/font-awesome.css" rel="stylesheet">

	    <!-- Style graph -->
	    <!-- <link href="<?=base_url()?>assets/assets/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
	    <link href="<?=base_url()?>assets/assets/css/plugins/chartist/chartist.min.css" rel="stylesheet">

	    <link href="<?=base_url()?>assets/assets/css/animate.css" rel="stylesheet">
	    <link href="<?=base_url()?>assets/assets/css/style.css" rel="stylesheet"> -->
	    
	    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dataTable/css/dataTables.bootstrap.css"/>
	</head>
	<body>
		<br/><br/><br/>
		<div class="container">
		    <div class="row">
		        <div class="col-md-offset-4 col-md-4 login-from" style="border:solid thin #eae7de">
		            <h4>Aplikasi Raport</h4><hr/>
		            <?=@$this->session->flashdata('msg')?>
		            <form action="<?=base_url()?>login/proses_login" method="POST" id="login">
		                <div class="form-group">
		                    <label for="">Username</label>
		                    <input id="username" type="text" class="form-control" name="username" placeholder="Username" required />
		                </div>
		                <div class="form-group">
		                    <label for="">Password</label>
		                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required />
		                </div>
		                <div class="form-group">
		                    <label for="">Rule (Guru, Pegawai, Siswa)</label>
		                    <select class="form-control" name="rule" required>
		                    	<option value="">--pilih--</option>
		                    	<option value="guru">Guru</option>
		                    	<option value="staff">Pegawai</option>
		                    	<option value="siswa">Siswa</option>
		                    </select>
		                </div>
		                <div>
		                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Login</button>
		                    Halaman utama, klik <a href="<?=base_url()?>">disini</a>
		                </div>
		            </form>
		            <br />     
		        </div>
		    </div>
		</div> 
		<!-- Mainly scripts -->
	    <script src="<?=base_url()?>assets/assets/js/jquery-2.1.1.js"></script>
	    <script src="<?=base_url()?>assets/assets/js/bootstrap.min.js"></script>
	    <script src="<?=base_url()?>assets/assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
	    <script src="<?=base_url()?>assets/assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	    <!-- Morris -->
	    
	    <script src="<?=base_url()?>assets/assets/js/plugins/morris/raphael-2.1.0.min.js"></script>
	    <script src="<?=base_url()?>assets/assets/js/plugins/morris/morris.js"></script>
	    <script src="<?=base_url()?>assets/assets/js/plugins/chartJs/Chart.min.js"></script>

	    <script src="<?=base_url()?>assets/assets/js/plugins/chartist/chartist.min.js"></script>

	    <!-- Custom and plugin javascript -->
	    <script src="<?=base_url()?>assets/assets/js/inspinia.js"></script>
	    <script src="<?=base_url()?>assets/assets/js/plugins/pace/pace.min.js"></script>
	    <script src="<?=base_url()?>assets/ckeditor/ckeditor.js"></script>
	    <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/jquery.dataTables.min.js"></script>
	    <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/dataTables.bootstrap.min.js"></script>
	</body>
</html>