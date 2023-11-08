<?php $active = ($path == "admin/technicians" || $path == "admin/blocked-users"?"active":""); ?>
<li class="nav-item has-treeview {{ ($active == 'active'?"menu-open":"") }}" >
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>Levels <i class="right fas fa-angle-left"></i></p>
    </a>
    <ul class="nav nav-treeview">
        @if (auth()->user()->role === 'admin' && auth()->user()->can_edit === 1)
        <li class="nav-item">
            <a href="{{ route('admin.add.level') }}" class="nav-link {{ ($path == "admin/technicians"?"active":"") }}">
                <i class="nav-icon far fa-circle nav-icon"></i>
                <p>Add Level</p>
            </a>
        </li>
        @endif
        <li class="nav-item">
            <a href="{{ route('admin.view.levels') }}" class="nav-link {{ ($path == "admin/technicians"?"active":"") }}">
                <i class="nav-icon far fa-circle nav-icon"></i>
                <p>View</p>
            </a>
        </li>
    </ul>
</li>