<x-layout>

    <h1>Registrati</h1>

    <form method="POST" action="{{ route('writer.submit') }}" enctype="multipart/form-data">
        @csrf {{-- è un token che mi protegge anche dagli attacchi doss --}}
        <div class="mb-3">

            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">

            @error('author')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email">

            <div class="mb-3">
                @error('year')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                @error('year')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label class="form-label">Conferma password</label>
                <input type="password" class="form-control" name="conferma-password">
            </div>
            <div class="input-group">
                <input type="file" class="form-control my-2" id="inputGroupFile04"
                    aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="img">
            </div>
            <button type="submit" class="btn btn-primary my-2">Registrati</button>
    </form>
</x-layout>