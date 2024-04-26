<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>JoywayID</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png" />
    <link rel="stylesheet" href="<?=base_url('assets/vendors/bootstrap/bootstrap.min.css')?>" />
    <link rel="stylesheet" href="<?=base_url('assets/vendors/fontawesome/css/all.min.css')?>" />
    <link rel="stylesheet" href="<?=base_url('assets/vendors/themify-icons/themify-icons.css')?>" />
    <link rel="stylesheet" href="<?=base_url('assets/vendors/linericon/style.css')?>" />
    <link rel="stylesheet" href="<?=base_url('assets/vendors/owl-carousel/owl.theme.default.min.css')?>"/>
    <link rel="stylesheet" href="<?=base_url('assets/vendors/owl-carousel/owl.carousel.min.css')?>" />
    <link rel="stylesheet" href="<?=base_url('assets/vendors/flat-icon/font/flaticon.css')?>" />
    <link rel="stylesheet" href="<?=base_url('assets/vendors/nice-select/nice-select.css')?>" />
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>" />
  </head>
  <body class="bg-shape">
    <!--================ Header Menu Area start =================-->
    <header class="header_area">
      <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container box_1620">
            <a class="navbar-brand logo_h" href="index.html"><h2>Droshipki'</h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
              <ul class="nav navbar-nav menu_nav justify-content-end">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item submenu dropdown">
                  <a href="#keunggulan" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Keunggulan</a>
					<ul>
						<li class="nav-item">
						  <a class="nav-link" href="#contact">Contact</a>
						</li>
					</ul>
				  
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact</a>
                </li>
              </ul>
              <div class="nav-right text-center text-lg-right py-4 py-lg-0">
                <a class="button" href="admin/pages/login/login.html">Login</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================Hero Banner Area Start =================-->
    <section class="hero-banner magic-ball">
      <div class="container">
        <div class="row align-items-center text-center text-md-left">
          <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
            <h1>Tambah Penghasilan Dengan Bergabung ke Platform Dropship</h1>
            <p>
              Mulai Bisnismu Tanpa Ribet! Platform Dropship Skincare untuk
              Pengusaha Muda yang Menginginkan Penghasilan Tambahan Tanpa Repot
              Urusan Produk, Packing, atau Pengiriman. Bergabung Sekarang dan
              Bangun Ekosistem Bisnismu!
            </p>
            <a class="button button-join button-hero mt-4" href "./admin/pages/login/register.html">Join Sekarang</a>
          </div>
          <div class="col-md-6 col-lg-7 col-xl-6 offset-xl-1">
            <img class="img-fluid" src="<?=base_url('assets/img/home/katalog.png')?>" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!--================Hero Banner Area End =================-->

    <!--================Service Area Start =================-->
    <section class="section-margin generic-margin" id="keunggulan">
      <div class="container">
        <div class="section-intro text-center pb-90px">
          <h2>Bingung cara mulai jualan?</h2>
          <p>Ikuti Tiga Langkah Mudah Dapatkan Penghasilan Bersama JoywayID</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="service-card text-center">
              <div class="service-card-img">
                <img class="img-fluid" src="<?=base_url('assets/img/home/buy.png')?>" alt="" />
              </div>
              <div class="service-card-body">
                <h3>Pilih Produk</h3>
                <p>Pilih produk sesuka anda yang laris terjual</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="service-card text-center">
              <div class="service-card-img">
                <img class="img-fluid" src="<?=base_url('assets/img/home/promotion.png')?>" alt="" />
              </div>
              <div class="service-card-body">
                <h3>Promosikan Produk</h3>
                <p>
                  Promosikan produk melalui channel sosial media, marketplace
                  atau di status Whatsapp Anda.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="service-card text-center">
              <div class="service-card-img">
                <img class="img-fluid" src="<?=base_url('assets/img/home/income.png')?>" alt="" />
              </div>
              <div class="service-card-body">
                <h3>Terima Income</h3>
                <p>
                  Dapatkan pesanan dari customer, serahkan pada kami untuk
                  packing dan pengirimannya. Anda tinggal terima incomenya saja
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================Service Area End =================-->

    <!--================About Area Start =================-->
    <section class="bg-gray section-padding magic-ball magic-ball-about">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-6 mb-4 mb-md-0">
            <div class="about-img">
              <img class="img-fluid" src="<?=base_url('assets/img/home/community.png')?>" alt="" />
            </div>
          </div>
          <div class="col-lg-5 col-md-6 align-self-center about-content">
            <h2>Tumbuh Bersama Komunitas</h2>
            <p>
              Make she'd moved divided air. Whose tree that replenish tone hath
              own upon them it multiply was blessed is lights make gathering so
              day dominion so creeping air was made.
            </p>
            <a class="button" href="#">Learn More</a>
          </div>
        </div>
      </div>
    </section>
    <!--================About Area End =================-->

    <!--================Tour section Start =================-->
    <section class="section-margin pb-xl-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="tour-card">
              <img
                class="card-img rounded-0"
                src="./joyway/images/foto-produk/CLh 5.png"
                alt=""
              />
              <div class="tour-card-overlay">
                <div class="media">
                  <div class="media-body">
                    <h4>Collastar</h4>
                    <small>5 Sachets</small>
                    <p>We proper guided our tourist</p>
                  </div>
                  <div class="media-price">
                    <h4 class="text-primary">Rp.250,0000</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="row">
              <div class="col-lg-10 offset-lg-1">
                <div class="tour-content">
                  <h2>Product yang Tersedia</h2>
                  <p>
                    Make she'd moved divided air. Whose tree that hath own upon
                    them it multiply was blessed
                  </p>
                </div>
              </div>
            </div>

            <div class="tour-card">
              <img class="card-img rounded-0"
                src="<?=base_url('assets/images/foto-produk/csat.jpg')?>"
                alt=""
              />
              <div class="tour-card-overlay">
                <div class="media">
                  <div class="media-body">
                    <h4>C-Stick</h4>
                    <small>25% Vit C</small>
                    <p>We proper guided our tourist</p>
                  </div>
                  <div class="media-price">
                    <h4 class="text-primary">Rp.230,000</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-7">
            <div class="tour-card">
              <img class="card-img rounded-0" src="<?=base_url('assets/images/foto-produk/DK.jpg')?>" alt=""/>
              <div class="tour-card-overlay">
                <div class="media">
                  <div class="media-body">
                    <h4>Dream Kissed</h4>
                    <small>Body Serum</small>
                    <p>We proper guided our tourist</p>
                  </div>
                  <div class="media-price">
                    <h4 class="text-primary">Rp.234,000</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-5">
            <div class="tour-card">
              <img
                class="card-img rounded-0"
                src="<?=base_url('assets/joyway/images/foto-produk/SKS Travel4.png')?>"
                alt=""
              />
              <div class="tour-card-overlay">
                <div class="media">
                  <div class="media-body">
                    <h4>Snow Kissed</h4>
                    <small>Travel Size</small>
                    <p>We proper guided our tourist</p>
                  </div>
                  <div class="media-price">
                    <h4 class="text-primary">Rp.234,500</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================Tour section End =================-->

    <!--================Blog section Start =================-->
    <section class="section-padding bg-gray">
      <div class="container">
        <div class="section-intro text-center pb-90px">
          <h2>JoywayID</h2>
          <h2>From our Blog</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card-blog">
              <img
                class="card-img rounded-0"
                src="<?=base_url('assets/img/blog/blog-1.png')?>"
                alt=""
              />
              <div class="card-blog-body">
                <a href="#">
                  <h4>
                    5 Tips Jitu untuk Manajemen Stok Barang yang Efektif &
                    Alasannya
                  </h4>
                </a>
                <ul class="card-blog-info">
                  <li>
                    <a href="#"
                      ><span class="align-middle"
                        ><i class="ti-notepad"></i></span
                      >Jan 03, 2018</a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><span class="align-middle"
                        ><i class="ti-comments-smiley"></i></span
                      >03 Comments</a
                    >
                  </li>
                </ul>
                <p>
                  Varius metus morbi ferme libero vehic on porta malesuada ut
                  interdu estmales torquent vehicula parturient
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card-blog">
              <img
                class="card-img rounded-0"
                src="<?=base_url('assets/img/blog/blog-2.png')?>"
                alt=""
              />
              <div class="card-blog-body">
                <a href="#">
                  <h4>10 Cara Riset Produk Terlaris Agar Omset Meningkat</h4>
                </a>
                <ul class="card-blog-info">
                  <li>
                    <a href="#"
                      ><span class="align-middle"
                        ><i class="ti-notepad"></i></span
                      >Jan 03, 2018</a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><span class="align-middle"
                        ><i class="ti-comments-smiley"></i></span
                      >03 Comments</a
                    >
                  </li>
                </ul>
                <p>
                  Varius metus morbi ferme libero vehic on porta malesuada ut
                  interdu estmales torquent vehicula parturient
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card-blog">
              <img
                class="card-img rounded-0"
                src="<?=base_url('assets/img/blog/blog-3.png')?>"
                alt=""
              />
              <div class="card-blog-body">
                <a href="#">
                  <h4>
                    7 Cara Membuat Webinar yang Sukses: Persiapan & Analisa
                  </h4>
                </a>
                <ul class="card-blog-info">
                  <li>
                    <a href="#"
                      ><span class="align-middle"
                        ><i class="ti-notepad"></i></span
                      >Jan 03, 2018</a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><span class="align-middle"
                        ><i class="ti-comments-smiley"></i></span
                      >03 Comments</a
                    >
                  </li>
                </ul>
                <p>
                  Varius metus morbi ferme libero vehic on porta malesuada ut
                  interdu estmales torquent vehicula parturient
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================Blog section End =================-->

    <!-- ================ start footer Area ================= -->
    <footer class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>About Agency</h6>
              <p>
                The world has become so fast paced that people don’t want to
                stand by reading a page of information to be they would much
                rather look at a presentation and understand
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>Navigation Links</h6>
              <div class="row">
                <div class="col">
                  <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Feature</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Portfolio</a></li>
                  </ul>
                </div>
                <div class="col">
                  <ul>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>Newsletter</h6>
              <p>
                For business professionals caught between high OEM price and
                mediocre print and graphic output.
              </p>
              <div id="mc_embed_signup">
                <form
                  target="_blank"
                  action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                  method="get"
                  class="subscription relative"
                >
                  <div class="input-group d-flex flex-row">
                    <input
                      name="EMAIL"
                      placeholder="Email Address"
                      onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'Email Address '"
                      required=""
                      type="email"
                    />
                    <button class="btn bb-btn">
                      <span class="lnr lnr-location"></span>
                    </button>
                  </div>
                  <div class="mt-10 info"></div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget mail-chimp">
              <h6 class="mb-20">InstaFeed</h6>
              <ul class="instafeed d-flex flex-wrap">
                <li><img src="<?=base_url('assets/img/instagram/i1.jpg')?>" alt="" /></li>
                <li><img src="<?=base_url('assets/img/instagram/i8.jpg')?>" alt="" /></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="footer-bottom">
          <div class="row align-items-center">
            <p
              class="col-lg-8 col-sm-12 footer-text m-0 text-center text-lg-left"
            >
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              All rights reserved | This template is made with
              <i class="fa fa-heart" aria-hidden="true"></i> by
              <a href="https://colorlib.com" target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            <div
              class="col-lg-4 col-sm-12 footer-social text-center text-lg-right"
            >
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-dribbble"></i></a>
              <a href="#"><i class="fab fa-behance"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="<?=base_url('assets/vendors/bootstrap/bootstrap.bundle.min.js')?>"></script>
    <script src="<?=base_url('assets/vendors/owl-carousel/owl.carousel.min.js')?>"></script>
    <script src="<?=base_url('assets/vendors/nice-select/jquery.nice-select.min.js')?>"</script>
    <script src="<?=base_url('assets/js/jquery.ajaxchimp.min.js')?>"></script>
    <script src="<?=base_url('assets/js/mail-script.js')?>"></script>
    <script src="<?=base_url('assets/js/skrollr.min.js')?>"></script>
    <script src="<?=base_url('assets/js/main.js')?>"></script>
  </body>
</html>
