	@extends('crud.template')
	@section('konten')
     <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-blue">
                            <h2>
                                Daftar Pegawai
                                <small>Daftar pegawai saat ini</small>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Nip</th>
                                            <th>Alamat</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Divisi</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										@foreach ($pegawai as $key=>$pg)
                                        <tr>
                                       	 	<td style="text-align:center">{{$key+1}}</td>
                                       	 	<td>{{$pg->nama}}</td>
                                       	 	<td>{{$pg->nip}}</td>
                                       	 	<td>{{$pg->alamat}}</td>
                                       	 	<td>{{$pg->jenis_kelamin}}</td>
                                       	 	<td>{{$pg->divisi}}</td>
                                       	 	<td><a href="{{route('home').'/edit/'.$pg->id}}" style="margin: 0 5px 5px 0" class="btn btn-success">Edit</a><a href="{{route('home').'/hapus/'.$pg->id}}" onclick="return confirm('Apakah anda yakin?');" class="btn btn-danger">Hapus</a></td>
                                        </tr>
										@endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>
	@endsection

    @push('script')
    @endpush    
        