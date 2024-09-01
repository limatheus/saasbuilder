<button id="dropdownMenuIconButton" data-dropdown-toggle="{{$model->id}}"  data-dropdown-trigger="hover" data-dropdown-placement="left" class="btn btn-sm b-outline btn-light-outline" type="button">
    <box-icon name="dots-vertical-rounded" class="fill-current"></box-icon>
</button>

<!-- Dropdown menu -->
<div id="{{$model->id}}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow p-3 space-x-2 dark:bg-dark-card dark:divide-gray-600">
    <button type="button" class="btn b-solid btn-light-solid btn-sm">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6">
            <path fill="#ffffff"
                  d="M11.5 10.9c-4 0-7.9.9-11.5 2.8h22.9c-3.6-1.9-7.4-2.8-11.4-2.8zM16.7 14.8c-1.7 0-3.1 1.1-3.6 2.6-1-.3-1.9-.3-2.8-.1-.6-1.4-1.9-2.4-3.6-2.4-2.1 0-3.8 1.7-3.8 3.8 0 2.1 1.7 3.8 3.8 3.8s3.8-1.7 3.8-3.8v-.4c.8-.2 1.6-.1 2.4.2v.3c0 2.1 1.7 3.8 3.8 3.8 2.1 0 3.8-1.7 3.8-3.8 0-2.2-1.7-4-3.8-4zm-7.2 3.9c0 1.6-1.3 2.8-2.8 2.8-1.6 0-2.8-1.3-2.8-2.8s1.3-2.8 2.8-2.8c1.2 0 2.2.7 2.6 1.7.1.3.2.6.2 1.1 0-.1 0-.1 0 0zm7.2 2.8c-1.6 0-2.8-1.3-2.8-2.8s1.3-2.8 2.8-2.8 2.8 1.3 2.8 2.8-1.3 2.8-2.8 2.8zM16.7 2 9.9 3.1 6.6 2 4.4 8.7h14.5z"
                  class="color4a4a4a svgShape"></path>
        </svg>
    </button>

    <button type="button" class="text-white btn b-solid btn-primary-solid btn-sm">
        <box-icon name="search" class="fill-current"></box-icon>
    </button>

    <button type="button" class="btn b-solid btn-info-solid btn-sm">
        <box-icon name="pencil" class="fill-current"></box-icon>
    </button>

    <button type="button" class="btn b-solid btn-danger-solid btn-sm">
        <box-icon name="trash" class="fill-current"></box-icon>
    </button>

</div>
