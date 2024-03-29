<x-layout>
    <div class="container-fluid p-5  text-center text-index my-5">
        <div class="row">
            <h1 class="display-3">Bentornato Amministratore</h1>
        </div>
    </div>



    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">

                @if (session('message'))
                    <div class="alert alert-success text-center">
                        {{ session('message') }}
                    </div>
                @endif
                
                <h2>Richieste per ruolo Amministratore</h2>
                <x-requests-table :roleRequests="$adminRequests" role="amministratore" />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo Revisore</h2>
                <x-requests-table :roleRequests="$revisorRequests" role="revisore" />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo Redattore</h2>
                <x-requests-table :roleRequests="$writerRequests" role="redattore" />
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>I tags della piattaforma</h2>
                <x-metainfo-table :metaInfos="$tags" metaType="tags" />
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Le categorie della piattaforma</h2>
                <x-metainfo-table :metaInfos="$categories" metaType="categories" />
                <form action="{{ route('admin.storeCategory') }}" class="d-flex" method="POST">
                    @csrf
                    <input type="text" name="name" class="form-table p-table" placeholder=" Nuova categoria">
                    <button type="submit" class="button btn1 ms-2">Aggiungi</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
