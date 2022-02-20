<div>
    <x-side-bar page="maintenances"/>
    <main
        x-data="{ machines_drop_down : false }"
        class="max-w-lg mx-auto pt-10 pb-12 px-4 lg:pb-16">
        <form wire:submit.prevent="submit">
            <div class="space-y-6">
                <div>
                    <h1 class="text-lg leading-6 font-medium text-gray-900">{{ __('Neue Wartung Erfassen') }}</h1>
                    <p class="mt-1 text-sm text-gray-500">{{ __('Neue Wartungsarbeit konfigurieren') }}</p>
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
                            placeholder="Räder aufpumpen">
                        @error('name')<p class="mt-2 text-sm text-red-600"
                                         id="email-error">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div>
                    <div class="mt-1">
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">
                                {{ __('Beschreibung') }}
                            </label>
                            <div class="mt-1">
                                <textarea
                                    wire:model="description"
                                    placeholder="Kontrollieren, dass die Räder auf 2.5 Bar sind. Wenn nicht, Räder auf 2.5 Bar anpassen."
                                    rows="4"
                                    name="description"
                                    id="description"
                                    class="block w-full shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm @error('description') border-red-300 @else border-gray-300 @enderror rounded-md">
                                </textarea>
                                @error('description')
                                <p class="mt-2 text-sm text-red-600"
                                   id="email-error">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="location" class="block text-sm font-medium text-gray-700">Maschine</label>
                    <select
                        wire:model="selected_machine"
                        id="location"
                        name="location"
                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base @error('description') border-red-300 @else border-gray-300 @enderror focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        <option value="-1" disabled selected>Auswählen</option>
                        @foreach($machines as $machine)
                            <option value="{{ $machine->id }}">{{ $machine->name }} in {{ $machine->position }}</option>
                        @endforeach
                    </select>
                    @error('selected_machine')
                    <p class="mt-2 text-sm text-red-600"
                       id="email-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end">
                    <a href="{{ route('show-maintenances') }}">
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
    </main>
</div>
