<?php
  include "koneksi.php";
  ob_start();

  $sqls = "SELECT * FROM pesan";
  $hasil = mysqli_query($conn,$sqls);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Bandung Lautan Api</title>
  </head>

  <div class="pemandangan">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand nav1" href="https://instagram.com/onepplg?igshid=YzAwZjE1ZTI0Zg=="><img src="kidut.jpg" alt=""width="79px" style="border-radius: 50%;"></a>
          <div class="collapse navbar-collapse" id="navbarNav">      
            <ul class="navbar-nav ms-auto">
              <li class="nav-item pe-3">
                <a class="nav-link active text-white" aria-current="page" href="index.php"><b>HOME</b></a>
              </li>
              <li class="nav-item pe-3">
                <a class="nav-link text-white" href="#tokoh"><b>TOKOH</b></a>
              </li>
              <li class="nav-item pe-3">
                <a class="nav-link text-white" href="#sejarah"><b>SEJARAH</b></a>
              </li>       
              <li class="nav-item pe-3">
                <a class="nav-link text-white" href="#pesan"><b>COMMENT</b></a>
              </li>  
            </ul>     
        </nav>   
        <section id="home">
    <div class="jumbotron">
    <img src="logo.png " class="rounded mx-auto d-block" alt="...">
<br>
      <h1 align="center" class="fw-bolder text-white">Bandung Lautan Api</h1>
      <p  align="center"class="fw-bolder text-white">Peristiwa Bandung lautan Api</p>
    </div>
</section>
    </div>



<section id="tokoh" class= "bg-dark pb-5" >
    <div class="container">
    <div class="jumbotron">
    <div class="container">
  <div class="row">
        <div class="text-center">
          <h1 class="text-white pt-5">TOKOH</h1>
        </div>
        <div class="col-4">  
        <div class="card" style="width: 18rem;">
  <img src="toha.jfif" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Mohammad Toha merupakan seorang komandan Barisan Rakyat Indonesia—kelompok milisi pejuang di masa Perang Kemerdekaan Indonesia. Ia lahir di Bandung pada tahun 1927 dari pasangan suami-istri, Suganda dan Nariah. Di tahun 1929, ayah Toha meninggal dunia dan sang ibu pun menikah lagi dengan pamannya, Sugandi—adik Suganda)</p>
  </div>
</div>
        </div>
    <div class="col-4">
    <div class="card" style="width: 18rem;">
  <img src="nasution.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Nasution dilahirkan di Desa Hutapungkut, Kotanopan, Kabupaten Mandailing Natal, Sumatera Utara,[5] dari keluarga Batak Muslim.[6] Ia adalah anak kedua dan juga merupakan putra tertua dalam keluarganya.</p>
  </div>
</div>
    </div>
    <div class="col-4">
    <div class="card" style="width: 18rem;">
  <img src="sutan.jfif" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Dia adalah Sutan Sjahrir, seorang tokoh yang memperjuangkan kemerdekaan Indonesia dengan berani menentang kebijakan-kebijakan yang diterapkan oleh Belanda dan Jepang serta berusaha mewujudkan dan memperjungkan keadilan bagi seluruh rakyat Indonesia.</p>
  </div>
</div>
    </div>
</div>
    </div>
    </div>
   
</section>

<section id="sejarah">
<div class="container">
<div class="jumbotron">
   <div class="text-center">
          <h1>SEJARAH</h1>
        </div>
   </div>
   <div class="row">
   <h2>Sejarah Bandung Lautan Api</h2>
   
   <div class="col">
     <p>Bandung Lautan Api merupakan peristiwa pengosongan dan pembakaran kota Bandung agar tidak menjadi markas sekutu dan NICA (Netherlands Indies Civil Administration). Berikut rentetan peristiwanya mengutip buku IPS untuk kelas IX SMP oleh Nana Supriatna, dkk, Ringkasan Pengetahuan Sosial untuk SD dan MI oleh Rachmat dan situs Kemdikbud.

Baca artikel detikedu, "Peristiwa Bandung Lautan Terjadi Api Pada 24 Maret 1946.
</p>
<br>
<h2>Datangnya Pasukan Sekutu</h2>
<p>Pada tanggal 12 Oktober 1945, pasukan Sekutu di bawah Brigade MacDonald datang. Mereka memaksa warga Bandung untuk menyerahkan senjata yang diperoleh setelah melucuti tentara Jepang.

Situasi pecah saat orang-orang Belanda yang baru bebas dari kamp tahanan melakukan tindakan yang mengacaukan keamanan negara. TKR (Tentara Keamanan Rakyat) dan badan-badan perjuangan lainnya pun melakukan serangan kepada sekutu.

