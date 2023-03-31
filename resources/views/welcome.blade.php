@vite(['resources/css/app.css', 'resources/js/app.js'])
@extends('layout/app')
@section('title', 'Главная страница')

@section('content')
    @include('partials.header')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-10 mb-20">
        @foreach($blogs as $blog)
            @include("blogs.partials.item", ["blog" => $blog])
        @endforeach

            <div class="text-red-600 text-xl px-2 py-1 mt-1 bg-white">
                <p class="no-underline sm:text-sm text-xs text-gray-700 px-1 mr-1 my-2">
                <p>Соколов Максим Юрьевич</p>
                    <p>Ивановский государственный энергетический университет имени В. И. Ленина</p>

                    Номер телефона: 89158322080, <p> email: maxiksokol.com@mail.ru</p>
                <img class=" h-full w-full object-cover"  src="/storage/admin/YDCZBbblog4.jpg" ">
                </p>
            </div>
    </div>
@endsection
