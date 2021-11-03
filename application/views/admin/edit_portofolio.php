<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> Edit Data Portofolio</h3> <hr>

	<?php foreach($portofolio as $port) : ?>

		<form method="post" action="<?php echo base_url().'admin/data_portofolio/update' ?>">
			<div class="form-grup">
				<label>Judul</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $port->id ?>">
				<input type="text" name="judul" class="form-control" value="<?php echo $port->judul ?>">
			</div><br>
            <div class="form-grup">
				<label>Isi</label>
				<input type="text" name="isi" class="form-control" value="<?php echo $port->isi ?>">
			</div><br>
            <div class="form-grup">
				<label>Link</label>
				<input type="text" name="link" class="form-control" value="<?php echo $port->link ?>">
			</div><br>

			<?php echo anchor('admin/data_portofolio/','<div class="btn btn-sm btn-danger"><i class="fas fa-undo"></i> Kembali</div>') ?>
			<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
		</form>

	<?php endforeach; ?>

</div>