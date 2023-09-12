<?php 

    $id = $_GET['id'];

    $s_cities = "SELECT * FROM cities ORDER BY id DESC";
    $q_s_cities = mysqli_query($conn, $s_cities);

    $s_parent = "SELECT * FROM parents WHERE id = $id";
    $q_s_parent = mysqli_query($conn, $s_parent);
    $d_parent = mysqli_fetch_object($q_s_parent);

    if(isset($_POST['submit'])) {
        $father = ucwords($_POST['father']);
        $mother = ucwords($_POST['mother']);
        $phone = $_POST['phone'];
        $address = ucwords($_POST['address']);
        $city = $_POST['city'];

        $u_parent = "UPDATE parents SET father = '$father', mother = '$mother', phone_number = '$phone', address = '$address', city_id = '$city' WHERE id = $id";
        $q_u_parent = mysqli_query($conn, $u_parent);

        if($q_u_parent) {
            header("location:index.php?page=parent-index");
        }
    }
?>

<h1>Edit Data</h1>

<div class="form">
    <form action="" method="POST">
        <div class="input-group">
            <label for="father">Ayah</label>
            <input type="text" name="father" id="father" autocomplete="off" required value="<?= $d_parent->father ?>">
        </div>

        <div class="input-group">
            <label for="mother">Ibu</label>
            <input type="text" name="mother" id="mother" autocomplete="off" required value="<?= $d_parent->mother ?>">
        </div>

        <div class="input-group">
            <label for="phone">No. Telepon</label>
            <input type="number" name="phone" id="phone" autocomplete="off" min="0" required value="<?= $d_parent->phone_number ?>">
        </div>

        <div class="input-group">
            <label for="city">Kota</label>
            <select name="city" id="city">
                <?php 
                    while($d_city = mysqli_fetch_object($q_s_cities)) { ?>
                        <option value="<?= $d_city->id ?>" <?= ($d_parent->city_id == $d_city->id) ? "selected" : '' ?>><?= $d_city->city ?></option>
                    <?php }
                ?>
            </select>
        </div>

        <div class="input-group">
            <label for="address">Alamat</label>
            <textarea name="address" id="address" cols="30" rows="10"><?= $d_parent->address ?></textarea>
        </div>

        <div class="form-button">
            <button type="submit" name="submit" class="btn primary"><span class="fa fa-floppy-disk"></span> Simpan</button>
            <a href="index.php?page=city-index" class="btn danger"><span class="fa fa-xmark"></span> Cancel</a>
        </div>
    </form>
</div>