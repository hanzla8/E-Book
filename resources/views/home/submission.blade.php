@include('home.header')
</head>

<body>

  <!-- Navbar Start -->

  @include('home.navbar')

  <!-- Navbar End -->



  <!-- Heading End -->

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
            <div class="row mb-5">
              <div class="col-md-12">
                <div class="contact-wrap w-100 p-md-5 p-4">
                  <h1 class="my-4 text-center">Competation For Journals</h1>
                  <form method="POST"  name="contactForm" enctype="multipart/form-data" action="{{route ('submission.store')}}">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label" for="name">Full Name</label>
                          <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
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
                          <label class="label" for="formFile">Upload Document</label>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" name="document" id="formFile" accept=".pdf, .doc, .docx" required>
                            <label class="custom-file-label text-muted" for="formFile">Choose File (PDF, DOC, DOCX, max 10MB)</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label" for="#">Comments</label>
                          <textarea name="comment" class="form-control" id="comment" cols="30" rows="4" placeholder="Comment (max 500 characters)" maxlength="500" required></textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="submit" value="Submit" class="btn btn-outline-success">
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

  <!-- Footer Start -->

  @include('home.footer')

  <!-- Footer End -->



  <!-- Loader -->


  @include('home.javascript')


</body>

</html>

