
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
              google.charts.load("current", {packages:["calendar"]});
              google.charts.setOnLoadCallback(drawChart);

           function drawChart() {
               var dataTable = new google.visualization.DataTable();
               dataTable.addColumn({ type: 'date', id: 'Date' });
               dataTable.addColumn({ type: 'number', id: 'Won/Loss' });
               dataTable.addRows([
                  [ new Date(2013, 9, 4), 38177 ],
                  [ new Date(2013, 9, 5), 38705 ],
                  [ new Date(2013, 9, 12), 38210 ],
                  [ new Date(2013, 9, 13), 38029 ],
                  [ new Date(2013, 9, 19), 38823 ],
                  [ new Date(2013, 9, 23), 38345 ],
                  [ new Date(2013, 9, 24), 38436 ],
                  [ new Date(2013, 9, 30), 38447 ]
                ]);

               var chart = new google.visualization.Calendar(document.getElementById('calendar_basic'));

               var options = {
                 title: "Crime Predictor Results",
                 height: 350,
                 calendar: { cellSize: 20 },
               };

               chart.draw(dataTable, options);
           }
            </script>
          </head>
          <body>
            <div id="calendar_basic" style="width: 1000px; height: 350px;"></div>
          </body>
        </html>
