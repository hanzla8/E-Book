<!DOCTYPE html>
<html lang="en">

<head>

    @include('home.header')

</head>

<body>

    @include('home.navbar')

    <!-- END nav -->

    {{-- background portion --}}

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate mb-0 text-center">
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Book Store <i class="fa fa-chevron-right"></i></span></p>
              <h1 class="mb-0 bread">Book Store</h1>
            </div>
          </div>
        </div>
      </section>

    <section class="ftco-section p-5">
      <div class="container-fluid px-md-5">
        <div class="row">

            @foreach ($data as $data)


            <div class="col-md-6 col-lg-4 d-flex">
                <div class="book-wrap d-lg-flex">
                    <div class="img d-flex justify-content-end" style="background-image: url(book/{{$data->image}});">

                    </div>
                    <div class="text p-4">
                        <p class="mb-2"><span class="price">{{$data->total_price}} PKR</span></p>

                        <h2><a href="{{url('book_detail',$data->id)}}">{{$data->title}}</a></h2>

                        <span class="position">By {{$data->author}}</span>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
      </div>
    </section>


    @include('home.footer')



    @include('home.javascript')

</body>

</html>
