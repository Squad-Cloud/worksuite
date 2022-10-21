@extends('layouts.app')

@section('content')
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{-- {{ session('status') }}
                           
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="">@lang('heading.nam;')</label>
                        <input type="text" name="" id="">
                    </div>
                    
                    <div class="form-group">
                        <label for="">{{ __('heading.age') }}</label>
                        <input type="text" name="" id="">
                    </div>
                    {{ __('validation.accepted') }}
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="hk-pg-wrapper">
        <div class="container-xxl">
            <!-- Page Header -->
            <div class="hk-pg-header pt-7 pb-4">
                <h1 class="pg-title">Add Client</h1>
                <p>Add client information </p>
            </div>
            <!-- /Page Header -->

            <!-- Page Body -->
            <div class="hk-pg-body">
                <div class="row edit-profile-wrap">
                    <!-- <div class="col-lg-2 col-sm-3 col-4">
                        <div class="nav-profile mt-4">
                            <div class="nav-header">
                                <span>Account</span>
                            </div>
                            <ul class="nav nav-light nav-vertical nav-tabs">
                                <li class="nav-item">
                                    <a data-bs-toggle="tab" href="#tab_block_1" class="nav-link active">
                                        <span class="nav-link-text">Public Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a data-bs-toggle="tab" href="#tab_block_2" class="nav-link">
                                        <span class="nav-link-text">Account Settings</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a data-bs-toggle="tab" href="#tab_block_3" class="nav-link">
                                        <span class="nav-link-text">Privacy Settings</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a data-bs-toggle="tab" href="#tab_block_4" class="nav-link">
                                        <span class="nav-link-text">Login & Security</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <span class="nav-link-text">Notifications</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll="" href="#" class="nav-link">
                                        <span class="nav-link-text">Connections</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll="" href="#" class="nav-link">
                                        <span class="nav-link-text">Billing Info</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="col-sm-12">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab_block_1">
                                <form>
                                    <div class="row gx-3">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="media align-items-center">
                                                    <div class="media-head me-5">
                                                        <div class="avatar avatar-rounded avatar-xxl">
                                                            <img src="{{('assets/dist/img/avatar3.jpg')}}" alt="user" class="avatar-img">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="btn btn-soft-primary btn-file mb-1">
                                                            Upload Photo
                                                            <input type="file" class="upload">
                                                        </div>
                                                        <div class="form-text text-muted">
                                                            For better preview recommended size is 450px x 450px. Max size 5mb.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Client Detail</span></div>
                                    <div class="row gx-3">
                                        <div class="col-md-2 col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Salutation</label>
                                                <select class="form-select">
                                                    <option selected>Mr</option>
                                                    <option value="1">Miss</option>
                                                    <option value="2">Mrs</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-8">
                                            
                                            <div class="form-group">
                                                <label class="form-label">Client Name</label>
                                                <input class="form-control" type="text" value=""/>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Client Email</label>
                                                <input class="form-control" type="email" value=""/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Client Password</label>
                                                <input class="form-control" type="email" value=""/>
                                            </div>
                                        </div>
                                        <!-- <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Location</label>
                                                <input class="form-control" type="text" value="Lane no 1, Newyork"/>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Company Detail</span></div>
                                    <div class="row gx-3">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Company Name</label>
                                                <input class="form-control" type="text" value=""/>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Website</label>
                                                <input class="form-control" type="url" value=""/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-label-group">
                                                    <label class="form-label">Address</label>
                                                    <small class="text-muted">1200</small>
                                                </div>
                                                <textarea class="form-control" rows="8" placeholder="Write your address here"></textarea>
                                                <small class="form-text text-muted">
                                                    Write down your complete address.
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-lg-3">
                                            <label class="form-label">Mobile</label>
                                            <div class="input-group mb-3">
                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">----</button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">333</a></li>
                                                    <li><a class="dropdown-item" href="#">300</a></li>
                                                    <li><a class="dropdown-item" href="#">322</a></li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="#">Other</a></li>
                                                </ul>
                                                <input type="number" class="form-control" aria-label="Enter Mobile Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-label">Office Phone Number</label>
                                                <input class="form-control" type="number" value="" min="0"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-label">City</label>
                                                <input class="form-control" type="text" value=""/>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-label">State</label>
                                                <input class="form-control" type="text" value=""/>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-label">Country</label>
                                                <select class="form-select">
                                                    <option selected>Afghanistan</option>
                                                    <option value="1">Pakistan</option>
                                                    <option value="2">United State</option>
                                                    <option value="3">United Kingdom</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-label">Postal Code</label>
                                                <input class="form-control" type="text" value=""/>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-label">Client Category</label>
                                                <select class="form-select">
                                                    <option selected>Category 1</option>
                                                    <option value="1">Category 2</option>
                                                    <option value="2">Category 3</option>
                                                    <option value="3">Category 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-label">Client Sub Category</label>
                                                <select class="form-select">
                                                    <option selected>Sub Category 1</option>
                                                    <option value="1">Sub Category 2</option>
                                                    <option value="2">Sub Category 3</option>
                                                    <option value="3">Sub Category 4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Client Other Details</span></div>
                                    <div class="row gx-3">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-label">Skype</label>
                                                <input class="form-control" type="text" value=""/>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-label">Linkedin</label>
                                                <input class="form-control" type="text" value=""/>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-label">Twitter</label>
                                                <input class="form-control" type="text" value=""/>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-label">Facebook</label>
                                                <input class="form-control" type="text" value=""/>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-label">GST Number</label>
                                                <input class="form-control" type="text" value=""/>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-sm-12">
                                            <div class="form-group">
                                                <div class="form-label-group">
                                                    <label class="form-label">Shipping Address</label>
                                                    <small class="text-muted">1200</small>
                                                </div>
                                                <textarea class="form-control" rows="4" placeholder="Write your Notes here"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                            <label class="form-label">Notes</label>
                                            <div class="" id="tab_classic">
                                                <div class="tinymce-wrap">
                                                    <textarea id="classic">
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <label class="form-label">Send Credentials</label>
                                            <div class="form-check">
                                                <div class="d-inline-block">
                                                    <input type="radio" id="crYes" name="credentialRadio" class="form-check-input">
                                                    <label class="form-check-label" for="crYes">Yes</label>
                                                </div>
                                                <div class="d-inline-block mx-5">
                                                    <input type="radio" id="crNo" name="credentialRadio" checked class="form-check-input">
                                                    <label class="form-check-label" for="crNo">No</label></div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <label class="form-label">Email Notifications</label>
                                            <div class="form-check">
                                                <div class="d-inline-block">
                                                    <input type="radio" id="enYes" name="emailRadio" class="form-check-input">
                                                    <label class="form-check-label" for="enYes">Yes</label>
                                                </div>
                                                <div class="d-inline-block mx-5">
                                                    <input type="radio" id="enNo" name="emailRadio" checked class="form-check-input">
                                                    <label class="form-check-label" for="enNo">No</label></div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Select Language</label>
                                                <select class="form-select">
                                                    <option selected>English</option>
                                                    <option value="1">French</option>
                                                    <option value="2">italian</option>
                                                    <option value="3">Spanish</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary mt-5">Save Changes</button>
                                </form>
                            </div>
                            <!-- <div class="tab-pane fade" id="tab_block_2">
                                <div class="title-lg fs-4"><span>Account Settings</span></div>
                                <p class="mb-4">The Avatar component is used to represent a user, and displays the profile picture, initials or fallback icon.</p>
                                <form>
                                    <div class="row gx-3">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Username</label>
                                                <input class="form-control" type="text" value="Kate"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Email</label>
                                                <input class="form-control" type="text" value="Lane no 1, Newyork"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">URL</label>
                                                <input class="form-control" type="text" value="hencework.com"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Tracking Code</span></div>
                                    <div class="row gx-3">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Google Analytics tracking code</label>
                                                <input class="form-control" type="text" value="UA-1387652-1"/>
                                                <small class="form-text text-muted">
                                                    Track shot and profile views in your Google analytics account, eg. UA-0000000-0
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Account Changes</span></div>
                                    <div class="row gx-3">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <a href="#" class="h5 d-block mb-0">Delete Account</a>
                                                <small class="form-text text-muted">
                                                    Delete account and all your data
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-danger">Close account</button>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary mt-5">Save Changes</button>
                                </form>
                            </div> -->
                            <!-- <div class="tab-pane fade" id="tab_block_3">
                                <div class="title-lg fs-4 mb-4"><span>Privacy Settings</span></div>
                                <form>
                                    <div class="row gx-3">
                                        <div class="col-sm-12">
                                            <div class="form-check form-check-lg">
                                                <input type="checkbox" class="form-check-input" id="customChecks1">
                                                <label class="form-check-label mt-0" for="customChecks1">let others find me by email address</label>
                                                <small class="form-text text-muted d-block">People who have your email address will be able to connect you by Jampack</small>
                                            </div>
                                            <div class="separator"></div>
                                            <div class="form-check form-check-lg">
                                                <input type="checkbox" class="form-check-input" id="customChecks2">
                                                <label class="form-check-label mt-0" for="customChecks2">Keep my phone number private</label>
                                                <small class="form-text text-muted d-block">No one can find you by your phone number. Your phone number will not be shared with your contact anymore.</small>
                                            </div>
                                            <div class="separator"></div>
                                            <div class="form-check form-check-lg">
                                                <input type="checkbox" class="form-check-input" id="customChecks3">
                                                <label class="form-check-label mt-0" for="customChecks3">All Keep my location sharing on</label>
                                                <small class="form-text text-muted d-block">Jmapack webapp shares your location wherever you go</small>
                                            </div>
                                            <div class="separator"></div>
                                            <div class="form-check form-check-lg">
                                                <input type="checkbox" class="form-check-input" id="customChecks4">
                                                <label class="form-check-label mt-0" for="customChecks4">Share data through select partnerships</label>
                                                <small class="form-text text-muted d-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque condimentum mauris volutpat enim ornare iaculis. Curabitur euismod rutrum lorem id lobortis. Cras ut ex dui. Nulla sed blandit tortor. In quam diam, efficitur sit amet pulvinar eget, consequat placerat arcu.</small>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary mt-5">Save Changes</button>
                                </form>
                            </div> -->
                            <!-- <div class="tab-pane fade" id="tab_block_4">
                                <div class="title-lg fs-4"><span>Login & Security</span></div>
                                <p class="mb-4">The Avatar component is used to represent a user, and displays the profile picture, initials or fallback icon.</p>
                                <form>
                                    <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Password Settings</span></div>
                                    <div class="row gx-3">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Password</label>
                                                <input class="form-control" type="password" value="Katervewe"/>
                                                <button type="button" class="btn btn-primary mt-3">Changes password</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Additional Security</span></div>
                                    <div class="row gx-3">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label ">2-Step Verification (2FA)</label>
                                                <small class="form-text text-muted d-block">
                                                    2-step verification drastically reduces the chances of having the personal information in your Google account stolen by someone else. Why? Because hackers would have to not only get your password and your username, they'd have to get a hold of your phone. A <a href="#" class="text-primary">6-digit</a> code may be sent to a number you’ve previously provided. Codes can be sent in a text message (SMS) or through a voice call, which depends on the setting you chose. To verify it’s you, enter the code on the sign-in screen.
                                                </small>
                                                <button type="button" class="btn btn-primary mt-3">Add Authentication</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Body -->		
        </div>
        
        <!-- Page Footer -->
        <div class="hk-footer">
            <footer class="container-xxl footer">
                <div class="row">
                    <div class="col-xl-8">
                        <p class="footer-text"><span class="copy-text">JurisLPM © 2022 All rights reserved.</span> <a href="#" class="" target="_blank">Privacy Policy</a><span class="footer-link-sep">|</span><a href="#" class="" target="_blank">T&C</a><span class="footer-link-sep">|</span><a href="#" class="" target="_blank">System Status</a></p>
                    </div>
                    <div class="col-xl-4">
                        <a href="#" class="footer-extr-link link-default"><span class="feather-icon"><i data-feather="external-link"></i></span><u>Send feedback to our help forum</u></a>
                    </div>
                </div>
            </footer>
        </div>
        <!-- / Page Footer -->

    </div> --}}
   
@endsection
