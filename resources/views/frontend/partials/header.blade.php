
<style>
    .step-img {
    position: relative;
    top: -13px;
    left: -95px;
    right: 0px;
}
</style>
<div class="fixed-section header " style="border-bottom: 1px solid #ae0a460f !important;">
    {{-- Top Bar Area --}}
    <div class="container-fluid top-bar p-0">
        <div class="row gx-0 top-bar-bg">
            <div class="col-lg-8 top-bar-curve-area">
                {{-- Empty Are --}}
            </div>
            <div class="col-lg-4 top-bar-right-side">
                <div class="d-flex justify-content-between align-items-center top-menu-area">
                    {{-- <div class="d-flex align-items-center">
                        <p class="p-0 m-0 pe-2 ps-3 d-lg-block d-sm-none">
                            <a href="" class="top-info-text " style="">
                                <i class="fa-solid fa-phone-volume me-1" style="transform: rotate(-35deg);"></i>
                                SUPPORT
                            </a>
                        </p>
                        <p class="p-0 m-0 pe-2 top-info-text d-lg-block d-sm-none">|</p>
                        <p class="p-0 m-0 d-lg-block d-sm-none"><a href="tel:01576614451" class="top-info-text">01576614451</a></p>
                        
                    </div> --}}
                    <div class="">
                        {{-- <span class="text-white">My</span><span class="text-white">NGen It</span> --}}
                        <div class="dropdown drop-top">
                            <a href="javascript:void(0)" class="dropdown-toggle top-info-text top-info-text text-white"
                                type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-expanded="false">
                                <i class="fa-solid fa-phone-volume me-1" style="transform: rotate(-35deg);"></i>
                                SUPPORT | 01576614451
                            </a>
                            <div class="dropdown-menu drop-down-menus2" aria-labelledby="dropdownMenuButton" style="position: absolute;
                            inset: 0px auto auto 0px;
                            margin: 0px;
                            transform: translate(50px, 18px) !important;">
                                <div class="popover__content text-start">
                                    <div class="text-muted">
                                        Call Us-
                                        <a href="#" class="main_color">01576614451</a>
                                    </div>
                                    <hr class="text-muted" />
                                    <ul class="account p-0 text-muted text-start">
                                        <li class="py-3 d-flex flex-column">
                                            <a href="{{ !empty($setting->facebook_url) ? $setting->facebook_url : '' }}"
                                                class="social_icons"><i class="pe-2 h4 fa-brands fa-square-facebook"
                                                    aria-hidden="true"></i>Facebook</a>
                                            <a href="{{ !empty($setting->twitter_url) ? $setting->twitter_url : '' }}"
                                                class="social_icons">
                                                <i class="pe-2 h4 fa-brands fa-linkedin"></i>Twitter</a>
                                            <a href="{{ !empty($setting->linkedin_url) ? $setting->linkedin_url : '' }}"
                                                class="social_icons">
                                                <i class="pe-2 h4 fa-brands fa-square-twitter"></i>Linkedin</a>
                                            <a href="{{ !empty($setting->youtube_url) ? $setting->youtube_url : '' }}"
                                                class="social_icons">
                                                <i class="pe-2 h4 fa-brands fa-square-youtube"></i>Youtube</a>
                                            <a href="{{ !empty($setting->instagram_url) ? $setting->instagram_url : '' }}"
                                                class="social_icons">
                                                <i class="pe-2 h4 fa-brands fa-square-instagram"></i>Instagram</a>
                                        </li>
                                    </ul>
                                    <hr class="text-muted" />
                                        <ul class="account p-0 text-muted text-start">
                                            <li>
                                                Check Our
                                                <a target="_blank" class="main_color">Shop Products</a>
                                            </li>
                                            <li>
                                                Check Our
                                                <a target="_blank" class="main_color">Slution Services</a>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center ">
                        <div class="d-lg-block d-sm-none">
                            <a href="#" class="top-info-text text-white pe-3"><i class="fa-regular fa-circle-question me-1"></i> REQUEST FOR QUOTE</a>
                        </div>
                        <div>
                            {{-- <span class="text-white">My</span><span class="text-white">NGen It</span> --}}
                            <div class="dropdown drop-top">
                                <a href="javascript:void(0)" class="dropdown-toggle top-info-text top-info-text text-white"
                                    type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" aria-expanded="false">
                                    <i class="fa-regular fa-star" style="font-size: 14px"></i>
                                    <span class="">MY</span><span class="">NGEN IT</span>
                                </a>
                                <div class="dropdown-menu drop-down-menus" aria-labelledby="dropdownMenuButton">
                                    <div class="popover__content text-start">
                                        <button class="btn common_button2 mb-2 top-info-text w-100">Sign In</button>
                                        <div class="text-muted">
                                            First time here?
                                            <a href="#" class="main_color">Sign Up</a>
                                        </div>
                                        <hr class="text-muted" />
                                        <ul class="account p-0 text-muted text-start">
                                            <li>
                                                <i class="fa fa-user m-2"></i>
                                                <a href="#" class="">My Profile</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope m-2"></i>
                                                <a href="#" class="">My Subscriptions</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-star m-2"></i>
                                                <a href="#" class="">My Favorites</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-list m-2"></i>
                                                <a href="#" class="">My Requests</a>
                                            </li>
                                        </ul>
                                        <hr class="text-muted" />
                                        <ul class="account p-0 text-muted text-start">
                                            <li>
                                                Sign In To Your
                                                <a target="_blank" class="main_color">Client Account</a>
                                            </li>
                                            <li>
                                                Sign In To Your
                                                <a target="_blank" class="main_color">Partner Account</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Menu And Logo Area --}}
    <div>
        <nav class="navbar navbar-expand-lg p-2 main-navbar bg-white menu-section">
            <div class="container-fluid">
                <div class="step-img d-lg-block d-sm-none">
                    <img src="https://i.ibb.co/3WKt3Mw/NGen-IT-left-color.png" alt="" style="
                    height: 74px;
                ">
                </div>
                <a class="navbar-brand fw-bold upper-content-menu main-logo" href="">
                    <img class="img-fluid site-main-logo" src="http://ngenitltd.com/storage/nCPGDDeFYohQQYtTN0PtgYvMWnMDk86OnDH0uW2K.png"
                        alt="">
                </a>
                <!---Category--->
                <div class="category-mobile">
                    <div class="dropdown position-static header-category-button-60">
                        <a class="tab_btn_icon upper-content-menu" href="#" role="button" id="dropdownMenuLink2"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"
                            style="padding-left: none !important;">
                            <i class="fa-solid fa-bars" style="font-size: 18px !important;"></i>
                        </a>
                        <ul class="dropdown-menu w-100 extra_category" aria-labelledby="dropdownMenuLink2">
                            <section class="header" style=" height: 100vh; margin-top: -2px;">
                                <div class="container-fluid">
                                    <div class="row tab_area_main p-2 category-center">
                                        <div class="col-md-3 tab_key_btns p-0 ">
                                            <!-- Tabs nav -->
                                            <div class="nav nav-custom flex-column nav-pills2 nav-pills-custom2"
                                                id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                {{-- Category Triger Start Here --}}
                                                @foreach ($categories as $key => $category)
                                                    <a class="nav-link px-3 p-2 shadow {{ $key === 0 ? 'show' : '' }} {{ $key === 0 ? 'active' : '' }}"
                                                        id="v-pills-home-tab{{ $category->id }}" data-toggle="pill"
                                                        href="#v-pills-home{{ $category->id }}" role="tab"
                                                        aria-controls="v-pills-home{{ $category->id }}"
                                                        aria-selected="true"
                                                        style="font-weight:500 !important; margin-bottom: 1px;">
                                                        <span class="ps-1">-- &nbsp; {{ $category->title }}</span>
                                                    </a>
                                                @endforeach
                                                {{-- Category Triger End Here --}}
                                            </div>
                                        </div>
                                        <div class="col-md-9 p-0">
                                            <!-- Tabs content -->
                                            <div class="tab-content" id="v-pills-tabContent">
                                                @foreach ($categories as $key => $category)
                                                    <div class="tab-pane fade rounded-0 p-1 {{ $key === 0 ? 'show' : '' }} {{ $key === 0 ? 'active' : '' }}"
                                                        id="v-pills-home{{ $category->id }}" role="tabpanel"
                                                        aria-labelledby="v-pills-home-tab{{ $category->id }}"
                                                        style="height: 22rem;">
                                                        {{-- Content Here --}}
                                                        @php
                                                            $sub_categorys = App\Models\Admin\Category::getSubcatByCat($category->id);
                                                        @endphp
                                                        <div class="row p-3">
                                                            @foreach ($sub_categorys as $sub_category)
                                                                <div class="col-lg-3 col-sm-6">
                                                                    <div class="fw-bold nav_title mb-2"
                                                                        style="font-size: 15px;"><span
                                                                            style="border-top: 4px solid #ae0a46;">
                                                                            {{ \Illuminate\Support\Str::substr($sub_category->title, 0, 3) }}</span>{{ \Illuminate\Support\Str::substr($sub_category->title, 3) }}
                                                                    </div>
                                                                    @php
                                                                        $sub_sub_categorys = App\Models\Admin\SubCategory::getSubSubcatBySubCat($sub_category->id);
                                                                    @endphp
                                                                    @foreach ($sub_sub_categorys as $item)
                                                                        <li class="my-2"
                                                                            style="line-height: 1.2rem !important;">
                                                                            <a class="p-0"
                                                                                href="{{ route('category.html', $item->slug) }}">
                                                                                <div>{{ $item->title }}&nbsp;<i
                                                                                        class="ph ph-caret-right menu_icons"></i>
                                                                                </div>

                                                                            </a>
                                                                        </li>
                                                                    @endforeach

                                                                </div>
                                                            @endforeach

                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </ul>
                    </div>
                </div>
                <!---Category--->

                <a href="javascript:void(0)" class="nvabar-toggler tab_btn_icon upper-content-menu d-lg-none"
                    type="button" data-bs-toggle="offcanvas" data-bs-target="#rightOffcanvas"
                    aria-controls="rightOffcanvas">
                    <i class="fa-solid fa-bars main_color" style="font-size: 18px !important;"></i>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="d-flex ms-auto upper-content-menu" role="search">
                        <div class="input-group flex-nowrap search-input-container">
                            <span class="input-group-text search-box-areas" id="addon-wrapping"><i
                                    class="fa-solid fa-magnifying-glass"></i></span>
                            <input type="text" class="form-control search-input-field"
                                placeholder="Search for products, solutions & more..."
                                aria-describedby="addon-wrapping">
                        </div>
                    </form>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        
                        <li class="nav-item dropdown position-static cool-link main-menu-specing">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                PRODUCT
                            </a>
                            <ul class="dropdown-menu full-container-dropdown border-0"
                                style="border-top: 1px solid #ae0a460f !important;">
                                <div class="container-fluid">
                                    <div class="row pt-5 pb-5 tech-top bg-white">
                                        <div class="col-lg-4">
                                            <p class="fw-bold"><span
                                                    style="border-top: 4px solid #ae0a46;">Sof</span>tware Services
                                            </p>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <p class="fw-bold"><span
                                                    style="border-top: 4px solid #ae0a46;">Har</span>dware Services
                                            </p>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <p class="fw-bold"><span
                                                    style="border-top: 4px solid #ae0a46;">Tra</span>ining Services
                                            </p>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-3 pb-3 tech-top">
                                        <div class="col-lg-4">
                                            <a href="" style="border-top: 3px solid #ae0a46;">
                                                View All Software Software 
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="" style="border-top: 3px solid #ae0a46;">
                                                View All Hardware
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="" style="border-top: 3px solid #ae0a46;">
                                                View All Training
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item dropdown position-static cool-link main-menu-specing">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                SOLUTION
                            </a>
                            <ul class="dropdown-menu full-container-dropdown border-0"
                                style="border-top: 1px solid #ae0a460f !important;">
                                <div class="container-fluid">
                                    <div class="row pt-5 pb-5 tech-top bg-white">
                                        <div class="col-lg-4">
                                            <p class="fw-bold"><span
                                                    style="border-top: 4px solid #ae0a46;">Sol</span>utions Services
                                            </p>
                                            <div class="row">
                                                @if ($solutions)
                                                    @foreach ($solutions as $item)
                                                        <div class="col-lg-6">
                                                            <a class="d-flex align-items-center"
                                                                href="{{ isset($item->slug) ? route('solution.details', ['id' => $item->slug]) : '' }}">
                                                                <div>{{ Str::limit($item->name, 20) }}</div>
                                                                <div>
                                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <p class="fw-bold"><span
                                                    style="border-top: 4px solid #ae0a46;">Ind</span>ustries Services
                                            </p>
                                            <div class="row">
                                                @if (count($industrys) > 0)
                                                    @foreach ($industrys as $item)
                                                        @php
                                                            $ind = App\Models\Admin\Industry::where('id', $item->industry_id)
                                                                ->select('id', 'slug', 'title')
                                                                ->first();

                                                        @endphp
                                                        <div class="col-lg-6">
                                                            <a class="d-flex align-items-center"
                                                                href="{{ route('industry.details', $ind->slug) }}">
                                                                <div>{{ $ind->title }} </div>
                                                                <div>
                                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <p class="fw-bold"><span
                                                    style="border-top: 4px solid #ae0a46;">Tec</span>hnologies Services
                                            </p>
                                            <div class="row">
                                                @if ($features)
                                                    @foreach ($features as $item)
                                                        <div class="col-lg-12">
                                                            <a class="d-flex align-items-center"
                                                                href="{{ route('feature.details', $item->id) }}">
                                                                <div>{{ Str::limit($item->title, 60) }}</div>
                                                                <div>
                                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-3 pb-3 tech-top">
                                        <div class="col-lg-4">
                                            <a href="{{ route('whatwedo') }}" style="border-top: 3px solid #ae0a46;">
                                                What We Do
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="{{ route('all.industry') }}"
                                                style="border-top: 3px solid #ae0a46;">
                                                View All Industries
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="{{ route('all.solution') }}"
                                                style="border-top: 3px solid #ae0a46;">
                                                View All Solutions
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item dropdown position-static cool-link main-menu-specing">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                SHOP ONLINE
                            </a>
                            <ul class="dropdown-menu full-container-dropdown border-0"
                                style="border-top: 1px solid #ae0a460f !important;">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-3 bg-white pt-5 pb-5 shop-menu-left">
                                            <p class="fw-bold"><span
                                                    style="border-top: 4px solid #ae0a46;">Sho</span>p By Product</p>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-12">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-12">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-12">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-12">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-12">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 bg-white pt-5 pb-5">
                                            <p class="fw-bold"><span
                                                    style="border-top: 4px solid #ae0a46;">Sho</span>p By Category</p>
                                            <div class="row">
                                                @if (!empty($categorys))
                                                    @foreach ($categorys as $item)
                                                        <div class="col-lg-12">
                                                            <a class="d-flex align-items-center"
                                                                href="{{ route('custom.product', $item->slug) }}">
                                                                <div>{{ $item->title }}</div>
                                                                <div>
                                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-3 bg-white pt-5 pb-5">
                                            <p class="fw-bold"><span
                                                    style="border-top: 4px solid #ae0a46;">Sho</span>p Brand</p>
                                            <div class="row">
                                                @if ($brands)
                                                    @foreach ($brands as $item)
                                                        <div class="col-lg-12">
                                                            <a class="d-flex align-items-center"
                                                                href="{{ route('custom.product', App\Models\Admin\Brand::where('id', $item->brand_id)->value('slug')) }}">
                                                                <div>
                                                                    {{ App\Models\Admin\Brand::where('id', $item->brand_id)->value('title') }}
                                                                </div>
                                                                <div>
                                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-3 pt-5 pb-5" style="background: #f7f6f5;">
                                            <p class="fw-bold"><span
                                                    style="border-top: 4px solid #ae0a46;">Exp</span>lore Deals</p>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-3 pb-3 tech-top">
                                        <div class="col-lg-3 ps-0 pe-0">
                                            <a href="{{ route('shop') }}" style="border-top: 3px solid #ae0a46;">
                                                View All Shop
                                            </a>
                                        </div>
                                        <div class="col-lg-3 ">
                                            <a href="{{ route('all.category') }}"
                                                style="border-top: 3px solid #ae0a46;margin-left: -2.3rem;">
                                                View All Category
                                            </a>
                                        </div>
                                        <div class="col-lg-3">
                                            <a href="{{ route('all.brand') }}"
                                                style="border-top: 3px solid #ae0a46;">
                                                View All Brands
                                            </a>
                                        </div>
                                        <div class="col-lg-3 ps-5">
                                            <a href="" style="border-top: 3px solid #ae0a46;">
                                                View All Deals
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item dropdown position-static cool-link">
                            <a class="nav-link dropdown-toggle pe-0" href="#" role="button"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                CONNECT US
                            </a>
                            <ul class="dropdown-menu full-container-dropdown border-0"
                                style="border-top: 1px solid #ae0a460f !important; width: 89% !important;">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-4 p-left-rem pt-3 pb-3" style="background: #f7f6f5;">
                                            <p class="fw-bold text-center">
                                                <span style="border-top: 4px solid #ae0a46;">Soc</span>ial
                                            </p>
                                            <li class="d-flex justify-content-center py-3">
                                                <a href="{{ !empty($setting->facebook_url) ? $setting->facebook_url : '' }}"
                                                    class="social_icons"><i class="h4 fa-brands fa-square-facebook"
                                                        aria-hidden="true"></i></a>
                                                <a href="{{ !empty($setting->twitter_url) ? $setting->twitter_url : '' }}"
                                                    class="ms-2 social_icons">
                                                    <i class="h4 fa-brands fa-linkedin"></i></a>
                                                <a href="{{ !empty($setting->linkedin_url) ? $setting->linkedin_url : '' }}"
                                                    class="ms-2 social_icons">
                                                    <i class="h4 fa-brands fa-square-twitter"></i></a>
                                                <a href="{{ !empty($setting->youtube_url) ? $setting->youtube_url : '' }}"
                                                    class="ms-2 social_icons">
                                                    <i class="h4 fa-brands fa-square-youtube"></i></a>
                                                <a href="{{ !empty($setting->instagram_url) ? $setting->instagram_url : '' }}"
                                                    class="ms-2 social_icons">
                                                    <i class="h4 fa-brands fa-square-instagram"></i></a>
                                            </li>
                                        </div>
                                        <div class="col-lg-8 p-right-rem pt-3 pb-3">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <p class="fw-bold">
                                                        <span style="border-top: 4px solid #ae0a46;">Our</span> Company
                                                    </p>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <a class="d-flex align-items-center" href="">
                                                                <div>Software Software </div>
                                                                <div>
                                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <p class="fw-bold">
                                                        <span style="border-top: 4px solid #ae0a46;">Car</span>eer With
                                                        Us
                                                    </p>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <a class="d-flex align-items-center" href="">
                                                                <div>Software Software </div>
                                                                <div>
                                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <p class="fw-bold">
                                                        <span style="border-top: 4px solid #ae0a46;">Par</span>Partner
                                                        With Us
                                                    </p>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <a class="d-flex align-items-center" href="">
                                                                <div>Software Software </div>
                                                                <div>
                                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>


