<div class="flex overflow-hidden border border-gray-300 dark:border-dark-border divide-x divide-gray-300 dark:divide-dark-border rounded pagination">
    <!-- Previous Page Link -->
    @if ($paginator->onFirstPage())
    <button class="relative inline-flex items-center px-2 py-2 text-sm font-medium leading-5 text-slate-500 bg-white dark:bg-dark-card"
        disabled>
        <span>&laquo;</span>
    </button>
    @else
    <button wire:click="previousPage"
        id="pagination-desktop-page-previous"
        class="relative inline-flex items-center px-2 py-2 text-sm font-medium leading-5 text-slate-500 transition duration-150 ease-in-out bg-white dark:bg-dark-card hover:text-gray-400 focus:z-10 focus:outline-none focus:border-primary-500 focus:shadow-outline-primary active:bg-gray-100 active:text-slate-500">
        <span>&laquo;</span>
    </button>
    @endif

    <div class="divide-x divide-gray-300 dark:divide-dark-border">
        @foreach ($elements as $element)
        @if (is_string($element))
        <button class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-slate-700 bg-white dark:bg-dark-card" disabled>
            <span>{{ $element }}</span>
        </button>
        @endif

        <!-- Array Of Links -->

        @if (is_array($element))
        @foreach ($element as $page => $url)
        <button wire:click="gotoPage({{ $page }})"
                id="pagination-desktop-page-{{ $page }}"
                class=" relative inline-flex items-center px-4 py-2 text-sm leading-5 font-medium text-slate-700 dark:text-dark-text hover:text-slate-500 focus:z-10 focus:outline-none focus:border-primary-500 focus:shadow-outline-primary active:bg-gray-100 active:text-slate-700 transition ease-in-out duration-150 {{ $page === $paginator->currentPage() ? '-mx-1 bg-slate-200 dark:bg-dark-card-shade' : 'bg-white dark:bg-dark-card' }}">
            {{ $page }}
            </button>
        @endforeach
        @endif
        @endforeach
    </div>

    <!-- Next Page Link -->
    @if ($paginator->hasMorePages())
    <button wire:click="nextPage"
        id="pagination-desktop-page-next"
        class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium leading-5 text-slate-500 transition duration-150 ease-in-out bg-red hover:text-gray-400 focus:z-10 focus:outline-none focus:border-primary-500 focus:shadow-outline-primary active:bg-gray-100 active:text-slate-500">
        <span>&raquo;</span>
    </button>
    @else
    <button
        class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium leading-5 text-slate-500 bg-white dark:bg-dark-card "
        disabled><span>&raquo;</span></button>
    @endif
</div>
