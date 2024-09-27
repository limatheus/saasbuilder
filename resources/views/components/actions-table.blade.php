

<div x-data="{open: false, openModal: false,  working: false, title: '' }" x-cloak wire:key="{{ $value }}" @close-alert.window="openModal = false">
    <div class="relative inline-block">
        <button @click="open = !open"
                class="flex inline-block px-2 py-1 text-slate-500 bg-slate-200 rounded-md cursor-pointer focus:outline-none dark:text-white dark:bg-dark-card"
                :class="{'font-semibold': open}">
            <box-icon name='dots-vertical-rounded' class="fill-current"></box-icon>
        </button>

        <ul x-show="open"
            class="absolute top-0 right-0 z-50 flex items-center justify-between px-4 py-1 mr-12 -m-1 space-x-2 text-center text-slate-500 bg-slate-200 rounded-md shadow dark:bg-dark-card dark:text-white"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform -translate-y-2"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-end="opacity-0 transform -translate-y-3"
            @click.away="open = false"
            @keydown.escape="open = false"
        >
            @if(in_array('impersonate', $actions))
                <li><a href="{{route($resource.'.impersonate', $value)}}" target="_blank"
                       class="px-2 py-1 text-xs btn b-solid btn-primary-solid btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5">
                            <path fill="#ffffff"
                                  d="M11.5 10.9c-4 0-7.9.9-11.5 2.8h22.9c-3.6-1.9-7.4-2.8-11.4-2.8zM16.7 14.8c-1.7 0-3.1 1.1-3.6 2.6-1-.3-1.9-.3-2.8-.1-.6-1.4-1.9-2.4-3.6-2.4-2.1 0-3.8 1.7-3.8 3.8 0 2.1 1.7 3.8 3.8 3.8s3.8-1.7 3.8-3.8v-.4c.8-.2 1.6-.1 2.4.2v.3c0 2.1 1.7 3.8 3.8 3.8 2.1 0 3.8-1.7 3.8-3.8 0-2.2-1.7-4-3.8-4zm-7.2 3.9c0 1.6-1.3 2.8-2.8 2.8-1.6 0-2.8-1.3-2.8-2.8s1.3-2.8 2.8-2.8c1.2 0 2.2.7 2.6 1.7.1.3.2.6.2 1.1 0-.1 0-.1 0 0zm7.2 2.8c-1.6 0-2.8-1.3-2.8-2.8s1.3-2.8 2.8-2.8 2.8 1.3 2.8 2.8-1.3 2.8-2.8 2.8zM16.7 2 9.9 3.1 6.6 2 4.4 8.7h14.5z"
                                  class="color4a4a4a svgShape"></path>
                        </svg>
                    </a></li>
            @endif()

                @if(in_array('grade', $actions))
                <li><a href="{{route($resource.'.grade', $value)}}"
                       class="px-2 py-1 text-xs btn-primary btn-sm">
                        <box-icon name="list-ul" class="fill-current"></box-icon>
                    </a></li>
            @endif()

            @if(in_array('view', $actions))
                <li><a href="{{route($resource.'.view', $value)}}"
                       class="px-2 py-1 text-xs btn-primary btn-sm">
                        <box-icon name="search" class="fill-current"></box-icon>
                    </a></li>
            @endif()
            @if(in_array('edit', $actions))
                <li>
                    <a href="{{route($resource.'.edit', $value)}}" class="px-2 py-1 text-xs bg-blue-500 border-blue-500 btn-primary btn-sm">
                        <box-icon name="pencil" class="fill-current"></box-icon>
                    </a>
                </li>
            @endif()

            @if(in_array('delete', $actions))
                @hasanyrole('super-admin|admin')
                <li>
                    <button class="px-2 py-1 mr-0 text-xs bg-red-500 border-red-500 btn-primary btn-sm " x-on:click="openModal = true; open = false">
                        <box-icon name="trash" class="fill-current"></box-icon>
                    </button>
                </li>
                @endhasanyrole
            @endif()

        </ul>
    </div>
    <div x-show="openModal"
         class="fixed inset-x-0 bottom-0 z-50 px-4 pb-4 sm:inset-0 sm:flex sm:items-center sm:justify-center">
        <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-slate-700 opacity-75"></div>
        </div>

        <div x-show="openModal" x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             class="relative px-4 pt-5 pb-4 overflow-hidden transition-all transform bg-white rounded-lg shadow-xl dark:bg-dark sm:max-w-lg sm:w-full sm:p-6">
            <div class="absolute top-0 right-0 hidden pt-4 pr-4 sm:block">
                <button @click="openModal = false" type="button"
                        class="text-slate-500 transition duration-150 ease-in-out hover:text-slate-500 dark:text-white focus:outline-none focus:text-slate-500">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div class="w-full">
                <div class="mt-3 text-center">
                    <h3 class="text-lg font-medium leading-6 text-slate-500 dark:text-white">
                        {{__('Delete:')}} {{$row->$title}}
                    </h3>
                    <div class="mt-2">
                        <div class="mt-10 text-slate-500 dark:text-white">
                            {{__('Are you sure?')}}
                        </div>
                        <div class="flex justify-center mt-10">
                            <span class="mr-2">
                                <button x-on:click="openModal = false" x-bind:disabled="working"
                                        class="inline-flex items-center justify-center w-32 px-3 py-2 text-sm font-medium leading-4 text-white transition duration-150 ease-in-out bg-slate-600 border border-transparent rounded-md shadow-sm hover:bg-slate-700 focus:outline-none focus:secondary focus:shadow-outline-teal active:bg-slate-700">
                                    {{__('Cancel')}}
                                </button>
                            </span>
                            <span x-on:click="working = !working">
                                <button wire:click="delete('{{ $value }}');"
                                        class="inline-flex items-center justify-center w-32 px-3 py-2 text-sm font-medium leading-4 text-white transition duration-150 ease-in-out bg-red-600 border border-transparent rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:border-red-700 focus:shadow-outline-teal active:bg-red-700">
                                   {{__('Yes')}}
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

