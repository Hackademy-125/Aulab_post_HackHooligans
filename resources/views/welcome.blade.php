<x-layout>

    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row">
            <h1>The Aulab Post</h1>
        </div>
    </div>
    @if ('message')
        <div class="alert alert-danger-text-center">
            {{session('message')}}
        </div>
    @endif
{{--     
    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
    
            <div class="col-12 col md-3">
                <x-card>
                    title="{{$article->title}}"
                    subtitle="{{$article->subtitle}}"
                    image="{{$article->image}}"
                    category="{{$article->category}}"
                    data="{{$article->created_at->format('d/m/Y') }}"
                    user="{{$article->user->name}}"
                    url="#"
                </x-card>
            </div>
            
            @endforeach
        </div>
    </div>
     --}}
    </x-layout>