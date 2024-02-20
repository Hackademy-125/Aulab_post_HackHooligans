<x-layout>
    <div class="general-container">
        <div class="custom-container" id="custom_container">
            
            {{-- Form di login --}}
            <div class="form-container login">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <h2>Accedi</h2>
                    @error('email')
                        <div class="custom-error">{{ "inserisci l'email" }}</div>
                    @enderror
                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" />

                    @error('password')
                        <div class="custom-error">{{ 'inserisci la password' }}</div>
                    @enderror
                    <input type="password" name="password" placeholder="Password" />
                    <button type="submit">Accedi</button>
                </form>
            </div>

            {{-- Form di registrazione --}}
            <div class="form-container register">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <h2>Registrati</h2>
                    @error('name')
                        <div class="custom-error">{{ 'il nome deve avere almeno 3 caratteri' }}</div>
                    @enderror
                    <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}" />

                    @error('email')
                        <div class="custom-error">{{ "inserisci un'email valida" }}</div>
                    @enderror
                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" />

                    @error('password')
                        <div class="custom-error">{{ 'inserisci una password di almeno 10 caratteri' }}</div>
                    @enderror
                    <input type="password" name="password" placeholder="Password" />


                    @error('password_confirmation')
                        <div class="custom-error">{{ 'le password non corrispondono' }}</div>
                    @enderror
                    <input type="password" name="password_confirmation" placeholder="Conferma Password" />
                    <button type="submit">Registrati</button>
                </form>
            </div>


            <div class="toggle-container">
                <div class="toggle">
                    {{-- toggle sinistra --}}
                    <div class="toggle-panel toggle-left">
                        <h3>Bentornato!</h3>
                        <p>
                            inserisci la tua email e la password per accedere al tuo account
                        </p>
                        <button class="hidden" id="login">Registrati</button>
                    </div>
                    {{-- toggle destra --}}
                    <div class="toggle-panel toggle-right">
                        <h3>Benvenuto!</h3>
                        <p>
                            inserisci i tuoi dati per registrarti e usare le nostre funzionalità
                        </p>
                        <button class="hidden" id="register">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
