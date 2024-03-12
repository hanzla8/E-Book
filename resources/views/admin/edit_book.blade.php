<!doctype html>
<html lang="en">

<head>
    <title>Edit Book</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/img/gazzi-jpg') }}" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.min.css') }}">
</head>

<body>

    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <div class="page-flex">
        <!-- ! Sidebar -->

        @include('admin.aside')

        <div class="main-wrapper">
            <!-- ! Main nav -->
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
                                <span class="nav-user-img">
                                    <picture>
                                        <source srcset="./img/avatar/avatar-illustrated-02.webp" type="image/webp"><img
                                            src="./img/avatar/avatar-illustrated-02.png" alt="User name">
                                    </picture>
                                </span>
                            </button>
                            <ul class="users-item-dropdown nav-user-dropdown dropdown">

                                <li><a class="danger" href="##">
                                        <i data-feather="log-out" aria-hidden="true"></i>
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
            <!-- ! Main -->

            {{-- Edit book --}}


            <main class="main users chart-page" id="skip-target">
                <div class="container">
                    {{-- <h2 class="main-title">Dashboard</h2> --}}

                    <div class="row">
                        <div class="col-lg-10 mx-auto">

                            {{-- <div class="users-table table-wrapper"> --}}
                            <form method="POST" action="{{ url('update_book', $data->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <!-- Title input -->
                                <div class="form-outline mb-4 mt-4">
                                    <div class="row">
                                        <div class="col-2 text-center">
                                            <label for="title" class="form-label"> Book Title</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="title" class="form-control"
                                                value="{{ $data->title }}" />
                                        </div>
                                    </div>
                                </div>
                                <!-- author -->
                                <div class="form-outline mb-4 mt-4">
                                    <div class="row">
                                        <div class="col-2 text-center">
                                            <label for="author" class="form-label"> Book Author</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="author" class="form-control"
                                                value="{{ $data->author }}" />
                                        </div>
                                    </div>
                                </div>
                                <!-- description input -->
                                <div class="form-outline mb-4 mt-4">
                                    <div class="row">
                                        <div class="col-2 text-center">
                                            <label for="description" class="form-label"> Book Description</label>
                                        </div>
                                        <div class="col-8">
                                            <textarea name="description" class="form-control"> {{ $data->description }} </textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- book_type input -->
                                <!-- current_price input -->
                                <div class="form-outline mb-4 mt-4">
                                    <div class="row">
                                        <div class="col-2 text-center">
                                            <label for="current_price" class="form-label"> Current Price</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="current_price" class="form-control"
                                                value="{{ $data->current_price }}" />
                                        </div>
                                    </div>
                                </div>
                                <!-- book_weight input -->
                                <div class="form-outline mb-4 mt-4">
                                    <div class="row">
                                        <div class="col-2 text-center">
                                            <label for="book_weight" class="form-label"> Book Weight</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="book_weight"
                                                class="form-control"value="{{ $data->book_weight }}" />
                                        </div>
                                    </div>
                                </div>
                                <!-- delivery_charges input -->
                                <div class="form-outline mb-4 mt-4">
                                    <div class="row">
                                        <div class="col-2 text-center">
                                            <label for="delivery_charges" class="form-label"> Delivery Charges</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="delivery_charges" class="form-control"
                                                value="{{ $data->delivery_charges }}" />
                                        </div>
                                    </div>
                                </div>
                                <!-- total_price input -->
                                <div class="form-outline mb-4 mt-4">
                                    <div class="row">
                                        <div class="col-2 text-center">
                                            <label for="total_price" class="form-label"> Total Price</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="total_price" class="form-control"
                                                value="{{ $data->total_price }}" />
                                        </div>
                                    </div>
                                </div>

                                <!-- image input -->
                                <div class="form-outline mb-4 mt-4">
                                    <div class="row">
                                        <div class="col-2 text-center">
                                            <label for="image" class="form-label"> Book Image</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="file" name="image" class="form-control" />

                                        </div>
                                    </div>
                                </div>
                                <!-- Current image input -->
                                <div class="form-outline mb-4 mt-4">
                                    <div class="row">
                                        <div class="col-2 text-center">
                                            <label for="image" class="form-label"> Current Book Image</label>
                                        </div>
                                        <div class="col-8">
                                            <img src="/book/{{ $data->image }}" width="100px" height="100px"
                                                alt="Book cover old pic">
                                        </div>
                                    </div>
                                </div>

                                {{-- submit button input --}}
                                <div class="form-outline mb-4 mt-4">
                                    <div class="row">
                                        <div
                                            class="col-8 justify-content-center align-items-center mx-auto display-flex">
                                            <input type="submit" name="submit" class="form-control btn btn-success"
                                                value="Update Book" />
                                        </div>
                                    </div>
                                </div>

                            </form>

                            {{-- </div> --}}
                        </div>

                    </div>
                </div>
            </main>

            <!-- ! Footer -->
            <footer class="footer">
                <div class="container footer--flex">
                    <div class="footer-start">
                        <p>2021 © Elegant Dashboard - <a href="elegant-dashboard.com" target="_blank"
                                rel="noopener noreferrer">elegant-dashboard.com</a></p>
                    </div>
                    <ul class="footer-end">
                        <li><a href="##">About</a></li>
                        <li><a href="##">Support</a></li>
                        <li><a href="##">Puchase</a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <!-- Chart library -->
    <script src="{{ asset('admin/plugins/chart.min.js') }}"></script>
    <!-- Icons library -->
    <script src="{{ asset('admin/plugins/feather.min.js') }}"></script>
    <!-- Custom scripts -->
    <script src="{{ asset('admin/js/script.js') }}"></script>
</body>

</html>
