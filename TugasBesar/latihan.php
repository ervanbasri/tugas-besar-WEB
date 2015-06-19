<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Praktikum Web Modul 11</title>
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
            }

            #wrapper {
                font-family: Arial, Helvetica, sans-serif;
                padding: 3px;
                width: 900px;
                height: 270px;
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
    <body>

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
                    <a class="navbar-brand" href="#">TUGAS BESAR</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Latihan <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Latihan 1</a></li>
                                <li><a href="#">Latihan 2</a></li>
                                <li><a href="#">Latihan 3</a></li>
                            </ul>
                        <li><a href="#contact">Logout</a></li>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container theme-showcase" role="main">

            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div id="wrapper">
                <div id="header">
                    <div id="banner">banner</div>
                </div>
                <div class="jumbotron">
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
                        <button type="submit" class="btn btn-default "name="ok">SETUJU</button>
                    </form>
                </div>
                <div id="txtHint"></div>
                </body>
                </html>
