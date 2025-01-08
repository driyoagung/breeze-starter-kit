@extends('layout')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Create New Blog</h2>

    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Title:</label>
            <input type="text" name="title" id="title" class="w-full p-2 border border-gray-300 rounded mt-1" value="{{ old('title') }}">
        </div>

        <div class="mb-4">
            <label for="kontent" class="block text-gray-700">Content:</label>
            <textarea name="konten" id="konten" class="w-full p-2 border border-gray-300 rounded mt-1">{{ old('konten') }}</textarea>
        </div>

        <div class="mb-4">
            <label for="image" class="block text-gray-700">Image:</label>
            <input type="file" name="image" id="image" class="w-full p-2 border border-gray-300 rounded mt-1">
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded">
                Submit
            </button>
        </div>
    </form>
@endsection
