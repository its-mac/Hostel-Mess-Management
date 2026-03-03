@section('sidebar')
    <ul class="pc-navbar">

        <li class="pc-item pc-caption">
            <label data-i18n="Navigation">Navigation</label>
        </li>
        <li class="pc-item">
            <a href="{{ route('manager.dashboard') }}" class="pc-link">
                <span class="pc-micon">
                    <i class="ph ph-house-line"></i>
                </span>
                <span class="pc-mtext" data-i18n="Dashboard">Dashboard</span>
            </a>
        </li>

        <li class="pc-item pc-caption">
            <label data-i18n="Daily Operations">Daily Operations</label>
            <i class="ph ph-list-dashes"></i>
        </li>

        <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
                <span class="pc-micon">
                    <i class="ph ph-buildings"></i>
                </span>
                <span class="pc-mtext" data-i18n="Hostel Management">Hostel Management</span>
                <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
            </a>
            <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Room Availability">Room Availability</a></li>
                <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Assign Rooms">Assign Rooms</a></li>
                <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Room Maintenance">Room Maintenance</a></li>
                <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Check-In/Out">Check-In / Check-Out</a></li>
            </ul>
        </li>

        <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
                <span class="pc-micon">
                    <i class="ph ph-cooking-pot"></i>
                </span>
                <span class="pc-mtext" data-i18n="Mess Management">Mess Management</span>
                <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
            </a>
            <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Daily Attendance">Daily Attendance</a></li>
                <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Update Menu">Update Menu</a></li>
                <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Mess Holidays">Mess Holidays</a></li>
            </ul>
        </li>

        <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
                <span class="pc-micon">
                    <i class="ph ph-users"></i>
                </span>
                <span class="pc-mtext" data-i18n="Student Approvals">Student Approvals</span>
                <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
                <span class="pc-badge" style="background: #dc3545; color: white; border-radius: 10px; font-size: 9px; padding: 2px 6px;">New</span>
            </a>
            <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Hostel Applications">Hostel Applications</a></li>
                <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Mess Enrollments">Mess Enrollments</a></li>
                <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Leave Requests">Leave Requests</a></li>
                <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Room Changes">Room Changes</a></li>
            </ul>
        </li>

        <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
                <span class="pc-micon">
                    <i class="ph ph-receipt"></i>
                </span>
                <span class="pc-mtext" data-i18n="Payments & Fines">Payments & Fines</span>
                <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
            </a>
            <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Verify Payments">Verify Payments</a></li>
                <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Generate Invoices">Generate Invoices</a></li>
                <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Apply Fines">Apply Fines</a></li>
            </ul>
        </li>

        <li class="pc-item">
            <a href="#!" class="pc-link">
                <span class="pc-micon">
                    <i class="ph ph-chat-teardrop-text"></i>
                </span>
                <span class="pc-mtext" data-i18n="Complaints">Complaints</span>
            </a>
        </li>

    </ul>
@endsection
