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
                     <!-- Matters--> 
                     <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#Matters">
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
                                <span class="nav-link-text">Matters</span>
                            </a>
                            <ul id="Matters" class="nav flex-column collapse  nav-children">
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
                    <!---End--->
                     <!-- Tasks--> 
                     <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#Tasks">
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
                                <span class="nav-link-text">Tasks</span>
                            </a>
                            <ul id="Tasks" class="nav flex-column collapse  nav-children">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('all_tasks')}}"><span class="nav-link-text">Tasks List</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('add_tasks')}}"><span class="nav-link-text">Add Task</span></a>
                                        </li>
                                    </ul>	
                                </li>	
                            </ul>	
                        </li>
                    </ul>
                    <!---End--->
                     <!-- Calender--> 
                     <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#Calender">
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
                                <span class="nav-link-text">Calender</span>
                            </a>
                            <ul id="Calender" class="nav flex-column collapse  nav-children">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('view_calender')}}"><span class="nav-link-text">View Calender</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('add_event')}}"><span class="nav-link-text">Add Event</span></a>
                                        </li>
                                    </ul>	
                                </li>	
                            </ul>	
                        </li>
                    </ul>
                    <!---End--->
                     <!-- Clients--> 
                     <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#Clients">
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
                                <span class="nav-link-text">Clients</span>
                            </a>
                            <ul id="Clients" class="nav flex-column collapse  nav-children">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('all_client')}}"><span class="nav-link-text">View Clients</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('add_client')}}"><span class="nav-link-text">Add Clients</span></a>
                                        </li>
                                    </ul>	
                                </li>	
                            </ul>	
                        </li>
                    </ul>
                    <!---End--->
                     <!-- Activities--> 
                     <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#Activities">
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
                                <span class="nav-link-text">Activities</span>
                            </a>
                            <ul id="Activities" class="nav flex-column collapse  nav-children">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('view_activity')}}"><span class="nav-link-text">View Activities</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('add_activity')}}"><span class="nav-link-text">Add Activity</span></a>
                                        </li>
                                    </ul>	
                                </li>	
                            </ul>	
                        </li>
                    </ul>
                    <!---End--->
                     <!-- Billing--> 
                     <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#Billing">
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
                                <span class="nav-link-text">Billing</span>
                            </a>
                            <ul id="Billing" class="nav flex-column collapse  nav-children">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('all_bill')}}"><span class="nav-link-text">Billing list</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('add_bill')}}"><span class="nav-link-text">Add New Bill</span></a>
                                        </li>
                                    </ul>	
                                </li>	
                            </ul>	
                        </li>
                    </ul>
                    <!---End--->
                     <!-- Accounts--> 
                     <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#Accounts">
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
                                <span class="nav-link-text">Accounts</span>
                            </a>
                            <ul id="Accounts" class="nav flex-column collapse  nav-children">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('all_account')}}"><span class="nav-link-text">View Accounts</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('add_account')}}"><span class="nav-link-text">Add New Account</span></a>
                                        </li>
                                    </ul>	
                                </li>	
                            </ul>	
                        </li>
                    </ul>
                    <!---End--->
                      <!-- Documents--> 
                      <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#Documents">
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
                                <span class="nav-link-text">Documents</span>
                            </a>
                            <ul id="Documents" class="nav flex-column collapse  nav-children">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('all_document')}}"><span class="nav-link-text">View All Documents</span></a>
                                        </li>
                                    </ul>	
                                </li>	
                            </ul>	
                        </li>
                    </ul>
                    <!---End--->
                      <!-- Communications--> 
                      <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#Communications">
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
                                <span class="nav-link-text">Communications</span>
                            </a>
                            <ul id="Communications" class="nav flex-column collapse  nav-children">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('all_employee')}}"><span class="nav-link-text">Chats</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('add_employee')}}"><span class="nav-link-text">New Chat</span></a>
                                        </li>
                                    </ul>	
                                </li>	
                            </ul>	
                        </li>
                    </ul>
                    <!---End--->
                      <!-- Reports--> 
                      <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#Reports">
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
                                <span class="nav-link-text">Reports</span>
                            </a>
                            <ul id="Reports" class="nav flex-column collapse  nav-children">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('task_report')}}"><span class="nav-link-text">Task Report</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('time_log_report')}}"><span class="nav-link-text">Time Log Report</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('finance_report')}}"><span class="nav-link-text">Finance Report</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('income_expense_report')}}"><span class="nav-link-text">Income Vs Expense Report</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('Leave_report')}}"><span class="nav-link-text">Leave Report</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('Attendance_report')}}"><span class="nav-link-text">Attendance Report</span></a>
                                        </li>
                                    </ul>	
                                </li>	
                            </ul>	
                        </li>
                    </ul>
                    <!---End--->
                    <!---Employe Management--->
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#employe">
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
                                <span class="nav-link-text">Employe</span>
                            </a>
                            <ul id="employe" class="nav flex-column collapse  nav-children">
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
                     
                   <!---End--->
                      <!-- Settings--> 
                      <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#Settings">
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
                                <span class="nav-link-text">Settings</span>
                            </a>
                            <ul id="Settings" class="nav flex-column collapse  nav-children">
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
                    <!---End--->
                </div>
                <div class="menu-gap"></div>
            </div>
        </div>
        <!-- /Main Menu -->
    </div>