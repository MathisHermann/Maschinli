<div>
    <x-side-bar page="machines"/>
    <div class="lg:pl-64 flex flex-col flex-1">
        <main class="flex-1 pb-8">
            <div class="mt-8">
                <div class="flex flex-row justify-between items-center max-w-6xl mx-auto mt-8 px-4 sm:px-6 lg:px-8">
                    <h2 class="text-lg leading-6 font-medium text-gray-900">
                        Alle Maschinen
                    </h2>
                    <a href="{{ route('create-machine') }}"
                       class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        Neu </a>
                </div>
                <!-- Activity table (small breakpoint and up) -->
                <div class="hidden sm:block">
                    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="flex flex-col mt-2">
                            <div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead>
                                    <tr>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            #
                                        </th>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Name
                                        </th>
                                        <th class="hidden px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider md:block">
                                            Position
                                        </th>
                                        <th class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">

                                    @foreach($machines as $machine)
                                        <tr class="bg-white">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $machine->id }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $machine->name }}</td>
                                            <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">{{ $machine->position }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="/machines/{{ $machine->id }}"
                                                   class="text-indigo-600 hover:text-indigo-900">Bearbeiten</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shadow sm:hidden">
                    <ul role="list" class="mt-2 divide-y divide-gray-200 overflow-hidden shadow sm:hidden">
                        @foreach($machines as $machine)
                            <li>
                                <a href="/machines/{{ $machine->id }}"
                                   class="block px-4 py-4 bg-white hover:bg-gray-50">
                                    <span class="flex items-center space-x-4">
                                        <span class="flex-1 flex space-x-2 truncate">
                                            <span class="flex flex-col text-gray-500 text-sm truncate">
                                                <span class="truncate">{{ $machine->name }}</span>
                                                <span> {{__('Position:') }} {{ $machine->position }}</span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </main>
    </div>
</div>
