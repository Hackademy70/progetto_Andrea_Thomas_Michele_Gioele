<x-layout>

    <div class="container">
        <div class="row">
            @foreach ($us as $element)
            <div class="col-12 col-md-6 my-3">
                <x-cardaboutus 
                usName="{{$element['name']}}"
                usSurname="{{$element['surname']}}"
                usImg="{{$element['img']}}"
                usRole="{{$element['role']}}"
                />
            </div>
            @endforeach
        </div>
    </div>




</x-layout>