<?php 
$sql = "SELECT * FROM buku ORDER BY id DESC";
$prosesQuery = mysqli_query($conn, $sql);
?>

<div class="main-title">
    <h1>Buku</h1>
    <a href="index.php?page=buku-create" class="btn primary"><span class="fa fa-plus"></span> Tambah Buku</a>
</div>

<div class="table">
   <table border="1">
        <thead>
            <th>No.</th>
            <th>Nama Buku</th>
            <th>Action</th>
        </thead>

        <tbody>
        <?php
            $no = 1;
            while ($result = mysqli_fetch_object($prosesQuery)) {
        ?>
             <tr>
                <td align="center"><?php echo $no++?></td>
                <td><?= htmlspecialchars($result->nama)?></td>
                <td class="action">
                    <a href="index.php?page=buku-update&id=<?= $result->id ?>" class="btn success"><span class="fa fa-edit"></span></a>
                    <a class="btn danger" onclick="deleteConfirm('index.php?page=buku-destroy&id=<?= $result->id ?>')"><span class="fa fa-trash"></span></a>
                </td>
            </tr>
        <?php
        }
        ?>
        </tbody>
   </table>
</div>
</body>

