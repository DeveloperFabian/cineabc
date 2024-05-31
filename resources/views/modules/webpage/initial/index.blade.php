@extends('layouts.webpage.app')
@section('content')
@include('modules.webpage.initial.components.modal.login')
    @php
        $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
			Quo deleniti possimus soluta. Saepe esse veritatis nesciunt 
			alias at laboriosam laborum rem, nulla consectetur. 
			Soluta voluptatum dolores autem accusantium facilis reprehenderit!';
    @endphp
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
                    <p class="fw-bold">CineABC es la plataforma por excelencia para adquirir tus peliculas. Dentro de su catalogo, puedes ver
                        un sinfín de películas y/o series interesantes, atrapantes y que seguramente te sacudirán el
                        aburrimiento en pocos minutos.

                        La página no solo puede ser tu plan ideal para pasar el fin de semana o las noches junto a tus
                        amigos, familiares o pareja. Sin que también es tu aliado ideal para esos momentos en los que te
                        encuentres solo y no sepas que más hacer en tus tiempos libres.</p>
                </div>
            </div>
        </div>
		<div class="col px-7">
			<div class="card bg-dark">
				<div class="col-md-4 m-4">
					<div class="card card-movie m-2">
						<img src="https://es.web.img3.acsta.net/c_310_420/medias/nmedia/18/70/92/02/20149073.jpg"
							class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title text-dark">sdfsdf</h5>
							<p class="card-text text-dark">{{ strlen($text) > 50 ? substr($text, 0, 50) . '...' : $text }}</p>
							<p class="card-text text-dark"><small class="text-muted">2020-20-20</small></p>
						</div>
					</div>
				</div>
			</div>
		</div>
        
    </div>
@endsection
