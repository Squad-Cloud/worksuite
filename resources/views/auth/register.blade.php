<!DOCTYPE html>
<!-- 
Jampack
Author: Hencework
Contact: contact@hencework.com
-->
<html lang="en">
<head>
    <!-- Meta Tags -->
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup | JurisLPM</title>
    <meta name="description" content="A modern CRM Dashboard Template with reusable and flexible components for your SaaS web applications by hencework. Based on Bootstrap."/>
    
	<!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- CSS -->
    <link href="{{asset('assets/dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
   	<!-- Wrapper -->
	<div class="hk-wrapper hk-pg-auth" data-footer="simple">
		<!-- Main Content -->
		<div class="hk-pg-wrapper py-0">
			<div class="hk-pg-body py-0">
				<!-- Container -->
				<div class="container-fluid">
					<!-- Row -->
					<div class="row auth-split">
						<div class="col-xl-5 col-lg-6 col-md-5 d-md-block d-none bg-primary-dark-3 bg-opacity-85 position-relative">
							<img class="bg-img" src="{{asset('assets/dist/img/signup-bg.jpg')}}" alt="bg-img">
							<div class="auth-content py-8">
								<div class="row">
									<div class="col-xxl-8 mx-auto">
										<div class="text-center">
											<h3 class="text-white mb-2">@lang('heading.sign-up-heading')</h3>
											
										</div>
										<ul class="list-icon text-white mt-4">
											<li class="mb-1"><p><i class="ri-check-fill"></i><span>@lang('heading.sign-up-sub-heading')</span></p></li>
											<li class="mb-1"><p><i class="ri-check-fill"></i><span>@lang('heading.sign-up-inner-heading')</span></p></li>
										</ul>
										<div class="row gx-3 mt-7">
											<div class="col-lg-6">
												<div class="card card-shadow">
													<img class="card-img-top" src="{{asset('assets/dist/img/juri-logo.png')}}" alt="Card image cap" width="100">
													<div class="card-body">
														<h5 class="card-title text-uppercase">@lang('heading.help-centre')</h5>
														<p class="card-text">@lang('heading.help-centre-paragraph')</p>
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="card card-shadow">
													<img class="card-img-top" src="{{asset('assets/dist/img/juri-logo.png')}}" alt="Card image cap">
													<div class="card-body">
														<h5 class="card-title text-uppercase">@lang('heading.research-centre')</h5>
														<p class="card-text">@lang('heading.research-centre-paragraph')</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- <p class="p-xs text-white credit-text opacity-55">All illustration are powered by <a href="#" target="_blank" class="link-white"><u>OUCH</u></a></p> -->
						</div>
						<div class="col-xl-7 col-lg-6 col-md-7 col-sm-10 position-relative mx-auto">
							<div class="auth-content flex-column pt-8 pb-md-8 pb-13">
								<div class="text-center mb-7">
									<a class="navbar-brand me-0" href="#">
										<img class="brand-img d-inline-block" src="{{asset('assets/dist/img/juri-logo.png')}}" alt="brand" width="150" height="48">
									</a>
								</div>
								<form class="w-100" method="POST" action="{{ route('register') }}">
									@csrf
									<div class="row">
										<div class="col-xxl-5 col-xl-7 col-lg-10 mx-auto">
											<h4 class="text-center mb-4">@lang('heading.sign-up-right-heading')</h4>
											<button class="btn btn-outline-dark btn-rounded btn-block mb-3"><span><span class="icon"><i class="fab fa-google"></i></span><span>@lang('heading.sign-up-gmail')</span></span></button>
											<button class="btn btn-social btn-social-facebook btn-rounded btn-block"><span><span class="icon"><i class="fab fa-facebook"></i></span><span>@lang('heading.sign-up-fb')</span></span></button>
											<div class="title-sm title-wth-divider divider-center my-4"><span>Or</span></div>
											<div class="row gx-3">
												<div class="form-group col-lg-6">
													<label class="form-label">@lang('heading.name')</label>
													<input class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Enter your name" value="{{ old('name') }}" required autocomplete="name" autofocus type="text">
												</div>
												<!-- <div class="form-group col-lg-6">
													<label class="form-label">Username</label>
													<input class="form-control" placeholder="Enter username" value="" type="text">
												</div> -->
												<div class="form-group col-lg-6">
													<label class="form-label">@lang('heading.email')</label>
													<input id="email" type="email" placeholder="Enter your email id" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

													@error('email')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
												</div>
												<div class="form-group col-lg-6">
													<label class="form-label">@lang('heading.password')</label>
													<div class="input-group password-check">
														<span class="input-affix-wrapper affix-wth-text">
															<input id="password" type="password" placeholder="6+ characters" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
															<a href="#" class="input-suffix text-primary text-uppercase fs-8 fw-medium">
																<span>@lang('heading.show')</span>
																<span class="d-none">@lang('heading.hide')</span>
															</a>

															@error('password')
																<span class="invalid-feedback" role="alert">
																	<strong>{{ $message }}</strong>
																</span>
															@enderror
														</span>
													</div>
												</div>
												<div class="form-group col-lg-6">
													<label class="form-label">@lang('heading.confirm-password')</label>
													<div class="input-group password-check">
														<span class="input-affix-wrapper affix-wth-text">
															<input id="password-confirm" type="password" placeholder="6+ characters" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
															<a href="#" class="input-suffix text-primary text-uppercase fs-8 fw-medium">
																<span>@lang('heading.show')</span>
																<span class="d-none">@lang('heading.hide')</span>
															</a>

															@error('password')
																<span class="invalid-feedback" role="alert">
																	<strong>{{ $message }}</strong>
																</span>
															@enderror
														</span>
													</div>
												</div>
											</div>
											
											<div class="form-check form-check-sm mb-3">
												<input type="checkbox" class="form-check-input" id="logged_in" checked>
												<label class="form-check-label text-muted fs-8" for="logged_in">By creating an account you specify that you have read and agree with our <a href="#">Tearms of use</a> and <a href="#">Privacy policy</a>. We may keep you inform about latest updates through our default <a href="#">notification settings</a></label>
											</div>
											{{-- <a href="#" class=" "></a> --}}
											<button type="submit" class="btn btn-primary btn-rounded btn-uppercase btn-block">
												@lang('heading.create-acc')
											</button>
											<p class="p-xs mt-2 text-center">@lang('heading.member')<a href="{{route('login')}}"><u>@lang('heading.sign-in')</u></a></p>
										</div>
									</div>
								</form>
							</div>
							<!-- Page Footer -->
							<div class="hk-footer border-0">
								<footer class="container-xxl footer">
									<div class="row">
										<div class="col-xl-8 text-center">
											<p class="footer-text pb-0"><span class="copy-text">@lang('heading.footer-text')</span> <a href="#" class="" target="_blank">@lang('heading.privacy-policy')</a><span class="footer-link-sep">|</span><a href="#" class="" target="_blank">@lang('heading.t&c')</a><span class="footer-link-sep">|</span><a href="#" class="" target="_blank">@lang('heading.system-status')</a></p>
										</div>
									</div>
								</footer>
							</div>
							<!-- / Page Footer -->
						</div>
					</div>
					<!-- /Row -->
				</div>
				<!-- /Container -->
			</div>
			<!-- /Page Body -->
		</div>
		<!-- /Main Content -->
	</div>
    <!-- /Wrapper -->

    <script src="{{asset('assets/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
 <script src="{{asset('assets/dist/js/feather.min.js')}}"></script>
 <script src="{{asset('assets/dist/js/dropdown-bootstrap-extended.js')}}"></script>
 <script src="{{asset('assets/vendors/simplebar/dist/simplebar.min.js')}}"></script>
 <script src="{{asset('assets/dist/js/init.js')}}"></script>
 <script src="https://www.google.com/recaptcha/api.js"></script>
	<script>
		function onSubmit(token) {
		  document.getElementById("demo-form").submit();
		}
	</script>
</body>
</html>