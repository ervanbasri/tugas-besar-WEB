<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MAHKOTA HOTEL</title>
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/theme.css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script><link href="style/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css">
        
        <script>
            $(function() {
                $("#from").datepicker({
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 2,
                    onClose: function(selectedDate) {
                        $("#to").datepicker("option", "minDate", selectedDate);
                    }
                });
                $("#to").datepicker({
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 2,
                    onClose: function(selectedDate) {
                        $("#from").datepicker("option", "maxDate", selectedDate);
                    }
                });
            });
        </script>
        <style type = "text/css" media = "screen">
            body{
                background-size: cover;
                background-image: url(hotel1.jpg);
            }

        </style>
    </head> 
    <body >
        <!-- Fixed navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">MAHKOTA HOTEL</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="fasilitas.php">FASILITAS</a></li>
                        <li><a href="login.php">Login</a></li>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class="container theme-showcase" role="main">
            <!-- Main jumbotron for a primary marketing message or call to action -->

            <div class="jumbotron" >
                <div><p style="text-height: 10;">SELAMAT DATANG DI HOTEL MAHKOTA </p></div>
                <form method="POST" action="pilihan.php">
                    <label for="from">CEK IN</label>
                    <input type="date" id="from" name="from">
                    <label for="to">CEK OUT</label>
                    <input type="text" id="to" name="to">
                    <label class="control-label">ROOM</label>
                    <select name="room">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <label class="control-label">TYPE KAMAR</label>
                    <select name="kamar">
                        <option value="A1">A1</option>
                        <option value="A2">A2</option>
                    </select>
                    <button type="submit" class="btn btn-default "name="ok">SETUJU</button>
                </form>
            </div>
            <div id="txtHint"></div>
            <footer>
                <p align="center" style="text-decoration-color: white;">MAHKOTA HOTEL &copy; 2015</p>
            </footer>
    </body>
</html>
