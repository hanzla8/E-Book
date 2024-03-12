<!DOCTYPE html>
<html lang="en">

<head>

    @include('home.header')

</head>

<body>

    @include('home.navbar')

    <!-- END nav -->

  <!-- Form Start -->

  <section class="ftco-section bg-light">
    <div class="container">
        @if(session()->has('message'))

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{session()->get('message')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    @endif
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="wrapper px-md-4">
            <div class="row mb-5 ">
              <div class="col-md-12 ">
                <div class="contact-wrap w-100 p-md-5 p-4">
                    <!-- Timer Start -->
                    <h2 id="timer" style="text-align: center; margin-bottom: 20px; color:red;"></h2>
                    <!-- Timer End -->
                  <h1 class="my-4 text-center">Essay Writing Competition</h1>
                  <h4>Essay Title: Imagine a Day Without Technology: What Would I Do?</h4>
                  <form method="POST"  enctype="multipart/form-data" action="{{url('your_essay_submission')}}">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label" for="name">Full Name</label>
                          <input type="text" class="form-control" name="name" id="name" placeholder="Name" required autofocus>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label" for="email">Email Address</label>
                          <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                      </div>


                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label" for="#">Your Essay</label>
                          <textarea name="your_essay" class="form-control" id="comment" cols="30" rows="8" placeholder="Max Length-1000" maxlength="1000" required></textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="submit" value="Submit" class="btn btn-outline-success">
                          {{-- <div class="submitting"></div> --}}
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Form End -->





      @include('home.footer')



      @include('home.javascript')

       <!-- Timer -->

  <script src="{{ asset('js/timer.js') }}"></script>


  </body>

  </html>
