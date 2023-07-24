<?php

namespace App\Http\Livewire;

use App\Models\Album;
use Livewire\Component;

class EditAlbum extends Component
{

    public $title;
    public $artist;
    public $release;
    public $idAlbum;

    protected $rules = [
        'title' =>'required',
        'artist' =>'required',
        'release' =>'required',
    ];

    protected $messages = [
        'title.required' =>'titolo richiesto',
        'artist.required' =>'artista richiesto',
        'release.required' =>'data di uscita è richiesta',
    ];

    
    public function mount($idAlbum){
        $album = Album::find($idAlbum);
        $this->title = $album->title;
        $this->artist = $album->artist;
        $this->release = $album->release;
        $this->idAlbum = $album->id;
    }
    
    public function updateAlbum(){
        $this->validate();
        $album = Album::find($this->idAlbum);
        $album->update([
            'title'=>$this->title,
            'artist'=>$this->artist,
            'release'=>$this->release,
            
        ]);
        
        return redirect(route('welcome'))->with('message', 'album modificato con successo');
    }
    

    public function render()
    {
        return view('livewire.edit-album');
    }
}
