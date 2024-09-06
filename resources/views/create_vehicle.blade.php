<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Vehicle') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="font-semibold text-xl text-gray-600 mb-6">Create New Vehicle</h2>

                    <!-- Display validation errors if any -->
                    <!-- @if ($errors->any())
                        <div class="mb-4">
                            <ul class="text-red-500 list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif -->

                    <form action="{{ route('vehicle.store') }}" method="POST" class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6" id="createVehicleForm">
                        @csrf
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Vehicle Details</p>
                                <p>Please fill out all the fields.</p>
                            </div>

                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <!-- Make field -->
                                    <div class="md:col-span-4">
                                        <label for="make">Make <span class="text-red-500">*</span></label>
                                        <input type="text" name="make" id="make" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('make') }}" required />
                                        @error('make')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Model field -->
                                    <div class="md:col-span-4">
                                        <label for="model">Model <span class="text-red-500">*</span></label>
                                        <input type="text" name="model" id="model" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('model') }}" required />
                                        @error('model')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Year field -->
                                    <div class="md:col-span-4">
                                        <label for="year">Year <span class="text-red-500">*</span></label>
                                        <input type="number" name="year" id="year" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('year') }}" required />
                                        @error('year')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- License Plate field -->
                                    <div class="md:col-span-4">
                                        <label for="license_plate">License Plate <span class="text-red-500">*</span></label>
                                        <input type="text" name="license_plate" id="license_plate" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('license_plate') }}" required />
                                        @error('license_plate')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="md:col-span-4 text-right">
                                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" id="submitButton">
                                            Create Vehicle
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
</x-app-layout>
