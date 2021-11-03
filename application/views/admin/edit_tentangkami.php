<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> Edit Data Tentang Kami</h3> <hr>

	<?php foreach($tentangkami as $ttg) : ?>

		<form method="post" action="<?php echo base_url().'admin/tentang_kami/update' ?>">
            <div class="form-group">
                <input type="hidden" name="id" class="form-control" value="<?php echo $ttg->id ?>">  
                <label for="exampleFormControlTextarea1">Paragraph 1</label>
                <textarea class="form-control" name="isi1" id="exampleFormControlTextarea1"  rows="3"><?php echo $ttg->isi1 ?></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Paragraph 2</label>
                <textarea class="form-control" name="isi2" id="exampleFormControlTextarea1" rows="3"><?php echo $ttg->isi2 ?></textarea>
            </div>
			<?php echo anchor('admin/tentang_kami/','<div class="btn btn-sm btn-danger"><i class="fas fa-undo"></i> Kembali</div>') ?>
			<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
		</form>

	<?php endforeach; ?>

</div>