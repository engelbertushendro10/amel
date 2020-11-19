<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM deductions WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Potongan Berhasil Dihapus';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'pilih item untuk dihapus';
	}

	header('location: deduction.php');
	
?>