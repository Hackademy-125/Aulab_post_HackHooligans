<x-layout>

    <h1>Registrati</h1>

    <form method="POST" action="{{ route('writer.submit') }}" enctype="multipart/form-data">
        @csrf {{-- è un token che mi protegge anche dagli attacchi doss --}}
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
            <button type="submit" class="btn btn-primary my-2">Accedi</button>
    </form>
</x-layout>