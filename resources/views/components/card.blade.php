<div class="card">
    <img src="{{ $image }}" alt="" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>

        <h3 class="card-text">{{ $subtitle }}</h3>

        <div>
            <a href="{{ $urlCategory }}">
                <p class="small text-muted mb-0">{{ $category }}</p>
            </a>
            <a href="{{$urlCategory}}"><i class="{{$icon}}"></i></a>
        </div>

    </div>
    <div class="card-footer text-muted d-flex justify-content-center align-items-center">
        Redatto il {{ $data }} da <a href="{{ $urlUser }}">{{ $user }}</a>
        <a href="{{ $url }}" class="button btn1">Leggi</a>
    </div>
</div>
