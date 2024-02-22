<table class="table table-striped border table-hover">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">TITOLO</th>
            <th scope="col">SOTTOTITOLO</th>
            <th scope="col">REDATTORE</th>
            <th scope="col">AZIONI</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
            <tr>
                <th scope="row">{{ $article->id }}</th>
                <td>{{ $article->title }}</td>
                <td>{{ $article->subtitle }}</td>
                <td>{{ $article->user->name }}</td>
                <td>
                    @if (is_null($article->is_accepted))
                        <a href="{{ route('article.show', compact('article')) }}" class="button-table">Leggi l'articolo</a>
                    @else
                        <form action="{{ route('revisor.undoArticle', compact('article')) }}" method="POST">
                            @csrf
                            <button class="button-table"> Riporta in revisione </button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
