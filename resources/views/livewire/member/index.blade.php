<div>
    @include('layout.member.profileProgress')
    @if ($completeProgress)
    <!-- Hero -->
    @if ($member_info)
    {{-- {{dd($member_info)}} --}}
    <div class="pt-0 mt-7">
        <div class="container">
            <div class="row  flex">
                <div class="col-12 col-lg-6">
                    <div class="item p-3">
                        <div class="card bg-primary shadow-soft border-light">
                            <div class="card-body border-bottom border-light flex">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <span class="h6">
                                            <span type="button" class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{$member_info['success']['temp_address']['country']}} (Air) Address">{{$member_info['success']['temp_address']['country']}} Address</span>:
                                        </span>
                                    </div>
                                    <ul class="list-style-none">
                                        <li>UMI: {{$member_info['success']['umi']}}</li>
                                        <li>{{$member_info['success']['temp_address']['district']}}</li>
                                        <li>{{$member_info['success']['temp_address']['city']}}, {{$member_info['success']['temp_address']['state']}}</li>
                                        <li>{{$member_info['success']['temp_address']['zip']}}</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <span class="h6">
                                            <span type="button" class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pickup Address">Pickup Address</span>:
                                        </span>
                                    </div>
                                    <ul class="list-style-none">
                                        <li>{{$member_info['pickup_address']['district']}}</li>
                                        <li>{{$member_info['pickup_address']['city']}}, {{$member_info['pickup_address']['state']}}</li>
                                        <li>{{$member_info['pickup_address']['zip']}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <table class="table shadow-soft rounded">
                            <tbody>
                                <tr>
                                    <th class="border-0" scope="col" id="class">Class</th>
                                    <th class="border-0" scope="col" id="teacher">Teacher</th>
                                    <th class="border-0" scope="col" id="males">Males</th>
                                    <th class="border-0" scope="col" id="females">Females</th>
                                </tr>
                                <tr>
                                    <th scope="row" id="firstyear" rowspan="2">First Year</th>
                                    <th scope="row" id="Bolter" headers="firstyear teacher">D. Bolter</th>
                                    <td headers="firstyear Bolter males">5</td>
                                    <td headers="firstyear Bolter females">4</td>
                                </tr>
                                <tr>
                                    <th scope="row" id="Cheetham" headers="firstyear teacher">A. Cheetham</th>
                                    <td headers="firstyear Cheetham males">7</td>
                                    <td headers="firstyear Cheetham females">9</td>
                                </tr>
                                <tr>
                                    <th scope="row" id="secondyear" rowspan="3">Second Year</th>
                                    <th scope="row" id="Lam" headers="secondyear teacher">M. Lam</th>
                                    <td headers="secondyear Lam males">3</td>
                                    <td headers="secondyear Lam females">9</td>
                                </tr>
                                <tr>
                                    <th scope="row" id="Crossy" headers="secondyear teacher">S. Crossy</th>
                                    <td headers="secondyear Crossy males">4</td>
                                    <td headers="secondyear Crossy females">3</td>
                                </tr>
                                <tr>
                                    <th scope="row" id="Forsyth" headers="secondyear teacher">A. Forsyth</th>
                                    <td headers="secondyear Forsyth males">6</td>
                                    <td headers="secondyear Forsyth females">9</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card bg-primary shadow-inset border-light vh-75 mt-4">
                        <div class="card-body p-5">
                            @if ($preAlert)
                            <div id="Carousel2" class="carousel slide shadow-soft border border-light rounded" data-ride="carousel">
                                <div class="carousel-inner rounded">
                                    @foreach ($preAlert as $item)
                                        {{dd($item)}}   
                                        <div class="carousel-item">
                                            <div class="card bg-primary shadow-soft border-light">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-sm-5">
                                                        <div class="card-header text-center pb-0">
                                                            <h3 class="mb-0">{{$item['package_nm']}}</h3><span class="d-block my-3"><span class="display-2 font-weight-bold"><span class="align-baseline font-medium">$</span>{{$item['invoice_total']}} </span></span><button type="button" class="btn btn-sm btn-primary btn-block">view</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <div class="card-body pb-0">
                                                            <ul class="list-group list-group-flush price-list mb-4">
                                                                <li class="list-group-item border-primary pb-1"><span class="fas fa-headset"></span>{{$item['package_nm']}}</li>
                                                                <li class="list-group-item border-primary pb-1"><span class="far fa-hdd"></span>{{$item['package_nm']}}</li>
                                                                <li class="list-group-item border-primary pb-1"><span class="far fa-paper-plane"></span>{{$item['package_nm']}}</li>
                                                                <li class="list-group-item border-primary pb-1"><span class="far fa-envelope"></span>{{$item['package_nm']}}</li>
                                                                <li class="list-group-item border-0"><span class="fas fa-users"></span>{{$item['package_nm']}}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#Carousel2" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#Carousel2" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            @else
                            <div class="flex">
                                <h3 class="h4 card-title position-relative top-2">No Pre-Alert Created</h3>
                                <x-modal>
                                    <x-slot name="modal_nm">
                                        createPreAlert
                                    </x-slot>
                                    <x-slot name="modal_body_class">
                                        modal-dialog modal-dialog-centered modal-lg
                                    </x-slot>
                                    <x-slot name="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 489 489" width="30" height="25">
                                            <g>
                                                <g fill="#02afdf">
                                                    <path d="M409.75 285.4V141.8c0-2.2-.5-4.1-1.4-5.6L356.65 6.3c-1-3.1-5.2-6.3-9.4-6.3H62.65c-4.2 0-7.3 2.1-9.4 6.3L1.45 136.2c-.9 1.6-1.4 3.5-1.4 5.6v252.3c0 6.3 4.2 10.4 10.4 10.4h273.8c8.8 48 50.9 84.5 101.5 84.5 57 0 103.2-46.2 103.2-103.2.1-48.8-33.7-89.6-79.2-100.4zM254.45 19.9h85.5l44.8 111.5h-130.3V19.9zm-78.2 0h58.4v111.5h-58.4V19.9zm0 132.4h58.4V220h-58.4v-67.7zM69.95 19.9h84.4v111.5H26.15l43.8-111.5zm212.6 363.8H20.95V152.3h133.4v78.2c0 6.3 4.2 10.4 10.4 10.4h79.2c6.3 0 10.4-5.2 10.4-10.4v-78.2h134.5v130.4c-1 0-2.1-.1-3.1-.1-56.3 0-102.1 45.1-103.2 101.1zm103.3 83.6c-45 0-81.5-36.5-81.5-81.5s36.5-81.5 81.5-81.5 81.5 36.5 81.5 81.5-36.5 81.5-81.5 81.5z" />
                                                    <path d="M396.25 337.8h-20.9v37.6h-38.5v20.8h38.5v38.6h20.9v-38.6h38.5v-20.8h-38.5z" />
                                                </g>
                                            </g>
                                        </svg>
                                        Create Pre-Alert
                                    </x-slot>
                                    <x-slot name="btn_class">
                                        btn btn-pill btn-facebook ml-3
                                    </x-slot>
                                    <x-slot name="head">
                                        Create Pre-Alert
                                    </x-slot>
                                    <x-slot name="cardBody">
                                        @livewire('member.createprealert')
                                    </x-slot>
                                </x-modal>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    Something Went wrong
    @endif
    @endif
</div>
