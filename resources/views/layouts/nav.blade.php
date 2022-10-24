    <!-- Vertical Nav -->
    <div class="hk-menu">
        <!-- Brand -->
        <div class="menu-header">
            <span>
                <a class="navbar-brand" href="index.html">
                    <img class="brand-img img-fluid" src="{{asset('assets/dist/img/brand-sm.svg')}}" alt="brand" />
                    <img class="brand-img img-fluid" src="{{asset('assets/dist/img/Jampack.svg')}}" alt="brand" />
                </a>
                <button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle">
                    <span class="icon">
                        <span class="svg-icon ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-bar-to-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="10" y1="12" x2="20" y2="12"></line>
                                <line x1="10" y1="12" x2="14" y2="16"></line>
                                <line x1="10" y1="12" x2="14" y2="8"></line>
                                <line x1="4" y1="4" x2="4" y2="20"></line>
                            </svg>
                        </span>
                    </span>
                </button>
            </span>
        </div>
        <!-- /Brand -->

        <!-- Main Menu -->
        <div data-simplebar class="nicescroll-bar">
            <div class="menu-content-wrap">
                <div class="menu-group">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}">
                                <span class="nav-icon-wrap">
                                    <span class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-template" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <rect x="4" y="4" width="16" height="4" rx="1" />
                                            <rect x="4" y="12" width="6" height="8" rx="1" />
                                            <line x1="14" y1="12" x2="20" y2="12" />
                                            <line x1="14" y1="16" x2="20" y2="16" />
                                            <line x1="14" y1="20" x2="20" y2="20" />
                                        </svg>
                                    </span>
                                </span>
                                <span class="nav-link-text" >Dashboard</span>
                                <span class="badge badge-sm badge-soft-pink ms-auto">Hot</span>
                            </a>
                        </li>
                    </ul>	
                </div>
                <div class="menu-gap"></div>
                <div class="menu-group">
                    <div class="nav-header">
                        <span>Apps</span>
                    </div>
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_chat">
                                <span class="nav-icon-wrap">
                                    <span class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-dots" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                                            <line x1="12" y1="11" x2="12" y2="11.01" />
                                            <line x1="8" y1="11" x2="8" y2="11.01" />
                                            <line x1="16" y1="11" x2="16" y2="11.01" />
                                        </svg>
                                    </span>
                                </span>
                                <span class="nav-link-text">Employee Management</span>
                            </a>
                            <ul id="dash_chat" class="nav flex-column collapse  nav-children">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('all_employee')}}"><span class="nav-link-text">View All Employee</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('add_employee')}}"><span class="nav-link-text">Add New Employee</span></a>
                                        </li>
                                    </ul>	
                                </li>	
                            </ul>	
                        </li>
                    </ul>
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#matter">
                                <span class="nav-icon-wrap">
                                    <span class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-dots" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                                            <line x1="12" y1="11" x2="12" y2="11.01" />
                                            <line x1="8" y1="11" x2="8" y2="11.01" />
                                            <line x1="16" y1="11" x2="16" y2="11.01" />
                                        </svg>
                                    </span>
                                </span>
                                <span class="nav-link-text">Matter Management</span>
                            </a>
                            <ul id="matter" class="nav flex-column collapse  nav-children">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('all_matter')}}"><span class="nav-link-text">View All Matter</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('add_matter')}}"><span class="nav-link-text">Add New Matter</span></a>
                                        </li>
                                    </ul>	
                                </li>	
                            </ul>	
                        </li>
                    </ul>
                </div>
                <div class="menu-gap"></div>
            </div>
        </div>
        <!-- /Main Menu -->
    </div>