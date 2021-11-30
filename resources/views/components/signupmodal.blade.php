<div>
    @if (isset($customButton))
        {{$customButton}}
    @else
        <button class="btn btn-pill btn-facebook"  data-toggle="modal" data-target="#{{$modal_nm}}" type="button">
            {{$button}}
        </button>
    @endif
    <div class="modal fade" id="{{$modal_nm}}" tabindex="-1" role="dialog" aria-labelledby="{{$modal_nm}}"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card bg-primary shadow-soft border-light p-4"><button type="button" class="close ml-auto"
                            data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="card-header text-center pb-0">
                            @if (isset($modalHead))
                                {{$modalHead}}
                            @else
                                <h2 class="mb-0 h5">Create Account</h2>
                            @endif
                        </div>
                        <div class="card-body">
                            {{$cardBody}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
