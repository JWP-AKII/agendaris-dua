<?php 

    $id = $_GET['id'];
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $jabatan = $_POST['jabatan'];
        }
        
        //query user edit
        $u_user = "UPDATE user SET username = '$username', password = '$password', jabatan = '$jabatan' WHERE id = $id";
        $q_u_user = mysqli_query($conn, $u_user);
        $d_user = mysqli_fetch_object($q_u_user);

        if($d_user) {
            header("location:index.php?page=user-index&type=masuk");
        }
    
?>
<h1>Edit Data</h1>

<div class="form">
    <form action="" method="POST">
        <div class="input-group">
            <label for="username">Nama</label>
            <input type="text" name="username" id="username" autocomplete="off" required value="<?= $d_user->username ?>">
        </div>

        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" autocomplete="off" required value="<?= $d_user->password ?>">
        </div>

        <div class="input-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" name="jabatan" id="jabatan" autocomplete="off" min="0" required value="<?= $d_user->jabatan ?>">
        </div>

        <div class="form-button">
            <button type="submit" name="submit" class="btn primary"><span class="fa fa-floppy-disk"></span> Simpan</button>
            <a href="index.php?page=user-index" class="btn danger"><span class="fa fa-xmark"></span> Cancel</a>
        </div>
    </form>
</div>