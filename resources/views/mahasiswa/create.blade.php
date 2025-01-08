<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex my-6 mx-5 items-center justify-between">
                    <h2 class="font-semibold text-2xl">Tambah Mahasiswa</h2>
                    @if ($errors->any())
                    <div class="p-4 mb-4 text-red-600 bg-red-100 rounded">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif            
                </div>
            </div>
        <div class="mt-4" x-data ="{imageUrl: '/storage/profil.png'}">
            <form action="{{ route('mahasiswa.store') }}" method="POST" class="flex gap-8" enctype="multipart/form-data">
                @csrf
                <div class="w-1/2">
        
                    <img :src="imageUrl" class="rounded-lg object-cover" alt="">
                </div>
                <div class="w-1/2">
                    <div class="mt-4">
                        <x-input-label for="nama" :value="__('Nama')" />
                        <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required />
                        <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="foto" :value="__('Foto')" />
                        <x-text-input accept="image/*" id="nama" class="block mt-1 w-full border p-2" type="file" name="foto" :value="old('foto')" required 
                        @change="imageUrl = URL.createObjectURL($event.target.files[0])"
                        />
                        <x-input-error :messages="$errors->get('foto')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="nim" :value="__('Nim')" />
                        <x-text-input id="nim" class="block mt-1 w-full" type="number" name="nim" :value="old('nim')" required />
                        <x-input-error :messages="$errors->get('nim')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="alamat" :value="__('Alamat')" />
                        <x-text-area id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('alamat')" required> {{ old('alamat') }}</x-text-area>
                        <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="jurusan" :value="__('Jurusan')" />
                        <x-text-input id="jurusan" class="block mt-1 w-full" type="text" name="jurusan" :value="old('jurusan')" required />
                        <x-input-error :messages="$errors->get('jurusan')" class="mt-2" />
                    </div>
                    <x-primary-button class="justify-center w-full mt-4">
                        {{ __('Create') }}
                    </x-primary-button>
                </div>
                
            </form>
        </div>

        </div>
       
    </div>
</x-app-layout>
