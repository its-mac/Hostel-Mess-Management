<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
    @include('partials.head')
    <!-- [Vite Development Scripts] -->
    <!-- Development script removed for production -->

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ Sidebar Menu ] start -->
    <nav class="pc-sidebar">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="../dashboard/index.html" class="b-brand text-primary">
                    <!-- ========   Change your logo from here   ============ -->
                    <img src="images/logo-white.svg" class="img-fluid logo-lg" alt="logo" />
                </a>
            </div>
            <div class="navbar-content">
                @yield('sidebar')
            </div>
        </div>
    </nav>
    <!-- [ Sidebar Menu ] end -->
    <!-- [ Header Topbar ] start -->
    @include('partials.header')
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            @yield('content')
        </div>
    </div>
    <!-- [ Main Content ] end -->

    @include('partials.footer')

    <!-- [Page Specific JS] start -->
    <!-- apexcharts js -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/js/plugins/apexcharts.min.js') }}"></script>

    <!-- Vector maps -->
    <script src="{{ asset('assets/js/plugins/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/world.js') }}"></script>

    <!-- Enhanced Dashboard Widgets -->
    <script src="{{ asset('assets/js/widgets/world-low.js') }}"></script>
    <script src="{{ asset('assets/js/widgets/device-chart.js') }}"></script>
    <script src="{{ asset('assets/js/widgets/happy-sad-ball.js') }}"></script>

    <!-- Custom Enhanced Dashboard JS -->
    <script>
        // Enhanced KPI Charts with mini charts
        const kpiCharts = {
            totalRevenue: {
                chart: {
                    type: 'line',
                    width: 80,
                    height: 50,
                    sparkline: { enabled: true }
                },
                series: [{
                    data: [31, 40, 28, 51, 42, 85, 77]
                }],
                stroke: { width: 2, colors: ['#ffffff'] },
                tooltip: { enabled: false }
            },
            activeUsers: {
                chart: {
                    type: 'area',
                    width: 80,
                    height: 50,
                    sparkline: { enabled: true }
                },
                series: [{
                    data: [11, 32, 45, 32, 34, 52, 41]
                }],
                fill: { colors: ['#ffffff'], opacity: 0.3 },
                stroke: { colors: ['#ffffff'] },
                tooltip: { enabled: false }
            },
            orders: {
                chart: {
                    type: 'bar',
                    width: 80,
                    height: 50,
                    sparkline: { enabled: true }
                },
                series: [{
                    data: [47, 45, 54, 38, 56, 24, 65]
                }],
                colors: ['#ffffff'],
                tooltip: { enabled: false }
            },
            conversion: {
                chart: {
                    type: 'line',
                    width: 80,
                    height: 50,
                    sparkline: { enabled: true }
                },
                series: [{
                    data: [15, 75, 47, 65, 55, 70, 85]
                }],
                stroke: { width: 2, colors: ['#ffffff'], curve: 'smooth' },
                tooltip: { enabled: false }
            }
        };

        // Render KPI charts
        Object.keys(kpiCharts).forEach(chartId => {
            const element = document.querySelector(`#${chartId.replace(/([A-Z])/g, '-$1').toLowerCase()}-chart`);
            if (element) {
                new ApexCharts(element, kpiCharts[chartId]).render();
            }
        });

        // Real-time Analytics Chart
        const realTimeOptions = {
            chart: {
                type: 'area',
                height: 350,
                animations: { enabled: true, easing: 'linear', dynamicAnimation: { speed: 1000 } },
                toolbar: { show: false }
            },
            series: [{
                name: 'Sessions',
                data: [31, 40, 28, 51, 42, 85, 77, 95, 87, 73, 69, 85]
            }, {
                name: 'Page Views',
                data: [87, 76, 65, 89, 95, 76, 89, 67, 78, 95, 87, 92]
            }],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            colors: ['#4680ff', '#04a9f5'],
            fill: { opacity: 0.3 },
            stroke: { curve: 'smooth' }
        };

        if (document.querySelector('#real-time-chart')) {
            new ApexCharts(document.querySelector('#real-time-chart'), realTimeOptions).render();
        }
    </script>
    <!-- [Page Specific JS] end -->

    <!-- Required JS -->
    <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/i18next.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/i18nextHttpBackend.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <script src="{{ asset('assets/js/multi-lang.js') }}"></script>

    <!-- Theme Configuration Scripts (hardcoded based on vite.config.js values) -->
    <script>
        layout_change('light');
        change_box_container('false');
        layout_caption_change('true');
        layout_rtl_change('false');
        preset_change('preset-1');
        layout_theme_sidebar_change('false');
    </script>

    @stack('scripts')
</body>
<!-- [Body] end -->

