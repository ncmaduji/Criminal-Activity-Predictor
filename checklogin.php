
<?php
//Starts the session
session_start();

//Connects to the server
$dsn = 'mysql:host=localhost; dbname=cap_database';
$username = "standard_user";
$password = "standard";
$tbl_name="Employee_table";

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include ("database_error.php");
    exit();
}
////////////////////////////////////////////////////////////////


// username and password sent from login form
$myusername=$_POST['username'];
$mypassword=$_POST['password'];
//This area is used to add an encryption however one wasn't added for this assignment
$mypassword = ($mypassword);

include_once 'network/data_connect.php';
//Code Duplicates to allow room for both tables
$sql= ("SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'");
//$count = $sql->rowCount();
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    if ($row['role'] == 'Browse'){
      $_SESSION['username']= $myusername;
      $_SESSION['password']= $mypassword;
      include("front-page.php");}
    else if ($row['role'] == 'Edit'){
      $_SESSION['username']= $myusername;
      $_SESSION['password']= $mypassword;
      include("data.php");}
    else if ($row['role'] == 'Admin'){
      $_SESSION['username']= $myusername;
      $_SESSION['password']= $mypassword;
      include("dataadmin.php");}}}
    else{
      echo '<span style="color:red; text-align: center;"> Error: Wrong Username or Password </span>';
      include("index.php");}

// If result matched $myusername and $mypassword, table row must be 1 row
//if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
//$_SESSION['username']= $myusername;
//$_SESSION['password']= $mypassword;
//include("front-page.php");


// If no results show up then access is denied

?>
