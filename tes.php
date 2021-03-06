<?php
require_once 'admin/database/init.php';
use Services\ServicesManager as SM;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Website Pontren Darul Muttaqin" />
    <meta name="author" content="Azzarnuji" />
    <title>Pontren Darul Muttaqin</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Aguafina+Script" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.css" integrity="sha256-yydPR4I9kVTwVawkyOisG2g5biRQnEpf2e4wWlidxZE=" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/user.js"></script>
</head>
<style>
    .text{
        color: #e2f517;
        font-family: Aguafina Script;
        font-size: 25px;
        text-align: justify;
        transform: translate(2px,6px);
    }
    .text2{

        /* font-family: Aguafina Script; */
        font-size: 20px;
        text-align: center;
        transform: translate(2px,6px);
    }
    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
    }
</style>
<body id="page-top">
<?php if (isset($_GET['statuscode'])):?>
    <?php if($_GET['statuscode'] == "berhasil"):?>
        <script>
            $(document).ready(function(){
                mulai();
            })
            function mulai(){
                Swal.fire(
                    'Pesan Terikirim',
                    'Terimakasih :)',
                    'success'
                );
            };
        </script>
    <?php elseif($_GET['statuscode'] == "gagal"):?>
        <script>
            $(document).ready(function(){
                mulai();
            })
            function mulai(){
                Swal.fire(
                    'Pesan Gagal Terkirim',
                    'Ulangi Kembali :(',
                    'error'
                );
            };
        </script>
    <?php endif;?>
<?php endif;?>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <!-- <a class="navbar-brand" href="#page-top"><img src="assets/img/ponpes.svg" alt="..." /></a> -->
        <p class="text">Darul Muttaqin </p>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="#services">Sistem Pengajian</a></li>
                <li class="nav-item"><a class="nav-link" href="#portfolio">Gallery Pontren</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link" href="#team">Pendiri Pontren</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Hubungi Kami</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Welcome To Pontren Darul Muttaqin</div>
        <div class="masthead-heading text-uppercase">Ahlan Wa Sahlan</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="#services">Sistem Pengajian</a>
    </div>
</header>
<!-- Services-->
<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Sistem Pengajian</h2>
            <h3 class="section-subheading text-muted">Mengusung Sistem Pontren Modern, Namun Tidak Terlepas Dengan Kitab Kuning </h3>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-book fa-stack-1x fa-inverse"></i>
                        </span>
                <h4 class="my-3">Kitab Kuning</h4>
                <p class="text-muted">Ponpes Darul Muttaqin Masih Menggunakan Metode Sistem Salafi Yang Mana Sistem Salafi Tersebut Menggunakan Kitab Kuning Untuk Pengajaran Santri</p>
            </div>
            <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-brain fa-stack-1x fa-inverse"></i>
                        </span>
                <h4 class="my-3">Penghafalan</h4>
                <p class="text-muted">Para Santri Di-Didik Untuk Menghafal Dan Mengingat Pelajaran Yang Telah Di Ajarkan Terkhusus Al-Qur'an Dan Kitab Kuning.</p>
            </div>
            <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-comments fa-stack-1x fa-inverse"></i>
                        </span>
                <h4 class="my-3">Diskusi</h4>
                <p class="text-muted">Para Santri Di-Didik Untuk Diskusi Tentang Suatu Masalah Dan Memecahkan Masalah Seputar Agama.</p>
            </div>

        </div>
    </div>
