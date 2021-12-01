<div class="pt-0 mt-7">
    <div class="container">
        <div class="row">
            <div class="flex">
                <div class='m-2'>
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
                </div>
            </div>
            <table class="table shadow-soft rounded mt-4">
                <tbody>
                    <tr>
                        <th class="border-0" scope="col" id="class">Courier</th>
                        <th class="border-0" scope="col" id="teacher">Alert Nickname</th>
                        <th class="border-0" scope="col"></th>
                        <th class="border-0" scope="col"></th>
                        <th class="border-0" scope="col"></th>
                        {{-- {{-- <th class="border-0" scope="col" id="males">Males</th> --}}
                    </tr>
                    @foreach ($preAlert as $item1)
                        <tr>
                            <td>{{$item1['courier']}}</td>
                            <td>{{$item1['package_nm']}}</td>
                            <td>view</td>
                            <td>update</td>
                            <td>delete</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
