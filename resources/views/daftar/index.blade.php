@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('DAFTAR KP') }}</div>
                @include('flash::message')
                <div class="card-body">
                    <form method="POST" action="{{ route('daftar_kp_save') }}">
                        @csrf

						<!-- Nim Field -->
						<div class="form-group com-sm-12">
						    {!! Form::label('nim', 'Nim:') !!}
						    {!! Form::text('nim', null, ['class' => 'form-control']) !!}
						</div>

						<!-- Nama Field -->
						<div class="form-group com-sm-12">
						    {!! Form::label('nama', 'Nama:') !!}
						    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
						</div>

						<!-- Judul Field -->
						<div class="form-group com-sm-12">
						    {!! Form::label('judul', 'Judul:') !!}
						    {!! Form::text('judul', null, ['class' => 'form-control']) !!}
						</div>

						<!-- Lokasi Kp Field -->
						<div class="form-group com-sm-12">
						    {!! Form::label('lokasi_kp', 'Lokasi Kp:') !!}
						    {!! Form::text('lokasi_kp', null, ['class' => 'form-control']) !!}
						</div>

						<!-- Dosen Pembimbing Field -->
						<div class="form-group com-sm-12">
						    {!! Form::label('dosen_pembimbing', 'Dosen Pembimbing:') !!}
						    {!! Form::text('dosen_pembimbing', null, ['class' => 'form-control']) !!}
						</div>

						<!-- Submit Field -->
						<div class="form-group col-sm-12">
						    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
						    <a href="{!! route('mahasiswas.index') !!}" class="btn btn-default">Cancel</a>
						</div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="table-responsive">
    <table class="table" id="mahasiswas-table">
        <thead>
            <tr>
                <th>Nim</th>
        <th>Nama</th>
        <th>Judul</th>
        <th>Lokasi Kp</th>
        <th>Dosen Pembimbing</th>
        <th>Ruang</th>
        <th>Tanggal ujian</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mahasiswas as $mahasiswa)
            <tr>
                <td>{!! $mahasiswa->nim !!}</td>
                <td>{!! $mahasiswa->nama !!}</td>
                <td>{!! $mahasiswa->judul !!}</td>
                <td>{!! $mahasiswa->lokasi_kp !!}</td>
                
                <td>{!! $mahasiswa->dosen_pembimbing !!}</td>
                <td>{!! $mahasiswa->room !!}</td>
                <td>{!! $mahasiswa->tgl_ujian !!}</td>


            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
