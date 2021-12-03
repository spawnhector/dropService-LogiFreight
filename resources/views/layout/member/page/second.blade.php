<div class="pt-0 mt-7">
    <div class="container">
        <div class="row justify-content-center">
            <div class="flex">
                {{-- <div class='m-2'>
                    <div class="card bg-primary shadow-inset border-light">
                        <div class="card-body p-5">
                            <h3 class="h4 card-title mb-3">We partnered up with Google</h3><span class="card-text small"><span class="far fa-calendar-alt mr-2"></span>15 March 2020</span>
                            <p class="card-text mt-4">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex align-items-center"><a href="#" class="btn btn-primary btn-sm mr-3">Learn More</a> <a href="#" class="small"><span class="far fa-comments mr-2"></span>21</a></div>
                        </div>
                    </div>
                </div>
                <div class='m-2'>
                    <div class="card bg-primary shadow-inset border-light">
                        <div class="card-body p-5">
                            <h3 class="h4 card-title mb-3">We partnered up with Google</h3><span class="card-text small"><span class="far fa-calendar-alt mr-2"></span>15 March 2020</span>
                            <p class="card-text mt-4">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex align-items-center"><a href="#" class="btn btn-primary btn-sm mr-3">Learn More</a> <a href="#" class="small"><span class="far fa-comments mr-2"></span>21</a></div>
                        </div>
                    </div>
                </div> --}}
                <div class="">
                    <div class="col-12">
                        <div class="card bg-primary shadow-soft border-light">
                            <div class="card-body px-5 py-5 text-center text-md-left">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <h2 class="mb-3">Pre-Alert</h2>
                                        <p class="mb-0">If you need any help with our products or services, choose one of the following ways to contact us.</p>
                                    </div>
                                    {{-- <div class="col-12 col-md-6 mt-4 mt-md-0 text-md-right"><a href="#" class="btn btn-primary"><span class="mr-1"><span class="fas fa-headphones"></span> </span>Contact Us</a></div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <table class="table shadow-soft rounded mt-4">
                <tbody>
                    <tr>
                        <th class="border-0" scope="col" id="class">Courier</th>
                        <th class="border-0" scope="col" id="teacher">Package Name</th>
                        <th class="border-0" scope="col">Shipper</th>
                        <th class="border-0" scope="col">Weight</th>
                        <th class="border-0" scope="col">Content</th>
                        <th class="border-0" scope="col">Status</th>
                        <th class="border-0" scope="col"></th>
                        {{-- {{-- <th class="border-0" scope="col" id="males">Males</th> --}}
                    </tr>
                    @if ($preAlert)
                        @foreach ($preAlert as $item1)
                            <tr>
                                <td>
                                    <span type="button" class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="View this pre-alert">{{$item1['courier']}}</span>
                                </td>
                                <td>{{$item1['package_nm']}}</td>
                                <td>{{$item1['shipper']}}</td>
                                <td>{{$item1['weight']}}</td>
                                <td>{{$item1['content']}}</td>
                                <td>
                                    @if ($item1['status'] == '0')
                                        Pending
                                    @endif
                                    @if ($item1['status'] == '1')
                                        Under Review
                                    @endif
                                    @if ($item1['status'] == '2')
                                        In Transit
                                    @endif
                                </td>
                                <td>
                                    
                                    <x-modal>
                                        <x-slot name="modal_nm">
                                            deletePreAlert
                                        </x-slot>
                                        <x-slot name="modal_body_class">
                                            modal-dialog modal-dialog-centered modal-lg
                                        </x-slot>
                                        <x-slot name="button">
                                            Delete
                                        </x-slot>
                                        <x-slot name="btn_class">
                                            btn btn-primary btn-block
                                        </x-slot>
                                        <x-slot name="head">
                                            delete Pre-Alert
                                        </x-slot>
                                        <x-slot name="cardBody">
                                            {{-- @livewire('member.createprealert') --}}
                                        </x-slot>
                                    </x-modal>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
