
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="QAoitTOQ0OoLBnQTiSDFgMLkh0A81c5ZaSp-dF9iuFA"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <meta name="title" content="@yield('title')" />
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:image" content="{{URL::asset('dashboard/icon/Group.svg')}}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@ocean-it">
    <meta name="twitter:creator" content="@ocean-it">
    <meta name="twitter:domain" content="http://ocean-it.net/">

    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:image" content="{{URL::asset('/logo4.jpg')}}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Ocean IT" />
    <meta property="og:locale" content="{{ LaravelLocalization::getCurrentLocale() }}" />
    <meta property="og:locale:alternate" content="{{ LaravelLocalization::getDefaultLocale() }}" />
    @php
        $locales = LaravelLocalization::getSupportedLocales();
    @endphp

    @foreach ($locales as $locale => $details)
        <link
            rel="alternate"
            hreflang="{{ $locale }}"
            href="{{ LaravelLocalization::getLocalizedURL($locale, null, [], true) }}"
        />
    @endforeach

    <link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('frontEnd/image/logo - title.png')}}" alt="logo"/>
    <link rel="icon" type="image/png" sizes="32x32" href="{{URL::asset('frontEnd/image/logo - title.png')}}" alt="logo"/>
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('frontEnd/image/logo - title.png')}}" alt="logo"/>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('frontEnd/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontEnd/css/all.min.css')}}" />
    <!-- remix icons -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css"
    />
    <!-- css file -->
    <link rel="stylesheet" href="{{asset('frontEnd/css/home.css')}}" />
    <link rel="stylesheet" href="{{asset('frontEnd/css/style.css')}}" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet"
    />

    @if (app()->getLocale() == 'ar')
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@100..900&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Tajawal', sans-serif;
            }
        </style>
    @endif
    @yield('css')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "@yield('title')",
        "description": "@yield('description')",
        "url": "{{ LaravelLocalization::getLocalizedURL($locale, null, [], true) }}"
    }
    </script>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MX65DHS7');</script>
    <style>
        [data-f-id="pbf"] {
            display: none !important;
        }
        @media only screen and (max-width: 767px) {
            .solution-section {
                margin-bottom: 60px;
                text-align: center;
            }
        }
        @media only screen and (min-width: 992px) {
            .work-item:nth-of-type(2) .work-hover {
                opacity:  0 !important;
            }
        }
        .lang-ancor {
            width: 79px;
            height: 54px;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            flex-shrink: 0;
            background-color: #131313;
            border: 1px solid #262626;
            color: var(--main-color);
            font-size: 18px;
            font-weight: 700;
            transition: all 0.3s ease-in-out;
        }
    </style>
</head>

