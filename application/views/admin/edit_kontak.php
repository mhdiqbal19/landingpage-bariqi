<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> Edit Data Kontak</h3> <hr>

	<?php foreach($kontak as $ktk) : ?>

		<form method="post" action="<?php echo base_url().'admin/data_kontak/update' ?>">

            <div class="form-grup">
				<label>Telepon</label>
				<input type="text" name="telepon" class="form-control" value="<?php echo $ktk->telepon ?>">
			</div><br>
            <div class="form-grup">
				<label>Email</label>
				<input type="email" name="email" class="form-control" value="<?php echo $ktk->email ?>">
			</div><br>
			<div class="form-group">
                <input type="hidden" name="id" class="form-control" value="<?php echo $ktk->id ?>">  
                <label for="exampleFormControlTextarea1">Alamat</label>
                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1"  rows="3"><?php echo $ktk->alamat ?></textarea>
            </div>
			<?php echo anchor('admin/data_kontak/','<div class="btn btn-sm btn-danger"><i class="fas fa-undo"></i> Kembali</div>') ?>
			<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
		</form>

	<?php endforeach; ?>

</div>