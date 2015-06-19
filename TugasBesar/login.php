<!DOCTYPE html>
<html>
    <head>
        <title>LOG IN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/theme.css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link href="style/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css">
        <style type="text/css">
          
            body {
                background-color:#333333;
                background-image:url("hotel1.jpg");
                background-size: cover;
                
            }
            

            .form-signin {
                max-width: 300px;
                padding: 19px 29px 29px;
                margin: 0 auto 20px;
                background-color: #fff;
                border: 1px solid #e5e5e5;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
            }
            .form-signin input[type="text"],
            .form-signin input[type="password"] {
                font-size: 16px;
                height: auto;
                margin-bottom: 15px;
                padding: 7px 9px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">MAHKOTA HOTEL</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li ><a href="index.php">Home</a></li>
                        <li><a href="fasilitas.php">FASILITAS</a></li>
                        <li class="active"><a href="login.php">Login</a></li>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class="container theme-showcase" role="main">
            <!-- Main jumbotron for a primary marketing message or call to action -->
        </div>
        <div class="jumbotron" style="background: transparent;">
            <div class="container">
            <form class="form-signin" method="post">
                <h2 class="form-signin-heading">please sign in</h2>
                <input type="text" name="username" class="input-block-level" placeholder="username">
                <input type="password" name="password" class="input-block-level" placeholder="password">
                <button class="btn btn-large btn-primary" type="submit" name="submit">sign in</button>
            </form>

            <?php
            include("koneksi.php");
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $password = md5($_POST['password']);

                $sqlselect = "SELECT * FROM user WHERE username='$username' AND password='$password'";
                $result = mysqli_query($koneksi, $sqlselect);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                if (mysqli_num_rows($result) == 1) {
                    session_start(); //mengaktifkan session
                    $_SESSION['nama'] = $row['nama'];
                    $_SESSION['level'] = $row['level'];
                    header("location: welcome.php");
                } else {
                    echo"<div class='alert alert-danger' role='alert'>login gagal!!periksan kembali username dan password anda</div>";
                }
                mysqli_close($koneksi);
            }
            ?>
                <hr>
                <div id="txtHint"></div>
                <footer>
                    <p align="center" style="color: white;">MAHKOTA HOTEL &copy; 2015</p>
                </footer>
            </div> 
    </body>
</html>