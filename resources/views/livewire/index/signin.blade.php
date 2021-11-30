<div>
    <div class="form-group">
        <label for="exampleInputIcon3">Your email</label>
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </span>
            </div>
            <input wire:model='email' class="form-control" id="exampleInputIcon3" placeholder="example@company.com" type="text" aria-label="email adress">
        </div>
    </div>
    <div class="form-group">
        <div class="form-group">
            <label for="exampleInputPassword6">Password</label>
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fas fa-unlock-alt"></span>
                    </span>
                </div>
                <input wire:model='password' class="form-control" id="exampleInputPassword6" placeholder="Password" type="password" aria-label="Password" required="">
            </div>
        </div>
        <div class="d-block d-sm-flex justify-content-between align-items-center mb-4">
            <div class="form-check mb-2 mb-sm-0">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck5"> 
                <label class="form-check-label" for="defaultCheck5">Remember me</label>
            </div>
            <div>
                <a href="#" class="small text-right">Lost password?</a>
            </div>
        </div>
    </div>
    <button wire:click="signin()" type="submit" class="btn btn-block btn-primary">Sign in</button>
    <div class="mt-3 mb-4 text-center">
        <span class="font-weight-normal">or login with</span>
    </div>
    <div class="btn-wrapper my-4 text-center">
        <button class="btn btn-icon-only btn-pill btn-outline-light text-facebook mr-2" type="button" aria-label="facebook button" title="facebook button">
            <span aria-hidden="true" class="fab fa-facebook-f"></span>
        </button> 
        <button class="btn btn-icon-only btn-pill btn-outline-light text-twitter mr-2" type="button" aria-label="twitter button" title="twitter button">
            <span aria-hidden="true" class="fab fa-twitter"></span>
        </button> 
        <button class="btn btn-icon-only btn-pill btn-outline-light text-facebook" type="button" aria-label="github button" title="github button">
            <span aria-hidden="true" class="fab fa-github"></span>
        </button>
    </div>
    {{-- <div class="d-block d-sm-flex justify-content-center align-items-center mt-4">
        <span class="font-weight-normal">Not registered? 
            
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
            <a href="#" class="font-weight-bold">Create account</a>
        </span>
    </div> --}}
</div>
