<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
  <div class="sidebar-inner px-2 pt-3">
    <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
      <div class="d-flex align-items-center">
        <div class="avatar-lg me-4">
          <img src="/assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white"
            alt="Bonnie Green">
        </div>
        <div class="d-block">
          <h2 class="h5 mb-3">Hi, {{$user['name']}}</h2>
          <a href="" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
            <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
            </svg>
            Sign Out
          </a>
        </div>
      </div>
      <div class="collapse-close d-md-none">
        <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
          aria-expanded="true" aria-label="Toggle navigation">
          <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </a>
      </div>
    </div>
    <ul class="nav flex-column pt-3 pt-md-0">
      <li class="nav-item">
        <a href="/dashboard" class="nav-link d-flex align-items-center">
          <span class="mt-1 ms-1 sidebar-text">
            LOGIFREIGHT
          </span>
        </a>
      </li>
      <li class="nav-item {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}">
        <a href="/dashboard" class="nav-link">
          <span class="sidebar-icon"> <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
              <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
            </svg></span></span>
          <span class="sidebar-text">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <span class="nav-link collapsed d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
          data-bs-target="#submenu-laravel" aria-expanded="true">
          <span>
            <span class="sidebar-icon"><i class="fab fa-laravel me-2" style="color: #fb503b;"></i></span>
            <span class="sidebar-text" style="color: #fb503b;">Members</span>
          </span>
          <span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd"></path>
            </svg></span>
        </span>
        <div class="multi-level collapse show" role="list" id="submenu-laravel" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item {{ Request::segment(1) == 'prealert' ? 'active' : '' }}">
              <a href="/profile" class="nav-link">
                <span class="sidebar-text">Pre-Alert</span>
              </a>
            </li>
            <li class="nav-item {{ Request::segment(1) == 'createprealert' ? 'active' : '' }}">
              <a href="/users" class="nav-link">
                <span class="sidebar-text">Create Pre-Alert</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <span class="nav-link collapsed d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
          data-bs-target="#submenu-components">
          <span>
            <span class="sidebar-icon"><svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path>
                <path fill-rule="evenodd"
                  d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"
                  clip-rule="evenodd"></path>
              </svg></span>
            <span class="sidebar-text">Package</span>
          </span>
          <span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd"></path>
            </svg></span>
        </span>
        <div
          class="multi-level collapse {{ Request::segment(1) == 'buttons' || Request::segment(1) == 'notifications' || Request::segment(1) == 'forms' || Request::segment(1) == 'modals' || Request::segment(1) == 'typography' ? 'show' : '' }}"
          role="list" id="submenu-components" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item {{ Request::segment(1) == 'package' ? 'active' : '' }}">
              <a class="nav-link" href="/buttons">
                <span class="sidebar-text">All Package</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ Request::segment(1) == 'transactions' ? 'active' : '' }}">
        <a href="/transactions" class="nav-link">
          <span class="sidebar-icon"><svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
              <path fill-rule="evenodd"
                d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                clip-rule="evenodd"></path>
            </svg></span>
          <span class="sidebar-text">Transactions</span>
        </a>
      </li>
      <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
      <li class="nav-item">
        <span
          class="nav-link {{ Request::segment(1) !== 'bootstrap-tables' ? 'collapsed' : '' }} d-flex justify-content-between align-items-center"
          data-bs-toggle="collapse" data-bs-target="#submenu-app">
          <span>
            <span class="sidebar-icon"><svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                  clip-rule="evenodd"></path>
              </svg></span>
            <span class="sidebar-text">Setting</span>
          </span>
          <span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd"></path>
            </svg></span>
        </span>
        <div class="multi-level collapse {{ Request::segment(1) == 'bootstrap-tables' ? 'show' : '' }}" role="list"
          id="submenu-app" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item {{ Request::segment(1) == 'bootstrap-tables' ? 'active' : '' }}">
              <a class="nav-link" href="/bootstrap-tables">
                <span class="sidebar-text">Bootstrap Tables</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</nav>