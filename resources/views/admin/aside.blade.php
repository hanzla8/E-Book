<aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>
                <div class="logo-text">
                    <span class="logo-title">Admin</span>
                    <span class="logo-subtitle">Dashboard</span>
                </div>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="active" href="/home"><span class="icon home"
                            aria-hidden="true"></span>Dashboard</a>
                </li>
                <li>
                    <a class="" href="/"><span class="icon "
                            aria-hidden="true"></span>User Homepage</a>
                </li>

                <li>
                    <a href="{{ url('/orders') }}"><span class="icon "
                        aria-hidden="true"></span>Books Orders</a>
               </li>

                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon document" aria-hidden="true"></span>Books
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="{{url('view_book')}}">All Books</a>
                        </li>
                        <li>
                            <a href="{{ url('add_book') }}">Add New Books</a>
                        </li>
                    </ul>
                </li>



            </ul>

        </div>
    </div>

</aside>
