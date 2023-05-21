<!DOCTYPE html>
<html lang="en">
<head>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}">
    {{-- js --}}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{--icons--}}
    {{--     <link href="http://amusoft.uz/assets/img/favicon.ico" rel="icon">--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    {{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">--}}
</head>

<body>


<!-- header section start -->


<nav class="navbar navbar-expand-lg navbar bg-dark" data-bs-theme="dark">
    <div class="container-fluid "  >
        <a class="navbar-brand" href="#">Library web site</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a>
                </li>
                <li class="nav-item">
{{--                    <a class="nav-link" href="#">Link</a>--}}
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">


                    @foreach($categories as $category)
                            <li><a class="dropdown-item" href="{{route('category',$category->id)}}">{{$category->name}}</a></li>
{{--                            <li class="dropdown-item"><a href=""></a></li>--}}
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item text-md-center">
                    <a class="nav-link disabled ">Library</a>
                </li>
            </ul>
            <form class="d-flex float-end" role="search" type="get" action="{{ url('/searchA') }}">
                <input class="me-2" type="search" name="query" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</nav>
<!-- header section end -->

<!-- resources section start -->
<div class="services_section layout_padding">
    <div class="container">
        <h1 class="services_taital"> Books </h1>
        <p class="services_text"> You can find all kind of book with us </p>
        <div class="services_section_2">
            <div class="row">
                @if(!empty($posts))
                    @foreach($posts as $post)
                        <div class="col-md-4">
                            <div><img src="/image/{{$post->image}}" class="services_img"></div>
                            <h2>{{$post->name}}</h2>
                            <div class="btn_main">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalCenter{{$post->id}}">
                                    Launch demo modal
                                </button>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter{{$post->id}}" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div><img src="/image/{{$post->image}}" class="services_img"></div>
                                    </div>
                                    <div class="modal-body">
                                        <h2>{{$post->name}}</h2>
                                        <p>{{$post->description}}</p>
                                    </div>
                                    <p class="text-gray-900 text-right">{{$post->price}} so`m</p>
                                    <div class="modal-footer">
                                        {{--                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#example{{$post->id}}"
                                                data-bs-whatever="@mdo">buy
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--                     for buy--}}
                        <div class="modal fade" id="example{{$post->id}}" tabindex="-1"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">purchase</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('contact.store')}}" method="post">
                                            @csrf
                                            <div class="mb-3">
                                                <input type="hidden" value="{{$post->id}}" name="id">
                                                <label for="recipient-name" class="col-form-label">Full Name:</label>
                                                <input type="text" class="form-control" name="name" id="recipient-name">

                                            </div>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Number:</label>
                                                <input type="text" class="form-control" name="number"
                                                       id="recipient-name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Message:</label>
                                                <textarea class="form-control" id="message-text"
                                                          name="massage"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary float-right">Send message
                                            </button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>

{{--modal for contact--}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        {{--        @dd($id)--}}
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
                        <input type="text" class="form-control" name="name" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Number:</label>
                        <input type="text" class="form-control" name="number" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text" name="massage"></textarea>
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

{{--<!-- footer section start footer -->--}}
{{--<div class="footer_section layout_padding">--}}
{{--    <div class="container">--}}
{{--        <div class="social_icon">--}}
{{--            <ul>--}}
{{--                <li><a type="button" class="m-2" data-bs-toggle="modal" data-bs-target="#exampleModal"--}}
{{--                       data-bs-whatever="@mdo"><i class="fab fa-envelope"></i></a></li>--}}
{{--                --}}{{--                <li><i class="fab fa-envelope"></i></li>--}}
{{--                <li><a type="button" href="https://t.me/Fayzulla Yoldashev"><i class="fab fa-telegram"></i></a></li>--}}
{{--                <li><a type="button" href="https://www.instagram.com/fayzullayoldashev/"><i--}}
{{--                                class="fab fa-instagram"></i></a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


{{--js--}}
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
    var errors =@json($errors->all());
    console.log(errors);
    var message = "";
    for (let i = 0; i < errors.length; i++) {
        message += errors[i] + "\n";
    }
    Swal.fire({
        icon: 'error',

        text: message,

        showCancelButton: false,
        timer: 5000
    })
    @endif
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>