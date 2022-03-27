<?php
    session_start();
    if(isset($_POST['registrasi-button'])){

        $_SESSION["nama_depan"] = $_POST['r_nama_depan'];
        $_SESSION["nama_tengah"] = $_POST['r_nama_tengah'];
        $_SESSION["nama_belakang"] = $_POST['r_nama_belakang'];
        $_SESSION["tempat_lahir"] = $_POST['tempat_lahir'];
        $_SESSION["tanggal_lahir"] = $_POST['tgl_lahir'];
        $_SESSION["nomor_nik"] = $_POST['nik'];
        $_SESSION["warga_negara"] = $_POST['warga_negara'];
        $_SESSION["email"] = $_POST['email'];
        $_SESSION["nomor_hp"] = $_POST['nomorHP'];
        $_SESSION["alamat"] = $_POST['alamat'];
        $_SESSION["kode_pos"] = $_POST['kodepos'];
        $_SESSION["usernameRegis"] = $_POST['r_username'];
        $_SESSION["passwordRegis"] = $_POST['r_password'];

        // setelah regis, diarahkan ke halaman welcome untuk lakukan login
        header("Location: index.php");
    }
    
    //fotoprofil
    //print_r($_FILES);
    $namaFile = $_FILES['fotoProfil']['name'];
    $tmp_name = $_FILES['fotoProfil']['tmp_name'];
    $dirUpload = "photos/";
    $terupload = move_uploaded_file($tmp_name, $dirUpload.$namaFile);
    $_SESSION["foto"] = $namaFile;

    //test:
    // echo $_SESSION["nama_depan"];
    // echo "<br/>";
    // echo $_SESSION["nama_tengah"];
    // echo "<br/>";
    // echo $_SESSION["nama_belakang"];
    // echo "<br/>";
    // echo $_SESSION["tempat_lahir"];
    // echo "<br/>";
    // echo $_SESSION["nomor_nik"];
    // echo "<br/>";
    // echo $_SESSION["warga_negara"];
    // echo "<br/>";
    // echo $_SESSION["email"];
    // echo "<br/>";
    // echo $_SESSION["nomor_hp"];
    // echo "<br/>";
    // echo $_SESSION["alamat"];
    // echo "<br/>";
    // echo $_SESSION["kode_pos"];
    // echo "<br/>";     
    // if($terupload){
    //     echo "File berhasil diupload";
    //     echo $_SESSION["foto"];
    //     echo "<a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
    // }else{
    //     echo "Gagal Upload";
    // }
    // echo "<br/>";
    // echo $_SESSION["usernameRegis"];
    // echo "<br/>";
    // echo $_SESSION["passwordRegis"];
?>