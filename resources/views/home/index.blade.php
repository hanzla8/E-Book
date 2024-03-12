<!DOCTYPE html>
<html lang="en">

<head>

    @include('home.header')

</head>

<body>

    @include('home.navbar')

    <!-- END nav -->

    @include('home.background')

    <section class="ftco-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center"
                    style="background-image: url(images/about-1.jpg);">
                </div>
                <div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
                    <div class="heading-section">
                        <span class="subheading">Welcome To Publishing Company</span>
                        <h2 class="mb-4">Publishing Company Created By Authors</h2>

                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it
                            would have been rewritten a thousand times and everything that was left from its origin
                            would be the word "and" and the Little Blind Text should turn around and return to its own,
                            safe country.</p>


                    </div>

                </div>
            </div>
        </div>
    </section>

    @if (Route::has('login'))
    @auth

    <section class="ftco-section ftco-no-pt">
        <div class="container-fluid px-md-4">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Books</span>
                    <h2>Special Offer Only For You</h2>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="book-wrap d-lg-flex">
                        <div class="img d-flex justify-content-end" style="background-image: url('/images/Thinking, Fast and Slow.jpg');">

                        </div>
                        <div class="text p-4">
                            <p class="mb-2"><span class="price">Free</span></p>

                            <h2><a href="https://drive.google.com/file/d/1LIw5wojaBsIv1vTuhJnWKG-YxSq4P081/view" target="_blank">Thinking, Fast and Slow</a></h2>

                            <span class="position">By: Daniel Kahneman</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="book-wrap d-lg-flex">
                        <div class="img d-flex justify-content-end" style="background-image: url('/images/The Sun and Her Flowers.jpg');">

                        </div>
                        <div class="text p-4">
                            <p class="mb-2"><span class="price">Free</span></p>

                            <h2><a href="https://drive.google.com/file/d/1LYwURZD-vEgF0-H3KyjqPIG63LlyTwcK/view" target="_blank">The Sun and Her Flowers</a></h2>

                            <span class="position">By: Rupi Kaur</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="book-wrap d-lg-flex">
                        <div class="img d-flex justify-content-end" style="background-image: url('/images/Everything I Never Told You.jpg');">

                        </div>
                        <div class="text p-4">
                            <p class="mb-2"><span class="price">Free</span></p>

                            <h2><a href="https://drive.google.com/file/d/1cvAq4-QdQlrJ_FXWWWqKPoWkk3nE1Kow/view" target="_blank">Everything I Never Told You</a></h2>

                            <span class="position">By: Celeste Ng</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt">
        <div class="container-fluid px-md-4">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Books</span>
                    <h2>New Release</h2>
                </div>
            </div>
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

    @else

    <section class="ftco-section ftco-no-pt">
        <div class="container-fluid px-md-4">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Books</span>
                    <h2>New Release</h2>
                </div>
            </div>
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

    @endauth
    @endif

    <section class="ftco-section testimony-section ftco-no-pb">
        <div class="img img-bg border" style="background-image: url(images/bg_4.jpg);"></div>
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">WINNERS</span>
                    <h2 class="mb-3">COMPETITION WINNERS</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/staff-6.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Janiko</p>
                                            <span class="position">Computer Engieer</span>
                                        </div>
                                    </div>
                                    <p >Essay writing competition.</p>
                                    <span class="position">Title: Overcoming Challenges and Achieving Dreams.</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/staff-1.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Sameer Salman</p>
                                            <span class="position">Website Developer</span>
                                        </div>
                                    </div>
                                    <p >competition for Journals. </p>
                                    <span class="position">Title: How to Stay Away from PYSCHO.</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_4.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Abdullah Kumar</p>
                                            <span class="position">Software Engineer</span>
                                        </div>
                                    </div>
                                    <p >Essay writing competition.</p>
                                    <span class="position">Title: Overcoming Challenges and Achieving Dreams.</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Hanzela Baloch</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p >Essay writing competition.</p>
                                    <span class="position">Title: How to Stay Away from PYSCHO.</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



    @include('home.footer')



    @include('home.javascript')


</body>

</html>
