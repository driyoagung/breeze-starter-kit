<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex my-6 mx-5 items-center justify-between">
                    <h2 class="font-semibold text-2xl">Daftar Mahasiswa</h2>
                    <a href="{{ route('mahasiswa.create') }}" >
                    <button class="bg-gray-200 px-10 py-2  rounded-md font-bold">Tambah</button>
                    </a>
                    @if(session('success'))
                    <x-alert message="{{ session('success') }}"/>
                    @endif
                    <div class=" mx-5 relative max-w-max">
                        <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-auto text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Search</label>
                    </div>
                </div>
                
                

                <div class="grid md:grid-cols-3 grid-cols-1 mt-4 gap-6">
                    @foreach ($mahasiswa as $mhs)
                        <div class="my-5 mx-5">
                            <img src="{{ url('storage/'. $mhs->foto) }}" alt="" class="rounded-xl h-[200px]">
                            <div class="my-2">
                                <p class="text-xl font-bold ">{{ $mhs->nama }}</p>
                                <p class="text-xl font-light">{{ $mhs->nim }}</p>
                                <span class="font-sans bg-blue-100 text-blue-800 text-xl font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">{{ $mhs->jurusan }}</span>
                                {{-- <p class="text-xl font-light">{{ $mhs->jurusan }}</p> --}}
                                <p class="text-xl font-bold font-sans">{{ $mhs->alamat }}</p>
                            </div>
                            <a href="{{ route('mahasiswa.edit', $mhs) }}">
                            <x-primary-button class="w-full text-center items-center justify-center">Edit</x-primary-button>
                            </a>
                        </div>
                        {{-- Card 2 --}}
                        <x-pines-card 
                            title="{{ $mhs->nama }}" 
                            image="{{ url('storage/'. $mhs->foto) }}"
                            description="This is a description for Product 1." 
                            buttonText="Edit Bro" 
                            buttonUrl="{{ route('mahasiswa.edit', $mhs) }}" 
                        />
                    @endforeach

                </div>
                <div class="my-3 mx-4">
                    {{ $mahasiswa->links() }}
                </div>
            </div>
           
        </div>
       
    </div>
</x-app-layout>
