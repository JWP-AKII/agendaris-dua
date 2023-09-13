<?php 
    // Get value from GET and Session
    $id = $_GET['id'];
    $userId = $_SESSION['id'];

    // Input process
    if(isset($_POST['submit'])) {
        // Get value from POST
        $disposisi = ucfirst($_POST['disposisi']);

        // Insert new disposisi query
        $i_disposisi = "INSERT INTO disposisi_surat(user_id, surat_masuk_id, disposisi) VALUES('$userId', '$id', '$disposisi')";
        $q_i_disposisi = mysqli_query($conn, $i_disposisi);

        // Condition if query return TRUE
        if($q_i_disposisi) {
            header("location:index.php?page=surat-show&id=$id");
        }
    }
?>

<div class="main-title">
    <h1>Tambah disposisi</h1>
    <a href="index.php?page=surat-show&id=<?= $id ?>" class="btn danger"><span class="fa fa-door-open"></span> Cancel</a>
</div>

<div class="form">
    <form action="" method="post">
        <div class="input-group">
            <label for="disposisi">Disposisi</label>
            <textarea name="disposisi" id="disposisi" cols="30" rows="10" required></textarea>
        </div>

        <div class="form-button">
            <button type="submit" class="btn primary" name="submit"><span class="fa fa-floppy-disk"></span> Simpan</button>
        </div>
    </form>
</div>