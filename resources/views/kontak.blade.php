<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<title>AVERIN</title>
<link rel="shortcut icon" href="{{('asset/images/favicon.png')}}" type="image/png">

<!-- Bootstrap core CSS -->
<link href="{{('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

<!-- Additional CSS Files -->
<link rel="stylesheet" href="{{('asset/css/fontawesome.css')}}">
<link rel="stylesheet" href="{{('asset/css/templatemo-space-dynamic.css')}}">
<link rel="stylesheet" href="{{('asset/css/animated.css')}}">
<link rel="stylesheet" href="{{('asset/css/owl.css')}}">
<!--

TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->
</head>
<script>
    document.addEventListener("contextmenu", function (e) {
        e.preventDefault();
    });

    document.addEventListener("keydown", function (e) {
        if (e.key === "F12" || e.keyCode === 123) {
            e.preventDefault();
        }
    });
    $(document).keydown(function(e){ 
    if(e.which === 123){ 
 
       return false; 
 
    } 
 
}); 
</script>
<body oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">

  <!-- ***** Preloader Start ***** -->
  <!-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> -->
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="{{ url('/') }}" class="logo">
              <h4><img src="{{('asset/images/logo_averin.png')}}" alt="team meeting" height="70px"> </h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="{{ url('/') }}">BERANDA</a></li>
              <li class="scroll-to-section"><a href="{{ url('/tentang_kami') }}">TENTANG KAMI</a></li>
              <li class="scroll-to-section"><a href="{{ url('/produk') }}" >PRODUK</a></li>
              <li class="scroll-to-section"><a href="{{ url('/kontak') }}"  class="active">KONTAK</a></li>
              <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">LOGIN APLIKASI</a>
                <div class="dropdown-content">
                                     
                                        <a href="https://sirs.co.id" target="_blank">Averin SIRs</a>
                                        <a href="https://d-medis.id" target="_blank">D-Medis</a>
                                        <a href="https://a-dokter.id" target="_blank">a-Dokter</a>
                                        <a href="https://rme.sirs.co.id" target="_blank">Gateway RME-RS</a>
                                        <a href="https://rskita.id" target="_blank">AHS SIRs</a>
                                        <a href="https://payroll.sirs.co.id" target="_blank">SIMPONI</a>
                                        <a href="https://lafkespri.org" target="_blank">SIM Akreditasi</a>
                                        <a href="https://kreki.org" target="_blank">Kreki-119</a>
                                        <a href="https://cnot.co.id" target="_blank">e-Notaris</a>
                                        <a href="https://d-medis.id" target="_blank">Averin e-Klinik</a>
                                        <a href="https://pbfku.averin.co.id" target="_blank">PBFKU</a>
                                        <a href="https://sam.sirs.co.id" target="_blank">SAM</a>
                                        <a href="" target="_blank">LaboSS</a>
                                        <a href="" target="_blank">SIDIK</a>
                                        <a href="" target="_blank">AMS Corporate</a>
                                        <a href="" target="_blank"></a>
                                    </div>
              </li>
              <li class="scroll-to-section"><div class="main-red-button"><a href="#contact">Contact Now</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>ADA YANG INGIN ANDA TANYAKAN KEPADA KAMI?</h2>
            <p>Silahkan hubungi kami dengan cara menekan tombol berikut.</p>
            <p></p>
            <h2>PT. AVERIN INFORMATIKA TEKNOLOGI</h2>
            <p>PT. Averin telah berdiri sejak tahun 1999 untuk menyediakan solusi IT untuk mitra kerja dengan teknologi terkini yang tepat guna sehingga dapat mempermudah alur kerja para mitra.</p>
            <div class="phone-info">
              <h4><span><i class="fa fa-users"></i> <a href="#">Gedung Graha Pulo, Ground Floor, Jl. Warung Buncit Raya No.89, RT.6/RW.3, Kalibata, Pancoran, Kota Jakarta Selatan. 12740</a></span></h4>
            </div>
            <div class="phone-info">
              <h4><span><i class="fa fa-phone"></i> <a href="#">+6221 79186448</a></span></h4>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                </fieldset>
              </div>
            </div>
            <div class="contact-dec">
              <img src="{{('asset/images/contact-decoration.png')}}" alt="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
          <p>© Copyright PT Averin Informatika. All Rights Reserved. 
        </div>
      </div>
    </div>
  </footer>
  <!-- Scripts -->
  <script src="{{('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{('asset/js/owl-carousel.js')}}"></script>
  <script src="{{('asset/js/animation.js')}}"></script>
  <script src="{{('asset/js/imagesloaded.js')}}"></script>
  <script src="{{('asset/js/templatemo-custom.js')}}"></script>
</body>
</html>