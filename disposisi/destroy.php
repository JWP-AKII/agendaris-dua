<?php 
    // Variable to get id
    $id = $_GET['id'];
    $surat_id = $_GET['surat-id'];

    // Query to delete disposisi data by id
    $d_disposisi = "DELETE FROM disposisi_surat WHERE id = $id";
    $q_d_disposisi = mysqli_query($conn, $d_disposisi);

    // Condition if the query return true
    if($q_d_disposisi) {
        header("location:index.php?page=surat-show&id=$surat_id");
    }
?>