<!doctype html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta property="og:image" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:type" content="website" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="apple-touch-icon" href="{{url('assets/images/favicon/apple-touch-icon.png')}}">
    <link rel="icon" href="{{url('assets/images/favicon/favicon.ico')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/slick-theme.css')}}"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    @stack('styles')
    <title>@yield('title')</title>
</head>
<body>

<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light cn-stick-nav">
        <div class="container">
            <a class="navbar-brand" href="{{route('web_home')}}">
                <img alt="Adora Group" title="Adora Group" src="{{url('assets/images/adora_logo.svg')}}" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <span class="navbar-text">
              <ul class="list-inline m-0">
                  <li class="list-inline-item">
                      <a href="{{route('web_contact')}}" class="">
                          <img src="{{url('assets/images/location.svg')}}" class="img-fluid">
                      </a>
                  </li>
                  <li class="list-inline-item">
                      <a href="{{route('web_become_partner')}}" class="" title="Business Partnership">
                          <img src="{{url('assets/images/applynow.svg')}}" class="img-fluid">
                      </a>
                  </li>
                  <li class="list-inline-item">
                      Call +91 9656 58 49 47
                  </li>
              </ul>
            </span>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Company
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{route('web_company')}}">Our Story</a>
                            <a class="dropdown-item" href="{{route('web_company')}}#vision_mission">Vision & Mission</a>
                            <a class="dropdown-item" href="{{route('web_company')}}#team">Team</a>
                            <a class="dropdown-item" href="{{route('web_company')}}#group_companies">Group Companies</a>
                            <a class="dropdown-item" href="{{route('web_company')}}#social_responsibilities">Social Responsibilities</a>
                            <a class="dropdown-item" href="{{route('web_company')}}#awards_achivements">Awards & Achivements</a>
                            <a class="dropdown-item" href="{{route('web_contact')}}">Contact</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Business
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{route('web_it_automation')}}">IT & Automation</a>
                            <a class="dropdown-item" href="{{route('web_consulting')}}">Consulting</a>
                            <a class="dropdown-item" href="{{route('web_contracting')}}">Contracting</a>
                            <a class="dropdown-item" href="{{route('web_trading')}}">Trading</a>
                            <a class="dropdown-item" href="{{route('web_marketing_operations')}}">Marketing & Operations</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('web_our_brands')}}">Brands</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Opportunities
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{route('web_become_partner')}}">Business Partnership</a>
                            <a class="dropdown-item" href="{{route('web_job_vacancies')}}">Job Vacancies</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

@yield('content')
<section class="download">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center d-flex justify-content-between">
                    <p>Download Our Business App</p>
                    <a href="https://play.google.com/store/apps/details?id=com.adora.mrm&hl=en_IN" target="_blank">
                        <img src="{{url('assets/images/googleplay.png')}}" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer_contact">
                    <h4>CONTACT</h4>
                    <ul class="list-unstyled">
                        <li>TEL: 0483 2712200</li>
                        <li>General: all@adoragroup.in</li>
                        <li>Help: care@adoragroup.in</li>
                        <li>Email: <a href="mailto:sales@adoragroup.in">sales@adoragroup.in</a></li>
                        <li>
                            <ul class="list-inline socialmedia">
                                <li class="list-inline-item">
                                    <a href="https://www.facebook.com/adoragroup.in" target="_blank">
                                        <img src="{{url('assets/images/facebook.svg')}}" class="img-fluid" alt="Facebook" title="Facebook">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/adoragroup.in/" target="_blank">
                                        <img src="{{url('assets/images/instagram.svg')}}" class="img-fluid" alt="Instagram" title="Instagram">
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer_navigation">
                    <h4>COMPANY</h4>
                    <ul class="list-unstyled m-0">
                        <li><a href="{{route('web_company')}}">About</a></li>
                        <li><a href="{{route('web_company')}}#vision_mission">Vision & Mission</a></li>
                        <li><a href="{{route('web_company')}}#team">Team</a></li>
                        <li><a href="{{route('web_company')}}#group_companies">Group Companies</a></li>
                        <li><a href="{{route('web_company')}}#social_responsibilities">Social Responsibilities</a></li>
                        <li><a href="{{route('web_company')}}#awards_achivements">Awards & Achivements</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer_navigation">
                    <h4>BUSINESS</h4>
                    <ul class="list-unstyled m-0">
                        <li><a href="{{route('web_it_automation')}}">IT</a></li>
                        <li><a href="{{route('web_consulting')}}">Consulting</a></li>
                        <li><a href="{{route('web_contracting')}}">Contracting</a></li>
                        <li><a href="{{route('web_trading')}}">Trading</a></li>
                        <li><a href="{{route('web_marketing_operations')}}">Marketing & Operations</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer_navigation">
                    <h4>OPPORTUNITIES</h4>
                    <ul class="list-unstyled m-0">
                        <li><a href="{{route('web_become_partner')}}">Business Partnership</a></li>
                        <li><a href="{{route('web_job_vacancies')}}">Job Vacancies</a></li>
                        <li></li>
                        <li><a href="{{route('web_contact')}}">Contact</a></li>
                        <li><a href="{{route('web_our_brands')}}">Brands</a></li>
                    </ul>
                </div>
                <div class="col-xl-12 copyright text-center">
                    <p class="m-0 font-size-14">
                        &copy; <?php echo date('Y'); ?> Adora Group. All Rights Reserved.
                    </p>
                </div>

            </div>
        </div>
    </div>
