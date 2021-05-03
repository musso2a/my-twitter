<div>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
{{--                <img src="..." class="card-img" alt="...">--}}
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->user->name }}</h5>
                    <p class="card-text">{{ $post->body }}</p>
                    <p class="card-text"><small class="text-muted">{{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}} </small></p>
                </div>
            </div>
        </div>
    </div>
</div>
