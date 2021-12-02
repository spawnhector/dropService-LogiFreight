<h1 class="display-3 mb-4 mt-6">Recent Activity</h1>
<div class="timeline timeline-one mt-4">
    @if ($activity)
        @foreach ($activity as $item)
            <div class="timeline-item text-left m-2">
                <div class="card border-light shadow-inset p-3">
                    <div class="card-body bg-primary shadow-soft rounded border border-light p-3"><span class="text-gray">Year 2019</span>
                        <h3 class="h4 my-2">{{$item['name']}}</h3>
                        <p>{{$item['activity']}}.</p>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
