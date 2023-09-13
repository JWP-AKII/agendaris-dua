        <h1> DATA SURAT</h1>
        <a href="index.php?page=surat-create">Buat Surat</a>
        <table>
            <thead>
                <th>No</th>
                <th>Nomor Surat</th>
                <th>Tanggal Surat</th>
                <th>Pengirim</th>
                <th>Penerima</th>
                <th>Nomor Agenda</th>
                <th>Tanggal Agenda</th>
                <th>Buku</th>
                <th>Status</th>
            </thead>
                <?php
                    //Query
                    $sql = "SELECT * FROM surat ";
                    //Proses Query
                    $data = mysqli_query($conn, $sql);
                    //Perulangan
                    $id = 1;
                    while ($result = mysqli_fetch_assoc($data)) {
                ?>
            <tr>
                <td> <?php $id++; ?> </td>
                <td> <?php echo $result['nomor_surat'] ?> </td>
                <td> <?php echo $result['tanggal_surat'] ?> </td>
                <td> <?php echo $result['pengirim'] ?> </td>
                <td> <?php echo $result['penerima'] ?> </td>
                <td> <?php echo $result['nomor_agenda'] ?> </td>
                <td> <?php echo $result['tangal_agenda'] ?> </td>
                <td> <?php echo $result['buku_id'] ?> </td>
                <td> <?php echo $result['status'] ?> </td>
                <td>
                    <a href="update.php">Update</a>
                    <a href="destroy.php">Delete</a>
                </td>
            </tr>

            <?php
            }
            ?>
        </table>