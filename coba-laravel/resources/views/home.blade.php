@extends('layouts.main')

@section('container')
<style>
    body {
        background-color: #74b47e
    }

    a {
        text-decoration: none
    }

    #cta p strong {
        text-shadow: 1px 0px 0px #fff
    }

    #cta p strong:hover {
        color: #fff;
        text-shadow: 2px 1px 0px #000000
    }
</style>
<!-- ======= Pengenalan ======= -->
<section id="hero" class="d-flex align-items-center" style="padding-top: 3rem">

    <div class="container rounded-top" style="background-color: #d5d67a">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-1 pt-lg-0 order-2 order-lg-1" style="padding-left: 2em" data-aos="fade-up" data-aos-delay="200">
          <h1 style="text-shadow: 1px 1px 0 #000000; color: #da4343">WELCOME TO BLOG PKL</h1>
          <h2 class="text-white">Ini adalah website blog post yang praktis dan sederhana for siswa/siswi yang sedang Ber PKL di <span class="text-dark" style="font-weight: 600">Telkom Regional IV</span> & tentu rulenya sangat simple.</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#rule" class="btn-get-started scrollto" style="margin-top: -20px; margin-bottom: 12px; text-decoration: none">Start Page</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ asset('img/logo-telkom.png') }}" class="img-fluid animated" alt="" width="450" height="450" style="margin-left: 20%;">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Rule ======= -->
    <section id="prestasi" class="prestasi section-bg shadow" style="margin-top: -2em">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3><strong><i class="fa-solid fa-hand-point-down"></i> ALUR PENGISIANNYA</strong></h3>
              <p>
                kami membuat rule ini, untuk <strong>mempermudah</strong> user yang ingin membuat postingan blog
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Register/Login account terlebih dahulu <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                        <ol>
                            <li>
                                Jika <strong>belum memiliki account</strong>, maka create terlebih dahulu tap button <strong>"LOGIN NOW"</strong> yang ada di navbar bagian header.
                                lalu <strong>dibawah</strong> form pengisian data Login terdapat kalimat <strong>"Buat Sekarang!"</strong> tap.
                                Maka user akan dibawa ke halaman Register account...
                            </li>
                            <li>
                                Jika <strong>sudah memiliki account</strong>, maka langsung <strong>LOGIN</strong> saja
                            </li>
                        </ol>
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Redirect ke halaman dashboard <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                        Jika user sudah <strong>Login</strong> atau <strong>Regist account</strong> maka akan langsung dibawa ke halaman dashboard
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span>  Create Blog Post  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                        <ol>
                            <li>
                                Jika sudah berada dihalaman dashboard, langkah selanjutnya untuk masuk ke button sidebar <strong>"My Posts"</strong>
                            </li>
                            <li>
                                Jika sudah masuk, ke halaman <strong>"My Posts"</strong> user tap button <strong>"Create new post"</strong> lalu akan dibawa ke halaman create blog post untuk user
                            </li>
                        </ol>
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>04</span>  Selesai Create Blog Post  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                        <ol>
                            <li>
                                Jika user sudah membuat Blog postnya, maka blog post yang sudah dibuat barusan masuk ke dalam halaman sidebar <strong>"My Posts"</strong> postingan user sudah tersimpan disitu.
                            </li>
                            <li>
                                Jika user mau melihat semua blog post user lain bisa tap link sidebar <strong>"HOME"</strong> yang berada dikiri layar dekstop user
                            </li>
                        </ol>
                    </p>
                  </div>
                </li>


              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("{{ asset('img/ICONS_BLOG.png') }}");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>


      </div>
    </section><!-- Akhir Rule -->


     <!-- ======= Collaborasi ======= -->
     <section id="Industri" style="background-color: #fff">
     <div class="text-center" style="margin-bottom: 1px;">
      <h1><i class="fa-solid fa-handshake-simple"></i> <strong>COLLABORASI</strong></h1>
     </div>

     <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{ asset('img/SMKN 1 PURWOKERTO.png') }}" alt="" width="80" height="500">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('img/logo_RPL.jpg') }}" alt="" width="60" height="500">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-8">
            <div class="portfolio-info">
                <h3><i class="fa-solid fa-school"></i>  SMKN 1 PURWOKERTO</h3>
              <ul>
                <li><strong>Category</strong> : Sekolah Kejuruan</li>
                <li><strong>Location</strong> : SMK Negeri 1 Purwokerto, Jl. DR. Soeparno No.29, Purwokerto Wétan, Purwokerto Timur, Kabupaten Banyumas, Jawa Tengah 53123</li>
                <li><strong>Instagram Resmi</strong> : <a href="https://instagram.com/smknegeri1purwokerto/">@smknegeri1purwokerto</a> <a href="https://www.instagram.com/smkn1purwokerto/">@smkn1purwokerto</a></li>
                <li><strong>Instagram Kelas</strong> : <a href="https://instagram.com/nemoclassmecone">@nemoclassmecone</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h4><i class="bi bi-pin-fill"></i> Gambaran Umum SMK NEGERI 1 PURWOKERTO</h4>
              <p>
                <strong>SMK NEGERI 1 PURWOKERTO</strong> yaitu sekolah menengah kejuruan, yang siap bekerja setelah lulus sekolah. <br>
                <strong>SMK NEGERI 1 PURWOKERTO</strong> berlokasi di Jl. DR. Soeparno No.29, Purwokerto Wétan, Purwokerto Timur, Kabupaten Banyumas, Jawa Tengah 53123. sekolah ini <strong>memiliki 7 program keahlian</strong> diantaranya yaitu RPL (Rekayasa Perangkat Lunak), BDP (Bisnis Daring & Pemasaran), OTKP (Otomasi Tata kelola Perkantoran), AKL (Akuntansi & Keuangan Lembaga), TKJ (Teknik Komputer & Jaringan), MM (Multi Media), PBS (Perbankan Syariah).
              </p>
            </div>
          </div>


          <div class="col-lg-4">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{ asset('img/JAVADWIPA.png') }}" alt="" width="60" height="500">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('img/logo_telkom.png') }}" alt="" width="80" height="500">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>


          <div class="col-lg-8">
            <div class="portfolio-info">
              <h3><i class="fa-solid fa-building"></i> TELKOM REGIONAL IV</h3>
              <ul>
                <li><strong>Category</strong> : Perusahaan Telekomunikasi </li>
                <li><strong>Location</strong> :  Jl. Pahlawan No.10, Pleburan, Semarang Selatan, Semarang City, Central Java 50249</li>
                <li><strong>Twitter Resmi</strong> : <a href="https://twitter.com/tamanmedia">@tamanmedia</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h4><i class="bi bi-pin-fill"></i> Gambaran Umum Telkom Regional IV</h4>
              <p>
                Kantor <strong>Telkom Regional IV</strong> merupakan Kantor Telkom yang menangani dan melayani layanan <strong>telekomunikasi</strong> untuk masyarakat di Provinsi <strong>Jawa Tengah dan Yogyakarta.</strong> Kantor Telkom Regional IV berada dibawah Kantor Pusat Telkom yang berada di Kota Bandung, sehingga setiap kegiatan yang dilakukan pada kantor Telkom Regional IV harus terkontrol oleh kantor pusat Telkom. Telkom menyediakan jasa telepon kabel tidak bergerak (Fixed Wire Line), jasa telepon nirkabel tidak bergerak (Fixed Wireless), jasa telepon bergerak (cellular), data dan internet, network, dan interkoneksi
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>
  </section><!-- Akhir Kelas Industri -->

    <!-- ======= Gallery Smecone ======= -->
    <section id="cta" class="cta" style="background-color: #808080">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start" style="padding-left: 2em">
            <h3 style="text-shadow: 1px 1px 0px #000000"><i class="fa-solid fa-images" style="color: rgb(76, 113, 212); text-shadow: 0px 1px 0px #fff;"></i> <strong style="color: rgb(240, 46, 46);">Gallery SMK NEGERI 1 PURWOKERTO</strong></h3>
          <P style="text-shadow: 1px 0px 0px #000000; font-size: 18px">
           <a href="https://www.banyumasan.my.id/2021/03/smk-negeri-1-purwokerto.html?m=1" class="text-dark"><strong class="text-center">SMK NEGERI 1 PURWOKERTO</strong></a> merupakan Sekolah Menengah Kejuruan (SMK) yang berlokasi di Jalan Dr. Soeparno No. 29 Purwokerto tepatnya di desa Purwokerto Wetan. Secara Administratif Masuk dalam wilayah Kecamatan Banyumas Kabupaten Banyumas Provinsi Jawa Tengah.
            Sekolah ini mulai berdiri pada tahun 1963, hingga saat ini telah memiliki 8 Jurusan di Bidang Teknik Komputer, Kesehatan dan Manajemen Bisnis.
            Adapun untuk Program Keahlian/Jurusan unggulan yaitu Rekayasa Perangkat Lunak, Teknik Komputer Dan Jaringan, Multi Media, Farmasi, Administrasi Perkantoran, Akuntansi, dan Pemasaran. <br>
            instagram :
          </P>

          <div class="link-school">
              <a href="https://instagram.com/smknegeri1purwokerto">@smknegeri1purwokerto</a> <a href="https://instagram.com/smkn1purwokerto">@smkn1purwokerto</a>
          </div>

          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="/">back to menu</a>
          </div>
        </div>

      </div>
    </section><!-- Akhir Gallery Smecone -->

    <!-- ======= Tim Kreatif ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><i class="bi bi-tools"></i> Create By</h2>
          <p>berikut sedikit pengenalan dari saya</p>
        </div>

        <div class="row">

          <!-- Rahmat -->
          <div class="col-lg-12 mt-4 mb-5 mt-lg-0">
            <div class="member d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{ asset('img/mattschool.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><i class="bi bi-person-bounding-box"></i> <a href="https://instagram.com/snturi_10" style="color: #37517e;">Rahmat Hidayat Sianturi</a></h4>
                <span>Full Stack & Web Development</span>
                <p><strong>Growth Mindset</strong></p>
                <div class="social">
                  <a href="#" class="whatsapp"><i class="ri-whatsapp-fill"></i></a>
                  <a href="https://instagram.com/snturi_10" class="instagram"><i class="ri-instagram-fill"></i></a>
                  <a href="https://youtube.com/channel/UCvDVgOR-r3G4_KhGSK7zIgg" class="youtube"> <i class="ri-youtube-fill"></i></a>
                  <a href="https://open.spotify.com/user/317t2fauhnc5gsgp73dc6fdanjau"  class="spotify"><i class="bi bi-spotify"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- Akhir Tim Kreatif -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="rounded-bottom">
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright My Project <strong>Matt.</strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://instagram.com/snturi_10">Rahmat Hidayat Sianturi</a> <i class="bi bi-apple"></i>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection


