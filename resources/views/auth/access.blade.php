<x-layout>
    <div class="general-container">
        <div class="container" id="container">
            {{-- Form di registrazione --}}
            <div class="form-container register">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <h2>Registrati</h2>
                    <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}" />
                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" />
                    <input type="password" name="password" placeholder="Password" />
                    <input type="password" name="password_confirmation" placeholder="Conferma Password" />
                    <button type="submit">Registrati</button>
                </form>
            </div>
            {{-- Form di login --}}
            <div class="form-container login">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <h2>Accedi</h2>
                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" />
                    <input type="password" name="password" placeholder="Password" />
                    <button type="submit">Accedi</button>
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
                        <button class="hidden" id="login">Login</button>
                    </div>
                    {{-- toggle destra --}}
                    <div class="toggle-panel toggle-right">
                        <h3>Benvenuto!</h3>
                        <p>
                            inserisci i tuoi dati per registrarti e usare le nostre funzionalità
                        </p>
                        <button class="hidden" id="register">Registrati</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
