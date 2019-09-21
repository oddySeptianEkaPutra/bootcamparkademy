<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['update'])){
		$id_nama = $_POST['id_nama'];
		$nama = $_POST['nama'];
		$work = $_POST['work'];
		$salary = $_POST['salary'];
		
		mysqli_query($conn, "UPDATE name SET 'nama' = '$nama', `work` = '$work', `salary` = '$salary' WHERE `id_nama` = '$id_nama'") or die(mysqli_error());

		header("location: index.php");
	}
?>