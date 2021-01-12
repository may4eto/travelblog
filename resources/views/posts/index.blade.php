<x-layout>
<x-slot name="title">INDEX</x-slot>
<div class="container page-container">
    <div class="row mt-4">
        <div class="col-12 col-md-8 offset-md-2">
            @if (session('message'))
            <div class="alert alert-success text-center">
            {{ session('message') }}
            </div>
            @endif
        </div>
    </div>
    <div class="row my-3 my-md-5">
        <div class="col-12">
            <h1 class="mb-5 text-center">I nostri ultimi viaggi</h1>
        </div>
        @foreach ($posts as $post)
        <div class="col-12 col-md-6 col-lg-4 mb-5">
            <div class="card shadow rounded border-0">
                <img src="https://picsum.photos/300/200" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h2 class="card-title text-truncate">{{$post->title}}</h2>
                    <p class="card-text lead">{{$post->name}} {{$post->surname}} <br>
                        <span class="d-block small">{{$post->created_at}}</span>
                    </p>
                    <p class="card-text text-truncate">{{$post->description}}</p>
                    <a href="{{route('posts.show', compact('post'))}}" class="btn btn-outline-dark d-block">Visualizza il post</a>
                </div>
            </div>
        </div>
        @endforeach 
    </div>
</div>
</x-layout>