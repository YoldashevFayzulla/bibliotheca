<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-1800 dark:text-gray-200 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-DARK">
                    <h1 class="text-white ">Create category</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('category.store')}}" method="post">
@csrf
                        <input type="text" name="name" placeholder="name" class="form-control m-2 center">
                        <button type="submit" class="btn btn-outline-warning m-3 float-end">save</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
