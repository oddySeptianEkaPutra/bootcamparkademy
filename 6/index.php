<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width-device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
		<img src="images/logo.png" width="120" height="" class="d-inline-block align-top" alt="">
        <p  style="margin-top: -40px; margin-left: 148px; font-weight: bold; font-size: 20px;">ARKADEMY BOOTCAMP</p> 
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#add_modal" style="float:right">ADD</button>
		<br /><br />
		<table class="table table-bordered">
			<thead>
				<tr>
					<th class="text-center">Name</th>
					<th class="text-center">Work</th>
					<th class="text-center">Salary</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody style="background-color:#fff;">
				<?php
					require 'conn.php';
					$query = mysqli_query($conn, "SELECT * FROM work JOIN name ON work.id_work=name.id_work JOIN category ON name.id_salary=category.id_salary") or die(mysqli_error());
					while($show = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $show['nama']?></td>
					<td><?php echo $show['nama_work']?></td>
					<td><?php echo $show['salary']?></td>
					<td>
					<a class="btn btn-danger btn-flat btn-xs" data-toggle="modal" data-target="#delete_user<?php echo $show['id_nama']?>"><i class="fa fa-trash"></i></a>
					<a class="btn btn-danger btn-flat btn-xs" data-toggle="modal" data-target="#update_modal<?php echo $show['id_nama']?>"><i class="fa fa-edit"></i></a>
					
				</tr>
				<?php
					include 'konfirmasi_delete_user.php';
					include 'update_user.php';
					
					}
				?>
			</tbody>
		</table>
	</div>

<!-- add data user -->
	<div class="modal fade" id="add_modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="tambah_user.php">
					<div class="modal-header">
						<h3 class="modal-title">Add Data</h3>
					</div>
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="nama" class="form-control" required="required"/>
							</div>
							<div class="form-group">
								<label for="work">work</label>
								<select name="work" class="form-control">
                            <?php
                            $sql_work = mysqli_query($conn, "SELECT * FROM work") or die (mysqli_error());
                            while ($work = mysqli_fetch_array($sql_work)) {
                                echo '<option value="'.$work['id_work'].'">'.$work['nama_work'].'</option>';
                            }
                            ?>
                        </select>
							</div>
							<div class="form-group">
								<label>Salary</label>
								<select name="salary" class="form-control">
									<?php
										$sql_kategori = mysqli_query($conn, "SELECT * FROM category") or die (mysqli_error());
										while ($kategori = mysqli_fetch_array($sql_kategori)) {
											echo '<option value="'.$kategori['id_salary'].'">'.$kategori['salary'].'</option>';
										}
										?>
								</select>
							</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
						<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> cancel</button>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>	
<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>
</body>	
</html>