</html>
                                    <span class="pc-arrow"><i class="ph ph-caret-right"></i></span></a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link" href="../admins/course-teacher-list.html"
                                            data-i18n="List">List</a></li>
                                    <li class="pc-item"><a class="pc-link" href="../admins/course-teacher-apply.html"
                                            data-i18n="Apply">Apply</a></li>
                                    <li class="pc-item"><a class="pc-link" href="../admins/course-teacher-add.html"
                                            data-i18n="Add">Add</a></li>
                                </ul>
                            </li>
                            <li class="pc-item pc-hasmenu">
                                <a class="pc-link" href="#!">
                                    <span data-i18n="Student">Student</span>
                                    <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link" href="../admins/course-student-list.html"
                                            data-i18n="List">list</a></li>
                                    <li class="pc-item"><a class="pc-link" href="../admins/course-student-apply.html"
                                            data-i18n="Apply">Apply</a></li>
                                    <li class="pc-item"><a class="pc-link" href="../admins/course-student-add.html"
                                            data-i18n="Add">Add</a></li>
                                </ul>
                            </li>
                            <li class="pc-item pc-hasmenu">
                                <a class="pc-link" href="#!">
                                    <span data-i18n="Courses">Courses</span>
                                    <span class="pc-arrow"><i class="ph ph-caret-right"></i></span></a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link" href="../admins/course-course-view.html"
                                            data-i18n="View">View</a></li>
                                    <li class="pc-item"><a class="pc-link" href="../admins/course-course-add.html"
                                            data-i18n="Add">Add</a></li>
                                </ul>
                            </li>
                            <li class="pc-item"><a class="pc-link" href="../admins/course-pricing.html"
                                    data-i18n="Pricing">Pricing</a></li>
                            <li class="pc-item"><a class="pc-link" href="../admins/course-site.html"
                                    data-i18n="Site">Site</a></li>
                            <li class="pc-item pc-hasmenu">
                                <a class="pc-link" href="#!">
                                    <span data-i18n="Setting">Setting</span>
                                    <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link"
                                            href="../admins/course-setting-payment.html"
                                            data-i18n="Payment">Payment</a></li>
                                    <li class="pc-item"><a class="pc-link"
                                            href="../admins/course-setting-pricing.html"
                                            data-i18n="Pricing">Pricing</a></li>
                                    <li class="pc-item"><a class="pc-link"
                                            href="../admins/course-setting-notifications.html"
                                            data-i18n="Notification">Notifications</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-users-four"></i>
                            </span>
                            <span class="pc-mtext" data-i18n="Membership">Membership</span>
                            <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
                            <span class="pc-badge"
                                style="background: #ffc107; color: #212529; width: auto; min-width: 20px; padding: 2px 6px; border-radius: 10px; font-size: 9px; font-weight: 600;">Pro</span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="../admins/membership-dashboard.html"
                                    data-i18n="Dashboard">Dashboard</a></li>
                            <li class="pc-item"><a class="pc-link" href="../admins/membership-list.html"
                                    data-i18n="List">List</a></li>
                            <li class="pc-item"><a class="pc-link" href="../admins/membership-pricing.html"
                                    data-i18n="Pricing">Pricing</a></li>
                            <li class="pc-item"><a class="pc-link" href="../admins/membership-setting.html"
                                    data-i18n="Setting">Setting</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon"><i class="ph ph-lifebuoy"></i></span>
                            <span class="pc-mtext" data-i18n="Helpdesk">Helpdesk</span>
                            <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="../admins/helpdesk-dashboard.html"
                                    data-i18n="Dashboard">Dashboard</a></li>
                            <li class="pc-item pc-hasmenu">
                                <a class="pc-link" href="#!">
                                    <span data-i18n="Ticket">Ticket</span>
                                    <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link"
                                            href="../admins/helpdesk-create-ticket.html" data-i18n="Create">Create</a>
                                    </li>
                                    <li class="pc-item"><a class="pc-link" href="../admins/helpdesk-ticket.html"
                                            data-i18n="List">List</a></li>
                                    <li class="pc-item"><a class="pc-link"
                                            href="../admins/helpdesk-ticket-details.html"
                                            data-i18n="Details">Details</a></li>
                                </ul>
                            </li>
                            <li class="pc-item"><a class="pc-link" href="../admins/helpdesk-customer.html"
                                    data-i18n="Customer">Customer</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon"><i class="ph ph-printer"></i></span><span class="pc-mtext"
                                data-i18n="Invoice">invoice</span>
                            <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="../admins/invoice-dashboard.html"
                                    data-i18n="Dashboard">Dashboard</a></li>
                            <li class="pc-item"><a class="pc-link" href="../admins/invoice-create.html"
                                    data-i18n="Create">Create</a></li>
                            <li class="pc-item"><a class="pc-link" href="../admins/invoice-view.html"
                                    data-i18n="Details">Details</a></li>
                            <li class="pc-item"><a class="pc-link" href="../admins/invoice-list.html"
                                    data-i18n="List">List</a></li>
                            <li class="pc-item"><a class="pc-link" href="../admins/invoice-edit.html"
                                    data-i18n="Edit">Edit</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-caption">
                        <label data-i18n="UI Components">UI Components</label>
                        <i class="ph ph-pencil-ruler"></i>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon"><i class="ph ph-pencil-ruler"></i></span><span class="pc-mtext"
                                data-i18n="Basic">Basic</span>
                            <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="../elements/bc_alert.html"
                                    data-i18n="Alert">Alert</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/bc_button.html"
                                    data-i18n="Button">Button</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/bc_badges.html"
                                    data-i18n="Badges">Badges</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/bc_breadcrumb.html"
                                    data-i18n="Breadcrumb">Breadcrumb</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/bc_card.html"
                                    data-i18n="Cards">Cards</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/bc_color.html"
                                    data-i18n="Color">Color</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/bc_collapse.html"
                                    data-i18n="Collapse">Collapse</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/bc_carousel.html"
                                    data-i18n="Carousel">Carousel</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/bc_dropdowns.html"
                                    data-i18n="Dropdowns">Dropdowns</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/bc_offcanvas.html"
                                    data-i18n="Offcanvas">Offcanvas</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/bc_pagination.html"
                                    data-i18n="Pagination">Pagination</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/bc_progress.html"
                                    data-i18n="Progress">Progress</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/bc_list-group.html"
                                    data-i18n="List Group">List group</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/bc_modal.html"
                                    data-i18n="Modal">Modal</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/bc_spinner.html"
                                    data-i18n="Spinner">Spinner</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/bc_tabs.html"
                                    data-i18n="Tabs & pills">Tabs & pills</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/bc_typography.html"
                                    data-i18n="Typography">Typography</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/bc_tooltip-popover.html"
                                    data-i18n="Tooltip">Tooltip</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/bc_toasts.html"
                                    data-i18n="Toasts">Toasts</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/bc_extra.html"
                                    data-i18n="Other">Other</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link"><span class="pc-micon"><i
                                    class="ph ph-briefcase"></i></span><span class="pc-mtext"
                                data-i18n="Advanced">Advance</span>
                            <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
                            <span class="pc-badge"
                                style="background: #198754; width: auto; min-width: 20px; padding: 2px 6px; border-radius: 10px; font-size: 9px; font-weight: 600;">New</span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="../elements/ac_alert.html"
                                    data-i18n="Sweet Alert">Sweet alert</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/ac_datepicker-component.html"
                                    data-i18n="Date Picker">Datepicker</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/ac_lightbox.html"
                                    data-i18n="Lightbox">Lightbox</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/ac_modal.html"
                                    data-i18n="Modal">Modal</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/ac_notification.html"
                                    data-i18n="Notification">Notification</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/ac_rangeslider.html"
                                    data-i18n="RangeSlider">Range slider</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/ac_slider.html"
                                    data-i18n="Slider">Slider</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/ac_syntax_highlighter.html"
                                    data-i18n="Syntax Highlighter">Syntax Highlighter</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/ac_tour.html"
                                    data-i18n="Tour">Tour</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/ac_treeview.html"
                                    data-i18n="Tree view">Tree view</a></li>
                        </ul>
                    </li>
                    <li class="pc-item">
                        <a href="../elements/animation.html" class="pc-link">
                            <span class="pc-micon"> <i class="ph ph-vinyl-record"></i> </span><span class="pc-mtext"
                                data-i18n="Animation">Animation</span>
                        </a>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon"> <i class="ph ph-feather"></i> </span><span class="pc-mtext"
                                data-i18n="Icons">Icons</span>
                            <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="../elements/icon-tabler.html"
                                    data-i18n="Tabler">Tabler</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/icon-phosphor.html"
                                    data-i18n="Phospher">Phosphor</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-caption">
                        <label data-i18n="Forms">Forms</label>
                        <i class="ph ph-textbox"></i>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-textbox"></i>
                            </span>
                            <span class="pc-mtext" data-i18n="Form Elements">Forms Elements</span><span
                                class="pc-arrow"><i class="ph ph-caret-right"></i></span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="../forms/form_elements.html"
                                    data-i18n="Form Basic">Form Basic</a></li>
                            <li class="pc-item"><a class="pc-link" href="../forms/form_floating.html"
                                    data-i18n="Form Floating">Form Floating</a></li>
                            <li class="pc-item"><a class="pc-link" href="../forms/form2_basic.html"
                                    data-i18n="Form Options">Form Options</a></li>
                            <li class="pc-item"><a class="pc-link" href="../forms/form2_input_group.html"
                                    data-i18n="Input Group">Input Groups</a></li>
                            <li class="pc-item"><a class="pc-link" href="../forms/form2_checkbox.html"
                                    data-i18n="Checkbox">Checkbox</a></li>
                            <li class="pc-item"><a class="pc-link" href="../forms/form2_radio.html"
                                    data-i18n="Radio">Radio</a></li>
                            <li class="pc-item"><a class="pc-link" href="../forms/form2_switch.html"
                                    data-i18n="Switch">Switch</a></li>
                            <li class="pc-item"><a class="pc-link" href="../forms/form2_megaoption.html"
                                    data-i18n="Mega Option">Mega option</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-plug-charging"></i>
                            </span>
                            <span class="pc-mtext" data-i18n="Form Plugins">Forms Plugins</span><span
                                class="pc-arrow"><i class="ph ph-caret-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item pc-hasmenu">
                                <a class="pc-link" href="#">
                                    <span data-i18n="Date">Date</span>
                                    <span class="pc-arrow"><i class="ph ph-caret-right"></i></span></a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link" href="../forms/form2_datepicker.html"
                                            data-i18n="Date Picker">Datepicker</a></li>
                                    <li class="pc-item"><a class="pc-link" href="../forms/form2_daterangepicker.html"
                                            data-i18n="Date Range Picker">Date Range Picker</a>
                                    </li>
                                    <li class="pc-item"><a class="pc-link" href="../forms/form2_timepicker.html"
                                            data-i18n="Timepicker">Timepicker</a></li>
                                </ul>
                            </li>
                            <li class="pc-item pc-hasmenu">
                                <a class="pc-link" href="#">
                                    <span data-i18n="Select">Select</span>
                                    <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link" href="../forms/form2_choices.html"
                                            data-i18n="Choices js">Choices js</a></li>
                                </ul>
                            </li>
                            <li class="pc-item"><a class="pc-link" href="../forms/form2_rating.html"
                                    data-i18n="Rating">Rating</a></li>
                            <li class="pc-item"><a class="pc-link" href="../forms/form2_recaptcha.html"
                                    data-i18n="Google-Re-Captcha">Google reCaptcha</a></li>
                            <li class="pc-item"><a class="pc-link" href="../forms/form2_inputmask.html"
                                    data-i18n="Input Mask">Input Masks</a></li>
                            <li class="pc-item"><a class="pc-link" href="../forms/form2_clipboard.html"
                                    data-i18n="ClipBoard">Clipboard</a></li>
                            <li class="pc-item"><a class="pc-link" href="../forms/form2_nouislider.html"
                                    data-i18n="Nouislider">Nouislider</a></li>
                            <li class="pc-item"><a class="pc-link" href="../forms/form2_switchjs.html"
                                    data-i18n="Bootstrap Switch">Bootstrap Switch</a></li>
                            <li class="pc-item"><a class="pc-link" href="../forms/form2_typeahead.html"
                                    data-i18n="TypeaHead">Typeahead</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-pen-nib"></i>
                            </span>
                            <span class="pc-mtext" data-i18n="Text Editor">Text Editors</span><span
                                class="pc-arrow"><i class="ph ph-caret-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="../forms/form2_tinymce.html"
                                    data-i18n="Tinymce">Tinymce</a></li>
                            <li class="pc-item"><a class="pc-link" href="../forms/form2_quill.html"
                                    data-i18n="Quill">Quill</a></li>
                            <li class="pc-item pc-hasmenu">
                                <a class="pc-link" href="#">
                                    <span data-i18n="CK editor">CK editor</span>
                                    <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link" href="../forms/editor-classic.html"
                                            data-i18n="classic">classic</a></li>
                                    <li class="pc-item"><a class="pc-link" href="../forms/editor-document.html"
                                            data-i18n="Document">Document</a></li>
                                    <li class="pc-item"><a class="pc-link" href="../forms/editor-inline.html"
                                            data-i18n="Inline">Inline</a></li>
                                    <li class="pc-item"><a class="pc-link" href="../forms/editor-balloon.html"
                                            data-i18n="Balloon">Balloon</a></li>
                                </ul>
                            </li>
                            <li class="pc-item"><a class="pc-link" href="../forms/form2_markdown.html"
                                    data-i18n="Markdown">Markdown</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-windows-logo"></i>
                            </span>
                            <span class="pc-mtext" data-i18n="Form Layouts">Form Layouts</span><span
                                class="pc-arrow"><i class="ph ph-caret-right"></i></span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="../forms/form2_lay-default.html"
                                    data-i18n="Layouts">Layouts</a></li>
                            <li class="pc-item"><a class="pc-link" href="../forms/form2_lay-multicolumn.html"
                                    data-i18n="MultiColumn">Multicolumn</a></li>
                            <li class="pc-item"><a class="pc-link" href="../forms/form2_lay-actionbars.html"
                                    data-i18n="ActionBars">Actionbars</a></li>
                            <li class="pc-item"><a class="pc-link" href="../forms/form2_lay-stickyactionbars.html"
                                    data-i18n="Sticky-ActionBar">Sticky Action bars</a>
                            </li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-cloud-arrow-up"></i>
                            </span>
                            <span class="pc-mtext" data-i18n="File Upload">File upload</span><span
                                class="pc-arrow"><i class="ph ph-caret-right"></i></span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="../forms/file-upload.html"
                                    data-i18n="Dropzone">Dropzone</a></li>
                            <li class="pc-item"><a class="pc-link" href="../forms/form2_flu-uppy.html"
                                    data-i18n="Uppy">Uppy</a></li>
                        </ul>
                    </li>
                    <li class="pc-item">
                        <a href="../forms/form2_wizard.html" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-tabs"></i>
                            </span>
                            <span class="pc-mtext" data-i18n="wizard">wizard</span></a>
                    </li>
                    <li class="pc-item">
                        <a href="../forms/form-validation.html" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-password"></i>
                            </span>
                            <span class="pc-mtext" data-i18n="Form Validation">Form Validation</span></a>
                    </li>
                    <li class="pc-item">
                        <a href="../forms/image_crop.html" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-crop"></i>
                            </span>
                            <span class="pc-mtext" data-i18n="Images Cropper">Image cropper</span>
                        </a>
                    </li>
                    <li class="pc-item pc-caption">
                        <label data-i18n="Tables">table</label>
                        <i class="ph ph-table"></i>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-table"></i>
                            </span>
                            <span class="pc-mtext" data-i18n="Bootstrap Table">Bootstrap Table</span><span
                                class="pc-arrow"><i class="ph ph-caret-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="../table/tbl_bootstrap.html"
                                    data-i18n="Basic Table">Basic table</a></li>
                            <li class="pc-item"><a class="pc-link" href="../table/tbl_sizing.html"
                                    data-i18n="Sizing table">Sizing table</a></li>
                            <li class="pc-item"><a class="pc-link" href="../table/tbl_border.html"
                                    data-i18n="Border table">Border table</a></li>
                            <li class="pc-item"><a class="pc-link" href="../table/tbl_styling.html"
                                    data-i18n="Styling table">Styling table</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-grid-nine"></i>
                            </span>
                            <span class="pc-mtext" data-i18n="Vanilla table">Vanilla Table</span><span
                                class="pc-arrow"><i class="ph ph-caret-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-simple.html"
                                    data-i18n="Basic initialization">Basic initialization</a></li>
                            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-dynamic-import.html"
                                    data-i18n="Dynamic Import">Dynamic Import</a></li>
                            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-render-column-cells.html"
                                    data-i18n="Render Column Cells">Render Column Cells</a></li>
                            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-column-manipulation.html"
                                    data-i18n="Column Manipulation">Column Manipulation</a></li>
                            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-datetime-sorting.html"
                                    data-i18n="Datetime Sorting">Datetime Sorting</a></li>
                            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-methods.html"
                                    data-i18n="Methods">Methods</a></li>
                            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-add-rows.html"
                                    data-i18n="Add Rows">Add Rows</a></li>
                            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-fetch-api.html"
                                    data-i18n="Fetch API">Fetch API</a></li>
                            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-filters.html"
                                    data-i18n="Filters">Filters</a></li>
                            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-export.html"
                                    data-i18n="Export">Export</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-columns"></i>
                            </span>
                            <span class="pc-mtext" data-i18n="Data Table">Data table</span><span class="pc-arrow"><i
                                    class="ph ph-caret-right"></i></span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="../table/dt_advance.html"
                                    data-i18n="Advance initialization">Advance initialization</a></li>
                            <li class="pc-item"><a class="pc-link" href="../table/dt_styling.html"
                                    data-i18n="Styling">Styling</a></li>
                            <li class="pc-item"><a class="pc-link" href="../table/dt_api.html"
                                    data-i18n="API">API</a>
                            </li>
                            <li class="pc-item"><a class="pc-link" href="../table/dt_plugin.html"
                                    data-i18n="Plug-in">Plug-in</a></li>
                            <li class="pc-item"><a class="pc-link" href="../table/dt_sources.html"
                                    data-i18n="Data sources">Data sources</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-wall"></i>
                            </span>
                            <span class="pc-mtext" data-i18n="DT extensions">DT extensions</span><span
                                class="pc-arrow"><i class="ph ph-caret-right"></i></span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_autofill.html"
                                    data-i18n="Autofill">Autofill</a></li>
                            <li class="pc-item pc-hasmenu">
                                <a href="#!" class="pc-link">
                                    <span data-i18n="Button">Button</span>
                                    <span class="pc-arrow"><i class="ph ph-caret-right"></i></span></a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link" href="../table/dt_ext_basic_buttons.html"
                                            data-i18n="Basic button">Basic button</a></li>
                                    <li class="pc-item"><a class="pc-link" href="../table/dt_ext_export_buttons.html"
                                            data-i18n="Data export">Data export</a></li>
                                </ul>
                            </li>
                            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_col_reorder.html"
                                    data-i18n="Col reorder">Col reorder</a></li>
                            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_fixed_columns.html"
                                    data-i18n="Fixed columns">Fixed columns</a></li>
                            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_fixed_header.html"
                                    data-i18n="Fixed header">Fixed header</a></li>
                            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_key_table.html"
                                    data-i18n="Key table">Key table</a></li>
                            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_responsive.html"
                                    data-i18n="Responsive">Responsive</a></li>
                            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_row_reorder.html"
                                    data-i18n="Row reorder">Row reorder</a></li>
                            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_scroller.html"
                                    data-i18n="Scroller">Scroller</a></li>
                            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_select.html"
                                    data-i18n="Select table">Select table</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-caption">
                        <label data-i18n="Chart & Maps">Charts &and; Maps</label>
                        <i class="ph ph-chart-donut"></i>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-chart-donut"></i>
                            </span>
                            <span class="pc-mtext" data-i18n="Charts">Charts</span><span class="pc-arrow"><i
                                    class="ph ph-caret-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="../chart/chart-apex.html"
                                    data-i18n="Apex Chart">Apex Chart</a></li>
                            <li class="pc-item"><a class="pc-link" href="../chart/chart-peity.html"
                                    data-i18n="Peity Chart">Peity Chart</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-map-trifold"></i>
                            </span>
                            <span class="pc-mtext" data-i18n="Map">Maps</span><span class="pc-arrow"><i
                                    class="ph ph-caret-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="../chart/map-vector.html"
                                    data-i18n="Vector Map">Vector Maps</a></li>
                            <li class="pc-item"><a class="pc-link" href="../chart/map-gmap.html"
                                    data-i18n="Google Map">Gmaps</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-caption">
                        <label data-i18n="Application">Application</label>
                        <i class="ph ph-calendar-blank"></i>
                        <span
                            style="background: #dc3545; color: white; padding: 2px 6px; border-radius: 8px; font-size: 8px; font-weight: 600; margin-left: 6px; display: inline-block;">Hot</span>
                    </li>
                    <li class="pc-item">
                        <a href="../application/calendar.html" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-calendar-blank"></i>
                            </span>
                            <span class="pc-mtext" data-i18n="Calender">Calendar</span></a>
                    </li>
                    <li class="pc-item">
                        <a href="../application/chat.html" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-chats-circle"></i>
                            </span>
                            <span class="pc-mtext" data-i18n="Chat">Message</span></a>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-list-bullets"></i>
                            </span>
                            <span class="pc-mtext" data-i18n="Task">Task</span><span class="pc-arrow"><i
                                    class="ph ph-caret-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="../application/task-list.html"
                                    data-i18n="List">List</a></li>
                            <li class="pc-item"><a class="pc-link" href="../application/task-board.html"
                                    data-i18n="Board">Board</a></li>
                            <li class="pc-item"><a class="pc-link" href="../application/task-detail.html"
                                    data-i18n="Detail">Detail</a></li>
                        </ul>
                    </li>
                    <li class="pc-item">
                        <a href="../application/todo.html" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-list-checks"></i>
                            </span>
                            <span class="pc-mtext" data-i18n="To Do">To Do</span>
                        </a>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-images"></i>
                            </span>
                            <span class="pc-mtext" data-i18n="Gallery">Gallery</span><span class="pc-arrow"><i
                                    class="ph ph-caret-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="../application/gallery-grid.html"
                                    data-i18n="Grid">Grid</a></li>
                            <li class="pc-item"><a class="pc-link" href="../application/gallery-masonry.html"
                                    data-i18n="Masonry">Masonry</a></li>
                            <li class="pc-item"><a class="pc-link" href="../application/gallery-advance.html"
                                    data-i18n="Advance">Advance</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-printer"></i>
                            </span>
                            <span class="pc-mtext" data-i18n="Invoice">Invoice</span><span class="pc-arrow"><i
                                    class="ph ph-caret-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="../application/invoice.html"
                                    data-i18n="Invoice">Invoice</a></li>
                            <li class="pc-item"><a class="pc-link" href="../application/invoice-summary.html"
                                    data-i18n="Invoice summary">Invoice summary</a></li>
                            <li class="pc-item"><a class="pc-link" href="../application/invoice-list.html"
                                    data-i18n="Invoice list">Invoice list</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-user-circle"></i>
                            </span>
                            <span class="pc-mtext" data-i18n="Users">Users</span><span class="pc-arrow"><i
                                    class="ph ph-caret-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="../application/user-profile.html"
                                    data-i18n="Profile">Profile</a></li>
                            <li class="pc-item"><a class="pc-link" href="../application/user-profile-social.html"
                                    data-i18n="Social Profile">Social Profile</a></li>
                            <li class="pc-item"><a class="pc-link" href="../application/user-card.html"
                                    data-i18n="User Card">User Card</a></li>
                            <li class="pc-item"><a class="pc-link" href="../application/user-list.html"
                                    data-i18n="User List">User List</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-caption">
                        <label data-i18n="pages">Pages</label>
                        <i class="ph ph-shield-checkered"></i>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-lock-key"></i>
                            </span>
                            <span class="pc-mtext" data-i18n="Authentication">Authentication</span><span
                                class="pc-arrow"><i class="ph ph-caret-right"></i></span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item pc-hasmenu">
                                <a href="#!" class="pc-link">
                                    <span data-i18n="Login">Login</span>
                                    <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="../pages/login-v1.html" data-i18n="Login v1">Login v1</a></li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="../pages/login-v2.html" data-i18n="Login v2">Login v2</a></li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="../pages/login-v3.html" data-i18n="Login v3">Login v3</a></li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="../pages/login-v4.html" data-i18n="Login v4">Login v4</a></li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="../pages/login-v5.html" data-i18n="Login v5">Login v5</a></li>
                                </ul>
                            </li>
                            <li class="pc-item pc-hasmenu">
                                <a href="#!" class="pc-link">
                                    <span data-i18n="Register">Register</span>
                                    <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="../pages/register-v1.html" data-i18n="Register v1">Register v1</a>
                                    </li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="../pages/register-v2.html" data-i18n="Register v2">Register v2</a>
                                    </li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="../pages/register-v3.html" data-i18n="Register v3">Register v3</a>
                                    </li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="../pages/register-v4.html" data-i18n="Register v4">Register v4</a>
                                    </li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="../pages/register-v5.html" data-i18n="Register v5">Register v5</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pc-item pc-hasmenu">
                                <a href="#!" class="pc-link">
                                    <span data-i18n="Reset Password">Reset password</span>
                                    <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="../pages/reset-password-v1.html"
                                            data-i18n="Reset Password v1">Reset
                                            password v1</a></li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="../pages/reset-password-v2.html"
                                            data-i18n="Reset Password v2">Reset
                                            password v2</a></li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="../pages/reset-password-v3.html"
                                            data-i18n="Reset Password v3">Reset
                                            password v3</a></li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="../pages/reset-password-v4.html"
                                            data-i18n="Reset Password v4">Reset
                                            password v4</a></li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="../pages/reset-password-v5.html"
                                            data-i18n="Reset Password v5">Reset
                                            password v5</a></li>
                                </ul>
                            </li>
                            <li class="pc-item pc-hasmenu">
                                <a href="#!" class="pc-link">
                                    <span data-i18n="Change password">Change password</span>
                                    <span class="pc-arrow"><i class="ph ph-caret-right"></i></span></a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="../pages/change-password-v1.html"
                                            data-i18n="Change password v1">Change password v1</a></li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="../pages/change-password-v2.html"
                                            data-i18n="Change password v2">Change password v2</a></li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="../pages/change-password-v3.html"
                                            data-i18n="Change password v3">Change password v3</a></li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="../pages/change-password-v4.html"
                                            data-i18n="Change password v4">Change password v4</a></li>
                                    <li class="pc-item"><a class="pc-link" target="_blank"
                                            href="../pages/change-password-v5.html"
                                            data-i18n="Change password v5">Change password v5</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-wrench"></i>
                            </span>
                            <span class="pc-mtext" data-i18n="Maintenance">Maintenance</span><span
                                class="pc-arrow"><i class="ph ph-caret-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/error.html"
                                    data-i18n="Error">Error</a></li>
                            <li class="pc-item"><a class="pc-link" target="_blank"
                                    href="../pages/coming-soon.html" data-i18n="Coming-Soon">Coming Soon</a></li>
                            <li class="pc-item"><a class="pc-link" target="_blank"
                                    href="../pages/offline-ui.html" data-i18n="Offline Ui">Offline Ui</a></li>
                        </ul>
                    </li>
                    <li class="pc-item">
                        <a href="../index.html" class="pc-link" target="_blank">
                            <span class="pc-micon"> <i class="ph ph-target"></i> </span><span class="pc-mtext"
                                data-i18n="Landing">Landing</span>
                        </a>
                    </li>
                    <li class="pc-item pc-caption">
                        <label data-i18n="Other">Other</label>
                        <i class="ph ph-tree-structure"></i>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link"><span class="pc-micon"> <i
                                    class="ph ph-tree-structure"></i>
                            </span><span class="pc-mtext" data-i18n="Menu levels">Menu levels</span><span
                                class="pc-arrow"><i class="ph ph-caret-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 2.1">Level
                                    2.1</a></li>
                            <li class="pc-item pc-hasmenu">
                                <a href="#!" class="pc-link">
                                    <span data-i18n="Level 2.2">Level 2.2</span>
                                    <span class="pc-arrow"><i class="ph ph-caret-right"></i></span></a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link" href="#!"
                                            data-i18n="Level 3.1">Level 3.1</a>
                                    </li>
                                    <li class="pc-item"><a class="pc-link" href="#!"
                                            data-i18n="Level 3.2">Level 3.2</a>
                                    </li>
                                    <li class="pc-item pc-hasmenu">
                                        <a href="#!" class="pc-link">
                                            <span data-i18n="Level 3.3">Level 3.3</span>
                                            <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
                                        </a>
                                        <ul class="pc-submenu">
                                            <li class="pc-item"><a class="pc-link" href="#!"
                                                    data-i18n="Level 4.1">Level
                                                    4.1</a></li>
                                            <li class="pc-item"><a class="pc-link" href="#!"
                                                    data-i18n="Level 4.2">Level
                                                    4.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="pc-item pc-hasmenu">
                                <a href="#!" class="pc-link">
                                    <span data-i18n="Level 2.3">Level 2.3</span>
                                    <span class="pc-arrow"><i class="ph ph-caret-right"></i></span></a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link" href="#!"
                                            data-i18n="Level 3.1">Level 3.1</a>
                                    </li>
                                    <li class="pc-item"><a class="pc-link" href="#!"
                                            data-i18n="Level 3.2">Level 3.2</a>
                                    </li>
                                    <li class="pc-item pc-hasmenu">
                                        <a href="#!" class="pc-link">
                                            <span data-i18n="Level 3.3">Level 3.3</span>
                                            <span class="pc-arrow"><i class="ph ph-caret-right"></i></span>
                                        </a>
                                        <ul class="pc-submenu">
                                            <li class="pc-item"><a class="pc-link" href="#!"
                                                    data-i18n="Level 4.1">Level
                                                    4.1</a></li>
                                            <li class="pc-item"><a class="pc-link" href="#!"
                                                    data-i18n="Level 4.2">Level
                                                    4.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="pc-item"><a href="../other/sample-page.html" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-desktop"></i>
                            </span>
                            <span class="pc-mtext" data-i18n="Sample Page">Sample page</span></a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- [ Sidebar Menu ] end -->
    <!-- [ Header Topbar ] start -->
    @include('partials.header')
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="mb-0">Dashboard-active</h5>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <ul class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="/dashboard/index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">Dashboard-active</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ Enhanced KPI Cards ] start -->
                <div class="col-md-6 col-xl-3">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h6 class="mb-2 text-white">Total Revenue</h6>
                                    <h3 class="text-white mb-0 f-w-300">$847,290</h3>
                                    <p class="text-white-50 mb-0">
                                        <i class="ph ph-arrow-up me-1"></i>
                                        +12.5% from last month
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <div id="total-revenue-chart" style="height: 50px; width: 80px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card bg-success">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h6 class="mb-2 text-white">Active Users</h6>
                                    <h3 class="text-white mb-0 f-w-300">24,689</h3>
                                    <p class="text-white-50 mb-0">
                                        <i class="ph ph-arrow-up me-1"></i>
                                        +8.2% from last week
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <div id="active-users-chart" style="height: 50px; width: 80px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card bg-warning">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h6 class="mb-2 text-white">Orders</h6>
                                    <h3 class="text-white mb-0 f-w-300">1,847</h3>
                                    <p class="text-white-50 mb-0">
                                        <i class="ph ph-arrow-down me-1"></i>
                                        -2.1% from yesterday
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <div id="orders-chart" style="height: 50px; width: 80px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card bg-info">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h6 class="mb-2 text-white">Conversion Rate</h6>
                                    <h3 class="text-white mb-0 f-w-300">3.47%</h3>
                                    <p class="text-white-50 mb-0">
                                        <i class="ph ph-arrow-up me-1"></i>
                                        +0.3% from last month
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <div id="conversion-chart" style="height: 50px; width: 80px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ Enhanced KPI Cards ] end -->

                <!-- [ Real-time Analytics ] start -->
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5>Real-time Analytics</h5>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-primary btn-sm">7D</button>
                                <button type="button" class="btn btn-primary btn-sm">30D</button>
                                <button type="button" class="btn btn-outline-primary btn-sm">90D</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3"
                                            style="width: 40px; height: 40px;">
                                            <i class="ph ph-users text-white f-18"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Sessions</h6>
                                            <h4 class="mb-0 f-w-300">47,829</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-success rounded-circle d-flex align-items-center justify-content-center me-3"
                                            style="width: 40px; height: 40px;">
                                            <i class="ph ph-chart-line-up text-white f-18"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Page Views</h6>
                                            <h4 class="mb-0 f-w-300">186,247</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="real-time-chart" style="height: 350px;"></div>
                        </div>
                    </div>
                </div>
                <!-- [ Real-time Analytics ] end -->

                <!-- [ Device Analytics ] start -->
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>Device Analytics</h5>
                        </div>
                        <div class="card-body">
                            <div id="device-chart" style="height: 200px;"></div>
                            <div class="row mt-3">
                                <div class="col-12 pt-3 pb-3 border-top">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="d-flex align-items-center">
                                            <i class="ph ph-desktop text-primary me-2 f-18"></i>
                                            Desktop
                                        </span>
                                        <span class="fw-bold">45.8%</span>
                                    </div>
                                    <div class="progress mt-2" style="height: 4px;">
                                        <div class="progress-bar bg-primary" style="width: 45.8%"></div>
                                    </div>
                                </div>
                                <div class="col-12 pt-3 pb-3 border-top">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="d-flex align-items-center">
                                            <i class="ph ph-device-mobile text-success me-2 f-18"></i>
                                            Mobile
                                        </span>
                                        <span class="fw-bold">38.7%</span>
                                    </div>
                                    <div class="progress mt-2" style="height: 4px;">
                                        <div class="progress-bar bg-success" style="width: 38.7%"></div>
                                    </div>
                                </div>
                                <div class="col-12 pt-3 border-top">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="d-flex align-items-center">
                                            <i class="ph ph-device-tablet text-warning me-2 f-18"></i>
                                            Tablet
                                        </span>
                                        <span class="fw-bold">15.5%</span>
                                    </div>
                                    <div class="progress mt-2" style="height: 4px;">
                                        <div class="progress-bar bg-warning" style="width: 15.5%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ Device Analytics ] end -->

                <!-- [ Interactive World Map ] start -->
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5>Global User Distribution</h5>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown">
                                    Last 30 Days
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Last 7 Days</a></li>
                                    <li><a class="dropdown-item" href="#">Last 30 Days</a></li>
                                    <li><a class="dropdown-item" href="#">Last 90 Days</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-3 text-center">
                                    <h4 class="mb-0 text-primary">24.5K</h4>
                                    <span class="text-muted">USA</span>
                                </div>
                                <div class="col-3 text-center">
                                    <h4 class="mb-0 text-success">18.2K</h4>
                                    <span class="text-muted">Europe</span>
                                </div>
                                <div class="col-3 text-center">
                                    <h4 class="mb-0 text-warning">12.8K</h4>
                                    <span class="text-muted">Asia</span>
                                </div>
                                <div class="col-3 text-center">
                                    <h4 class="mb-0 text-info">8.1K</h4>
                                    <span class="text-muted">Others</span>
                                </div>
                            </div>
                            <div id="world-low" style="height: 350px"></div>
                        </div>
                    </div>
                </div>
                <!-- [ Interactive World Map ] end -->

                <!-- [ Sentiment Analysis & Quick Stats ] start -->
                <div class="col-xl-4">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5>Customer Sentiment</h5>
                        </div>
                        <div class="card-body">
                            <div class="row text-center">
                                <div class="col-6">
                                    <h6 class="text-danger mb-3">NEGATIVE</h6>
                                    <div id="sadball" style="height: 80px;"></div>
                                    <h4 class="mt-2 text-danger">24%</h4>
                                    <span class="text-muted">287 Reviews</span>
                                </div>
                                <div class="col-6">
                                    <h6 class="text-success mb-3">POSITIVE</h6>
                                    <div id="happyball" style="height: 80px;"></div>
                                    <h4 class="mt-2 text-success">76%</h4>
                                    <span class="text-muted">892 Reviews</span>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm w-100 mt-3">View All Reviews</button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h6 class="mb-0">Server Performance</h6>
                                <span class="badge bg-success">Optimal</span>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="text-center">
                                        <div id="cpu-usage" style="height: 60px; width: 60px; margin: 0 auto;">
                                        </div>
                                        <h6 class="mt-2 mb-0">CPU Usage</h6>
                                        <span class="text-muted">67%</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-center">
                                        <div id="memory-usage" style="height: 60px; width: 60px; margin: 0 auto;">
                                        </div>
                                        <h6 class="mt-2 mb-0">Memory</h6>
                                        <span class="text-muted">82%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ Sentiment Analysis & Quick Stats ] end -->

                <!-- [ Advanced Data Table ] start -->
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5>Recent Transactions</h5>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-primary btn-sm">
                                    <i class="ph ph-download-simple me-1"></i>Export
                                </button>
                                <button type="button" class="btn btn-primary btn-sm">
                                    <i class="ph ph-plus me-1"></i>Add New
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0" id="advanced-table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="select-all">
                                                </div>
                                            </th>
                                            <th>Customer</th>
                                            <th>Product</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded-circle me-3" style="width: 35px"
                                                        src="images/user/avatar-1.svg" alt="user">
                                                    <div>
                                                        <h6 class="mb-0">Sarah Johnson</h6>
                                                        <span class="text-muted f-12"><a
                                                                href="/cdn-cgi/l/email-protection"
                                                                class="__cf_email__"
                                                                data-cfemail="9ceffdeefdf4dcf9e4fdf1ecf0f9b2fff3f1">[email&#160;protected]</a></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <h6 class="mb-0">Premium Plan</h6>
                                                    <span class="text-muted f-12">Monthly Subscription</span>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="mb-0 text-success">$299.00</h6>
                                            </td>
                                            <td>
                                                <span class="badge bg-success">Completed</span>
                                            </td>
                                            <td>
                                                <span class="text-muted">Jan 07, 2025</span>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-sm btn-outline-secondary">
                                                        <i class="ph ph-eye"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        <i class="ph ph-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-danger">
                                                        <i class="ph ph-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded-circle me-3" style="width: 35px"
                                                        src="images/user/avatar-2.svg" alt="user">
                                                    <div>
                                                        <h6 class="mb-0">Michael Chen</h6>
                                                        <span class="text-muted f-12"><a
                                                                href="/cdn-cgi/l/email-protection"
                                                                class="__cf_email__"
                                                                data-cfemail="2845414b40494d44684d50494558444d064b4745">[email&#160;protected]</a></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <h6 class="mb-0">Enterprise Plan</h6>
                                                    <span class="text-muted f-12">Annual Subscription</span>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="mb-0 text-success">$2,999.00</h6>
                                            </td>
                                            <td>
                                                <span class="badge bg-warning">Pending</span>
                                            </td>
                                            <td>
                                                <span class="text-muted">Jan 06, 2025</span>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-sm btn-outline-secondary">
                                                        <i class="ph ph-eye"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        <i class="ph ph-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-danger">
                                                        <i class="ph ph-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded-circle me-3" style="width: 35px"
                                                        src="images/user/avatar-3.svg" alt="user">
                                                    <div>
                                                        <h6 class="mb-0">Emma Wilson</h6>
                                                        <span class="text-muted f-12"><a
                                                                href="/cdn-cgi/l/email-protection"
                                                                class="__cf_email__"
                                                                data-cfemail="96f3fbfbf7d6f3eef7fbe6faf3b8f5f9fb">[email&#160;protected]</a></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <h6 class="mb-0">Basic Plan</h6>
                                                    <span class="text-muted f-12">Monthly Subscription</span>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="mb-0 text-success">$99.00</h6>
                                            </td>
                                            <td>
                                                <span class="badge bg-danger">Failed</span>
                                            </td>
                                            <td>
                                                <span class="text-muted">Jan 05, 2025</span>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-sm btn-outline-secondary">
                                                        <i class="ph ph-eye"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        <i class="ph ph-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-danger">
                                                        <i class="ph ph-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded-circle me-3" style="width: 35px"
                                                        src="images/user/avatar-4.svg" alt="user">
                                                    <div>
                                                        <h6 class="mb-0">Alex Rodriguez</h6>
                                                        <span class="text-muted f-12"><a
                                                                href="/cdn-cgi/l/email-protection"
                                                                class="__cf_email__"
                                                                data-cfemail="3e5f525b467e5b465f534e525b105d5153">[email&#160;protected]</a></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <h6 class="mb-0">Professional Plan</h6>
                                                    <span class="text-muted f-12">Annual Subscription</span>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="mb-0 text-success">$1,799.00</h6>
                                            </td>
                                            <td>
                                                <span class="badge bg-success">Completed</span>
                                            </td>
                                            <td>
                                                <span class="text-muted">Jan 04, 2025</span>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-sm btn-outline-secondary">
                                                        <i class="ph ph-eye"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        <i class="ph ph-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-danger">
                                                        <i class="ph ph-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded-circle me-3" style="width: 35px"
                                                        src="images/user/avatar-5.svg" alt="user">
                                                    <div>
                                                        <h6 class="mb-0">Maria Garcia</h6>
                                                        <span class="text-muted f-12"><a
                                                                href="/cdn-cgi/l/email-protection"
                                                                class="__cf_email__"
                                                                data-cfemail="1e737f6c777f5e7b667f736e727b307d7173">[email&#160;protected]</a></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <h6 class="mb-0">Premium Plan</h6>
                                                    <span class="text-muted f-12">Monthly Subscription</span>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="mb-0 text-success">$299.00</h6>
                                            </td>
                                            <td>
                                                <span class="badge bg-warning">Processing</span>
                                            </td>
                                            <td>
                                                <span class="text-muted">Jan 03, 2025</span>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-sm btn-outline-secondary">
                                                        <i class="ph ph-eye"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        <i class="ph ph-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-danger">
                                                        <i class="ph ph-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded-circle me-3" style="width: 35px"
                                                        src="images/user/avatar-6.svg" alt="user">
                                                    <div>
                                                        <h6 class="mb-0">David Kim</h6>
                                                        <span class="text-muted f-12"><a
                                                                href="/cdn-cgi/l/email-protection"
                                                                class="__cf_email__"
                                                                data-cfemail="b5d1d4c3dcd1f5d0cdd4d8c5d9d09bd6dad8">[email&#160;protected]</a></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <h6 class="mb-0">Basic Plan</h6>
                                                    <span class="text-muted f-12">Monthly Subscription</span>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="mb-0 text-success">$99.00</h6>
                                            </td>
                                            <td>
                                                <span class="badge bg-success">Completed</span>
                                            </td>
                                            <td>
                                                <span class="text-muted">Jan 02, 2025</span>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-sm btn-outline-secondary">
                                                        <i class="ph ph-eye"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        <i class="ph ph-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-danger">
                                                        <i class="ph ph-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded-circle me-3" style="width: 35px"
                                                        src="images/user/avatar-7.svg" alt="user">
                                                    <div>
                                                        <h6 class="mb-0">Lisa Thompson</h6>
                                                        <span class="text-muted f-12"><a
                                                                href="/cdn-cgi/l/email-protection"
                                                                class="__cf_email__"
                                                                data-cfemail="34585d475574514c55594458511a575b59">[email&#160;protected]</a></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <h6 class="mb-0">Enterprise Plan</h6>
                                                    <span class="text-muted f-12">Annual Subscription</span>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="mb-0 text-success">$2,999.00</h6>
                                            </td>
                                            <td>
                                                <span class="badge bg-success">Completed</span>
                                            </td>
                                            <td>
                                                <span class="text-muted">Jan 01, 2025</span>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-sm btn-outline-secondary">
                                                        <i class="ph ph-eye"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        <i class="ph ph-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-danger">
                                                        <i class="ph ph-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-3">
                                <span class="text-muted">Showing 1 to 3 of 247 entries</span>
                                <nav>
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled">
                                            <span class="page-link">Previous</span>
                                        </li>
                                        <li class="page-item active">
                                            <span class="page-link">1</span>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ Advanced Data Table ] end -->

                <!-- [ Activity Feed ] start -->
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5>Live Activity Feed</h5>
                            <div class="d-flex align-items-center">
                                <div class="bg-success rounded-circle me-2" style="width: 8px; height: 8px;"></div>
                                <span class="text-muted f-12">Live</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="timeline">
                                <div class="timeline-item">
                                    <div class="timeline-marker bg-primary"></div>
                                    <div class="timeline-content">
                                        <h6 class="mb-1">New user registration</h6>
                                        <p class="mb-1 text-muted f-12">John Doe signed up for Premium plan</p>
                                        <span class="text-muted f-10">2 minutes ago</span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker bg-success"></div>
                                    <div class="timeline-content">
                                        <h6 class="mb-1">Payment received</h6>
                                        <p class="mb-1 text-muted f-12">$299.00 from Sarah Johnson</p>
                                        <span class="text-muted f-10">5 minutes ago</span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker bg-warning"></div>
                                    <div class="timeline-content">
                                        <h6 class="mb-1">System alert</h6>
                                        <p class="mb-1 text-muted f-12">High memory usage detected</p>
                                        <span class="text-muted f-10">12 minutes ago</span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker bg-info"></div>
                                    <div class="timeline-content">
                                        <h6 class="mb-1">Feature update</h6>
                                        <p class="mb-1 text-muted f-12">New dashboard widgets deployed</p>
                                        <span class="text-muted f-10">1 hour ago</span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker bg-danger"></div>
                                    <div class="timeline-content">
                                        <h6 class="mb-1">Failed payment</h6>
                                        <p class="mb-1 text-muted f-12">Payment failed for Emma Wilson</p>
                                        <span class="text-muted f-10">2 hours ago</span>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-outline-primary btn-sm w-100 mt-3">View All Activities</button>
                        </div>
                    </div>
                </div>
                <!-- [ Activity Feed ] end -->

                <!-- [ Advanced Performance Metrics ] start -->
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5>Performance Metrics Dashboard</h5>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-primary btn-sm">Real-time</button>
                                <button type="button" class="btn btn-outline-primary btn-sm">Historical</button>
                                <button type="button" class="btn btn-primary btn-sm">
                                    <i class="ph ph-gear me-1"></i>Settings
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- Sales Performance -->
                                <div class="col-md-3">
                                    <div class="card border">
                                        <div class="card-body text-center">
                                            <div id="sales-performance" style="height: 120px;"></div>
                                            <h6 class="mt-3 mb-1">Sales Performance</h6>
                                            <h4 class="mb-0 text-primary">87%</h4>
                                            <span class="text-success f-12">
                                                <i class="ph ph-arrow-up me-1"></i>+15% vs last month
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Customer Satisfaction -->
                                <div class="col-md-3">
                                    <div class="card border">
                                        <div class="card-body text-center">
                                            <div id="customer-satisfaction" style="height: 120px;"></div>
                                            <h6 class="mt-3 mb-1">Customer Satisfaction</h6>
                                            <h4 class="mb-0 text-success">4.8/5</h4>
                                            <span class="text-success f-12">
                                                <i class="ph ph-arrow-up me-1"></i>+0.3 vs last month
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <!-- System Uptime -->
                                <div class="col-md-3">
                                    <div class="card border">
                                        <div class="card-body text-center">
                                            <div id="system-uptime" style="height: 120px;"></div>
                                            <h6 class="mt-3 mb-1">System Uptime</h6>
                                            <h4 class="mb-0 text-warning">99.9%</h4>
                                            <span class="text-muted f-12">
                                                <i class="ph ph-clock me-1"></i>Last 30 days
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <!-- API Response Time -->
                                <div class="col-md-3">
                                    <div class="card border">
                                        <div class="card-body text-center">
                                            <div id="api-response" style="height: 120px;"></div>
                                            <h6 class="mt-3 mb-1">API Response Time</h6>
                                            <h4 class="mb-0 text-info">247ms</h4>
                                            <span class="text-danger f-12">
                                                <i class="ph ph-arrow-down me-1"></i>-12ms vs last hour
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Advanced Chart Section -->
                            <div class="row mt-4">
                                <div class="col-md-8">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <h6 class="mb-0">Revenue Trends & Forecasting</h6>
                                        <div class="d-flex align-items-center">
                                            <span class="me-3">
                                                <i class="ph ph-circle text-primary me-1"></i>Actual
                                            </span>
                                            <span class="me-3">
                                                <i class="ph ph-circle text-success me-1"></i>Forecast
                                            </span>
                                            <span>
                                                <i class="ph ph-circle text-warning me-1"></i>Target
                                            </span>
                                        </div>
                                    </div>
                                    <div id="revenue-trends" style="height: 300px;"></div>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="mb-3">Top Performing Regions</h6>
                                    <div class="list-group list-group-flush">
                                        <div
                                            class="list-group-item d-flex justify-content-between align-items-center px-0">
                                            <div class="d-flex align-items-center">
                                                <div class="bg-primary rounded-circle me-3"
                                                    style="width: 8px; height: 8px;"></div>
                                                <span>North America</span>
                                            </div>
                                            <div class="text-end">
                                                <div class="fw-bold">$247,890</div>
                                                <small class="text-success">+24.5%</small>
                                            </div>
                                        </div>
                                        <div
                                            class="list-group-item d-flex justify-content-between align-items-center px-0">
                                            <div class="d-flex align-items-center">
                                                <div class="bg-success rounded-circle me-3"
                                                    style="width: 8px; height: 8px;"></div>
                                                <span>Europe</span>
                                            </div>
                                            <div class="text-end">
                                                <div class="fw-bold">$198,456</div>
                                                <small class="text-success">+18.2%</small>
                                            </div>
                                        </div>
                                        <div
                                            class="list-group-item d-flex justify-content-between align-items-center px-0">
                                            <div class="d-flex align-items-center">
                                                <div class="bg-warning rounded-circle me-3"
                                                    style="width: 8px; height: 8px;"></div>
                                                <span>Asia Pacific</span>
                                            </div>
                                            <div class="text-end">
                                                <div class="fw-bold">$156,789</div>
                                                <small class="text-success">+31.7%</small>
                                            </div>
                                        </div>
                                        <div
                                            class="list-group-item d-flex justify-content-between align-items-center px-0">
                                            <div class="d-flex align-items-center">
                                                <div class="bg-info rounded-circle me-3"
                                                    style="width: 8px; height: 8px;"></div>
                                                <span>Latin America</span>
                                            </div>
                                            <div class="text-end">
                                                <div class="fw-bold">$89,234</div>
                                                <small class="text-danger">-5.3%</small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <h6 class="mb-3">Goal Progress</h6>
                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between mb-1">
                                                <span class="f-14">Monthly Target</span>
                                                <span class="f-14 fw-bold">78%</span>
                                            </div>
                                            <div class="progress" style="height: 8px;">
                                                <div class="progress-bar bg-primary" style="width: 78%"></div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between mb-1">
                                                <span class="f-14">Quarterly Target</span>
                                                <span class="f-14 fw-bold">92%</span>
                                            </div>
                                            <div class="progress" style="height: 8px;">
                                                <div class="progress-bar bg-success" style="width: 92%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="d-flex justify-content-between mb-1">
                                                <span class="f-14">Annual Target</span>
                                                <span class="f-14 fw-bold">65%</span>
                                            </div>
                                            <div class="progress" style="height: 8px;">
                                                <div class="progress-bar bg-warning" style="width: 65%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ Advanced Performance Metrics ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->

    @include('partials.footer')

    <!-- [Page Specific JS] start -->
    <!-- apexcharts js -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/js/plugins/apexcharts.min.js') }}"></script>

    <!-- Vector maps -->
    <script src="{{ asset('assets/js/plugins/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/world.js') }}"></script>

    <!-- Enhanced Dashboard Widgets -->
    <script src="{{ asset('assets/js/widgets/world-low.js') }}"></script>
    <script src="{{ asset('assets/js/widgets/device-chart.js') }}"></script>
    <script src="{{ asset('assets/js/widgets/happy-sad-ball.js') }}"></script>

    <!-- Custom Enhanced Dashboard JS -->
    <script>
        // Enhanced KPI Cards with mini charts
        const kpiCharts = {
            totalRevenue: {
                chart: {
                    type: 'line',
                    width: 80,
                    height: 50,
                    sparkline: {
                        enabled: true
                    }
                },
                series: [{
                    data: [31, 40, 28, 51, 42, 85, 77]
                }],
                stroke: {
                    width: 2,
                    colors: ['#ffffff']
                },
                tooltip: {
                    enabled: false
                }
            },
            activeUsers: {
                chart: {
                    type: 'area',
                    width: 80,
                    height: 50,
                    sparkline: {
                        enabled: true
                    }
                },
                series: [{
                    data: [11, 32, 45, 32, 34, 52, 41]
                }],
                fill: {
                    colors: ['#ffffff'],
                    opacity: 0.3
                },
                stroke: {
                    colors: ['#ffffff']
                },
                tooltip: {
                    enabled: false
                }
            },
            orders: {
                chart: {
                    type: 'bar',
                    width: 80,
                    height: 50,
                    sparkline: {
                        enabled: true
                    }
                },
                series: [{
                    data: [47, 45, 54, 38, 56, 24, 65]
                }],
                colors: ['#ffffff'],
                tooltip: {
                    enabled: false
                }
            },
            conversion: {
                chart: {
                    type: 'line',
                    width: 80,
                    height: 50,
                    sparkline: {
                        enabled: true
                    }
                },
                series: [{
                    data: [15, 75, 47, 65, 55, 70, 85]
                }],
                stroke: {
                    width: 2,
                    colors: ['#ffffff'],
                    curve: 'smooth'
                },
                tooltip: {
                    enabled: false
                }
            }
        };

        // Render KPI charts
        Object.keys(kpiCharts).forEach(chartId => {
            const element = document.querySelector(`#${chartId.replace(/([A-Z])/g, '-$1').toLowerCase()}-chart`);
            if (element) {
                new ApexCharts(element, kpiCharts[chartId]).render();
            }
        });

        // Real-time Analytics Chart
        const realTimeOptions = {
            chart: {
                type: 'area',
                height: 350,
                animations: {
                    enabled: true,
                    easing: 'linear',
                    dynamicAnimation: {
                        speed: 1000
                    }
                },
                toolbar: {
                    show: false
                }
            },
            series: [{
                name: 'Sessions',
                data: [31, 40, 28, 51, 42, 85, 77, 95, 87, 73, 69, 85]
            }, {
                name: 'Page Views',
                data: [87, 76, 65, 89, 95, 76, 89, 67, 78, 95, 87, 92]
            }],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            colors: ['#4680ff', '#04a9f5'],
            fill: {
                opacity: 0.3
            },
            stroke: {
                curve: 'smooth'
            }
        };

        if (document.querySelector('#real-time-chart')) {
            new ApexCharts(document.querySelector('#real-time-chart'), realTimeOptions).render();
        }

        // Performance Metrics Charts
        const performanceCharts = {
            salesPerformance: {
                chart: {
                    type: 'radialBar',
                    height: 120
                },
                series: [87],
                colors: ['#4680ff'],
                plotOptions: {
                    radialBar: {
                        hollow: {
                            size: '70%'
                        },
                        dataLabels: {
                            show: false
                        }
                    }
                }
            },
            customerSatisfaction: {
                chart: {
                    type: 'donut',
                    height: 120
                },
                series: [4.8, 1.2],
                colors: ['#2ed8b6', '#e9ecef'],
                plotOptions: {
                    pie: {
                        donut: {
                            size: '70%'
                        }
                    }
                },
                legend: {
                    show: false
                },
                dataLabels: {
                    enabled: false
                }
            },
            systemUptime: {
                chart: {
                    type: 'radialBar',
                    height: 120
                },
                series: [99.9],
                colors: ['#ffb64d'],
                plotOptions: {
                    radialBar: {
                        hollow: {
                            size: '70%'
                        },
                        dataLabels: {
                            show: false
                        }
                    }
                }
            },
            apiResponse: {
                chart: {
                    type: 'line',
                    height: 120,
                    sparkline: {
                        enabled: true
                    }
                },
                series: [{
                    data: [247, 251, 245, 249, 243, 247, 250, 248, 247]
                }],
                stroke: {
                    curve: 'smooth',
                    colors: ['#04a9f5']
                }
            }
        };

        Object.keys(performanceCharts).forEach(chartId => {
            const element = document.querySelector(`#${chartId.replace(/([A-Z])/g, '-$1').toLowerCase()}`);
            if (element) {
                new ApexCharts(element, performanceCharts[chartId]).render();
            }
        });

        // Revenue Trends Chart
        const revenueTrendsOptions = {
            chart: {
                type: 'line',
                height: 300,
                toolbar: {
                    show: false
                }
            },
            series: [{
                name: 'Actual Revenue',
                data: [44, 55, 57, 56, 61, 58, 63, 60, 66, 75, 85, 89]
            }, {
                name: 'Forecast',
                data: [null, null, null, null, null, null, null, null, 66, 78, 88, 95]
            }, {
                name: 'Target',
                data: [50, 60, 65, 70, 75, 80, 85, 90, 95, 100, 105, 110]
            }],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            colors: ['#4680ff', '#2ed8b6', '#ffb64d'],
            stroke: {
                curve: 'smooth',
                dashArray: [0, 5, 0]
            },
            fill: {
                type: 'solid',
                opacity: 0.1
            },
            markers: {
                size: 4,
                strokeWidth: 2,
                strokeColors: '#fff',
                hover: {
                    size: 6
                }
            },
            legend: {
                show: true,
                position: 'top',
                horizontalAlign: 'right'
            },
            grid: {
                borderColor: '#e9ecef',
                strokeDashArray: 3
            }
        };

        if (document.querySelector('#revenue-trends')) {
            new ApexCharts(document.querySelector('#revenue-trends'), revenueTrendsOptions).render();
        }

        // CPU and Memory Usage Charts
        const systemCharts = {
            cpuUsage: {
                chart: {
                    type: 'radialBar',
                    height: 60,
                    width: 60
                },
                series: [67],
                colors: ['#f44336'],
                plotOptions: {
                    radialBar: {
                        hollow: {
                            size: '50%'
                        },
                        dataLabels: {
                            show: false
                        }
                    }
                }
            },
            memoryUsage: {
                chart: {
                    type: 'radialBar',
                    height: 60,
                    width: 60
                },
                series: [82],
                colors: ['#ff9800'],
                plotOptions: {
                    radialBar: {
                        hollow: {
                            size: '50%'
                        },
                        dataLabels: {
                            show: false
                        }
                    }
                }
            }
        };

        Object.keys(systemCharts).forEach(chartId => {
            const element = document.querySelector(`#${chartId.replace(/([A-Z])/g, '-$1').toLowerCase()}`);
            if (element) {
                new ApexCharts(element, systemCharts[chartId]).render();
            }
        });

        // Timeline styles for activity feed
        const style = document.createElement('style');
        style.textContent = `
        .timeline {
          position: relative;
          padding-left: 20px;
        }
        .timeline::before {
          content: '';
          position: absolute;
          left: 10px;
          top: 0;
          bottom: 0;
          width: 2px;
          background: #e9ecef;
        }
        .timeline-item {
          position: relative;
          margin-bottom: 20px;
        }
        .timeline-marker {
          position: absolute;
          left: -26px;
          top: 5px;
          width: 12px;
          height: 12px;
          border-radius: 50%;
          border: 2px solid #fff;
          box-shadow: 0 0 0 2px #e9ecef;
        }
        .timeline-content {
          background: #f8f9fa;
          padding: 15px;
          border-radius: 8px;
          border-left: 3px solid #4680ff;
        }
      `;
        document.head.appendChild(style);
    </script>
    <!-- [Page Specific JS] end -->
    <!-- Required JS -->
    <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/i18next.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/i18nextHttpBackend.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <script src="{{ asset('assets/js/multi-lang.js') }}"></script>

    <!-- Theme Configuration Scripts (hardcoded based on vite.config.js values) -->
    <script>
        layout_change('light');
    </script>
    <script>
        change_box_container('false');
    </script>
    <script>
        layout_caption_change('true');
    </script>
    <script>
        layout_rtl_change('false');
    </script>
    <script>
        preset_change('preset-1');
    </script>
    <script>
        layout_theme_sidebar_change('false');
    </script>

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v67327c56f0bb4ef8b305cae61679db8f1769101564043"
        integrity="sha512-rdcWY47ByXd76cbCFzznIcEaCN71jqkWBBqlwhF1SY7KubdLKZiEGeP7AyieKZlGP9hbY/MhGrwXzJC/HulNyg=="
        data-cf-beacon='{"version":"2024.11.0","token":"a6117f2172474edeb039d2a90d541d53","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
        crossorigin="anonymous"></script>
</body>
<!-- [Body] end -->

</html>
