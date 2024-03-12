<!doctype html>
<html lang="en">

<head>
    <title>Add Book</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/img/svg/logo.svg') }}" type="image/x-icon">
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
        @include('admin.top_header')
            <!-- ! Main -->

            {{-- add book coding --}}


            <main class="main users chart-page" id="skip-target">
                <div class="container">
                    {{-- <h2 class="main-title">Dashboard</h2> --}}

                    <div class="row">
                        <div class="col-lg-10 mx-auto">

                            {{-- <div class="users-table table-wrapper"> --}}
                            <form method="POST" action="{{ url('upload_book') }}" enctype="multipart/form-data">
                                @csrf
                                <!-- Title input -->
                                <div class="form-outline mb-4 mt-4">
                                    <div class="row">
                                        <div class="col-2 text-center">
                                            <label for="title" class="form-label"> Book Title</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Book Title" required/>
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
                                                placeholder="Book Author" required/>
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
                                            <input type="text" name="description" class="form-control"
                                                placeholder="Book Description" required/>
                                        </div>
                                    </div>
                                </div>

                                <!-- current_price input -->
                                <div class="form-outline mb-4 mt-4">
                                    <div class="row">
                                        <div class="col-2 text-center">
                                            <label for="current_price" class="form-label"> Current Price</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" name="current_price" class="form-control"
                                                placeholder="Current Price" required/>
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
                                            <input type="text" name="book_weight" class="form-control"
                                                placeholder="Book Weight" required/>
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
                                                placeholder="Delivery Charges" required/>
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
                                                placeholder="Total Price" required/>
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
                                            <input type="file" name="image" class="form-control" required/>
                                        </div>
                                    </div>
                                </div>

                                {{-- submit button input --}}
                                <div class="form-outline mb-4 mt-4">
                                    <div class="row">
                                        <div
                                            class="col-8 justify-content-center align-items-center mx-auto display-flex">
                                            <input type="submit" name="submit" class="form-control btn btn-success"
                                                value="Add Book" />
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

@include('admin.footer')
