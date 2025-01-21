<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
<!-- typed js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.js"></script>
<!-- swiper slider js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
<script src="{{asset('frontEnd/js/home.js')}}"></script>
<script src="{{asset('frontEnd/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontEnd/js/all.min.js')}}"></script>

<script>
    function toggleLanguage() {
        const isArabic = document.getElementById("language-toggle").checked;
        const locale = isArabic ? "ar" : "en";

        const currentPath = 'ar';
        window.location.href = `/${locale}${currentPath}`;
    }
</script>
@yield('scripts')
