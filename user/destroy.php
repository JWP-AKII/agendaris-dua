<?php 

    $id = $_GET['id'];
    $u_user = mysqli_query($conn, "DELETE FROM user WHERE id='$id'");
    
    if ($u_user) {
        header("location:index.php?page=user-index");
    }else {
        echo "Gagal dihapus";
    }
?>