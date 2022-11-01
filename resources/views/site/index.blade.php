<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurislpm | PMS</title>
    <link rel="stylesheet" href="{{asset('home_assets/css/jurislpm-style.css')}}">
    <link rel="stylesheet" href="{{asset('home_assets/css/styles-top.min.css')}}">
    <style>
	  .ju-main-values{
		display: flex;
		align-items: center;
		justify-content: center;
	  }
	  .ju-main-values img{
		width: 120px;
	  }
	  .ju-main-values .card{
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		padding: 0
	  }
	  .ju-main-values h3{
		padding: 20px 0;
		color: #000;
	  }
	  .ju-main-values p{
		text-align: center;
		color: #000;
		line-height: 1.5;
		padding: 0 20px;
	  }
    .cu-mini-section-gradient{
      background: #dbe3ff;
      padding: 100px 0;
    }
    .cu-mini-section-gradient div{
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }
    .cu-mini-section-gradient p{
      font-size: 40px;
      font-weight: bold;
      color: #000;
      padding: 10px 0 30px 0;
      text-align: center;
    }
    </style>
</head>
    <body>
        <div class="cu-main-section cu-main-section-header cu-main-section-header-home section section_header-white section_header-white_main-landing section_header-white_main-landing_v2">

        <!--Header-->
        <div class="is-canvas__before"></div>

        <div class="header-v4 header-v2022">
          <header id="header" class="header">
            <div class="wrapper header__wrapper wrapper_1200">
              <!-- Jurislpm  Logo -->
              <a class="logo" href="#">
                <img src="{{asset('home_assets/images/juri-logo.png')}}" alt="Jurislpm" width="120">
                <!-- <span class="">Jurislpm</span> -->
              </a>
        
              <!-- Begin Navigation -->
              <nav class="nav navigation__menu" aria-label="Main Navigation">
                <ul id="navigation" class="navigation__list" role="list" style="--indicator-position: 0; --indicator-scale: 76;">
                 
        
                  <li class="navigation__list-item">
                    <a class="navigation__link" href="#">
                      Home
                    </a>
                  </li>
                  <li class="navigation__list-item">
                    <a class="navigation__link" href="#">
                      Features
                    </a>
                  </li>
                  <li class="navigation__list-item">
                    <a class="navigation__link" href="#">
                      Pricing
                    </a>
                  </li>
                  <!-- <li class="navigation__list-item">
                    <a class="navigation__link" href="#">
                      Contact
                    </a>
                  </li> -->
                </ul>
        
                <div class="navigation__auth">
                  <button class="navigation__link axiforma" type="button">
                    Contact Sales
                  </button>
        
                  <div class="navigation__auth-button-group">
                    <a href="{{route('register')}}" class="navigation__auth-item auth__item auth__item_trial axiforma" type="button">
                      Sign Up
</a>
                    <a href="{{route('login')}}" class="navigation__auth-item auth__item auth__item_trial axiforma" type="button">
                      Log in
