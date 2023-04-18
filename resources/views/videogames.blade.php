<x-layout>
    
 
  <div class="container">
    <div class="row">
        <div class="col-6 my-5">
            <h1>{!! $game['title'] !!}</h1>
            <img class="img-fluid  w-75" src="{{$game['img']}}" alt="">
        </div>
        <div class="col-6 d-flex align-items-center flex-column justify-content-center">
            <h2 class="my-3">Descrizione:</h2>
            <p>{!! $game['description'] !!}</p>
        </div>
    </div>
  </div>
    
    
    
</x-layout>