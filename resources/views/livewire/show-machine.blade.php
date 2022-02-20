<div>
    <x-side-bar page="machines"/>
    <main class="max-w-lg mx-auto pt-10 pb-12 px-4 lg:pb-16">
        <form wire:submit.prevent="submit">
            <div class="space-y-6">
                <div>
                    <h1 class="text-lg leading-6 font-medium text-gray-900">{{ __('Maschine Anpassen') }}</h1>
                    <p class="mt-1 text-sm text-gray-500">{{ __('Änderungen speichern') }}</p>
                </div>

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
                    <div class="mt-1">
                        <input
                            wire:model="name"
                            type="text" id="name"
                            class="block w-full shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm
                        @error('name') border-red-300 @else border-gray-300 @enderror
                                rounded-md"
                            placeholder="Rasenmäher">
                        @error('name')<p class="mt-2 text-sm text-red-600"
                                         id="name-error">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div>
                    <label for="position"
                           class="block text-sm font-medium text-gray-700">{{ __('Position') }}</label>
                    <div class="mt-1">
                        <input
                            wire:model="position"
                            type="text" id="position"
                            class="block w-full shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm
                        @error('position') border-red-300 @else border-gray-300 @enderror
                                rounded-md"
                            placeholder="Garage">
                        @error('position') <p class="mt-2 text-sm text-red-600"
                                              id="position-error">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="flex justify-end">
                    <a href="{{ route('show-machines') }}">
                        <button type="button"
                                class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                            {{ __('Zurück') }}
                        </button>
                    </a>
                    <button type="submit"
                            class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-sky-500 hover:bg-sky-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                        {{ __('Speichern') }}
                    </button>
                </div>
            </div>
        </form>
        <div class="mt-6 flex flex-col space-y-6">
            <div class="relative">
                <div class="absolute inset-0 flex items-center" aria-hidden="true">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
            </div>
            <div>
                <h2 class="text-lg leading-6 font-medium text-gray-900">{{ __('QR-Code:') }}</h2>
            </div>
            <div class="flex flex-col md:flex-row justify-between md:items-end space-y-2">
                <canvas
                    class="md:max-w-64 md:max-h-64"
                    id="qr"></canvas>
                <button
                    class="inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-cyan-500 hover:bg-cyan-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                    {{ __('Herunterladen') }}
                </button>
            </div>
        </div>

        <div class="mt-6 flex flex-col space-y-6">
            <div class="relative">
                <div class="absolute inset-0 flex items-center" aria-hidden="true">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
            </div>
            <div>
                <h2 class="text-lg leading-6 font-medium text-gray-900">{{ __('Maschine löschen:') }}</h2>
            </div>
            <button wire:click="delete"
                    class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                {{ __('Löschen') }}
            </button>
        </div>
    </main>
    <script>
        document.addEventListener("DOMContentLoaded", function (event) {
            (function () {
                qr = new Qrious({
                    element: document.getElementById('qr'),
                    size: 1000,
                    value: '{"id": {{ $machine->id }}, "name": "{{ $machine->name }}" }'
                });
            })();
        });
    </script>
</div>
