<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet"  type="text/css" href="css/daftar_pelanggan.css">
    <title> Youwillbe</title>
</head>
<body>

<div class="container-fluid warna2">
   <div class="row"> 
        <div class="container-fluid warna">
        <!-- "warna" mengatur bagian warna header-->
            <div class="col-12" >
                    <!--"tengah"mengatur agar logo berada di tengah-->
                <img src="logo/logo_youwillbe.png"  class="img-fluid tengah" alt="logo" width="300px" > 
            </div>
                </div>
                </div>

        <!-- bagian pembuka dan isi pembuka -->
        <div class="col pembuka text-center font4">
            <b> Sangat senang bahwa Anda telah bergabung dengan kami. Selamat bergabung!<br>
        </div>

        <div class="row g-0 container-fluid warna2">
            <div class="col-md-8 text-center tengah2 ">
    <!-- bagian awal card sign up -->
    <div class="card font3 warna2" id="tb_daftar_pelanggan">
        <div class="card-header text-center font3">
            <p> Silakan isi form daftar terlebih Dahulu </p>
    </div>
        <p>
        <div class="card-body warna2">
            <div class="tb_daftar_pelanggan font3 text-center">
                <form action="simpan_pelanggan.php" method="POST" >
                    <input type="text" placeholder="nama" name="nama" required /><br>
                    <br>
                    <input type="text" placeholder="alamat" name="alamat" required /><br>
                    <br>
                    <input type="text" placeholder="telephone" name="telephone" required /><br>
                    <br>
                    <input type="email" placeholder="email" name="email" required /><br>
                    <br>
                    <input type="password" placeholder="password"name="password" required /><br>
                    <br>
                    <input type="submit" value="daftar" class="button btn btn-primary " />
                </form>
            </div>
            <p>
            <div class="card-body color3 isi">
                    <p class="card-text">Sudah punya akun? klik disini untuk <a href="pelanggan.php">login</a></p>
                    <a href="index.php"> <button class="button btn btn-primary text">Home</button></a>
                </div>
        </div>
    </div>















<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>


</body>

</html>