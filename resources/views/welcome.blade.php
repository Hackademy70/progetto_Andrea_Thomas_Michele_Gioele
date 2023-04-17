<x-layout>



  
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center">
          <h1 class="fw-light fw-bold text-white">Videogiuoco Project</h1>
          <p class="lead fw-bold text-white">Benvenuti nella nostra pagina di videogiochi</p>
        </div>
      </div>
    </div>
  </header>


  <div class="container">
    <div class="row">
      

        @foreach ($games as $element)
        <div class="col-12 col-md-4 my-2">
        <x-card

        cardTitle="{{$element['title']}}"
        cardAutore="{{$element['autore']}}"
        cardAnno="{{$element['anno']}}"
        cardId="{{$element['id']}}"
        cardImg="{{$element['img']}}"
        
        />
      </div>
        @endforeach

    </div>
  </div>
  
 






</x-layout>