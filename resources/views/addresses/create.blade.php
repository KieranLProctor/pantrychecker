<x-app-layout>
    <div>
        <div class="mt-5 md:mt-0 w-1/2">
            <form action="{{ route('addresses.store') }}" method="POST">
                @csrf
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <h1 class="text-2xl font-semibold text-gray-900">
                            {{ __('Add Address') }}
                        </h1>
                        <div class="grid grid-cols-4 gap-6">
                            <!-- Street Address 1 -->
                            <div class="col-span-3 sm:col-span-2">
                                <x-jet-label for="street_address_1" value="{{ __('Street Address 1') }}"/>
                                <input id="street_address_1" name="street_address_1"
                                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       type="text">
                                <x-jet-input-error for="street_address_1" class="mt-2"/>
                            </div>

                            <!-- Street Address 2 -->
                            <div class="col-span-3 sm:col-span-2">
                                <x-jet-label for="street_address_2" value="{{ __('Street Address 2') }}"/>
                                <input id="street_address_2" name="street_address_2"
                                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       type="text">
                                <x-jet-input-error for="street_address_2" class="mt-2"/>
                            </div>

                            <!-- City -->
                            <div class="col-span-3 sm:col-span-2">
                                <x-jet-label for="city" value="{{ __('City') }}"/>
                                <input id="city" name="city"
                                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       type="text">
                                <x-jet-input-error for="city" class="mt-2"/>
                            </div>

                            <!-- State -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-jet-label for="state_id" value="{{ __('State') }}"/>
                                <select id="state_id" name="state_id"
                                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                    <option value="" selected>Select State</option>
                                    @foreach($states as $state)
                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                    @endforeach
                                </select>
                                <x-jet-input-error for="state_id" class="mt-2"/>
                            </div>

                            <!-- Country -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-jet-label for="country_id" value="{{ __('Country') }}"/>
                                <select id="country_id" name="country_id"
                                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                    <option value="" selected>Select Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                                <x-jet-input-error for="country_id" class="mt-2"/>
                            </div>

                            <!-- Zipcode -->
                            <div class="col-span-3 sm:col-span-2">
                                <x-jet-label for="zipcode" value="{{ __('Zipcode') }}"/>
                                <input id="zipcode" name="zipcode"
                                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       type="text">
                                <x-jet-input-error for="zipcode" class="mt-2"/>
                            </div>

                            <!-- Latitude -->
                            <div class="col-span-3 sm:col-span-2">
                                <x-jet-label for="latitude" value="{{ __('Latitude') }}"/>
                                <input id="latitude" name="latitude"
                                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       type="text">
                                <x-jet-input-error for="latitude" class="mt-2"/>
                            </div>

                            <!-- Longitude -->
                            <div class="col-span-3 sm:col-span-2">
                                <x-jet-label for="longitude" value="{{ __('Longitude') }}"/>
                                <input id="longitude" name="longitude"
                                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       type="text">
                                <x-jet-input-error for="longitude" class="mt-2"/>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <x-jet-button>
                            {{ __('Add Address') }}
                        </x-jet-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
