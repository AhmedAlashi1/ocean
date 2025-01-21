@php
    $services = \App\Models\Service::all();
@endphp

<header  id="header" class="header-section">
    <nav class="navbar navbar-expand-lg">
        <div
            class="container-fluid d-flex align-items-center justify-content-between"
        >
            <img src="{{asset('frontEnd/image/logo.png')}}" alt="Logo" class="me-5" />
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
                            <a class="nav-link {{ Route::currentRouteName() == 'front.index' ? 'active' : '' }}" href="{{url('/#')}}">{{__('front.Home')}} </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  {{ Route::currentRouteName() == 'front.about' ? 'active' : '' }}" href="{{route('front.about')}}">{{__('front.About Us')}}</a>
                        </li>
                        <li class="nav-item">
{{--                            <a class="nav-link" href="proj.html">Projects</a>--}}
                            <a class="nav-link" href="{{ url(app()->getLocale().'/#work') }}"> {{__('front.PROJECTS')}}</a>
                        </li>
                        <li class="nav-item">
{{--                            <a class="nav-link" href="work.html">How it works</a>--}}
                            <a class="nav-link {{ Route::currentRouteName() == 'front.blogs' ? 'active' : '' }}" href="{{route('front.blogs' )}}">How it works </a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() == 'front.blogs' ? 'active' : '' }}" href="{{route('front.blogs' )}}">{{__('front.Blogs')}} </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() == 'front.contact' ? 'active' : '' }}" href="{{route('front.contact' )}}">{{__('front.Contact Us')}}</a>
                        </li>
                    </ul>
                </div>
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    @if($localeCode != LaravelLocalization::getCurrentLocale())

                        <a href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar') }}" class=" btn connect ms-5 fs-6" style="width:7%;">
                            {{ LaravelLocalization::getCurrentLocale() === 'ar' ? 'EN' : 'AR' }}
                        </a>
                    @endif
                @endforeach
{{--                <button href="#" class="btn connect ms-5 fs-6">Connect</button>--}}
            </div>
        </div>
    </nav>
    <!-- End navbar -->
</header>


