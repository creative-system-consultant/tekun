@extends('layouts.base')

@section('body')
<div class="flex h-full" x-data="{ open: false }" @keydown.window.escape="open = false">
    @include('include.sidebar')

    <!-- Content area -->
    <div class="flex flex-col flex-1 overflow-hidden">
        @include('include.navbar')

        <!-- Main content -->
        <div class="flex items-stretch flex-1 overflow-hidden">
            <main class="flex-1 overflow-y-auto">
                <!-- Primary column -->
                <div class="px-4 py-10 sm:px-6 lg:px-8">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
</div>
@endsection
