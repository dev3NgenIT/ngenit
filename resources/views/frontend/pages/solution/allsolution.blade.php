@extends('frontend.master')
@section('content')
    <!--======// Header Title //======-->
    <section class="">
        <div>
            {{-- <img src="{{ asset('frontend/images/solutions-banner.jpg') }}" alt="" class="img-fluid"> --}}
            <img src="{{ asset('frontend/assets/images/solutions-banner.jpg') }}" alt="" class="img-fluid">
        </div>
    </section>
    <!----------End--------->
    <section class="mt-4">
        <div class="container my-3">
            <ul class="breadcrumb text-left">

                <a href="{{ route('homepage') }}">
                    <li class="breadcrumb__item breadcrumb__item-firstChild">
                        <span class="breadcrumb__inner">
                            <span class="breadcrumb__title">Home</span>
                        </span>
                    </li>
                </a>

                <li class="breadcrumb_divider">
                    <span>></span>
                </li>

                <a href="{{ route('whatwedo') }}">
                    <li class="breadcrumb__item">
                        <span class="breadcrumb__inner">
                            <span class="breadcrumb__title">What We Do</span>
                        </span>
                    </li>
                </a>
                <li class="breadcrumb_divider">
                    <span>></span>
                </li>

                <a href="{{ route('all.solution') }}">
                    <li class="breadcrumb__item active">
                        <span class="breadcrumb__inner">
                            <span class="breadcrumb__title">Solutions We Offer</span>
                        </span>
                    </li>
                </a>

            </ul>
        </div>
    </section>
    <!--=======// Techincal Expertise //========-->
    <section class="container mb-3 pt-4">
        <div class="section_text_wrapper">
            <h4 class="section_title solution_main_title"><samp class="topLine">O</samp>ur technical expertise, broad
                solutions portfolio and supply chain capabilities give us the right resources and scale to achieve more for
                you.</h4>
            <p style="font-size:20px; text-align: center;">How would you like to start your transformation journey? We’re
                ready to deliver:</p>
        </div>
        <div class="container">
            <div class="row padding_top gx-3">
                @if (count($solutions) > 0)
                    @foreach ($solutions as $key => $item)
                        <div class="col-md-3 col-sm-4 mb-3 solution-item"
                            @if ($key >= 4) style="display: none;" @endif>
                            <div class="container-area-brand">
                                <div class="content-brand">
                                    <a href="{{ isset($item->slug) ? route('solution.details', ['id' => $item->slug]) : '' }}"
                                        target="_blank">
                                        <div class="content-overlay-brand"></div>
                                        <div>
                                            <img class="content-image"
                                                src="https://t4.ftcdn.net/jpg/03/17/25/45/360_F_317254576_lKDALRrvGoBr7gQSa1k4kJBx7O2D15dc.jpg"
                                                alt="All Solution Image">
                                            {{-- <div>
                                            <img class="content-image" src="{{ asset('storage/' . $item->banner_image) }}"
                                                alt="{{ asset('storage/' . $item->banner_image) }}"> --}}
                                        </div>
                                        <div>
                                            <h5 class="p-1" style="text-align:center;">{{ Str::limit($item->name, 25) }}
                                            </h5>
                                            <hr class="p-1 pt-1 m-0 text-white">
                                        </div>
                                        <div class="content-details fadeIn-bottom fadeIn-left-brand">
                                            <div class="solution_info_area">
                                                <h4 class="p-1 text-white" style="text-align:center;">
                                                    {{ $item->name }}</h4>
                                                <hr class="p-1 pt-1 m-0 text-white">
                                                <p class="brand-news-trends-title-solution">{!! Str::limit($item->header, 120) !!}</p>
                                                {{-- <p class="brand-news-trends-title-solution">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> --}}
                                            </div>
                                            <div class="description-footer-brand inline-center text-white">
                                                <hr class="p-1 pt-1 m-0 text-white">
                                                <a href="{{ isset($item->slug) ? route('solution.details', ['id' => $item->slug]) : '' }}"
                                                    class="link text-white"><i class="fa fa-plus-circle me-2"></i>More
                                                    information</a>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h4 class="main_color text-center">No Solution Found !</h4>
                @endif
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center mt-5 mb-5">
                        <button class="common_button2 effect02" id="load-more-solution">View More</button>
                        <button class="common_button2 effect02" id="show-less-solution" style="display: none;">Show
                            Less</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div
                            class="card-header bg-white shadow-sm main-to-depp-gradient-1 p-5 card-header-area border-top-right-r">
                            <div class="d-flex align-items-center">
                                <h4 class="pe-2 text-white">Alluvio Solutions</h4>
                                <h4 class="pe-2 text-white">|</h4>
                                <h4 class="text-white">Alluvio Solutions</h4>
                            </div>
                        </div>
                        <div class="card-header p-5 card-header-area border-bottom-left-r">
                            <div class="row card-row-area">
                                <div class="col-lg-3">
                                    <a href="#" style="cursor: pointer;">
                                        <div class="p-4 shadow-sm bg-white">
                                            <div class="icons_area"></div>
                                            <div class="text_area">
                                                Digital Experience Management
                                            </div>
                                            <div class="text_area text-end">
                                                <a href=""><i class="fa-solid fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="#" style="cursor: pointer;">
                                        <div class="p-4 shadow-sm bg-white">
                                            <div class="icons_area"></div>
                                            <div class="text_area">
                                                Digital Experience Management
                                            </div>
                                            <div class="text_area text-end">
                                                <a href=""><i class="fa-solid fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="#" style="cursor: pointer;">
                                        <div class="p-4 shadow-sm bg-white">
                                            <div class="icons_area"></div>
                                            <div class="text_area">
                                                Digital Experience Management
                                            </div>
                                            <div class="text_area text-end">
                                                <a href=""><i class="fa-solid fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="#" style="cursor: pointer;">
                                        <div class="p-4 shadow-sm bg-white">
                                            <div class="icons_area"></div>
                                            <div class="text_area">
                                                Digital Experience Management
                                            </div>
                                            <div class="text_area text-end">
                                                <a href=""><i class="fa-solid fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div
                            class="card-header bg-white shadow-sm main-to-depp-gradient-2 p-5 card-header-area border-top-right-r">
                            <div class="d-flex align-items-center">
                                <h4 class="pe-2 text-white">Alluvio Solutions</h4>
                                <h4 class="pe-2 text-white">|</h4>
                                <h4 class="text-white">Alluvio Solutions</h4>
                            </div>
                        </div>
                        <div class="card-header p-5 card-header-area border-bottom-left-r">
                            <div class="row card-row-area">
                                <div class="col-lg-3">
                                    <a href="#" style="cursor: pointer;">
                                        <div class="p-4 shadow-sm bg-white">
                                            <div class="icons_area"></div>
                                            <div class="text_area">
                                                Digital Experience Management
                                            </div>
                                            <div class="text_area text-end">
                                                <a href=""><i class="fa-solid fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="#" style="cursor: pointer;">
                                        <div class="p-4 shadow-sm bg-white">
                                            <div class="icons_area"></div>
                                            <div class="text_area">
                                                Digital Experience Management
                                            </div>
                                            <div class="text_area text-end">
                                                <a href=""><i class="fa-solid fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="#" style="cursor: pointer;">
                                        <div class="p-4 shadow-sm bg-white">
                                            <div class="icons_area"></div>
                                            <div class="text_area">
                                                Digital Experience Management
                                            </div>
                                            <div class="text_area text-end">
                                                <a href=""><i class="fa-solid fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="#" style="cursor: pointer;">
                                        <div class="p-4 shadow-sm bg-white">
                                            <div class="icons_area"></div>
                                            <div class="text_area">
                                                Digital Experience Management
                                            </div>
                                            <div class="text_area text-end">
                                                <a href=""><i class="fa-solid fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======// our clint tab //======-->
    <section class="clint_tab_section my-5">
        <div class="container">
            <div class="clint_tab_content pb-3">
                <!-- home title -->
                <div class="home_title mt-3">
                    <div class="software_feature_title">
                        <h1 class="text-center "> NGen IT Growing </h1>
                    </div>
                    <p class="home_title_text solution_para py-3 pb-4 mb-1">See how NGen IT has helped organizations of all
                        sizes
                        across every industry
                        maximize the value of their IT solutions, leverage emerging technologies and create fresh
                        experiences.
                    </p>
                </div>
                <!-- Client Tab Start -->
                <div class="row">
                    <div class="col-xs-12 ">
                        <div class="solurtion_tabing_area">
                            <div class="tabing_menu_area pt-0">
                                <nav>
                                    <div class="nav nav-tabs nav-fill text-capitalize" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-healthcare" data-toggle="tab"
                                            href="#nav-home" role="tab" aria-controls="nav-home"
                                            aria-selected="true">{{ $story1->badge }}</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                            href="#nav-profile" role="tab" aria-controls="nav-profile"
                                            aria-selected="false">{{ $story2->badge }}</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                            href="#nav-contact" role="tab" aria-controls="nav-contact"
                                            aria-selected="false">{{ $story3->badge }}</a>
                                        <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab"
                                            href="#nav-about" role="tab" aria-controls="nav-about"
                                            aria-selected="false">{{ $story4->badge }}</a>
                                    </div>
                                </nav>
                            </div>
                            <div class="tab-content py-0 px-3 px-sm-0" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-healthcare">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-6 col-sm-12 ps-5 industry_tab_container">
                                            <h6 class="title-tag text-capitalize">{{ $story1->badge }}</h6>
                                            <h4 class="home_title_heading text-capitalize text-start pb-2">
                                                {{ $story1->title }}</h4>
                                            <div style="text-align: justify">
                                                <p class="mb-1">{{ $story1->header }}</p>
                                                <p>{!! Str::limit($story1->short_des, 150) !!}......</p>
                                            </div>
                                            <a href="{{ route('blog.details', $story1->id) }}" class="icon-btns"><span
                                                    class="fw-bold">Read
                                                    Details</span> <i class="fa-solid fa-chevron-right"></i></a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="showcase-industry">
                                                <img src="https://t4.ftcdn.net/jpg/01/43/23/83/360_F_143238306_lh0ap42wgot36y44WybfQpvsJB5A1CHc.jpg"
                                                    alt="Picture">
                                                <div class="overlay">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-6 col-sm-12 ps-5 industry_tab_container">
                                            <h6 class="title-tag text-capitalize">{{ $story2->badge }}</h6>
                                            <h4 class="home_title_heading text-capitalize text-start pb-2">
                                                {{ $story2->title }}</h4>
                                            <div style="text-align: justify">
                                                <p class="mb-1">{{ $story2->header }}</p>
                                                <p>{!! Str::limit($story2->short_des, 150) !!}......</p>
                                            </div>
                                            <a href="{{ route('blog.details', $story2->id) }}" class="icon-btns"><span
                                                    class="fw-bold">Read
                                                    Details</span> <i class="fa-solid fa-chevron-right"></i></a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="showcase-industry">
                                                <img src="https://t4.ftcdn.net/jpg/01/43/23/83/360_F_143238306_lh0ap42wgot36y44WybfQpvsJB5A1CHc.jpg"
                                                    alt="Picture">
                                                <div class="overlay">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-6 col-sm-12 ps-5 industry_tab_container">
                                            <h6 class="title-tag text-capitalize">{{ $story3->badge }}</h6>
                                            <h4 class="home_title_heading text-capitalize text-start pb-2">
                                                {{ $story3->title }}</h4>
                                            <div style="text-align: justify">
                                                <p class="mb-1">{{ $story3->header }}</p>
                                                <p>{!! Str::limit($story3->short_des, 150) !!}......</p>
                                            </div>
                                            <a href="{{ route('blog.details', $story3->id) }}" class="icon-btns"><span
                                                    class="fw-bold">Read
                                                    Details</span> <i class="fa-solid fa-chevron-right"></i></a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="showcase-industry">
                                                <img src="https://t4.ftcdn.net/jpg/01/43/23/83/360_F_143238306_lh0ap42wgot36y44WybfQpvsJB5A1CHc.jpg"
                                                    alt="Picture">
                                                <div class="overlay">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-about" role="tabpanel"
                                    aria-labelledby="nav-about-tab">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-6 col-sm-12 ps-5 industry_tab_container">
                                            <h6 class="title-tag text-capitalize">{{ $story4->badge }}</h6>
                                            <h4 class="home_title_heading text-capitalize text-start pb-2">
                                                {{ $story4->title }}</h4>
                                            <div style="text-align: justify">
                                                <p class="mb-1">{{ $story4->header }}</p>
                                                <p>{!! Str::limit($story4->short_des, 150) !!}......</p>
                                            </div>
                                            <a href="{{ route('blog.details', $story4->id) }}" class="icon-btns"><span
                                                    class="fw-bold">Read
                                                    Details</span> <i class="fa-solid fa-chevron-right"></i></a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="showcase-industry">
                                                <img src="https://t4.ftcdn.net/jpg/01/43/23/83/360_F_143238306_lh0ap42wgot36y44WybfQpvsJB5A1CHc.jpg"
                                                    alt="Picture">
                                                <div class="overlay">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Client Tab End -->
            </div>
        </div>
    </section>
    <!---------End -------->

    <!--======// our clint tab //======-->
    <section class="container">
        <div class="outcome_smail_bussiness_title">
            <hr class="lineTop">
            <h2>We architect, implement, manage and secure IT solutions that help you achieve your most ambitious goals.
            </h2>
            <hr class="lineBottom">
        </div>
    </section>
    <!---------End -------->

    <!--=====// Global call section //=====-->
    <section class="global_call_section section_padding">
        <div class="container">
            <!-- content -->
            @php
                $sentence = $learnmore->consult_title;
            @endphp
            <div class="global_call_section_content">
                <div class="home_title" style="width: 100%; margin: 0px;">
                    <h5 class="home_title_heading" style="text-align: left; color: #fff;">
                        <span>{{ \Illuminate\Support\Str::substr($sentence, 0, 1) }}</span>{{ \Illuminate\Support\Str::substr($sentence, 1) }}

                    </h5>
                    <p class="home_title_text text-white" style="text-align: left;">{{ $learnmore->consult_short_des }}
                    </p>
                    <div class="business_seftion_button" style="text-align: left;">
                        <a href="#Contact">Explore business outcomes</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------End -------->

    <!--=====// Tech solution //=====-->
    @if (count($tech_datas) > 0)
        <div class="section_wp2">
            <div class="container">
                @if (!empty($software_info->row_seven_title))
                    <div class="solution_number_wrapper">
                        <!-- title -->
                        @php
                            $sentence2 = $software_info->row_seven_title;
                        @endphp
                        <h5 class="home_title_heading" style="text-align: left;">
                            <div class="software_feature_title">
                                <h1 class="text-center pb-3">
                                    <span>{{ \Illuminate\Support\Str::substr($sentence2, 0, 1) }}</span>{{ \Illuminate\Support\Str::substr($sentence2, 1) }}
                                </h1>
                            </div>
                        </h5>
                    </div>
                @endif
                <!-- tech wrapper -->
                <div class="row">
                    <!-- item -->
                    @foreach ($tech_datas as $item)
                        <div class="col-lg-3 col-sm-6">
                            <div class="tech_solution_item">
                                <p class="tech_solution_title">{{ $item->header }}</p>
                                <p class="tech_solution_text">{{ $item->short_description }}</p>
                                <p class="tech_solution_award">{{ $item->footer }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    @endif
    <!---------End -------->

    <!--=====// We serve //=====-->
    <div class="container pb-5">
        <!-- section title -->
        <div class="clint_help_section_heading_wrapper">
            <!-- title -->
            <h5 class="home_title_heading" style="text-align: left;">
                <h5 class="home_title_heading" style="text-align: left;">
                    <div class="software_feature_title">
                        <h1 class="text-center pt-4 pb-4">
                            Industries We Serve
                        </h1>
                    </div>
                </h5>
                <p class="home_title_text solution_para pb-5">
                    <span class="font-weight-bold">{{ $learnmore->industry_header }} </span>
                </p>
        </div>
        <!-- section content wrapper -->
        <div class="row mb-4">
            <!-- content -->
            <div class="col-lg-9 col-sm-12">
                <!-- we_serveItem_wrapper -->
                <div class="row">
                    <!-- item -->

                    @if ($industrys)
                        @foreach ($industrys as $item)
                            <div class="col-lg-3 col-sm-6">
                                <a href="{{ isset($item->slug) ? route('industry.details', ['id' => $item->slug]) : '' }}"
                                    class="we_serve_item mb-4">
                                    <div class="we_serve_item_image">
                                        <img src="{{ asset('storage/' . $item->logo) }}" alt="">
                                    </div>
                                    <div class="we_serve_item_text">{{ $item->title }}</div>
                                </a>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
            <!-- sidebar -->
            <div class="col-lg-3 col-sm-12">

                <div class="solution_sidebar">
                    @if ($random_industries)
                        @foreach ($random_industries as $item)
                            <div class="pt-2">
                                <a
                                    href="{{ isset($item->slug) ? route('industry.details', ['id' => $item->slug]) : '' }}">
                                    <div id="fed-bg">
                                        <div class="p-2">
                                            <h5 class="text-white brand_side_text">{{ $item->title }} ›</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
    <!---------End -------->

    <!--=====// Pageform section //=====-->
    @include('frontend.partials.footer_contact')
    <!---------End -------->
@endsection
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var solutionItems = document.querySelectorAll('.solution-item');
            var loadMoreButton = document.getElementById('load-more-solution');
            var showLessButton = document.getElementById('show-less-solution');
            var batchSize = 4; // Number of items to load at a time
            var currentBatchIndex = batchSize;

            if (solutionItems.length <= batchSize) {
                // If there are 8 or fewer items, hide the "Load More" button
                loadMoreButton.style.display = 'none';
            } else {
                showLessButton.style.display = 'none'; // Hide "Show Less" initially
            }

            loadMoreButton.addEventListener('click', function() {
                for (var i = currentBatchIndex; i < currentBatchIndex + batchSize; i++) {
                    if (i < solutionItems.length) {
                        solutionItems[i].style.display = 'block';
                    } else {
                        showLessButton.style.display = 'block'; // Show "Show Less" button
                        loadMoreButton.style.display = 'none'; // Hide the "Load More" button
                        break;
                    }
                }
                currentBatchIndex += batchSize;
            });

            showLessButton.addEventListener('click', function() {
                for (var i = batchSize; i < solutionItems.length; i++) {
                    solutionItems[i].style.display = 'none';
                }
                showLessButton.style.display = 'none'; // Hide "Show Less" button
                loadMoreButton.style.display = 'block'; // Show "Load More" button
            });
        });
    </script>
@endsection
