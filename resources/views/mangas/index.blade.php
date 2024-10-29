@extends("layouts.app")

@section("page-title", "Mangas")

@section("main-content")
<section class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">
                MANGAS
            </h1>
        </div>
        <div class="row d-flex justify-content-center">
            @foreach ($mangas as $manga)
            <div class="col-3 m-3 p-3 d-flex flex-column align-items-center  border rounded">
                <div class="manga-cover">
                    <img class="border card-img-top" src="{{$manga["thumbs"]}}" alt="icon">
                </div>
                <div class="card-body text-center d-flex flex-column justify-content-end mt-2">
                    <p>
                        <strong>{{$manga["title"]}}</strong>
                    </p>
                    <p>
                        {{$manga["publisher"]}}
                    </p>
                    <p>
                        {{$manga["price"]}} €
                    </p>
                    <button type="button" class="btn btn-light"><strong>Aggiungi al carrello</strong></button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
