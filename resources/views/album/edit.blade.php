<x-layout>
    <div class="container-fluid bg-primary">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-2">
                    Modifica un album
                </h1>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 border border-black rounded shadow-lg p-5">
                <livewire:edit-album
                idAlbum='{{$album->id}}'
                />
            </div>
        </div>
    </div>

    
</x-layout>