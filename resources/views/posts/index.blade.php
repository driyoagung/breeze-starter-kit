<script src="https://cdn.tailwindcss.com"></script>x
<div class="container mx-auto p-6">
    <a href="/posts/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Create Post
    </a>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
        @foreach ($posts as $post)
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('images/'.$post->image) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">{{ $post->title }}</h2>
                    <p class="text-gray-600 mb-4">{{ $post->description }}</p>

                    <div class="flex items-center justify-between">
                        <a href="{{ route('posts.edit', $post->id) }}" class="text-blue-500 hover:underline">
                            Edit
                        </a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
