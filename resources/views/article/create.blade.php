<x-layout>



    <div class="container-fluid mgn-custom">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-6 form-create my-5">

                @if ($errors->any())
                    <div class="alert alert-danger mt-5">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form action="{{ route('article.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Titolo" name='title'>
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Sottotitolo" name='subtitle'>
                    </div>

                    <div class="mb-3">
                        <input class="form-control" type="file" id="formFile" placeholder="Foto di copertina"
                            name='image'>
                        <p class="fs-form-immagine">*dimensione consigliata: 500px x 500px</p>
                    </div>

                    <div class="mb-3">
                        <input class="form-control" id="tags" placeholder="Tags" name='tags'
                            value="{{ old('tags') }}">
                        <span class="small fst-italic">Dividi ogni tag con una virgola</span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Seleziona categoria: </label>
                        <select class="form-select" name='category' aria-label="Default select example">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <textarea class="form-control" placeholder="Descrizione dell'articolo" id="floatingTextarea2" cols="30"
                            rows="6" name="body">{{ old('body') }}</textarea>
                    </div>

                    <div class="custom-btn">
                        <button type="submit" class= "button btn1 my-3">Inserisci Articolo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
