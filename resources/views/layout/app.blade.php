<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Universo Angola</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/logo.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
</head>

<body>
 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">
        <img src="{{asset('assets/img/logo.png')}}" alt="logotipo da universo Angola" class="logotipo_universo">
    </a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Início</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre</a></li>
          <li><a class="nav-link scrollto" href="#services">Serviços</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Galeria</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
          <li>
            <a class="getstarted scrollto" href="https://api.whatsapp.com/send?phone=244&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." target="_blank" title="Contactar pelo whatsapp">
                Fale Conosco
                <i class="bi bi-whatsapp text-success whatsapp_icon"></i>
            </a>
        </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Encontre Aqui Os Melhores Produtos e Serviços</h1>
          <h2>Alavanque o Nível da sua Empresa</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Encontrar Produtos / Serviços</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/why-us.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    @yield('content')
  </main>

  <footer id="footer">

       <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Universo Angola</h4>
            <p>
              Luanda, Angola<br>
              No Município de Belas,<br>
              <br><br>
              <strong>Telefone:</strong>+244 999-999-999<br>
              <strong>E-mail:</strong>geral@universo.ao<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Links Úteis</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Início</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Sobre Nós</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Serviços</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#gallery">Galeria</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contactos</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Desenvolvimento de Websites</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Consultoria</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nossas Redes Sociais</h4>
            <p>Encontra nos também nas redes sociais</p>
            <div class="social-links mt-3">
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Universo</span></strong>. Todos Direitos Reservado
      </div>
      <div class="credits">
        <a href="https://www.dn3-angola.com" target="_blank">DN3-Angola</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
