@extends('user.layouts.template')
@section('title', 'Marsose | Surat-Surat')

@section('content')
<div class="row">
    <div class="col-md-3">

    </div>

    <div class="card pt-2 col-md-9 banner-surat shadow"
        style="background-image: url('assets/media/img/banner-spm.png');">

    </div>
</div>

<main class="container">
    <div class="row">
        <div class="col-md-3 list-menu">
            <button type="button" class="btn">
                <span class="c-surat"> Jenis-jenis Surat</span>
            </button>
            @include('user.component.list')
        </div>

        <!-- Content -->
        <div class="col-md-9 pt-5">
            <div class="tab-content surat-content" data-handbook="surat_pemberitahuan" id="v-pills-tabContent">
                <div class="tab-pane show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <h2 class="mb-2" style="font-weight: bold;">Surat Pemberitahuan</h2>
                    <p class="mt-2" style="line-height: 32px; font-size: 16px;">
                        Surat Pemberitahuan adalah dokumen yang dibuat oleh RT atau RW untuk menyampaikan informasi
                        penting kepada warga masyarakat tentang suatu hal tertentu. Tujuannya adalah memberikan
                        pengumuman resmi mengenai perubahan kebijakan, informasi keamanan, atau kegiatan komunitas yang
                        relevan.
                    </p>
                    <h2 class="mt-5" style="font-weight: bold;">Alur Pengurusan Surat</h2>
                    <table style="border-collapse: separate; border-spacing:0 20px; font-size: 16px;">
                        <tr>
                            <td><img src="assets/media/icons/point-alur.svg"
                                    style="height: 20px; width: 20px; margin-right: 20px;"></td>
                            <td>RT/RW mengumpulkan informasi yang diperlukan secara lengkap dan akurat.</td>
                        </tr>
                        <tr>
                            <td><img src="assets/media/icons/point-alur.svg"
                                    style="height: 20px; width: 20px; margin-right: 20px;"></td>
                            <td>RT/RW mengunduh templat surat yang tersedia dan melengkapi isi surat dengan informasi
                                yang telah disiapkan.</td>
                        </tr>
                        <tr>
                            <td><img src="assets/media/icons/point-alur.svg"
                                    style="height: 20px; width: 20px; margin-right: 20px;"></td>
                            <td>RT/RW menyebarkan surat pemberitahuan kepada seluruh warga di wilayahnya.</td>
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
                        <img src="assets/media/icons/icon-spem.svg" alt="" class="card__logo"
                            style="width: 80px; height: 80px;" />
                        <p class="card__heading">Surat Pemberitahuan</p>
                        <p class="syarat">Syarat*</p>
                        <ul class="mt-3">
                            <li class="snk">-</li>
                        </ul>
                        <a href="path/to/xx" download>
                            <button class="btn dwn-surat" style="width: 30%;">Download Template</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</main>
@endsection