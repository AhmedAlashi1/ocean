@extends('frontEnd.layouts.master')
@php
    $data = \App\Models\Setting::pluck('value', 'key_id')->toArray();
@endphp
@section('title',LaravelLocalization::getCurrentLocale() == 'ar' ? $data['meta_title_ar_home'] :$data['meta_title_en_home'] )
@section('description',LaravelLocalization::getCurrentLocale() == 'ar' ? $data['meta_desc_ar_home'] :$data['meta_desc_en_home'] )

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

@endsection
@section('content')
      <div class="landing">
        <div class="container">
          <div class="text">
            <h1 class="fw-bold">
              Discover <br />
              Digital <br />
              art & <span class="ocean" id="text"></span>
            </h1>
            <p>
              At Ocean, we dive deep into creativity,<br />
              blending the art of design with the power of <br />
              programming to craft digital solutions that sail your ideas toward
              limitless success
            </p>
            <div class="stats">
              <div class="stat">
                <div class="number" id="stat1" data-target="300">0+</div>
                <div class="label">
                  Clients <br />
                  Served
                </div>
              </div>
              <div class="stat">
                <div class="number" id="stat2" data-target="200">0+</div>
                <div class="label">
                  Satisfied <br />
                  End-Users
                </div>
              </div>
              <div class="stat">
                <div class="number" id="stat3" data-target="240">0+</div>
                <div class="label">
                  Projects <br />
                  Delivered
                </div>
              </div>
            </div>
            <button href="#" class="btn btn_all fs-6">
              <i class="me-3 ri-send-plane-fill"></i>Connect With Us
            </button>
          </div>

          <div class="image">
            <img src="{{asset('frontEnd/image/shape.gif')}}" alt="" />
          </div>
        </div>
      </div>
      <main>
      <!-- Strat Section Service -->
      <section id="services" class="service pt-5 pb-5">
        <div class="container mb-5">
          <div class="main-title text-center mt-5 position-relative">
            <h5>Services</h5>
            <h2 class="fw-bold">Our Services</h2>
          </div>

          <div class="row">
            <div class="col-md-4 mb-4 main-serv">
              <div class="card_service">
                <div class="card-body p-4 mb">
                  <div class="icon mb-3">
                    <i class="ri-brush-line fs-3"></i>
                  </div>
                  <h5 class="card-title fw-bold">Graphic Design</h5>
                  <p class="card-text">
                    We specialize in creating <br />
                    impactful social media designs <br />
                    and unique branding to elevate <br />
                    your presence
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-4 main-serv">
              <div class="card_service">
                <div class="card-body p-4 mb">
                  <div class="icon mb-3"><i class="ri-code-fill fs-3"></i></div>
                  <h5 class="card-title fw-bold">Website</h5>
                  <p class="card-text">
                    We build dynamic, custom <br />
                    websites with the latest <br />
                    technologies to ensure high <br />
                    performance
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4 main-serv">
              <div class="card_service">
                <div class="card-body p-4 mb">
                  <div class="icon mb-3">
                    <i class="ri-smartphone-line fs-3"></i>
                  </div>
                  <h5 class="card-title fw-bold">Applications</h5>
                  <p class="card-text">
                    We develop effective, seamless <br />
                    applications, delivering the <br />
                    project fully ready for immediate <br />
                    deployment
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4 main-serv">
              <div class="card_service">
                <div class="card-body p-4 mb">
                  <div class="icon mb-3">
                    <i class="ri-video-on-line fs-3"></i>
                  </div>
                  <h5 class="card-title fw-bold">Motion Graphics</h5>
                  <p class="card-text">
                    We create captivating <br />
                    motion graphics that bring <br />
                    your ideas to life with <br />
                    creativity
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4 main-serv">
              <div class="card_service">
                <div class="card-body p-4 mb">
                  <div class="icon mb-3">
                    <i class="ri-bank-card-2-line fs-3"></i>
                  </div>
                  <h5 class="card-title fw-bold">Digital Marketing</h5>
                  <p class="card-text">
                    We provide effective digital <br />
                    marketing strategies to enhance <br />
                    your reach and <br />
                    achieve goals
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4 main-serv">
              <div class="card_service">
                <div class="card-body p-4 mb">
                  <div class="icon mb-3">
                    <i class="ri-building-2-line fs-3"></i>
                  </div>
                  <h5 class="card-title fw-bold">Architecture</h5>
                  <p class="card-text">
                    We deliver meticulous <br />
                    architectural designs, providing <br />
                    blueprints and resources to ensure professional execution
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Section Service -->

      <!-- Start Section About -->
      <section class="about-us-section container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <img
              src="{{asset('frontEnd/image/space-man.png')}}"
              alt="Astronaut in space"
              class="astronaut-img-1 img-fluid"
            />
          </div>
          <div class="col-lg-6 text-start">
            <h5>Services</h5>
            <h2 class="about-us-title">
              <span class="ocean">Ocean:</span> Where Digital Transformations
              Begin
            </h2>
            <p>
              Ocean is a digital agency specializing in web programming, motion
              design, video editing, and digital marketing. We combine
              creativity and technology to help businesses grow and succeed
              online. Our mission is to deliver high-quality, tailored solutions
              that meet your unique needs.
            </p>
            <button class="btn_all">About us</button>
          </div>
        </div>
      </section>
      <!-- End Section About -->

      <!-- Start Section Portfolio -->
          <section class="portfolios" id="portfolio">
              <div class="main-title text-center mt-5 mb-5 position-relative">
                  <h5>Our Portfolios</h5>
                  <h2 class="fw-bold">Some recent work</h2>
              </div>
              <div class="category">
                  <button data-filter="all" class="text-decoration-none">All Projects</button>
                  <button data-filter=".category-a" class="text-decoration-none">Applications</button>
                  <button data-filter=".category-b" class="text-decoration-none">Website</button>
                  <button data-filter=".category-c" class="text-decoration-none">Design</button>
                  <button data-filter=".category-d" class="text-decoration-none">Content</button>
                  <button data-filter=".category-e" class="text-decoration-none">Motion graphics</button>
              </div>

              <div class="portfolio_image">
                  <div class="portfolio_img portfolio1 mix category-b">
                      <img src="{{ asset('frontEnd/image/portfolio/portfolio1.png') }}" alt="Portfolio 1" />
                  </div>

                  <div class="portfolio_img portfolio2 mix category-a">
                      <img src="{{ asset('frontEnd/image/portfolio/portfolio2.png') }}" alt="Portfolio 2" />
                  </div>

                  <div class="portfolio_img portfolio3 mix category-a">
                      <img src="{{ asset('frontEnd/image/portfolio/portfolio3.png') }}" alt="Portfolio 3" />
                  </div>

                  <div class="portfolio_img portfolio4 mix category-c category-d">
                      <img src="{{ asset('frontEnd/image/portfolio/portfolio4.png') }}" alt="Portfolio 4" />
                  </div>

                  <div class="portfolio_img portfolio5 mix">
                      <img src="{{ asset('frontEnd/image/portfolio/portfolio5.png') }}" alt="Portfolio 5" />
                  </div>

                  <div class="portfolio_img portfolio6 mix category-c">
                      <img src="{{ asset('frontEnd/image/portfolio/portfolio6.png') }}" alt="Portfolio 6" />
                  </div>
              </div>
          </section>

          <!-- End Section Portfolio -->

      <!-- Start Section How It Work -->
          <section class="Work pt-5 pb-5">
              <div class="container">
                  <div class="main-title text-center mt-5 mb-5 position-relative">
                      <h5 class="mb-4">Our Process</h5>
                      <h2 class="fw-bold mb-5">How it works</h2>
                  </div>

                  <div class="row">
                      <div class="col-md-4 mb-4">
                          <div class="card body-work bg-black">
                              <div class="card-body p-4 mb">
                                  <div class="icon-work mb-3 rounded-4 fs-3">
                                      <img src="{{ asset('frontEnd/image/vector1.png') }}" alt="Discovery Icon">
                                  </div>
                                  <h5 class="card-work fw-bold">Discovery</h5>
                                  <p class="text-work">
                                      We thoroughly analyze your <br />
                                      business goals, audience, and challenges to gain insights
                                      and create a tailored strategy that aligns with your vision.
                                  </p>
                              </div>
                          </div>
                      </div>

                      <div class="col-md-4 mb-4">
                          <div class="card body-work bg-black active">
                              <div class="card-body p-4 mb">
                                  <div class="icon-work mb-3 rounded-4 fs-3">
                                      <img src="{{ asset('frontEnd/image/vector2.png') }}" alt="Plan Icon">
                                  </div>
                                  <h5 class="card-work fw-bold">Plan</h5>
                                  <p class="text-work">
                                      We develop a strategic roadmap based on our insights,
                                      outlining clear objectives, actionable steps, and timelines
                                      to achieve your goals effectively.
                                  </p>
                              </div>
                          </div>
                      </div>

                      <div class="col-md-4 mb-4">
                          <div class="card body-work bg-black">
                              <div class="card-body p-4 mb">
                                  <div class="icon-work mb-3 rounded-4 fs-3">
                                      <img src="{{ asset('frontEnd/image/vector3.png') }}" alt="Execute Icon">
                                  </div>
                                  <h5 class="card-work fw-bold">Execute</h5>
                                  <p class="text-work">
                                      We implement the strategy <br />
                                      with precision, managing each <br />
                                      detail to ensure smooth execution <br />
                                      and achieve the desired <br />
                                      results.
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

      <!-- End Section How It Work -->

      <!-- Start Section New&Article -->
          <section class="latest-posts pt-5 pb-5">
              <div class="container">
                  <div class="main-title text-center mt-5 mb-5 position-relative">
                      <h5 class="mb-4">LATEST POSTS</h5>
                      <h2 class="fw-bold mb-5">News & Articles</h2>
                  </div>

                  <div class="row">
                      <div class="col-md-4 mb-4">
                          <div class="post-card bg-black">
                              <img
                                  src="{{ asset('frontEnd/image/posts/Posts1.png') }}"
                                  class="post-card-img"
                                  alt="Post 1"
                              />
                              <div class="post-card-body">
                                  <p class="post-text mt-4">
                                      The Top Benefits of AI for Marketers, State of AI Data
                                  </p>
                              </div>
                          </div>
                      </div>

                      <div class="col-md-4 mb-4">
                          <div class="post-card bg-black">
                              <img
                                  src="{{ asset('frontEnd/image/posts/Posts2.png') }}"
                                  class="post-card-img"
                                  alt="Post 2"
                              />
                              <div class="post-card-body">
                                  <p class="post-text mt-4">
                                      AI Tools to Help You Grow Your AI Graphics Business
                                  </p>
                              </div>
                          </div>
                      </div>

                      <div class="col-md-4 mb-4">
                          <div class="post-card bg-black">
                              <img
                                  src="{{ asset('frontEnd/image/posts/Posts3.png') }}"
                                  class="post-card-img"
                                  alt="Post 3"
                              />
                              <div class="post-card-body">
                                  <p class="post-text mt-4">
                                      When Is the Best Time to Post on Instagram in 2023?
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

          <!-- End Section New&Article -->

      <!-- logo carouse -->
          <section class="logo-carousel">
              <div class="container">
                  <div class="logo-track">
                      <img src="{{ asset('frontEnd/image/tape/icon1.png') }}" alt="Logo 1" />
                      <img src="{{ asset('frontEnd/image/tape/icon2.png') }}" alt="Logo 2" />
                      <img src="{{ asset('frontEnd/image/tape/icon3.png') }}" alt="Logo 3" />
                      <img src="{{ asset('frontEnd/image/tape/icon4.png') }}" alt="Logo 4" />
                      <img src="{{ asset('frontEnd/image/tape/icon5.png') }}" alt="Logo 5" />
                      <!-- تكرار الصور لضمان التدفق المستمر -->
                      <img src="{{ asset('frontEnd/image/tape/icon1.png') }}" alt="Logo 1" />
                      <img src="{{ asset('frontEnd/image/tape/icon2.png') }}" alt="Logo 2" />
                      <img src="{{ asset('frontEnd/image/tape/icon3.png') }}" alt="Logo 3" />
                      <img src="{{ asset('frontEnd/image/tape/icon4.png') }}" alt="Logo 4" />
                      <img src="{{ asset('frontEnd/image/tape/icon5.png') }}" alt="Logo 5" />
                  </div>
              </div>
          </section>

          <!-- End logo carouse -->

      <!-- form section -->
          <section class="digest-section d-flex align-items-center justify-content-center">
              <div class="container d-flex flex-column flex-md-row align-items-center justify-content-center">
                  <div class="astronaut-img mb-4 mb-md-0">
                      <img src="{{ asset('frontEnd/image/space-man-nbg.png') }}" alt="Astronaut" />
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

          <!-- End form section -->
    </main>
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $('#contactForm').on('submit', function (e) {
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                url: "{{ route('front.customer.store') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    "X-CSRF-TOKEN": $('input[name="_token"]').val(),
                },
                success: function (data) {
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: '{{__('front.Sent successfully')}}',
                            text: '{{__('front.Thank you for contacting us!')}}',
                            // confirmButtonText: 'موافق',
                            timer: 3000, // 3 ثواني
                            timerProgressBar: true,
                            showConfirmButton: false // إخفاء زر "موافق"
                        });

                        $('#contactForm')[0].reset();

                        // Add '/thank-you' to the current URL without refreshing the page
                        const currentUrl = window.location.href;
                        const newUrl = currentUrl.endsWith('/') ? `${currentUrl}thank-you` : `${currentUrl}/thank-you`;

                        // Update the browser's URL using pushState
                        history.pushState(null, '', newUrl);
                    } else {
                        alert("An error occurred. Please try again.");
                    }
                },
                error: function (xhr, status, error) {
                    if (xhr.status === 422) { // خطأ التحقق من صحة البيانات
                        let errors = xhr.responseJSON.errors;

                        // تنظيف الأخطاء السابقة
                        $('.text-danger').text('');

                        // عرض الأخطاء الجديدة
                        for (let field in errors) {
                            $(`#${field}-error`).text(errors[field][0]);
                        }
                    } else {
                        console.error('Error:', error);
                    }
                    // console.error('Error:', error);
                }
            });
        });
    </script>
@endsection


