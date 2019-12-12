<!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include ( 'layouts.head' )
    <body>
        <div id="app" class="app_container">
            @include('layouts.toolbar')
            <main class="page_container">
                @yield('content')
            </main>
            @include ( 'layouts.footer' )
        </div>
    </body>
</html>
