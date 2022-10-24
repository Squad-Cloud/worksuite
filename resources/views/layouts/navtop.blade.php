<!-- Top Navbar -->
<nav class="hk-navbar navbar navbar-expand-xl navbar-light fixed-top">
    <div class="container-fluid">
    <!-- Start Nav -->
    <div class="nav-start-wrap">
        <button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle d-xl-none"><span class="icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span></button>
            
        <!-- Search -->
        <form class="dropdown navbar-search">
            <div class="dropdown-toggle no-caret" data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="outside">
                <a href="#" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover  d-xl-none"><span class="icon"><span class="feather-icon"><i data-feather="search"></i></span></span></a>
                <div class="input-group d-xl-flex d-none">
                    <span class="input-affix-wrapper input-search affix-border">
                        <input type="text" class="form-control  bg-transparent"  data-navbar-search-close="false" placeholder="Search..." aria-label="Search">
                        <span class="input-suffix"><span>/</span>
                            <span class="btn-input-clear"><i class="bi bi-x-circle-fill"></i></span>
                            <span class="spinner-border spinner-border-sm input-loader text-primary" role="status">
                                <span class="sr-only">Loading...</span>
                            </span>
                        </span>
                    </span>
                </div>
            </div>
            <div  class="dropdown-menu p-0">
                <!-- Mobile Search -->
                <div class="dropdown-item d-xl-none bg-transparent">
                    <div class="input-group mobile-search">
                        <span class="input-affix-wrapper input-search">
                            <input type="text" class="form-control" placeholder="Search..." aria-label="Search">
                            <span class="input-suffix">
                                <span class="btn-input-clear"><i class="bi bi-x-circle-fill"></i></span>
                                <span class="spinner-border spinner-border-sm input-loader text-primary" role="status">
                                    <span class="sr-only">Loading...</span>
                                </span>
                            </span>
                        </span>
                    </div>
                </div>
                <!--/ Mobile Search -->
                <div data-simplebar class="dropdown-body p-2">
                    <h6 class="dropdown-header">Recent Search
                    </h6>
                    <div class="dropdown-item bg-transparent">
                        <a href="#" class="badge badge-pill badge-soft-secondary">Grunt</a>
                        <a href="#" class="badge badge-pill badge-soft-secondary">Node JS</a>
                        <a href="#" class="badge badge-pill badge-soft-secondary">SCSS</a>
                    </div>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">Help
                    </h6>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <div class="media align-items-center">
                            <div class="media-head me-2">
                                <div class="avatar avatar-icon avatar-xs avatar-soft-light avatar-rounded">
                                    <span class="initial-wrap">
                                        <span class="svg-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                             </svg>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="media-body">
                                How to setup theme?
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <div class="media align-items-center">
                            <div class="media-head me-2">
                                <div class="avatar avatar-icon avatar-xs avatar-soft-light avatar-rounded">
                                    <span class="initial-wrap">
                                        <span class="svg-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                             </svg>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="media-body">
                                View detail documentation
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">Users
                    </h6>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <div class="media align-items-center">
                            <div class="media-head me-2">
                                <div class="avatar avatar-xs avatar-rounded">
                                    <img src="{{asset('assets/dist/img/avatar3.jpg')}}" alt="user" class="avatar-img">
                                </div>
                            </div>
                            <div class="media-body">
                                Sarah Jone
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <div class="media align-items-center">
                            <div class="media-head me-2">
                                <div class="avatar avatar-xs avatar-soft-primary avatar-rounded">
                                    <span class="initial-wrap">J</span>
                                </div>
                            </div>
                            <div class="media-body">
                                Joe Jackson
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <div class="media align-items-center">
                            <div class="media-head me-2">
                                <div class="avatar avatar-xs avatar-rounded">
                                    <img src="{{asset('assets/dist/img/avatar4.jpg')}}" alt="user" class="avatar-img">
                                </div>
                            </div>
                            <div class="media-body">
                                Maria Richard
                            </div>
                        </div>
                    </a>
                </div>
                <div class="dropdown-footer d-xl-flex d-none"><a href="#"><u>Search all</u></a></div>
            </div>
        </form>
        <!-- /Search -->
    </div>
    <!-- /Start Nav -->
    
    <!-- End Nav -->
    <div class="nav-end-wrap">
        <ul class="navbar-nav flex-row">
            <li class="nav-item">
                <div class="dropdown ps-2">
                    <a class=" dropdown-toggle no-caret" href="#" role="button" data-bs-display="static" data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="outside" aria-expanded="false">
                        <div class="avatar avatar-rounded avatar-xs">
                            <img src="{{asset('assets/dist/img/'.Auth::user()->image)}}" alt="user" class="avatar-img">
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <div class="p-2">
                            <div class="media">
                                <div class="media-head me-2">
                                    <div class="avatar avatar-primary avatar-sm avatar-rounded">
                                        <span class="initial-wrap">SA</span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="dropdown">
                                        <a href="#" class="d-block dropdown-toggle link-dark fw-medium">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</a>
                                    </div>
                                    <div class="fs-7">{{ Auth::user()->email }}</div>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" class="d-block fs-8 link-secondary"><u>Sign Out</u></a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- /End Nav -->
    </div>									
</nav>
<!-- /Top Navbar -->