<x-app-layout>
    <div>
        <div class="mt-5 md:mt-0 w-1/2">
            <form action="{{ route('locations.store') }}" method="POST">
                @csrf
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <h1 class="text-2xl font-semibold text-gray-900">
                            {{ __('Add Location') }}
                        </h1>
                        <div class="grid grid-cols-3 gap-6">
                            <!-- Name -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-jet-label for="name" value="{{ __('Name') }}"/>
                                <input id="name" name="name"
                                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       type="text">
                                <x-jet-input-error for="name" class="mt-2"/>
                            </div>

                            <!-- Description -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-jet-label for="description" value="{{ __('Description') }}"/>
                                <input id="description" name="description"
                                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       type="text">
                                <x-jet-input-error for="description" class="mt-2"/>
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
