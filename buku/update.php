<?php 
    $id = $_GET['id'];

    // $s_cities = "SELECT * FROM cities ORDER BY id DESC";
    // $q_s_cities = mysqli_query($conn, $s_cities);

    // $s_parent = "SELECT * FROM parents WHERE id = '$id'";
    // $q_s_parent = mysqli_query($conn, $s_parent);
    // $d_parent = mysqli_fetch_object($q_s_parent);
    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];

        $u_buku = "UPDATE buku SET nama = '$nama' WHERE id = '$id'";
        $q_u_buku = mysqli_query($conn, $u_buku);


        if($q_u_buku) {
            header("location:index.php?page=buku-index");
        }
    }
    $select = "SELECT * FROM buku WHERE id= $id";
    $sqli = mysqli_query($conn,$select);
    $mysql = mysqli_fetch_assoc($sqli);
?>

<h1>Edit Data</h1>

    <div class="form">
        <form action="" method="POST">
            <div class="input-group">
                <label for="nama">Nama Buku :</label>
                <input type="text" name="nama" id="nama" autocomplete="off" required value="<?php echo $mysql['nama']?>">
            </div>

            <div class="form-button">
                <button type="submit" name="submit" class="btn primary"><span class="fa fa-floppy-disk"></span> Simpan</button>
                <a href="index.php?page=buku-index" class="btn danger"><span class="fa fa-xmark"></span> Cancel</a>
            </div>
        </form>
    </div>