Para pejuang menyerang markas-markas sekutu di Bandung bagian utara, termasuk Hotel Homan dan Hotel Preanger yang menjadi markas besar bagi Sekutu. Kondisi ini menjadi awal dari peristiwa hangusnya Bandung

Baca artikel detikedu, "Peristiwa Bandung Lautan Terjadi Api Pada 24 Maret 1946, Begini Sejarahnya"</p>

<img src="Sejarah.jpg" alt="">
   </div>
   
   <div class="col">
     <h2>Ultimatum Pertama</h2>
     <p>Setelah penyerangan terjadi, sekutu menyampaikan ultimatum kepada Gubernur Jawa Barat untuk segera mengosongkan wilayah Bandung Utara. Hal itu harus dilaksanakan pada 29 November 1945 pukul 12.00 WIB.

Kota Bandung saat itu terbagi menjadi bagian urata dan selatan. Bandung bagian utara dikuasai sekutu sedangkan selatan adalah kekuasaan Indonesia. Pasukan Indonesia banyak mendirikan pos-pos gerilya di berbagai tempat

Baca artikel detikedu, "Peristiwa Bandung Lautan Terjadi Api Pada 24 Maret 1946</p>
<br>
<h2>Ultimatum Kedua</h2>
<p>Perlawanan Tentara Rakyat Indonesia (TRI), yang sebelumnya TKR, menyebabkan sekutu mengeluarkan ultimatum kedua. Kepada Perdana Menteri Syahrir, sekutu meminta semua masyarakat dan TRI mengosongkan seluruh Kota Bandung selambat-lambatnya pada 23 Maret 1946.

Sedangkan pasukan Indonesia diminta meninggalkan Bandung Selatan sejauh 10-11 km dari pusat kota. Demi pertimbangan politik dan keselamatan rakyat, pemerintah RI memerintahkan TRI dan pejuang lainnya mundur untuk mengosongkan Bandung selatan.

Tokoh-tokoh pejuang seperti Aruji Kartawinata, Suryadarma, dan Kolonel Abdul Haris Nasution sepakat mematuhi perintah pemerintah pusat. Namun, pejuang tidak mau menyerahkan Bandung selatan kepada musuh. Wilayah itu akhirnya dibumihanguskan setelah rakyat diungsikan.

Bangunan-bangunan yang diledakkan adalah Bank Rakyat Bandung, Kawasan Banceuy, Cicadas, Braga, Tegalega, hingga Asrama Tentara Rakyat Indonesia. Peristiwa bumi hangus ini dikenal dengan nama Bandung Lautan Api.

Hingga kini, tanggal 24 Maret diperingati dengan Hari Peringatan Bandung Lautan Api. Untuk mengenang peristiwa bersejarah ini, dibangun monumen setinggi 45 meter.

Mengutip laman Humas Kota Bandung, konstruksinya berbentuk tiga buah bambu yang menjadi penyulut kobaran api dan berwarna kuning keemasan. Monumen ini pun dinamakan Bandung Lautan Api.

Itulah sejarah mengenai peristiwa Bandung Lautan Api.</p>

<img src="ww.jpg" alt="">
<img src="ii.jpg" alt="">
   </div>
 </div>
</div>
</section>

<section id="pesan" class="bg-dark">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col text-white">
            <h2>Pesan</h2>
          </div>
        </div>
        <div class="row justify-content-center text-white pb-5">
          <div class="col-md-6">
            <form action="" method="post">
              <div class="mb-3">
                <label for="namauser" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="namauser" placeholder="Masukan Nama Lengkap" name="nama_lengkap" />
              </div>
              <div class="mb-3">
                <label for="pesanuser" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesanuser" name="pesan_user" rows="3"></textarea>
              </div>
              <button class="btn btn-primary" type="submit" name="submit">Kirim</button>
            </form>
          </div>
        </div>
        <div class="row pt-5">
          <?php while($row = mysqli_fetch_assoc($hasil)) { ?>
          <div class="col-md-4 pt-5">
            <div class="card">
              <div class="card-header">
                <h5>PESAN</h5>
              </div>
              <div class="card-body">
                <p>Nama  : <?= $row['nama']; ?></p>
                <p>Pesan : <?= $row['pesan']; ?></p>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
    <!--  -->

    <?php
            if(isset($_POST["submit"])) {
              $nama = $_POST['nama_lengkap'];
              $pesan = $_POST['pesan_user'];

              $sql = "INSERT INTO pesan (id,nama,pesan) VALUES (null,'$nama','$pesan')";
              $result = mysqli_query($conn,$sql);
              if($result) {
                // header("location:dataBarang.php");
                header("location:index.php");
            } else {
                echo "input data barang gagal";
            }
            }
          ?>

 









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>