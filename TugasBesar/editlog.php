<?php
session_start();

if (!isset($_SESSION['nama'])) {
    header("location: login.php");
}
$user = $_GET['id_user'];
include ("koneksi.php");
?>

<html>
    <head>
        <title>VALIDASI</title>
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
                        <li class="active"><a href = "tabellog.php">TABEL LOGIN</a></li>
                        <li><a href = "arsip.php">ARSIP</a></li>
                        <li><a href = "form-registrasi.php">REGISTRASI</a></li> 
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
        <div class="hero-unit">
            <?php
            $queryselect = "SELECT * FROM user WHERE id_user=$user";
            $result = mysqli_query($koneksi, $queryselect);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if (mysqli_num_rows($result) == 0) {
                
            } else {
                ?>
                <form method="post" >
                    <table class="table-bordered table-hover table-condensed">
                        <tr>
                            <td>USER ID</td><td>:</td>
                            <td><input type="text" name="id" value="<?php echo $row['id_user']; ?>"size="50"/></td>
                        </tr>
                        <tr>
                            <td>NAMA</td><td>:</td>
                            <td><input type="text" name="nama" value="<?php echo $row['nama']; ?>"size="50"/></td>
                        </tr>
                        <tr>
                            <td>ALAMAT</td><td>:</td>
                            <td><input type="text" name="alamat" value="<?php echo $row['alamat']; ?>"size="50"/></td>
                        </tr>
                        <tr>
                            <td>USERNAME</td><td>:</td>
                            <td><input type="text" name="username" value=" <?php echo $row['username']; ?>" size="50"/></td>
                        </tr>
                        <tr>
                            <td>PASSWORD</td><td>:</td>
                            <td><input type="text" name="password" value=" <?php echo $row['password']; ?>" style="width: 300px;"/></td>
                        </tr>
                        <tr>
                            <td>LEVEL</td><td>:</td>
                            <td><input type="text" name="level" value=" <?php echo $row['level']; ?>" style="width: 300px;"/></td>
                        </tr>
                        <tr>
                            <td colspan=3 align="center"><button class="btn btn-large btn-danger" type="submit" name="submit">SUBMIT</button> &nbsp;&nbsp;&nbsp;
                                <button class="btn btn-large btn-danger" type="button" onclick="window.location = 'tabellog.php'">CANCEL</button></td>

                        </tr>	
                    </table>
            </div>
        </div>
    </div>
    </form>

    <?php
}
if (isset($_POST['submit'])) {
    $user = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];
    $queryupdate = "UPDATE user SET id_user='$user',nama='$nama',alamat='$alamat',
			 username='$username',password='$password',level ='$level' WHERE id_user='$user'";
    if (mysqli_query($koneksi, $queryupdate)) {
        echo "Data Diubah";
        echo '<META http-equiv="refresh" content="0;URL=tabellog.php">';
    } else {
        echo "Error" . $queryupdate . "<br>" . mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
}
?>
</form>
</div>
<footer>
    <p align="center">MAHKOTA HOTEL &copy; 2015</p>
</footer>
</div> 
</body>
</html>



