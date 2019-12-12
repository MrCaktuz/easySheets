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
                    <div class="toolbar_dropdown-toggle" role="button">
                        <div class="toolbar_dropdown-toggle-name">{{ Auth::user()->name }}</div>
                        <div class="avatar avatar-small avatar-border">
                            <img src="{{Auth::user()->avatar}}" alt="Avatar Image" class="avatar_img">
                        </div>
                    </div>

                    <div class="toolbar_dropdown-content">
                        <!-- Profile button -->
                        <a class="toolbar_dropdown-item" href="{{ route('profile', ['user' => Auth::user()]) }}">
                            {{ __('profile.showTitle') }}
                        </a>
                        <!-- Dashboard button -->
                        <a class="toolbar_dropdown-item" href="{{ route('dashboard') }}">
                            {{ __('profile.dashboard') }}
                        </a>
                        <!-- Logout button -->
                        <a class="toolbar_dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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