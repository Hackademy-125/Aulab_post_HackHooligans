<div class="card">
    <img src="{{ $image }}" alt="" class="card-img-top">
    <div class="card-body pad-0">
        <h5 class="card-title">{{ $title }}</h5>

        <h3 class="card-text mb-4">{{ $subtitle }}</h3>

        <div class="d-flex flex-column align-items-center justify-content-center ">
            @if ($category)
                <a href="{{ $urlCategory }}" class="text-dark "> <i class=" {{ $icon }}"></i> </a>
                <a href="{{ $urlCategory }}">
                    <p class="custom-line my-0 custom-size small text-muted mb-0">{{ $category }}</p>
                </a>
            @endif

            @if ($tags)
                <p class="small fst-italic">
                    @foreach ($tags as $tag)
                        #{{ $tag->name }}
                    @endforeach
                </p>
            @endif

        </div>



    </div>

    <div class="card-footer text-muted d-flex justify-content-center align-items-center">
        <span class="redazione">Redatto il {{ $data }} da <a
                href="{{ $urlUser }}">{{ $user }}</a></span>
        <a href="{{ $url }}" class="button1">Leggi</a>
    </div>
</div>
