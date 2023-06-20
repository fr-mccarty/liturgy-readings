<div class="pt-2 pb-3 space-y-1">
{{--    <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">--}}
{{--        {{ __('Dashboard') }}--}}
{{--    </x-responsive-nav-link>--}}

    <x-responsive-nav-link href="{{ route('wedding-readings') }}" :active="request()->routeIs('wedding-readings')">
        Wedding Readings
    </x-responsive-nav-link>

    <x-responsive-nav-link href="{{ route('funeral-readings') }}" :active="request()->routeIs('funeral-readings')">
        Funeral Readings
    </x-responsive-nav-link>
</div>
