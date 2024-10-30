@extends('layouts.app')

@section('page-title',$manga['title'])

@section('main-content')
<section class='container'>
    <div class='row'>
        <div class='col-12'>
            <h1 class='text-center'>
                Manga
            </h1>
        </div>
        <div class='row d-flex justify-content-center'>
            <div class='col-6 m-3 p-3 d-flex flex-column align-items-center'>
                <div class='manga-cover'>
                    <img class='border card-img-top' src='{{$manga['thumbs']}}' alt='icon'>
                </div>
                <div class='card-body text-center d-flex flex-column justify-content-end mt-2'>
                    <p>
                        <strong>{{$manga['title']}}</strong>
                    </p>

                    <p>
                        {{$manga['autor']}}
                    </p>

                    <p>
                        {{$manga['genre']}}
                    </p>

                    <p>
                        {{$manga['publisher']}}
                    </p>

                    <p>
                        {{$manga['description']}}
                    </p>

                    <p>
                        {{$manga['price']}} €
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
