<?php

//Checks to see if user is registered to session
if(!isset($_SESSION['username'])){
header("location:index.php");
}
$tbl_name1="CAP_Database"; // Table name
$myusername = $_SESSION['username'];
$mypassword = $_SESSION['password'];

$sql= $db->query("SELECT * FROM $tbl_name1 WHERE Email='$myusername' and Password='$mypassword'");

$myusername=$_POST['username'];
$mypassword=$_POST['password'];

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

        <!-- dropdown list -->
        <div class= "container">
          <style>
          select {
            width: 100%;
            padding: 16px 20px;
            border: none;
            border-radius: 4px;
            color: white;
            background-color: #11012F;
          }
          </style>
            <div class= "dp-container">
                <!-- dp-container class was created in front-page.css -->

                  <form action="predictor.php" method="post" name="frontpg">

                    <div class="btn-group" style="width:200px;">
                      <select class="btn btn1"  dropdown-toggle "text-white theme-background" name = "city" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <option> Select City:</option>
                        <option value="Asbury">Asbury</option>
                        <option value="Atlantic City">Atlantic City</option>
                        <option value="Belmer">Belmer</option>
                        <option value="Bowling Green">Bowling Green</option>
                        <option value="Caldwell">Caldwell</option>
                        <option value="Egg Harbor">Egg Harbor</option>
                        <option value="Englewood">Englewood</option>
                        <option value="Jersey city">Jersey city</option>
                        <option value="Newark">Newark</option>
                        <option value="North Bergen">North Bergen</option>
                        <option value="Bogota">Bogota</option>
                      </select>
                    </div>

                <div class="btn-group">
                        <select class="btn btn2 dropdown-toggle text-white theme-background" name = "crime" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        <option> Select Crime:</option>
                        <option value="Arson">Arson</option>
                        <option value="Assault">Assault</option>
                        <option value="Batter">Batter</option>
                        <option value="Indecency">Indecency</option>
                        <option value="Endangerment">Endangerment</option>
                        <option value="Kidnapping">Kidnapping</option>
                        <option value="Mugging">Mugging</option>
                        <option value="Murder">Murder</option>
                        <option value="Rape">Rape</option>
                        </select>
                </div>
                <div class="btn-group">
                    <button type="submit" class="btn btn3 text-white btn-primary">Search</button>
                </div>
            </div>
          </form>
        </div>




      			<h1>CRIME DATA IN LAST 3 MONTHS</h1>
                  <table class = "sortable" cellpadding= "5" cellspacing= "0" border= "2" width= "100%">
      				<thead  align="center">
      					<tr>
      					<th>CRIME DATE</th>
      					<th>CRIME TYPE</th>
      					<th>CITY</th>
      					<th>STATE</th>
      					</tr>
      				</thead>
      				<tbody id = "body" align='center'>
            <?php
  					include_once 'network/data_connect.php';
  					$sql = "SELECT * FROM Criminal_history_table WHERE crime_date > DATE_SUB(NOW(), INTERVAL 90 DAY) ORDER BY `crime_date` DESC";
  					$result = mysqli_query($conn, $sql);
  					$resultCheck = mysqli_num_rows($result);
  					if($resultCheck > 0){
  						while($row = mysqli_fetch_assoc($result)){
  							echo "</td><td>" . $row['crime_date'] . "</td><td>" . $row['crime_type'] . "</td><td>" . $row['city'] . "</td><td>" . $row['state'] . "</td></tr>";
  						}
  					}
  					?>
          </tbody>
        </table>
        <?php
        $Arson = 0;
        $Assault = 0;
        $Batter = 0;
        $DUI = 0;
        $Endangerment = 0;
        $Indecency = 0;
        $Kidnapping = 0;
        $Mugging = 0;
        $Murder = 0;
        $Rape = 0;
        include_once 'network/data_connect.php';
        $sql = "SELECT crime_type FROM Criminal_history_table WHERE crime_date > DATE_SUB(NOW(), INTERVAL 90 DAY)";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck > 0){
          while($row = mysqli_fetch_assoc($result)){
            if ($row['crime_type'] == 'Arson'){
              $Arson++;}
            if ($row['crime_type'] == 'Assault'){
              $Assault++;}
            if ($row['crime_type'] == 'Batter'){
              $Batter++;}
            if ($row['crime_type'] == 'DUI'){
              $DUI++;}
            if ($row['crime_type'] == 'Endangerment'){
              $Endangerment++;}
            if ($row['crime_type'] == 'Indecency'){
              $Indecency++;}
            if ($row['crime_type'] == 'Kidnapping'){
              $Kidnapping++;}
            if ($row['crime_type'] == 'Mugging'){
              $Mugging++;}
            if ($row['crime_type'] == 'Murder'){
              $Murder++;}
            if ($row['crime_type'] == 'Rape'){
              $Rape++;}
            }}


        ?>

                </div>
                <div>
                  <html>
                    <head>
                      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                      <script type="text/javascript">
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {

                          var data = google.visualization.arrayToDataTable([
                            ['Crime', '# Committed'],
                            ['Arson',              <?php echo $Murder?>],
                            ['Assault',           <?php echo $Assault?>],
                            ['Batter',             <?php echo $Batter?>],
                            ['DUI',                   <?php echo $DUI?>],
                            ['Endangerment', <?php echo $Endangerment?>],
                            ['Indecency',       <?php echo $Indecency?>],
                            ['Kidnapping',     <?php echo $Kidnapping?>],
                            ['Mugging',           <?php echo $Mugging?>],
                            ['Murder',             <?php echo $Murder?>],
                            ['Rape',                 <?php echo $Rape?>]
                          ]);

                          var options = {
                            title: 'Crime Chart',
                            slices: [{color: 'red'}, {color: 'grey'}, {}, {}],
                          };

                          var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                          chart.draw(data, options);
                        }
                      </script>
                    </head>
                    <body>
                      <div id="piechart" style="width: 100%; height: 500px; position: relative;"></div>
                    </body>
                  </html>
                </div>
                <?php

                $Murder1 = 0;
                $Murder2 = 0;
                $Murder3 = 0;
                $Murder4 = 0;
                $Mugging1 = 0;
                $Mugging2 = 0;
                $Mugging3 = 0;
                $Mugging4 = 0;
                $Arson1 = 0;
                $Arson2 = 0;
                $Arson3 = 0;
                $Arson4 = 0;

                $sql = "SELECT * FROM Criminal_history_table WHERE YEAR(crime_date) = 2016";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0){
                  while($row = mysqli_fetch_assoc($result)){
                    if ($row['crime_type'] == 'Murder'){
                    $Murder1++;}

                    if ($row['crime_type'] == 'Mugging'){
                    $Mugging1++;}

                    if ($row['crime_type'] == 'Arson'){
                    $Arson1++;}
                  }}

                $sql = "SELECT * FROM Criminal_history_table WHERE YEAR(crime_date) = 2017";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0){
                  while($row = mysqli_fetch_assoc($result)){
                    if ($row['crime_type'] == 'Murder'){
                    $Murder2++;}

                    if ($row['crime_type'] == 'Mugging'){
                    $Mugging2++;}

                    if ($row['crime_type'] == 'Arson'){
                    $Arson2++;}
                  }}

                $sql = "SELECT * FROM Criminal_history_table WHERE YEAR(crime_date) = 2018";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0){
                  while($row = mysqli_fetch_assoc($result)){
                    if ($row['crime_type'] == 'Murder'){
                    $Murder3++;}

                    if ($row['crime_type'] == 'Mugging'){
                    $Mugging3++;}

                    if ($row['crime_type'] == 'Arson'){
                    $Arson3++;}
                  }}

                $sql = "SELECT * FROM Criminal_history_table WHERE YEAR(crime_date) = 2019";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0){
                  while($row = mysqli_fetch_assoc($result)){
                    if ($row['crime_type'] == 'Murder'){
                    $Murder4++;}

                    if ($row['crime_type'] == 'Mugging'){
                    $Mugging4++;}

                    if ($row['crime_type'] == 'Arson'){
                    $Arson4++;}
                  }}

                ?>

                <div>
                  <html>
                  <head>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                      google.charts.load('current', {'packages':['corechart']});
                      google.charts.setOnLoadCallback(drawChart);

                      function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                          ['Year', 'Murder', 'Mugging', 'Arson'],
                          ['2016',  <?php echo $Murder1 ?>,       <?php echo $Mugging1 ?>,        <?php echo $Arson1 ?>],
                          ['2017',   <?php echo $Murder2 ?>,       <?php echo $Mugging2 ?>,        <?php echo $Arson2 ?>],
                          ['2018',   <?php echo $Murder3 ?>,        <?php echo $Mugging3 ?>,        <?php echo $Arson3 ?>],
                          ['2019',   <?php echo $Murder4 ?>,       <?php echo $Mugging4 ?>,        <?php echo $Arson4 ?>]
                        ]);

                        var options = {
                          title: 'Crime Rate (Years)',
                          curveType: 'function',
                          legend: { position: 'bottom' }
                        };


                        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                        chart.draw(data, options);
                      }
                    </script>

                  </head>
                  <body>
                  </body>
                    <div id="curve_chart" style="width: 100%; height: 500px; position: absolute;"></div>
                  </html>

                </div>
            </div>
        </div>

    </div>
</body>
</html>
