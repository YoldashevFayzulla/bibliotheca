<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-1800 dark:text-gray-200 leading-tight">
            {{ __('Admin') }}
        </h2>
        <nav class="navbar">
            <div class="container-fluid">
                <a class="navbar-brand"></a>
                <form class="d-flex" role="search" type="get" action="{{ url('/search') }}">
                    <input class="form-control me-2" type="search" name= "query" placeholder="Search" aria-label="Search" >
                    <button class="btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg></button>
                </form>
            </div>
        </nav>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-dark">
                    <a href="{{route('post.create')}}" class="btn btn-outline-success">new</a>
                    <table class="table text-white">
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>price</th>
                            <th>category</th>
                            <th>photo</th>
                            <th>action</th>
                        </tr>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$post->name}}</td>
                                <td>{{$post->price}}</td>
                                <td>{{$post->category->name}}</td>
                                <td>
                                <img src="/image/{{$post->image}}" alt="rasm" width="60px"></td>
                                <td>
                                    <a href="{{route('post.edit',$post->id)}}" class="btn btn-outline-warning m-1 " style="float: left"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg></a>

                                    <form action="{{route('post.destroy',$post->id)}}" method="post" onsubmit="return confirm('o`chirishni xoxlaysizmi');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger m-1" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                            </svg></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </table>
                    {{$posts->onEachside(1)->links()}}
                </div>
            </div>
            <center>
            </center>

        </div>
    </div>
    <script>
        @if(session('success'))
        Swal.fire({
            title: 'success',
            icon: 'success',
            showCancelButton: false,
            timer: 2000
        })
        @endif
        function delete_button(id) {
            Swal.fire({
                title: 'o`chirish?',
                text: "o`chirilgan narsa qayta tiklanmaydi",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Xa o`chirilsin!'
            }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('form-delete'+id).submit();
                    }
                }
            )
        }
    </script>
</x-app-layout>