<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/rezume/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Aug 2021 11:34:57 GMT -->

<head>
    <title>Rezume Free Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"
        href="A.css%2c%2c_animate.css%2bcss%2c%2c_flexslider.css%2bfonts%2c%2c_icomoon%2c%2c_style.css%2bcss%2c%2c_bootstrap.css%2bcss%2c%2c_style.css%2cMcc.HqIwWfJCiR.css.pagespeed.cf.bRwe0nwT8S.css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">
    <nav class="navbar navbar-expand-lg site-navbar navbar-light bg-light" id="pb-navbar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09"
                aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample09">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#section-home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section-portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section-resume">Resume</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section-about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section-contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section-contact">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="site-hero" style="background-image: url(<?php echo $main->bc_img ?>);" id="section-home"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row intro-text align-items-center justify-content-center">
                <div class="col-md-10 text-center pt-5">
                    <h1 class="site-heading site-animate">Hello, I'm <strong class="d-block">{{$main->title}}</strong>
                    </h1>
                    <strong class="d-block text-white text-uppercase letter-spacing">{{$main->sub_title}}</strong>
                </div>
            </div>
        </div>
    </section>
    <section class="site-section" id="section-portfolio">
        <div class="container">
            <div class="row">
                <div class="section-heading text-center col-md-12">
                    <h2>Featured <strong>Portfolio</strong></h2>
                </div>
            </div>
            <div class="filters">
                <ul>
                    <li class="active" data-filter="*">All</li>
                </ul>
            </div>
            <div class="filters-content">
                <div class="row grid">
                    @if (count($portfolios) > 0)
                    @foreach ($portfolios as $portfolio)
                    <div class="single-portfolio col-sm-4 all mockup">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img class="image img-fluid" src="{{url($portfolio->big_image)}}">
                            </div>
                        </div>
                        <div class="p-inner">
                            <h4>{{$portfolio->title}}</h4>
                            <div class="cat">{{$portfolio->description}}</div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
    </section>

    <section class="site-section " id="section-resume">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <div class="section-heading text-center">
                        <h2>My <strong>Resume</strong></h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="mb-5">Education</h2>
                    @if (count($resume) > 0)
                    @foreach ($resume as $item)
                    <div class="resume-item mb-4">
                        <span class="date"><span class="icon-calendar"></span> {{$item->date}} </span>
                        <h3>{{$item->title}}</h3>
                        <p>{{$item->description}}</p>
                        <span class="school">{{$item->workplace}}</span>
                    </div>
                    @endforeach
                    @endif
                </div>
                <div class="col-md-6">
                    <h2 class="mb-5">Experience</h2>
                    @if (count($experience) > 0)
                    @foreach ($experience as $item)
                    <div class="resume-item mb-4">
                        <span class="date"><span class="icon-calendar"></span> {{$item->date}} </span>
                        <h3>{{$item->title}}</h3>
                        <p>{{$item->description}}</p>
                        <span class="school">{{$item->workplace}}</span>
                    </div>
                    @endforeach
                    @endif                  
                </div>
            </div>
        </div>
    </section>
    <section class="site-section" id="section-about">
        <div class="container">
            <div class="row mb-5 align-items-center">
                @if (count($me) > 0)
                    @foreach ($me as $item)
                <div class="col-lg-7 pr-lg-5 mb-5 mb-lg-0">
                    <img src="{{url($item->img)}}" alt="Image placeholder" class="img-fluid">
                </div>
                <div class="col-lg-5 pl-lg-5">
                    <div class="section-heading">
                        <h2>About <strong>Me</strong></h2>
                    </div>                    
                    <p class="lead">{{$item->title}}</p>    
                    <p class="mb-5  ">NOTHING LAST FOREVER WE CAN CHANGE THE FUTURE - Alucard</p>
                    @endforeach                        
                    @endif                                        
                    <p>
                        <a href="#section-contact" class="btn btn-primary px-4 py-2 btn-sm smoothscroll">Hire Me</a>
                        <a href="{{url($main->cv)}}" class="btn btn-secondary px-4 py-2 btn-sm">Download CV</a>
                    </p>
                </div>
            </div>
        </div>
    </section>    
    <section class="site-section pb-0" id="section-services">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2>My <strong>Services</strong></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @if (count($about) > 0)
                @foreach ($about as $item)
                <div class="col-md-6 col-lg-4 text-center mb-5">
                    <div class="site-service-item site-animate" data-animate-effect="fadeIn">
                        <span class="icon">
                            <span class="<?php echo $item->icon;?>"></span>
                        </span>
                        <h3 class="mb-4">{{$item->title}}</h3>
                        <p>{{$item->description}}</p>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </section>
    <section class="site-section" id="section-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <div class="section-heading text-center">
                        <h2>Get <strong>In Touch</strong></h2>
                    </div>
                </div>
                <div class="col-md-7 mb-5 mb-md-0">
                    <form action="{{route('contact.store')}}" method="POST" id="contactForm">
                        @csrf
                        <h3 class="mb-5">Get In Touch</h3>
                        <div class="form-group">
                            <input type="text" id="name" name="name" class="form-control px-3 py-4" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" class="form-control px-3 py-4" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="tel" name="phone" id="phone" class="form-control px-3 py-4" placeholder="Your Phone">
                        </div>
                        <div class="form-group mb-5">
                            <textarea class="form-control px-3 py-4" cols="30" rows="10" id="message" name="message"
                                placeholder="Write a Message"></textarea>
                        </div>
                        <div class="form-group">
                            <div id="success">@include('alert.messages')</div>
                                <input type="submit" class="btn btn-primary  px-4 py-3" value="Send Message">                            
                        </div>
                    </form>
                </div>
                <div class="col-md-5 pl-md-5">
                    <h3 class="mb-5">My Contact Details</h3>
                    <ul class="site-contact-details">
                        <li>
                            <span class="text-uppercase">Email</span>
                            <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="bdced4c9d8fddad0dcd4d193ded2d0">[email&#160;protected]</a>
                        </li>
                        <li>
                            <span class="text-uppercase">Phone</span>
                            +30 976 1382 9921
                        </li>
                        <li>
                            <span class="text-uppercase">Fax</span>
                            +30 976 1382 9922
                        </li>
                        <li>
                            <span class="text-uppercase">Address</span>
                            San Francisco, CA <br>
                            4th Floor8 Lower <br>
                            San Francisco street, M1 50F
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <footer class="site-footer">
        <div class="container">
            <div class="row mb-5">
                <p class="col-12 text-center">

                    Copyright &copy; 
                    <script>
                        document.write(new Date().getFullYear());

                    </script> All rights reserved | This template is made with <i class="icon-heart text-danger"
                        aria-hidden="true"></i> by <a hef="https://colorlib.com/" target="_blank"
                        class="text-primary">Colorlib</a>

                </p>
            </div>
            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <p>
                        <a href="#" class="social-item"><span class="icon-facebook2"></span></a>
                        <a href="#" class="social-item"><span class="icon-twitter"></span></a>
                        <a href="#" class="social-item"><span class="icon-instagram2"></span></a>
                        <a href="#" class="social-item"><span class="icon-linkedin2"></span></a>
                        <a href="#" class="social-item"><span class="icon-vimeo"></span></a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/vendor/jquery.min.js"></script>
    <script
        src="js/vendor/jquery-migrate-3.0.1.min.js%2bpopper.min.js%2bbootstrap.min.js%2bjquery.easing.1.3.js.pagespeed.jc.uxxkex28sQ.js">
    </script>
    <script>
        eval(mod_pagespeed_s9oGiJZxTb);

    </script>
    <script>
        eval(mod_pagespeed_j_Mw8blyhv);

    </script>
    <script>
        eval(mod_pagespeed_bFkBxCYQ3v);

    </script>
    <script>
        eval(mod_pagespeed__f3Ii7ajmX);

    </script>
    <script
        src="js/vendor%2c_jquery.stellar.min.js%2bvendor%2c_jquery.waypoints.min.js%2bcustom.js.pagespeed.jc.pnQHqVD1q2.js">
    </script>
    <script>
        eval(mod_pagespeed_9ZERlAUSP9);

    </script>
    <script>
        eval(mod_pagespeed_QZ_dFqdF1I);

    </script>
    <script src="../../../unpkg.com/isotope-layout%403.0.6/dist/isotope.pkgd.min.js"></script>
    <script src="../../../unpkg.com/imagesloaded%404.1.4/imagesloaded.pkgd.min.js"></script>
    <script>
        eval(mod_pagespeed_SQ1QUsEwMs);

    </script>



    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');

    </script>
    <script defer src="../../../static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"rayId":"67d128d00bf23609","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.8.0","si":10}'>
    </script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/rezume/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Aug 2021 11:35:10 GMT -->

</html>