</section>
<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Gallery Pontren Darul Muttaqin</h2>
            <h3 class="section-subheading text-muted">Foto Seputar Pondok Dan Kegiatan Pondok.</h3>
        </div>
        <div class="row">

            <div class="col-lg-6 col-sm-8 mb-5">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/pondok.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Pontren Darul Muttaqin</div>
                        <div class="portfolio-caption-subheading text-muted">Tampak Depan</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-8 mb-5">
                <!-- Portfolio item 2-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/sekolah.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Sekolah MTs,SMA Darul Muttaqin</div>
                        <div class="portfolio-caption-subheading text-muted">Sekolah Pontren Darul Muttaqin</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-8 mb-5">
                <!-- Portfolio item 2-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/mi.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Sekolah MI Darul Muttaqin</div>
                        <div class="portfolio-caption-subheading text-muted">Sekolah Pontren Darul Muttaqin</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-8 mb-5">
                <!-- Portfolio item 2-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/siswami.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Siswa Dan Santri MI Darul Muttaqin</div>
                        <div class="portfolio-caption-subheading text-muted">Siswa Dan Santri MI Darul Muttaqin</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-8 mb-5">
                <!-- Portfolio item 3-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/02.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Santri Putra Darul Muttaqin</div>
                        <div class="portfolio-caption-subheading text-muted">Acara PHBI Pontren Darul Muttaqin</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-8 mb-5 mb-lg-0">
                <!-- Portfolio item 4-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/01.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Santri Putri Darul Muttaqin</div>
                        <div class="portfolio-caption-subheading text-muted">Acara PHBI Pontren Darul Muttaqin</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-sm-12 mb-5 mb-lg-0">
                <!-- Portfolio item 4-->
                <div class="portfolio-item">
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Berita / Kegiatan Pondok Pesantren Darul Muttaqin</div>
                        <div class="portfolio-caption-subheading text-muted"></div>

                        <a href="https://kegiatan.pontrendarulmuttaqin.com/" class="btn btn-primary btn-mda">Berita / Kegiatan Pontren</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- About-->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Tentang Kami</h2>
            <h3 class="section-subheading text-muted">Latar Belakang Pontren Darul Muttaqin.</h3>
        </div>

        <style>
            .center{
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 20%;
                margin-bottom: 1rem;
                margin-top: -20px;
            }
            .center2{
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
            }
        </style>
        <div class="timeline-image"><img class="rounded-circle img-fluid center" src="assets/img/about/ypd.jpeg" alt="..." /></div>
        <div class="timeline-panel">
            <div class="timeline-heading">
                <h4 class="subheading text-center">Pondok Pesantren Darul Muttaqin</h4>
            </div>
            <div class="timeline-body"><p class="text-muted">Yayasan Darul Muttaqin (YAPIDA) pada awalnya adalah sebuah
                    Pondok Pesantren yang didirikan oleh Tokoh Agama Cibarusah
                    yaitu K.H. Saepulloh (Alm) pada tahun 1967, pada awalnya hanya
                    mengajarkan pelajaran agama dengan pengkajian kitab kuning,
                    namun hakikat pendidikan berupaya turut memberikan bekal agar
                    mampu tetap eksis dalam menghadapi tantangan hidup dan menciptakan lahirnya generasi yang seimbang dunia dan akhirat dengan
                    harapan aktifitas dunia menjadi ibadah.
                    Bertitik tolak dari itulah dan dalam rangka mencapai visi YAPIDA
                    ayahanda K.H. Dadang Saepulloh (Alm) beserta orang tua
                    K.H. Saepulloh (Alm) turut pula membuka pendidikan formal yaitu
                    MI, MTs dan SMA dengan tidak menghilangkan jati diri sebagai
                    pesantren. Mudah-mudahan Amanat orang tua kami bisa dijalankan
                    dengan sebaik-baiknya. YAPIDA menerapkan metode pembelajaran
                    berlandaskan Iman, Ilmu dan Tagwa serta mengedepankan Akhlaqul
                    Karimah
                    Terima kasih kepada masyarakat dan semua pihak yang telah
                    memberikan dukungan dan kepercayaan demi tegaknya agama
                    islam.</p>
            </div>
            <div class="timeline-heading mt-4">
                <h4 class="subheading text-center">Visi Yapida</h4>
            </div>
            <div class="timeline-body"><p class="text-muted text-center">"MEMBENTUK MANUSIA YANG MAMPU BERFIKIR ILMIAH, RELIGIUS DAN BERAKHLAQUL KARIMAH"</p>
            </div>
        </div>

    </div>
