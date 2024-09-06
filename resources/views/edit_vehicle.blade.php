<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Vehicle') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="font-semibold text-xl text-gray-600 mb-6">Edit Vehicle</h2>

                    <form action="{{ route('vehicle.update', $vehicle->id) }}" method="POST" class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6" id="editVehicleForm">
                        @csrf
                        @method('PUT')

                        @if ($errors->any())
                            <div class="mb-4">
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                    <strong class="font-bold">Whoops!</strong>
                                    <span class="block sm:inline">There were some problems with your input.</span>
                                    <ul class="mt-2 list-disc pl-5">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif

                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Vehicle Details</p>
                                <p>Please update the fields as needed.</p>
                            </div>

                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-4">
                                        <label for="make" class="flex items-center">
                                            Make <span class="text-red-500 ml-1">*</span>
                                        </label>
                                        <input type="text" name="make" id="make" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 @error('make') border-red-500 @enderror" value="{{ old('make', $vehicle->make) }}" required />
                                        @error('make')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="md:col-span-4">
                                        <label for="model" class="flex items-center">
                                            Model <span class="text-red-500 ml-1">*</span>
                                        </label>
                                        <input type="text" name="model" id="model" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 @error('model') border-red-500 @enderror" value="{{ old('model', $vehicle->model) }}" required />
                                        @error('model')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="md:col-span-4">
                                        <label for="year" class="flex items-center">
                                            Year <span class="text-red-500 ml-1">*</span>
                                        </label>
                                        <input type="number" name="year" id="year" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 @error('year') border-red-500 @enderror" value="{{ old('year', $vehicle->year) }}" required />
                                        @error('year')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="md:col-span-4">
                                        <label for="license_plate" class="flex items-center">
                                            License Plate <span class="text-red-500 ml-1">*</span>
                                        </label>
                                        <input type="text" name="license_plate" id="license_plate" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 @error('license_plate') border-red-500 @enderror" value="{{ old('license_plate', $vehicle->license_plate) }}" required />
                                        @error('license_plate')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="md:col-span-4 text-right">
                                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" id="submitButton">
                                            Update Vehicle
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('editVehicleForm');
            const submitButton = document.getElementById('submitButton');

            form.addEventListener('submit', function(e) {
                e.preventDefault();
                submitButton.disabled = true;
                submitButton.innerHTML = '<span class="spinner"></span> Updating...';

                // Simulate form submission delay
                setTimeout(function() {
                    form.submit();
                }, 1000);
            });
        });
    </script>

    <style>
        .spinner {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
            -webkit-animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { -webkit-transform: rotate(360deg); }
        }
        @-webkit-keyframes spin {
            to { -webkit-transform: rotate(360deg); }
        }
    </style>
</x-app-layout>