{{-- Mobile Menu Offcanvas --}}
<div class="offcanvas offcanvas-end" tabindex="-1" id="rightOffcanvas" aria-labelledby="rightOffcanvasLabel">
    <div class="offcanvas-header">
        <a class="navbar-brand fw-bold upper-content-menu main-logo" href="">
            <img height="50px" src="http://ngenitltd.com/storage/x2hdT6tgDe2LKI5NlFaV2Hi37dZal2yqVTjWp03y.png"
                alt="">
        </a>

        <button class="offcanvas-icons upper-content-menu text-reset" data-bs-dismiss="offcanvas" aria-label="Close"
            style="padding-left: none !important;">
            <i class="fa-solid fa-xmark" style="font-size: 18px !important;"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        
        <div>
            <form method="post" action="{{ route('product.search') }}"  class="d-flex ms-auto upper-content-menu" role="search">
                @csrf
                <div class="input-group flex-nowrap search-input-container">
                    <span class="input-group-text search-box-areas" id="addon-wrapping"><i
                            class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" class="form-control search-input-field" id="search_text" name="search" type="search"
                        placeholder="Search for products, solutions & more..."
                        aria-describedby="addon-wrapping">
                </div>
            </form>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown position-static cool-link main-menu-specing">
                    <a class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        SOLUTION
                    </a>
                    <ul class="dropdown-menu full-container-dropdown border-0"
                        style="border-top: 1px solid #ae0a460f !important;">
                        <div class="container-fluid">
                            <div class="row pt-5 pb-5 tech-top bg-white">
                                <div class="col-lg-4">
                                    <p class="fw-bold"><span
                                            style="border-top: 4px solid #ae0a46;">Sol</span>utions Services
                                    </p>
                                    <div class="row">
                                        @if ($solutions)
                                            @foreach ($solutions as $item)
                                                <div class="col-lg-6">
                                                    <a class="d-flex align-items-center"
                                                        href="{{ isset($item->slug) ? route('solution.details', ['id' => $item->slug]) : '' }}">
                                                        <div>{{ Str::limit($item->name, 20) }}</div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <p class="fw-bold"><span
                                            style="border-top: 4px solid #ae0a46;">Ind</span>ustries Services
                                    </p>
                                    <div class="row">
                                        @if (count($industrys) > 0)
                                            @foreach ($industrys as $item)
                                                @php
                                                    $ind = App\Models\Admin\Industry::where('id', $item->industry_id)
                                                        ->select('id', 'slug', 'title')
                                                        ->first();

                                                @endphp
                                                <div class="col-lg-6">
                                                    <a class="d-flex align-items-center"
                                                        href="{{ route('industry.details', $ind->slug) }}">
                                                        <div>{{ $ind->title }} </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <p class="fw-bold"><span
                                            style="border-top: 4px solid #ae0a46;">Tec</span>hnologies Services
                                    </p>
                                    <div class="row">
                                        @if ($features)
                                            @foreach ($features as $item)
                                                <div class="col-lg-12">
                                                    <a class="d-flex align-items-center"
                                                        href="{{ route('feature.details', $item->id) }}">
                                                        <div>{{ Str::limit($item->title, 60) }}</div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3 pb-3 tech-top">
                                <div class="col-lg-4">
                                    <a href="{{ route('whatwedo') }}" style="border-top: 3px solid #ae0a46;">
                                        What We Do
                                    </a>
                                </div>
                                <div class="col-lg-4">
                                    <a href="{{ route('all.industry') }}"
                                        style="border-top: 3px solid #ae0a46;">
                                        View All Industries
                                    </a>
                                </div>
                                <div class="col-lg-4">
                                    <a href="{{ route('all.solution') }}"
                                        style="border-top: 3px solid #ae0a46;">
                                        View All Solutions
                                    </a>
                                </div>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="nav-item dropdown position-static cool-link main-menu-specing">
                    <a class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        PRODUCT
                    </a>
                    <ul class="dropdown-menu full-container-dropdown border-0"
                        style="border-top: 1px solid #ae0a460f !important;">
                        <div class="container-fluid">
                            <div class="row pt-5 pb-5 tech-top bg-white">
                                <div class="col-lg-4">
                                    <p class="fw-bold"><span
                                            style="border-top: 4px solid #ae0a46;">Sof</span>tware Services
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <p class="fw-bold"><span
                                            style="border-top: 4px solid #ae0a46;">Har</span>dware Services
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <p class="fw-bold"><span
                                            style="border-top: 4px solid #ae0a46;">Tra</span>ining Services
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3 pb-3 tech-top">
                                <div class="col-lg-4">
                                    <a href="" style="border-top: 3px solid #ae0a46;">
                                        View All Software Software 
                                    </a>
                                </div>
                                <div class="col-lg-4">
                                    <a href="" style="border-top: 3px solid #ae0a46;">
                                        View All Hardware
                                    </a>
                                </div>
                                <div class="col-lg-4">
                                    <a href="" style="border-top: 3px solid #ae0a46;">
                                        View All Training
                                    </a>
                                </div>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="nav-item dropdown position-static cool-link main-menu-specing">
                    <a class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        SHOP ONLINE
                    </a>
                    <ul class="dropdown-menu full-container-dropdown border-0"
                        style="border-top: 1px solid #ae0a460f !important;">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-3 bg-white pt-5 pb-5 shop-menu-left">
                                    <p class="fw-bold"><span
                                            style="border-top: 4px solid #ae0a46;">Sho</span>p By Product</p>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-12">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-12">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-12">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-12">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-12">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 bg-white pt-5 pb-5">
                                    <p class="fw-bold"><span
                                            style="border-top: 4px solid #ae0a46;">Sho</span>p By Category</p>
                                    <div class="row">
                                        @if (!empty($categorys))
                                            @foreach ($categorys as $item)
                                                <div class="col-lg-12">
                                                    <a class="d-flex align-items-center"
                                                        href="{{ route('custom.product', $item->slug) }}">
                                                        <div>{{ $item->title }}</div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3 bg-white pt-5 pb-5">
                                    <p class="fw-bold"><span
                                            style="border-top: 4px solid #ae0a46;">Sho</span>p Brand</p>
                                    <div class="row">
                                        @if ($brands)
                                            @foreach ($brands as $item)
                                                <div class="col-lg-12">
                                                    <a class="d-flex align-items-center"
                                                        href="{{ route('custom.product', App\Models\Admin\Brand::where('id', $item->brand_id)->value('slug')) }}">
                                                        <div>
                                                            {{ App\Models\Admin\Brand::where('id', $item->brand_id)->value('title') }}
                                                        </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3 pt-5 pb-5" style="background: #f7f6f5;">
                                    <p class="fw-bold"><span
                                            style="border-top: 4px solid #ae0a46;">Exp</span>lore Deals</p>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a class="d-flex align-items-center" href="">
                                                <div>Software Software </div>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3 pb-3 tech-top">
                                <div class="col-lg-3 ps-0 pe-0">
                                    <a href="{{ route('shop') }}" style="border-top: 3px solid #ae0a46;">
                                        View All Shop
                                    </a>
                                </div>
                                <div class="col-lg-3 ">
                                    <a href="{{ route('all.category') }}"
                                        style="border-top: 3px solid #ae0a46;margin-left: -2.3rem;">
                                        View All Category
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{ route('all.brand') }}"
                                        style="border-top: 3px solid #ae0a46;">
                                        View All Brands
                                    </a>
                                </div>
                                <div class="col-lg-3 ps-5">
                                    <a href="" style="border-top: 3px solid #ae0a46;">
                                        View All Deals
                                    </a>
                                </div>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="nav-item dropdown position-static cool-link">
                    <a class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        CONNECT US
                    </a>
                    <ul class="dropdown-menu full-container-dropdown border-0"
                        style="border-top: 1px solid #ae0a460f !important;;">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-4 p-left-rem pt-3 pb-3" style="background: #f7f6f5;">
                                    <p class="fw-bold">
                                        <span style="border-top: 4px solid #ae0a46;">Our</span> Company
                                    </p>
                                    <li class="d-flex justify-content-start py-3">
                                        <a href="{{ !empty($setting->facebook_url) ? $setting->facebook_url : '' }}"
                                            class="social_icons"><i class="h4 fa-brands fa-square-facebook"
                                                aria-hidden="true"></i></a>
                                        <a href="{{ !empty($setting->twitter_url) ? $setting->twitter_url : '' }}"
                                            class="ms-2 social_icons">
                                            <i class="h4 fa-brands fa-linkedin"></i></a>
                                        <a href="{{ !empty($setting->linkedin_url) ? $setting->linkedin_url : '' }}"
                                            class="ms-2 social_icons">
                                            <i class="h4 fa-brands fa-square-twitter"></i></a>
                                        <a href="{{ !empty($setting->youtube_url) ? $setting->youtube_url : '' }}"
                                            class="ms-2 social_icons">
                                            <i class="h4 fa-brands fa-square-youtube"></i></a>
                                        <a href="{{ !empty($setting->instagram_url) ? $setting->instagram_url : '' }}"
                                            class="ms-2 social_icons">
                                            <i class="h4 fa-brands fa-square-instagram"></i></a>
                                    </li>
                                </div>
                                <div class="col-lg-8 p-right-rem pt-3 pb-3">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p class="fw-bold">
                                                <span style="border-top: 4px solid #ae0a46;">Our</span> Company
                                            </p>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <p class="fw-bold">
                                                <span style="border-top: 4px solid #ae0a46;">Car</span>eer With
                                                Us
                                            </p>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <p class="fw-bold">
                                                <span style="border-top: 4px solid #ae0a46;">Par</span>Partner
                                                With Us
                                            </p>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <a class="d-flex align-items-center" href="">
                                                        <div>Software Software </div>
                                                        <div>
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </li>
            </ul>
            {{-- <div class="search-container">
                <form method="post" action="{{ route('product.search') }}">
                    @csrf
                    <input class="search" id="search_text" name="search" type="search" placeholder="Search"
                        style="width: 296px;">
                    <label class="search_buttons searchbutton" for="search_text"><span
                            class="mglass">&#9906;</span></label>
                </form>
            </div> --}}
        </div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get all dropdown links
        var dropdownLinks = document.querySelectorAll('.navbar-nav .nav-link');

        // Add click event listener to each dropdown link
        dropdownLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                // Remove the 'active' class from all dropdown links
                dropdownLinks.forEach(function(otherLink) {
                    otherLink.parentNode.classList.remove('active');
                });

                // Add the 'active' class to the clicked dropdown link's parent
                this.parentNode.classList.add('active');
            });
        });

        // Add an event listener for when the dropdown is hidden
        document.querySelector('.navbar-nav').addEventListener('hidden.bs.dropdown', function() {
            // Remove the 'active' class from all dropdown links when the dropdown is hidden
            dropdownLinks.forEach(function(link) {
                link.parentNode.classList.remove('active');
            });
        });
    });
</script>
