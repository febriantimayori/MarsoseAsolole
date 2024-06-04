<!--begin::Modal - Edit task-->
<div class="modal fade" id="kt_modal_edit_warga-{{ $warga->id_warga }}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_edit_warga_header">
                <!--begin::Modal title-->
                <h2 class="fw-bold">Edit Warga</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-warga-modal-action="close">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->
                <form method="POST" id="kt_modal_edit_warga_form" class="form" action="{{ route('warga.update', ['id' => $warga->id_warga]) }}">
                    @csrf
                    @method('PUT')
                    <!--begin::Scroll-->
                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_edit_warga_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_edit_warga_header" data-kt-scroll-wrappers="#kt_modal_edit_warga_scroll" data-kt-scroll-offset="300px">
                        <!-- NIK -->
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2" for="nik">NIK</label>
                            <input type="number" id="nik" name="nik" class="form-control form-control-solid mb-3 mb-lg-0" value="{{ $warga->nik }}" required />
                        </div>
                        <!-- Nama -->
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2" for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control form-control-solid mb-3 mb-lg-0" value="{{ $warga->nama }}" required />
                        </div>
                        <!-- Jenis Kelamin -->
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2" for="jenis_kelamin">Jenis Kelamin</label>
                            <select id="jenis_kelamin" name="jenis_kelamin" class="form-control form-control-solid mb-3 mb-lg-0" required>
                                <option value="" disabled selected>-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-laki" {{ $warga->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ $warga->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-4">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!-- Tempat Lahir -->
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2" for="tempat_lahir">Tempat Lahir</label>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Isi Tempat Kelahiran Seperti Kota">
                                            <i class="ki-outline ki-information fs-7"></i>
                                        </span></a>
                                        <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control form-control-solid mb-3 mb-lg-0" value="{{ $warga->tempat_lahir }}" required />
                                    </div>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">
                                <!-- Tanggal Lahir -->
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2" for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control form-control-solid mb-3 mb-lg-0" value="{{ $warga->tanggal_lahir }}" required />
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!-- Agama -->
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2" for="agama">Agama</label>
                            <select id="agama" name="agama" class="form-control form-control-solid mb-3 mb-lg-0" required>
                                <option value="" disabled selected>-- Pilih Agama-- </option>
                                <option value="Islam" {{ $warga->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Kristen" {{ $warga->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                <option value="Katolik" {{ $warga->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                <option value="Hindu" {{ $warga->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                <option value="Buddha" {{ $warga->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                <option value="Khonghucu" {{ $warga->agama == 'Khonghucu' ? 'selected' : '' }}>Khonghucu</option>
                            </select>
                        </div>													
                        <!-- Alamat -->
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2" for="alamat">Alamat</label>
                            <input type="text" id="alamat" name="alamat" class="form-control form-control-solid mb-3 mb-lg-0" value="{{ $warga->alamat }}" required />
                        </div>
                        <!-- JNo Rt -->
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2" for="no_rt">No RT</label>
                            <select id="no_rt" name="no_rt" class="form-control form-control-solid mb-3 mb-lg-0" required>
                                <option value="" disabled selected>-- Pilih No RT --</option>
                                @foreach($rts as $rt)
                                    <option value="{{ $rt->no_rt }}" {{ $warga->no_rt == $rt->no_rt ? 'selected' : '' }}>RT {{ $rt->no_rt }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Status -->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-5" for="status">Status Kependudukan</label>
                            <!--end::Label-->
                            <!--begin::Roles-->
                            <!--begin::Input row-->
                            <div class="d-flex fv-row">
                                <!--begin::Radio-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="status" type="radio" value="asli" id="status_asli" {{ $warga->status == 'asli' ? 'checked' : '' }} checked='checked' />
                                    <!--end::Input-->
                                    <!--begin::Label-->
                                    <label class="form-check-label" for="status_asli">
                                        <div class="fw-bold text-gray-800">Asli</div>
                                        <div class="text-gray-600">Menandakan Penduduk Asli atau Tinggal Di Daerah Tersebut</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Radio-->
                            </div>
                            <!--end::Input row-->
                            <div class='separator separator-dashed my-5'></div>
                            <!--begin::Input row-->
                            <div class="d-flex fv-row">
                                <!--begin::Radio-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="status" type="radio" id="status_pendatang" value="pendatang" {{ $warga->status == 'pendatang' ? 'checked' : '' }} />
                                    <!--end::Input-->
                                    <!--begin::Label-->
                                    <label class="form-check-label" for="status_pengunjung">
                                        <div class="fw-bold text-gray-800">Pendatang</div>
                                        <div class="text-gray-600">Menandakan Menempati Daerah Tersebut Secara Sementara</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Radio-->
                            </div>
                            <!--end::Input row-->
                            <!--end::Roles-->
                        </div>
                        <!--end::Input group-->
                        <!-- KK -->
                        <div class="fv-row mb-7">
                            <label class="fw-semibold fs-6 mb-2" for="no_kk">KK</label>
                            <input type="number" id="no_kk" name="no_kk" class="form-control form-control-solid mb-3 mb-lg-0" value="{{ $warga->kk->no_kk ?? 'N/A' }}" />
                        </div>
                    </div>
                    <!--end::Scroll-->
                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="submit" class="btn btn-primary btn-sm" data-kt-warga-modal-action="submit">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Edit task-->
