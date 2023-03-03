
                            <div class="container">
                                    <div class="card card-olive card-outline mt-3">
                                        <!-- <div class="card-header mt-2">
                                            <div class="col-6">
                                            <strong><h5>Data Jabatan</h5></strong>
                                            </div>
                                        </div> -->
                                        
                                        <div class="card-body">
                                        <a href="{{route('petugas.create')}}" class="btn btn-sm btn-primary  float-left mb-3"><i class="fa fa-plus"></i> Tambah</a>
                                            <br/>
                                            <table class="table table-bordered table-hover table-striped  ">
                                                <thead>
                                                    <tr class="table-secondary">
                                                        <th>NIK</th>
                                                        <th>Nama Petugas</th>
                                                        <th>Email</th>
                                                        <th>No. Telp</th>
                                                        <th>Level</th>
                                                        <th colspan="3" style="text-align:center;">OPSI</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($petugas as $i => $p)
                                                    <tr>
                                                        <td>{{ $i+1 }}</td>
                                                        <td>{{ $p->nik }}</td>
                                                        <td>{{ $p->name }}</td>
                                                        <td>{{ $p->email }}</td>
                                                        <td>{{ $p->telp }}</td>
                                                        <td>{{ $p->level }}</td>
                                                        <td style="text-align:center;">
                                                            <a href="#" class="btn btn-sm btn-info">Detail</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                            </div>
                          