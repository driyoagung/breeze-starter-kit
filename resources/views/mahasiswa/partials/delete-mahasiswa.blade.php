<section class="space-y-6">
    

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-delete-mahasiswa')"
    >{{ __('Delete Mahasiswa') }}</x-danger-button>

    <x-modal name="confirm-delete-mahasiswa" focusable>
        <form method="post" action="{{ route('mahasiswa.destroy', $mhs) }}" class="p-6">
            @csrf
            @method('DELETE')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Are you sure you want to delete Mahasiswa?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted') }}
            </p>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Mahasiswa') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
