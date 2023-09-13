<?php

//query
$id = $_GET['id'];
$delete = "DELETE FROM surat WHERE id = $id";
//proses query
$sql = mysqli_query($conn, $delete);

if ($sql) {
    header("Location:index.php?page=surat-index&type=masuk");
}
?>