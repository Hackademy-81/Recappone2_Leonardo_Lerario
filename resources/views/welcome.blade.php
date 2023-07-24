<x-layout>
    <div class="container-fluid bg-primary">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-2">
                    Music Aulab
                </h1>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            @foreach ($albums as $album)
            <div class="col-12 col-lg-4 d-flex justify-content-center mt-3 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$album->title}}</h5>
                      <h6 class="card-title">{{$album->artist}}</h6>
                      <h5 class="card-title">Generi: </h5>
                      <ul> 
                        @foreach ($album->genres as $genre)
                            <li>{{$genre['name']}}</li>   
                        @endforeach
                        </ul>
                      <p class="card-text">Pubblicato il : {{$album->release}}</p>
                      <p class="card-text">inserito da : {{$album->user->name}}</p>
                      <a href="{{route('album.show', compact('album'))}}" class="btn btn-primary">Dettaglio</a>
                    </div>
                  </div>
            </div>
            @endforeach

        </div>
    </div>





</x-layout>