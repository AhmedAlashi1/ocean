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
    <link rel="stylesheet" href="css/contact.css" />
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
    <title>Contact</title>
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
                  <a class="nav-link active" href="contact.html">Contact</a>
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

    <main>
      <section
        class="contact-section d-flex align-items-center justify-content-center"
      >
        <div class="text-center">
          <h3 class="text-cont mb-3">Contact us</h3>
          <p>
            Reach out to us, and let's build a world full of creativity together
            <br />
            with <span class="ocean">Ocean</span> – where innovative programming
            meets stunning design!
          </p>
        </div>
      </section>

      <div class="container form-container mt-0">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="form-box">
              <h2>
                Fill up the form and our Team will get back to you within 24
                hours.
              </h2>
              <p>
                We’d love to hear from you! Whether you have questions, need
                support, or want to discuss a potential project, feel free to
                reach out to us through any of the following methods:
              </p>
              <form>
                <div class="row mb-3">
                  <div class="col">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Last Name"
                    />
                  </div>
                  <div class="col">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="First Name"
                    />
                  </div>
                </div>
                <div class="mb-3">
                  <input
                    type="email"
                    class="form-control"
                    placeholder="Email"
                  />
                </div>
                <div class="mb-3">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Phone Number"
                  />
                </div>
                <div class="mb-3">
                  <textarea
                    class="form-control"
                    rows="4"
                    placeholder="Message"
                  ></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">
                  Send Message
                </button>
              </form>
            </div>
          </div>
          <div class="col-md-6 image-container">
            <img src="image/Image box.png" alt="Astronaut" />
          </div>
        </div>
      </div>
      <!-- End form section -->
    </main>
    <!-- End Main -->

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
      document.addEventListener("DOMContentLoaded", function () {
        // اختيار جميع العناصر في الصفحة
        const elements = document.querySelectorAll("*");

        // إضافة كلاس "fade-in" لجميع العناصر
        elements.forEach((element) => {
          element.classList.add("fade-in");
        });

        // التحقق من وجود عناصر مرئية عند تحميل الصفحة
        window.addEventListener("scroll", function () {
          elements.forEach(function (element) {
            const rect = element.getBoundingClientRect();
            if (rect.top <= window.innerHeight) {
              element.classList.add("visible");
            }
          });
        });

        // التحقق من الحالة الأولية عند تحميل الصفحة
        elements.forEach(function (element) {
          const rect = element.getBoundingClientRect();
          if (rect.top <= window.innerHeight) {
            element.classList.add("visible");
          }
        });
      });

      document.addEventListener("scroll", function () {
        const button = document.getElementById("whatsappButton");
        const scrollTop = window.scrollY || document.documentElement.scrollTop;
        button.style.top = `${scrollTop + window.innerHeight / 2}px`;
      });
    </script>
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
