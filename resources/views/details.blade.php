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
  
  
    <div class="container-fluid bg-games">
      <div class="row">
  
          <h1 class="my-5 text-center text-dark">Sezione Giochi:</h2>
  
          @foreach ($games as $element)
          <div class="col-12 col-md-4 my-2 d-flex justify-content-center">
  
      
  
          <x-card
  
          cardTitle="{{$element['title']}}"
          cardAutore="{{$element['autore']}}"
          cardAnno="{{$element['anno']}}"
          cardId="{{$element['id']}}"
          cardImg="{{$element['img']}}"
          cardGenere="{{$element['genre']}}"

          
          />
        </div>
          @endforeach
  
      </div>
    </div>
    
   
  
  
  
  
  
  
  </x-layout>