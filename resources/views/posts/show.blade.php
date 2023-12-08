<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ 'Show' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Title' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $posts->title }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Content' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $posts->content }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Featured Image' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            <img class="h-64 w-128" src="{{ Storage::url($posts->featured_image) }}" alt="{{ $posts->title }}" srcset="">
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Created At' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $posts->created_at }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Updated At' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $posts->updated_at }}
                        </p>
                    </div>
                    <div>
                    <a href="{{ route('posts.index') }}" class="border border-blue-500 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-md">BACK</a>
                    <a href="{{ route('posts.edit', $posts->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDIT</a>
                    <form method="post" action="{{ route('posts.destroy', $posts->id) }}" class="inline">
                        @csrf
                        @method('delete')
                        <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">DELETE</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>