<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-1800 dark:text-gray-200 leading-tight">
            {{ __('Admin') }}
        </h2>
        <nav class="navbar">
            <div class="container-fluid">
                <a class="navbar-brand"></a>
            </div>
        </nav>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-dark">
{{--                    <a href="{{route('post.create')}}" class="btn btn-outline-success">new</a>--}}
                </div>
                <table class="table text-white">
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>number</th>
                        <th>massage</th>
                        <th>book</th>
                        <th>action</th>
                    </tr>
                    @foreach($contacts as $contact)
                    <tr>
                        <th>{{$loop->index+1}}</th>
                        <th>{{$contact->name}}</th>
                        <th>{{$contact->number}}</th>
                        <th>{{$contact->massage}}</th>
                        <th>{{$contact->post->name}}</th>
                        <th>
                            <form action="{{route('contact.delete',$contact->id)}}" method="post" onsubmit="return confirm('o`chirishni xoxlaysizmi');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger m-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                    </svg>
                                </button>
                            </form>
                        </th>
                    </tr>
                    @endforeach
                </table>
            </div>
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
            // function delete_button(id) {
            //     Swal.fire({
            //         title: 'o`chirish?',
            //         text: "o`chirilgan narsa qayta tiklanmaydi",
            //         icon: 'warning',
            //         showCancelButton: true,
            //         confirmButtonColor: '#3085d6',
            //         cancelButtonColor: '#d33',
            //         confirmButtonText: 'Xa o`chirilsin!'
            //     }).then((result) => {
            //             if (result.isConfirmed) {
            //                 document.getElementById('form-delete'+id).submit();
            //             }
            //         }
            //     )
            // }
        </script>


</x-app-layout>