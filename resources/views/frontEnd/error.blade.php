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
    <link rel="stylesheet" href="css/error.css" />
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
    <title>ERROR 404</title>
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
                  <a class="nav-link" href="proj.html">Projects</a>
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

    <!-- Start main -->
    <main>
      <!-- error section -->
      <section
        class="error-section d-flex align-items-center justify-content-center"
      >
        <div class="error-content text-center">
          <img src="image/error.png" alt="" />
          <h3 class="mt-5">Oops!</h3>
          <p class="mt-3">We can’t seem to find the page you are looking for</p>
          <button class="btn_all fw-bold">Back to Homepage</button>
        </div>
      </section>
      <!-- end error section -->

      <!-- form section -->
      <section
        class="digest-section d-flex align-items-center justify-content-center"
      >
        <div
          class="container d-flex flex-column flex-md-row align-items-center justify-content-center"
        >
          <div class="astronaut-img mb-4 mb-md-0">
            <img src="image/man-about.png" alt="Astronaut" />
          </div>
          <div class="digest-content text-center text-md-start">
            <h2 class="mb-3 ms-4">Join our weekly digest</h2>
            <p class="ms-5">
              Get exclusive promotions & updates straight to your inbox.
            </p>
            <form class="input-group">
              <input
                type="email"
                class="form-control"
                placeholder="Enter Your Mail..."
                required
              />
              <button type="submit" class="btn btn-primary fw-bold">
                GET STARTED
              </button>
            </form>
          </div>
        </div>
      </section>
      <!-- End form section -->
    </main>
    <!-- End main -->

    <!-- footer section -->
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
          <h4 class="space_mono">Explore</h4>
          <ul class="ul-footer">
            <li><a href="#">PROJECTS</a></li>
            <li><a href="#">How it works</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>

        <!-- Newsletter -->
        <div class="footer-newsletter">
          <h4 class="space_mono">Join Our Weekly Digest</h4>
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
    <!-- End footer -->

    <a
      href="https://wa.me/970567463404"
      target="_blank"
      class="whatsapp-button"
      id="whatsappButton"
    >
      <img src="image/whatsapp.png" alt="WhatsApp" />
    </a>

    <script>
      document.addEventListener("scroll", function () {
        const button = document.getElementById("whatsappButton");
        const scrollTop = window.scrollY || document.documentElement.scrollTop;
        button.style.top = `${scrollTop + window.innerHeight / 2}px`;
      });
    </script>

    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
    <!-- typed js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.js"></script>
    <!-- swiper slider js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
  </body>
</html>
