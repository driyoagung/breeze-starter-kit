@extends('layout')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Edit Blog</h2>

    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Title:</label>
            <input type="text" name="title" id="title" class="w-full p-2 border border-gray-300 rounded mt-1" value="{{ $blog->title }}">
        </div>

        <div class="mb-4">
            <label for="konten" class="block text-gray-700">Content:</label>
            <textarea name="konten" id="konten" class="w-full p-2 border border-gray-300 rounded mt-1">{{ $blog->konten }}</textarea>
        </div>

        <div class="mb-4">
            <label for="image" class="block text-gray-700">Image:</label>
            <input type="file" name="image" id="image" class="w-full p-2 border border-gray-300 rounded mt-1">
            @if ($blog->image)
                <img src="{{ asset('storage/' . $blog->image) }}" width="100" alt="{{ $blog->title }}">
            @endif
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded">
                Update
            </button>
        </div>
    </form>
@endsection
