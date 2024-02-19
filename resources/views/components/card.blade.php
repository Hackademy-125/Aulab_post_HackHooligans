<div class="card">
    <img src='{{ Storage::url($image) }}' alt="{{$title}}" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">{{$title}}</h5>
        <h3 class="card-text">{{$subtitle}}</h3>
        <p class="small text-muted mb-0">{{$category}}</p>
    </div>
    <div class="card-footer text-muted d-flex justify-content-between align-items-center">
        <p class="m-0">Redatto il {{$data}} da {{$user}}</p>
        <a href="{{$url}}" class="btn btn-info text-white">Leggi</a>
    </div>
</div>

