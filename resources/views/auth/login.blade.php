<x-main-layout>
    <div class="background-image-login">
        <div class="container-fluid pt-4 d-md-block d-flex justify-content-center">
            <img class="logo-sekolah" src="/assets/cropped-Logo-SMA-Unggulan-RUSHD-05-1 1.png" alt="" />
        </div>
        <div class="container">
            <div class="row justify-content-lg-start justify-content-md-center">
                <div class="col-lg-4 col-md-8">
                    <div class="form-container-orange p-5 rounded mt-5">
                        <h2 class="text-white text-center poppins-medium mt-3">
                            Sign In
                        </h2>
                        <p class="poppins-extralight text-center text-white psection">
                            Let’s build something greate
                        </p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label poppins-light text-white form-text-14">Email
                                    address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="Enter email"
                                    required autofocus/>
                            </div>
                            <div class="mb-3">
                                <label for="password"
                                    class="form-label poppins-light text-white form-text-14">Password</label>
                                <div class="input-group" id="show_hide_password">
                                    <input class="form-control" type="password" placeholder="Password" id="password"
                                        name="password" required />
                                    <button class="btn btn-light" type="button">
                                        <i class="fa fa-eye-slash text-dark" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 poppins-semibold">
                                Login
                            </button>
                        </form>
                        <div class="d-flex justify-content-end mt-2">
                            <a href=""
                                class="text-white poppins-extralight form-text-14 link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">Forgot
                                Password</a>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <p class="poppins-light">
                                Don’t have an account? &nbsp;
                            </p>
                            <a href="{{ route('register') }}"
                                class="text-white poppins-light link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                                Sign Up</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 d-none d-lg-block">
                    <div class="position-relative top-50 start-50 translate-middle">
                        <h3 class="text-black noto-sans-bold">
                            SMA Unggulan RUSHD
                        </h3>
                        <h2 class="text-black koh-santepheap-bold">
                            School of Future Innovative Leader
                        </h2>
                        <br />
                        <p class="text-black noto-sans-regular">
                            Kami memiliki concern dalam mempersiapkan para
                            pemimpin masa depan yang profesional dan dapat
                            bersaing pada revolusi industri 4.0 dan society
                            5.0
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-main-layout>
