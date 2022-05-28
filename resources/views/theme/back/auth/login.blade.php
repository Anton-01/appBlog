@extends('theme.back.auth.layout')
@section('titleAuth')
    Login
@endsection
@section('main-content-auth')
    <div class="bg-image" style="background-image: url('{{asset('assets/back/media/photos/photo28@2x.jpg')}}');">
        <div class="row g-0 bg-primary-dark-op">
            <!-- Meta Info Section -->
            <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
                <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
                    <div class="w-100">
                        <a class="link-fx fw-semibold fs-2 text-white" href="{{route('login')}}">
                            Blog <span class="fw-normal">app</span>
                        </a>
                        <p class="text-white-75 me-xl-8 mt-2">
                            Welcome to your amazing blog app. Feel free to login and start managing your blog.
                        </p>
                    </div>
                </div>
                <div class="p-4 p-xl-5 d-xl-flex justify-content-between align-items-center fs-sm">
                    <p class="fw-medium text-white-50 mb-0">
                        <strong>Blog app</strong> &copy; <span data-toggle="year-copy"></span>
                    </p>
                    <ul class="list list-inline mb-0 py-2">
                        <li class="list-inline-item">
                            <a class="text-white-75 fw-medium" href="javascript:void(0)">Legal</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-white-75 fw-medium" href="javascript:void(0)">Contact</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-white-75 fw-medium" href="javascript:void(0)">Terms</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Meta Info Section -->

            <!-- Main Section -->
            <div class="hero-static col-lg-8 d-flex flex-column align-items-center bg-body-light">
                <div class="p-3 w-100 d-lg-none text-center">
                    <a class="link-fx fw-semibold fs-3 text-dark" href="{{route('login')}}">
                        Blog <span class="fw-normal">app</span>
                    </a>
                </div>
                <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
                    <div class="w-100">
                        <!-- Header -->
                        <div class="text-center mb-5">
                            <p class="mb-3">
                                <i class="fa fa-2x fa-circle-notch text-primary-light"></i>
                            </p>
                            <h1 class="fw-bold mb-2">
                                Sign In
                            </h1>
                            <p class="fw-medium text-muted">
                                Welcome, please login or <a href="op_auth_signup3.html">sign up</a> for a new account.
                            </p>
                        </div>
                        <!-- END Header -->
                        @if (session('error'))
                            <div class="row g-0 justify-content-center">
                            <div class="col-md-8 g-0 justify-content-center">
                                <div class="alert alert-light d-flex align-items-center justify-content-between" role="alert">
                                    <div class="flex-grow-1 me-3">
                                        <p class="mb-0">{{ session('error') }}</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <i class="fab fa-fw fa-coffee"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="row g-0 justify-content-center">
                            <div class="col-sm-8 col-xl-4">
                                <form class="js-validation-signin" action="{{route('login')}}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <input type="email" class="form-control form-control-lg form-control-alt py-3 {{ $errors->has('email') ? 'is-invalid' : '' }}" id="login-username" name="email" placeholder="Email">
                                        @error('email')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <input type="password" class="form-control form-control-lg form-control-alt py-3 {{ $errors->has('password') ? 'is-invalid' : '' }}" id="login-password" name="password" placeholder="Password">

                                        @error('password')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div>
                                            <a class="text-muted fs-sm fw-medium d-block d-lg-inline-block mb-1" href="op_auth_reminder3.html">
                                                Forgot Password?
                                            </a>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-lg btn-alt-primary">
                                                <i class="fa fa-fw fa-sign-in-alt me-1 opacity-50"></i> Sign In
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Sign In Form -->
                    </div>
                </div>
                <div class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between fs-sm text-center text-sm-start">
                    <p class="fw-medium text-black-50 py-2 mb-0">
                        <strong>Blog app</strong> &copy; <span data-toggle="year-copy"></span>
                    </p>
                    <ul class="list list-inline py-2 mb-0">
                        <li class="list-inline-item">
                            <a class="text-muted fw-medium" href="javascript:void(0)">Legal</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted fw-medium" href="javascript:void(0)">Contact</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted fw-medium" href="javascript:void(0)">Terms</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Main Section -->
        </div>
    </div>
@endsection