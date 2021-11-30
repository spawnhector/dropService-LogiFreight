<div>
        <div class="form-group">
            <label for="exampleInputIcon4">Your email</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </span>
                </div>
                <input wire:model='email' class="form-control" id="exampleInputIcon4" placeholder="example@company.com" type="text" aria-label="email adress">
            </div>
            @error('email')
                <div class="alert alert-danger shadow-soft" role="alert">
                    <span class="alert-inner--text">
                        {{$message}}
                    </span>
                </div>
            @enderror
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="exampleInputPassword7">Password</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <span class="fas fa-unlock-alt"></span>
                        </span>
                    </div>
                    <input wire:model='password' class="form-control" id="exampleInputPassword7" placeholder="Password" type="password" aria-label="Password">
                </div>
                @error('password')
                    <div class="alert alert-danger shadow-soft" role="alert">
                        <span class="alert-inner--text">
                            {{$message}}
                        </span>
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleConfirmPassword7">Confirm Password</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <span class="fas fa-unlock-alt"></span>
                        </span>
                    </div>
                    <input wire:model='c_password' class="form-control" id="exampleConfirmPassword7" placeholder="Confirm password" type="password" aria-label="Password">
                </div>
                @error('c_password')
                    <div class="alert alert-danger shadow-soft" role="alert">
                        <span class="alert-inner--text">
                            {{$message}}
                        </span>
                    </div>
                @enderror
            </div>
            {{-- <div class="form-check mb-2">
                <input wire:model='confirm' class="form-check-input" type="checkbox" value="" id="defaultCheck6">
                <label class="form-check-label" for="defaultCheck6">I agree to the 
                    <a href="#">terms and conditions</a>
                </label>
            </div> --}}
            @error('confirm')
                <div class="alert alert-danger shadow-soft" role="alert">
                    <span class="alert-inner--text">
                        {{$message}}
                    </span>
                </div>
            @enderror
        </div>
        <button wire:click='signUp()' type="submit" class="btn btn-block btn-primary">Sign Up</button>
   
    <div class="mt-3 mb-4 text-center"><span class="font-weight-normal">or</span></div>
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
        <span class="font-weight-normal">Already have an account? 
            <a href="#" class="font-weight-bold">Login here</a>
        </span>
    </div> --}}
</div>
