<x-layout>
    <div class="container-fluid bg-primary">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-2">
                    Dettaglio album
                </h1>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <img src="https://picsum.photos/500" alt="">
            </div>
            <div class="col-6 text-center ">
                <h4>{{$album->title}}</h4>
                <h5>{{$album->artist}}</h5>

                <h5 class="card-title">Generi: </h5>
                <ul> 
                  @foreach ($album->genres as $genre)
                      <li>{{$genre['name']}}</li>   
                  @endforeach
                  </ul>


                {{-- @dd($album->genres) --}}
                <p>Pubblicato il : {{$album->release}}</p>
            </div>

        </div>
    </div>





</x-layout>