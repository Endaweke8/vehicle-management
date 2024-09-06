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
                    <h3 class="text-lg font-semibold mb-4">{{ __("Welcome to your dashboard!") }}</h3>
                    
                    @if(auth()->user()->role_id == 1)
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="text-md font-semibold mb-2">{{ __("Vehicle Information") }}</h4>
                            <ul class="list-disc list-inside">
                                <li>{{ __("Total Vehicles: ") }} {{ $totalVehicles ?? 0 }}</li>
                            </ul>
                            <a href="{{ route('fetch_all_vehicles') }}" class="text-blue-500 hover:underline mt-2 inline-block">
                                {{ __("Manage Vehicles") }}
                            </a>
                        </div>
                        
                        <div>
                            <h4 class="text-md font-semibold mb-2">{{ __("User Statistics") }}</h4>
                            <ul class="list-disc list-inside">
                                <li>{{ __("Total Users: ") }} {{ $totalUsers ?? 0 }}</li>
                                <li>{{ __("New Users This Week: ") }} {{ $newUsersThisWeek ?? 0 }}</li>
                                <li>{{ __("New Users This Month: ") }} {{ $newUsersThisMonth ?? 0 }}</li>
                            </ul>
                            
                        </div>
                    </div>
                    @endif                </div>
            </div>
        </div>
    </div>
</x-app-layout>
