
<div class="container">
    <div class="row justify-content-center my-4">
        <div class="col-lg-12 col-md-12 col-xl-9">
            <div class="card shadow">
                <div class="card-body">
                    <div class="card-body">
                        <form action="{{route('petugas.store')}}" method="POST">
                            @csrf
                            <div class="card-header">
                                <h3 class="text-center">Tambah Petugas</h3>
                            </div>
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="number" name="nik" class="form-control">
                                
                                    @if($errors->has('nik'))
                                        <div class="text-danger">
                                            {{ $errors->first('nik')}}
                                        </div>
                                    @endif
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{ old('name') }}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="number" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="telp">No. Telp</label>
                                <input type="number" name="telp" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="jenkel">Jenkel</label>
                                <input type="radio" name="jenkel" value="laki-laki">Laki-laki
                                <input type="radio" name="jenkel" value="perempuan">Perempuan
                            </div>
                            <div class="form-group">
                                <label for="level">Level</label>
                                <input type="radio" name="level" value="admin">Admin
                                <input type="radio" name="level" value="petugas">Petugas
                            </div>
                            <div class="form-group">
                                <label for="alamat">alamat</label>
                                <textarea type="text" name="alamat" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="rt">RT</label>
                                <input type="number" name="rt" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="rw">RW</label>
                                <input type="number" name="rw" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="kode_pos">Kode Pos</label>
                                <input type="number" name="kode_pos" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="province_id">Province</label>
                                <input type="number" name="province_id" class="form-control"/>
                            </div><div class="form-group">
                                <label for="regency_id">Kabupaten</label>
                                <input type="number" name="regency_id" class="form-control"/>
                            </div><div class="form-group">
                                <label for="district_id">Kecamatan</label>
                                <input type="number" name="district_id" class="form-control"/>
                            </div><div class="form-group">
                                <label for="village_id">Desa</label>
                                <input type="number" name="village_id" class="form-control"/>
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
