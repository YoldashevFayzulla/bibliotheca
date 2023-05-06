<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-1800 dark:text-gray-200 leading-tight">
            {{ __('Admin') }}
        </h2>
        <nav class="navbar">
            <div class="container-fluid">
                <a class="navbar-brand"></a>
                <form class="d-flex" role="search" type="get" action="{{ url('/search') }}">
                    <input class="form-control me-2" type="search" name= "query" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
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
                                    <a href="{{route('post.edit',$post->id)}}" class="btn btn-outline-warning m-1 " style="float: left">edit</a>

                                    <form action="{{route('post.destroy',$post->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger m-1" >delete</button>
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
</x-app-layout>