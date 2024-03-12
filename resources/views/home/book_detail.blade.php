<!DOCTYPE html>
<html lang="en">

<head>

    @include('home.header')

</head>

<body>

    @include('home.navbar')

    <!-- END nav -->



    <section class="ftco-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    <div class="col-md-12">
                        <div class="book-wrap book-wrap-2 d-md-flex">
                            <div class="img img-2 d-flex justify-content-end"
                                style="background-image: url(/book/{{ $data->image }});">

                            </div>
                            <div class="text p-4">
                                <h2><a href="#">Book Title: <span
                                            class="text-uppercase ">{{ $data->title }}</span></a></h2>
                                <p>Author: {{ $data->author }}</p>
                                <p>Description: {{ $data->description }}</p>
                                <p>Actual Price: {{ $data->current_price }}</p>
                                <p>Book Weight: {{ $data->book_weight }}</p>
                                <p>Delivery Charges: {{ $data->delivery_charges }}</p>
                                <p class="mb-2"> Total Price:<span class="price">{{ $data->total_price }} PKR</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 bg-secondary rounded">
                    <h2 class="text-center text-white text-uppercase">Order Your Book</h2>

                    @if(session()->has('message'))

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{session()->get('message')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    @endif

                    <form action="{{url('order_book',$data->id)}}" method="POST">
                        @csrf
                        <div class="pt-2">
                            <label for="name" class="form-label text-white">Full Name:</label>
                            <input type="text" name="name" class="form-control" required

                            >
                        </div>
                        <div>
                            <label for="email" class="form-label text-white">Email:</label>
                            <input type="email" name="email" class="form-control" required
                             >
                        </div>
                        <div>
                            <label for="phone" class="form-label text-white">Phone:</label>
                            <input type="text" name="phone" class="form-control" required                                                        >
                        </div>
                        <div>
                            <label for="address" class="form-label text-white">Address:</label>
                            <input type="textarea" name="address" class="form-control" required>
                        </div>
                      
                        <div>
                            <label for="quantity" class="form-label text-white">Quantity</label>
                            <input type="number" name="quantity" id="" value="1" class="form-control">
                        </div>
                        <button onclick="confirn('Please confirm to place your order')" class="btn btn-success my-4 p-2 rounded" type="submit">Order Now</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>

    @include('home.footer')



    @include('home.javascript')

</body>

</html>
