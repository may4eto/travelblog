<nav id="nav" class="navbar navbar-expand-lg fixed-top">
<a class="navbar-brand" href="{{route('home')}}"><img src="/img/logo.png" alt="logo" class="img-fluid rounded" width="200px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-globe-africa fa-2x text-muted"></i>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{route('posts.index')}}">Posts</a>
        </li>
        <li class="nav-item">
         <a class="nav-link text-dark" href="{{route('chi-siamo')}}">Chi siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{route('contatti')}}">Contatti</a>
        </li>
        <li class="nav-item">
          <button class="px-0 py-2 border-0 d-block d-lg-none bg-transparent text-dark" type="button" data-toggle="modal" data-target="#search">Cerca</button>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2 d-none d-lg-inline" type="search" placeholder="Cerca">
        <button class="search bg-transparent my-2 my-sm-0 d-none d-lg-inline" type="submit"><i class="fas fa-search d-none d-lg-inline text-muted"></i></button>
        <button class="btn btn-outline-dark my-2 my-sm-0 ml-lg-5" type="submit">Accedi</button>
      </form>
    </div>
  </nav>