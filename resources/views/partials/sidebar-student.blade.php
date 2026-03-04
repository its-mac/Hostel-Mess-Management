@section('sidebar')
    <ul class="pc-navbar">

        <li class="pc-item pc-caption">
            <label data-i18n="Navigation">Navigation</label>
        </li>
        <li class="pc-item">
            <a href="{{ route('student.dashboard') }}" class="pc-link">
                <span class="pc-micon">
                    <i class="ph ph-house-line"></i>
                </span>
                <span class="pc-mtext" data-i18n="Dashboard">Dashboard</span>
            </a>
        </li>

        <li class="pc-item pc-caption">
            <label data-i18n="My Portal">My Portal</label>
            <i class="ph ph-user-circle"></i>
        </li>

        <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
                <span class="pc-micon">
                    <i class="ph ph-door"></i>
                </span>
                <span class="pc-mtext" data-i18n="My Hostel">My Hostel</span>
                <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
            </a>
            <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="{{ route('student.hostel-apply') }}"
                        data-i18n="Apply / Status">Apply / Status</a></li>
                <li class="pc-item"><a class="pc-link" href="{{ route('student.room-details') }}"
                        data-i18n="Room Details">Room Details & Mates</a></li>
                <li class="pc-item"><a class="pc-link" href="{{ route('student.apply-leave') }}"
                        data-i18n="Apply for Leave">Apply for Leave</a></li>
                <li class="pc-item"><a class="pc-link" href="{{ route('student.request-room-change') }}"
                        data-i18n="Request Room Change">Request Room Change</a></li>
            </ul>
        </li>

        <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
                <span class="pc-micon">
                    <i class="ph ph-bowl-food"></i>
                </span>
                <span class="pc-mtext" data-i18n="My Mess">My Mess</span>
                <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
            </a>
            <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="{{ route('student.enrollment-plan') }}"
                        data-i18n="Enrollment & Plan">Enrollment & Plan</a></li>
                <li class="pc-item"><a class="pc-link" href="{{ route('student.daily-menu') }}" data-i18n="Daily Menu">Daily
                        Menu</a></li>
                <li class="pc-item"><a class="pc-link" href="{{ route('student.meal-attendance') }}"
                        data-i18n="Meal Attendance">Meal Attendance</a></li>
                <li class="pc-item"><a class="pc-link" href="{{ route('student.pause-service') }}"
                        data-i18n="Pause Service">Pause Service</a></li>
            </ul>
        </li>

        <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
                <span class="pc-micon">
                    <i class="ph ph-credit-card"></i>
                </span>
                <span class="pc-mtext" data-i18n="Payments">Payments</span>
                <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
            </a>
            <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="{{ route('student.pay-fees') }}" data-i18n="Pay Fees">Pay
                        Fees</a></li>
                <li class="pc-item"><a class="pc-link" href="{{ route('student.payment-history') }}"
                        data-i18n="Payment History">Payment History</a></li>
                <li class="pc-item"><a class="pc-link" href="{{ route('student.my-fines') }}" data-i18n="My Fines">My
                        Fines</a></li>
            </ul>
        </li>

        <li class="pc-item pc-caption">
            <label data-i18n="Support">Support</label>
        </li>
        <li class="pc-item">
            <a href="{{ route('student.notifications') }}" class="pc-link">
                <span class="pc-micon">
                    <i class="ph ph-bell-ringing"></i>
                </span>
                <span class="pc-mtext" data-i18n="Notifications">Notifications</span>
                <span class="pc-badge"
                    style="background: #ffc107; color: #212529; border-radius: 10px; font-size: 9px; padding: 2px 6px;">3</span>
            </a>
        </li>
        <li class="pc-item">
            <a href="{{ route('student.complaints') }}" class="pc-link">
                <span class="pc-micon">
                    <i class="ph ph-ticket"></i>
                </span>
                <span class="pc-mtext" data-i18n="Complaints">Complaints</span>
            </a>
        </li>

    </ul>
@endsection
