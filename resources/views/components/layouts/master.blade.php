<x-customponents::partials.headers title="Home" description="Description" section="">
    <x-customponents-section name="styles">
        @if (config('customponents.enable.app_style_sheet'))
            <x-customponents::resources.assets type="css" path="css/app.css" />
        @endif

        @yield('master_styles')
    </x-customponents-section>
</x-customponents::partials.headers>

{{ $slot }}

<x-customponents::partials.footers>
    <x-customponents-section name="scripts">
        @if (config('customponents.enable.app_script'))
            <x-customponents::resources.assets type="js" path="js/app.js" />
        @endif

        @yield('master_scripts')
    </x-customponents-section>
</x-customponents::partials.footers>