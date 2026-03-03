<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>Login | Online Hostel Management System</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta name="description" content="Online Hostel Management System" />
    <meta name="keywords" content="hostel, mess, management, online hostel system" />
    <meta name="author" content="M. Abu Bakar, Saba Elahi, Fatima Batool" />
    <meta name="theme-color" content="#1e293b" />
    <meta name="color-scheme" content="light dark" />

    <!-- [Open Graph] -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Login | Online Hostel Management System" />
    <meta property="og:description" content="Login to your Online Hostel Management System account." />
    <meta property="og:site_name" content="Online Hostel Management System" />

    <!-- [Twitter/X Card] -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Login | Online Hostel Management System" />
    <meta name="twitter:description" content="Login to your Online Hostel Management System account." />

    <!-- [Favicon] icons -->
    <link rel="icon" href="../assets/images/logo.png" type="image/png+svg+xml" />
    <link rel="apple-touch-icon" href="../assets/images/apple-touch-icon.png" />
    <link rel="manifest" href="../assets/images/site.webmanifest" />
    <!-- [Font] Family -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet" />
    <!-- [phosphor Icons] https://phosphoricons.com/ -->
    <link rel="stylesheet" href="../assets/css/plugins/phosphor-icons.css" />
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="../assets/css/plugins/tabler-icons.min.css" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link" />
    <link rel="stylesheet" href="../assets/css/style-preset.css" />
    <!-- [Vite Development Scripts] -->
    <!-- Development script removed for production -->

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <div class="auth-main">
        <div class="auth-wrapper v4">
            <div class="auth-form">
                <div class="card my-2">
                    <div class="row g-0">
                        <div
                            class="bg-brand-color-1 col-md-4 col-lg-6 d-none d-md-flex d-lg-flex align-items-center justify-content-center">
                            <img src="../assets/images/authentication/lock.png" alt="lock images" class="img-fluid" />
                        </div>
                        <div class="col-md-8 col-lg-6">
                            <div class="card-body">
                                <div class="text-center">
                                    <a href="#"><img width="30px" src="../assets/images/logo.png"
                                            alt="img" /> Online Hostel</a>
                                </div>
                                <h4 class="text-center f-w-500 mt-4 mb-3">Login</h4>
                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        @foreach ($errors->all() as $error)
                                            <div>{{ $error }}</div>
                                        @endforeach
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                    </div>
                                @endif
                                <form action="{{ route('login.submit') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" id="email" placeholder="Email Address"
                                            value="{{ old('email') }}" required />
                                        @error('email')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            id="password" placeholder="Password" required />
                                        @error('password')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="d-flex mt-1 justify-content-between align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input input-primary" type="checkbox"
                                                name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                                            <label class="form-check-label text-muted" for="remember">Remember
                                                me?</label>
                                        </div>
                                        <h6 class="text-secondary f-w-400 mb-0"><a href="#"
                                                class="text-secondary">Forgot Password?</a></h6>
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-primary shadow px-sm-4">Login</button>
                                    </div>
                                </form>
                                <div class="d-flex justify-content-between align-items-end mt-4">
                                    <h6 class="f-w-500 mb-0">Don't have an Account?</h6>
                                    <a href="{{ route('register') }}" class="link-primary">Create Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
    <!-- Required JS -->
    <script src="../assets/js/plugins/popper.min.js"></script>
    <script src="../assets/js/plugins/simplebar.min.js"></script>
    <script src="../assets/js/plugins/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/i18next.min.js"></script>
    <script src="../assets/js/plugins/i18nextHttpBackend.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme.js"></script>
    <script src="../assets/js/multi-lang.js"></script>

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v67327c56f0bb4ef8b305cae61679db8f1769101564043"
        integrity="sha512-rdcWY47ByXd76cbCFzznIcEaCN71jqkWBBqlwhF1SY7KubdLKZiEGeP7AyieKZlGP9hbY/MhGrwXzJC/HulNyg=="
        data-cf-beacon='{"version":"2024.11.0","token":"a6117f2172474edeb039d2a90d541d53","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
        crossorigin="anonymous"></script>
</body>
<!-- [Body] end -->

</html>