</section>
<!-- Team-->
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Para Pendiri Dan Penerus Pontren Darul Muttaqin</h2>

        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/team/ama.png" alt="..." />
                    <h4>Alm.Mama KH.Saepulloh</h4>
                    <p class="text-muted">Pendiri Pontren Sekaligus Yayasan Darul Muttaqin</p>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/team/akang2.jpg" alt="..." />
                    <h4>Alm.KH.Dadang Saepulloh</h4>
                    <p class="text-muted">Pendiri Sekaligus Penerus Yayasan Darul Muttaqin</p>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/team/hajiludi.png" alt="..." />
                    <h4>H.Ludi Azhari</h4>
                    <p class="text-muted">Penerus Pontren Dan Yayasan Darul Muttaqin Tahun 2020 - Sekarang</p>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Para Pendiri Dan  Penerus Pontren Dan Yayasan Darul Muttaqin .</p></div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="text-center mt-4">
            <h2 class="section-heading text-uppercase">Dewan Pengajar Pontren Darul Muttaqin</h2>

        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/team/bapa.jpg" alt="..." />
                    <h4>Ustadz.H.Abdul Azis</h4>
                    <p class="text-muted">Dewan Pengajar Yayasan Darul Muttaqin</p>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/team/ustadzacep.jpg" alt="..." />
                    <h4>Ustadz Acep Wahyudin</h4>
                    <p class="text-muted">Dewan Pengajar Yayasan Darul Muttaqin</p>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/team/ustadzakim.jpg" alt="..." />
                    <h4>Ustadz Arif Mustaqim</h4>
                    <p class="text-muted">Dewan Pengajar Yayasan Darul Muttaqin</p>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/team/ustadzjalal.jpg" alt="..." />
                    <h4>Ustadz Ahmad Jalaludin</h4>
                    <p class="text-muted">Dewan Pengajar Yayasan Darul Muttaqin</p>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/team/ustadzlucky.jpg" alt="..." />
                    <h4>Ustadz Lucky Hamzah</h4>
                    <p class="text-muted">Dewan Pengajar Yayasan Darul Muttaqin</p>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/team/ustadzsurya.jpg" alt="..." />
                    <h4>Ustadz Surya</h4>
                    <p class="text-muted">Dewan Pengajar Yayasan Darul Muttaqin</p>

                </div>
            </div>
            <div class="col-lg-12">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/team/ustadzbaedowi.jpg" alt="..." />
                    <h4>Ustadz Baedowi</h4>
                    <p class="text-muted">Dewan Pengajar Yayasan Darul Muttaqin</p>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/team/ustadzahnunuy.jpg" alt="..." />
                    <h4>Ustadzah.HJ. Nunuy Rohmah</h4>
                    <p class="text-muted">Dewan Pengajar Yayasan Darul Muttaqin</p>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/team/ustadzahnia.jpg" alt="..." />
                    <h4>Ustadzah Nia Ulumiah</h4>
                    <p class="text-muted">Dewan Pengajar Yayasan Darul Muttaqin</p>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Dewan Pengajar Yayasan Darul Muttaqin .</p></div>
        </div>
    </div>
</section>
<!-- Clients-->

<section class="page-section bg-light">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading">Dewan Pengajar MTs Dan SMA</h2>
        </div>
        <hr>
        <table class="table" id="guru">
            <thead class="table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pengajar</th>
                <th scope="col">Pendidikan Terakhir</th>
                <th scope="col">Tanggal Lahir</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $NO = 1;
            $getData = SM::getDataGuruAll();
            $data = $getData->data;
            ?>
            <?php if($data != "None"):?>
                <?php foreach ($data as $dt):?>
                    <tr>
                        <th scope="row"><?=$NO++;?></th>
                        <td><?=$dt['nama_guru'];?></td>
                        <td><?=$dt['pendidikan_terakhir'];?></td>
                        <td><?=$dt['tanggal_lahir'];?></td>
                    </tr>
                <?php endforeach;?>
            <?php else:?>
                <tr>
                    <td colspan="4"><h1>NO DATA</h1></td>

                </tr>
            <?php endif;?>
            </tbody>
        </table>

    </div>
