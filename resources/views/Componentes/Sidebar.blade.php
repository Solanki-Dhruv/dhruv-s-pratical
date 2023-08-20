<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header d-flex justify-content-center align-items-center">
            {{-- <a class="header-brand1" href="{{ route('dashboard') }}">
                <img src="../assets/images/brand/logo.png" class="header-brand-img desktop-logo15" alt="logo">
                <img src="../assets/images/brand/logo-3.png" class="header-brand-img toggle-logo12" alt="logo">
                <img src="../assets/images/brand/logo-3.png" class="header-brand-img light-logo12" alt="logo"> --}}
                <img src="../assets/images/brand/logo-3.png" class="header-brand-img light-logo-3" alt="logo" style="height:207%">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Main</h3>
                </li>
                {{-- <style>
                    .actives{
                        background: #FF3D01   !important;
                        color: white !important;
                        border-radius:5px !important;
                    }
                </style> --}}
                <li class="slide">
                    <a class="side-menu__item has-link {{ request()->route()->getName() == 'companies' ? 'actives' : '' }}" data-bs-toggle="slide" href="{{ route('companies') }}"><i
                            class="side-menu__icon fa fa-bank {{ request()->route()->getName() == 'companies' ? 'actives' : '' }}"></i><span class="side-menu__label ">Company</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link {{ request()->route()->getName() == 'usersList' ? 'actives' : '' }}" data-bs-toggle="slide" href="{{ route('usersList') }}"><i
                            class="side-menu__icon fa fa-users {{ request()->route()->getName() == 'usersList' ? 'actives' : '' }}"></i><span class="side-menu__label ">Users</span></a>
                </li>

            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                    height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </div>
    <!--/APP-SIDEBAR-->
</div>
