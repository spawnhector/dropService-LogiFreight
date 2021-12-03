<div>
    @if (isset($span))
        <span 
            @if (isset($hidden))
                {{$hidden}}
            @endif 
            @if (isset($style))
                style="{{$style}}"
            @endif
            class="{{$btn_class}}" 
            data-toggle="modal" 
            data-target="#{{$modal_nm}}" 
            type="button"
        >
            {{$button}}
        </span> 
    @else
        <button 
            @if (isset($hidden))
                {{$hidden}}
            @endif 
            @if (isset($style))
                style="{{$style}}"
            @endif
            class="{{$btn_class}}" 
            data-toggle="modal" 
            data-target="#{{$modal_nm}}" 
            type="button"
        >
            {{$button}}
        </button> 
    @endif
    <div 
    class="modal fade" 
    id="{{$modal_nm}}" tabindex="-1" role="dialog" aria-labelledby="{{$modal_nm}}"
        style="display: none;" aria-hidden="true">
        <div 
        
        @if (isset($modal_body_class))
            class="{{$modal_body_class}}" 
        @else
            class="modal-dialog modal-dialog-centered"
        @endif
        role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card bg-primary shadow-soft border-light p-4"><button type="button" class="close ml-auto"
                            data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="card-header text-center pb-0">
                            <h2 class="mb-0 h5">{{$head}}</h2>
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
