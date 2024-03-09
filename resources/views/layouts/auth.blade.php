@extends('layouts.base')

@section('body')
    <div class="relative flex flex-col justify-center w-full h-screen bg-no-repeat bg-cover" style="background-image:url('{{ asset('image/login.png') }}')">
        @yield('content')

        @isset($slot)
            {{ $slot }}
        @endisset
    </div>
@endsection
