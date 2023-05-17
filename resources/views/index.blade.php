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
    <!-- bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}">
    {{-- js --}}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
            <div class="logo"><a href="{{route('index')}}"><img src="{{asset('asset/images/logo.png')}}"></a></div>
            <div class="menu_main">

                <nav class="navbar">
                    <div class="container-fluid">
                        <a class="navbar-brand"></a>
                        <form class="d-flex" role="search" type="get" action="{{ url('/searchA') }}">
                            <input class="form-control me-2" type="search" name= "query" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg></button>
                        </form>
                    </div>
                </nav>
                <ul>
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
        <p class="services_text"> Bizda istalgan turdagi istalgan kitobni topishingiz mumkun </p>
        <div class="services_section_2">
            <div class="row">
                @if(!empty($posts))
                @foreach($posts as $post)
                <div class="col-md-4">
                    <div><img src="/image/{{$post->image}}" class="services_img"></div>
                    <h2>{{$post->name}}</h2>
                    <div class="btn_main"><a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">more</a></div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>




<!-- services section end -->
<!-- footer section start     footer -->
<div class="footer_section layout_padding">
    <div class="container">

        <div class="social_icon">
            <ul>
                <li><a type="button"class="m-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-fill bg-light" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                        </svg></a></li>
                <li><a type="button" class="m-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">  </a></li>
                <li><a href="https://www.instagram.com/fayzullayoldashev/"> <img src="{{asset('asset/images/instagram-icon.png')}}" > </a></li>
            </ul>
        </div>
    </div>
</div>


{{--ALL JS AND BOOTSTRAP ACTIONS--}}
{{--    <div class="alert alert-danger">--}}
{{--        <ul>--}}
{{--                <li>{{ $error }}</li>--}}
{{--        </ul>--}}
{{--    </div>--}}
<script>
    @if(session('success'))
    Swal.fire({
        title: 'success',
        icon: 'success',
        showCancelButton: false,
        timer: 2000
    })
    @endif

    @if ($errors->any())
    Swal.fire({
        icon: 'error',
        @foreach($errors->all() as $error)

        text: '{{$error}}',

        @endforeach
        showCancelButton: false,
        timer: 2000
    })
    @endif

</script>


{{--modal for contact--}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('contact.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Full Name:</label>
                        <input type="text" class="form-control" name="name" id="recipient-name" >
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Number:</label>
                        <input type="text" class="form-control" name="number" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label" >Message:</label>
                        <textarea class="form-control" id="message-text" name="massage" ></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Send message</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for cards -->



{{--js--}}



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>