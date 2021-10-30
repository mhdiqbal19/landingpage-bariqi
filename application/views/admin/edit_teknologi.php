<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> Edit Data Teknologi</h3> <hr>

	<?php foreach($teknologi as $tech) : ?>

		<form method="post" action="<?php echo base_url().'admin/data_teknologi/update' ?>">
			<div class="form-grup">
				<label>Judul</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $tech->id ?>">
				<input type="text" name="judul" class="form-control" value="<?php echo $tech->judul ?>">
			</div><br>

			<?php echo anchor('admin/data_teknologi/','<div class="btn btn-sm btn-danger"><i class="fas fa-undo"></i> Kembali</div>') ?>
			<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
		</form>

	<?php endforeach; ?>

</div>