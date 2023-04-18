

    
  <div class="card my-5" style="width: 18rem;">
     <img src="{{$cardImg}}" class="card-img-top" alt="{!! $cardTitle !!}">
    <div class="card-body">
      <h5 class="card-title">{!! $cardTitle !!}</h5>
      <p class="card-text">{{$cardAutore}}</p>
      <p class="card-text">{{$cardAnno}}</p>
      <a href="{{route ('videogames', ['id'=>$cardId]) }}" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>