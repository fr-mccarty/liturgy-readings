<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
{{--    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">--}}
{{--        {{ __('Dashboard') }}--}}
{{--    </x-nav-link>--}}

    <x-nav-link href="{{ route('wedding') }}" :active="request()->routeIs('wedding')">
        Wedding Readings
    </x-nav-link>
</div>
