<?php

namespace App\Http\Livewire;

use App\Models\Album;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CreateAlbum extends Component
{   
    public $title;
    public $artist;
    public $release;
    public $genreSelect = [];

    protected $rules = [
        'title' =>'required',
        'artist' =>'required',
        'release' =>'required',
        'genreSelect'=>'required',
    ];

    protected $messages = [
        'title.required' =>'titolo richiesto',
        'artist.required' =>'artista richiesto',
        'release.required' =>'data di uscita è richiesta',
    ];

    public function render()
    {
        return view('livewire.create-album');
    }

    public function createAlbum(){
        $this->validate();
        $album = Album::create([
            'title' => $this->title,
            'artist' => $this->artist,
            'release' => $this->release,
            'user_id' => Auth::user()->id,

        ]);

        foreach ($this->genreSelect as $genre) {
            $album->genres()->attach($genre);
        }

        // $this->reset();
        return redirect(route('album.create'))->with('message', 'Album Inserito con successo');
    }
}
