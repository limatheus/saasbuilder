@extends('layouts.base')

@section('base-body')
    @yield('content')

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
