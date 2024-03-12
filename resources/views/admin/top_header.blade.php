<nav class="main-nav--bg">
    <div class="container main-nav">
        <div class="main-nav-start">
        </div>
        <div class="main-nav-end">
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle--gray" aria-hidden="true"></span>
            </button>

            <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
                <span class="sr-only">Switch theme</span>
                <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
                <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
            </button>

            <div class="nav-user-wrapper">
                <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
                    <span class="sr-only">My profile</span>
                    {{-- <span>Gazeen</span> --}}
                    <span class="nav-user-img">
                        <picture>
                            <source srcset="{{asset('admin/img/gazzi-4.jpg')}}"><img
                                src="{{ asset('admin/img/gazzi-1.jpg')}}" alt="User name">
                        </picture>
                    </span>
                </button>
                <ul class="users-item-dropdown nav-user-dropdown dropdown">

                    <li><a class="danger" href="##">
                            {{-- <i data-feather="log-out" aria-hidden="true"></i> --}}
                            <span>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a class="nav-link important"><x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                this.closest('form').submit();">
                                            {{ __('Logout') }}
                                        </x-dropdown-link></a>
                                </form>
                            </span>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
