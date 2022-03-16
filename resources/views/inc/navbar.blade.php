<nav class="navbar navbar-expand-lg navbar-dark bg-dark lowerMargin">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/lsapp/public">{{config("app.name", "LSAPP")}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/lsapp/public">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/lsapp/public/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/lsapp/public/services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/lsapp/public/posts">Blog</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li><a class="nav-link" href="/lsapp/public/posts/create">Create Post</a></li>
        </ul>
        
      </div>
    </div>
  </nav>