<x-app-layout>
    <div>
        <div class="mt-5 md:mt-0 w-1/2">
            <form action="{{ route('items.store') }}" method="POST">
                @csrf
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <h1 class="text-2xl font-semibold text-gray-900">
                            {{ __('Add Item') }}
                        </h1>
                        <div class="grid grid-cols-4 gap-6">
                            <!-- Item -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-jet-label for="item_id" value="{{ __('Item') }}"/>
                                <select id="item_id" name="item_id"
                                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                    <option selected>Select Item</option>
                                    @foreach($items as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                <x-jet-input-error for="item_id" class="mt-2"/>
                            </div>

                            <!-- Purchase Date -->
                            <div class="col-span-3 sm:col-span-2">
                                <x-jet-label for="purchase_date" value="{{ __('Purchase Date') }}"/>
                                <input id="purchase_date" name="purchase_date"
                                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       type="date">
                                <x-jet-input-error for="purchase_date" class="mt-2"/>
                            </div>

                            <!-- Expiration Date -->
                            <div class="col-span-3 sm:col-span-2">
                                <x-jet-label for="expiration_date" value="{{ __('Expiration Date') }}"/>
                                <input id="expiration_date" name="expiration_date"
                                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       type="date">
                                <x-jet-input-error for="expiration_date" class="mt-2"/>
                            </div>

                            <!-- Retailer -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-jet-label for="retailer_id" value="{{ __('Retailer') }}"/>
                                <select id="retailer_id" name="retailer_id"
                                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                    <option selected>Select Retailer</option>
                                    @foreach($companies as $company)
                                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                                    @endforeach
                                </select>
                                <x-jet-input-error for="retailer_id" class="mt-2"/>
                            </div>

                            <!-- Purchase Price -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-jet-label for="purchase_price" value="{{ __('Price') }}"/>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">
                                            £
                                        </span>
                                    </div>
                                    <input type="text" name="purchase_price" id="purchase_price"
                                           class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md"
                                           placeholder="0.00" aria-describedby="price-currency">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm" id="price-currency">
                                            GBP
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Location -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-jet-label for="location_id" value="{{ __('Location') }}"/>
                                <select id="location_id" name="location_id"
                                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                    <option selected>Select Location</option>
                                    @foreach($locations as $location)
                                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                                    @endforeach
                                </select>
                                <x-jet-input-error for="location_id" class="mt-2"/>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <x-jet-button>
                            {{ __('Add Location') }}
                        </x-jet-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
