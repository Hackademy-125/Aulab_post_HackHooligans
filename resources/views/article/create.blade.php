<x-layout>

    <form action="{{route('article.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Titolo" name='title'>
            <input type="text" class="form-control" placeholder="Sottotitolo" name='subtitle'>
        </div>
        <div class="mb-3 my-3">
            <input class="form-control" type="file" id="formFile" placeholder="Foto di copertina" name="image ">
        </div>

        <div class="mb-3">
            <label class="form-label">Seleziona categoria</label>
            <select class="form-select" name='category' aria-label="Default select example">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <textarea class="form-control" placeholder="Descrizione dell'articolo" id="floatingTextarea2" cols="30"
                rows="7" name="body">{{ old('body') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary my-3">Inserisci Articolo</button>
    </form>

</x-layout>
