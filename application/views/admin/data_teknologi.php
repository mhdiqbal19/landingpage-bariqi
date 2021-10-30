<div class="container-fluid">
  <h5>Data Teknologi</h5><hr>
	<button class="btn btn-sm btn-primary mb-2" data-toggle="modal" data-target="#tambah_teknologi"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button><br>
 
	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>Judul</th>
            <th>Gambar</th>
			<th colspan="2">Aksi</th>
		</tr>

	<?php 
		$no=1;
		foreach($teknologi as $tech) :?>

		<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $tech->judul ?> </td>
        <td><img src="<?php echo base_url().'/assets/home/images/tekhnologi/'. $tech->gambar ?> " width=50px> </td>

        <td width="20px"><?php echo anchor('admin/data_teknologi/edit/'.$tech->id,'<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
		<td width="20px"><?php echo anchor('admin/data_teknologi/hapus/'.$tech->id,'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
		</tr>

		<?php endforeach; ?>
	</table>

 </div>

 <!-- Modal -->
<div class="modal fade" id="tambah_teknologi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Teknologi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/data_teknologi/tambah_aksi' ?>" method="post" enctype="multipart/form-data">

        	<div class="form-grup">
        		<label>Judul</label>
        		<input type="text" name="judul" class="form-control">        		
        	</div><br>

            <div class="custom-file">
                <input type="file" name="gambar" class="custom-file-input">
                <label class="custom-file-label" for="customFile">Cari gambar</label>
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>