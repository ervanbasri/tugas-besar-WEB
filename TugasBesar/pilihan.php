<?php include ("koneksi.php"); ?>
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
    <body >
        <?php
        session_start();
        $from = $_POST['from'];
        $to = $_POST['to'];
        $room = $_POST['room'];
        $kamar = $_POST['kamar'];



        $datetime1 = new DateTime($from);
        $datetime2 = new DateTime($to);
        $difference = $datetime1->diff($datetime2);


        $_SESSION['f'] = $from;
        $_SESSION['t'] = $to;
        $_SESSION['r'] = $room;
        $_SESSION['k'] = $kamar;

        if ($kamar == "A1") {
            $hasil = 250000;
        } else {
            $hasil = 300000;
        }
        ?>

        <!-- Fixed navbar -->
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
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="fasilitas.php">FASILITAS</a></li>
                            <li><a href="login.php">Login</a></li>
                            </li>
                        </ul>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container theme-showcase" role="main">
            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div class="jumbotron">
                <p>
                    Selamat Datang Di Hotel Mahkota Banyuwangi
                </p>
                <form method="POST" >
                    <label for="from">CEK IN</label>
                    <input type="text" id="from" name="from"  value="<?php echo $_SESSION['f']; ?>">
                    <label for="to">CEK OUT</label>
                    <input type="text" id="to" name="to"  value="<?php echo $_SESSION['t']; ?>">
                    <label class="control-label">ROOM</label>
                    <select name="room"> 
                        <option value="<?php echo $_SESSION['r']; ?>"><?php echo $_SESSION['r']; ?></option>
                    </select>
                    <label class="control-label">TYPE KAMAR</label>
                    <select name="kamar">
                        <option value="<?php echo $_SESSION['k']; ?>"><?php echo $_SESSION['k']; ?></option>
                    </select>
                    <input type="submit" name="ok" disabled value="OK"/>

                    <div>
                        <p> Masukan data diri dengan lengkap sesuai dengan KTP </p>
                    </div>

                    <table class="table table-hover table-condensed">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><input type="text" name="nama" placeholder="Nama"/></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><input type="text" name="alamat" placeholder="Alamat"/></td>
                        </tr>
                        <tr>
                            <td>NO HP</td>
                            <td>:</td>
                            <td> <input type="text" name="nohp" placeholder="NO.HP"/></td>
                        </tr>
                        <tr>
                            <td>NO KTP</td>
                            <td>:</td>
                            <td> <input type="text" name="no" placeholder="NO.KTP"/></td>
                        </tr>
                        <tr>
                            <td>CEK IN</td>
                            <td>:</td>
                            <td><input type="text" name="in" value="<?php echo $_SESSION['f']; ?>" /></td>
                        </tr>
                        <tr>
                            <td>CEK OUT</td>
                            <td>:</td>
                            <td> <input type="text" name="out" value="<?php echo $_SESSION['t']; ?>" /></td>
                        </tr>
                        <tr>
                            <td>BAYAR</td>
                            <td>:</td>
                            <td>   <input type="text" name="bayar"  value="<?php echo ($difference->days) * $room * $hasil ?>" /></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <button class="btn btn-default btn-large" type="submit" name="booking" >BOOK</button>
                            </td>
                        </tr>
                    </table>
                </form>
                <?php
                if (isset($_POST['booking'])) {
                    $na = $_POST['nama'];
                    $a = $_POST['alamat'];
                    $no = $_POST['nohp'];
                    $n = $_POST['no'];
                    $i = $_POST['in'];
                    $o = $_POST['out'];
                    $b = $_POST['bayar'];
                    $insert = "insert into pelanggan (nama,alamat,nohp,noktp,cekin,cekout,bayar) values ('$na','$a','$no','$n','$i','$o','$b')";
                    $insert1 = "insert into arsip (nama,alamat,nohp,noktp,cekin,cekout,bayar) values ('$na','$a','$no','$n','$i','$o','$b')";
                    if (mysqli_query($koneksi, $insert) & mysqli_query($koneksi, $insert1)) {
                        echo '<META http-equiv="refresh" content="0;URL=bayar.php">';
                    } else {
                        echo "Error" . $insert . "<br>" . mysqli_error($koneksi);
                    }

                    mysqli_close($koneksi);
                }
                ?>

            </div>
            <div id="txtHint"></div>
            <footer>
                <p align="center" style="color: black; text-height: 16px;">MAHKOTA HOTEL &copy; 2015</p>
            </footer>
    </body>
</html>
