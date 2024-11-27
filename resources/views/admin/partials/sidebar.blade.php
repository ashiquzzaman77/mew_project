<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Template</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i></div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li class="menu-label">Frontend Section</li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
                </div>
                <div class="menu-title">eCommerce</div>
            </a>
            <ul>
                <li> <a href="ecommerce-products.html"><i class='bx bx-radio-circle'></i>Products</a>
                </li>
                <li> <a href="ecommerce-products-details.html"><i class='bx bx-radio-circle'></i>Product
                        Details</a>
                </li>
            </ul>
        </li>

        {{-- Role & Permission  --}}

        {{-- @if (Auth::guard('admin')->user()->can('role.menu')) --}}
        <li class="menu-label">Role & Permission</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
                </div>
                <div class="menu-title">Role & Permission</div>
            </a>
            <ul>
                {{-- @if (Auth::guard('admin')->user()->can('all.role')) --}}
                <li> <a href="{{ route('all.role') }}"><i class='bx bx-radio-circle'></i>All Role</a>
                </li>
                {{-- @endif --}}
                {{-- @if (Auth::guard('admin')->user()->can('all.role')) --}}
                <li> <a href="{{ route('all.permission') }}"><i class='bx bx-radio-circle'></i>All
                        Permission</a>
                </li>
                {{-- @endif --}}
            </ul>
        </li>
        {{-- @endif --}}

        {{-- Role & Permission  --}}

        {{-- Site Setting --}}
        <li class="menu-label">Site Setting</li>
        <li>
            <a href="https://themeforest.net/user/codervent" target="_blank">
                <div class="parent-icon"><i class="bx bx-message-square-edit"></i>
                </div>
                <div class="menu-title">Setting</div>
            </a>
        </li>
        {{-- Site Setting --}}

    </ul>
    <!--end navigation-->
</div>
