<x-main-layout>
    <x-slot:title>
        Register
    </x-slot:title>
    <div class="background-image-register">
        <div class="container-fluid pt-4 d-md-block d-flex justify-content-center">
            <img class="logo-sekolah" src="/assets/cropped-Logo-SMA-Unggulan-RUSHD-05-1 1.png" alt="" />
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 col-10">
                    <div class="form-container p-sm-5 p-4 rounded mt-5 bg-orange">
                        <h2 class="text-white text-center poppins-medium mt-3">
                            Sign Up
                        </h2>
                        <p class="poppins-extralight text-center text-white psection">
                            Enter details to create your account
                        </p>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label poppins-light text-white form-text-14">Enter
                                    Your
                                    Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name"
                                    name="name" value="{{ old('name') }}" required autofocus />
                                <small class="text-danger my-1 fw-light error-text">
                                    @foreach ($errors->get('name') as $error)
                                        {{ $error }}
                                    @endforeach
                                </small>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label poppins-light text-white form-text-14">Email
                                    address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ old('email') }}" aria-describedby="emailHelp"
                                    placeholder="Enter email" />
                                <small class="text-danger my-1 fw-light error-text">
                                    @foreach ($errors->get('email') as $error)
                                        {{ $error }}
                                    @endforeach
                                </small>
                            </div>
                            <div class="mb-3 row g-3">
                                <div class="col-sm-6">
                                    <label for="password"
                                        class="form-label poppins-light text-white form-text-14">Password</label>
                                    <div class="input-group" id="show_hide_password">
                                        <input class="form-control" type="password" name="password" id="password"
                                            placeholder="Password" required />
                                        <button class="btn btn-light" type="button">
                                            <i class="fa fa-eye-slash text-dark" aria-hidden="true"></i>
                                        </button>
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <label for="password_confirmation"
                                        class="form-label poppins-light text-white form-text-14">
                                        Confirm Password</label>
                                    <div class="input-group" id="show_hide_password">
                                        <input id="password_confirmation" name="password_confirmation"
                                            class="form-control" type="password" placeholder="Confirm Password"
                                            required />
                                        <button class="btn btn-light" type="button">
                                            <i class="fa fa-eye-slash text-dark" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <small class="text-danger my-1 fw-light error-text">
                                    @foreach ($errors->get('password') as $error)
                                        {{ $error }}
                                    @endforeach
                                </small>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 poppins-semibold">
                                Sign Up
                            </button>
                        </form>

                        <div class="d-flex justify-content-center mt-3">
                            <p class="poppins-light">Don’t have an account? &nbsp;</p>
                            <a href="{{ route('login') }}"
                                class="text-white poppins-light link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                                Sign In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
