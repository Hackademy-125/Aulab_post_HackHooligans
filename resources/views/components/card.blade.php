<div class="card">
    <img src="{{$image}}" alt="" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">{{$title}}</h5>
        <h3 class="card-text">{{$subtitle}}</h3>
        <a href="{{ $urlCategory }}" class="small text-muted d-flex justify-content-center align-items-center">{{$category}}</a>
    </div>
    <div class="card-footer text-muted d-flex justify-content-center align-items-center">
        Redatto il {{$data}} da <a href="{{$urlUser}}">{{$user}}</a>
        <a href="{{$url}}" class="btn btn-info text-white">Leggi</a>
    </div>
</div>