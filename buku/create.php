<?php 

    // $s_cities = "SELECT * FROM cities ORDER BY id DESC";
    // $q_s_cities = mysqli_query($conn, $s_cities);

    // $s_parent = "SELECT * FROM parents WHERE id = $id";
    // $q_s_parent = mysqli_query($conn, $s_parent);
    // $d_buku = mysqli_fetch_object($q_s_parent);

    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];

        $sql = "INSERT INTO buku (nama) VALUES ('$nama')";
        $prosesQuery = mysqli_query($conn, $sql);

        if($prosesQuery) {
            header("location:index.php?page=buku-index");
        }
    }
?>

    <h1>Tambah Data</h1>

    <div class="form">
        <form action="" method="POST">
            <div class="input-group">
                <label for="nama">Nama Buku :</label>
                <input type="text" name="nama" id="nama" autocomplete="off" required>
            </div>

            <div class="form-button">
                <button type="submit" name="submit" class="btn primary"><span class="fa fa-floppy-disk"></span> Simpan</button>
                <a href="index.php?page=buku-index" class="btn danger"><span class="fa fa-xmark"></span> Cancel</a>
            </div>
        </form>
    </div>

