<?php
    session_start();
    if(isset($_POST['login-button'])){
        if(isset($_SESSION)){
           //cek apakah ada akun atau tidak
            if(!$_SESSION) {
                echo "Anda belum melakukann registrasi";
                echo "<br/>";
                echo "Silahkan register terlebih dahulu";
            }else{
                //cek login
                if($_POST['l_username'] == $_SESSION['usernameRegis']
                && $_POST['l_password'] == $_SESSION['passwordRegis']){
                    echo"LOGIN BERHASIL";
                    header("Location: home.php");
                }else{
                    echo "Maaf, ada kesalahan dalam proses login Anda";
                }
            }
        }
    }
?>
