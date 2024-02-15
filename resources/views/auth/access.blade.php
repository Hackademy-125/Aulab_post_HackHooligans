<x-layout>
    <div class="container">
        <div class="row justify-content-evenly my-5 ">
            <div class="col-12 col-md-6 col-lg-4">

                {{-- ! FORM PER L'UTENTE NON REGISTRATO  --}}

                <h2>Registrati</h2>

                <form class=""method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf {{-- è un token che mi protegge anche dagli attacchi doss --}}

                    <div class="mb-3">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="mb-3">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="mb-3">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <div class="mb-3">
                        @error('password_confirmation')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <label class="form-label">Conferma password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    {{-- <div class="input-group">
                        <input type="file" class="form-control my-2" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="img">
                        </div> --}}
                    <button type="submit" class="btn btn-primary my-2">Registrati</button>

                    <div>
                        <p>
                            Sei gia registrato?
                            {{-- ! bottone fake --}}
                            <a class="nav-link btn btn-danger" href="{{ route('login') }}">Accedi</a>
                        </p>
                    </div>
                </form>
            </div>


            {{-- ! FORM PER IL LOGIN  --}}

            <div class="col-12 col-md-6 col-lg-4 bg-secondary">
                <h2>Accedi</h2>

                <form method="POST" action="{{ route('login') }}">
                    @csrf {{-- è un token che mi protegge anche dagli attacchi doss --}}

                    <div class="mb-3">
                        @error('email')
                            <div class="alert alert-danger">{{$message }}</div>
                        @enderror
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="mb-3">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <button type="submit" class="btn btn-primary my-2">Accedi</button>
                </form>
            </div>
        </div>
    </div>


</x-layout>