</section>
<div class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-sm-6 my-3">
                <p class="text2">Yapida Cibarusah</p><a href="https://www.youtube.com/channel/UC8Wy3aLkFkbuuphmUjsfG9w"><img class="img-fluid img-brand d-block mx-auto center2" src="assets/img/logos/YouTube-Logo.wine.svg" alt="..." /></a>
            </div>
        </div>
    </div>
</div>
<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Hubungi Kami</h2>
            <h3 class="section-subheading text-muted">Hubungi Kami Jika Ada Pertanyaan Seputar Pontren Darul Muttaqin.</h3>
        </div>
        <div class="container">
            <form action="messages.php" method="POST">
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Anda Jika Ada">
                </div>
                <div class="mb-3">
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Anda">
                </div>
                <div class="mb-3">
                    <input type="number" name="number" class="form-control" id="exampleInputPassword1" placeholder="Nomor Telepon Anda">
                </div>
                <div class="mb-3">
                    <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Judul Pesan Anda">
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" name="msg" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Pesan</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

</section>


<!-- Footer-->
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-start">Copyright &copy; Pondok Pesantren Darul Muttaqin</div>
            <div class="col-lg-4 my-3 my-lg-0">
                <a class="btn btn-dark btn-social mx-2" href="https://www.youtube.com/channel/UC8Wy3aLkFkbuuphmUjsfG9w"><i class="fab fa-youtube"></i></a>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>
<!-- Portfolio Modals-->
<!-- Portfolio item 1 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Ponpes Darul Muttaqin</h2>
                            <p class="item-intro text-muted">Tampak Depan.</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/pondok.jpg" alt="..." />
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">

                                Kembali
                            </button>
                            <a href="assets/img/portfolio/pondok.jpg" download="" class="btn btn-warning btn-xl text-uppercase">Download Image</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Sekolah Darul Muttaqin</h2>
                            <p class="item-intro text-muted">Tampak Depan.</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/sekolah.jpg" alt="..." />
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">

                                Kembali
                            </button>
                            <a href="assets/img/portfolio/sekolah.jpg" download="" class="btn btn-warning btn-xl text-uppercase">Download Image</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Santri Putra Darul Muttaqin</h2>
                            <p class="item-intro text-muted">Tampak Depan.</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/02.jpg" alt="..." />
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">

                                Kembali
                            </button>
                            <a href="assets/img/portfolio/02.jpg" download="" class="btn btn-warning btn-xl text-uppercase">Download Image</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal 4 -->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Santri Putri Darul Muttaqin</h2>
                            <p class="item-intro text-muted">Tampak Depan.</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/01.jpg" alt="..." />
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">

                                Kembali
                            </button>
                            <a href="assets/img/portfolio/01.jpg" download="" class="btn btn-warning btn-xl text-uppercase">Download Image</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal 5 -->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Sekolah MI Darul Muttaqin</h2>
                            <p class="item-intro text-muted">Tampak Depan.</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/mi.jpg" alt="..." />
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">

                                Kembali
                            </button>
                            <a href="assets/img/portfolio/sekolah.jpg" download="" class="btn btn-warning btn-xl text-uppercase">Download Image</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal 6 -->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Sekolah MI Darul Muttaqin</h2>
                            <p class="item-intro text-muted">Tampak Depan.</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/siswami.jpg" alt="..." />
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">

                                Kembali
                            </button>
                            <a href="assets/img/portfolio/sekolah.jpg" download="" class="btn btn-warning btn-xl text-uppercase">Download Image</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JS-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<script src="js/datatables/jquery.dataTables.min.js"></script>
<script src="js/datatables/dataTables.bootstrap4.min.js"></script>

<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.js" integrity="sha256-bCfvkn7wlryDb0Z3q/8FlRsOvD3/hIHzV7TWvJvuXKc=" crossorigin="anonymous"></script>
</body>
</html>
