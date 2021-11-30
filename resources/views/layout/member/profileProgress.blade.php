@if (!$completeProgress)

<div class="section section-header pb-4">
    <div class="container">
        <div class="progress-wrapper  justify-content-center">
            <div class="progress-info info-xl">
                <div class="progress-label"><span class="text-dark">Complete Profile Progress To Start Shippping.</span></div>
                <div class="progress-percentage"><span>{{$progress}}%</span></div>
            </div>
            <div class="progress progress-lg">
                <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="{{$progress}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$progress}}%; animation: 3s ease 0s 1 normal none running animate-positive; opacity: 1;"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
                <ul class="list-group list-group-transparent list-group-flush list-group-borderless shadow-soft rounded border border-light mb-0">
                    <li class="list-group-item py-4">
                        <div class="media">
                            <span class="icon icon-xs mr-3 d-none d-xl-inline lh-200">
                                <span class="fas fa-globe"></span>
                            </span>
                            <div class="media-body d-block">
                                <span class="h5">Full Name:
                                    @if ($member['name'] != null)
                                        <i class="fa fa-check" style=""></i>
                                    @endif
                                    @if ($edit_nm)
                                        <button wire:click='save("name")' class="btn btn-icon-only btn-pill btn-primary float-right" type="button" aria-label="up button" title="up button">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                        </button>
                                    @else
                                        <button wire:click='edit("name")' class="btn btn-icon-only btn-pill btn-primary float-right" type="button" aria-label="up button" title="up button">
                                            <i class="far fa-edit"></i>
                                        </button>
                                    @endif
                                </span>
                                <div class="text-gray mt-2">
                                    @if ($edit_nm)
                                        <div class="form-group mt-4">
                                            <input wire:model='nm' type="text" class="form-control" placeholder="">
                                        </div>
                                    @else
                                        @if ($member['name'] != null)
                                            <div class="">
                                                {{$member['name']}}
                                            </div>
                                        @else
                                            Add Your Full Name
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item py-4">
                        <div class="media">
                            <span class="icon icon-xs mr-3 d-none d-xl-inline lh-200">
                                <span class="fas fa-birthday-cake"></span>
                            </span>
                            <div class="media-body d-block">
                                <span class="h5">Birthday:
                                    @if ($member['dob'] != null)
                                        <i class="fa fa-check" style=""></i>
                                    @endif
                                    @if ($edit_dob)
                                        <button wire:click='save("dob")' class="btn btn-icon-only btn-pill btn-primary float-right" type="button" aria-label="up button" title="up button">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                        </button>
                                    @else
                                        <button wire:click='edit("dob")' class="btn btn-icon-only btn-pill btn-primary float-right" type="button" aria-label="up button" title="up button">
                                            <i class="far fa-edit"></i>
                                        </button>
                                    @endif
                                </span>
                                <div class="text-gray mt-2">
                                    @if ($edit_dob)
                                        <div class="form-group mt-4">
                                            <input wire:model='dob' type="date" class="form-control" placeholder="">
                                        </div>
                                    @else
                                        @if ($member['dob'] != null)
                                            <div class="">
                                                {{$member['dob']}}
                                            </div>
                                        @else
                                            Add Your Date Of Birth
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item py-4">
                        <div class="media">
                            <span class="icon icon-xs mr-3 d-none d-xl-inline lh-200">
                                <span class="fas fa-briefcase"></span>
                            </span>
                            <div class="media-body d-block">
                                <span class="h5">Organization:
                                    @if ($member['organization'] != null)
                                        <i class="fa fa-check" style=""></i>
                                    @else
                                        <span class="badge badge-secondary text-uppercase" style="padding-bottom:1px;">optional</span>
                                    @endif
                                    @if ($edit_org)
                                        <button wire:click='save("org")' class="btn btn-icon-only btn-pill btn-primary float-right" type="button" aria-label="up button" title="up button">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                        </button>
                                    @else
                                        <button wire:click='edit("org")' class="btn btn-icon-only btn-pill btn-primary float-right" type="button" aria-label="up button" title="up button">
                                            <i class="far fa-edit"></i>
                                        </button>
                                    @endif
                                </span>
                                <div class="text-gray mt-2">
                                    @if ($edit_org)
                                        <div class="form-group mt-4">
                                            <input wire:model='org' type="text" class="form-control" placeholder="">
                                        </div>
                                    @else
                                        @if ($member['organization'] != null)
                                            <div class="">
                                                {{$member['organization']}}
                                            </div>
                                        @else
                                            Add Your Organization
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
                <ul class="list-group list-group-transparent list-group-flush shadow-soft rounded border border-light mb-0">
                    <li class="list-group-item py-4">
                        <div class="media">
                            <span class="icon icon-xs mr-3 d-none d-xl-inline lh-200">
                                <span class="far fa-paper-plane"></span>
                            </span>
                            <div class="media-body d-block">
                                <span class="h5">Email:
                                    @if ($member['email_verified_at'] != null)
                                        <i class="fa fa-check" style=""></i>
                                    @else
                                        <button class="btn btn-pill btn-primary" type="button" style="height: 26px;padding: 6px;padding-top: 3px;width: 98px;color: blue;font-size: 12px;margin-top: -6px;">Verify Email</button>
                                        {{-- <span class="badge badge-secondary text-uppercase" style="padding-bottom:1px;">verify email</span> --}}
                                    @endif
                                    @if ($edit_email)
                                        <button wire:click='save("email")' class="btn btn-icon-only btn-pill btn-primary float-right" type="button" aria-label="up button" title="up button">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                        </button>
                                    @else
                                        <button wire:click='edit("email")' class="btn btn-icon-only btn-pill btn-primary float-right" type="button" aria-label="up button" title="up button">
                                            <i class="far fa-edit"></i>
                                        </button>
                                    @endif
                                </span>
                                <div class="text-gray mt-2">
                                    @if ($edit_email)
                                        <div class="form-group mt-4">
                                            <input wire:model='email' type="email" class="form-control" placeholder="">
                                        </div>
                                    @else
                                        @if ($member['email'] != null)
                                            <div class="">
                                                {{$member['email']}}
                                            </div>
                                        @else
                                            Add Your Email
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item py-4">
                        <div class="media">
                            <span class="icon icon-xs mr-3 d-none d-xl-inline lh-200">
                                <span class="fas fa-mobile-alt"></span>
                            </span>
                            <div class="media-body d-block">
                                <span class="h5">Phone number:
                                    @if ($member['phone'] != null)
                                        <i class="fa fa-check" style=""></i>
                                    @endif
                                    @if ($edit_number)
                                        <button wire:click='save("number")' class="btn btn-icon-only btn-pill btn-primary float-right" type="button" aria-label="up button" title="up button">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                        </button>
                                    @else
                                        <button wire:click='edit("number")' class="btn btn-icon-only btn-pill btn-primary float-right" type="button" aria-label="up button" title="up button">
                                            <i class="far fa-edit"></i>
                                        </button>
                                    @endif
                                </span>
                                <div class="text-gray mt-2">
                                    @if ($edit_number)
                                        <div class="form-group mt-4">
                                            <input wire:model='number' type="number" class="form-control" placeholder="">
                                        </div>
                                    @else
                                        @if ($member['phone'] != null)
                                            <div class="">
                                                {{$member['phone']}}
                                            </div>
                                        @else
                                            Add Your Phone Number
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item py-4">
                        <div class="media">
                            <span class="icon icon-xs mr-3 d-none d-xl-inline lh-200">
                                <span class="fas fa-map-pin"></span>
                            </span>
                            <div class="media-body d-block">
                                <span class="h5">Address:
                                    @if ($member['country'] != null)
                                        <i class="fa fa-check" style=""></i>
                                    @endif
                                    <x-modal>
                                        <x-slot name="modal_nm">
                                            modal2
                                        </x-slot>
                                        <x-slot name="button">
                                            <i class="far fa-edit"></i>
                                        </x-slot>
                                        <x-slot name="btn_class">
                                            btn btn-icon-only btn-pill btn-primary float-right
                                        </x-slot>
                                        <x-slot name="head">
                                            Update Your Address
                                        </x-slot>
                                        <x-slot name="cardBody">
                                            @livewire('member.setaddress')
                                        </x-slot>
                                    </x-modal>
                                </span>
                                <div class="text-gray mt-2">
                                    @if ($member['country'] != null)
                                        <div class="">
                                            {{$member['city']}},{{$member['country']}},{{$member['postal']}}
                                        </div>
                                    @else
                                        Add Your Current Address
                                    @endif
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-4">
                <ul class="list-group list-group-transparent list-group-flush list-group-borderless shadow-soft rounded border border-light mb-0">
                    <li class="list-group-item py-4">
                        <div class="media">
                            <span class="icon icon-xs mr-3 d-none d-xl-inline lh-200">
                                <span class="fas fa-globe-europe"></span>
                            </span>
                            <div class="media-body d-block">
                                <span class="h5">Tax Registration Number:
                                    @if ($member['trn'] != null)
                                        <i class="fa fa-check" style=""></i>
                                    @endif
                                    @if ($edit_trn)
                                        <button wire:click='save("trn")' class="btn btn-icon-only btn-pill btn-primary float-right" type="button" aria-label="up button" title="up button">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                        </button>
                                    @else
                                        <button wire:click='edit("trn")' class="btn btn-icon-only btn-pill btn-primary float-right" type="button" aria-label="up button" title="up button">
                                            <i class="far fa-edit"></i>
                                        </button>
                                    @endif
                                </span>
                                <div class="text-gray mt-2">
                                    @if ($edit_trn)
                                        <div class="form-group mt-4">
                                            <input wire:model='trn' type="number" class="form-control" placeholder="">
                                        </div>
                                    @else
                                        @if ($member['trn'] != null)
                                            <div class="">
                                                {{$member['trn']}}
                                            </div>
                                        @else
                                            Add Your TRN Number
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item py-4">
                        <div class="media">
                            <span class="icon icon-xs mr-3 d-none d-xl-inline lh-200">
                                <span class="fas fa-fill-drip"></span>
                            </span>
                            <div class="media-body d-block">
                                <span class="h5">Term and Condition:
                                </span>
                                <div class="text-gray mt-2">
                                    <div class="form-check">
                                        @if ($member['t_c'] != null)
                                            <span>Agreed</span>
                                            <i class="fa fa-check" style=""></i>
                                        @else
                                            <input wire:model='t_c' wire:click='save("t_c")' class="form-check-input" type="checkbox" value="" id="defaultCheck1"> 
                                            <label class="form-check-label" for="defaultCheck1">I agree to the <a href="#">terms and conditions</a></label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item py-4">
                        <div class="media">
                            <span class="icon icon-xs mr-3 d-none d-xl-inline lh-200">
                                <span class="fas fa-code-branch"></span>
                            </span>
                            <div class="media-body d-block">
                                <span class="h5">Privacy and Policy:
                                </span>
                                <div class="text-gray mt-2">
                                    <div class="form-check">
                                        @if ($member['p_p'] != null)
                                            <span>Agreed</span>
                                            <i class="fa fa-check" style=""></i>
                                        @else
                                            <input wire:model='p_p' wire:click='save("p_p")' class="form-check-input" type="checkbox" value="" id="defaultCheck6"> 
                                            <label class="form-check-label" for="defaultCheck6">I agree to the <a href="#">privacy and policies</a></label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endif
