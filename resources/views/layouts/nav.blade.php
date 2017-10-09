<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    <a class="navbar-brand" href='{!! url('/'); !!}'>Dashboard</a>
    <div class="navbar-collapse" id="navbars">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href='{!! url('/bikes/api'); !!}'>Bikes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='{!! url('/pedestrians/api'); !!}'>Pedestrians</a>
        </li>
      </ul>
      <!-- Search bar; Not required but keep as a contingency -->
      <!-- <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
    </div>
</nav>
