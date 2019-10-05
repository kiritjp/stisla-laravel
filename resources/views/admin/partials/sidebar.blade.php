<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="{{ route('admin.dashboard') }}">{{ config('app.name') }}</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="index.html">TCP</a>
  </div>
  <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="{{ Request::route()->getName() == 'admin.dashboard' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
      @if(Auth::user()->can('login-super-admin'))
      <li class="menu-header">Users</li>
      <li class="{{ Request::route()->getName() == 'admin.users' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.users') }}"><i class="fas fa-users"></i> <span>Users</span></a></li>
      @endif
    </ul>
</aside>
