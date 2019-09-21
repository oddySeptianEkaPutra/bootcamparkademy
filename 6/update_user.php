<div class="modal fade" id="update_modal<?php echo $show['id_nama']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="update_query.php">
				<div class="modal-header">
					<h3 class="modal-title">Edit Data</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<label>Nama</label>
							<input type="hidden" name="id_nama" value="<?php echo $show['id_nama']?>"/>
							<input type="text" name="nama" value="<?php echo $show['nama']?>" class="form-control" required="required"/>
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
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>