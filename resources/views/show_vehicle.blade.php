<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detail Vehicle') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-bold mb-6">Vehicle Details</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow">
                            <p class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                                <strong>Make:</strong> {{ $vehicle->make }}
                            </p>
                            <p class="text-lg font-semibold text-gray-800 dark:text-gray-200 mt-2">
                                <strong>Model:</strong> {{ $vehicle->model }}
                            </p>
                        </div>
                        <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow">
                            <p class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                                <strong>License Plate:</strong> {{ $vehicle->license_plate }}
                            </p>
                            <p class="text-lg font-semibold text-gray-800 dark:text-gray-200 mt-2">
                                <strong>Year:</strong> {{ $vehicle->year }}
                            </p>
                        </div>
                    </div>
                    <div class="mt-6 text-right">
                        <a href="{{ route('fetch_all_vehicles') }}" class="bg-blue-500 text-white hover:bg-blue-700 px-4 py-2 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            Back to Vehicles
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
