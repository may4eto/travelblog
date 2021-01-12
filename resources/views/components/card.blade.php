
<div class="card" style="width: 18rem;">
    <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$post->title}}}</h5>
        <p class="card-text"><small>{{$post->name}} {{$post->surname}}</small></p>
        <h6>{{$post->created_at}}</h6>
        <p class="card-text">{{$post->description}}</p>
        <a href="{{route('posts.show', compact('post'))}}" class="btn btn-primary mr-2">Vai al post</a>
        <form action="{{route('posts.destroy', compact('post'))}}">
        <button type="submit" class="btn btn-danger mb-2">Elimina post</button>
        </form>
    </div>
</div>

