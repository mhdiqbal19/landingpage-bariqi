<div class="container-fluid">
  <h5>Data Tentang Kami</h5><hr>

	<table class="table table-bordered">
		<tr>
      <th>Paragraph 1</th>
      <th>Paragraph 2</th>
			<th>Aksi</th>
		</tr>

	<?php 
		$no=1;
		foreach($tentangkami as $ttg) :?>

		<tr>
    <td><?php echo $ttg->isi1 ?> </td>
    <td><?php echo $ttg->isi2 ?> </td>
    <td width="20px"><?php echo anchor('admin/tentang_kami/edit/'.$ttg->id,'<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
  	</tr>

		<?php endforeach; ?>
	</table>

 </div>

