<!doctype html>
<html lang="en">
  <head>
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
            padding: 100px;
        }
    </style>
    <title>CRUD Sederhana</title>
  </head>
  <body>
    <div class="container">
        <div class="shadow-lg p-5 mb-5 bg-white rounded">
            <h3 align=center>PESAN TIKET</h3>
            <form class="mt-5" method="POST" action="cekpesanan.php">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">Nomor Identitas</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="id" name="id">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hp" class="col-sm-2 col-form-label">No. Handphone</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="hp" name="hp">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kelas" class="col-sm-2 col-form-label">Kelas Penumpang</label>
                    <div class="col-sm-10">
                        <select class=custom-select name=kelas id="kelas">
                            <option value="Bus Ekonomi">--- Pilih Kelas ---</option>
                            <option value="Bus Ekonomi">Bus Ekonomi</option>
                            <option value="Bus Bisnis">Bus Bisnis</option>
                            <option value="Bus Eksekutif">Bus Eksekutif</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="date" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                    <input type="date" class="form-control" id="date" name="date">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penumpang" class="col-sm-2 col-form-label">Jumlah Penumpang</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="penumpang" name="penumpang">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lansia" class="col-sm-2 col-form-label">Jumlah Penumpang Lansia</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="lansia" name="lansia">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga Tiket</label>
                    <div class="col-sm-10">
                        <p id="harga" ></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="total" class="col-sm-2 col-form-label">Total Bayar</label>
                    <div class="col-sm-10">
                        <p id="total"></p>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-warning mr-5" onclick="hitung()">Hitung</button>
                    <input class="btn btn-success" type="submit" id="pesan" value="Pesan">
            </form>
                <form action="index.php" method="post">
                    <input class="btn btn-danger ml-5" type="submit" id="cancel" value="Cancel">
                </form>
                </div>
                <script>
                    
                    var price;
                    var total;
                    var diskon;
                    var tampilHarga = document.getElementById('harga');
                    var tampilTotal = document.getElementById('total');
                    var selectKelas = document.getElementById('kelas');
                    console.log('test')
                    selectKelas.addEventListener('change', function(){
                        if(selectKelas.value == "Bus Ekonomi"){
                            price = 35000;
                        }else if(selectKelas.value == "Bus Bisnis"){
                            price = 105000;
                        }else if(selectKelas.value == "Bus Eksekutif"){
                            price = 250000;
                        }
                    });
                    function hitung(){
                        var penumpang = document.getElementById('penumpang').value; 
                        var lansia = document.getElementById('lansia').value;
                        var totallansia;
                        diskon = lansia * (price * 0.1);
                        totallansia = (lansia*price) - diskon;
                        total = (penumpang * price) + totallansia;
                        tampilHarga.innerHTML = price;
                        tampilTotal.innerHTML = total;
                    }
                </script>
        </div>
    </div>
  </body>
</html> 