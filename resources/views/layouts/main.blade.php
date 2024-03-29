@extends('layouts.base')

@section('body')
<div class="flex h-full" x-data="{ open: false, opensubcif: false }" @keydown.window.escape="open = false">
    @include('include.sidebar')

    <!-- Content area -->
    <div class="flex flex-col flex-1 h-full overflow-hidden">
        @include('include.navbar')

        <!-- Main content -->
        <div class="flex items-stretch flex-1 h-full overflow-hidden">
            <main class="flex-1 h-full px-4 py-6 overflow-y-auto sm:px-6 lg:px-8">
                @yield('content')
            </main>
        </div>
    </div>
</div>
@endsection
