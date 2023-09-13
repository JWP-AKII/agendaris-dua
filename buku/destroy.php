<?php 

    $id = $_GET['id'];

    // $s_cities = "SELECT * FROM cities ORDER BY id DESC";
    // $q_s_cities = mysqli_query($conn, $s_cities);

    // $s_parent = "SELECT * FROM parents WHERE id = '$id'";
    // $q_s_parent = mysqli_query($conn, $s_parent);
    // $d_parent = mysqli_fetch_object($q_s_parent);

        $u_delete = "DELETE FROM buku WHERE id = '$id'";
        $q_u_delete = mysqli_query($conn, $u_delete);

        if($q_u_delete) {
            header("location:index.php?page=buku-index");
        }else {
            echo "gagal hapus";
        }

?>