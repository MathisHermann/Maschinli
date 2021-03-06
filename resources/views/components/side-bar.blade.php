<div>
    <div x-show="show_sidebar" class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true">
        <div
            @click="show_sidebar = !show_sidebar"
            class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true">
        </div>


        <div
            class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-cyan-700">

            <div class="absolute top-0 right-0 -mr-12 pt-2">
                <button
                    @click="show_sidebar = false"
                    type="button"
                    class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <span class="sr-only">Close sidebar</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <div class="flex-shrink-0 flex items-center px-4">
                <span class="text-2xl font-medium text-gray-200 tracking-widest">Maschinli</span>
            </div>
            <nav class="mt-5 flex-shrink-0 h-full divide-y divide-cyan-800 overflow-y-auto" aria-label="Sidebar">
                <div class="px-2 space-y-1">
                    <x-side-bar-item-home selected="{{ $attributes['page'] == 'home'}}"/>
                    <x-side-bar-item-machines selected="{{ $attributes['page'] == 'machines'}}"/>
                    <x-side-bar-item-maintenance selected="{{ $attributes['page'] == 'maintenances'}}"/>

                </div>
                <div class="mt-6 pt-6">
                    <div class="px-2 space-y-1">
                        <x-side-bar-item-settings selected="{{ $attributes['page'] == 'settings'}}"/>
                        <x-side-bar-item-help selected="{{ $attributes['page'] == 'help'}}"/>
                    </div>
                </div>
            </nav>
        </div>

        <div class="flex-shrink-0 w-14" aria-hidden="true">
        </div>
    </div>
    <div class="hidden lg:flex lg:w-64 lg:flex-col lg:fixed lg:inset-y-0">
        <div class="flex flex-col flex-grow bg-cyan-700 pt-5 pb-4 overflow-y-auto">
            <div class="flex items-center flex-shrink-0 px-4">
                <div class="flex-shrink-0 flex items-center px-4">
                    <span class="text-2xl font-medium text-gray-200 tracking-widest">Maschinli</span>
                </div>
            </div>
            <nav class="mt-5 flex-1 flex flex-col divide-y divide-cyan-800 overflow-y-auto" aria-label="Sidebar">
                <div class="px-2 space-y-1">
                    <x-side-bar-item-home selected="{{ $attributes['page'] == 'home'}}"/>
                    <x-side-bar-item-machines selected="{{ $attributes['page'] == 'machines'}}"/>
                    <x-side-bar-item-maintenance selected="{{ $attributes['page'] == 'maintenances'}}"/>
                </div>
                <div class="mt-6 pt-6">
                    <div class="px-2 space-y-1">
                        <x-side-bar-item-settings selected="{{ $attributes['page'] == 'settings'}}"/>
                        <x-side-bar-item-help selected="{{ $attributes['page'] == 'help'}}"/>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="lg:pl-64 flex flex-col flex-1">
        <div class="relative z-10 flex-shrink-0 flex h-16 bg-white border-b border-gray-200 lg:border-none">
            <button
                @click="show_sidebar = true"
                type="button"
                class="px-4 border-r border-gray-200 text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-500 lg:hidden">
                <span class="sr-only">Open sidebar</span>
                <!-- Heroicon name: outline/menu-alt-1 -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"/>
                </svg>
            </button>
        </div>
    </div>
</div>
