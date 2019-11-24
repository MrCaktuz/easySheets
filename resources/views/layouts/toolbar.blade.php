<div class="toolbar">
    <div class="toolbar_wrap">
        <!-- Left Side Of Toolbar -->
        <div class="toolbar_brand_container">
            <a class="toolbar_icon" href="{{ url('/') }}">
                @include( 'objects.logo' )
            </a>
        </div>

        <!-- Right Side Of Navbar -->
        <div class="toolbar_action_container" id="navbarSupportedContent">
                <!-- Authentication Links -->
                @guest
                    @if (Route::currentRouteName() !== 'login')
                        <a class="toolbar_button" href="{{ route('login') }}">{{ __('auth.login') }}</a>
                    @endif
                    @if (Route::currentRouteName() !== 'register')
                        <a class="toolbar_button" href="{{ route('register') }}">{{ __('auth.register') }}</a>
                    @endif
                @else
                <div class="toolbar_dropdown-container">
                    <a class="toolbar_dropdown-toggle" href="#" role="button">
                        {{ Auth::user()->name }}
                    </a>

                    <div class="toolbar_dropdown-content">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('auth.logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                @endguest
            </ul>
        </div>
    </div>
</div>