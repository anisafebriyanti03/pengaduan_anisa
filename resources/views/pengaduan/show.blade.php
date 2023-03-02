
<div class="row">
        <div class="col-lg-8 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">Pengaduan Masyarakat</div>
                </div>
                <form method="post" action="/masyarakat/pengaduan/">
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label for="tgl_pengaduan" class="col-sm-2 col-form-label">Tanggal Pengaduan</label>
                              <div class="col-sm-10">
                                <b>:</b> {{ $data_pengaduan->tgl_pengaduan }}
                              </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="masyarakat_nik" class="col-sm-2 col-form-label">NIK</label>
                              <div class="col-sm-10">
                                <b>:</b> {{ $data_pengaduan->masyarakat_nik }}
                              </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                              <div class="col-sm-10">
                                <b>:</b> 
                                @if ($data_pengaduan->foto)
                                    <img src="{{ Storage::url($data_pengaduan->foto) }}" alt="Foto Pengaduan" class="embed-responsive">
                                @else
                                    <a href="#" class="badge badge-danger">Tidak Ada Foto</a>
                                @endif
                              </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="status" class="col-sm-2 col-form-label">Status</label>
                              <div class="col-sm-10">
                                <b>:</b>
                                    @if ($data_pengaduan->status == '0')
                                    <a href="#" class="badge badge-danger">Pending</a>
                                    @elseif ($data_pengaduan->status == 'proses')
                                        <a href="#" class="badge badge-warning">Proses</a>
                                    @else
                                        <a href="#" class="badge badge-success">Selesai</a>
                                    @endif
                              </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>

