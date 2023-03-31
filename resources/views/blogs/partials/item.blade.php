@vite(['resources/css/app.css', 'resources/js/app.js'])
<div class="px-4 py-8 max-w-xl">
    <div class="bg-white shadow-2xl" >
        <div>
            <a href="{{ route("blogs.show", $blog->id) }}">
                <img src="/storage/blogs/565757575757546464.png">
            </a>
        </div>
        <div class="px-4 py-2 mt-2 bg-white">
            <h2 class="font-bold text-xl text-gray-800">{{ $blog->title }}</h2>
            <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
                {!! $blog->preview !!}
            </p>
        </div>
    </div>
</div>
