<?php

// Get value from GET
$id = $_GET['id'];
$type = $_GET['type'];

//query
$delete = "DELETE FROM surat WHERE id = $id";
$d_disposisi = "DELETE FROM disposisi_surat WHERE surat_masuk_id = $id";
$q_d_disposisi = mysqli_query($conn, $d_disposisi);
$sql = mysqli_query($conn, $delete);

if ($sql AND $q_d_disposisi) {
    header("Location:index.php?page=surat-index&type=$type");
}
?>