</a>
        
                    <!-- <a class="navigation__auth-item auth__item auth__item_sign-in axiforma auth__item_trial" href="#">
                      Log in
                    </a> -->
                  </div>
                </div>
              </nav>
        
              <button data-nav-toggle type="button" class="nav-toggle">
                <span class="visually-hidden">Open menu.</span>
              </button>
            </div>
          </header>
        </div>
    
        <!--/Header-->

        <!-- MASTER HEAD -->
        <div class="wrapper cu-main-section-header__wrapper">
            <div class="cu-main-section-header__wrapper-inner">
              <h1 class="cu-main-section-header__title">
                Legal Practice Management 
                <br> Software For All.
              </h1>
              <p class="cu-main-section-header__subtitle">
                Track matters, invoice clients, organise files, manage employees and tasks and so much more!
              </p>
              <div class="cu-em-get-started">
                <input class="cu-em-get-started__input" data-input-landing-page placeholder="Enter your email address" type="email">
                <div class="cu-em-get-started__error" data-error-landing-page>
                  Please enter a valid email address
                </div>
                <button class="btn btn_v2 btn-round">
                  <div class="btn__text">
                    Get Started
                  </div>
                  <div class="btn-spinner">
                    <div class="btn-spinner__bounce1">
                    </div>
                    <div class="btn-spinner__bounce2">
                    </div>
                    <div class="btn-spinner__bounce3">
                    </div>
                  </div>
                </button>
              </div>
              <div class="cu-main-section-header__rating">
                <div class="cu-main-section-header__rating-text">
                  <div class="rating">
                    <span class="rating-star">
                    </span>
                    <span class="rating-star">
                    </span>
                    <span class="rating-star">
                    </span>
                    <span class="rating-star">
                    </span>
                    <span class="rating-star">
                    </span>
                  </div>
                  Based on 10,000+ reviews on
                </div>
                <!-- <div class="rating-logos">
                  <a href="#" target="_blank" rel="nofollow noopener noreferrer">
                    <img alt="G2crowd" height="69" loading="lazy" src="assets/images/g2crowd.png" style="width: 63px;" width="245">
                  </a>
                  <a href="#" target="_blank" rel="nofollow noopener noreferrer">
                    <img alt="Capterra" height="69" loading="lazy" src="assets/images/capterra.png" style="width: 70px;" width="299">
                  </a>
                  <a href="#" target="_blank" rel="nofollow noopener noreferrer">
                    <img alt="Getapp" height="16" loading="lazy" src="assets/fonts/getapp.svg" style="width: 77px;" width="77">
                  </a>
                </div> -->
              </div>
            </div>
            <div class="cu-main-section-header__wrapper-inner">
              <div class="cu-main-section-header__img">
                <picture>
                  <img src="{{asset('home_assets/images/header-img.png')}}" width="977" height="729" alt="">
                </picture>
              </div>
            </div>
        </div>
        </div>
          <!-- MAST HEAD END -->
          
  <!--Join companies-->
  <div class="cu-main-section cu-main-section-companies">
    <div class="cu-main-section__wrapper cu-main-section-companies__wrapper">
      <h1 class="section__header">
        Juris LPM is committed to enabling every law firm to utilise tech..As seen on
      </h1>
      <div class="join-companies">
        <div class="join-companies__row">
          <div class="join-companies__item">
            <img alt="Stanley Security" class="join-companies__logo join-companies__logo_stanley-security" height="" loading="lazy" src="{{asset('home_assets/images/brand1.png')}}" width="150">
          </div>
          <div class="join-companies__item">
            <img alt="Booking.com" class="join-companies__logo join-companies__logo_booking" height="" loading="lazy" src="{{asset('home_assets/images/brand2.png')}}" width="150">
          </div>
          <div class="join-companies__item">
            <img alt="IBM" class="join-companies__logo join-companies__logo_ibm" height="" loading="lazy" src="{{asset('home_assets/images/brand3.png')}}" width="150" style="width: 150px;">
          </div>
          <div class="join-companies__item">
            <img alt="Padres" class="join-companies__logo join-companies__logo_padres" height="" loading="lazy" src="{{asset('home_assets/images/brand4.png')}}" width="150" style="width: 150px;">
          </div>
        </div>
      </div>
    </div>
  </div>
  
    <!--/Join companies-->
    <!-- First Section -->
    <div class="cu-main-section cu-main-section-opportunities cu-main-section_rounded cu-main-section_pink">
     
      <div class="cu-main-section-opportunities__wrapper hide-on-desktop">
        <nav class="cu-main-section-opportunities__tabs-nav" aria-label="Opportunities Navigation">
          <a href="javascript:void(0)" cu-data-tab-nav="project-and-tasks-tab" class="cu-main-section-opportunities__tabs-nav-item cu-tab__item cu-tab__item_active">Productivity</a>
          <a href="javascript:void(0)" cu-data-tab-nav="chat-tab" class="cu-main-section-opportunities__tabs-nav-item cu-tab__item">Experience</a>
          <a href="javascript:void(0)" cu-data-tab-nav="goals-tab" class="cu-main-section-opportunities__tabs-nav-item cu-tab__item">Collaboration</a>
          <!-- <a href="javascript:void(0)" cu-data-tab-nav="all-views-tab" class="cu-main-section-opportunities__tabs-nav-item cu-tab__item">Views</a> -->
        </nav>
      </div>
      <div class="cu-main-section__wrapper cu-main-section-opportunities__wrapper">
        <div class="cu-main-section-opportunities__tabs cu-tab" cu-data-tabs>
          <nav class="cu-main-section-opportunities__tabs-nav show-on-desktop" aria-label="Opportunities Navigation">
            <a href="javascript:void(0)" cu-data-tab-nav="project-and-tasks-tab" class="cu-main-section-opportunities__tabs-nav-item cu-tab__item cu-tab__item_active">Productivity</a>
            <a href="javascript:void(0)" cu-data-tab-nav="chat-tab" class="cu-main-section-opportunities__tabs-nav-item cu-tab__item">Experience</a>
            <a href="javascript:void(0)" cu-data-tab-nav="goals-tab" class="cu-main-section-opportunities__tabs-nav-item cu-tab__item">Collaboration</a>
            
          </nav>
          <div class="cu-main-section-opportunities__tabs-content cu-tab__content" cu-data-tab-content>
            <div class="cu-main-section-opportunities__tabs-panel cu-tab__panel cu-tab__panel_active" cu-data-tab-panel="project-and-tasks-tab">
              <div class="cu-main-section-opportunities__tabs-panel-wrapper">
                <div class="cu-main-section-opportunities__tabs-description">
                  <h2 class="cu-main-section__header cu-main-section-opportunities__header">
                    Close More Deals
                  </h2>
                  <p class="cu-main-section__text cu-main-section-opportunities__text">
                    With our built-in pipeline management feature, you can keep track of where the leads are and what stage they are in the sales funnel which will help your marketing team.
                  </p>
                  <div class="cu-main-section-opportunities__tabs-description-replaces">
                    <!-- <div class="cu-main-section-opportunities__tabs-description-replaces-title">Replaces:</div> -->
                    <div class="cu-main-section-opportunities__tabs-description-replaces-icons">
                      <ul>
                        <li class="cu-main-section-platforms__tabs-nav-item cu-tab__item cu-tab__item ju-list__item_active" style="width:100%;">Manage your workflow and pipeline</li>
                        <li class="cu-main-section-platforms__tabs-nav-item cu-tab__item cu-tab__item ju-list__item_active" style="width:100%;">Get More reviews and referrals</li>
                        <li class="cu-main-section-platforms__tabs-nav-item cu-tab__item cu-tab__item ju-list__item_active" style="width:100%;">All the analytics & reports in one place</li>
                      </ul>
                    </div>
                  </div>
                  <a href="#" class="cu-main-section__btn cu-main-section__btn--pink cu-main-section-opportunities__btn">
                    Get Started
                  </a>
                </div>
                <div class="cu-main-section-opportunities__tabs-image cu-main-section__image">
                  <img height="650" loading="lazy" alt="All views" src="{{asset('home_assets/images/sec1-1.png')}}" width="980">
                </div>
              </div>
            </div>
            <div class="cu-main-section-opportunities__tabs-panel cu-tab__panel" cu-data-tab-panel="chat-tab">
              <div class="cu-main-section-opportunities__tabs-panel-wrapper">
                <div class="cu-main-section-opportunities__tabs-description">
                  <h2 class="cu-main-section__header cu-main-section-opportunities__header">
                    Follow-Up With Leads
                  </h2>
                  <p class="cu-main-section__text cu-main-section-opportunities__text">
                    The backbone of Twilo is what you are able to accomplish after you capture the lead. Our Multi-channel follow up campaigns allow you to automate engaging follow ups and capture engaged responses from your leads with customer data also.
                  </p>
                  <div class="cu-main-section-opportunities__tabs-description-replaces">
                    <div class="cu-main-section-opportunities__tabs-description-replaces-icons">
                  
                      <ul>
                        <li class="cu-main-section-platforms__tabs-nav-item cu-tab__item cu-tab__item ju-list__item_active" style="width:100%;">Easily Customize Your Follow-Up Campaigns
                        </li>
                        <li class="cu-main-section-platforms__tabs-nav-item cu-tab__item cu-tab__item ju-list__item_active" style="width:100%;">Create Multi-Channel Campaigns</li>
                        <li class="cu-main-section-platforms__tabs-nav-item cu-tab__item cu-tab__item ju-list__item_active" style="width:100%;">Power your revenue with email & SMS marketing</li>
                      </ul>
                    </div>
                  </div>
                  <a href="javascript:void(0)" class="cu-main-section__btn cu-main-section__btn--pink cu-main-section-opportunities__btn">
                    Get Started
                  </a>
                </div>
                <div class="cu-main-section-opportunities__tabs-image cu-main-section__image">
                  <img height="650" loading="lazy" alt="All views" src="{{asset('home_assets/images/sec1-2.png')}}" width="980">
                </div>
              </div>
            </div>
            <div class="cu-main-section-opportunities__tabs-panel cu-tab__panel" cu-data-tab-panel="goals-tab">
              <div class="cu-main-section-opportunities__tabs-panel-wrapper">
                <div class="cu-main-section-opportunities__tabs-description">
                  <h2 class="cu-main-section__header cu-main-section-opportunities__header">
                    Capture New Leads
                  </h2>
                  <p class="cu-main-section__text cu-main-section-opportunities__text">
                    Twilo is a full lead generation to helps you grow your business, improve customer service and automate repetitive task.
                  </p>
                  <div class="cu-main-section-opportunities__tabs-description-replaces">
                    <div class="cu-main-section-opportunities__tabs-description-replaces-icons">
                  
                      <ul>
                        <li class="cu-main-section-platforms__tabs-nav-item cu-tab__item cu-tab__item ju-list__item_active" style="width:100%;">Easily Collect the right data
                        </li>
                        <li class="cu-main-section-platforms__tabs-nav-item cu-tab__item cu-tab__item ju-list__item_active" style="width:100%;">People Friendly Surveys</li>
                        <li class="cu-main-section-platforms__tabs-nav-item cu-tab__item cu-tab__item ju-list__item_active" style="width:100%;">Native Online Appointment Scheduling</li>
                      </ul>
                    </div>
                  </div>
                  <a href="javascript:void(0)" class="cu-main-section__btn cu-main-section__btn--pink cu-main-section-opportunities__btn">
                    Get Started
                  </a>
                </div>
                <div class="cu-main-section-opportunities__tabs-image cu-main-section__image">
                  <img height="650" loading="lazy" alt="All views" src="{{asset('home_assets/images/sec1-3.webp')}}" width="980">
                </div>
              </div>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="wavesvg"><path fill="#ffffff" fill-opacity="1" d="M0,160L24,176C48,192,96,224,144,234.7C192,245,240,235,288,192C336,149,384,75,432,80C480,85,528,171,576,170.7C624,171,672,85,720,74.7C768,64,816,128,864,149.3C912,171,960,149,1008,149.3C1056,149,1104,171,1152,165.3C1200,160,1248,128,1296,117.3C1344,107,1392,117,1416,122.7L1440,128L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>
      </div>
    </div>
    <!-- First Section End -->

    <!-- Second Section -->

    <div class="cu-main-section cu-main-section-opportunities cu-main-section_rounded cu-main-section_purple" >
		<div class="cu-main-section__wrapper cu-main-section-opportunities__wrapper" style="border-radius: 60px;">
      		<div class="ju-main-values">
				<div class="card">
					<img src="{{asset('home_assets/images/1.webp')}}" alt="">
					<h3>Capture</h3>
					<p>Capture and convert more leads using high-converting landing pages, surveys, forms, inbound phone system.</p>
				</div>
				<div class="card">
					<img src="{{asset('home_assets/images/2.webp')}}" alt="">
					<h3>Follow-Up</h3>
					<p>Capture and convert more leads using high-converting landing pages, surveys, forms, inbound phone system.</p>
				</div>
				<div class="card">
					<img src="{{asset('home_assets/images/3.webp')}}" alt="">
					<h3>Close</h3>
					<p>Capture and convert more leads using high-converting landing pages, surveys, forms, inbound phone system.</p>
				</div>
			</div>
      	</div>
    </div>
    <!-- Second Section End -->

    <!-- Client Reviews -->
    <div class="cu-main-section cu-main-section-reviews">
      <div class="cu-main-section__wrapper cu-main-section-reviews__wrapper">
        <div class="cu-main-section-reviews__carousel">
          <div class="cu-main-section-reviews__carousel-item">
            <div class="cu-main-section-reviews__carousel-item-wrapper">
              <div class="cu-main-section-reviews__carousel-item-image">
                <img src="{{asset('home_assets/images/client1.png')}}" width="520" loading="lazy" height="509" alt="Jakub, Inbound Marketing Team Lead">
                <a href="#" class="overlay-link">
                </a>
              </div>
              <div class="cu-main-section-reviews__carousel-item-description">
                <div class="cu-main-section-reviews__carousel-item-text">
                  <p>
                    Jurislpm has become such an integral part of our work! By putting our work on Jurislpm and organizing it
                    into Sprints.
                  </p>
                </div>
                <div class="cu-main-section-reviews__carousel-item-logo">
                  <span>Jakub, Inbound Marketing Team Lead, STX Next</span>
                  <!-- <a href="#">
                    <img src="fonts/stxnext.svg" width="140" loading="lazy" height="40" alt="STX Next">
                  </a> -->
                </div>
                <div class="cu-main-section-reviews__carousel-slider-btn-wrap">
                  <button class="prev-slide" type="button">
                    Previous
                  </button>
                  <button class="next-slide" type="button">
                    Next
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="cu-main-section-reviews__carousel-item">
            <div class="cu-main-section-reviews__carousel-item-wrapper">
              <div class="cu-main-section-reviews__carousel-item-image">
                <img src="{{asset('home_assets/images/client1.png')}}" width="520" loading="lazy" height="509" alt="Gabriel Hoffman, Solutions Engineer">
                <a href="#" target="_blank" rel="nofollow noopener noreferrer" class="overlay-link"></a>
              </div>
              <div class="cu-main-section-reviews__carousel-item-description">
                <div class="cu-main-section-reviews__carousel-item-text">
                  <p>
                    After using many different methods to create and manage Scrum frameworks, I finally found the most
                    flexible and powerful platform: Jurislpm.
                  </p>
                </div>
                <div class="cu-main-section-reviews__carousel-item-logo">
                  <!-- <a href="#" target="_blank" rel="nofollow noopener noreferrer">
                    <span>Gabriel Hoffman, Solutions Engineer, Zen Pilot</span>
                    <img src="images/zenpilot.png" width="140" loading="lazy" height="32" alt="">
                  </a> -->
                </div>
                <div class="cu-main-section-reviews__carousel-slider-btn-wrap">
                  <button class="prev-slide" type="button">
                    Previous
                  </button>
                  <button class="next-slide" type="button">
                    Next
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Client Reviews End-->
    <!-- Mini Section -->
    <div>
      <div class="cu-main-section cu-main-section-opportunities cu-main-section_rounded cu-mini-section-gradient " >
          <div>
            <p>Don't wait any longer</p>
            <a href="#" class="cu-main-section__btn cu-main-section__btn--pink cu-main-section-opportunities__btn">
              Get Started
            </a>
          </div>
      </div>
    </div>
    <!-- Mini Section End -->
    <!-- Footer -->
    <div class="cu-main-bottom-gradient">

      <!--Footer-->
      	<div id="bottom" class="bottom">
        	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          		<path fill="#ffffff" fill-opacity="1" d="M0,0L48,32C96,64,192,128,288,160C384,192,480,192,576,165.3C672,139,768,85,864,64C960,43,1056,53,1152,64C1248,75,1344,85,1392,90.7L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
          	</svg>
			<div class="bottom__group bottom__group--v2">
			<div class="bottom__wrapper wrapper wrapper_1200">
				<nav class="bottom__footer-navigation footer-navigation footer-navigation--v2" aria-label="Footer Links.">
				<ul class="footer-navigation__list footer-navigation__list--parent">
					<li class="footer-navigation__item footer-navigation__item--parent">
					<span class="footer-navigation__link footer-navigation__link--parent">Main
					<ul class="footer-navigation__list footer-navigation__list--child" role="list">
						<li class="footer-navigation__item footer-navigation__item--child"><a class="footer-navigation__link footer-navigation__link--child" href="#">Get Started</a></li>
						<li class="footer-navigation__item footer-navigation__item--child"><a class="footer-navigation__link footer-navigation__link--child" href="#">Features</a></li>
						<li class="footer-navigation__item footer-navigation__item--child"><a class="footer-navigation__link footer-navigation__link--child" href="#">Pricing</a></li>
						<li class="footer-navigation__item footer-navigation__item--child">
						<a class="footer-navigation__link footer-navigation__link--child" href="#">Login</a>
						</li>
						
					</ul>
					</li>
					<li class="footer-navigation__item footer-navigation__item--parent">
					<span class="footer-navigation__link footer-navigation__link--parent">Others</span>
					<ul class="footer-navigation__list footer-navigation__list--child" role="list">
						<li class="footer-navigation__item footer-navigation__item--child">
						<a class="footer-navigation__link footer-navigation__link--child" href="#">Terms of use</a>
						</li>
						<li class="footer-navigation__item footer-navigation__item--child"><a class="footer-navigation__link footer-navigation__link--child" href="#">Privacy Policy</a></li>
						<li class="footer-navigation__item footer-navigation__item--child"><a class="footer-navigation__link footer-navigation__link--child" href="#">Contact</a></li>
					</ul>
					</li>
					<li class="footer-navigation__item footer-navigation__item--parent">
					<a href="#" class="footer-navigation__link footer-navigation__link--parent">Contact</a>
					<ul class="footer-navigation__list footer-navigation__list--child" role="list">
						<li class="footer-navigation__item footer-navigation__item--child">
						<a class="footer-navigation__link footer-navigation__link--child" href="#">company@example.com</a>
						</li>
						<li class="footer-navigation__item footer-navigation__item--child">
						<a class="footer-navigation__link footer-navigation__link--child" href="#">+91 1234567890</a>
						</li>
						<li class="footer-navigation__item footer-navigation__item--child">
						<a class="footer-navigation__link footer-navigation__link--child" href="#">4868 Ben Street lansing Michigan</a>
						</li>
					</ul>
					</li>
				</ul>
				</nav>
			</div>
			</div>
      	</div>
      	<footer id="footer" class="footer footer--white">
        
    <div class="wrapper footer__wrapper wrapper_1200">
      	<div class="footer__column">
  
			<!--Copyright-->
			<div class="copyright copyright_v2">
			©
				<script>document.write(new Date().getFullYear());</script> Jurislpm | All rights reserved

			</div>
			<!--/Copyright-->
		</div>
  
      <div class="footer__column footer__column_right">
  
        <!--Socials-->
        <div class="socials">
  
          <!--Linkedin-->
			<a href="#" class="socials__item" rel="nofollow noopener noreferrer" target="_blank">
				<svg class="socials__icon" viewBox="0 0 455.731 455.731">
				<path d="M0,0v455.731h455.731V0H0z M139.94,375.963c0,5.804-4.705,10.509-10.509,10.509H84.71c-5.804,0-10.509-4.705-10.509-10.509  V185.18c0-5.804,4.705-10.509,10.509-10.509h44.721c5.804,0,10.509,4.705,10.509,10.509V375.963z M106.998,145.491  c-20.308,0.411-38.155-16.551-38.151-38.188c0-20.985,17.282-38.105,38.408-38.088c20.873,0.017,38.088,17.257,38.043,38.234  C145.248,129.413,127.02,145.969,106.998,145.491z M386.884,382.153c0,2.41-1.954,4.363-4.364,4.362l-57.152-0.014  c-2.409-0.001-4.362-1.954-4.362-4.363V264.331c0-10.183-4.126-19.407-10.802-26.079c-6.764-6.768-16.149-10.916-26.501-10.799  c-20.279,0.229-36.454,17.068-36.454,37.348v117.323c0,2.41-1.954,4.363-4.364,4.362l-57.011-0.014  c-2.409-0.001-4.361-1.954-4.361-4.362V179.034c0-2.409,1.953-4.363,4.363-4.363h55.795c2.409,0,4.363,1.953,4.363,4.363v23.418  c0.005-0.01,0.225,0.018,0.599,0.075c1.078-1.95,2.252-3.839,3.52-5.658c11.628-16.688,30.96-27.606,52.842-27.606h11.47  c39.996,0,72.42,32.423,72.42,72.42V382.153z"/>
				</svg>
				<span class="visually-hidden">Linkedin</span>
			</a>
          <!--/Linkedin-->
  
          <!--Facebook-->
          <a href="#" class="socials__item" rel="nofollow noopener noreferrer" target="_blank">
            <svg class="socials__icon" viewBox="0 0 455.73 455.73">
              <path d="M0,0v455.73h242.704V279.691h-59.33v-71.864h59.33v-60.353c0-43.893,35.582-79.475,79.475-79.475h62.025v64.622h-44.382  c-13.947,0-25.254,11.307-25.254,25.254v49.953h68.521l-9.47,71.864h-59.051V455.73H455.73V0H0z"/>
            </svg>
            <span class="visually-hidden">Facebook</span>
          </a>
          <!--/Facebook-->
  
          <!--Instagram-->
          <a href="#" class="socials__item" rel="nofollow noopener noreferrer" target="_blank">
            <svg class="socials__icon" viewBox="0 0 512 512">
              <path d="M505 257v107.5c-.2 52-24.4 90.5-67.6 117.7C412 498 384 505 354.2 505c-65.2 0-130.3.3-195.5 0-45.3-.4-84.3-16.4-115.2-50-19-20.8-30.5-45.3-33.8-73.6-.7-6-.8-12-.8-18 0-71.2-.2-142.5 0-213.8C9 97.6 33.3 59 76.5 31.8 102 15.8 130.3 9 160.3 9c65 0 130-.3 195 0 45.5.4 84.6 16.5 115.5 50.3 19 20.7 30.2 45.2 33.4 73.2 1.3 11 .7 22 .8 33V257zm-459 0v110c0 25.2 9.3 47 26.5 65 23 24 52 35.7 85 36 65.7.3 131.3 0 197 0 21.2 0 41.4-4.6 59.8-15.2C448.7 433 468 404 468 363.5V147c0-25-9-46.6-26-64.5-23-24.2-52-36-85-36.3-66.3-.5-132.6-.2-199-.2-20.7 0-40.3 5-58.3 15C65.4 81 46 110 46 150.6V257z"/>
              <path d="M257.3 363C192.7 363 141 311.4 141 247c0-62.7 52.6-114 116.7-114C322 133 374 184.7 374 248.5c0 63.2-52.4 114.5-116.7 114.5zm0-37c44 0 79.7-35 79.7-77.8 0-43-35.5-78.2-79.3-78.2-44 0-79.7 35-79.7 77.8 0 43 35.5 78.2 79.3 78.2zM363 123.6c0-14.2 11-25.6 24.5-25.6 13.6 0 24.5 11.5 24.5 25.6 0 14-11 25.3-24.3 25.4-13.6 0-24.7-11.2-24.7-25.4z"/>
            </svg>
            <span class="visually-hidden">Instagram</span>
          </a>
          <!--Instagram-->
  
          <!--Twitter-->
          <a href="#" class="socials__item" rel="nofollow noopener noreferrer" target="_blank">
            <svg class="socials__icon" viewBox="0 0 310 310">
              <path d="M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73   c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783   c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598   C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467   c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977   c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889   c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597   c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961   c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895   c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367   c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998   C307.394,57.037,305.009,56.486,302.973,57.388z"/>
            </svg>
            <span class="visually-hidden">Twitter</span>
          </a>
          <!--/Twitter-->
  
        </div>
        <!--/Socials-->
  
      </div>
    </div>
  </footer>
  
      <!--/Footer-->
  
    </div>
    <!-- Footer End -->
    <!-- Canvas -->
    <div class="off-canvas off-canvas-v3" id="off-canvas">
      <nav class="nav-canvas">
        <div class="nav-canvas__top">
          <a class="nav-canvas__logo" href="#">Jurislpm</a>
    
          <span class="nav-canvas__modal">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.292893 0.292901C0.683418 -0.0976231 1.31658 -0.0976231 1.70711 0.292901L17.7071 16.2929C18.0976 16.6834 18.0976 17.3166 17.7071 17.7071C17.3166 18.0976 16.6834 18.0976 16.2929 17.7071L0.292893 1.70711C-0.0976312 1.31659 -0.0976309 0.683425 0.292893 0.292901Z" fill="#7C828D"></path>
              <path d="M0.292893 17.7071C0.683418 18.0976 1.31658 18.0976 1.70711 17.7071L17.7071 1.70711C18.0976 1.31658 18.0976 0.683417 17.7071 0.292893C17.3166 -0.0976311 16.6834 -0.097631 16.2929 0.292893L0.292893 16.2929C-0.0976312 16.6834 -0.0976309 17.3166 0.292893 17.7071Z" fill="#7C828D">
            </path></svg>
          </span>
        </div>
        <a class="nav-canvas__item" href="#">Home</a>
        <a class="nav-canvas__item" href="#">Features</a>
        <a class="nav-canvas__item" href="#">Pricing</a>
        <button class="nav-canvas__item" type="button" data-modal="enterprise" >Contact Sales
        </button><button class="nav-canvas__item nav-canvas__item_btn nav-canvas__item_trial" type="button">Sign up</button>
        <a class="nav-canvas__item nav-canvas__item_btn nav-canvas__login" href="#">Login</a>
      </nav>
    </div>
    <!-- Canvas End -->
        <script src="{{asset('home_assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('home_assets/js/auto-slide-tab.js')}}"></script>
		<script type="text/javascript" src="{{asset('home_assets/js/slick.min.js')}}"></script>
        <script>
          $(document).ready(function () {
            $('.cu-main-section-reviews__carousel').slick({
              infinite: false,
              arrows: true,
              dots: false,
              slidesToShow: 1,
              fade: true,
              slidesToScroll: 1,
              focusOnSelect: true,
              adaptiveHeight: true,
              fade: true,
              prevArrow: $('.cu-main-section-reviews__carousel-slider-btn-wrap .prev-slide'),
              nextArrow: $('.cu-main-section-reviews__carousel-slider-btn-wrap .next-slide'),
            });

			$('[cu-data-tab-nav]').on('click', function (e) {
				e.preventDefault();
				e.stopPropagation();

				var $this = $(this);
				var target = $this.attr('cu-data-tab-nav');

				if(($this).closest('.cu-main-section-opportunities__tabs-nav').length) {
				window.clearInterval(loop);
				loop = null
				}
				$this
				.addClass('cu-tab__item_active')
				.siblings()
				.removeClass('cu-tab__item_active');

				$("[cu-data-tab-panel='" + target + "']")
				.addClass('cu-tab__panel_active')
				.siblings()
				.removeClass('cu-tab__panel_active');

				return false;
			});
        });
        </script>
    </body>
</html>