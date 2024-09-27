<div>
    @php
        $roles = \App\Models\Role::whereIn('name', explode(', ', $value))->get();

    @endphp


    @foreach($roles as $role)

        <span
            class="mr-1 inline-flex items-center text-white px-2 rounded-full text-xs font-semibold" style="background-color: {{$role->color}}">{{__($role->display_name)}}</span>

    @endforeach
</div>
