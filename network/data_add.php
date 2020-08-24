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
					$sql = "INSERT INTO Criminal_history_table (history_id, criminal_id, account_id, crime_date, crime_type, sentencing, city, state, last_update_date) VALUES ('$history', '$criminal', '$account', '$crime_date', '$crime_type', '$sentencing', '$city', '$state', '$last_record');";
					mysqli_query($conn, $sql) or die(mysqli_error($conn));
					header("Location: ../data.php?add=success");
				?>