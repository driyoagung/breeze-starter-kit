<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    <div class="flex gap-4">

                        <x-pines-card 
                            title="Product 1 Boy" 
                            description="This is a description for Product 1." 
                            buttonText="Buy Now" 
                            image="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2370&q=80"
                            buttonUrl="/products/1" 
                        />
                        
                    </div>
                    
                                            <x-pines-button color="red" text="Clickme" />
                                            <x-pines-button color="blue" text="Halo" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
