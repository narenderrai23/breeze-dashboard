<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="bg-header-dark">
        <div class="content-header bg-white-5">
            <!-- Logo -->
            <a class="fw-semibold text-white tracking-wide" href="{{ route('admin.dashboard.index') }}">
                <span class="smini-visible">
                    D<span class="opacity-75">x</span>
                </span>
                <span class="smini-hidden">
                    Dash<span class="opacity-75">mix</span>
                </span>
            </a>
            <!-- END Logo -->

            <!-- Options -->
            <div>
                <!-- Toggle Sidebar Style -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
                <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
                    data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on"
                    onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
                    <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                </button>
                <!-- END Toggle Sidebar Style -->

                <!-- Dark Mode -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
                    data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
                    <i class="far fa-moon" id="dark-mode-toggler"></i>
                </button>
                <!-- END Dark Mode -->

                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout"
                    data-action="sidebar_close">
                    <i class="fa fa-times-circle"></i>
                </button>
                <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
        </div>
    </div>
    <!-- END Side Header -->

    <!-- Sidebar Scrolling -->
    <div class="js-sidebar-scroll">
        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            {{-- <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('admin.dashboard.index') ? ' active' : '' }}"
                        href="{{ route('admin.dashboard.index') }}">
                        <i class="nav-main-link-icon fa fa-location-arrow"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                        <span class="nav-main-link-badge badge rounded-pill bg-primary">5</span>
                    </a>
                </li>
                <li class="nav-main-heading">Various</li>
                <li class="nav-main-item{{ request()->is('pages/*') ? ' open' : '' }}">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                        aria-expanded="true" href="#">
                        <i class="nav-main-link-icon fa fa-lightbulb"></i>
                        <span class="nav-main-link-name">Examples</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}"
                                href="/pages/datatables">
                                <span class="nav-main-link-name">DataTables</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('pages/slick') ? ' active' : '' }}"
                                href="/pages/slick">
                                <span class="nav-main-link-name">Slick Slider</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('pages/blank') ? ' active' : '' }}"
                                href="/pages/blank">
                                <span class="nav-main-link-name">Blank</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-heading">More</li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="/">
                        <i class="nav-main-link-icon fa fa-globe"></i>
                        <span class="nav-main-link-name">Landing</span>
                    </a>
                </li>
            </ul> --}}

            @php
                $navItems = [
                    [
                        'route' => 'admin.dashboard.index',
                        'name' => 'Dashboard',
                        'icon' => 'fa fa-location-arrow',
                        'badge' => '5',
                        'badgeClass' => 'bg-primary',
                    ],
                    [
                        'heading' => 'Various',
                    ],
                    [
                        'name' => 'Examples',
                        'icon' => 'fa fa-lightbulb',
                        'submenu' => [
                            [
                                'route' => 'admin.pages.datatables',
                                'name' => 'DataTables',
                            ],
                            [
                                'route' => 'admin.pages.slick',
                                'name' => 'Slick Slider',
                            ],
                            [
                                'route' => 'admin.pages.blank',
                                'name' => 'Blank',
                            ],
                        ],
                    ],
                    [
                        'heading' => 'More',
                    ],
                    [
                        'url' => '/',
                        'name' => 'Landing',
                        'icon' => 'fa fa-globe',
                    ],
                ];
            @endphp

            <ul class="nav-main">
                @foreach ($navItems as $item)
                    @if (isset($item['heading']))
                        <li class="nav-main-heading">{{ $item['heading'] }}</li>
                    @elseif (isset($item['submenu']))
                        <li class="nav-main-item{{ request()->is('pages/*') ? ' open' : '' }}">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" href="#">
                                <i class="nav-main-link-icon {{ $item['icon'] }}"></i><span
                                    class="nav-main-link-name">{{ $item['name'] }}</span>
                            </a>
                            <ul class="nav-main-submenu">
                                @foreach ($item['submenu'] as $submenu)
                                    @if (Route::has($submenu['route']))
                                        <li class="nav-main-item">
                                            <a class="nav-main-link{{ request()->is($submenu['route']) ? ' active' : '' }}"
                                                href="{{ route($submenu['route']) }}">
                                                <span class="nav-main-link-name">{{ $submenu['name'] }}</span>
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    @else
                        @if (isset($item['route']) && Route::has($item['route']))
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is($item['route']) ? ' active' : '' }}"
                                    href="{{ route($item['route']) }}">
                                    <i class="nav-main-link-icon {{ $item['icon'] }}"></i>
                                    <span class="nav-main-link-name">{{ $item['name'] }}</span>
                                    @isset($item['badge'])
                                        <span class="nav-main-link-badge badge rounded-pill {{ $item['badgeClass'] }}">{{ $item['badge'] }}</span>
                                    @endisset
                                </a>
                            </li>
                        @elseif (isset($item['url']))
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ $item['url'] }}">
                                    <i class="nav-main-link-icon {{ $item['icon'] }}"></i>
                                    <span class="nav-main-link-name">{{ $item['name'] }}</span>
                                </a>
                            </li>
                        @endif
                    @endif
                @endforeach
            </ul>

        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- END Sidebar Scrolling -->
</nav>
