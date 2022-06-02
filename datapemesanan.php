<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Pesanan</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{
            height: auto;
            background-image: url(assets/bg.webp);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .container{
            padding:30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="shadow-lg p-4 mb-5 bg-white rounded">
            <h3 align=center>DATA PEMBELIAN TIKET</h3>
            <table class="table mt-5">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nomor Identitas</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">No. Handphone</th>
                        <th scope="col">Kelas Penumpang</th>
                        <th scope="col">Tanggal Keberangkatan</th>
                        <th scope="col">Jumlah Penumpang</th>
                        <th scope="col">Jumlah Penumpang Lansia</th>
                        <th scope="col">Harga Tiket</th>
                        <th scope="col">Total Bayar</th>
                    </tr>
                </thead>
                <?php
                    include 'koneksi.php';
                    $data = mysqli_query($db,"select * from pesan");
                    while($d = mysqli_fetch_array($data)){
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $d['id'];?></td>
                        <td><?php echo $d['nama'];?></td>
                        <td><?php echo $d['hp'];?></td>
                        <td><?php echo $d['kelas'];?></td>
                        <td><?php echo $d['jadwal'];?></td>
                        <td><?php echo $d['penumpang'];?></td>
                        <td><?php echo $d['lansia'];?></td>
                        <td><?php echo $d['harga'];?></td>
                        <td><?php echo $d['total'];?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>