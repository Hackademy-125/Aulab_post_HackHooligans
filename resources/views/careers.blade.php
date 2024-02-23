<x-layout>
    <div class="container-fluid p-5  text-center text-white bg-p">
        <div class="row">
            <h1 class="display-5">Clicca il pulsante per far parte del nostro team, ti stiamo aspettando!<h1>
                <div class="col-12 col-md-6">
                    <a href="#form" class="button-application">Contattaci</a>
                </div>
        </div>
    </div>

    <section class="container-fluid mt-5">
        <article class="row">
            <div class="col-12 col-md-6">
                <h2 class="font-title">Lavora come Amministratore</h2>
                <p class="font-paragraph">
                    Roberto, un abile amministratore, opera con precisione all’interno di The Aulab Post. La sua
                    responsabilità principale è monitorare attentamente le richieste di lavoro che giungono attraverso
                    la piattaforma. Con occhio vigile, esamina i profili dei candidati, verifica le competenze e valuta
                    le esperienze professionali. Roberto si muove tra le righe digitali, assicurandosi che ogni
                    richiesta sia adeguatamente indirizzata e che i potenziali candidati siano idonei per le posizioni
                    disponibili. La sua attenzione ai dettagli e la sua capacità di gestire flussi di informazioni lo
                    rendono un elemento prezioso nel mondo virtuale del reclutamento.
                </p>
            </div>
            <div class="col-12 col-md-6 custom-work">
                <div class="work-img">
                </div>
            </div>
        </article>

        {{-- art.2 --}}
        <article class="row mt-5">
            <div class="col-12 col-md-6 custom-work ">
                <div class="work-img-2">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <h2 class="font-title">Lavora come Revisore</h2>
                <p class="font-paragraph">
                    Marta, una professionista attiva nel campo della revisione, si dedica con scrupolosità alla verifica
                    e all’analisi critica degli articoli pubblicati su The Aulab Post. Con competenza e attenzione,
                    Marta esamina le asserzioni, la coerenza e la correttezza dei contenuti, garantendo la qualità e
                    l’affidabilità delle informazioni presentate. La sua attività comprende anche la pianificazione e
                    l’esecuzione di procedure di conferma esterna, come la circolarizzazione, per acquisire dati da
                    terzi e supportare il processo di revisione. Inoltre, Marta si impegna a mantenere l’indipendenza e
                    l’obiettività necessarie per svolgere il suo ruolo con professionalità e rigore
                </p>
            </div>
        </article>

        {{-- art.3 --}}
        <article class="row mt-5">
            <div class="col-12 col-md-6">
                <h2 class="font-title">Lavora come Redattore</h2>
                <p class="font-paragraph">
                    Sofia, la nostra giovane redattrice, è una penna incisiva e creativa nel mondo digitale. Con
                    passione e competenza, si addentra nei meandri delle notizie, trasformandole in articoli
                    coinvolgenti. Il suo stile vivace e la sua curiosità insaziabile la guidano attraverso le trame di
                    eventi, cultura e tendenze. Sofia è la voce che danza tra le righe, portando freschezza e profondità
                    ai lettori del nostro blog.
                </p>
            </div>
            <div class="col-12 col-md-6 custom-work">
                <div class="work-img-3">
                </div>
            </div>
        </article>
    </section>

    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
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
            </div>
        </div>
    </div>





    <div class="container my-5" id="form">
        <div class="row align-items-center justify-content-center">
            <div class="form-create col-12 col-md-6">
                <form action="{{ route('careers.submit') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="role" class="form-label"> Per quale ruolo ti stai
                            candidando?</label>
                        <select name="role" id="role" class="form-control">
                            <option value="">Scegli qui</option>
                            <option value="admin">Amministratore</option>
                            <option value="revisor">Revisore</option>
                            <option value="writer">Redattore</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control"
                            value="{{ old('email') ?? Auth::user()->email }}">
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Parlaci di te</label>
                        <textarea name="message" id="message" cols="30" rows="5" class="form-control">{{ old('message') }}</textarea>
                    </div>
                    <div class="custom-btn mt-2">
                        <button type="submit" class= "button-application">Invia la tua candidatura</button>
                    </div>
                </form>
            </div>
        </div>
    </div>







</x-layout>
