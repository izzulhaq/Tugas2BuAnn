<head>
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>asset/css/bootstrap.min.css">
</head>
<br><br><br>
<div class="container"> 
	<div class="row">
        <div class="mt 3"> 
        <form class="form-signin" method="post" action="<?php echo site_url();?>login/aksi_login">
            <div class="form-group">
                <label for="inputEmail">Username</label>
                <input type="text" id="inputEmail" required="" plceholder="username" name="username" class="form-control" required="" autofocus="">
            </div>
            <div class="form-group">
                <br>
                <label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" required="" name="password" plceholder="password" class="form-control" required="">
            </div>
                <br>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
        </div>
    </div>
</div>