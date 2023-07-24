<div class="mt-5 mb-5">
    <form wire:submit.prevent="updateAlbum">
        @csrf
        <div class="mb-3">
          <label  class="form-label">Titolo</label>
          <input type="text" class="form-control" wire:model.lazy="title">
          @error('title') 
            <span class="error">{{$message}}</span> 
          @enderror
        </div>
        <div class="mb-3">
            <label  class="form-label">Artista/Band</label>
            <input type="text" class="form-control" wire:model.lazy="artist">
            @error('artist') 
              <span class="error">{{$message}}</span> 
            @enderror
        </div>
        <div class="mb-3">
            <label  class="form-label">Data di Pubblicazione</label>
            <input type="text" class="form-control" wire:model.lazy="release">
            @error('release') 
              <span class="error">{{$message}}</span> 
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

