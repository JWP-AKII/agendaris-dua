<?php 

    $s_cities = "SELECT * FROM cities ORDER BY id DESC";
    $q_s_cities = mysqli_query($conn, $s_cities);
?>

<div class="main-title">
    <h1>Cities</h1>
    <a href="index.php?page=city-create" class="btn primary"><span class="fa fa-plus"></span> Add new city</a>
</div>

<table border="1">
    <thead>
        <th>No.</th>
        <th>Nama</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php 
            $no = 1;
            while($data = mysqli_fetch_object($q_s_cities)) { ?>
                <tr>
                    <td align="center"><?= $no++ ?></td>
                    <td><?= htmlspecialchars($data->city) ?></td>
                    <td class="action">
                        <a href="index.php?page=city-update&id=<?= $data->id ?>" class="btn success"><span class="fa fa-edit"></span></a>
                        <a class="btn danger" onclick="deleteConfirm('index.php?page=city-destroy&id=<?= $data->id ?>')"><span class="fa fa-trash"></span></a>
                    </td>
                </tr>
            <?php }
        ?>
    </tbody>
</table>