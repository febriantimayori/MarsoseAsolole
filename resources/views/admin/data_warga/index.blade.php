@extends('admin.layouts.template')
@section('title', 'Admin | Data Penduduk')

@section('content')
    <div class="app-main flex-column flex-row-fluid mt-5 mx-5 mb-5" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            @include('admin.layouts.breadcrumb')
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card header-->
                        <div class="card-header border-0 pt-6">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="ki-outline ki-magnifier fs-3 position-absolute ms-5"></i>
                                    <input type="text" data-kt-warga-table-filter="search"
                                        class="form-control form-control-solid w-250px ps-13" placeholder="Search Warga" />
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--begin::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end" data-kt-warga-table-toolbar="base">
                                    <!--begin::Add warga-->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_add_warga">
                                        <i class="ki-outline ki-plus fs-2"></i>Tambah Warga</button>
                                    <!--end::Add warga-->
                                </div>
                                <!--end::Toolbar-->
                                <!--begin::Group actions-->
                                <div class="d-flex justify-content-end align-items-center d-none"
                                    data-kt-warga-table-toolbar="selected">
                                    <div class="fw-bold me-5">
                                        <span class="me-2" data-kt-warga-table-select="selected_count"></span>Selected
                                    </div>
                                    <form id="delete-selected-form"
                                        action="{{ route('warga-admin.deleteSelected', ['rt' => $rtNumber]) }}"
                                        method="POST">
                                        @csrf <!-- Token CSRF untuk keamanan -->
                                        <input value="" type="hidden" name="selectedIds" id="selected-ids">
                                        <!-- Input tersembunyi untuk ID yang dipilih -->
                                        <!-- Tombol untuk menghapus warga yang dipilih -->
                                        <button type="submit" class="btn btn-danger"
                                            data-kt-warga-table-select="delete_selected">Delete Selected</button>
                                    </form>
                                </div>
                                <!--end::Group actions-->
                                @include('admin.data_warga.create')
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body py-4">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_warga">
                                <thead>
                                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                        <th class="w-10px pe-2">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                    data-kt-check-target="#kt_table_warga .form-check-input" />
                                            </div>
                                        </th>
                                        <th class="min-w-125px">ID</th>
                                        <th class="min-w-125px">NIK</th>
                                        <th class="min-w-125px">Nama</th>
                                        <th class="min-w-125px">TTL</th>
                                        <th class="min-w-125px">Alamat</th>
                                        <th class="min-w-125px">RT</th>
                                        <th class="min-w-125px">Status</th>
                                        <th class="text-end min-w-100px pe-9">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 fw-semibold">
                                    @foreach ($wargas as $warga)
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input value="{{ $warga->id_warga }}" class="form-check-input"
                                                        type="checkbox" data-kt-warga-table-filter="checkbox" />
                                                </div>
                                            </td>
                                            <td>{{ $warga->id_warga }}</td>
                                            <td>{{ $warga->nik }}</td>
                                            <td>{{ $warga->nama }}</td>
                                            <td>{{ $warga->tempat_lahir }},
                                                {{ \Carbon\Carbon::parse($warga->tanggal_lahir)->format('d M Y') }}</td>
                                            <td>{{ $warga->alamat }}</td>
                                            <td>{{ $warga->kk->rt->no_rt ?? $warga->no_rt }}</td>
                                            <td>{{ $warga->user->level->level_nama }}</td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                    <i class="ki-outline ki-down fs-5 ms-1"></i>
                                                </a>
                                                <!-- Begin::Menu -->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                    data-kt-menu="true">
                                                    <!-- Begin::Menu item -->
                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('warga-admin.show', ['rt' => $rtNumber, 'id' => $warga->id_warga]) }}"
                                                            class="menu-link px-3">Detail</a>
                                                    </div>
                                                    <!-- End::Menu item -->
                                                    <!-- Begin::Menu item -->
                                                    <div class="menu-item px-3">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_edit_warga-{{ $warga->id_warga }}"
                                                            class="menu-link px-3">Edit</a>
                                                    </div>
                                                    <!-- End::Menu item -->
                                                    <!-- Begin::Menu item -->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3"
                                                            data-kt-warga-table-filter="delete_row"
                                                            onclick="event.preventDefault(); handleRowDeletion(event);">
                                                            Delete
                                                        </a>
                                                        <form id="delete-form-{{ $warga->id_warga }}"
                                                            action="{{ route('warga-admin.destroy', ['rt' => $rtNumber, 'id' => $warga->id_warga]) }}"
                                                            method="POST" style="display: none;">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    </div>
                                                    <!-- End::Menu item -->
                                                </div>
                                                <!-- End::Menu -->
                                            </td>
                                            @include('admin.data_warga.edit')
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        <!--begin::Footer-->
        @include('admin.layouts.footer')
        <!--end::Footer-->
    </div>

    <script>
        window.cekNIKAdminRoute = "{{ route('cek_nik-admin', ['rt' => $rtNumber]) }}";
        window.cekKKAdminRoute = "{{ route('cek_kk-admin', ['rt' => $rtNumber]) }}";
    </script>
@endsection
