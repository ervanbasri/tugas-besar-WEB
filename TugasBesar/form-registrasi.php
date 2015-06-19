<?php
session_start();

if (!isset($_SESSION['nama'])) {
    header("location: login.php");
}
?>

<html>
    <head>
        <title>REGISTRASI</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
    </head>

    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggel="collapse" date-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="welcome.php">MAHKOTA HOTEL</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <?php
                            if ($_SESSION['level'] == "admin") {
                                echo'
                        <li><a href = "validasi.php">VALIDASI</a></li>
                        <li><a href = "tabellog.php">TABEL LOGIN</a></li>
                        <li><a href = "arsip.php">ARSIP</a></li>
                        <li class="active"><a href = "form-registrasi.php">REGISTRASI</a></li> 
                                ';
                            } else if ($_SESSION['level'] == "resepsionis") {
                                echo '
                                <li><a href="validasi.php">validasi</a></li>
                                <li><a href = "arsip.php">ARSIP</a></li>
                                ';
                            }
                            ?>
                        </ul>
                        <div class="btn-group navbar-form pull-right">
                            <a class="btn btn-pimary" href="#"><i class="icon-user icon-white"></i><?php echo $_SESSION['nama']; ?></a>
                            <a class="btn btn-pimary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li> <a href="logout.php"><i class="icon-off"></i>logout</a></li>
                            </ul>
                        </div>
                    </div><!--/,nav-collapse-->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="hero-unit">
             <h2>FORM  PENDAFTARAN</h2>
                    <form class="form-horizontal" method="post">
                        <div class="control-group">
                            <label class="control-label">nama</label>
                            <div class="controls"><input type="text" name="nama" placeholder="Nama"></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Alamat</label>
                            <div class="controls"><input type="text" name="alamat" placeholder="Alamat"></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Username</label>
                            <div class="controls"><input type="text" name="username" placeholder="Username"></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Password</label>
                            <div class="controls"><input type="text" name="password" placeholder="Password"></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">level user</label>
                            <div class="controls">
                                <select name="level">
                                    <option value="admin">Admin</option>
                                    <option value="resepsionis">resepsionis</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn btn-info" name="submit">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                    <?php
                    include ("koneksi.php");
                    if (isset($_POST['submit'])) {
                        $n = $_POST['nama'];
                        $a = $_POST['alamat'];
                        $u = $_POST['username'];
                        $p = md5($_POST['password']);
                        $l = $_POST['level'];

                        $insert = "insert into user (nama,alamat,username,password,level) values('$n','$a','$u','$p','$l')";
                        if (mysqli_query($koneksi, $insert)) {
                            echo "New record cread succsesfully";
                            echo '<META http-equiv="refesh" content="1;URL=form-register.php">';
                        } else {
                            echo "ERROR" . $insert . "<br>" . mysqli_error($koneksi);
                        }mysqli_close($koneksi);
                    }
                    ?>
            </div>
            <footer>
                <p align="center">MAHKOTA HOTEL &copy; 2015</p>
            </footer>
        </div> 
    </body>
</html>