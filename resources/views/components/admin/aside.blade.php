<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('dashboard.index') }}">
                <i class="fa-solid fa-grip"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#posts" data-bs-toggle="collapse" href="#">
                <i class="fa-solid fa-envelopes-bulk"></i><span>Posts</span><i
                    class="fa-solid fa-chevron-down ms-auto"></i>
            </a>
            <ul id="posts" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('posts.create') }}">
                        <i class="fa-regular fa-circle"></i><span>Create Posts</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('posts.index') }}">
                        <i class="fa-regular fa-circle"></i><span>View Posts</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="{{ route('category.index') }}" class="nav-link collapsed">
                <i class="fa-solid fa-table-list"></i>
                <span>Categories</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('contact_us_messages') }}" class="nav-link collapsed">
                <i class="fa-solid fa-message"></i>
                <span>Client Messages</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#clients" data-bs-toggle="collapse" href="#">
                <i class="fa-solid fa-users"></i><span>Clients</span><i class="fa-solid fa-chevron-down ms-auto"></i>
            </a>
            <ul id="clients" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="#">
                        <i class="fa-regular fa-circle"></i><span>View Clients</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#sales" data-bs-toggle="collapse" href="#">
                <i class="fa-solid fa-receipt"></i><span>Sales</span><i class="fa-solid fa-chevron-down ms-auto"></i>
            </a>
            <ul id="sales" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('sales.index') }}">
                        <i class="fa-regular fa-circle"></i><span>Sales</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-regular fa-circle"></i><span>Create Quatation</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-regular fa-circle"></i><span>View Quatations</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#accounts" data-bs-toggle="collapse" href="#">
                <i class="fa-solid fa-coins"></i><span>Accounts</span><i class="fa-solid fa-chevron-down ms-auto"></i>
            </a>
            <ul id="accounts" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('accounts.index') }}">
                        <i class="fa-regular fa-circle"></i><span>Accounts</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-regular fa-circle"></i><span>Create Invoice</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-regular fa-circle"></i><span>View Invoices</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#employee" data-bs-toggle="collapse" href="#">
                <i class="fa-solid fa-users-line"></i><span>HR</span><i class="fa-solid fa-chevron-down ms-auto"></i>
            </a>
            <ul id="employee" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('employees.index') }}">
                        <i class="fa-regular fa-circle"></i><span>Employees</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-regular fa-circle"></i><span>Attendance</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#users" data-bs-toggle="collapse" href="#">
                <i class="fa-solid fa-users-gear"></i><span>Users</span><i class="fa-solid fa-chevron-down ms-auto"></i>
            </a>
            <ul id="users" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('users.index') }}">
                        <i class="fa-regular fa-circle"></i><span>View Users</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Icons Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('rtech.index') }}"><i class="fa-solid fa-home"></i>{{
                __('Home Page') }}</a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('register') }}"><i class="fa-solid fa-newspaper"></i>{{
                __('Register') }}</a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa-solid fa-right-to-bracket"></i></i>{{ __('Sign Out') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li><!-- End Login Page Nav -->

    </ul>

</aside><!-- End Sidebar-->