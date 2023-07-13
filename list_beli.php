<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Data Pembelian</title>
</head>
<body>
        <div class="card mt-3">
            <div class="card-header bg-light">
                <h3 class="fs-7 fw-bold mt-3 text-center ">Data Pembelian</h3>
            </div>
        </div>


        
        <table class="table table-success table-striped">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                include 'koneksi.php';
                $dataku = mysqli_query($koneksi, "SELECT * FROM input");
                $no = 1;
                foreach ($dataku as $data) {
                    echo "<tr?>";
                    echo    "<td>".$no."</td>
                            <td>".$data['nama']."</td>
                            <td>".$data['alamat']."</td>
                            <td>".$data['nama_barang']."</td>
                            <td>".$data['harga']."</td>
                            <td>".$data['jumlah']."</td>
                            <td>".$data['total']."</td>";
                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
        <a class="btn btn-sm btn-success" href="input_data.php">Back</a>
</body>
</html>