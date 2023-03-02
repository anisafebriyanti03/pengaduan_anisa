
<div class="container">
    <div class="row justify-content-center my-4">
        <div class="col-lg-12 col-md-12 col-xl-9">
            <div class="card shadow">
                <div class="card-body">
                    <div class="card-body">
                        <form action="{{route('masyarakat.pengaduan')}}" method="POST">
                            @csrf
                            <div class="card-header">
                                <h3 class="text-center">Tambah Pengaduan</h3>
                            </div>
                            <div class="form-group">
                                <label for="tgl_pengaduan">Tanggal Pengaduan</label>
                                <input type="date" name="tgl_pengaduan" class="form-control">
                                
                                    @if($errors->has('tgl_pengaduan'))
                                        <div class="text-danger">
                                            {{ $errors->first('tgl_pengaduan')}}
                                        </div>
                                    @endif
                            </div>
                            <div class="form-group">
                                <label for="masyarakat_nik">Masyarakat NIK</label>
                                <input type="text" name="masyarakat_nik" value="{{ old('masyarakat_nik') }}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="isi_laporan">Isi Laporan</label>
                                <textarea type="text" name="isi_laporan"  rows=10 class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" name="foto" class="form-control">
                            </div>
                            <div class="form-group">
                               <button type="submit" class="btn btn-primary form-control">Laporkan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
