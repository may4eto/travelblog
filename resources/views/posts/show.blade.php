<x-layout>
  <x-slot name="title">SHOW</x-slot>
  <div class="post-body container-fluid page-container min-vh-100">
    <div class="row">
      <div class="col-12 col-md-8 post-text my-5 p-3 p-md-5">
        <h1 class="text-center">{{$post->title}}</h1>
        <p class="mb-4 text-center">
          <span class="lead mr-2">{{$post->name}} {{$post->surname}}</span>
          <span class="small">{{$post->created_at}}</span>
        </p>
        <p class="post-description">
          {{$post->description}}
        </p> 
        <div class="row">
          <div class="col-12">
            <a href="{{route('posts.edit', compact('post'))}}" class="btn btn-outline-dark mr-4">Modifica il post</a>
            <button type="button" data-toggle="modal" data-target="#delete" class="btn btn-outline-danger">Elimina il post</button> 
          </div>
        </div>
      </div>      
    </div>
  </div>
  
  <!-- DELETE MODAL -->
  
  <div class="modal" id="delete" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center">Eliminazione</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Sei davvero sicuro di voler eliminare il post?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Chiudi</button>
          <form action="{{route('posts.destroy', compact('post'))}}" method="POST" class="d-inline">
            @method ('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger my-2">Sì, elimina il post</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
</x-layout>