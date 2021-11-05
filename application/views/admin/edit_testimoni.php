<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> Edit Data Testimoni</h3> <hr>

	<?php foreach($testimoni as $testi) : ?>

		<form method="post" action="<?php echo base_url().'admin/data_testimoni/update' ?>">
			<div class="form-grup">
				<label>Nama</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $testi->id ?>">
				<input type="text" name="nama" class="form-control" value="<?php echo $testi->nama ?>">
			</div><br>
            <div class="form-grup">
				<label>Email</label>
				<input type="text" name="email" class="form-control" value="<?php echo $testi->email ?>">
			</div><br>
            <div class="form-grup">
				<label>Dari / Kantor</label>
				<input type="text" name="dari" class="form-control" value="<?php echo $testi->dari ?>">
			</div><br>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Pesan</label>
                <textarea class="form-control" name="pesan" id="exampleFormControlTextarea1" rows="3"><?php echo $testi->pesan ?></textarea>
            </div>

			<?php echo anchor('admin/data_testimoni/','<div class="btn btn-sm btn-danger"><i class="fas fa-undo"></i> Kembali</div>') ?>
			<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
		</form>

	<?php endforeach; ?>

</div>