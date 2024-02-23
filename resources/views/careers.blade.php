<x-layout>
    <div class="container-fluid p-5  text-center text-white bg-p">
        <div class="row">
            <h1>Lavora con noi</h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center align-items-center border rounded p-2 shadow">
            <div class="col-12 col-md-6">
                <h2 class="font-title">Lavora come Amministratore</h2>
                <p class="font-paragraph">Ti piacerebbe gestire un sito e averne cura come se fosse tuo figlio? Cosa aspetti, candidati subito!
                </p>

                <h2 class="font-title">Lavora come Revisore</h2>
                <p class="font-paragraph">Ti piace leggere? Ti piace rimanere informato? Ti piace lavorare da casa? Questo ruolo fa per te, candidati!
                </p>

                <h2 class="font-title">Lavora come Redattore</h2>
                <p class="font-paragraph">Sei un redattore emergente che ha bisogno di una entrata sicura? Bhe, penso che questo ruolo sia perfetto per te!
                </p>
            </div>
            <div class="col-12 col-md-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{route('careers.submit')}}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="role" class="form-label"> Per quale ruolo ti stai candidando?</label>
                        <select name="role" id="role" class="form-control">
                            <option value="">Scegli qui</option>
                            <option value="admin">Amministratore</option>
                            <option value="revisor">Revisore</option>
                            <option value="writer">Redattore</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') ?? Auth::user()->email}}">
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Parlaci di te</label>
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control">{{old('message')}}</textarea>
                    </div>
                    <div class="custom-btn mt-2">
                        <button type="submit" class= "button-application">Invia la tua candidatura</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
