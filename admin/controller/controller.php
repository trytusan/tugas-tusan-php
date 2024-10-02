<?php
if(isset($_POST['email'])){
    $conn=$con->koneksi();
    $email=$_POST['email'];
    $psw=md5($_POST['password']);
    $sql="SELECT * FROM data_login WHERE password = '$psw' AND email = '$email' AND active = 'Y'";
    $user=$conn->query($sql);
    if($user->num_rows > 0) {
        $sess=$user->fetch_array();
        $_SESSION['login']['email']=$sess['email'];
        $_SESSION['login']['id']=$sess['id'];
        header('Location: http://localhost/php_test1/admin/index.php?mod=dokter');
    } else {
        $msg="Email dan Password tidak cocok";
        include_once 'controller/login.php';
    }
} else{
    include_once 'controller/login.php';
}
?>