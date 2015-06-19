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
                    numberOfMonths: 3,
                    onClose: function(selectedDate) {
                        $("#to").datepicker("option", "minDate", selectedDate);
                    }
                });
                $("#to").datepicker({
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 3,
                    onClose: function(selectedDate) {
                        $("#from").datepicker("option", "maxDate", selectedDate);
                    }
                });
            });
        </script>
        <style type = "text/css" media = "screen">
            body {
                background-color:#333333;
                background-image:url("hotel1.jpg");
                background-size: cover;

            }

            #wrapper {
                font-family: Arial, Helvetica, sans-serif;
                padding: 3px;
                width: 900px;
                height: 370px;
                padding:0px;
                margin:0px;
                background-color:#666666;
                float:center;

            }
            #wrapper #header {
                background-color: #E7E7E7;
                height: 150px;
                width: 900px;
            }
            #wrapper #header #logo {
                background-color: #006699;
                height: 250px;
                width: 25%;
                float : left;
            }
            #wrapper #header #banner {
                background-color: #fFF;
                float: center;
                height: 150px;
                width: 900px;
            }
            #wrapper #menu {
                background-color: #990000;
                height: 30px;
                width: 1200px ;
            }
            #wrapper #content {
                font-family: Geneva, Arial, Helvetica, sans-serif;
                padding: 5px;
                height: auto;
                width: 100%;

            }
            #wrapper #content #page {
                float: left;
                height: auto;
                width: 72.6%;
                padding: 5px;
                background-color:#CCCCCC;
            }
            #wrapper #content #sidebar {
                background-color: #3333FF;
                padding: 5px;
                float: left;
                height: auto;
                width: 25%;
            }
            #wrapper #footer {
                background-color: #ddd;
                height: auto;
                width: 1200px;
                float:left;
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
                        <li ><a href="index.php">Home</a></li>
                        <li class="active"><a href="fasilitas.php">FASILITAS</a></li>
                        <li><a href="login.php">Login</a></li>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class="container theme-showcase" role="main">
            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div id="wrapper">

                <div class="jumbotron" >
                    <article>
                        <figure>
                            <img src="hotel5.png" width="280" height="280"/>
                            <figcaption>tempat parkir</figcaption>
                        </figure>
                        <hgroup>
                            <p style="text-height: 10;">dengan tempat parkir yang luas</p>
                        </hgroup>
                    </article>
                    <article>
                        <figure>
                            <img src="hotel1.jpg" width="280" height="280"/>
                            <figcaption>pintu masuk hotel</figcaption>
                        </figure>
                        <hgroup>
                            <p style="text-height: 10;">dengan dekorasi yang moderen</p>
                        </hgroup>
                    </article>
                    <article>
                        <figure>
                            <img src="hotel2.png" width="280" height="280"/>
                            <figcaption>lantai dua</figcaption>
                        </figure>
                        <hgroup>
                            <p style="text-height: 10;">dengan hotel yang bertingkat dua untuk </p>
                        </hgroup>
                    </article>
                    <article>
                        <figure>
                            <img src="hotel3.png" width="280" height="280"/>
                            <figcaption>pintu masuk hotel</figcaption>
                        </figure>
                        <hgroup>
                            <p style="text-height: 10;">dengan tempat parkir yang luas</p>
                        </hgroup>
                    </article>
                    <article>
                        <figure>
                            <img src="hotel4.png" width="280" height="280"/>
                            <figcaption>pintu masuk hotel</figcaption>
                        </figure>
                        <hgroup>
                            <p style="text-height: 10;">dengan tempat parkir yang luas</p>
                        </hgroup>
                    </article>
                    <article>
                        <figure>
                            <img src="hotel6.png" width="280" height="280"/>
                            <figcaption>pintu masuk hotel</figcaption>
                        </figure>
                        <hgroup>
                            <p style="text-height: 10;">dengan tempat parkir yang luas</p>
                        </hgroup>
                    </article>
                    <article>
                        <figure>
                            <img src="hotel7.png" width="280" height="280"/>
                            <figcaption>pintu masuk hotel</figcaption>
                        </figure>
                        <hgroup>
                            <p style="text-height: 10;">dengan tempat parkir yang luas</p>
                        </hgroup>
                    </article>
                    <div id="txtHint"></div>
                </div>
            <footer>
                <p align="center">MAHKOTA HOTEL &copy; 2015</p>
            </footer>
                </div>
    </body>
</html>

