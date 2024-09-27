<div>
    @switch($value)
    @case('active')
    <span
        class="mr-1 inline-flex items-center bg-green-100 text-green-500 px-2 rounded-full text-xs font-semibold">{{__('Active')}}</span>
    @break

    @case('disabled')
    <span
        class="mr-1 inline-flex items-center bg-gray-200 text-gray-700 px-2 rounded-full text-xs font-semibold">{{__('Disabled')}}</span>
    @break

    @case('blocked')
    <span
        class="mr-1 inline-flex items-center bg-red-500 text-white px-2 rounded-full text-xs font-semibold">{{__('Blocked')}}</span>
    @break

    @case('returned')
    <span
        class="mr-1 inline-flex items-center bg-black text-white px-2 rounded-full text-xs font-semibold">{{__('Returned')}}</span>
    @break

    @default
    <span
        class="mr-1 inline-flex items-center bg-green-100 text-green-500 px-2 rounded-full text-xs font-semibold">{{__('Active')}}</span>
    @endswitch
</div>
