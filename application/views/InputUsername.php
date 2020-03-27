<?php $result = $data_blog[0]; ?>


<form method="post" action="<?php echo site_url();?>/crud/aksi_update" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $result->id; ?>">
    <div class="form-group">
        <input type="file" name="image" required>
    </div>
    <div class="form-group">
        <label>tanggal</label>
        <input type="date" name="tgl" value="<?php echo $result->tgl; ?>" class="form-control" required style="width:200px;">
    </div>
    <div class="form-group">
        <label>judul</label>
        <input type="text" name="judul" class="form-control" value="<?php echo $result->judul; ?>" required>
    </div>
    <div class="form-group">
            <label>Isi</label>
        <textarea name="des" class="form-control" required><?php echo $result->des; ?></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-seccess" required>Edit</button>
    </div>
</form>

