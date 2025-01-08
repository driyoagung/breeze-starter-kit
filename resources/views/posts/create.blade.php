<script src="https://cdn.tailwindcss.com"></script>
<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto bg-white p-6 shadow-md rounded-lg">
    @csrf
    <div class="mb-4">
        <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
        <input type="text" name="title" id="title" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>

    <div class="mb-4">
        <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
        <textarea name="description" id="description" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" rows="5" required></textarea>
    </div>

    <div class="mb-4">
        <label for="image" class="block text-gray-700 font-bold mb-2">Image:</label>
        <input type="file" name="image" id="image" class="w-full text-gray-500 px-3 py-2 border border-gray-300 rounded-lg cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-500" accept="image/*" onchange="previewImage(event)" required>
        <div class="mt-4">
            <img id="imagePreview" src="#" alt="Image Preview" class="w-full max-w-xs hidden">
        </div>
    </div>

    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
        Submit
    </button>
</form>
<script>
    function previewImage(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const imagePreview = document.getElementById('imagePreview');
                imagePreview.src = e.target.result;
                imagePreview.classList.remove('hidden'); // Menampilkan gambar preview
            };
            reader.readAsDataURL(file);
        } else {
            const imagePreview = document.getElementById('imagePreview');
            imagePreview.classList.add('hidden'); // Menyembunyikan gambar preview jika tidak ada gambar
        }
    }
</script>