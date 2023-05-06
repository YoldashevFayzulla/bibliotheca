<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-1800 dark:text-gray-200 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-dark">
                    <a href="{{route('category.create')}}" class="btn btn-outline-success">new</a>
                    <table class="table text-white">
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>action</th>
                        </tr>
                        @foreach($categories as $category)
                        <tr>
                                <td>{{$loop->index+1}}</td>
                            <td>{{$category->name}}</td>
                            <td>
                                <a href="{{route('category.edit',$category->id)}}" class="btn btn-outline-warning m-1 " style="float: left">edit</a>

                                <form action="{{route('category.destroy',$category->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger m-1" >delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
