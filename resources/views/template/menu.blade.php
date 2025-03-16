@if (Auth::user()->isAdmin == true)
<ul class="sidebar-menu" id="sidebar-menu">
    <li class="dropdown">
        <a href="javascript:void(0)">
            <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
            <span>Dashboard</span>
        </a>
        <ul class="sidebar-submenu">
            <li>
                <a href="{{route('dashboard')}}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Dashboard</a>
            </li>
        </ul>
    </li>
    <li class="sidebar-menu-group-title">Menu</li>
    <li>
        <a href="/">
            <iconify-icon icon="mage:email" class="menu-icon"></iconify-icon>
            <span>Pengaduan Masuk</span>
        </a>
    </li>
</ul>
@else
<ul class="sidebar-menu" id="sidebar-menu">
    <li class="dropdown">
        <a href="javascript:void(0)">
            <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
            <span>Dashboard</span>
        </a>
        <ul class="sidebar-submenu">
            <li>
                <a href="{{route('dashboard.user')}}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Dashboard</a>
            </li>
        </ul>
    </li>
    <li class="sidebar-menu-group-title">Menu</li>
    <li>
        <a href="{{route('laporan.index')}}">
            <iconify-icon icon="mage:email" class="menu-icon"></iconify-icon>
            <span>Pengaduan Saya</span>
        </a>
    </li>
</ul>
@endif