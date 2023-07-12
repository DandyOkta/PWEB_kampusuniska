<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan Dosen</title>

    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h1 align="center">Laporan Data Dosen</h1>
    <table border=1 width="100%" cellpadding="5">
        <thead>
            <tr>
                <th>NIDN</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'connection.php';
            $query = mysqli_query($con, "SELECT * FROM dosen");

            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $data['nidn']; ?></td>
                    <td><?php echo $data['nama_lengkap']; ?></td>
                    <td><?php echo $data['jenis_kelamin']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['telepon']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>