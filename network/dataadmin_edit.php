<?php
	include_once 'data_connect.php';
		$id = $_POST['id'];
		$f_name = $_POST['f_name'];
		$l_name = $_POST['l_name'];
		$dob = $_POST['dob'];
		$e_username = $_POST['username'];
		$role = $_POST['role'];
		$email = $_POST['email'];
		$dept = $_POST['department'];
		$emp_id_selection = $_POST['emp_id_selection'];
					$sql = "UPDATE
								employee_table
							SET
								account_id = '$id',
								first_name = '$f_name',
								last_name = '$l_name',
								DOB = '$dob',
								username = '$e_username',
								role = '$role',
								email = '$email',
								department = '$dept',
							WHERE
								account_id = '$emp_id_selection';";
					mysqli_query($conn, $sql) or die(mysqli_error($conn));
					header("Location: ../dataadmin.php?edit=success");
?>
