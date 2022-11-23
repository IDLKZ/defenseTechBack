<li class="nav-item {{ Request::is('information*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('information.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Information</span>
    </a>
</li>
<li class="nav-item {{ Request::is('announcements*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('announcements.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Announcements</span>
    </a>
</li>
<li class="nav-item {{ Request::is('newsCategories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('newsCategories.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>News Categories</span>
    </a>
</li>
<li class="nav-item {{ Request::is('news*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('news.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>News</span>
    </a>
</li>
