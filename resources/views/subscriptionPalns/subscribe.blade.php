@include("dashboard.layouts.shared.includes.main")

<head>
    @yield('title')
    @include("dashboard.layouts.shared.includes.head-css")
    <!-- Moyasar Styles -->

    <!-- Moyasar Styles -->
    <link rel="stylesheet" href="https://cdn.moyasar.com/mpf/1.10.0/moyasar.css" />

    <!-- Moyasar Scripts -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=fetch"></script>
    <script src="https://cdn.moyasar.com/mpf/1.10.0/moyasar.js"></script>

    <link href="{{asset('dashboard/assets/libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css" />
    @yield('styles')
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">

    <!-- Begin page -->
    <div class="layout-wrapper landing">
        <nav class="navbar navbar-expand-lg navbar-landing fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('dashboard/assets/images/logo-dark.png')}}" class="card-logo card-logo-dark" alt="logo dark" height="17">
                    <img src="{{asset('dashboard/assets/images/logo-light.png')}}" class="card-logo card-logo-light" alt="logo light" height="17">
                </a>
                <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                        <li class="nav-item">
                            <a class="nav-link active" href="/#home">{{ __('Home') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/#pricing">{{ __('Pricing') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/#FAQ">{{ __('FAQ') }}</a>
                        </li>


                    </ul>


                    <div class="">
                        @guest()
                        <a href="#" class="btn btn-link fw-medium text-decoration-none text-body">{{ __('Sign in') }}</a>
                        <a href="#" class="btn btn-primary">{{ __('Sign Up') }}</a>
                        @else
                        <a href="#" class="btn btn-primary position-relative p-0 avatar-xs rounded">
                            <span class="avatar-title bg-transparent">
                                {{ substr(request()->user()->name, 0, 1) }}
                            </span>
                            <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-success p-1">
                                <span class="visually-hidden">{{ __('unread messages') }}</span>
                            </span>
                        </a>
                        @endif
                    </div>

                </div>

            </div>
        </nav>
        <!-- end navbar -->
        <div class="vertical-overlay" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent.show"></div>

        <!-- start hero section -->


        <!-- end hero section -->



        <!-- start services -->
        <section class="section" id="home">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h1 class="mb-3 ff-secondary fw-semibold lh-base">{{ __('Enter your data and pay ease') }}</h1>
                            <p class="text-muted">{{ __('Ensure you have enter the right data') }}</p>
                            <div class="mysr-form" data-price="{{ $subscriptionPlan->price }}" data-description="{{ $subscriptionPlan->description }}"></div>
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    var formElement = document.querySelector('.mysr-form');
                                    var price = formElement.getAttribute('data-price');
                                    var description = formElement.getAttribute('data-description');

                                    Moyasar.init({
                                        element: '.mysr-form',
                                        amount: price * 100, // Assuming price is in SAR and in the smallest currency unit (cents).
                                        currency: 'SAR',
                                        description: description,
                                        publishable_api_key: 'pk_test_AQpxBV31a29qhkhUYFYUFjhwllaDVrxSq5ydVNui',
                                        callback_url: 'https://moyasar.com/thanks',
                                        methods: ['creditcard'],
                                    });
                                });
                            </script>

                        </div>
                    </div>
                </div>

                <!-- end row -->
            </div>
            <!-- end container -->
        </section>







        <!-- Start footer -->
        <footer class="custom-footer bg-dark py-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © {{ __('Velzon') }}.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            {{ __('Design & Develop by Themesbrand') }}
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <style>
            footer {
                position: absolute;
                bottom: 0px;
                right: 0;
                width: 100%;
            }
        </style>

        <form type="hidden" class="d-none" action="{{ route('changeLocale') }}" method="post" id="arForm">
            @csrf
            <input type="text" name="lang" value="ar" required />
        </form>
        <form type="hidden" class="d-none" action="{{ route('changeLocale') }}" method="post" id="enForm">
            @csrf
            <input type="text" name="lang" value="en" required />
        </form>
        <!-- end footer -->


        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon landing-back-top" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

    </div>
    <!-- end layout wrapper -->

    @include("dashboard.layouts.shared.includes.vendor-scripts")




    <!--Swiper slider js-->
    <script src="{{asset('dashboard/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

    <!-- landing init -->
    <script src="{{asset('dashboard/assets/js/pages/landing.init.js')}}"></script>
</body>

</html>