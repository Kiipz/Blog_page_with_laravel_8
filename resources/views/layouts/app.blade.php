<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('') }}" sizes="16x16" type="image/png">
    <title>{{ config('app.name') }}</title>
    {{-- bootstrap --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <img class="logo-img" src="{{ asset('img/prime.png') }}" alt="logo">

    @include('inc.navbar')
    
    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>

    <div class="card-footer mt-3">
        <footer class="text-center bg-dark text-white">
            <div class="container p-4">
                <!-- START OF section social media -->
                <section class="mb-4">
                    <!-- Facebook -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#" role="button">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <!-- Twitter -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#" role="button">
                    <i class="fab fa-twitter"></i>
                    </a>

                    <!-- Google -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#" role="button">
                        <i class="fab fa-google"></i>
                    </a>

                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#" role="button">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <!-- Linkedin -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#" role="button">
                        <i class="fab fa-linkedin-in"></i>
                    </a>

                    <!-- Github -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#" role="button">
                        <i class="fab fa-github"></i>
                    </a>
                </section>
                <!-- END OF SECTION SOCIAL -->
                <!-- Section: Form -->
                <section class="newsletter container">
                    <form action="#">
                        <div class="row d-flex justify-content-center">
                            <div class="col-auto">
                                <p class="pt-2">
                                    <strong>Sign up for our newsletter</strong>
                                </p>
                            </div>
                            
                            <div class="col-md-5 col-12">
                                <form method="get" action="{{ url('senMail') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-outline form-white mb-4">
                                        <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                                        <input class="btn btn-outline-light mt-4" type="submit" value="Subscribe">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </form>
                </section>
                <!-- Section: Form -->
                <!-- Section: Text -->
                <section class="mb-4">
                    <p>
                        This blog site was created as part of practise of Laravel 8 framework. Feel free to test any component within the site. Afterwards don't forget to give a comment from the contact section below.
                    </p>
                </section>
                <!-- Section: Text -->
                <!-- Section: Links -->
                <section class="">
                    <!--Grid row-->
                    <div class="row">
                    <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">What we do</h5>
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#" class="text-white">Home</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white">Sevices</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Know more about us</h5>
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="https://portfolio-1e9a9.web.app/" target="blank" class="text-white">About</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Contact Author</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->
                    </div>
                    {{-- start of modals --}}
                    
                    <!-- Contact Modal -->
                    <div style="color: black" class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h2 style="text-align: center;" id="staticBackdropLabel" class="modal-title"><span style="border-bottom: 3px solid #6666ff; color: #6666ff;">Contacts</span></h2>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="msg-container">
                                    Got  question about the author? Feel free to reach him at any of the following methods. Am glad to hear from you.<br>For more info:<br>
                                  <p>Call: <a href="tel:+254702310628">+254702310628</a> or <a href="https://wa.me/+254702310628" target="blank"><i class="fab fa-whatsapp"></i></a></p>
                                  <p>Email: <a href="mailto:alexkiipz4@gmail.com">alexkiipz4@gmail.com</a></p>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" style="border-radius: 0" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    {{-- end of modals --}}
                </section>
                <!-- Section: Links -->
            </div>
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                &copy;2021 Copyright: <a style="color: white; text-decoration: none;" href="https://portfolio-1e9a9.web.app/">The Prime</a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/ckeditor/ckeditor.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
</body>
</html>
