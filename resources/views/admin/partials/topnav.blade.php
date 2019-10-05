<form class="form-inline mr-auto" action="{{ route('admin.users') }}">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
        </ul>
        <div class="search-element">
            <input class="form-control" value="{{ Request::get('query') }}" name="query" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            {{-- @include('admin.partials.searchhistory') --}}
        </div>
    </form>
    <ul class="navbar-nav navbar-right">
    <li class="dropdown nav-link nav-link-user">{{ Auth::user()->roles[0]->name }}</li>
  <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
    <div class="dropdown-menu dropdown-list dropdown-menu-right">
      <div class="dropdown-header">Messages
        <div class="float-right">
          <a href="#">Mark All As Read</a>
        </div>
      </div>
      <div class="dropdown-list-content dropdown-list-message">
        <a href="#" class="dropdown-item dropdown-item-unread">
          <div class="dropdown-item-avatar">
            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle">
            <div class="is-online"></div>
          </div>
          <div class="dropdown-item-desc">
            <b>Kusnaedi</b>
            <p>Hello, Bro!</p>
            <div class="time">10 Hours Ago</div>
          </div>
        </a>
        <a href="#" class="dropdown-item dropdown-item-unread">
          <div class="dropdown-item-avatar">
            <img alt="image" src="../assets/img/avatar/avatar-2.png" class="rounded-circle">
          </div>
          <div class="dropdown-item-desc">
            <b>Dedik Sugiharto</b>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="time">12 Hours Ago</div>
          </div>
        </a>
        <a href="#" class="dropdown-item dropdown-item-unread">
          <div class="dropdown-item-avatar">
            <img alt="image" src="../assets/img/avatar/avatar-3.png" class="rounded-circle">
            <div class="is-online"></div>
          </div>
          <div class="dropdown-item-desc">
            <b>Agung Ardiansyah</b>
            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="time">12 Hours Ago</div>
          </div>
        </a>
        <a href="#" class="dropdown-item">
          <div class="dropdown-item-avatar">
            <img alt="image" src="../assets/img/avatar/avatar-4.png" class="rounded-circle">
          </div>
          <div class="dropdown-item-desc">
            <b>Ardian Rahardiansyah</b>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
            <div class="time">16 Hours Ago</div>
          </div>
        </a>
        <a href="#" class="dropdown-item">
          <div class="dropdown-item-avatar">
            <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle">
          </div>
          <div class="dropdown-item-desc">
            <b>Alfa Zulkarnain</b>
            <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
            <div class="time">Yesterday</div>
          </div>
        </a>
      </div>
      <div class="dropdown-footer text-center">
          <a href="#">View All <i class="fas fa-chevron-right"></i></a>
        </div>
    </div>
</li>
  <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg{{ Auth::user()->unreadNotifications->count() ? ' beep' : '' }}"><i class="far fa-bell"></i></a>
    <div class="dropdown-menu dropdown-list dropdown-menu-right">
      <div class="dropdown-header">Notifications
        <div class="float-right">
          <a href="#">Mark All As Read</a>
        </div>
      </div>
      <div class="dropdown-list-content dropdown-list-icons">
        @if(Auth::user()->unreadNotifications->count())
        @for($i = 1; $i < 40; $i++)
        <a href="#" class="dropdown-item dropdown-item-unread">
          <div class="dropdown-item-icon bg-primary text-white">
            <i class="fas fa-code"></i>
          </div>
          <div class="dropdown-item-desc">
            Template update is available now!
            <div class="time text-primary">2 Min Ago</div>
          </div>
        </a>
        @endfor
        @else
        <p class="text-muted p-2 text-center">No notifications found!</p>
        @endif
    </div>
  </li>
  <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
    <img alt="image" src="{{ Auth::user()->avatarlink }}" class="rounded-circle mr-1">
    <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div></a>
    <div class="dropdown-menu dropdown-menu-right">
      <div class="dropdown-title">Welcome, {{ Auth::user()->name }}</div>
      <a href="{{ Auth::user()->profilelink }}" class="dropdown-item has-icon">
        <i class="far fa-user"></i> Profile Settings
      </a>
      <div class="dropdown-divider"></div>
      <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger">
        <i class="fas fa-sign-out-alt"></i> Logout
      </a>
    </div>
  </li>
</ul>
