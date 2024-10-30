@extends("layouts.app")

@section("page-title", "Mangas")

@section("main-content")
<section class="container">
    <div>
        <div>
            <h1 class="text-center">
                MANGAS
            </h1>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="d-flex justify-content-center">
                <a href="{{route('mangas.create')}}" class="btn btn-success rounded-5">ADD NEW MANGA</a>
            </div>
            @foreach ($mangas as $index => $manga)
            <div class="col-3 m-3 p-3 d-flex flex-column align-items-center  border rounded">
                <div class="manga-cover">
                    <img class="border card-img-top" src="{{$manga["thumbs"]}}" alt="icon">
                </div>
                <div class="card-body text-center d-flex flex-column justify-content-end mt-2">
                    <a href="{{route('manga.show', $manga->id)}}"><strong>Title</strong></a>
                    <a>
                        <strong>{{$manga["title"]}}</strong>
                    </a>
                    <p>
                        {{$manga["publisher"]}}
                    </p>
                    <p>
                        {{$manga["price"]}} €
                    </p>
                    <a href='{{route('manga.show', $manga->id)}}' class='btn btn-light'><strong>MORE INFO</strong></a>
                    <a href='{{route('manga.edit', $manga->id)}}' class='btn btn-light'><strong>EDIT MANGA</strong></a>
                    <form action="{{ route("manga.delete", $manga->id) }}" method="post" class="d-inline">
                        @csrf
                        @method("DELETE")
                        <input type="submit" class="btn btn-sm btn-warning" value='DELETE'>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
