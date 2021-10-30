<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">

                <li class="app-sidebar__heading">Order </li>
                <li>
                    <a href="{{ route('order-list-admin.index') }}" class="@yield('admin-order')">
                        <i class="metismenu-icon pe-7s-shopbag">
                        </i>Order List
                    </a>
                </li>

                <li class="app-sidebar__heading"> Order History
                    <a href="" class="@yield('admin-order-history')">
                        <i class="metismenu-icon pe-7s-display2"></i> Order History
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <a href="{{ route('admin.approved') }}" class="@yield('approved-order-admin')">
                            <i class="metismenu-icon pe-7s-cart"></i> Approved Order
                        </a>
                        <a href="{{ route('admin.cancel') }}" class="@yield('cancel-order-admin')">
                            <i class="metismenu-icon pe-7s-close"></i> Cancel Order
                        </a>
                    </ul>
                </li>

                <li class="app-sidebar__heading">Admin </li>
                <li>
                    <a href="{{ route('admin-user.index') }}" class="@yield('admin-user')">
                        <i class="metismenu-icon pe-7s-users"></i> Admin Users

                    </a>

                </li>

                <li class="app-sidebar__heading">Employee </li>
                <li>
                    <a href="{{ route('employee-list.index') }}" class="@yield('employee')">
                        <i class="metismenu-icon pe-7s-users"></i>Employee List
                    </a>
                </li>




            </ul>
        </div>
    </div>
</div>