</footer>
<a href="javascript:void(0);" id="toTop" title="Back To Top" style="">
    <span class="svg_item">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 361 365" style="enable-background:new 0 0 361 365;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#FEC20F;}
</style>
<path class="st0" d="M276.86,326.84c-7.51-8.86-14.03-17.92-18.72-23.09c-1.82-2-3.17-5.39-3.03-8.06
	c2.3-46.37,7.41-93.31,7.41-139.72c0.68-12.41-1.39-24.24-8.22-34.75c-13.66-21-36.71-22.54-59.63-21.6
	c-24.31,0.99-48.61,2.04-72.92,3.11c-12.48,0.55-24.96,1.08-37.44,1.67c-8.19,0.39-19.99,3.18-26.44-3.52
	C44.4,86.9,29.47,73.72,17.23,58.62C7.97,47.2,10.33,29.7,27.83,28.74c39.15,0,78.84-4.32,117.94-6.47
	c58.51-3.22,117.01-6.45,175.51-9.69c8.67-0.48,18.49-0.54,24.58,5.66c7.22,7.36,5.4,18.73,4.76,28.02
	c-0.94,13.69-1.88,27.37-2.84,41.06c-1.98,28.01-4.03,56.02-6.07,84.03c-3.98,54.72-7.48,109.46-11.25,164.2
	c-0.53,7.65-4.51,12.33-11.02,14.94C305.09,356.24,289.55,341.81,276.86,326.84z"/>
</svg>

    </span>
</a>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
<script>
    /* Go to top */
    $(function() {
        $(window).scroll(function() {
            if($(this).scrollTop() > 50) {
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();
            }
        });

        $('#toTop').click(function() {
            $('body,html').animate({scrollTop:0},800);
        });
    });


    $(window).scroll(function(){
        if($(this).scrollTop()>5){
            $(".cn-stick-nav").addClass("fixed-top1  nav-bdr bg-white");
        }

        else{
            $(".cn-stick-nav").removeClass("fixed-top1 nav-bdr bg-white");
        }
    });



    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('.header').outerHeight();

    $(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();
        if(Math.abs(lastScrollTop - st) <= delta)
            return;
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('.header').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('.header').removeClass('nav-up').addClass('nav-down');
            }
        }

        lastScrollTop = st;
    }



    //
    // $(function(){
    //     $(window).scroll(function(){
    //         if($(this).scrollTop()>5){
    //             $(".navbar .navbar-brand img").attr("src","assets/images/spe-logo-black.png");
    //         }
    //
    //         else{
    //             $(".navbar .navbar-brand img").attr("src","assets/images/spe-logo.png");
    //         }
    //     })
    // })

</script>
@stack('scripts')
</body>
</html>
