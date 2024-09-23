<ul class="menu">
    <li class="sidebar-title">Menu</li>

    <li class="sidebar-item {{ request()->url() === route('member') ? 'active' : '' }}">
        <a href="https://guntursatya.com/member/" class="sidebar-link">
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item {{ request()->url() === route('myproduct') ? 'active' : '' }}">
        <a href="{{ route('myproduct') }}" class="sidebar-link">
            <i class="bi bi-basket-fill"></i>
            <span>My Products</span>
        </a>
    </li>
    <li class="sidebar-item {{ request()->url() === route('produtcs') ? 'active' : '' }}">
        <a href="{{ route('produtcs') }}" class="sidebar-link">
            <i class="bi bi-cart-plus-fill"></i>
            <span>Products</span>
        </a>
    </li>
    {{-- @if (Auth::user()->hasproduct) --}}
    <li class="sidebar-item {{ request()->is('member/daftardomain/' . Auth::user()->id) ? 'active' : '' }}">
        <a href="{{ route('daftardomain', ['id' => Auth::user()->id]) }}" class="sidebar-link">
            <i class="bi bi-globe"></i>
            <span>Domains</span>
        </a>
    </li>
    <li class="sidebar-item {{ request()->is('member/affiliate/' . Auth::user()->id) ? 'active' : '' }}">
        <a href="{{ route('affiliate', ['id' => Auth::user()->id]) }}" class="sidebar-link">
            <i class="bi bi-people"></i>
            <span>Affiliate</span>
        </a>
    </li>
    
{{-- @endif --}}

    @if (Auth::user()->role == 'admin')
        <li class="sidebar-title">Admin</li>
        <li class="sidebar-item {{ request()->url() === route('kelolamember') ? 'active' : '' }}">
            <a href="{{ route('kelolamember') }}" class="sidebar-link">
                <i class="bi bi-people-fill"></i>
                <span>Kelola Member</span>
            </a>
        </li>
    @endif
    {{-- <li class="sidebar-title">Pages</li>

    <li class="sidebar-item">
        <a href="application-checkout.html" class="sidebar-link">
            <i class="bi bi-basket-fill"></i>
            <span>Checkout Page</span>
        </a>
    </li>

    <li class="sidebar-title">Raise Support</li>
    <li class="sidebar-title">Raise Support</li>

    <li class="sidebar-item">
        <a href="https://zuramai.github.io/mazer/docs" class="sidebar-link">
            <i class="bi bi-life-preserver"></i>
            <span>Documentation</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a href="https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md" class="sidebar-link">
            <i class="bi bi-puzzle"></i>
            <span>Contribute</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a href="https://github.com/zuramai/mazer#donation" class="sidebar-link">
            <i class="bi bi-cash"></i>
            <span>Donate</span>
        </a>
    </li> --}}
</ul>
