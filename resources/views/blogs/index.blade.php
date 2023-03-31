@vite(['resources/css/app.css', 'resources/js/app.js'])
@extends('layout/app')
@section('title', 'Блоги')

@section('content')
    @include('partials.header')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-10 mb-20">
        @foreach($blogs as $blog)
            @include("blogs.partials.item", ["blog" => $blog])
        @endforeach

        {{ $blogs->links() }}
    </div>
@endsection
