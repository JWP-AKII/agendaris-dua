<?php
    //query buku 
    $bukuid = mysqli_query($conn, "SELECT * FROM buku");
    // Query Create surat 
    $id = $_GET['id'];
    if (isset($_POST['simpan'])) {  
        $nsurat = $_POST['nomor_surat'];
        $tglsurat = $_POST['tanggal_surat'];
        $pengirim = $_POST['pengirim'];
        $penerima = $_POST['penerima'];
        $nagenda = $_POST['nomor_agenda'];
        $tglagenda = $_POST['tanggal_agenda'];
        $buku = $_POST['buku_id'];
        $status = $_POST['status'];

        $edit = "UPDATE surat SET nomorsurat='$nsurat', tanggal_surat='$tglsurat', pengirim='$pengirim', penerima='$penerima', nomor_agenda='$nagenda', tanggal_agenda='$tglagenda', buku_id='$buku', status='$status' WHERE id= $id";
        
        $sql = mysqli_query($conn, $edit);

        if ($sql) {
            header("Location: index.php");
        }
    }
    //Query data surat
    $select = "SELECT * FROM surat WHERE id= $id";
    $sqli = mysqli_query($conn, $select);
    $query = mysqli_fetch_assoc($sqli);
?>
<h1>BUAT SURAT</h1>
<div class="form">
    <form action="" method="post">
        <div class="input-group">
            <label for="nomor_surat">Nomor Surat</label>
            <input type="text" name="nomor_surat" id="nomor_surat" required value="<?php echo $sqli['nomor_surat']?>">
        </div>
        <div class="input-group">
            <label for="tanggal_surat">Tanggal Surat</label>
            <input type="date" name="tanggal_surat" id="nomor_surat" required value="<?php echo $sqli['tanggal_surat']?>">
        </div>
        <div class="input-group">
            <label for="pengirim">Pengirim</label>
            <input type="text" name="pengirim" id="nomor_surat" required value="<?php echo $sqli['pengirim']?>">
        </div>
        <div class="input-group">
            <label for="penerima">Penerima</label>
            <input type="text" name="penerima" id="nomor_surat" required value="<?php echo $sqli['penerima']?>">
        </div>
        <div class="input-group">
            <label for="nomor_agenda">Nomor Agenda</label>
            <input type="text" name="nomor_agenda" id="nomor_surat" required value="<?php echo $sqli['nomor_agenda']?>">
        </div>
        <div class="input-group">
            <label for="tanggal_agenda">Tanggal Agenda</label>
            <input type="date" name="tanggal_agenda" id="nomor_surat" required value="<?php echo $sqli['tanggal_agenda']?>">
        </div>
        <div class="input-group">
            <label for="buku_id">Buku</label>
            <select name="buku_id" id="buku_id">
                <!-- Perulangan buku -->
                <?php while ($result = mysqli_fetch_assoc($bukuid)) {?>
                <option <?php echo $sqli['buku_id'] == $result['id'] ? 'selected' : '' ; ?> value="<?php echo $result['id'] ?>"> <?php echo $result['']?> </option>
                <?php_
                    }
                ?>
            </select>   
        </div>
        <div class="input-group">
            <label for="status">Status</label>
            <select name="status" id="status">
                <option value="Draft">Draft</option>
                <option value="Proses">Proses</option>
                <option value="Selesai">Selesai</option>
                <option value="Tahan">Tahan</option>
            </select>
        </div>
    </form>
</div>