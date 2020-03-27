<html>
<head>
	<title>	SPP </title>
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>asset/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/vendor/fontawesome-free/css/all.min.css">
</head>
<body>
<nav class="navbar navbar-default"> 
	<div class="container-fluid"> 
	<div class="navbar-header">
	</div>
		<ul class="nav navbar-nav"> 
			<li class="active"><a href="#"><i class="fas fa-user"></i> Admin </a></li>
			<li><a href="<?php echo site_url(); ?>/home/registrasi"> Registrasi </a></li>
			<li><a href="<?php echo site_url(); ?>/home/getData"> Pengelolaan Data </a></li>
			<li><a href="<?php echo site_url(); ?>/home/hitung"> Generate Laporan </a></li>
			<li><a href="<?php echo site_url();?>home/logout">Logout</a></li>
		</ul>
	</div>
	
</nav>
<div class="container"> 
	<div class="row"> 
		<?php $this->load->view($halaman); ?>
	</div>
</div>
</body>
</html>