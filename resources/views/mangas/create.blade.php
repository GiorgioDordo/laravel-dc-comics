@extends("layouts.app")

@section("page-title", "Create new manga")

@section("main-content")
<section class="container py-4">
    <div class="row justify-content-around">
        <form class="col-12 col-md-6 card m-3" method="POST" action="{{ route("manga.store") }}">
            @csrf

            <h1 class="mb-3">
                Creating a new manga:
            </h1>
            <div class="mb-3">
                <label for="manga-title" class="form-label">Title:</label>
                <input type="text" class="form-control" id="manga-title" name="title">
            </div>
            <div class="mb-3">
                <label for="manga-autor" class="form-label">Autor:</label>
                <input type="text" class="form-control" id="manga-autor" name="autor">
            </div>
            <div class="mb-3">
                <label for="manga-genre" class="form-label">Genre:</label>
                <input type="text" class="form-control" id="manga-genre" name="genre">
            </div>
            <div class="mb-3">
                <label for="manga-publisher" class="form-label">Publisher:</label>
                <input type="text" class="form-control" id="manga-publisher" name="publisher">
            </div>
            <div class="mb-3">
                <label for="manga-price" class="form-label">Price:</label>
                <input type="text" class="form-control" id="manga-price" name="price">
            </div>
            <div class="mb-3">
                <label for="manga-thumbs" class="form-label">Thumbs:</label>
                <input type="text" class="form-control" id="manga-thumbs" name="thumbs">
            </div>
            <div class="mb-3">
                <label for="manga-description" class="form-label">Description:</label>
                <input type="text" class="form-control" id="manga-description" name="description">
            </div>
            <div class="mb-3 d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary me-3">
                    Create new Manga
                </button>
                <button type="reset" class="btn btn-warning me-3">
                    Reset fields
                </button>
            </div>
        </form>
    </div>
</section>
@endsection
