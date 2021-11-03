<div class="container-fluid">
  <h5>Data Portofolio</h5><hr>
	<button class="btn btn-sm btn-primary mb-2" data-toggle="modal" data-target="#tambah_portofolio"><i class="fas fa-plus fa-sm"></i> Tambah Data</button><br>
 
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Judul</th>
      <th>Isi</th>
      <th>Link</th>
      <th>Gambar</th>
			<th colspan="2">Aksi</th>
		</tr>

	<?php 
		$no=1;
		foreach($portofolio as $port) :?>

		<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $port->judul ?> </td>
    <td><?php echo $port->isi ?> </td>
    <td><?php echo $port->link ?> </td>
    <td><img src="<?php echo base_url().'/assets/admin/img/portofolio/'. $port->gambar ?> " width=100px> </td>

        <td width="20px"><?php echo anchor('admin/data_portofolio/edit/'.$port->id,'<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
		<td width="20px"><?php echo anchor('admin/data_portofolio/hapus/'.$port->id,'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
		</tr>

		<?php endforeach; ?>
	</table>

 </div>

 <!-- Modal -->
<div class="modal fade" id="tambah_portofolio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Portofolio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/data_portofolio/tambah_aksi' ?>" method="post" enctype="multipart/form-data">

        	<div class="form-grup">
        		<label>Judul</label>
        		<input type="text" name="judul" class="form-control">        		
        	</div><br>
          <div class="form-grup">
        		<label>Isi</label>
        		<input type="text" name="isi" class="form-control">        		
        	</div><br>
          <div class="form-grup">
        		<label>Link</label>
        		<input type="text" name="link" class="form-control">        		
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