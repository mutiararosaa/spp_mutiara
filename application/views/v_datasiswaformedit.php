<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin SPP - Ubah Data Siswa</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper" style="background:#f0dfad;;">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <?php $this->load->view('v_topmenu'); ?>	
            <!-- /.navbar-top-links -->

            <?php $this->load->view('v_sidemenu'); ?>	
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper" style="background:#f0dfad;;">
<?php
	if ($satu['nisn'] == ''){
?>
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">404 <small>Page Not Found</small></h1>
				</div>
			</div>
			<div class="alert alert-warning" role="alert">
				<strong>Warning!</strong><br>
				The page you requested was not found.<br>
			</div>
<?php
	}
	else{
?>
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Siswa</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Ubah Siswa
                        </div>
                        <div class="panel-body">
                            <div class="row">
								<div class="col-lg-12">
                                    <form role="form" method="post" enctype="multipart/form-data">
										<input type='hidden' name='idnisn' value='<?php echo $satu['nisn'];?>'>
										<div class="form-group">
											<label>NISN</label>
											<input class="form-control" name="nisn" type="text" value="<?php echo $satu['nisn'];?>" disabled>
											<?php echo form_error('nisn','<p class="text-danger">','</p>'); ?>
                                        </div>
										<div class="form-group">
											<label>NIS</label>
											<input class="form-control" name="nis" type="text" value="<?php echo $satu['nis'];?>">
                                        </div>
										<div class="form-group">
											<label>Nama</label>
											<input class="form-control" name="nama" type="text" value="<?php echo $satu['nama'];?>">
											<?php echo form_error('nama','<p class="text-danger">','</p>'); ?>
                                        </div>
										<div class="form-group">
                                            <label>Kelas</label>
                                            <select class="form-control" name="kelas">
											<?php
											  $no=1;
											  foreach($kelas->result_array() as $d){
												  if ($satu['id_kelas']==$d['id_kelas']){
											?>
													<option value="<?php echo $d['id_kelas'];?>" selected><?php echo $d['nama_kelas'];?></option>
											<?php
												  }
												  else{
											?>
													<option value="<?php echo $d['id_kelas'];?>"><?php echo $d['nama_kelas'];?></option>
											<?php	  
												  }
											  $no++;
											  }
											?>
                                            </select>
                                        </div>
										<div class="form-group">
											<label>Alamat</label>
											<textarea class="form-control" name="alamat" rows="2"><?php echo $satu['alamat'];?></textarea>
											<?php echo form_error('alamat','<p class="text-danger">','</p>'); ?>
                                        </div>
										<div class="form-group">
											<label>No Telp</label>
											<input class="form-control" name="notelp" type="text" value="<?php echo $satu['no_telp'];?>">
											<?php echo form_error('notelp','<p class="text-danger">','</p>'); ?>
                                        </div>
										<div class="form-group">
                                            <label>SPP</label>
                                            <select class="form-control" name="spp">
											<?php
											  $no=1;
											  foreach($spp->result_array() as $d){
												  if ($satu['id_spp']==$d['id_spp']){
											?>
													<option value="<?php echo $d['id_spp'];?>" selected><?php echo $d['tahun'];?></option>
											<?php
												  }
												  else{
											?>
													<option value="<?php echo $d['id_spp'];?>"><?php echo $d['tahun'];?></option>
											<?php	  
												  }
											  $no++;
											  }
											?>
                                            </select>
                                        </div>
										<div class="form-group input-group">
                                            <button type="submit" name="ubah" class="btn btn-outline btn-success" Value="Ubah">Ubah</button>
											<a href="<?php echo site_url();?>datasiswa/" class="btn btn-outline btn-danger">Kembali</a>
                                        </div>
									</form>
								</div>
                                <!-- /.col-lg-12 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div><div class="col-lg-4"></div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
<?php
	}
?>
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>dist/js/sb-admin-2.js"></script>

</body>

</html>