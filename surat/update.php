<?php
    //query buku 
    $bukuid = mysqli_query($conn, "SELECT * FROM buku");
    // Query Create surat 
    $id = $_GET['id'];
    if (isset($_POST['simpan'])) {  

        $penerima = ucwords($_POST['penerima']);
        $status = $_POST['status'];

        $edit = "UPDATE surat SET penerima='$penerima',  status='$status' WHERE id= $id";
        
        $sql = mysqli_query($conn, $edit);

        if ($sql) {
            header("Location: index.php?page=surat-show&id=$id");
        }
    }
    //Query data surat
    $select = "SELECT * FROM surat JOIN buku ON surat.buku_id = buku.id WHERE surat.id= $id";
    $sqli = mysqli_query($conn, $select);
    $query = mysqli_fetch_assoc($sqli);
?>
<div class="main-title">
    <h1>Edit surat</h1>
    <a href="index.php?page=surat-show&id=<?= $id ?>" class="btn danger"><span class="fa fa-door-open"></span> Cancel</a>
</div>

<div class="form">
    <form action="" method="post">
        <div class="input-group">
            <label for="nomor_surat">Nomor Surat</label>
            <input type="text" name="nomor_surat" id="nomor_surat" required value="<?php echo $query['nomor_surat']?>" disabled>
        </div>
        <div class="input-group">
            <label for="tanggal_surat">Tanggal Surat</label>
            <input type="date" name="tanggal_surat" id="nomor_surat" required value="<?php echo $query['tanggal_surat']?>" disabled>
        </div>
        <div class="input-group">
            <label for="pengirim">Pengirim</label>
            <input type="text" name="pengirim" id="nomor_surat" required value="<?php echo $query['pengirim']?>" disabled>
        </div>
        <div class="input-group">
            <label for="penerima">Penerima</label>
            <input type="text" name="penerima" id="nomor_surat" required value="<?php echo $query['penerima']?>">
        </div>
        <div class="input-group">
            <label for="nomor_agenda">Nomor Agenda</label>
            <input type="text" name="nomor_agenda" id="nomor_surat" required value="<?php echo $query['nomor_agenda']?>" disabled>
        </div>
        <div class="input-group">
            <label for="tanggal_agenda">Tanggal Agenda</label>
            <input type="date" name="tanggal_agenda" id="nomor_surat" required value="<?php echo $query['tanggal_agenda']?>" disabled>
        </div>
        <div class="input-group">
            <label for="buku">Buku</label>
            <input type="text" name="buku" id="buku" value="<?= $query['nama'] ?>" disabled>  
        </div>
        <div class="input-group">
            <label for="status">Status</label>
            <select name="status" id="status">
                <option value="Draft" <?= ($query['status'] == 'Draft') ? "selected" : '' ?>>Draft</option>
                <option value="Proses" <?= ($query['status'] == 'Proses') ? "selected" : '' ?>>Proses</option>
                <option value="Selesai" <?= ($query['status'] == 'Selesai') ? "selected" : '' ?>>Selesai</option>
                <option value="Tahan" <?= ($query['status'] == 'Tahan') ? "selected" : '' ?>>Tahan</option>
            </select>
        </div>

        <div class="form-button">
            <button type="submit" name="simpan" class="btn primary"><span class="fa fa-floppy-disk"></span> Simpan</button>
        </div>
    </form>
</div>