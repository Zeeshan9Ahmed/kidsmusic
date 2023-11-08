<?php $active = ($path == "admin/technicians" || $path == "admin/blocked-users"?"active":""); ?>
<li class="nav-item has-treeview {{ ($active == 'active'?"menu-open":"") }}" >
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>Users <i class="right fas fa-angle-left"></i></p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route("admin.users") }}" class="nav-link {{ ($path == "admin/users"?"active":"") }}">
                <i class="nav-icon far fa-circle nav-icon"></i>
                <p>Users List</p>
            </a>
        </li>
        @if (auth()->user()->role === 'admin' && auth()->user()->can_edit === 1)

        <li class="nav-item">
            <a href="{{ route("admin.sub_admin") }}" class="nav-link {{ ($path == "admin/sub-admins"?"active":"") }}">
                <i class="nav-icon far fa-circle nav-icon"></i>
                <p>Sub Admin List</p>
            </a>
        </li>
        @endif
    </ul>
</li>