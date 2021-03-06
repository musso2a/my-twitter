<div id="form-container">
    <form method="post" class="mb-4" wire:submit.prevent="createPost">
        @csrf

        <div class="form-group">
            <textarea name="body" id="body" cols="30" rows="3" class="form-control @error('body') is-invalid @enderror" wire:model="body" placeholder="Quoi de neuf ?"></textarea>
            @error('body')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Tweeter</button>

    </form>
</div>

<style scoped>
    #form-container {
        color: whitesmoke;
        background-color: #121212;
        border: none;
    }
</style>
