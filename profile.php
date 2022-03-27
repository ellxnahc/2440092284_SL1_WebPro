<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Profile</title>
</head>
<body>
    <div class="session-container">
        <div class="header">
            <div class="title-header">Aplikasi Pengelolaan Keuangan</div>
            <div class="link-container">
                <div class="home-link">
                    <a href="./home.php">Home</a>
                    
                    <a href="./profile.php"><u>Profile</u></a>
                    
                    <a href="./logout.php">Logout</a>
                    
                </div>
            </div>
        </div>
        <div class="content-container">
            <div class="profile-title">Profil Pribadi</div>
            
            <div class="content-box">
                <div class="column1">
                    <div class="row1">Nama Depan</div>
                    <div class="row1">Tempat Lahir</div>
                    <div class="row1">Warga Negara</div>
                    <div class="row1">Alamat</div>
                </div>
                <div class="column1">
                    <div class="row1"><b><?php echo $_SESSION['nama_depan']?></b></div>
                    <div class="row1"><b><?php echo $_SESSION['tempat_lahir']?></b></div>
                    <div class="row1"><b><?php echo $_SESSION['warga_negara']?></b></div>
                    <div class="row1"><b><?php echo $_SESSION['alamat']?></b></div>
                </div>


                <div class="column1">
                    <div class="row1">Nama Tengah</div>
                    <div class="row1">Tanggal Lahir</div>
                    <div class="row1">Email</div>
                    <div class="row1">Kode Pos</div>
                </div>
                <div class="column1">
                    <div class="row1"><b><?php echo $_SESSION['nama_tengah']?></b></div>
                    <div class="row1"><b><?php echo $_SESSION['tanggal_lahir']?></b></div>
                    <div class="row1"><b><?php echo $_SESSION['email']?></b></div>
                    <div class="row1"><b><?php echo $_SESSION['kode_pos']?></b></div>
                </div>


                <div class="column1">
                    <div class="row1">Nama Belakang</div>
                    <div class="row1">NIK</div>
                    <div class="row1">No HP</div>
                    <div class="row1">Foto Profil</div>
                </div>
                <div class="column1">
                    <div class="row1"><b><?php echo $_SESSION['nama_belakang']?></b></div>
                    <div class="row1"><b><?php echo $_SESSION['nomor_nik']?></b></div>
                    <div class="row1"><b><?php echo $_SESSION['nomor_hp']?></b></div>
                    <div class="row1"><img src="./photos/<?= $_SESSION['foto']?>" alt="no img" width="100" height="100"></div>
                </div>
            </div>

        </div>

    </div>
</body>
</html>