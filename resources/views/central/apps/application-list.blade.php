<x-central.app-layout>
    <x-slot name="header">
        {{ __('Applications') }}
    </x-slot>

    <h2 class="mt-8 text-lg leading-6 font-medium text-gray-900">
        Your applications
    </h2>

    <!-- Activity list (smallest breakpoint only) -->
    <div class="shadow sm:hidden">
        <ul role="list" class="mt-2 divide-y divide-gray-200 overflow-hidden shadow sm:hidden">
            <li>
                <a href="#" class="block px-4 py-4 bg-white hover:bg-gray-50">
                <span class="flex items-center space-x-4">
                  <span class="flex-1 flex space-x-2 truncate">
                    <!-- Heroicon name: solid/cash -->
                    <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd"
                            d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                            clip-rule="evenodd"/>
                    </svg>
                    <span class="flex flex-col text-gray-500 text-sm truncate">
                      <span class="truncate">Payment to Molly Sanders</span>
                      <span><span class="text-gray-900 font-medium">$20,000</span> USD</span>
                      <time datetime="2020-07-11">July 11, 2020</time>
                    </span>
                  </span>
                    <!-- Heroicon name: solid/chevron-right -->
                  <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                       viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                          clip-rule="evenodd"/>
                  </svg>
                </span>
                </a>
            </li>

            <!-- More transactions... -->
        </ul>

        <nav class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200"
             aria-label="Pagination">
            <div class="flex-1 flex justify-between">
                <a href="#"
                   class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">
                    Previous
                </a>
                <a href="#"
                   class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">
                    Next
                </a>
            </div>
        </nav>
    </div>

    <!-- Activity table (small breakpoint and up) -->
    <div class="hidden sm:block">
        <div class="flex flex-col mt-2">
            <div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                    <tr>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Domain
                        </th>
                        <th class="hidden px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider md:block">
                            Plan
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Date
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach(auth()->user()->tenants()->get() as $tenant)
                        <tr class="bg-white">
                            <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                <div class="flex">
                                    <a href="#" class="group inline-flex space-x-2 truncate text-sm">
                                        <!-- Heroicon name: solid/cash -->
                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                                                  clip-rule="evenodd"/>

                                        </svg>
                                        <p class="text-gray-500 truncate group-hover:text-gray-900">
                                            {{ $tenant->domains()->first()->domain }}
                                        </p>
                                    </a>
                                </div>
                            </td>
                            <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 capitalize">
                          Basic
                        </span>
                            </td>
                            <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                <time datetime="2020-07-11">{{ $tenant->created_at->format('M j, Y') }}</time>
                            </td>
                        </tr>
                    @endforeach

                    <!-- More transactions... -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-central.app-layout>
