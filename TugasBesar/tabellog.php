<?php
session_start();

if (!isset($_SESSION['nama'])) {
    header("location: login.php");
}
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
            <form method="post" >
                <table class="table-bordered table-hover table-condensed">
                    <tr><th>ID
                        </th>
                        <th>NAMA
                        </th>
                        <th>ALAMAT
                        </th>
                        <th>username
                        </th>
                        <th>password
                        </th>
                        <th>level
                        </th>
                        <th colspan="3">ACTION
                        </th></tr>


                    <?php
                    include ("koneksi.php");
                    $query = "SELECT * FROM user";
                    $result = mysqli_query($koneksi, $query);
                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        ?>
                        <tr class="success" align=center>
                            <?php
                            echo "<td>" . $row['id_user'] . "</td>";
                            echo "<td>" . $row['nama'] . "</td>";
                            echo "<td>" . $row['alamat'] . "</td>";
                            echo "<td>" . $row['username'] . "</td>";
                            echo "<td>" . $row ['password'] . "</td>";
                            echo "<td>" . $row['level'] . "</td>";
                            echo "<td align=center><a href='hapuslog.php?id_user=$row[id_user]'><img src=delete.png width=30 height=30/></a></td>";
                            echo "<td align=center><a href='editlog.php?id_user=$row[id_user]'><img src=edit.png width=30 height=30/></a></td>";
                            ?> 
                        </tr>
                        <?php
                    }
                    ?>

                </table>
            </form>
        </div>
        <footer>
            <p align="center">MAHKOTA HOTEL &copy; 2015</p>
        </footer>
    </div> 
</body>
</html>



