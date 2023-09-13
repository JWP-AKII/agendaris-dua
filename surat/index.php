<?php 
    $type = $_GET['type'];
    
    // Condition for type
    switch($type) {
        case "masuk":
            $sql = "SELECT s.*, s.id AS sid, b.* FROM surat s JOIN buku b ON s.buku_id = b.id WHERE s.status <> 'Selesai' ORDER BY s.id DESC";
            break;
            
        case "keluar":
            $sql = "SELECT s.*, s.id AS sid, b.* FROM surat s JOIN buku b ON s.buku_id = b.id WHERE s.status = 'Selesai' ORDER BY s.id DESC";
            break;

    }
    
    //Proses Query
    $data = mysqli_query($conn, $sql);

?>

<div class="main-title">
    <h1>Data Surat <?= ucfirst($type) ?></h1>
    <a href="index.php?page=surat-create" class="btn primary"><span class="fa fa-plus"></span> Buat Surat</a>
</div>
<table>
    <thead>
        <th>No</th>
        <th>Nomor Surat</th>
        <th>Tanggal Surat</th>
        <th>Nomor Agenda</th>
        <th>Tanggal Agenda</th>
        <th>Buku</th>
        <th>Status</th>
        <th>Action</th>
    </thead>
        <?php
            //Perulangan
            $no = 1;
            while ($result = mysqli_fetch_assoc($data)) {
        ?>
    <tr>
        <td align="center"> <?php echo $no++; ?> </td>
        <td> <?php echo $result['nomor_surat'] ?> </td>
        <td><?= strftime('%A, %d %B %Y', strtotime($result['tanggal_surat'])) ?></td>
        <td> <?php echo $result['nomor_agenda'] ?> </td>
        <td><?= strftime('%A, %d %B %Y', strtotime($result['tanggal_agenda'])) ?></td>
        <td> <?php echo $result['nama'] ?> </td>
        <td> <?php echo $result['status'] ?> </td>
        <td class="action">
            <a href="index.php?page=surat-show&id=<?= $result['sid'] ?>" class="btn success"><span class="fa fa-eye"></span></a>
        </td>
    </tr>

    <?php
    }
    ?>
</table>