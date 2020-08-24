<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Crime', '# Committed'],
          ['Murder',           11],
          ['Rape',              2],
          ['Robbery',           2],
          ['Felony Assault',    2],
          ['Burglary',          7],
          ['Grand Larceny Auto',7]
        ]);

        var options = {
          title: 'Crime Chart',
          slices: [{color: 'red'}, {color: 'grey'}, {}, {}]
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>

<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Year', 'Murder', 'Robbery'],
        ['2004',  1000,      400],
        ['2005',  1170,      460],
        ['2006',  660,       1120],
        ['2007',  1030,      540]
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
  <div id="curve_chart" style="width: 900px; height: 500px"></div>
</body>
</html>

<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
  google.charts.load('current', {packages: ['corechart', 'bar']});
  google.charts.setOnLoadCallback(drawAnnotations);

  function drawAnnotations() {
      var data = new google.visualization.DataTable();
      data.addColumn('timeofday', 'Time of Day');
      data.addColumn('number', 'Murder');
      data.addColumn({type: 'string', role: 'annotation'});
      data.addColumn('number', 'Robbery');
      data.addColumn({type: 'string', role: 'annotation'});

      data.addRows([
        [{v: [8, 0, 0], f: '8 am'},   3, '3',  .25, '.2'],
        [{v: [9, 0, 0], f: '9 am'},   2, '2',   .5, '.5'],
        [{v: [10, 0, 0], f:'10 am'},  3, '3',    1,  '1'],
        [{v: [11, 0, 0], f: '11 am'}, 4, '4', 2.25,  '2'],
        [{v: [12, 0, 0], f: '12 pm'}, 5, '5', 2.25,  '2'],
        [{v: [13, 0, 0], f: '1 pm'},  6, '6',    3,  '3'],
        [{v: [14, 0, 0], f: '2 pm'},  7, '7', 3.25,  '3'],
        [{v: [15, 0, 0], f: '3 pm'},  8, '8',    5,  '5'],
        [{v: [16, 0, 0], f: '4 pm'},  9, '9',  6.5,  '6'],
        [{v: [17, 0, 0], f: '5 pm'}, 10, '10',  10, '10'],
      ]);

      var options = {
        title: 'Crimes Throughout the Day',
        annotations: {
          alwaysOutside: true,
          textStyle: {
            fontSize: 14,
            color: '#000',
            auraColor: 'none'
          }
        },
        hAxis: {
          title: 'Time of Day',
          format: 'h:mm a',
          viewWindow: {
            min: [7, 30, 0],
            max: [17, 30, 0]
          }
        },
        vAxis: {
          title: 'Crime Count'
        }
      };

      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
  </script>
</head>
<body>
  <div id="chart_div"></div>
</body>
</html>
