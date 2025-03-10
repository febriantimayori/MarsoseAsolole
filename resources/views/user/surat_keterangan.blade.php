@extends('user.layouts.template')
@section('title', 'Marsose | Surat-Surat')

@section('content')
<div class="row">
    <div class="col-md-3">

    </div>

    <div class="card pt-2 col-md-9 banner-surat shadow"
        style="background-image: url('assets/media/img/banner-sk.png');">

    </div>
</div>

<main class="container">
    <div class="row">
        <div class="col-md-3 list-menu">
            <button type="button" class="btn">
                <span class="c-surat">Jenis-jenis Surat</span>
            </button>
            @include('user.component.list')
        </div>

        <!-- Content -->
        <div class="col-md-9 pt-5">
            <div class="tab-content surat-content" data-handbook="surat_keterangan" id="v-pills-tabContent">
                <div class="tab-pane show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <h2 class="mb-2" style="font-weight: bold;">Surat Keterangan</h2>
                    <p class="mt-2" style="line-height: 32px; font-size: 16px;">
                        Surat Keterangan adalah dokumen resmi yang dikeluarkan oleh RT atau RW untuk menyatakan atau
                        menjelaskan suatu keadaan atau fakta tertentu yang diketahui atau disaksikan oleh mereka. Surat
                        ini berfungsi sebagai bukti tertulis untuk keperluan administratif, seperti pengajuan izin atau
                        verifikasi data. Surat Keterangan mencakup informasi pihak terkait, deskripsi keadaan atau
                        peristiwa, serta tanda tangan dan cap resmi dari RT/RW.
                    </p>
                    <h2 class="mt-5" style="font-weight: bold;">Alur Pengurusan Surat</h2>
                    <table style="border-collapse: separate; border-spacing:0 20px; font-size: 16px;">
                        <tr>
                            <td><img src="assets/media/icons/point-alur.svg"
                                    style="height: 20px; width: 20px; margin-right: 20px;"></td>
                            <td>Pemohon datang ke Ketua RT dan RW untuk meminta pengantar RT/RW.</td>
                        </tr>
                        <tr>
                            <td><img src="assets/media/icons/point-alur.svg"
                                    style="height: 20px; width: 20px; margin-right: 20px;"></td>
                            <td>Pemohon datang ke kelurahan dengan membawa berkas persyaratannya dan mematuhi kebijakan
                                serta norma yang berlaku di lingkungan RT dan RW setempat.</td>
                        </tr>
                        <tr>
                            <td><img src="assets/media/icons/point-alur.svg"
                                    style="height: 20px; width: 20px; margin-right: 20px;"></td>
                            <td>Surat Keterangan RT dan RW selesai dan dapat digunakan untuk pengurusan administrasi
                                selanjutnya.</td>
                        </tr>
                    </table>
                </div>
                <h2 class="mt-5" style="font-weight: bold">Jenis dan Template</h2>
                <ul class="listings__grid" style="padding-left:5px;">
                    @foreach ($surats as $surat)
                        <li class="card jenis-surat">
                            <img src="assets/media/icons/icon-skdomisili.svg" alt="" class="card__logo"
                                style="width: 87px; height: 87px;" />
                            <p class="card__heading">{{ $surat->jenis_surat }}</p>
                            <p class="syarat">Syarat*</p>
                            <ul class="mt-3">
                                <li class="snk">{{ $surat->syarat }}</li>
                            </ul>
                            @if ($surat->file_surat)
                                <a href="{{ route('file.download', ['id' => $surat->id_surat]) }}" download>
                                    <button class="btn dwn-surat">Download Template</button>
                                </a>
                            @endif
                        </li>
                    @endforeach

                    <li class="card jenis-surat">
                        <img src="assets/media/icons/icon-skdomisili.svg" alt="" class="card__logo"
                            style="width: 87px; height: 87px;" />
                        <p class="card__heading">SK Domisili</p>
                        <p class="syarat">Syarat*</p>
                        <ul class="mt-3">
                            <li class="snk">- Fotokopi KTP dan KK.</li>
                        </ul>
                        <a href="path/to/xx" download>
                            <button class="btn dwn-surat">Download Template</button>
                        </a>
                    </li>
                    <li class="card jenis-surat">
                        <img src="assets/media/icons/icon-skusaha.svg" alt="" class="card__logo" />
                        <p class="card__heading">SK Usaha</p>
                        <p class="syarat">Syarat*</p>
                        <ul class="mt-3">
                            <li class="snk">- Fotocopy KTP dan KK pemohon masing-masing 2 lembar.</li>
                        </ul>
                        <a href="path/to/xx" download>
                            <button class="btn dwn-surat">Download Template</button>
                        </a>
                    </li>
                    <li class="card jenis-surat">
                        <img src="assets/media/icons/icon-sktdakmmpu.svg" alt="" style="width: 75px; height: 75px;" />
                        <p class="card__heading">SK Tidak Mampu</p>
                        <p class="syarat">Syarat*</p>
                        <ul class="mt-3">
                            <li class="snk">- Fotocopy KTP dan KK.</li>
                            <li class="snk">- SP Tidak Mampu.</li>
                        </ul>
                        <a href="path/to/xx" download>
                            <button class="btn dwn-surat">Download Template</button>
                        </a>
                    </li>
                    <li class="card jenis-surat">
                        <img src="assets/media/icons/icon-skbbaik.svg" alt="" class="card__logo" />
                        <p class="card__heading">SK Kelakuan Baik</p>
                        <p class="syarat">Syarat*</p>
                        <ul class="mt-3">
                            <li class="snk">-</li>
                        </ul>
                        <a href="path/to/" download>
                            <button class="btn dwn-surat">Download Template</button>
                        </a>
                    </li>
                    <li class="card jenis-surat">
                        <img src="assets/media/icons/icon-skmeninggal.svg" alt="" class="card__logo" />
                        <p class="card__heading">SK Meninggal Dunia</p>
                        <p class="syarat">Syarat*</p>
                        <ul class="mt-3">
                            <li class="snk">-</li>
                        </ul>
                        <a href="path/to/xx" download>
                            <button class="btn dwn-surat">Download Template</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</main>
@endsection