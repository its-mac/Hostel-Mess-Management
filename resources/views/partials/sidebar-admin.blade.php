@section('sidebar')
    <ul class="pc-navbar">

        <li class="pc-item pc-caption">
            <label data-i18n="Navigation">Navigation</label>
        </li>
        <li class="pc-item @if (request()->routeIs('admin.dashboard')) active @endif">
            <a href="{{ route('admin.dashboard') }}" class="pc-link"> <span class="pc-micon">
                    <i class="ph ph-house-line"></i>
                </span>
                <span class="pc-mtext" data-i18n="Dashboard">Dashboard</span>
            </a>
        </li>

        <li class="pc-item pc-caption">
            <label data-i18n="Business Operations">Business Operations</label>
            <i class="ph ph-briefcase"></i>
        </li>

        <li class="pc-item pc-hasmenu @if (request()->routeIs('hostels.*', 'mess-plans.*', 'rules-policies.*')) active @endif">
            <a href="#!" class="pc-link">
                <span class="pc-micon">
                    <i class="ph ph-gear"></i>
                </span>
                <span class="pc-mtext" data-i18n="Setup & Config">Setup & Config</span>
                <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
            </a>
            <ul class="pc-submenu @if (request()->routeIs('hostels.*', 'mess-plans.*', 'rules-policies.*')) show @endif">
                <li class="pc-item @if (request()->routeIs('hostels.*')) active @endif"><a class="pc-link"
                        href="{{ route('hostels.index') }}" data-i18n="Manage Hostels">Manage
                        Hostels</a></li>
                <li class="pc-item @if (request()->routeIs('mess-plans.*')) active @endif"><a class="pc-link"
                        href="{{ route('mess-plans.index') }}" data-i18n="Mess Plans">Mess
                        Plans</a></li>
                <li class="pc-item @if (request()->routeIs('rules-policies.*')) active @endif"><a class="pc-link"
                        href="{{ route('rules-policies.index') }}" data-i18n="Rules & Policies">Rules & Policies</a></li>
            </ul>
        </li>

        <li class="pc-item pc-hasmenu @if (request()->routeIs('admin.managers*', 'admin.students*')) active @endif">
            <a href="#!" class="pc-link">
                <span class="pc-micon">
                    <i class="ph ph-users"></i>
                </span>
                <span class="pc-mtext" data-i18n="User Management">User Management</span>
                <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
            </a>
            <ul class="pc-submenu @if (request()->routeIs('admin.managers*', 'admin.students*')) show @endif">
                <li class="pc-item @if (request()->routeIs('admin.managers*')) active @endif"><a class="pc-link"
                        href="{{ route('admin.managers') }}" data-i18n="Managers">Managers
                        (Wardens)</a></li>
                <li class="pc-item @if (request()->routeIs('admin.students*')) active @endif"><a class="pc-link"
                        href="{{ route('admin.students') }}" data-i18n="All Students">All
                        Students</a></li>
            </ul>
        </li>

        <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
                <span class="pc-micon">
                    <i class="ph ph-coins"></i>
                </span>
                <span class="pc-mtext" data-i18n="Finance & Reports">Finance & Reports</span>
                <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
            </a>
            <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="{{ route('admin.revenue') }}"
                        data-i18n="Revenue Overview">Revenue Overview</a></li>
                <li class="pc-item"><a class="pc-link" href="{{ route('admin.pending-payments') }}"
                        data-i18n="Pending Payments">Pending Payments</a></li>
                <li class="pc-item"><a class="pc-link" href="{{ route('admin.collection-tracking') }}"
                        data-i18n="Collection Tracking">Collection Tracking</a></li>
                <li class="pc-item"><a class="pc-link" href="{{ route('admin.reports') }}"
                        data-i18n="Download Reports">Download Reports</a></li>
            </ul>
        </li>

        <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
                <span class="pc-micon">
                    <i class="ph ph-chart-line-up"></i>
                </span>
                <span class="pc-mtext" data-i18n="Monitoring">Monitoring</span>
                <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
            </a>
            <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="{{ route('admin.occupancy-rates') }}"
                        data-i18n="Occupancy Rates">Occupancy Rates</a></li>
                <li class="pc-item"><a class="pc-link" href="{{ route('admin.attendance-trends') }}"
                        data-i18n="Attendance Trends">Attendance Trends</a></li>
                <li class="pc-item"><a class="pc-link" href="{{ route('admin.complaints-stats') }}"
                        data-i18n="Complaint Stats">Complaint Stats</a></li>
                <li class="pc-item"><a class="pc-link" href="{{ route('admin.manager-performance') }}"
                        data-i18n="Manager Performance">Manager Performance</a></li>
            </ul>
        </li>

    </ul>
@endsection
