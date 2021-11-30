<div>
    <!-- Hero -->
    <div class="section section-header pb-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card bg-primary shadow-soft border-light px-4 py-1 mb-6">
                    <div class="card-body text-center text-md-left">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h2 class="mb-3">Become one of us</h2>
                                <p class="mb-4">Do you want to join our team and work remotely from
                                    anywhere you'd like? We can’t wait to hear from you!</p>
                                <div class="ml-4" style="display:flex;">
                                    <div>
                                        <x-signupmodal>
                                            <x-slot name="modal_nm">
                                                signup
                                            </x-slot>
                                            <x-slot name="button">
                                                <span class="mr-1">
                                                    <i class="fas fa-shipping-fast"></i>
                                                </span> Start Shipping Today
                                            </x-slot>
                                            <x-slot name="cardBody">
                                                @livewire('index.signup')
                                            </x-slot>
                                        </x-signupmodal>
                                    </div>
                                    <div class="p-2">

                                        Or Continue By 
                                    </div>
                                    <div>
                                        <x-signupmodal>
                                            <x-slot name="modal_nm">
                                                signin
                                            </x-slot>
                                            <x-slot name="modalHead">
                                                <h2 class="h4">Sign in to our platform</h2>
                                                <span>Login here using your username and password</span>
                                            </x-slot>
                                            <x-slot name="button">
                                                <span class="mr-2">
                                                    <span class="fas fa-sign-in-alt"></span>
                                                </span> Sign In 
                                            </x-slot>
                                            <x-slot name="cardBody">
                                                @livewire('index.signin')
                                            </x-slot>
                                        </x-signupmodal>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mt-4 mt-md-0 text-md-right">
                                <div class="ml-6">
                                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                    <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_g3uhxl3c.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay></lottie-player>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section -->
    <section class="section section-lg pt-0">
        <div class="container">
            <div class="row align-items-center justify-content-around">
                <div class="col-md-6 col-xl-6 mb-5">
                    <div class="card bg-primary shadow-soft border-light organic-radius p-3">
                        <img class="organic-radius img-fluid" src="{{asset('img/about-us-1.jpg')}}"
                            alt="modern desk">
                    </div>
                </div>
                <div class="col-md-6 col-xl-5 text-center text-md-left">
                    <h2 class="h1 mb-4">Ship with us, Delivered Anything.</h2>
                    <p class="lead">Themesberg is an experienced and passionate group of designers,
                        developers, project managers, writers and artists. Every client we work with becomes a part
                        of the team. Together we face the challenges and celebrate the victories.</p>
                    <p class="lead">Our small team is active in the creative community, endlessly
                        interested in what’s next, and generally pleasant to be around.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of section -->
    <!-- Section -->
    <section class="section section-lg pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-4 col-lg-4 text-center">
                    <!-- Visit Box -->
                    <div class="icon-box mb-4">
                        <div class="icon icon-shape shadow-soft border border-light rounded-circle mb-4">
                            <span class="far fa-smile-beam"></span>
                        </div>
                        <h3 class="h5">Our Members</h3>
                        <span class="counter display-3 text-gray d-block">500</span>
                    </div>
                    <!-- End of Visit Box -->
                </div>
                <div class="col-12 col-sm-4 col-lg-4 text-center">
                    <!-- Call Box -->
                    <div class="icon-box mb-4">
                        <div class="icon icon-shape shadow-soft border border-light rounded-circle mb-4">
                            <span class="far fa-eye"></span>
                        </div>
                        <h3 class="h5">Shipped Packages</h3>
                        <span class="counter display-3 text-gray d-block">2400</span>
                    </div>
                    <!-- End of Call Box -->
                </div>
                <div class="col-12 col-sm-4 col-lg-4 text-center">
                    <!-- Email Box -->
                    <div class="icon-box mb-4">
                        <div class="icon icon-shape shadow-soft border border-light rounded-circle mb-4">
                            <span class="fas fa-globe-europe"></span>
                        </div>
                        <h3 class="h5">Countries Shipped To</h3>
                        <span class="counter display-3 text-gray d-block">80</span>
                    </div>
                    <!-- End of Email Box -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of section -->
    <!-- Section -->
    <section class="section section-lg pt-0">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <h2 class="h1">Our Team</h2>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Profile Card -->
                    <div class="card bg-primary shadow-soft border-light text-center py-4 mb-5">
                        <div
                            class="profile-image shadow-inset border border-light bg-primary rounded-circle p-3 mx-auto">
                            <img src="{{asset('img/team/profile-picture-1.jpg')}}"
                                class="card-img-top shadow-soft p-2 border border-light rounded-circle"
                                alt="Neil Avatar">
                        </div>
                        <div class="card-body">
                            <h3 class="h5 mb-2">Neil Sims</h3>
                            <span class="h6 font-weight-normal text-gray mb-3">Co-Founder Themesberg</span>
                            <ul class="list-unstyled d-flex justify-content-center my-3">
                                <li>
                                    <a href="#" target="_blank" aria-label="facebook social link"
                                        class="icon icon-xs icon-facebook mr-3">
                                        <span class="fab fa-facebook-f"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" aria-label="twitter social link"
                                        class="icon icon-xs icon-twitter mr-3">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" aria-label="slack social link"
                                        class="icon icon-xs icon-slack mr-3">
                                        <span class="fab fa-slack-hash"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" aria-label="dribbble social link"
                                        class="icon icon-xs icon-dribbble mr-3">
                                        <span class="fab fa-dribbble"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End of Profile Card -->
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Profile Card -->
                    <div class="card bg-primary shadow-soft border-light text-center py-4 mb-5">
                        <div
                            class="profile-image shadow-inset border border-light bg-primary rounded-circle p-3 mx-auto">
                            <img src="{{asset('img/team/profile-picture-3.jpg')}}"
                                class="card-img-top shadow-soft p-2 border border-light rounded-circle"
                                alt="Bonnie Avatar">
                        </div>
                        <div class="card-body">
                            <h3 class="h5 mb-2">Bonnie Green</h3>
                            <span class="h6 font-weight-normal text-gray mb-3">Marketing Specialist</span>
                            <ul class="list-unstyled d-flex justify-content-center my-3">
                                <li>
                                    <a href="#" target="_blank" aria-label="facebook social link"
                                        class="icon icon-xs icon-facebook mr-3">
                                        <span class="fab fa-facebook-f"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" aria-label="twitter social link"
                                        class="icon icon-xs icon-twitter mr-3">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" aria-label="slack social link"
                                        class="icon icon-xs icon-slack mr-3">
                                        <span class="fab fa-slack-hash"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" aria-label="dribbble social link"
                                        class="icon icon-xs icon-dribbble mr-3">
                                        <span class="fab fa-dribbble"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End of Profile Card -->
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Profile Card -->
                    <div class="card bg-primary shadow-soft border-light text-center py-4 mb-5">
                        <div
                            class="profile-image shadow-inset border border-light bg-primary rounded-circle p-3 mx-auto">
                            <img src="{{asset('img/team/profile-picture-2.jpg')}}"
                                class="card-img-top shadow-soft p-2 border border-light rounded-circle"
                                alt="Christopher avatar">
                        </div>
                        <div class="card-body">
                            <h3 class="h5 mb-2">Christopher Wood</h3>
                            <span class="h6 font-weight-normal text-gray mb-3">Web Designer</span>
                            <ul class="list-unstyled d-flex justify-content-center my-3">
                                <li>
                                    <a href="#" target="_blank" aria-label="facebook social link"
                                        class="icon icon-xs icon-facebook mr-3">
                                        <span class="fab fa-facebook-f"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" aria-label="twitter social link"
                                        class="icon icon-xs icon-twitter mr-3">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" aria-label="slack social link"
                                        class="icon icon-xs icon-slack mr-3">
                                        <span class="fab fa-slack-hash"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" aria-label="dribbble social link"
                                        class="icon icon-xs icon-dribbble mr-3">
                                        <span class="fab fa-dribbble"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End of Profile Card -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of section -->
</div>
