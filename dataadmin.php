<?php

@session_start();
include_once 'network/data_connect.php';
//Checks to see if user is registered to session
if(!isset($_SESSION['username'])){
header("location:index.php");
}
$tbl_name1="CAP_Database"; // Table name
$myusername = $_SESSION['username'];
$mypassword = $_SESSION['password'];

$sql= "SELECT * FROM $tbl_name1 WHERE Email='$myusername' and Password='$mypassword'";

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/front-page.css">
<link rel="stylesheet" href="css/universal-properties.css">
<title>Criminal Activity Predictor - DATABASE</title>
</head>
<body>
    <div class= "container">

        <!-- navigation header -->
        <nav class="navbar navbar-expand-lg navbar-dark  theme-background">
            <a class="navbar-brand" href="#">Criminal Activity Predictor</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Welcome <?php echo $myusername; ?> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Logout.php">Log out</a>
                    </li>

                </ul>
            </div>
        </nav>

        <!-- dropdown list -->
        <div class= "container" align="center">
				<br>
			<h1>INSERT DATA</h1>
			<form method = "POST">
				<input type = "number" min = "0" name = "id" placeholder="ID" required>
				<br>
				<input type = "text" name = "f_name" placeholder="F_NAME" required>
				<br>
				<input type = "text" name = "l_name" placeholder="L_NAME" required>
				<br>
				<input type = "text" name = "dob" id = 'txtDate' placeholder="DOB" onfocus="(this.type='date')" onblur="(this.type='text')" required>
				<br>
				<input type = "text" name = "username" placeholder="USERNAME" required>
				<br>
				<input type = "text" name = "role" placeholder="ROLE" required>
				<br>
				<input type = "text" name = "email" placeholder="EMAIL" required>
				<br>
				<input type = "text" name = "department" placeholder="DEPARTMENT" required>
				<br>
				<button formaction = "network/dataadmin_add.php" type = "add" name = "adder">ADD</button>
				<button formaction = "network/dataadmin_edit.php" type = "edit" name = "editer">EDIT</button>
				<button formaction = "network/dataadmin_delete.php" type = "delete" name = "deleter" formnovalidate>DELETE</button>
				<br>
				<label>Account# (EDIT or DELETE only): </label>
				<select name = "emp_id_selection">
					<?php
					include_once 'network/data_connect.php';
					$sql = "SELECT * FROM employee_table ORDER BY `account_id` ASC";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					if($resultCheck > 0){
						while($row = mysqli_fetch_assoc($result)){
							echo "<option>" . $row['account_id'] . "</option>";
						}
					}
					?>
				</select>
        <script>
        $(function(){
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();

    var maxDate = year + '-' + month + '-' + day;
    $('#txtDate').attr('max', maxDate);
});
        </script>
				<?php
				$fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
				if (strpos($fullurl, "add=false") == true){
					echo "<p class = error>YOU GAVE AN INCOMPATIBLE ENTRY!</p>";
				}
				?>
			</form>
			<br>
			<h1>Employee Data</h1>
            <table class = "sortable" cellpadding= "5" cellspacing= "0" border= "2" width= "100%">
				<thead  align="center">
					<tr>
					<th>ID</th>
					<th>F_Name</th>
					<th>L_Name</th>
					<th>DOB</th>
					<th>Username</th>
					<th>Role</th>
					<th>Email</th>
					<th>Department</th>
					</tr>
				</thead>
				<tbody id = "body" align='center'>
					<?php
					include_once 'network/data_connect.php';
					$sql = "SELECT * FROM employee_table ORDER BY `account_id` ASC";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					if($resultCheck > 0){
						while($row = mysqli_fetch_assoc($result)){
							echo "<tr><td>" . $row['account_id'] . "</td><td>" . $row['first_name'] . "</td><td>" . $row['last_name'] . "</td><td>" . $row['DOB'] . "</td><td>" . $row['username'] . "</td><td>" . $row['role'] . "</td><td>" . $row['email'] . "</td><td>" . $row['department'] . "</td></tr>";
						}
					}
					?>
				</tbody>
			</table>
    	</div>
</body>
</html>
