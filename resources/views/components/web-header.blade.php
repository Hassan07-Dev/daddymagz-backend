<header class="site-header mo-left header-full header">
    <!-- main header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix ">
            <div class="container-fluid">
                <div class="header-content-bx">
                    <!-- website logo -->
                    <div class="logo-header">
                        @isset($logo)
                            <a href="{{ route ('home.index') }}"><img src="{{ asset ($logo->logo_image) }}" alt=""/></a>
                        @endisset
                    </div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end kk" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <!-- extra nav -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <ul>
                                <li class="search-btn"><a id="quik-search-btn" href="javascript:;" class="btn radius-xl gray">Search</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Quik search -->
                    <div class="dlab-quik-search">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="enter your keyword ...">
                            <span  id="quik-search-remove"><i class="ti-close"></i></span>
                        </form>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-center nav-dark" id="navbarNavDropdown">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="{{ route ('home.index') }}">Home</a>
                                <!-- <ul class="sub-menu">
                                    <li><a href="index">Home 01</a></li>
                                    <li><a href="index-2">Home 02</a></li>
                                    <li><a href="index-3">Home 03</a></li>
                                    <li><a href="index-4">Home 04</a></li>
                                    <li><a href="index-5">Home 05</a></li>
                                </ul>	 -->
                            </li>
                            <!-- <li>
                                <a href="#">Blog</a>
                            </li> -->
                            <li>
                                <a href="#">Categories<i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="javascript:;" data-val="0" class="filter_base">All</a></li>
                                    @isset($categories)
                                        @foreach($categories as $category)
                                            <li><a href="javascript:;" data-val="{{ $category->id }}" class="filter_base">{{ $category->category_name }}</a></li>
                                        @endforeach
                                    @endisset
                                </ul>
                            </li>
                            <li><a href="{{ route ('about.index') }}">About</a></li>
                            <li><a href="{{ route ('contactUs.index') }}">Contact</a></li>
                        </ul>
                        <ul class="social-icon-c">
                            <li><a href="https://www.facebook.com/daddymagz" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/daddy_magz/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/daddy-magz/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://twitter.com/daddy_magz" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                        <div class="social-menu">
                            <ul>
                                <li><a href="https://www.facebook.com/daddymagz" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/daddy_magz/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/daddy-magz/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://twitter.com/daddy_magz" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>
