<?php 
    require_once "../config.php";

    if(!empty($_SESSION['id'])) {
        header('location:../index.php');
    }

    if(isset($_POST['submit'])) {
        $user = $_POST['user'];
        $pass = md5($_POST['pass']);

        $s_user = "SELECT * FROM user WHERE username = '$user' AND password = '$pass'";
        $q_s_user = mysqli_query($conn, $s_user);
        $r_user = mysqli_num_rows($q_s_user);

        // var_dump($r_user);

        if(!empty($r_user)) {
            $d_user = mysqli_fetch_object($q_s_user);
            $_SESSION['id'] = $d_user->id;
            $_SESSION['user'] = $d_user->username;
            header("location:../index.php");
        } else {
            echo "<script>window.alert('Login Gagal!')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        body {
            height: 100vh;
            width: 100vw;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .auth-container {
            width: 30%;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <h2>Login</h2>

        <form action="" method="post">
            <div class="input-group">
                <label for="user">Username</label>
                <input type="text" name="user" id="user" autocomplete="off" required>
            </div>

            <div class="input-group">
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" required>
            </div>

            <div class="form-button">
                <button type="submit" name="submit" class="btn primary">Login</button>
            </div>

            <!-- <div class="input-group">
                <p>Belum punya akun? <a href="register.php">Register</a>!</p>
            </div> -->
        </form>
    </div>
</body>
</html>