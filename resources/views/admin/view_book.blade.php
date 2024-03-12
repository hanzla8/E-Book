{{-- header portion --}}

@include('admin.header')

<!-- ! Sidebar -->

@include('admin.aside')

<div class="main-wrapper">
    <!-- ! Main nav -->
    @include('admin.top_header')
    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Dashboard</h2>
            <div class="row stat-cards">
                <div class="col-md-6 col-xl-3">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="users-table table-wrapper">
                        <table class="posts-table">
                            <thead>
                                <tr class="users-table-info">

                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Description</th>
                                    <th>Book Type</th>
                                    <th>Current Price</th>
                                    <th>Book Weight</th>
                                    <th>Delivery Charges</th>
                                    <th>total Price</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)
                                    <tr>

                                        <td>{{ $data->title }} </td>
                                        <td>{{ $data->author }} </td>
                                        <td>{!! Str::limit($data->description, 100) !!} </td>
                                        <td>{{ $data->book_type }} </td>
                                        <td>{{ $data->current_price }} </td>
                                        <td>{{ $data->book_weight }} </td>
                                        <td>{{ $data->delivery_charges }} </td>
                                        <td>{{ $data->total_price }} </td>
                                        <td id="img">
                                            <img src="book/{{ $data->image }}" height="80px" width="80px"
                                                alt="cover image">
                                        </td>
                                        <td>
                                            <span class="p-relative">
                                                <button class="dropdown-btn transparent-btn" type="button"
                                                    title="More info">
                                                    <div class="sr-only">More info</div>
                                                    <i data-feather="more-horizontal" aria-hidden="true"></i>
                                                </button>
                                                <ul class="users-item-dropdown dropdown">
                                                    <li><a href="{{ url('edit_book', $data->id) }}">Edit</a></li>


                                                    <li><a onclick="return confirm('ARE YOU SURE!!! YOU WANNA DELETE THIS BOOK');"
                                                            href="{{ url('delete_book', $data->id) }}">Delete</a></li>
                                                </ul>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- ! Footer -->
    @include('admin.footer')
