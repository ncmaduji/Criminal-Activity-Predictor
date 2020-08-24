
<?php
session_start();
include_once 'network/data_connect.php';
//Checks to see if user is registered to session

$tbl_name1="Employee_table"; // Table name
$myusername = $_SESSION['username'];
$mypassword = $_SESSION['password'];

if(!isset($_SESSION['username'])){
header("location:index.php");
}

$sql= "SELECT * FROM $tbl_name1 WHERE Email='$myusername' and Password='$mypassword'";

$crime = $_POST['crime'];
$city = $_POST['city'];


$crime2 = 0;
$city2 = 0;
$justcrime2 = 0;

include_once 'network/data_connect.php';
$sql = "SELECT * FROM Criminal_history_table WHERE crime_type = '$crime' && city = '$city' ";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    $crime2++;}}
echo $crime2;
$crime3 = round($crime2 / 90, 2);

include_once 'network/data_connect.php';
$sql2 = "SELECT * FROM Criminal_history_table WHERE crime_type = '$crime'";
$result2 = mysqli_query($conn, $sql2);
$resultCheck2 = mysqli_num_rows($result2);
if($resultCheck2 > 0){
  while($row = mysqli_fetch_assoc($result2)){
    $justcrime2++;}}

$justcrime3 = round($justcrime2 / 90, 2);


include_once 'network/data_connect.php';
$sql3 = "SELECT * FROM Criminal_history_table WHERE city = '$city' ";
$result3 = mysqli_query($conn, $sql3);
$resultCheck3 = mysqli_num_rows($result3);
if($resultCheck3 > 0){
  while($row = mysqli_fetch_assoc($result3)){
    $city2++;}}

$city3 = round($city2 / 90, 2);

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/front-page.css">
<title>Criminal Activity Predictor</title>
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

        <html>
          <head>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            var dtToday = new Date();

            var mm = dtToday.getMonth();
            var dd = dtToday.getDate();
            var yyyy = dtToday.getFullYear();
            if(mm < 10)
                mm = '0' + mm.toString();
            if(dd < 10)
                ddd = '0' + dd.toString();



              google.charts.load("current", {packages:["calendar"]});
              google.charts.setOnLoadCallback(drawChart);

           function drawChart() {
               var dataTable = new google.visualization.DataTable();
               dataTable.addColumn({ type: 'date', id: 'Date' });
               dataTable.addColumn({ type: 'number', id: 'Won/Loss' });
               dataTable.addRows([

                  [ new Date(yyyy,mm,dd),  <?php echo $crime3?> ],
                  [ new Date(yyyy,mm,dd+1), <?php echo $crime3?> ],
                  [ new Date(yyyy,mm,dd+2), <?php echo $crime3?> ],
                  [ new Date(yyyy,mm,dd+3), <?php echo $crime3?> ],
                  [ new Date(yyyy,mm,dd+4), <?php echo $crime3?> ],
                  [ new Date(yyyy,mm,dd+5), <?php echo $crime3?> ],
                  [ new Date(yyyy,mm,dd+6), <?php echo $crime3?> ]
                ]);

               var chart = new google.visualization.Calendar(document.getElementById('calendar_basic'));

               var options = {
                 title: "Percent Chance for <?php echo $crime ?> in <?php echo $city ?>",
                 height: 350,
                 calendar: { cellSize: 20 },

               };

               chart.draw(dataTable, options);
           }

            </script>

          </head>
          <body>
            <div id="calendar_basic" style="width: 110%; height: 350px;"></div>
          </body>
        </html>
        <html>
          <head>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">

              google.charts.load("current", {packages:["calendar"]});
              google.charts.setOnLoadCallback(drawChart);




           function drawChart() {
               var dataTable = new google.visualization.DataTable();
               dataTable.addColumn({ type: 'date', id: 'Date' });
               dataTable.addColumn({ type: 'number', id: 'Won/Loss' });
               dataTable.addRows([

                  [ new Date(yyyy,mm,dd),  <?php echo $justcrime3?> ],
                  [ new Date(yyyy,mm,dd+1), <?php echo $justcrime3?> ],
                  [ new Date(yyyy,mm,dd+2), <?php echo $justcrime3?> ],
                  [ new Date(yyyy,mm,dd+3), <?php echo $justcrime3?> ],
                  [ new Date(yyyy,mm,dd+4), <?php echo $justcrime3?> ],
                  [ new Date(yyyy,mm,dd+5), <?php echo $justcrime3?> ],
                  [ new Date(yyyy,mm,dd+6), <?php echo $justcrime3?> ]
                ]);

               var chart = new google.visualization.Calendar(document.getElementById('calendar_basic2'));

               var options = {
                 title: "Percent Chance for <?php echo $crime ?> in NJ",
                 height: 350,
                 calendar: { cellSize: 20 },

               };

               chart.draw(dataTable, options);
           }

            </script>

          </head>
          <body>
            <div id="calendar_basic2" style="width: 110%; height: 350px;"></div>
          </body>
        </html>

        <html>
          <head>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">

              google.charts.load("current", {packages:["calendar"]});
              google.charts.setOnLoadCallback(drawChart);






           function drawChart() {
               var dataTable = new google.visualization.DataTable();
               dataTable.addColumn({ type: 'date', id: 'Date' });
               dataTable.addColumn({ type: 'number', id: 'Won/Loss' });
               dataTable.addRows([

                  [ new Date(yyyy,mm,dd),  <?php echo $city3?> ],
                  [ new Date(yyyy,mm,dd+1), <?php echo $city3?> ],
                  [ new Date(yyyy,mm,dd+2), <?php echo $city3?> ],
                  [ new Date(yyyy,mm,dd+3), <?php echo $city3?> ],
                  [ new Date(yyyy,mm,dd+4), <?php echo $city3?> ],
                  [ new Date(yyyy,mm,dd+5), <?php echo $city3?> ],
                  [ new Date(yyyy,mm,dd+6), <?php echo $city3?> ]
                ]);

               var chart = new google.visualization.Calendar(document.getElementById('calendar_basic3'));

               var options = {
                 title: "Percent Chance for any crime in <?php echo $city ?>",
                 height: 350,
                 calendar: { cellSize: 20 },

               };

               chart.draw(dataTable, options);
           }

            </script>

          </head>
          <body>
            <div id="calendar_basic3" style="width: 110%; height: 350px;"></div>
          </body>
        </html>
