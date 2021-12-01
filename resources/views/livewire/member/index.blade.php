<div>
    @include('layout.member.profileProgress')
    @if ($completeProgress)
    <!-- Hero -->
        @if ($member_info)
            <div 
                id="Carousel3" class="carousel slide"
                @if ($preAlert)
                    @if ($slide_enable)
                        data-ride="carousel" data-target="Carousel3"
                    @endif
                @endif
            >
                <div class="carousel-inner rounded">
                    <div 
                        @if ($active_screen == 1)
                            class="carousel-item active"
                        @else
                            class="carousel-item"
                        @endif
                    >
                        @include('layout.member.page.first')
                    </div>
                    <div 
                        @if ($active_screen == 2)
                            class="carousel-item active"
                        @else
                            class="carousel-item"
                        @endif
                    >
                        @include('layout.member.page.second')
                    </div>
                    @if ($viewPreAlert)
                        <div 
                            @if ($active_screen == 3)
                                class="carousel-item active"
                            @else
                                class="carousel-item"
                            @endif
                        >
                            @include('layout.member.page.second')
                        </div>
                    @endif
                </div>
            </div>
            @if ($preAlert)
                @if ($slide_enable)
                    <button class="btn btn-icon-only btn-pill btn-facebook carousel-control-prev main-arrow-left" type="button" aria-label="facebook button" title="facebook button">
                        <a class="" href="#Carousel3" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </button>
                    <button class="btn btn-icon-only btn-pill btn-facebook carousel-control-next main-arrow-right" type="button" aria-label="facebook button" title="facebook button">
                        <a class="" href="#Carousel3" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </button>
                @endif
            @endif
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
                    <div class="btn_out">
                        Create Pre-Alert
                    </div>
                </x-slot>
                <x-slot name="btn_class">
                    btn btn-pill btn-facebook ml-3 btn_in flex producthunt-badge
                </x-slot>
                <x-slot name="head">
                    Create Pre-Alert
                </x-slot>
                <x-slot name="cardBody">
                    @livewire('member.createprealert')
                </x-slot>
            </x-modal>
        @else
        Something Went wrong
        @endif
    @endif
</div>
