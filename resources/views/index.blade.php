<!DOCTYPE html>
<html lang="en">

<head>

{{--    library--}}
{{--    library--}}

    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>About</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('asset/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('asset/images/fevicon.png" type="image/gif')}}" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('asset/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'}}">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
          media="screen">
</head>

<body>
<!-- header section start -->
<div class="header_section">
    <div class="header_main">
        <div class="mobile_menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="logo_mobile"><a href=""><img src="{{asset('asset/images/logo.png')}}"></a></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
        <div class="container-fluid">
            <div class="logo"><a href="index.html"><img src="{{asset('asset/images/logo.png')}}"></a></div>
            <div class="menu_main">

                <nav class="navbar">
                    <div class="container-fluid">
                        <a class="navbar-brand"></a>
                        <form class="d-flex" role="search" type="get" action="{{ url('/searchA') }}">
                            <input class="form-control me-2" type="search" name= "query" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
                <ul>
                    <li class="active"><a href="{{route('index')}}">Xammasi</a></li>
                    @foreach($categories as $category)
                    <li class="active"><a href="{{route('category',$category->id)}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</div>
<!-- header section end -->
<!-- services section start -->
<div class="services_section layout_padding">
    <div class="container">
        <h1 class="services_taital"> Kitoblar </h1>
        <p class="services_text"> Bizda istalgan turdagi istalgan kitobni topishingiz mumkun</p>
        <div class="services_section_2">
            <div class="row">
                @if(!empty($posts))
                @foreach($posts as $post)
                <div class="col-md-4">
                    <div><img src="/image/{{$post->image}}" class="services_img"></div>
                    <h2>{{$post->name}}</h2>
                    <div class="btn_main"><a href="{{route('info',$post->id)}}">more</a></div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
<!-- services section end -->
<!-- footer section start -->
<div class="footer_section layout_padding">
    <div class="container">
        <div class="location_main">
            <div class="call_text"><img src="{{asset('asset/images/call-icon.png')}}"></div>
{{--            <div class="call_text"><a href="#">Call  {{auth()->user()->tel}}</a></div>--}}
            <div class="call_text"><img src="{{asset('asset/images/mail-icon.png')}}"></div>
{{--            <div class="call_text"><a href="#">{{auth()->user()->address}}</a></div>--}}
        </div>
        <div class="social_icon">
            <ul>
                <li><a href="#"><img src="{{asset('asset/images/fb-icon.png')}}'"></a></li>
                <li><a href="#"><img src="{{asset('asset/images/twitter-icon.png')}}"></a></li>
                <li><a href="#"><img src="{{asset('asset/images/linkedin-icon.png')}}"></a></li>
                <li><a href="#"><img src="{{asset('asset/images/instagram-icon.png')}}"></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<!-- copyright section end -->
<!-- Javascript files-->
<script src="{{asset('asset/js/jquery.min.js')}}"></script>
<script src="{{asset('asset/js/popper.min.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('asset/js/jquery-3.0.0.min.js')}}"></script>
<script src="{{asset('asset/js/plugin.js')}}"></script>
<!-- sidebar -->
<script src="{{asset('asset/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('asset/js/custom.js')}}"></script>
<!-- javascript -->
<script src="{{asset('asset/js/owl.carousel.js')}}"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>