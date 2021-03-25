	@extends('crud.template')
	@section('konten')
	<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<h2>DASHBOARD</h2>
			</div>
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header bg-blue">
							<h2 class="">Tambah data pegawai</h2>
							<small>Silahkan masukan data pegawai dengan benar.</small>
						</div>
					</div>
				</div>
			</div>
			<div id="data" class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<form id="form_validation" action="{{route('tambah_data')}}" method="POST">
						@csrf
						<div class="card">
							{{-- <div class="header">
								<h2 class=""></h2>
								<small></small>
							</div> --}}
							<div class="body">
								<h2 class="card-inside-title">Informasi Pribadi</h2>
								<div class="row clearfix">
									<div class="col-sm-12">
										<div class="form-group">
											<div class="form-line">
												<input type="text" name="nama" class="form-control" placeholder="Masukan nama anda" required>
											</div>
										</div>
										<div class="form-group">
											<div class="form-line">
												<input type="text" name="nip" class="form-control" placeholder="Masukan nip anda" required>
											</div>
										</div>
										<div class="form-group">
											<div class="form-line">
												<input type="text" name="alamat" class="form-control" placeholder="Masukan alamat anda" required>
											</div>
										</div>
										<div class="checkbox-group">
										<input type="radio" name="kelamin" id="lk" value="Laki-laki" class="filled-in radio-col-green" checked>
										<label for="lk">Laki-laki</label>
										<input type="radio" name="kelamin" id="pr" value="Perempuan" class="filled-in radio-col-green">
										<label for="pr">Perempuan</label>
									</div>
									</div>
								</div>
								<h2 class="card-inside-title">Divisi</h2>
								<div class="row clearfix">
									<div class="col-sm-12">
										<div class="form-group">
											<div class="custom-select">
												<select id="nambah1" name="divisi" class="form-control show-tick" required>
													<option value="Programmer">Programmer</option>
													<option value="TSS">TSS</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-sm-9">
								</div>
								<div class="col-sm-3">
									<button type="submit" id="pesan" name="pesan" class="btn btn-primary waves-effect">
										<i class="material-icons">send</i>
										<span> Simpan </span>
									</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	@endsection
        