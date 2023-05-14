<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-1800 dark:text-gray-200 leading-tight">
            {{ __('POST CREATE') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-DARK">
                    <h1 class="text-white">Create Post</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="name" placeholder="name" class="form-control m-3 center">
                        <input type="text" name="description" placeholder="description" class="form-control m-3 center">
                        <input type="number" name="price" placeholder="price" class="form-control m-3 center">
                        <select name="category_id" id="" class="form-control m-3">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}"> {{$category->name}}</option>
                            @endforeach
                        </select>
                        <input type="file" name="image" placeholder="image" class="form-control m-3 center">
                        <button type="submit" class="btn btn-outline-warning m-3 float-end">save</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
