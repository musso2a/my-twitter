<div id="espace">
    <div class="card mb-3" id="tweet">
        <div class="row no-gutters" id="tweet-container">
            <div class="col-md-4" style="border: none">
                {{--                <img src="..." class="card-img" alt="...">--}}
            </div>
            <div class="col-md-8" style="border: none">
                <div class="card-body" style="border: none">
                    <h5 class="card-title">{{ $post->user->name }}</h5>
                    <p class="card-text">{{ $post->body }}</p>
                    <p class="card-text"><small class="text-muted">{{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}} </small></p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    #tweet {
        width: 540px;
        background-color: #121212;
        color: whitesmoke;
        justify-self: center;
        border: none;
    }
    .card-body {
        border: none;
    }
    #tweet-container {
        border: none;
    }
</style>
