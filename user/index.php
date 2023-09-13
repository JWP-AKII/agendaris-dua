<?php 
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $jabatan = $_POST['jabatan'];
    }
    //query panggil data
    $s_user = "SELECT * FROM user ORDER BY id DESC";
    $q_s_user = mysqli_query($conn, $s_user);
?>

<div class="main-title">
    <h1>Welcome User!</h1>
    <a href="index.php?page=user-create" class="btn primary"><span class="fa fa-plus"></span>Add User</a>
</div>

<table border="1">
    <thead>
        <th>No.</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php 
            $no = 1;
            while($data = mysqli_fetch_object($q_s_user)) { ?>
                <tr>
                    <td align="center"><?= $no++ ?></td>
                    <td><?= htmlspecialchars($data->username) ?></td>
                    <td><?php echo $data->jabatan?></td>
                    <td class="action">
                        <a href="index.php?page=user-update&id=<?= $data->id ?>" class="btn success"><span class="fa fa-edit"></span></a>
                        <a class="btn danger" onclick="deleteConfirm('index.php?page=user-destroy&id=<?= $data->id ?>')"><span class="fa fa-trash"></span></a>
                    </td>
                </tr>
            <?php }
        ?>
    </tbody>
</table>