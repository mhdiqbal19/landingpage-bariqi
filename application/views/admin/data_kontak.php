<div class="container-fluid">
  <h5>Data Kontak</h5><hr>

	<table class="table table-bordered">
		<tr>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Email</th>
            <th>Aksi</th>
		</tr>

	<?php 
		$no=1;
		foreach($kontak as $ktk) :?>

		<tr>
            <td><?php echo $ktk->alamat ?> </td>
            <td><?php echo $ktk->telepon ?> </td>
            <td><?php echo $ktk->email ?> </td>
            <td width="20px"><?php echo anchor('admin/data_kontak/edit/'.$ktk->id,'<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
        </tr>

		<?php endforeach; ?>
	</table>

 </div>

