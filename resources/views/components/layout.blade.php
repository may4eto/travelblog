<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <title>{{$title}}</title>
</head>
<body>

    <x-navbar />

    {{$slot}}

    <x-footer />

    <!-- SEARCH MODAL -->

    <div id="search" class="modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title">Cerca</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="input-group my-4">
                    <input type="text" class="form-control" placeholder="Cerca" aria-label="search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn-dark rounded px-3" type="submit"><i class="fas fa-search text-white"></i></button>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>