@extends('template')
@section('content')
<section class="vh-400" style="background-color: #508bfc;">
  <div class="container py-5 h-400">
    <div class="row d-flex justify-content-center align-items-center h-400">
      <div class="col-12 col-md-8 col-lg-6 col-xl-7">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <form action="{{route('masyarakat.register')}}" method="POST">
                @csrf
            <div class="card-body p-4">
                @if($messege = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $messege }}
                    </div>
                @endif
                <h3 class="mb-4 text-center">Register</h3>
                <div class="row">
                    <div class="col-md">
                        <div class="form-outline mb-2">
                        <label class="form-label">NIK</label>
                        <input type="number" name="nik" class="form-control"  placeholder="Enter your NIK" />
                        </div>
                    </div>
                    
                    <div class="col-md">
                        <div class="form-outline mb-2">
                        <label class="form-label">Rt</label>
                        <input type="number" name="rt" class="form-control"/>
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-md">
                        <div class="form-outline mb-2">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="name" class="form-control"  placeholder="Name"/>
                        </div>
                    </div>
                    
                    <div class="col-md">
                        <div class="form-outline mb-2">
                        <label class="form-label">Rw</label>
                        <input type="number" name="rw" class="form-control"/>
                        </div>
                    </div>
                </div>
               
                <div class="row">
                    <!-- <div class="col-md">
                        <div class="form-outline mb-2">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control"  placeholder="Username"/>
                        </div>
                    </div> -->
                    <div class="col-md">
                        <div class="form-outline mb-2">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control"  placeholder="Enter your Email Address"/>
                        </div>
                    </div>


                    <div class="col-md">
                        <div class="form-outline mb-2">
                        <label class="form-label">Kode Pos</label>
                        <input type="number" name="kode_pos" class="form-control"/>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md">
                            <div class="form-outline mb-2">
                            <label class="form-label" for="typePasswordX-2">Password</label> 
                            <input type="password" name="password" id="typePasswordX-2" class="form-control"  placeholder="Enter your Password"/>
                            </div>
                    </div>
                    
                    <div class="col-md">
                        <div class="form-outline mb-2">
                        <label class="form-label">Provinsi</label>
                        <!-- <input type="text" name="province_id" class="form-control"/> -->
                        <select name="province_id" class="form-control">
                                <option selected>Pilih provinsi..</option>
                                    @foreach($provinces as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-md">
                            <div class="form-outline mb-2">
                            <label class="form-label">Telepon</label>
                            <input type="number"  name="telp" class="form-control"  placeholder="Phone Number"/>
                            </div>
                    </div>


                    <div class="col-md">
                        <div class="form-outline mb-2">
                        <label class="form-label">Kabupaten</label>
                        <!-- <input type="text" name="regency_id" class="form-control"/> -->
                        <select name="regency_id" class="form-control">
                            <option selected>Pilih Kabupaten..</option>
                                @foreach($regencies as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                        </select>
                        </div>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-md">
                            <div class="form-outline mb-2">
                            <label for="jenkel" class="mb-2">Jenis Kelamin </label> <br>
                                <input type="radio" name="jenkel" value="laki-laki" id="jenkel" checked>  Laki-Laki
                                <input type="radio" name="jenkel" value="perempuan" id="jenkel">  Perempuan
                                    @if($errors->has('jenkel'))
                                        <div class="text-danger">
                                        {{ $errors->first('jenkel')}}
                                        </div>
                                    @endif
                            </div>
                    </div>

                    <div class="col-md">
                        <div class="form-outline mb-2">
                        <label class="form-label">Kecamatan</label>
                        <!-- <input type="text" name="district_id" class="form-control"/> -->
                        <select name="district_id" class="form-control">
                            <option selected>Pilih Kecamatan..</option>
                                @foreach($districts as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                        </select>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md">
                        <div class="form-outline mb-2">
                        <label class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Alamat">{{old('alamat')}}</textarea>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-outline mb-2">
                        <label class="form-label">Desa</label>
                        <!-- <input type="text" name="village_id" class="form-control"/> -->
                        <select name="village_id" class="form-control">
                            <option selected>Pilih Desa..</option>
                                @foreach($villages as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                        </select>
                        </div>
                    </div>
                </div>
               
                
                

                <!-- Checkbox -->
                <div class="form-group">
                    <button class="btn btn-primary form-control text-center" type="submit">Registrasi</button>
                </div>
                <hr>
                <div class="form-group text-center">
                    <a class="" href="/login">Login</a>
                </div>
                        
            </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection