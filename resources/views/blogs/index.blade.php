@extends('layout')

@section('content')
    <div class="mb-4">
        <a href="{{ route('blogs.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Create Blog
        </a>
    </div>

    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2">Title</th>
                <th class="py-2">Content</th>
                <th class="py-2">Image</th>
                <th class="py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
                <tr>
                    <td class="border px-4 py-2">{{ $blog->title }}</td>
                    <td class="border px-4 py-2">{{ $blog->konten }}</td>
                    <td class="border px-4 py-2">
                        @if ($blog->image)
                            <img src="{{ asset('storage/' . $blog->image) }}" width="100" alt="{{ $blog->title }}">
                        @endif
                    </td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('blogs.edit', $blog->id) }}" class="bg-green-500 hover:bg-green-700 text-white py-1 px-3 rounded">
                            Edit
                        </a>
                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white py-1 px-3 rounded">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
