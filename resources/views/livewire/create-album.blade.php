<div>
    <form wire:submit.prevent='createAlbum'>
        @csrf
        <div class="mb-3">
          <label class="form-label">Titolo</label>
          <input type="text" class="form-control" wire:model.lazy='title'>
          @error('title') 
            <span class="error">{{$message}}</span>
        @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Artista/Band</label>
            <input type="text" class="form-control" wire:model.lazy='artist'>
            @error('artist') 
              <span class="error">{{$message}}</span>
          @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Genere</label>
            <select class="form-control" wire:model="genreSelect" multiple>
                @foreach ($allGenres as $genre)
                    <option value="{{$genre['id']}}">{{$genre['name']}}</option>
                @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Data di uscita</label>
            <input type="text" class="form-control" wire:model.lazy='release'>
            @error('release') 
              <span class="error">{{$message}}</span>
          @enderror
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
