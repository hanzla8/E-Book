{{-- header part --}}

@include('admin.header')

<!-- ! Sidebar -->

@include('admin.aside')



<div class="main-wrapper">
    <!-- ! Main nav -->

    {{-- top header / navbar --}}
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
                <div class="col-lg-11">

                    <div class="users-table table-wrapper">
                        <table class="posts-table">
                            <thead>
                                <tr class="users-table-info">

                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>User Type</th>
                                    <th>Password</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)
                                    <tr>

                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->phone }}</td>
                                        <td>{{ $data->usertype }}</td>
                                        <td>{{ $data->password }}</td>

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
