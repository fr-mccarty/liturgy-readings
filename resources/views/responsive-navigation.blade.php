<div class="pt-2 pb-3 space-y-1">
{{--    <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">--}}
{{--        {{ __('Dashboard') }}--}}
{{--    </x-responsive-nav-link>--}}

    <x-responsive-nav-link href="{{ route('wedding') }}" :active="request()->routeIs('wedding')">
        Wedding Readings
    </x-responsive-nav-link>
</div>
