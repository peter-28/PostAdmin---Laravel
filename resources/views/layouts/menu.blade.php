<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ request()->routeIs('/admin/dashboard') ? 'c-active' : '' }}"
       href="{{route('dashboard')}}">
        <i class="c-sidebar-nav-icon bi bi-house" style="line-height: 1;"></i> Home
    </a>
</li>
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ request()->routeIs('fhk.*') ? 'c-active' : '' }}" href="{{route('fhk.index')}}">
        <i class="c-sidebar-nav-icon bi bi-file-break" style="line-height: 1;"></i> FHK
    </a>
</li>
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ request()->routeIs('/admin/pendamping-fhk') ? 'c-active' : '' }}"
       href="/admin/pendamping-fhk">
        <i class="c-sidebar-nav-icon bi bi-file-earmark-word" style="line-height: 1;"></i> Pendamping FHK
    </a>
</li>
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ request()->routeIs('/product') ? 'c-active' : '' }}" href="/product">
        <i class="c-sidebar-nav-icon bi bi-people" style="line-height: 1;"></i> Data Gembala
    </a>
</li>
<li class="c-sidebar-nav-item c-sidebar-nav-dropdown {{ request()->routeIs('roles*') ? 'c-show' : '' }}">
    <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
        <i class="c-sidebar-nav-icon bi bi-person-circle" style="line-height: 1;"></i> User
    </a>
    <ul class="c-sidebar-nav-dropdown-items">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link {{ request()->routeIs('users.create') ? 'c-active' : '' }}" href="#">
                <i class="c-sidebar-nav-icon bi bi-person-plus" style="line-height: 1;"></i> Verify User
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link {{ request()->routeIs('users*') ? 'c-active' : '' }}" href="#">
                <i class="c-sidebar-nav-icon bi bi-person-lines-fill" style="line-height: 1;"></i> Data Users
            </a>
        </li>
    </ul>
</li>
