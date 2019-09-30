<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow" />
    <meta name="msvalidate.01" content="F58C807CAEB296759E81159EF58BB00E">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Site Metas -->
    @yield('seo')
<meta property="og:site_name" content="tukorieng.com - Kenya news.">
<meta property="twitter:site" content="@rieng_com">
<meta property="og:locale" content="en_US">
<meta property="og:url" content="https://tukorieng.com">

<meta property="fb:admins" content="">
<meta property="twitter:account_id" content="">
<meta name="geo.placename" content="Nairobi City, Nairobi, Kenya">
<meta name="geo.position" content="-1.2833;36.8333">
<meta name="geo.region" content="KE-110">
<meta name="geo.country" content="KE">
<meta name="ICBM" content="-1.2833, 36.8333">
<meta name="theme-color" content="#37a000">
<meta name="format-detection" content="telephone=no">
<meta name="twitter:card" content="summary_large_image">
<link href="https://www.tukorieng.com" rel="canonical">
<meta property="fb:pages">


<link rel="apple-touch-icon" href="{{asset('frontend/images/favicon.ico')}}"  sizes="180x180">
<link type="image/png" href="{{asset('frontend/images/favicon.ico')}}" rel="icon" sizes="16x16">
<link type="image/png" href="{{asset('frontend/images/favicon.ico')}}" rel="icon" sizes="32x32">

    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('frontend/images/apple-touch-icon.png')}}">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet"> 

    <!-- Bootstrap core CSS -->
    <link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('frontend/style.css')}}" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="{{asset('frontend/css/colors.css')}}" rel="stylesheet">

    <!-- Version Garden CSS for this template -->
    <link href="{{asset('frontend/css/version/garden.css')}}" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script data-ad-client="ca-pub-5837523644865005" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>



</head>
<body>

    <div id="wrapper">
        <div class="collapse top-search" id="collapseExample">
            <div class="card card-block">
                <div class="newsletter-widget text-center">
                    <form method="POST" action="{{route('search.results')}}" class="form-inline">
                        @csrf
                        <input name="query" type="text" class="form-control" placeholder="What you are looking for?">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </form>
                </div><!-- end newsletter -->
            </div>
        </div><!-- end top-search -->

        <div class="topbar-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 hidden-xs-down">
                        <div class="topsocial">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Flickr"><i class="fa fa-flickr"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a>
                        </div><!-- end social -->
                    </div><!-- end col -->

                    <div class="col-lg-4 hidden-md-down">
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="topsearch text-right">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-search"></i> Search</a>
                        </div><!-- end search -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end header-logo -->
        </div><!-- end topbar -->

        <div class="header-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo">
                            <a href="/"><img src="{{asset('frontend/images/logo1.png')}}" alt=""></a>
                        </div><!-- end logo -->
                    </div>
                </div><!-- end row -->
            </div><!-- end header-logo -->
        </div><!-- end header -->

        <header class="header">
            <div class="container">
                <nav class="navbar navbar-inverse navbar-toggleable-md">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Forest Timemenu" aria-controls="Forest Timemenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-md-center" id="Forest Timemenu">
                        <ul class="navbar-nav">
                            @foreach($categories as $category)
                            <li class="nav-item">
                                <a class="nav-link color-green-hover" href="{{route('category.filter',$category->id)}}">{{$category->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </nav>
            </div><!-- end container -->
        </header><!-- end header -->