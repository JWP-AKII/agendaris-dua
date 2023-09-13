<?php 

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $jabatan = $_POST['jabatan'];

        
        //query tambah data
        $u_user = "INSERT INTO user (id, username, password, jabatan) VALUES ('', '$username', '$password', '$jabatan')";
        $q_u_user = mysqli_query($conn, $u_user);

        if($q_u_user) {
            header("location:index.php?page=user-index");
        }
    }
?>

<h1>Add User!</h1>

<div class="form">
    <form action="" method="POST">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" autocomplete="off" required>
        </div>

        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" autocomplete="off" required>
        </div>

        <div class="input-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" name="jabatan" id="jabatan" autocomplete="off" min="0" required>
        </div>

        <div class="form-button">
            <button type="submit" name="submit" class="btn primary"><span class="fa fa-floppy-disk"></span> Simpan</button>
            <a href="index.php?page=user-index" class="btn danger"><span class="fa fa-xmark"></span> Cancel</a>
        </div>
    </form>
</div>
