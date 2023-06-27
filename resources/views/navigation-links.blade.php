<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-nav-link>

    <x-nav-link href="{{ route('wedding-readings') }}" :active="request()->routeIs('wedding-readings')">
        Wedding Readings
    </x-nav-link>

    <x-nav-link href="{{ route('wedding-prayers') }}" :active="request()->routeIs('wedding-prayers')">
        Wedding Prayers
    </x-nav-link>

    <x-nav-link href="{{ route('funeral-readings') }}" :active="request()->routeIs('funeral-readings')">
        Funeral Readings
    </x-nav-link>

    <x-nav-link href="{{ route('funeral-prayers') }}" :active="request()->routeIs('funeral-prayers')">
        Funeral Prayers
    </x-nav-link>
</div>
