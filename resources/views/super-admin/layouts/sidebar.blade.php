<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!-- Begin::Wrapper -->
    <div id="kt_app_sidebar_wrapper" class="app-sidebar-wrapper hover-scroll-y my-5 my-lg-2" data-kt-scroll="true"
        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
        data-kt-scroll-dependencies="#kt_app_header" data-kt-scroll-wrappers="#kt_app_sidebar_wrapper"
        data-kt-scroll-offset="5px">
        <!-- Begin::Sidebar menu -->
        <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false"
            class="app-sidebar-menu-primary menu menu-column menu-rounded menu-sub-indention menu-state-bullet-primary px-6 mb-5">
            <div class="d-flex justify-content-between mb-3 pr-3 px-sm-2 mb-10 mt-10">
                <div class="btn btn-icon btn-active-color-primary w-35px h-35px ms-3 mt-2 me-2 d-flex d-lg-none"
                    id="kt_app_sidebar_mobile_toggle">
                    <i class="bi bi-arrow-left fs-1"></i>
                </div>
                <!-- Logo -->
                <a href="/" class="app-sidebar-logo">
                    <img alt="Logo" src="assets/img/Marsose Fix (Light).svg" width="176" height="34"
                        fill="none" />
                </a>
                <!-- End::Logo -->
            </div>
            <!-- Begin: Menu item -->
            <div class="menu-item menu-accordion">
                <!-- Begin: Menu link -->
                <a class="menu-link {{ $activeMenu == 'dashboard' ? 'active' : '' }}"
                    href="{{ route('super-admin.index') }}">
                    <span class="menu-icon">
                        @if ($activeMenu == 'dashboard')
                            <img alt="Logo" src="assets/media/logos/menu-active/logo-dashboard.svg"
                                class="h-25px theme-light-show" />
                        @else
                            <img alt="Logo" src="assets/media/logos/menu/logo-dashboard.svg"
                                class="h-25px theme-light-show" />
                        @endif
                    </span>
                    <span class="menu-title">Dashboard</span>
                </a>
                <!-- End: Menu link -->
            </div>
            <!-- End: Menu item -->

            <!-- Begin: Menu item -->
            <div class="menu-item menu-accordion">
                <!-- Begin: Menu link -->
                <a class="menu-link {{ $activeMenu == 'datakk' ? 'active' : '' }}" href="{{ route('kk.index') }}">
                    <span class="menu-icon">
                        @if ($activeMenu == 'datakk')
                            <img alt="Logo" src="assets/media/logos/menu-active/logo-kk.svg"
                                class="h-25px theme-light-show" />
                        @else
                            <img alt="Logo" src="assets/media/logos/menu/logo-kk.svg"
                                class="h-25px theme-light-show" />
                        @endif
                    </span>
                    <span class="menu-title">Data KK</span>
                </a>
                <!-- End: Menu link -->
            </div>
            <!-- End: Menu item -->

            <!-- Begin: Menu item -->
            <div class="menu-item menu-accordion">
                <!-- Begin: Menu link -->
                <a class="menu-link {{ $activeMenu == 'warga' ? 'active' : '' }}" href="{{ route('warga.index') }}">
                    <span class="menu-icon">
                        @if ($activeMenu == 'warga')
                            <img alt="Logo" src="assets/media/logos/menu-active/logo-datapenduduk.svg"
                                class="h-25px theme-light-show" />
                        @else
                            <img alt="Logo" src="assets/media/logos/menu/logo-datapenduduk.svg"
                                class="h-25px theme-light-show" />
                        @endif
                    </span>
                    <span class="menu-title">Data Penduduk</span>
                </a>
                <!-- End: Menu link -->
            </div>
            <!-- End: Menu item -->

            <!-- Begin: Menu item -->
            <div class="menu-item menu-accordion">
                <!-- Begin: Menu link -->
                <a class="menu-link {{ $activeMenu == 'surat' ? 'active' : '' }}" href="{{ route('surat.index') }}">
                    <span class="menu-icon">
                        @if ($activeMenu == 'surat')
                            <img alt="Logo" src="assets/media/logos/menu-active/logo-surat.svg"
                                class="h-25px theme-light-show" />
                        @else
                            <img alt="Logo" src="assets/media/logos/menu/logo-surat.svg"
                                class="h-25px theme-light-show" />
                        @endif
                    </span>
                    <span class="menu-title">Surat-Surat</span>
                </a>
                <!-- End: Menu link -->
            </div>
            <!-- End: Menu item -->

            <!-- Begin: Menu item -->
            <div class="menu-item menu-accordion">
                <!-- Begin: Menu link -->
                <a class="menu-link {{ $activeMenu == 'laporan' ? 'active' : '' }}" href="{{ route('laporan.index') }}">
                    <span class="menu-icon">
                        @if ($activeMenu == 'laporan')
                            <img alt="Logo" src="assets/media/logos/menu-active/logo-laporan.svg"
                                class="h-25px theme-light-show" />
                        @else
                            <img alt="Logo" src="assets/media/logos/menu/logo-laporan.svg"
                                class="h-25px theme-light-show" />
                        @endif
                    </span>
                    <span class="menu-title">Laporan Pengaduan</span>
                </a>
                <!-- End: Menu link -->
            </div>
            <!-- End: Menu item -->

            <!-- Begin: Menu item -->
            <div class="menu-item menu-accordion">
                <!-- Begin: Menu link -->
                <a class="menu-link {{ $activeMenu == 'historylaporan' ? 'active' : '' }}"
                    href="{{ route('history.index') }}">
                    <span class="menu-icon">
                        @if ($activeMenu == 'historylaporan')
                            <img alt="Logo" src="assets/media/logos/menu-active/logo-note.svg"
                                class="h-25px theme-light-show" />
                        @else
                            <img alt="Logo" src="assets/media/logos/menu/logo-note.svg"
                                class="h-25px theme-light-show" />
                        @endif
                    </span>
                    <span class="menu-title">History Laporan Pengaduan</span>
                </a>
                <!-- End: Menu link -->
            </div>
            <!-- End: Menu item -->

            <!-- Begin: Menu item -->
            <div data-kt-menu-trigger="click"
                class="menu-item menu-accordion {{ in_array($activeMenu, ['spkk', 'kriteria', 'detail_kriteria', 'alternatif', 'spk', 'perhitungan', 'perangkingan']) ? 'here show' : '' }}">
                <!-- Begin: Menu link -->
                <a
                    class="menu-link {{ in_array($activeMenu, ['spkk', 'kriteria', 'detail_kriteria', 'alternatif', 'spk', 'perhitungan', 'perangkingan']) ? 'active' : '' }}">
                    <span class="menu-icon">
                        <img alt="Logo"
                            src="assets/media/logos/{{ in_array($activeMenu, ['spkk', 'kriteria', 'detail_kriteria', 'alternatif', 'spk', 'perhitungan', 'perangkingan']) ? 'menu-active/logo-spk.svg' : 'menu/logo-spk.svg' }}"
                            class="h-25px theme-light-show" />
                    </span>
                    <span class="menu-title">Laporan SPK</span>
                    <span class="menu-arrow"></span>
                </a>
                <!-- End: Menu link -->

                <!-- Begin: Menu sub -->
                <div class="menu-sub menu-sub-accordion">
                    <!-- Begin: Menu item -->
                    <div class="menu-item">
                        <!-- Begin: Menu link -->
                        <a class="menu-link {{ $activeMenu == 'kriteria' ? 'active' : '' }}"
                            href="{{ route('kriteria.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Kriteria</span>
                        </a>
                        <!-- End: Menu link -->
                    </div>
                    <!-- End: Menu item -->

                    <!-- Begin: Menu item -->
                    <div class="menu-item">
                        <!-- Begin: Menu link -->
                        <a class="menu-link {{ $activeMenu == 'detail_kriteria' ? 'active' : '' }}"
                            href="{{ route('detail_kriteria.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Detail Kriteria</span>
                        </a>
                        <!-- End: Menu link -->
                    </div>
                    <!-- End: Menu item -->

                    <!-- Begin: Menu item -->
                    <div class="menu-item">
                        <!-- Begin: Menu link -->
                        <a class="menu-link {{ $activeMenu == 'alternatif' ? 'active' : '' }}"
                            href="{{ route('alternatif.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Alternatif</span>
                        </a>
                        <!-- End: Menu link -->
                    </div>
                    <!-- End: Menu item -->

                    <!-- Begin: Menu item -->
                    <div class="menu-item">
                        <!-- Begin: Menu link -->
                        <a class="menu-link {{ $activeMenu == 'spk' ? 'active' : '' }}"
                            href="{{ route('laporan_spk.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Daftar Laporan SPK</span>
                        </a>
                        <!-- End: Menu link -->
                    </div>
                    <!-- End: Menu item -->

                    <!-- Begin: Menu item -->
                    <div class="menu-item">
                        <!-- Begin: Menu link -->
                        <a class="menu-link {{ $activeMenu == 'perhitungan' ? 'active' : '' }}"
                            href="{{ route('laporan_spk.perhitungan]') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Perhitungan</span>
                        </a>
                        <!-- End: Menu link -->
                    </div>
                    <!-- End: Menu item -->

                    <!-- Begin: Menu item -->
                    <div class="menu-item">
                        <!-- Begin: Menu link -->
                        <a class="menu-link {{ $activeMenu == 'perangkingan' ? 'active' : '' }}"
                            href="{{ route('laporan_spk.priority') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Perangkingan</span>
                        </a>
                        <!-- End: Menu link -->
                    </div>
                    <!-- End: Menu item -->
                </div>
                <!-- End: Menu sub -->
            </div>
            <!-- End: Menu item -->
        </div>
        <!-- End::Sidebar menu -->
    </div>
    <!-- End::Wrapper -->
</div>
