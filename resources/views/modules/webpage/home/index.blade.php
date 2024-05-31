@extends('layouts.webpage.app')
@section('content')
    @include('modules.webpage.initial.components.modal.login')
    <div class="row-reverse">
        <div class="col mb-5">
            <div class="row-reverse">
                <div class="col mb-3 d-flex justify-content-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/2809/2809590.png" alt="" width="150">
                </div>
                <div class="col mb-5">
                    <h1 class="fw-bold text-center" style="font-size: 50px">CineABC</h1>
                </div>
                <div class="col d-flex justify-content-center px-7">
                    <p class="fw-bold">CineABC es la plataforma por excelencia para adquirir tus peliculas. Dentro de su
                        catalogo, puedes ver
                        un sinfín de películas y/o series interesantes, atrapantes y que seguramente te sacudirán el
                        aburrimiento en pocos minutos.

                        La página no solo puede ser tu plan ideal para pasar el fin de semana o las noches junto a tus
                        amigos, familiares o pareja. Sin que también es tu aliado ideal para esos momentos en los que te
                        encuentres solo y no sepas que más hacer en tus tiempos libres.</p>
                </div>
            </div>
        </div>
        <div class="col px-7">
            <div class="card bg-dark p-5">
                <div class="row">
                    @foreach ($data as $item)
                        <div class="col-md-4 d-flex justify-content-center">
                            <div class="card card-movie zoom">
                                <img src="{{ $item->getFirstMediaUrl('movies') }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">{{ $item->title }}</h5>
                                    <ul>
                                        <li>{{ $item->director }}</li>
                                        <li>{{ $item->time }}</li>
                                        <li>{{ $item->genre }}</li>
                                        <li>{{ $item->classification }}</li>
                                    </ul>
                                    <p class="card-text text-dark"><small class="text-muted">{{ $item->year }}</small></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

    </div>
@endsection
