<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
      data-sidebar-image="none">
<head>

    <meta charset="utf-8"/>
    <title>SooKorean Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="SooKorean Admin Login" name="description"/>
    <meta content="SooKorean" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('') }}assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="{{ asset('') }}assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('') }}assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="{{ asset('') }}assets/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="{{ asset('') }}assets/css/app.min.css" rel="stylesheet" type="text/css"/>
    <!-- custom Css-->
    <link href="{{ asset('') }}assets/css/custom.min.css" rel="stylesheet" type="text/css"/>

</head>

<body>

<!-- auth-page wrapper -->
<div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
    <div class="bg-overlay"></div>
    <!-- auth-page content -->
    <div class="auth-page-content overflow-hidden pt-lg-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card overflow-hidden">
                        <div class="row justify-content-center g-0">
                                <div class="p-lg-5 p-4">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <h5 class="text-primary">Forgot Password?</h5>
                                    <p class="text-muted">Reset password with SooKorean</p>

                                    <div class="mt-2 text-center">
                                        <lord-icon
                                            src="https://cdn.lordicon.com/rhvddzym.json" trigger="loop"
                                            colors="primary:#0ab39c" class="avatar-xl">
                                        </lord-icon>
                                    </div>

                                    <div class="alert alert-borderless alert-warning text-center mb-2 mx-2"
                                         role="alert">
                                        Enter your email and instructions will be sent to you!
                                    </div>
                                    <div class="p-2">
                                        <form method="POST" action="{{ route('password.email') }}">
                                            @csrf
                                            <div class="mb-4">
                                                <label class="form-label">Email</label>
                                                <input id="email" type="email"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       name="email"
                                                       value="{{ old('email') }}" required autocomplete="email"
                                                       autofocus>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="text-center mt-4">
                                                <button class="btn btn-success w-100" type="submit">Send Reset Link
                                                </button>
                                            </div>
                                        </form><!-- end form -->
                                    </div>

                                    <div class="mt-5 text-center">
                                        <p class="mb-0">
                                            Wait, I remember my password...
                                            <a href="{{route('login')}}" class="fw-semibold text-primary text-decoration-underline">
                                                Click here
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="mb-0">&copy;
                            <script>document.write(new Date().getFullYear())</script>
                            SooKorean <i class="mdi mdi-heart text-danger"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
</div>
<!-- end auth-page-wrapper -->

<!-- JAVASCRIPT -->
<script src="{{ asset('') }}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('') }}assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{ asset('') }}assets/libs/node-waves/waves.min.js"></script>
<script src="{{ asset('') }}assets/libs/feather-icons/feather.min.js"></script>
<script src="{{ asset('') }}assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="{{ asset('') }}assets/js/plugins.js"></script>

<!-- password-addon init -->
<script src="{{ asset('') }}assets/js/pages/password-addon.init.js"></script>
</body>
</html>
