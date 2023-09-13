<?php
    //query buku 
    $bukuid = mysqli_query($conn, "SELECT * FROM buku");
    // Query Create surat 
    if (isset($_POST['simpan'])) {  
        $nsurat = $_POST['nomor_surat'];
        $tglsurat = $_POST['tanggal_surat'];
        $pengirim = $_POST['pengirim'];
        $nagenda = $_POST['nomor_agenda'];
        $tglagenda = $_POST['tanggal_agenda'];
        $buku = $_POST['buku_id'];

        $tambah = "INSERT INTO surat(nomor_surat, tanggal_surat, pengirim, nomor_agenda, tanggal_agenda, buku_id, status) VALUES ('$nsurat', '$tglsurat', '$pengirim', '$nagenda', '$tglagenda', '$buku', 'Draft')";
        
        $sql = mysqli_query($conn, $tambah);

        if ($sql) {
            header("Location:index.php?page=surat-index");
        }
    }
?>
<h1>Tambah Surat</h1>
<div class="form">
    <form action="" method="post">
        <div class="input-group">
            <label for="nomor_surat">Nomor Surat</label>
            <input type="text" name="nomor_surat" id="nomor_surat" required value="">
        </div>
        <div class="input-group">
            <label for="tanggal_surat">Tanggal Surat</label>
            <input type="date" name="tanggal_surat" id="nomor_surat" required value="">
        </div>
        <div class="input-group">
            <label for="pengirim">Pengirim</label>
            <input type="text" name="pengirim" id="nomor_surat" required value="">
        </div>
        <div class="input-group">
            <label for="nomor_agenda">Nomor Agenda</label>
            <input type="text" name="nomor_agenda" id="nomor_surat" required value="">
        </div>
        <div class="input-group">
            <label for="tanggal_agenda">Tanggal Agenda</label>
            <input type="date" name="tanggal_agenda" id="nomor_surat" required value="">
        </div>
        <div class="input-group">
            <label for="buku_id">Buku</label>
            <select name="buku_id" id="buku_id">
                <!-- Perulangan buku -->
                    <?php while ($result = mysqli_fetch_assoc($bukuid)) {?>
                    <option value="<?php echo $result['id'] ?>"> <?php echo $result['nama']?> </option>
                    <?php
                        }
                    ?>
            </select>   
        </div>

        <div class="form-button">
            <button type="submit" class="btn primary" name="simpan"><span class="fa fa-floppy-disk"></span> Tambah</button>
        </div>
    </form>
</div>