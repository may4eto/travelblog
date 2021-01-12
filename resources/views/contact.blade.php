<x-layout>
    <x-slot name="title">CONTACT</x-slot>
    <div class="contact page-container container-fluid min-vh-100">
        <div class="row pt-4">
            <div class="col-12 col-md-8 offset-md-2">
                @if (session('message'))
                <div class="alert alert-success text-center">
                {{ session('message') }}
                </div>
                @endif
            </div>
        </div>
        <div class="row py-5">
            <div class="col-12 col-md-8 offset-md-2 p-5 bg-white">
                <h1 class="mb-4 text-center">Contattaci!</h1>
                <form action={{route('contact_save')}} method="POST">
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
                        <label for="title">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="mario.rossi@gmail.com" name="email">
                    </div>
                    <div class="form-group">
                      <label for="description">Scrivi il tuo messaggio</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-dark mb-2">Invia</button>
                  </form>
            </div>
        </div>
    </div>
    </x-layout>