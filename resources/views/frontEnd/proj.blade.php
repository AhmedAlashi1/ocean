<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- remix icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css"
    />
    <!-- css file -->
    <link rel="stylesheet" href="css/proj.css" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <!-- add website logo -->
    <link rel="icon" href="image/logo - title.png" />
    <title>Projects</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg">
        <div
          class="container-fluid d-flex align-items-center justify-content-between"
        >
          <img src="image/logo.png" alt="Logo" class="me-5" />
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse justify-content-center"
            id="navbarNav"
          >
            <div class="nav_back">
              <ul class="navbar-nav mb-lg-0 d-flex align-items-center">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">Service</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="proj.html">Projects</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="work.html">How it works</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="blog.html">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
              </ul>
            </div>
            <button href="#" class="btn connect ms-5 fw-bold fs-6">
              Connect
            </button>
          </div>
        </div>
      </nav>
      <!-- End navbar -->
    </header>
    <!-- End header -->

    <!-- Start Main -->
    <main>
      <!-- Start Section Portfolio -->
      <section class="portfolios" id="portfolio">
        <div class="main-title text-center mt-5 mb-5 position-relative">
          <h5>PROJECTS</h5>
          <h2 class="fw-bold">
            We have completed many <br />
            amazing projects that you <br />
            will not believe
          </h2>
        </div>
        <div class="category">
          <button data-filter="all" class="text-decoration-none">
            All Projects
          </button>
          <button data-filter=".category-a" class="text-decoration-none">
            Applications
          </button>
          <button data-filter=".category-b" class="text-decoration-none">
            Website
          </button>
          <button data-filter=".category-c" class="text-decoration-none">
            Design
          </button>
          <button data-filter=".category-d" class="text-decoration-none">
            content
          </button>
          <button data-filter=".category-e" class="text-decoration-none">
            Motion graphics
          </button>
        </div>

        <div class="portfolio_image">
          <div class="portfolio_img portfolio1 mix category-b">
            <img src="image/portfolio/portfolio1.png" alt="" />
          </div>

          <div class="portfolio_img portfolio2 mix category-a">
            <img src="image/portfolio/portfolio2.png" alt="" />
          </div>

          <div class="portfolio_img portfolio3 mix category-a">
            <img src="image/portfolio/portfolio3.png" alt="" />
          </div>

          <div class="portfolio_img portfolio4 mix category-c category-d">
            <img src="image/portfolio/portfolio4.png" alt="" />
          </div>

          <div class="portfolio_img portfolio5 mix">
            <img src="image/portfolio/portfolio5.png" alt="" />
          </div>

          <div class="portfolio_img portfolio6 mix category-c">
            <img src="image/portfolio/portfolio6.png" alt="" />
          </div>

          <div class="portfolio_img portfolio6 mix category-c">
            <img src="image/portfolio/portfolio5.png" alt="" />
          </div>

          <div class="portfolio_img portfolio6 mix category-c">
            <img src="image/portfolio/portfolio4.png" alt="" />
          </div>
        </div>
      </section>
      <!-- End Section Portfolio -->

      <!-- Start Section Form -->
      <section
        class="digest-section d-flex align-items-center justify-content-center"
      >
        <div
          class="container d-flex flex-column flex-md-row align-items-center justify-content-center"
        >
          <div class="astronaut-img mb-4 mb-md-0">
            <img src="image/space-man-nbg.png" alt="Astronaut" />
          </div>
          <div class="digest-content text-center text-md-start">
            <h2 class="mb-5">Join our weekly digest</h2>
            <form class="input-group">
              <input
                type="email"
                class="form-control"
                placeholder="Enter Your Mail..."
                required
              />
              <button type="submit" class="btn btn-primary">GET STARTED</button>
            </form>
          </div>
        </div>
      </section>
      <!-- End Section Form -->
    </main>
    <!-- End main section -->

    <!-- Start Footer -->
    <footer class="footer-section">
      <div
        class="container d-flex flex-column flex-md-row justify-content-between align-items-start"
      >
        <!-- Logo and Description -->
        <div class="footer-logo">
          <img src="image/logo.png" alt="Ocean Logo" class="mb-4" />
          <p class="mb-4">
            Ocean. Innovating Digital <br />
            Solutions. All Rights Reserved
          </p>
          <p>Join our community</p>
          <div class="social-icons mt-2">
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>

        <!-- Explore Links -->
        <div class="footer-links">
          <h4>Explore</h4>
          <ul class="ul-footer">
            <li><a href="#">PROJECTS</a></li>
            <li><a href="#">How it works</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>

        <!-- Newsletter -->
        <div class="footer-newsletter">
          <h4>Join Our Weekly Digest</h4>
          <p class="text-foot-p">
            Get exclusive promotions & updates <br />
            straight to your inbox.
          </p>
          <form class="input-group-2">
            <input
              type="email"
              class="form-control-2"
              placeholder="Enter your email here"
              required
            />
            <button type="submit" class="btn btn-primary">Subscribe</button>
          </form>
        </div>
      </div>
      <div class="footer-bottom text-center">
        <p class="mt-2">
          © <span class="ocean-footer">Ocean</span> Market. Use this template
          freely.
        </p>
      </div>
    </footer>
    <!-- End footer section -->

    <a href="https://wa.me/970567463404" target="_blank" class="whatsapp-button" id="whatsappButton">
      <img src="image/whatsapp.png" alt="WhatsApp">
    </a>

    <script src="js/proj.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
    <!-- typed js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.js"></script>
    <!-- swiper slider js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
