<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM position WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Posisi Sukses Dihapus';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Pilih Item Untuk Dihapus';
	}

	header('location: position.php');
	
?>