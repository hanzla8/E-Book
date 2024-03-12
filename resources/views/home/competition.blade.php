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
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span> Competition <i class="fa fa-chevron-right"></i></span></p>
              <h1 class="mb-0 bread">Competition</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="ftco-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10">
              <div class="heading-section text-center ftco-animate pb-4">
                <h2>Competition for Journals</h2>
              </div>

            </div>
          </div>
        </div>
      </section>

      <section class="ftco-section">
        <div class="container">

            <div class="row mb-5">
                <div class="col-lg-4">
                    <div class="date-post w-100 text-lg-right mb-4">
                        <h3>15-FEB, 2024</h3>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="book-wrap book-wrap-2 d-md-flex">
                            <div class="img img-2 d-flex justify-content-end" style="background-image: url(images/book-1.jpg);">

                            </div>
                            <div class="text p-4">
                                <h2><a href="/submission">Journaling for Success</a></h2>
                                <p>Embrace competition as a catalyst for progress, a force that sharpens your skills, ignites your determination, and fuels your ambition.</p>
                                <a href="/submission" class="btn btn-outline-success p-2">ENROLL</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="book-wrap book-wrap-2 d-md-flex">
                            <div class="img img-2 d-flex justify-content-end" style="background-image: url(images/book-2.jpg);">

                            </div>
                            <div class="text p-4">
                                <h2><a href="#">The Ultimate Journaling Challenge</a></h2>
                                <p>Embrace competition as a catalyst for progress, a force that sharpens your skills, ignites your determination, and fuels your ambition. Remember, it's not the outcome that defines you, but the journey you undertake and the lessons you learn along the way..</p>
                                <a href="/submission" class="btn btn-outline-success p-2">ENROLL</a>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>

            <div class="row justify-content-center my-5">
                <div class="col-md-10">
                  <div class="heading-section text-center ftco-animate pb-4">
                    <h2 >Immerse Essay Competition 2024</h2>
                  </div>

                </div>
              </div>

            </div>
            <div class="container row ms-2">
                <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center rounded"
                    style="background-image: url(images/essay-5.png);">
                </div>
                <div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
                    <div class="heading-section">
                        <span class="subheading">Welcome To Essay Competition</span>
                        <p>Embark on the journey of the essay competition with courage and conviction, for it is not merely a test of words but a testament to your intellect and creativity.</p>
                        <p>Let your passion guide your pen and your determination fuel your prose, knowing that each paragraph is an opportunity to inspire, to persuade, and to leave an indelible mark on the reader's mind</p>
                        <p>So dare to dream, dare to delve deep, and dare to dazzle with your essay, for in the pursuit of excellence lies the true essence of victory..</p>
                        <a href="/essay_writing" class="btn btn-outline-success p-2">Click Here to Enroll</a>


                    </div>

                </div>
            </div>
        </div>
    </section>


    @include('home.footer')



    @include('home.javascript')

</body>

</html>
