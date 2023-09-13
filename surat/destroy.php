<?php
//koneksi
require_once("../config.php");

//query
$id = $_GET['id'];
$delete = "DELETE FROM surat WHERE id = $id";
//proses query
$sql = mysqli_query($conn, $delete);

// var_dump($sql);
if ($sql) {
    header("Location: index.php");
}
?>