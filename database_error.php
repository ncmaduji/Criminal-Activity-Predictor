<head>
        <title>Failed</title>
        <link rel="stylesheet" type="text/css"
              href="main.css" />
    </head>

    <!-- the body section -->
    <body>
    <div id="page">
        <div id="main">
            <h1>Database Error</h1>
            <p>There was a database connection error.</p>
            <p>The database must be installed.</p>
            <p>MySQL must be running.</p>
            <p>Error message:
                <?php echo $error_message; ?></p>
        </div>
    </div><!-- end page -->
</body>
