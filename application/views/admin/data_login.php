<div class="container-fluid">
  <h5>Setup Data Login</h5><hr>

	<table class="table table-bordered">
		<tr>
            <th>Username</th>
            <th>Password</th>
            <th>Aksi</th>
		</tr>

	<?php 
		$no=1;
		foreach($login as $log) :?>

		<tr>
    <td><?php echo $log->username ?> </td>
    <td>**** </td>
    <td width="20px"><?php echo anchor('admin/data_login/edit/'.$log->id,'<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
  	</tr>

		<?php endforeach; ?>
	</table>

 </div>

