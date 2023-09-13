<?php 

    // Get value from GET
    $id = $_GET['id'];

    // Select user by id
    $s_user = "SELECT * FROM user WHERE id = $id";
    $q_s_user = mysqli_query($conn, $s_user);
    $d_user = mysqli_fetch_object($q_s_user);

    // Update user detail process
    if(isset($_POST['simpanDetail'])) {
        $user = $_POST['user'];
        $jabatan = ucwords($_POST['jabatan']);

        // Query to save user detail
        $u_userDetail = "UPDATE user SET username = '$user', jabatan = '$jabatan' WHERE id = '$id'";
        $q_u_userDetail = mysqli_query($conn, $u_userDetail);

        // Condition if query return TRUE
        if($q_u_userDetail) {
            header("location:index.php?page=user-index");
        }
    }
    
    // Update user password process
    if(isset($_POST['simpanPass'])) {
        $pass = md5($_POST['pass']);
        
        // Query to save user password
        $u_userPass = "UPDATE user SET password = '$pass' WHERE id = $id";
        $q_u_userPass = mysqli_query($conn, $u_userPass);
        
        // Condition if query return TRUE
        if($q_u_userPass) {
            header("location:index.php?page=user-index");
        }
    }
?>

<div class="main-title">
    <h1>Edit user</h1>
    <a href="index.php?page=user-index" class="btn danger"><span class="fa fa-door-open"></span> Cancel</a>
</div>

<br>

<div class="main-title">
    <h3>Edit user detail</h3>
</div>

<div class="form">
    <form action="" method="post">
        <div class="input-group">
            <label for="user">Username</label>
            <input type="text" name="user" id="user" autocomplete="off" required value="<?= $d_user->username ?>">
        </div>

        <div class="input-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" name="jabatan" id="jabatan" autocomplete="off" required value="<?= $d_user->jabatan ?>">
        </div>

        <div class="form-button">
            <button type="submit" name="simpanDetail" class="btn primary"><span class="fa fa-floppy-disk"></span> Simpan</button>
        </div>
    </form>
</div>

<br>

<div class="main-title">
    <h3>Edit user password</h3>
</div>

<div class="form">
    <form action="" method="post">
        <div class="input-group">
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" autocomplete="off" required>
        </div>

        <div class="form-button">
            <button type="submit" class="btn primary" name="simpanPass"><span class="fa fa-floppy-disk"></span> Simpan</button>
        </div>
    </form>
</div>