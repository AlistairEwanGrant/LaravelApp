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
            <a class="nav-link" href="/lsapp/public/home">Home</a>
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
                
              
            </ul>

              @if (Auth::guest())
                  <li><a class="text-decoration-none" href="{{ route('login') }}">Login</a></li>
                  <li><a class="text-decoration-none" href="{{ route('register') }}">Register</a></li>
              @else
              
              
              <div class="btn-group">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
                </button>
                                           
                     
                      <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                          <li><a class="dropdown-item" href="/lsapp/public/home">Home</a></li>
                          <li><a class="dropdown-item" href="/lsapp/public/posts/create">Create Post</a></li>
                          <li>
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                  Logout
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
                      </ul>
                    </div>
              @endif
            </ul>
        </div>
    </div>
</nav>
      </div>
    </div>
  </nav>