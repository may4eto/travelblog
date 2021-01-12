<x-layout>
    <x-slot name="title">CREATE</x-slot>
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
        <div class="row">
            <div class="col-12">
                <h1 class="mt-5 mb-3 text-center">Modifica il tuo post</h1>
            </div>
            <div class="col-12 col-md-8 offset-md-2 p-5">
                <form action={{route('posts.update', compact('post'))}} method="POST">
                    @method ('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" value="{{$post->title}}" class="form-control" id="exampleFormControlInput1" name="title">
                    </div>
                    <div class="form-group">
                      <label for="description">Scrivi il tuo post</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="description">
                            {{$post->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Pubblica post</button>
                  </form>
            </div>
        </div>
    </div>
    </x-layout>