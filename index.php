<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laman Utama</title>
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script>
        function animateCard(card) {
        card.classList.add("animated");
    }
    </script> 

    <style>
    .info-absen{
        background-color: #001E42;
        text-align: center;
        justify-content: center;
        margin-top: 12rem;
        display: flex;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    .info-absen h1{
        margin-top: 70px;
        margin-bottom: 30px;
    }
    .info-absen2{
        background-color: #001E42;
        text-align: center;
        justify-content: center;
        gap: 25px;
        display: flex;
    }
    .info-absen3{
        background-color: #001E42;
        text-align: center;
        justify-content: center;
        gap: 25px;
        display: flex;
    }
    .card {
        background-color: white;
        transition: transform 0.3s ease;
        margin-top: 40px
    }

    .card.animated {    
        animation-name: myAnimation;
        animation-duration: 1s;
    }
   .card {
        display: flex;
        width: 300px;
        height: 270px;
        font-style: italic;
        background-color: white;
        transition: transform 0.3s ease;
        border-radius: 10%;
    }
    .img{
        margin-top: 20px;
        width: 550px;
        height: 100px;
    }
    .poto{
        margin-right: 40px;
        margin-bottom: 40px;
        border-radius: 10%;
    }
    .dep1{
        margin-left:70px;
        margin-top: 60px;
    }
    .dep2{
        margin-left: 70px;
    }
    .deskripsi{
        margin-left: 70px;
        margin-top: 30px;

    }
    .card h1{
        font-size: 30px;
    }
    .card:hover {
        transform: scale(1.1);
        }
    .container h1{
        margin-top: 100px;
    }
    .gambar{
        margin-top: 20px;
        width: 5rem;
        height: 2rem;   
        margin: 11rem;
    }
    .header2{
        padding: 100px;
    }
    .cara .member {
        position: relative;
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
        padding: 30px;
        border-radius: 5px;
        background: #fff;
        height: 100%; 
    }

    .cara .member .member-info {
        padding-left: 30px;
    }

    .cara .member h4 {
        font-weight: 700;
        margin-bottom: 5px;
        font-size: 20px;
        color: #37517e;
    }

    .cara .member p {
        margin: 10px 0 0 0;
        font-size: 14px;
    }
    footer {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
        color: #666;
    }
    </style>
</head>
<body>


<nav class="navbar">
  <div class="container-md">   
    <h2><b>Absen<span>Khan.id</span></b></h2>
    <h2><a href="login.php" name="logut" <button type="button" class="btn btn-success"><b>logut</b></a></h2>
  </div>
</nav>
<hr>

<div class="d-flex justify-content-center">
        <div class="justify-content-left">
            <h5 class="dep1"><b>Welcome To</b></h5>
            <h1 class= "dep2"><b>Absen<span>Khan.id</span></b></h1>
            <p class="deskripsi" ><b>Suatu trobosan baru buatan anak bangsa yang dapat digunakan oleh seluruh jenjang sekolah dalam menginput data kehadiran siswa ataupun guru , website ini pula membuat sebuah kemudahan bagi guru dalam menginput data absensi siswa selama pembelajaran berlangsung </b></p>
            <button type="button" class="btn btn-danger" style="margin-left: 70px"><a href="box.php" style="text-decoration: none; color: white;">Selengkapnya</a></button>
        </div>
        <div class="justify-content-right">
            <img src="https://ppdb.smkwikrama.sch.id/assets/landing%20page/images/Gedung.jpg" alt="" srcset=""class="poto" style=" width: 500px; height: 350px;">
        </div>
</div>


<div class="header">
<div class="content">
    <div class="info-absen">
        <div class="text-white">
            <H1><b>Absen di sini </b></H1>
            <p><b>Isilah sesuai dengan keterangan yang tertera </b></p>
    </div>
    </div>
    <div class="d-flex info-absen2" >
        <div class="card">
            <a href="hari.php"><img src="img/logo-back.png" class="img"></a>
            <h1><b>senin</b></h1>   
        </div>
        <div class="card">
            <a href="hari.php"><img src="img/logo-back.png" class="img"></a>
            <h1>Selasa</h1>
        </div>
        <div class="card">
            <a href="hari.php"><img src="img/logo-back.png" alt="" class="img"></a>    
            <h1>Rabu</h1>
        </div>
    </div>
    <div class="info-absen3">
        <div class="card mb-5">
            <a href="hari.php"><img src="img/logo-back.png" class="img"></a>
            <h1>kamis</h1>
        </div>
        <div class="card">
            <a href="hari.php"><img src="img/logo-back.png" class="img"></a>
            <h1>jumat</h1>
        </div>
    </div>
    </div>
</div>

<section id="cara" class="cara section-bg text-center ">
      <div class="container">

        <div class="section-title" style="margin-bottom: 4rem; margin-top: 6rem;">
          <h2>Cara Melakukan Absen siswa</h2>
          <p>Berikut Adalah Cara Melakukan Absen Untuk Membantu mempermudah guru dalam merekap absensi </p>
        </div>

        <div class="row">

          <div class="col-lg-6 ">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Isi Form Kehadiran</h4>
                <p>Isikan form pengisian yang disediakan di form Kehadira, isikan dengan keterangan anda dengan teliti.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Isikan Rayon dan Rombel </h4>
                <p>Isikan Rayon dan Rombel  yang akan anda inputkan, pastikan isi data dengan benar.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mb-5">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Upload Bukti Keterangan</h4>
                <p>Pilih motode keterangan dan upload bukti keterangan.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mb-5">
            <div class="member d-flex align-items-start ">
              <div class="member-info">
                <h4>Verifikasi Kehadiran</h4>
                <p>kehadiran anda akan di verifikasi oleh guru dan jika terverifikasi nama anda akan tampil.</p>
              </div>
            </div>
          </div>
      </div>
    </section>

<!-- Start Contact -->
<div class="overflow-hidden" style="background-color: #001E42; margin-top: 4rem;">
        <div class="row mx-5 py-5">
            <div class="col-md-4">
                <div class="row ">
                    <div class="col-12 mb-3">
                        <a class="navbar-brand d-flex align-items-center">
                            <img src="data:image/png;base64,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" class="img-fluid me-2" width="70" height="70" alt="" style="border-radius:50%;">
                            <h6 class="fw-bolder text-white">SMK WIKRAMA <br> BOGOR</h6>
                        </a>
                    </div>
                    <div class="col-12 text-white">
                        <h6>Alamat</h6>
                        <p>
                            Jl. Raya Wangun<br>
                            Kelurahan Sindangsari<br>
                            Bogor Timur 16720</p>
                        <p class="mb-4">
                            Telepon <br>
                            0251-8242411 / <br>
                            082221718035 (Whatsapp)
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 text-white">
                <h6 class="fw-bolder">Tentang Wikrama</h6>
                <ul class="px-4 py-1">
                    <li class="py-1">Sejarah</li>
                    <li class="py-1">Peraturan Sekolah</li>
                    <li class="py-1">Rencana Strategi & Prestasi</li>
                    <li class="py-1">Yayasan</li>
                    <li class="py-1">Struktur Organisasi</li>
                    <li class="py-1">Cabang</li>
                    <li class="py-1">Penghargaan</li>
                    <li class="py-1">Kerjasama</li>
                </ul>
            </div>
            <div class="col-md-4  mt-3">
                <h6 class="fw-bolder text-white mb-3">Kirim Pesan</h6>
                <div class="mb-3">
                    <input type="text" placeholder="Name" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="email" placeholder="Email" class="form-control">
                </div>
                <div class="mb-">
                    <textarea placeholder="Pesan Anda" class="form-control"></textarea>
                    <button class="btn btn-warning btn-hero mt-3">Submit</button>
                </div>
            </div>
            <p class="text-center text-white" style="font-size: small; margin-top: 100px">This is the footer Copyright 2023, My Company.</p>
        </div>
    </div>
    <!-- End Contact -->    
    
</body>
</html>


