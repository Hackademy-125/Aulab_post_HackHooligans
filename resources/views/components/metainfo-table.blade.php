<table class="table table-striped table-hover border">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome Tag</th>
            <th scope="col">Q.ta articoli collegati</th>
            <th scope="col" class="text-center">Aggiorna</th>
            <th scope="col">Cancella</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($metaInfos as $metaInfo)
            <tr>
                <th scope="row">{{ $metaInfo->id }}</th>
                <td>{{ $metaInfo->name }}</td>
                <td>{{ count($metaInfo->articles) }}</td>
                @if ($metaType == 'tags')
                    <td>
                        <form action="{{route('admin.editTag' , ['tag' => $metaInfo]) }}" method="POST">
                            @csrf
                            @method('put')
                            <input type="text" name="name" placeholder="Nuovo nome tag" class="form-table">
                            <button type="submit" class="button-table">Aggiorna</button>
                        </form>
                    </td>

                    <td>
                        <form action="{{route('admin.deleteTag' , ['tag' => $metaInfo]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="button-details-delete btn-delete2">Elimina</button>
                        </form>
                    </td>

                @else
                    <td>
                        <form action="{{route('admin.editCategory' , ['category' => $metaInfo]) }}" method="POST">
                            @csrf
                            @method('put')
                            <input type="text" name="name" placeholder="Nuovo nome categoria" class="form-control">
                            <button type="submit" class="button-table">Aggiorna</button>
                        </form>
                    </td>

                    <td>
                        <form action="{{route('admin.deleteCategory' , ['category' => $metaInfo]) }}" method="POST">
                            @csrf
                            @method('delete')
<<<<<<< HEAD
                            <button type="submit" class="button-details-delete btn-delete2">Elimina</button>
=======
                            <button type="submit" class="button btn1">Elimina</button>
>>>>>>> 53bfa326497d787bf537e37c82a5c50d2c31b787
                        </form>
                    </td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>
