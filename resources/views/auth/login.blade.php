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
    <title>Login | JurisLPM</title>
    <meta name="description" content="A modern CRM Dashboard Template with reusable and flexible components for your SaaS web applications by hencework. Based on Bootstrap."/>
    
	<!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- CSS -->
    <link href="{{('assets/dist/css/style.css')}}" rel="stylesheet" type="text/css">
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
						<div class="col-xl-5 col-lg-6 col-md-7 position-relative mx-auto">
							<div class="auth-content flex-column pt-8 pb-md-8 pb-13">
								<div class="text-center mb-7">
									<a class="navbar-brand me-0" href="#">
										<img class="brand-img d-inline-block" src="{{asset('assets/dist/img/juri-logo.png')}}" alt="brand" width="150" height="48">
									</a>
								</div>
								<form class="w-100" method="POST" action="{{ route('login') }}">
										@csrf
									<div class="row">
										<div class="col-xl-7 col-sm-10 mx-auto">
											<div class="text-center mb-4">
												<h4>@lang('heading.sign-heading')</h4>
												<p>Lorem Ipsum available, in some form, by injected humour nother uperso kinto</p>
											</div>
											<div class="row gx-3">
												<div class="form-group col-lg-12">
													<div class="form-label-group">
														<label>@lang('heading.email')</label>
													</div>
													<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

													@error('email')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
												</div>
												<div class="form-group col-lg-12">
													<div class="form-label-group">
														<label>@lang('heading.password')</label>
														<a href="#" class="fs-7 fw-medium">@lang('heading.forget-password')</a>
													</div>
													<div class="input-group password-check">
														<span class="input-affix-wrapper affix-wth-text">
															<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
															
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
											<div class="d-flex justify-content-center">
												<div class="form-check form-check-sm mb-3">
													<input type="checkbox" class="form-check-input" id="logged_in" checked>
													<label class="form-check-label text-muted fs-7" for="logged_in">@lang('heading.remember-me')</label>
												</div>
											</div>
											{{-- <a href="#" class="btn btn-primary btn-uppercase btn-block">@lang('heading.login')</a> --}}
											<button type="submit" class="btn btn-primary btn-uppercase btn-block">
											@lang('heading.login')
											</button>
											<p class="p-xs mt-2 text-center">@lang('heading.new-to-jurislpm?') <a href="{{route('register')}}"><u>@lang('heading.new-account')</u></a></p>
											<a href="#" class="d-block extr-link text-center mt-4"><span class="feather-icon"><i data-feather="external-link"></i></span><u class="text-muted">@lang('heading.feedback')</u></a>
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
						<div class="col-xl-7 col-lg-6 col-md-5 col-sm-10 d-md-block d-none position-relative bg-primary-light-5">
							<div class="auth-content flex-column text-center py-8">
								<div class="row">
									<div class="col-xxl-7 col-xl-8 col-lg-11 mx-auto">
										<h2 class="mb-4">@lang('heading.meeting')</h2>
										<p>There are many variations of passages of Lorem Ipsum available, passages of Lorem Ipsum available, in some form, by injected.</p>
										<button class="btn  btn-flush-primary btn-uppercase mt-2">@lang('heading.take-tour')</button>
									</div>
								</div>
								<img src="{{asset('assets/dist/img/macaroni-logged-out.png')}}"  class="img-fluid w-sm-50 mt-7" alt="login"/>
							</div>
							<p class="p-xs credit-text opacity-55">@lang('heading.footer') <a href="#" target="_blank" class="text-light"><u>@lang('heading.icons8')</u></a></p>
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
</body>
</html>