@extends('layouts.base')

@section('body')
<div>
    @include('include.sidebar')

    <div class="lg:pl-72">
        @include('include.navbar')

        <main class="py-10">
            <div class="px-4 sm:px-6 lg:px-8">
                @yield('content')
            </div>
        </main>
    </div>
</div>
@endsection
