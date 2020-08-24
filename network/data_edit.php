<?php
	include_once 'data_connect.php';
					$history = $_POST['history'];
					$criminal = $_POST['criminal'];
					$account = $_POST['account'];
					$crime_date = $_POST['crime_date'];
					$crime_type = $_POST['crime_type'];
					$sentencing = $_POST['sentencing'];
					$city = $_POST['city'];
					$state = $_POST['state'];
					$last_record = $_POST['last_record'];
					$history_id_selection = $_POST['history_id_selection'];
					$sql = "UPDATE 
								Criminal_history_table 
							SET 
								history_id = '$history',
								criminal_id = '$criminal',
								account_id = '$account',
								crime_date = '$crime_date',
								crime_type = '$crime_type',
								sentencing = '$sentencing',
								city = '$city',
								state = '$state',
								last_update_date = '$last_record'
							WHERE
								history_id = '$history_id_selection';";
					mysqli_query($conn, $sql) or die(mysqli_error($conn));
					header("Location: ../data.php?edit=success");
?>