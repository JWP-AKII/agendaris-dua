<?php
    require_once("../config.php");

    $bukuid = mysqli_query($conn, "SELECT * FROM buku");

    if (isset($_POST['simpan'])) {
        
        $nsurat = $_POST['nomor_surat'];
        $tglsurat = $_POST['tanggal_surat'];
        $pengirim = $_POST['pengirim'];
        $penerima = $_POST['penerima'];
        $nagenda = $_POST['nomor_agenda'];
        $tglagenda = $_POST['tanggal_agenda'];
        $buku = $_POST['buku_id'];
        $status = $_POST['status'];

        $tambah = "INSERT INTO surat(nomor_surat, tanggal_surat, pengirim, penerima, nomor_agenda, tanggal_agenda, buku_id, status) VALUES ('$nsurat', '$tglsurat', '$pengirim', '$penerima', '$nagenda', '$tglagenda', '$buku', '$status')";
        
        $sql = mysqli_query($conn, $tambah);

        if ($sql) {
            header("Location: index.php");
        }
    }
?>
<h1>BUAT SURAT</h1>
<div class="form">
    <form action="" method="post">
        <div class="input-group">
            <label for="nomor_surat">Nomor Surat</label>
            <input type="text" name="nomor_surat" id="nomor_surat" required value="">
        </div>
        <div class="input-group">
            <label for="tanggal_surat">Tanggal Surat</label>
            <input type="text" name="tanggal_surat" id="nomor_surat" required value="">
        </div>
        <div class="input-group">
            <label for="pengirim">Pengirim</label>
            <input type="text" name="pengirim" id="nomor_surat" required value="">
        </div>
        <div class="input-group">
            <label for="penerima">Penerimat</label>
            <input type="text" name="penerima" id="nomor_surat" required value="">
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
            <input type="text" name="buku_id" id="buku_id" required value="">
        </div>
        <div class="input-group">
            <label for="status">Status</label>
            <input type="text" name="status" id="status" required value="">
        </div>
    </form>
</div>