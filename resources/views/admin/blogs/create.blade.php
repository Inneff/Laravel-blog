@extends('layout.admin')
@section('title', isset($blog) ? "Редактировать статью ID ($blog->id)" : 'Добавить статью')
@vite(['resources/css/app.css', 'resources/js/app.js'])

@section('content')
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">{{isset($blog) ? "Редактировать статью ID ($blog->id)" : 'Добавить статью'}}</h3>

        <div class="mt-8">

        </div>

        <div class="mt-8">
            <form enctype="multipart/form-data" class="space-y-5 mt-5" method="POST" action="{{ isset($blog) ? route("admin.blogs.update", $blog->id) : route("admin.blogs.store") }}">
                @csrf

                @if(isset($blog))
                    @method('PUT')
                @endif

                <input name="title" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Название" />

                @error('title')
                    <p class="text-red-500"> {{ $message }} </p>
                @enderror

                <input name="preview" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Краткий текст" />

                @error('preview')
                    <p class="text-red-500"> {{ $message }} </p>
                @enderror

                <input name="slug" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="ЧПУ" />

                @error('slug')
                    <p class="text-red-500"> {{ $message }} </p>
                @enderror

                <input name="description" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Полное описание" />

                @error('description')
                     <p class="text-red-500"> {{ $message }} </p>
                @enderror

                <input name="full_text" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Полный текст блога" />

                @error('full_text')
                <p class="text-red-500"> {{ $message }} </p>
                @enderror

                @if(isset($blog) && $blog->thumbnail)

                    <div>
                        <img class="h-64 w-64" src="/storage/posts/{{$blog->thumbnail}}">
                    </div>
                @endif
                <input name="thumbnail" type="file" class="w-full h-12" placeholder="Обложка" />

                @error('thumbnail')
                    <p class="text-red-500"> {{ $message }} </p>
                @enderror

                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Сохранить</button>
            </form>
        </div>
    </div>

@endsection
