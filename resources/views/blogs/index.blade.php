<x-layout>

    {{-- @dd(auth()->user()->name); You can check like this login user --}}

    @if (session('success'))
    <div class="alert alert-success text-center">{{session('success')}}</div>
    @endif

    <!-- hero section -->
    <x-hero />

    <!-- blogs section -->
    <x-blogs-section :blogs="$blogs" />

    <!-- subscribe new blogs -->
    <x-subscribe />

</x-layout>
