<div class="col-md-5">
	<h1>REGISTRASI</h1>
	<form method="post" action="<?php echo site_url();?>/home/add">
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="username" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="text" name="password" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Status</label>
			<select name="status" class="form-control" required>
				<option></option>
				<option value="1">Admin</option>
				<option value="2">Petugas</option>
				<option value="3">Siswa</option>
			</select>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Add</button>
		</div>
		
	</form>
</div>

<table id="example1" class="table table-bordered tabel-striped">

<thead>
<tr><th colspan="5"><h3>SISWA</h3></th></tr>
<tr>
<th>NIS</th>
<th>Username</th>
<th>Password</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>

<tbody>
<?php
if ($dataSiswa) {
	$no = 1;
	foreach ($dataSiswa as $key => $result) {
		if($result->lvl==3){
?>
<tr>
	<td><?php echo $result->id ?></td>
	<td><?php echo $result->username ?></td>
	<td><?php echo $result->password ?></td>
	<td><p>SISWA</p></td>
	<td>
		<a href="<?php echo site_url(); ?>/home/hapus/<?php echo $result->id; ?>" class=
		"btn btn-danger"> Hapus </a>
		<a href="<?php echo site_url(); ?>/crud/ed/<?php echo $result->id; ?>" class=
		"btn btn-success"> Edit </a>
	</td>
</tr>
<?php
		}
	$no++;
	}
}
?>
</tbody>


<thead>
<tr><th colspan="5"><h3>PETUGAS</h3></th></tr>
<tr>
<th>ID</th>
<th>Username</th>
<th>Password</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>

<tbody>
<?php
if ($dataSiswa) {
	$noP = 1;
	foreach ($dataSiswa as $key => $result) {
		if($result->lvl==2){
?>
<tr>
	<td><?php echo $result->id ?></td>
	<td><?php echo $result->username ?></td>
	<td><?php echo $result->password ?></td>
	<td><p>PETUGAS</p></td>
	<td>
		<a href="<?php echo site_url(); ?>/home/hapus/<?php echo $result->id; ?>" class=
		"btn btn-danger"> Hapus </a>
		<a href="<?php echo site_url(); ?>/crud/ed/<?php echo $result->id; ?>" class=
		"btn btn-success"> Edit </a>
	</td>
</tr>
<?php
		}
	$noP++;
	}
}
?>
</tbody>


<thead>
<tr><th colspan="5"><h3>ADMIN</h3></th></tr>
<tr>
<th>ID</th>
<th>Username</th>
<th>Password</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>

<tbody>
<?php
if ($dataSiswa) {
	$noA = 1;
	foreach ($dataSiswa as $key => $result) {
		if($result->lvl==1){
?>
<tr>
	<td><?php echo $result->id ?></td>
	<td><?php echo $result->username ?></td>
	<td><?php echo $result->password ?></td>
	<td><p>ADMIN</p></td>
	<td>
		<a href="<?php echo site_url(); ?>/home/hapus/<?php echo $result->id; ?>" class=
		"btn btn-danger"> Hapus </a>
		<a href="<?php echo site_url(); ?>/crud/ed/<?php echo $result->id; ?>" class=
		"btn btn-success"> Edit </a>
	</td>
</tr>
<?php
		}
	$noA++;
	}
}
?>
</tbody>
</table>