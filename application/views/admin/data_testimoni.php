<div class="container-fluid">
  <h5>Data Tetsimoni</h5><hr>
	<button class="btn btn-sm btn-primary mb-2" data-toggle="modal" data-target="#tambah_testimoni"><i class="fas fa-plus fa-sm"></i> Tambah Testimoni</button><br>
 
	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>Nama</th>
            <th>Email</th>
            <th>Dari</th>
            <th>Pesan</th>
			<th colspan="2">Aksi</th>
		</tr>

	<?php 
		$no=1;
		foreach($testimoni as $testi) :?>

		<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $testi->nama ?> </td>
        <td><?php echo $testi->email ?> </td>
        <td><?php echo $testi->dari ?> </td>
        <td><?php echo $testi->pesan ?></td>

        <td width="20px"><?php echo anchor('admin/data_testimoni/edit/'.$testi->id,'<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
		<td width="20px"><?php echo anchor('admin/data_testimoni/hapus/'.$testi->id,'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
		</tr>

		<?php endforeach; ?>
	</table>

 </div>

 <!-- Modal -->
<div class="modal fade" id="tambah_testimoni" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Testimoni</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/data_testimoni/tambah_aksi' ?>" method="post" enctype="multipart/form-data">

        <div class="form-grup">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">        		
        </div><br>
        <div class="form-grup">
            <label>Email</label>
            <input type="email" name="email" class="form-control">        		
        </div><br>
        <div class="form-grup">
            <label>Asal</label>
            <input type="text" name="dari" class="form-control">        		
        </div><br>
        <div class="form-grup">
            <label>Pesan</label>
            <input type="text" name="pesan" class="form-control">        		
        </div><br>

      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>