<?php 
    // Get value from GET
    $id = $_GET['id'];

    // Get surat data by surat id
    $s_surat = "SELECT * FROM surat WHERE id = $id";
    $q_s_surat = mysqli_query($conn, $s_surat);
    $d_surat = mysqli_fetch_object($q_s_surat);

    // Get disposisi data by surat id
    $s_disposisi = "SELECT * FROM disposisi_surat WHERE surat_masuk_id = $id ORDER BY id DESC";
    $q_s_disposisi = mysqli_query($conn, $s_disposisi);
?>

<div class="main-title">
    <h1>Data surat</h1>

    <div>
        <a href="index.php?page=surat-index&type=masuk" class="btn danger"><span class="fa fa-door-open"></span> Cancel</a>
        <a href="index.php?page=surat-update&id=<?= $id ?>" class="btn success"><span class="fa fa-book"></span> Edit</a>
        <a href="index.php?page=surat-destroy&id=<?= $id ?>" class="btn danger" onclick="return window.confirm('Hapus data?')"><span class="fa fa-trash"></span> Hapus</a>
    </div>
</div>