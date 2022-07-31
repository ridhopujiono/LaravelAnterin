<li class="nav-item {{ Request::is('kurirs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('kurirs.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Kurirs</span>
    </a>
</li>
<li class="nav-item {{ Request::is('empolyees*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('empolyees.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Empolyees</span>
    </a>
</li>
