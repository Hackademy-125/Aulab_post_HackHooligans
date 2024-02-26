<table class="table table-striped table-hover border">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome Tag</th>
            <th scope="col">Q.ta articoli collegati</th>
            <th scope="col">Aggiorna</th>
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
                            <input type="text" name="name" placeholder="Nuovo nome tag" class="form-control">
                            <button type="submit" class="button btn1">Aggiorna</button>
                        </form>
                    </td>

                    <td>
                        <form action="{{route('admin.deleteTag' , ['tag' => $metaInfo]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="button btn1">Elimina</button>
                        </form>
                    </td>

                @else
                    <td>
                        <form action="" method="">
                            @csrf
                            @method('put')
                            <input type="text" name="name" placeholder="Nuovo nome categoria" class="form-control">
                            <button type="submit" class="button btn1">Aggiorna</button>
                        </form>
                    </td>

                    <td>
                        <form action="" method="">
                            @csrf
                            @method('delete')
                            <button type="submit" class="button btn1">Aggiorna</button>
                        </form>
                    </td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>
