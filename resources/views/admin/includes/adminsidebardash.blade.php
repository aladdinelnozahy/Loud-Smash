<div class="sidebar">

  <div class="sidebar-wrapper">
    <div class="logo">

      <div class="simple-text logo-normal">
       Welcome ,{{ Session()->get('u_username') }}
      </div>
    </div>
    <ul class="nav">
      <li class="active ">
        <a href="{{Route('admin.dashboard')}}">
          <i class="tim-icons icon-chart-pie-36"></i>
          <span>Dashboard</span>
          <span class="badge badge-info"></span>

        </a>
      </li>
      <li>
        <a href="{{Route('create.user')}}">
          <i class="tim-icons icon-atom"></i>
          <span>Users</span>
          <span class="badge badge-info">{{ App\Models\User::count() }}</span>
        </a>
      </li>
      <li>
        <a href="{{Route('admin.artist')}}">
          <i class="tim-icons icon-pin"></i>
          <span>Artists</span>
          <span class="badge badge-info">{{ App\Models\Artist::count() }}</span>
        </a>
      </li>
      <li>
        <a href="{{Route('admin.bands')}}">
          <i class="tim-icons icon-bell-55"></i>
          <span>Bands</span>
          <span class="badge badge-info">{{ App\Models\Band::count() }}</span>
        </a>
      </li>
      <li>
        <a href="{{Route('admin.songs')}}">
          <i class="tim-icons icon-single-02"></i>
          <span>Songs</span>
          <span class="badge badge-info">{{ App\Models\Song::count() }}</span>
        </a>
      </li>
      <li>
        <a href="{{Route('admin.events')}}">
          <i class="tim-icons icon-puzzle-10"></i>
          <span>Events</span>
          <span class="badge badge-info">{{ App\Models\Event::count() }}</span>
        </a>
      </li>
      
      <li>
        <a href="{{Route('admin.categories')}}">
          <i class="tim-icons icon-align-center"></i>
          <span>Categories</span>
          <span class="badge badge-info">{{ App\Models\Category::count() }}</span>
        </a>
      </li>

    </ul>
  </div>
</div>
