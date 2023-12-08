{{-- use AppLayout Component located in app\View\Component\AppLayout.php which uses resources\views\layouts\app.blade.php view --}}
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ 'Gallery' }}
            </h2>
            <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">ADD</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-black">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        {{-- populate our post data --}}
                        @foreach ($posts as $post)
                            <a href="{{ route('posts.show', $post->id) }}">
                                <img class="h-64 w-full object-cover" src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}">
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
