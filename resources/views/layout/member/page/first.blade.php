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
                <div class="flex mt-4">
                    <div class="col-12 col-sm-6 col-lg-3 mb-5 mb-lg-0 text-center">
                        <div class="icon icon-shape shadow-soft border border-light rounded-circle mb-4">
                            <i class="fas fa-box-open" style="font-size: 34px"></i>
                        </div>
                        <div class="shadow-soft rounded border border-light py-4">
                            <span class="counter h1 d-block">15</span>
                            <span class="h5">Package</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-5 mb-lg-0 text-center">
                        <div class="icon icon-shape shadow-soft border border-light rounded-circle mb-4">
                            <span class="fas fa-stopwatch"></span>
                        </div>
                        <div class="shadow-soft rounded border border-light py-4">
                            <span class="counter h1 d-block">15</span>
                            <span class="h5">Transit</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-5 mb-lg-0 text-center">
                        <div class="icon icon-shape shadow-soft border border-light rounded-circle mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 489 489" width="40" height="35">
                                <g>
                                    <g fill="#02afdf">
                                        <path d="M409.75 285.4V141.8c0-2.2-.5-4.1-1.4-5.6L356.65 6.3c-1-3.1-5.2-6.3-9.4-6.3H62.65c-4.2 0-7.3 2.1-9.4 6.3L1.45 136.2c-.9 1.6-1.4 3.5-1.4 5.6v252.3c0 6.3 4.2 10.4 10.4 10.4h273.8c8.8 48 50.9 84.5 101.5 84.5 57 0 103.2-46.2 103.2-103.2.1-48.8-33.7-89.6-79.2-100.4zM254.45 19.9h85.5l44.8 111.5h-130.3V19.9zm-78.2 0h58.4v111.5h-58.4V19.9zm0 132.4h58.4V220h-58.4v-67.7zM69.95 19.9h84.4v111.5H26.15l43.8-111.5zm212.6 363.8H20.95V152.3h133.4v78.2c0 6.3 4.2 10.4 10.4 10.4h79.2c6.3 0 10.4-5.2 10.4-10.4v-78.2h134.5v130.4c-1 0-2.1-.1-3.1-.1-56.3 0-102.1 45.1-103.2 101.1zm103.3 83.6c-45 0-81.5-36.5-81.5-81.5s36.5-81.5 81.5-81.5 81.5 36.5 81.5 81.5-36.5 81.5-81.5 81.5z"></path>
                                        <path d="M396.25 337.8h-20.9v37.6h-38.5v20.8h38.5v38.6h20.9v-38.6h38.5v-20.8h-38.5z"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="shadow-soft rounded border border-light py-4">
                            <span class="counter h1 d-block">{{count($preAlert)}}</span>
                            <span class="h5">Pre-Alert</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-5 mb-lg-0 text-center">
                        <div class="icon icon-shape shadow-soft border border-light rounded-circle mb-4">
                            <span class="fas fa-shipping-fast"></span>
                        </div>
                        <div class="shadow-soft rounded border border-light py-4">
                            <span class="counter h1 d-block">15</span>
                            <span class="h5">Delivered</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card bg-primary shadow-inset border-light vh-75 mt-4">
                    <div class="card-body">
                        @if ($preAlert)
                            {{-- <div id="Carousel2" class="carousel slide shadow-soft border border-light rounded" data-ride="carousel" data-target="Carousel2">
                                <div class="carousel-inner rounded">
                                    @php
                                    $count = 1;
                                    @endphp
                                    @foreach ($preAlert as $item)
                                        @if ($count == 1)
                                            @php
                                                $class = 'carousel-item active';
                                            @endphp
                                        @else
                                            @php
                                                $class = 'carousel-item';
                                            @endphp
                                        @endif
                                        <div class="{{$class}}">
                                            <div class="card bg-primary shadow-soft border-light">
                                                <div class="card-header border-bottom text-center">
                                                    <span class="d-block">
                                                        <span class="display-1 font-weight-bold">
                                                            <span class="align-top font-medium">$</span>{{$item['invoice_total']}}
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="card-body ml-4">
                                                    <p>Package Name: {{$item['package_nm']}}</p>
                                                    <div class="flex">
                                                        <ul class="list-unstyled mb-4">
                                                            <li class="list-item pb-2">
                                                                <strong>Track #:</strong> {{$item['track_nm']}}
                                                            </li>
                                                            <li class="list-item pb-2">
                                                                <strong>Courier:</strong> {{$item['courier']}}
                                                            </li>
                                                            <li class="list-item">
                                                                <strong>Shipper:</strong> {{$item['shipper']}}
                                                            </li>
                                                        </ul>
                                                        <ul class="list-unstyled mb-4 ml-4">
                                                            <li class="list-item pb-2">
                                                                <strong>Weight:</strong> {{$item['weight']}}
                                                            </li>
                                                            <li class="list-item pb-2">
                                                                <strong>Content:</strong> {{$item['content']}}
                                                            </li>
                                                            @if ($item['promo'])
                                                            <li class="list-item">
                                                                <strong>Promo:</strong> {{$item['package_nm']}}
                                                            </li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                    <button type="button" class="btn btn-primary btn-block">
                                                        <span class="fas fa-cart-plus mr-3"></span>Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        @php
                                            ++$count;
                                        @endphp
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
                            </div> --}}
                            @include('layout.member.page.firstinnercarousel')
                        @else
                            <div class="flex">
                                <h3 class="h4 card-title position-relative top-2">No Pre-Alert Created</h3>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @include('layout.member.page.firstfoot')
    </div>
</div>