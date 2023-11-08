<?php $active = ($path == "admin/generes"); ?>
<li class="nav-item {{ ($active == 'active'?"menu-open":"") }}" >
    <a href="{{ route('admin.generes.index') }}" class="nav-link {{ ($path == "admin/generes"?"active":"") }}">
        <i class="nav-icon fas fa-list"></i>
        <p>All Generes</p>
    </a>
</li>