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
					$sql = "INSERT INTO employee_table (account_id, first_name, last_name, DOB, username, role, email, department) VALUES ('$id', '$f_name', '$l_name', '$dob', '$e_username', '$role', '$email', '$dept')";
					mysqli_query($conn, $sql) or die(mysqli_error($conn));
					header("Location: ../dataadmin.php?add=success");
				?>
