<x-layout>
    <x-slot name="title">CREATE</x-slot>
    <div class="new-post page-container container-fluid min-vh-100">
        <div class="row pt-4">
            <div class="col-12 col-md-8 offset-md-2">
                @if (session()->has('success'))
                <div class="alert alert-success">
                    {!! session()->get('success')!!}        
                </div>
                @endif
            </div>
        </div>
        <div class="row py-5">
            <div class="col-12 col-md-8 offset-md-2 p-5 bg-white">
                <h1 class="mb-4 text-center">Crea un nuovo post</h1>
                <form action={{route('posts.store')}} method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Mario" name="name">
                    </div>
                    <div class="form-group">
                        <label for="surname">Cognome</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Rossi" name="surname">
                    </div>
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Titolo del post" name="title">
                    </div>
                    <div class="form-group">
                        <label for="description">Scrivi il tuo post</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark mb-2">Pubblica post</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>