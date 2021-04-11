@props(['title' , 'img' , 'description' , 'price'])

<div class="card card-service text-center container-fluid p-3 m-3">
    <h5 class="title-serv fs-3 mb-3">{{$title}}</h5>
    <img class="mb-3" src="{{$img}}" alt="">
    <p class="title-serv">{{$description}}</p>
    <h5 class="title-serv">{{$price}}</h5>
    @if (Route::currentRouteName()== 'servizi')
        <a href="{{route('servizi.dettaglio', ['title'=>$title])}}" class="btn col-8 btn-serv">Dettaglio</a>
    @else
        <a href="{{route('servizi')}}" class="btn btn-serv">Torna agli annunci</a>
    @endif
</div>