<x-layout>
<x-slot name="title">Travel Blog</x-slot>
    <header class="masthead">
        <div class="container page-container">
          <div class="row min-vh-100 align-items-center">
            <div class="col-12 text-center">
              <h1 class="font-weight-light text-white">Benvenuti sul nostro blog!</h1>
              <a href="{{route('posts.create')}}" class="btn btn-light text-muted m-4">Nuovo post</a>
            </div>
          </div>
        </div>
      </header>

</x-layout>