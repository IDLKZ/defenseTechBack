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

<li class="nav-item {{ Request::is('tags*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('tags.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Tags</span>
    </a>
</li>
<li class="nav-item {{ Request::is('companies*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('companies.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Companies</span>
    </a>
</li>
<li class="nav-item {{ Request::is('awards*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('awards.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Awards</span>
    </a>
</li>
<li class="nav-item {{ Request::is('vacancies*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('vacancies.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Vacancies</span>
    </a>
</li>
<li class="nav-item {{ Request::is('categories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('categories.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Categories</span>
    </a>
</li>
<li class="nav-item {{ Request::is('shops*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('shops.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Shops</span>
    </a>
</li>
<li class="nav-item {{ Request::is('products*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('products.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Products</span>
    </a>
</li>
<li class="nav-item {{ Request::is('events*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('events.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Events</span>
    </a>
</li>
<li class="nav-item {{ Request::is('taxBreaks*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('taxBreaks.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Tax Breaks</span>
    </a>
</li>
<li class="nav-item {{ Request::is('offices*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('offices.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Offices</span>
    </a>
</li>

<li class="nav-item {{ Request::is('programms*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('programms.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Programms</span>
    </a>
</li>
<li class="nav-item {{ Request::is('reviews*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('reviews.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Reviews</span>
    </a>
</li>
