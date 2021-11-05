<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> Edit Data Login</h3> <hr>

	<?php foreach($login as $log) : ?>

		<form method="post" action="<?php echo base_url().'admin/data_login/update' ?>">
            <div class="form-grup">
				<label>Nama</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $log->id ?>">  
				<input type="text" name="nama" class="form-control" value="<?php echo $log->nama ?>">
			</div><br>
            <div class="form-grup">
				<label>Username</label>
				<input type="text" name="username" class="form-control" value="<?php echo $log->username ?>">
			</div><br>
            <div class="form-grup">
				<label>Password</label>
				<input type="text" name="password" class="form-control" value="****">
                <input type="hidden" name="role_id" class="form-control" value="1">
			</div><br>

			<?php echo anchor('admin/data_login/','<div class="btn btn-sm btn-danger"><i class="fas fa-undo"></i> Kembali</div>') ?>
			<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
		</form>

	<?php endforeach; ?>

</div>