<div>
    <x-side-bar page="machines"/>
    <main class="max-w-lg mx-auto pt-10 pb-12 px-4 lg:pb-16">
        <form wire:submit.prevent="submit">
            <div class="space-y-6">
                <div>
                    <h1 class="text-lg leading-6 font-medium text-gray-900">{{ __('Neue Maschine Erfassen') }}</h1>
                    <p class="mt-1 text-sm text-gray-500">{{ __('Neue Maschine erfassen und Unterhalt konfigurieren') }}</p>
                </div>

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
                    <div class="mt-1">
                        <input
                            wire:model="name"
                            type="text" id="name" name="name"
                            class="block w-full shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm
                        @error('name') border-red-300 @else border-gray-300 @enderror
                                rounded-md"
                            placeholder="Rasenmäher">
                        @error('name')<p class="mt-2 text-sm text-red-600"
                                         id="email-error">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div>
                    <label for="position" class="block text-sm font-medium text-gray-700">{{ __('Position') }}</label>
                    <div class="mt-1">
                        <input
                            wire:model="position"
                            type="text" id="position" name="position"
                            class="block w-full shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm
                        @error('position') border-red-300 @else border-gray-300 @enderror
                                rounded-md"
                            placeholder="Garage">
                        @error('position') <p class="mt-2 text-sm text-red-600"
                                              id="email-error">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="flex justify-end">
                    <a href="{{ route('show-machines') }}">
                        <button
                            type="button"
                            class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                            {{ __('Abbrechen') }}
                        </button>
                    </a>
                    <button type="submit"
                            class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-sky-500 hover:bg-sky-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                        {{ __('Speichern') }}
                    </button>
                </div>
            </div>
        </form>
    <!--
    <div class="mt-6 flex flex-col space-y-6">
        <div class="relative">
            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                <div class="w-full border-t border-gray-300"></div>
            </div>
        </div>
        <div>
            <h2 class="text-lg leading-6 font-medium text-gray-900">{{ __('Bereits erfasst:') }}</h2>
        </div>
    </div>
-->
    </main>
</div>
