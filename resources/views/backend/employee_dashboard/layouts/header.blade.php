<div class="app-header header-shadow">
    <div class="app-header__logo">
        {{-- <div class="logo-src"></div> --}}
        <img src="{{ asset('backend/images/tarot-logo2.png') }}" height="55px" width="120px">
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
    <div class="app-header__content">

        <div class="app-header-right">
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <a  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    <img width="42" class="rounded-circle" src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&background=0D8ABC&color=fff" alt="">
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>
                                <div tabindex="-1" role="menu"  class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ route('detail.employee') }}" tabindex="0" class="dropdown-item">User Account</a>

                                        <a href="{{ route('emp.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">Logout</a>
                                            <form id="logout-form" action="{{ route('emp.logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>

                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">
                                {{ Str::upper(Auth::user('emp_user')->name) }}
                            </div>
                            <div class="widget-subheading">
                                {{ Auth::user('emp_user')->phone }}
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


