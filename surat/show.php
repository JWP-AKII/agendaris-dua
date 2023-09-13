<?php 
    // Get value from GET
    $id = $_GET['id'];

    // Get surat data by surat id
    $s_surat = "SELECT * FROM surat JOIN buku ON surat.buku_id = buku.id WHERE surat.id = $id";
    $q_s_surat = mysqli_query($conn, $s_surat);
    $d_surat = mysqli_fetch_object($q_s_surat);

    // Get disposisi data by surat id
    $s_disposisi = "SELECT d.disposisi, d.id AS did, u.username FROM disposisi_surat d JOIN user u ON d.user_id = u.id WHERE d.surat_masuk_id = $id ORDER BY d.id DESC";
    $q_s_disposisi = mysqli_query($conn, $s_disposisi);
?>

<style>
    table#surat tr td:nth-child(1) {
        width: 20%;
    }
</style>

<div class="main-title">
    <h1>Data surat</h1>

    <div>
        <a href="index.php?page=surat-index&type=masuk" class="btn danger"><span class="fa fa-door-open"></span> Cancel</a>
        <a href="index.php?page=surat-update&id=<?= $id ?>" class="btn success"><span class="fa fa-book"></span> Edit</a>
        <a href="index.php?page=surat-destroy&id=<?= $id ?>&type=<?= $d_surat->tipe ?>" class="btn danger" onclick="return window.confirm('Hapus data?')"><span class="fa fa-trash"></span> Hapus</a>
    </div>
</div>

<table border="1" id="surat">
    <tr>
        <td>Nomor surat</td>
        <td><?= $d_surat->nomor_surat ?></td>
    </tr>
    <tr>
        <td>Tanggal surat</td>
        <td><?= strftime('%A, %d %B %Y', strtotime($d_surat->tanggal_surat)) ?></td>
    </tr>
    <tr>
        <td><?= ($d_surat->tipe == 'masuk') ? 'Pengirim' : 'Penerima' ?></td>
        <td><?= $d_surat->pengirim ?></td>
    </tr>
    <tr>
        <td>Nomor agenda</td>
        <td><?= $d_surat->nomor_agenda ?></td>
    </tr>
    <tr>
        <td>Tanggal agenda</td>
        <td><?= strftime('%A, %d %B %Y', strtotime($d_surat->tanggal_agenda)) ?></td>
    </tr>
    <tr>
        <td>Buku</td>
        <td><?= $d_surat->nama ?></td>
    </tr>
    <tr>
        <td>Status</td>
        <td><?= $d_surat->status ?></td>
    </tr>
</table>

<br><br>

<div class="main-title">
    <h2>Disposisi</h2>
    <a href="index.php?page=disposisi-create&id=<?= $id ?>" class="btn primary"><span class="fa fa-plus"></span> Add new disposisi</a>
</div>

<table border="1">
    <thead>
        <th>No</th>
        <th>Disposisi</th>
        <th>User</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php 
            $no = 1;

            while($data = mysqli_fetch_object($q_s_disposisi)) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data->disposisi ?></td>
                    <td><?= $data->username ?></td>
                    <td class="action">
                        <a href="index.php?page=disposisi-destroy&id=<?= $id ?>&surat-id=<?= $data->did ?>" class="btn danger"><span class="fa fa-trash"></span></a>
                    </td>
                </tr>
            <?php }
        ?>
    </tbody>
</table>