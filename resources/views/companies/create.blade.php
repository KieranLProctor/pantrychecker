<x-app-layout>
    <div>
        <div class="mt-5 md:mt-0 w-1/2">
            <form action="{{ route('companies.store') }}" method="POST">
                @csrf
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <h1 class="text-2xl font-semibold text-gray-900">
                            {{ __('Add Company') }}
                        </h1>
                        <div class="grid grid-cols-4 gap-6">
                            <!-- Name -->
                            <div class="col-span-3 sm:col-span-2">
                                <x-jet-label for="name" value="{{ __('Name') }}"/>
                                <input id="name" name="name"
                                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       type="text">
                                <x-jet-input-error for="name" class="mt-2"/>
                            </div>

                            <!-- Description -->
                            <div class="col-span-3 sm:col-span-2">
                                <x-jet-label for="description" value="{{ __('Description') }}"/>
                                <input id="description" name="description"
                                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       type="text">
                                <x-jet-input-error for="description" class="mt-2"/>
                            </div>

                            <!-- Type -->
                            <div class="col-span-3 sm:col-span-2">
                                <x-jet-label for="type" value="{{ __('Type') }}"/>
                                <input id="type" name="type"
                                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       type="text">
                                <x-jet-input-error for="type" class="mt-2"/>
                            </div>

                            <!-- Website URL -->
                            <div class="col-span-3 sm:col-span-2">
                                <x-jet-label for="website_url" value="{{ __('Website URL') }}"/>
                                <input id="website_url" name="website_url"
                                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       type="text">
                                <x-jet-input-error for="website_url" class="mt-2"/>
                            </div>

                            <!-- Email -->
                            <div class="col-span-3 sm:col-span-2">
                                <x-jet-label for="email" value="{{ __('Email') }}"/>
                                <input id="email" name="email"
                                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       type="text">
                                <x-jet-input-error for="email" class="mt-2"/>
                            </div>

                            <!-- Address -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-jet-label for="address_id" value="{{ __('Address') }}"/>
                                <select id="address_id" name="address_id"
                                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                    <option value="" selected>Select Address</option>
                                    @foreach($addresses as $address)
                                        <option value="{{ $address->id }}">{{ $address->street_address_1 }}</option>
                                    @endforeach
                                </select>
                                <x-jet-input-error for="address_id" class="mt-2"/>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <x-jet-button>
                            {{ __('Add Company') }}
                        </x-jet-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
