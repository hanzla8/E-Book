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

                                            <th>Book ID</th>
                                            <th>Book Name</th>
                                            <th>Book Price</th>
                                            <th>Customer Name</th>
                                            <th>Email</th>
                                            <th>Phone #</th>
                                            <th>Address</th>
                                            <th>book_type</th>
                                            <th>Quantity</th>
                                            <th>Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $data)

                                        <tr>

                                            <td>{{$data->book_id}} </td>
                                            <td>{{$data->book->title}} </td>
                                            <td>{{$data->book->total_price}} </td>
                                            <td>{{$data->name}} </td>
                                            <td>{{$data->email}} </td>
                                            <td>{{$data->phone}} </td>
                                            <td>{{$data->address}} </td>
                                            <td>{{$data->book_type}} </td>
                                            <td>{{$data->quantity}} </td>
                                            <td>waiting </td>

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
