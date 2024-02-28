<div class="card">

    <div class="">
        <img src="{{ $image }}" alt="" class="card-img-top">
                <h5 class="card-title neonText">{!! $title !!}</h5>
    </div>
    <div class="d-flex justify-content-center align-items-center">
        <div class="d-flex flex-column align-items-center justify-content-center custom-circle ">
            @if ($category)
                <a href="{{ $urlCategory }}" class="text-dark "> <i class=" {{ $icon }}"></i> </a>
                <a href="{{ $urlCategory }}">
                    <p class="custom-line my-0 custom-size small text-muted mb-0">{{ $category }}</p>
                </a>
            @endif
        </div>
    </div>
    <div class="card-body">


        <h3 class="card-text mb-4">{!! $subtitle !!}</h3>
        <span class="text-muted smalll fst-italic">Tempo di lettura {{ $readDuration }} min</span>
            @if ($tags)
                <p class="tags">
                    @foreach ($tags as $tag)
                        #{{ $tag->name }}
                    @endforeach
                </p>
            @endif
    </div>

    <div class="card-footer text-muted d-flex justify-content-center align-items-center flex-column">
        <span class="redazione"> {{ $data }}<a href="{{ $urlUser }}">{{ $user }}</a></span>
        <a href="{{ $url }}" class="button1 text-center">Leggi</a>
    </div>
</div>
