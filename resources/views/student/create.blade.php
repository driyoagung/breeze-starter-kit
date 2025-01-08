@extends('student.index')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body>
          <!-- Form Wrapper -->
    <div class="max-w-2xl mx-auto mt-10 bg-white shadow-lg rounded-lg p-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Add New Student</h2>
        
        <form action="{{ route('student.store') }}" method="POST">
            @csrf
            <!-- Name Input -->
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Student Name</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" 
                    placeholder="Enter student's name" 
                    required 
                />
                @error('name')
                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Address Input -->
            <div class="mb-6">
                <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Address</label>
                <textarea 
                    id="address" 
                    rows="3" 
                    name="address"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" 
                    placeholder="Enter address" 
                    required
                > {{ old('address') }}</textarea>
                @error('address')
                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Class Input -->
            <div class="mb-6">
                <label for="class" class="block mb-2 text-sm font-medium text-gray-900">Class</label>
                <select 
                    id="class" 
                    name="class"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                    required
                >
                    <option value="" disabled selected>Select class</option>
                    <option value="Class 1">Class 1</option>
                    <option value="Class 2">Class 2</option>
                    <option value="Class 3">Class 3</option>
                </select>
                @error('class')
                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <a href=""></a>
                <button 
                    type="submit" 
                    class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium"
                >
                    Save Student
                </button>
            </div>
        </form>
    </div>
</body>
</html>