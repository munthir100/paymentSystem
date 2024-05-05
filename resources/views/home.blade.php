@include("dashboard.layouts.shared.includes.main")

<head>
    @yield('title')
    @include("dashboard.layouts.shared.includes.head-css")

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
                            <h1 class="mb-3 ff-secondary fw-semibold lh-base">{{ __('Empowering Your Project Management Journey') }}</h1>
                            <p class="text-muted">{{ __('Discover the key features that make Velzon the ideal platform for efficient project management.') }}</p>
                        </div>
                    </div>
                </div>

                <div class="row g-3">
                    <!-- Feature: Creative Design -->
                    <div class="col-lg-4">
                        <div class="d-flex p-3">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm icon-effect">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-pencil-ruler-2-line fs-36"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">{{ __('Intuitive Design') }}</h5>
                                <p class="text-muted my-3 ff-secondary">{{ __('Enjoy an intuitive and user-friendly design that enhances your project management experience.') }}</p>
                                <div>
                                    <a href="#" class="fs-13 fw-medium">{{ __('Learn More') }} <i class="ri-arrow-right-s-line align-bottom"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Feature: Efficient Task Management -->
                    <div class="col-lg-4">
                        <div class="d-flex p-3">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm icon-effect">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-check-line fs-36"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">{{ __('Efficient Task Management') }}</h5>
                                <p class="text-muted my-3 ff-secondary">{{ __('Streamline your workflow with efficient task management features for better project coordination.') }}</p>
                                <div>
                                    <a href="#" class="fs-13 fw-medium">{{ __('Learn More') }} <i class="ri-arrow-right-s-line align-bottom"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Feature: Collaborative Team Environment -->
                    <div class="col-lg-4">
                        <div class="d-flex p-3">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm icon-effect">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-group-line fs-36"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">{{ __('Collaborative Team Environment') }}</h5>
                                <p class="text-muted my-3 ff-secondary">{{ __('Foster collaboration within your team by providing a shared and interactive project environment.') }}</p>
                                <div>
                                    <a href="#" class="fs-13 fw-medium">{{ __('Learn More') }} <i class="ri-arrow-right-s-line align-bottom"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>

        <!-- end services -->

        <section id="pricing" class="bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 mt-5">
                        <div class="text-center mb-5">
                            <h1 class="mb-3 ff-secondary fw-semibold lh-base">{{ __('Choose the plan that meets your needs') }}</h1>
                            <p class="text-muted">{{ __('Please note that the plan may contain several prices that vary depending on the time period of the subscription plan') }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($subscriptionPlans as $plan)
                    <div class="col-xxl-3 col-lg-6">
                        <div class="card pricing-box">
                            <div class="card-body bg-light m-2 p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-grow-1">
                                        <h5 class="mb-0 fw-semibold">{{ $plan->name }}</h5>
                                    </div>
                                    <div class="ms-auto">
                                        <!-- Dropdown menu to select price -->
                                        <div class="dropdown">
                                            <div class="ms-auto">
                                                <h2 class="month mb-0">{{__('SAR')}} {{$plan->price}} <small class="fs-13 text-muted">/Year</small></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-muted">{{ $plan->description }}</p>
                                <ul class="list-unstyled vstack gap-3">
                                    @foreach($plan->features as $feature)
                                    <li>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 {{ $feature->status_id == \App\Models\Status::ACTIVE ? 'text-success' : 'text-danger' }} me-1">
                                                <i class="ri-{{ $feature->status_id == \App\Models\Status::ACTIVE ? 'checkbox-circle-fill' : 'close-circle-fill' }} fs-15 align-middle"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                {{ $feature->name }}
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="mt-3 pt-2">
                                    <a href="{{route('subscriptionPlan.subscribe',$plan)}}" class="btn btn-info w-100">Subscribe</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    @endforeach



                </div>
            </div>
        </section>


        <!-- start faqs -->
        <section class="section" id="FAQ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h3 class="mb-3 fw-semibold">{{ __('Frequently Asked Questions') }}</h3>
                            <p class="text-muted mb-4 ff-secondary">{{ __('If you cannot find the answer to your question in our FAQ, you can always contact us or email us. We will answer you shortly!') }}</p>

                            <div class="hstack gap-2 justify-content-center">
                                <button type="button" class="btn btn-primary btn-label rounded-pill"><i class="ri-mail-line label-icon align-middle rounded-pill fs-16 me-2"></i>{{ __('Email Us') }}</button>
                                <button type="button" class="btn btn-info btn-label rounded-pill"><i class="ri-twitter-line label-icon align-middle rounded-pill fs-16 me-2"></i>{{ __('Send Us Tweet') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row g-lg-5 g-4">
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0 me-1">
                                <i class="ri-question-line fs-24 align-middle text-success me-1"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-0 fw-semibold">{{ __('Project Setup') }}</h5>
                            </div>
                        </div>
                        <div class="accordion accordion-flush" id="project-setup-accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="project-setup-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#project-setup-collapseOne" aria-expanded="false" aria-controls="project-setup-collapseOne">
                                        {{ __('How do I set up my project plan?') }}
                                    </button>
                                </h2>
                                <div id="project-setup-collapseOne" class="accordion-collapse collapse show" aria-labelledby="project-setup-headingOne" data-bs-parent="#project-setup-accordion">
                                    <div class="accordion-body ff-secondary">{{ __('To set up your project plan, follow the steps outlined in your project documentation. It includes details on defining project goals, milestones, tasks, and assigning responsibilities.') }}</div>
                                </div>
                            </div>
                            <!-- Include other project setup questions here -->
                        </div>
                        <!--end accordion-->
                    </div>
                    <!-- end col -->

                    <div class="col-lg-6">
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0 me-1">
                                <i class="ri-shield-keyhole-line fs-24 align-middle text-success me-1"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-0 fw-semibold">{{ __('Task Management') }}</h5>
                            </div>
                        </div>

                        <div class="accordion accordion-flush" id="task-management-accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="task-management-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#task-management-collapseOne" aria-expanded="false" aria-controls="task-management-collapseOne">
                                        {{ __('How can I manage tasks within my project plan?') }}
                                    </button>
                                </h2>
                                <div id="task-management-collapseOne" class="accordion-collapse collapse" aria-labelledby="task-management-headingOne" data-bs-parent="#task-management-accordion">
                                    <div class="accordion-body ff-secondary">{{ __('Task management involves creating, assigning, and tracking tasks to ensure the successful execution of your project plan. Utilize project management tools and regularly update task progress.') }}</div>
                                </div>
                            </div>
                            <!-- Include other task management questions here -->
                        </div>
                        <!--end accordion-->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>


        <!-- Start footer -->
        <footer class="custom-footer bg-dark py-5 position-relative">
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