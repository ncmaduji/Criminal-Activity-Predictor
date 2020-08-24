
<?php
@session_start();
include_once 'network/data_connect.php';
//Checks to see if user is registered to session

$tbl_name1="Employee_table"; // Table name
$myusername = $_SESSION['username'];
$mypassword = $_SESSION['password'];

if(!isset($_SESSION['username'])){
header("location:index.php");
}

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
				<input type = "number" min = "0" name = "history" placeholder="HISTORY" required>
				<br>
				<input type = "number" name = "criminal" placeholder="CRIMINAL" required>
				<br>
				<input type = "number" name = "account" placeholder="ACCOUNT" required>
				<br>
				<input type = "text" name = "crime_date" id = 'txtDate' placeholder="CRIME DATE" onfocus="(this.type='date')" onblur="(this.type='text')" required>
				<br>
				<input type = "text" name = "crime_type" placeholder="CRIME TYPE" required>
				<br>
				<input type = "text" name = "sentencing" placeholder="SENTENCING" required>
				<br>
				<input type = "text" name = "city" placeholder="CITY" required>
				<br>
				<input type = "text" name = "state" placeholder="STATE" pattern = ".{2,2}" required title = "only 2 characters" >
				<br>
				<input type = "text" name = "last_record" id = 'txtDate2' placeholder="LAST RECORD" onfocus="(this.type='date')" onblur="(this.type='text')" required>
				<br>
				<button formaction = "network/data_add.php" type = "add" name = "adder">ADD</button>
				<button formaction = "network/data_edit.php" type = "edit" name = "editer">EDIT</button>
				<button formaction = "network/data_delete.php" type = "delete" name = "deleter" formnovalidate>DELETE</button>
				<br>
				<label>HISTORY# (EDIT or DELETE only): </label>
				<select name = "history_id_selection">
					<?php
					include_once 'network/data_connect.php';
					$sql = "SELECT * FROM Criminal_history_table ORDER BY `history_id` ASC";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					if($resultCheck > 0){
						while($row = mysqli_fetch_assoc($result)){
							echo "<option>" . $row['history_id'] . "</option>";
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
    $('#txtDate2').attr('max', maxDate);
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
			<h1>CRIME DATA</h1>
            <table class = "sortable" cellpadding= "5" cellspacing= "0" border= "2" width= "100%">
				<thead  align="center">
					<tr>
					<th>HISTORY</th>
					<th>CRIMINAL</th>
					<th>ACCOUNT</th>
					<th>CRIME DATE</th>
					<th>CRIME TYPE</th>
					<th>SENTENCING</th>
					<th>CITY</th>
					<th>STATE</th>
					<th>LAST RECORD</th>
					</tr>
				</thead>
				<tbody id = "body" align='center'>
					<?php
					include_once 'network/data_connect.php';
					$sql = "SELECT * FROM Criminal_history_table ORDER BY `history_id` ASC";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					if($resultCheck > 0){
						while($row = mysqli_fetch_assoc($result)){
							echo "<tr><td>" . $row['history_id'] . "</td><td>" . $row['criminal_id'] . "</td><td>" . $row['account_id'] . "</td><td>" . $row['crime_date'] . "</td><td>" . $row['crime_type'] . "</td><td>" . $row['sentencing'] . "</td><td>" . $row['city'] . "</td><td>" . $row['state'] . "</td><td>" . $row['last_update_date'] . "</td></tr>";
						}
					}
					?>
				</tbody>
			</table>
    	</div>
</body>
</html>
