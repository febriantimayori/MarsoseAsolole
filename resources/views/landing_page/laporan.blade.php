<!-- resources/views/landing_page/laporan.blade.php -->

<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h2>Laporan Warga</h2>
            <p>Riwayat laporan terbaru</p>
        </header>
        <div class="row">
            @foreach($laporanPengaduan as $laporan)
            <div class="col-lg-4 mt-4 mt-lg-0 mb-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 200 }}">
                <div class="post-box shadow-sm rounded">
                    <div class="post-img overflow-hidden rounded-top">
                        <img src="{{ asset($laporan->gambar) }}" class="img-fluid" alt="">
                    </div>
                    <div class="post-content p-3">
                        <span class="post-date text-secondary">{{ $laporan->created_at->format('D, d F Y') }}</span>
                        <h3 class="post-title mt-2">{{ $laporan->judul }}</h3>
                        <p class="post-keterangan text-muted">{{ Str::limit($laporan->keterangan, 100) }}</p>
                        <p class="post-meta fw-bold">
                            Dilaporkan oleh: {{ $laporan->warga->nama }} 
                            <span class="badge bg-success">{{ $laporan->warga->no_rt }}</span>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
