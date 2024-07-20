<?php

require 'function.php';

if(isset($_POST["login"])){

    $username = $_POST[ "username" ];
    $password = $_POST['password'];

    // $level = $_POST["level"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE user_name = '$username' AND password='$password'");

    // cek username 
    if(mysqli_num_rows($result) === 1){
        // ce password
        
            header("location:tampil.php");

    exit;
    } 
}
$error=true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>

<body>

<?php if(isset($error)):  ?>
    <p style="color: red; font-style: italic;"> Username  atau Password salah </p>
<?php endif; ?>
    
<form action="" method="post">
    <h5> Login User </h5>
    <div class="form-group">
    <input type= "text" name="username" id="username" class="form-control" placeholder= "Username Anda">
    </div>
    <div class="form-group">
        <input type= "password" name="password" id="password" class="form-control" placeholder= "Password Anda">
    </div>
    <div class="form-group">
        <input type= "checkbox" name="remember" id="remember">
        <label2 for="remember"> Remember Me </label2>
    </div>
    <div class="form-group text-center">
        <button type="submit" name="login" class="btn btn-success btn-md" class="form-control">Admin</button>
        <button type="submit" name="user" class="btn btn-success btn-md" class="form-control">User</button>
        <p><div class="text-primary" >Belum punya akun? silahkan klik link di bawah ini! </p>
        <p><a href="tambahuser.php" class="text-primary">Buat Akun</a> </p>
        </div>
    </div>
</div>

</form>

</body>
</html>