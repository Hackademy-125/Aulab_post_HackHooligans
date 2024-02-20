<div class="card">
<<<<<<< HEAD
    <img src="{{ $image}}" alt="" class="card-img-top">
=======
    <img src="{{ $image }}" alt="" class="card-img-top">
>>>>>>> abdd1245dec00a3becfdcf2ddfe75abf626ec27f
    <div class="card-body">
        <h5 class="card-title">{{$title}}</h5>
        
        <h3 class="card-text">{{$subtitle}}</h3>
        <p class="small text-muted mb-0">{{$category}} <i class="{{$icon}}"></i></p>
    </div>
<<<<<<< HEAD
    <div class="card-footer text-muted d-flex justify-content-center align-items-center">
        Redatto il {{$data}} da <a href="{{$urlUser}}">{{$user}}</a>
        <a href="{{$url}}" class="button btn1">Leggi</a>
=======
    
    <div class="card-footer text-muted d-flex justify-content-between align-items-center">
        <p class="m-0">Redatto il {{$data}} da  {{$user}}</p>
        <a href="{{$url}}" class="btn btn-info text-white" id="leggi-btn">Leggi</a>
>>>>>>> abdd1245dec00a3becfdcf2ddfe75abf626ec27f
    </div>
</div>

