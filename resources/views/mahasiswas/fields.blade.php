<!-- Nim Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nim', 'Nim:') !!}
    {!! Form::text('nim', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Judul Field -->
<div class="form-group col-sm-6">
    {!! Form::label('judul', 'Judul:') !!}
    {!! Form::text('judul', null, ['class' => 'form-control']) !!}
</div>

<!-- Lokasi Kp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lokasi_kp', 'Lokasi Kp:') !!}
    {!! Form::text('lokasi_kp', null, ['class' => 'form-control']) !!}
</div>

<!-- Dosen Pembimbing Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dosen_pembimbing', 'Dosen Pembimbing:') !!}
    {!! Form::text('dosen_pembimbing', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('mahasiswas.index') !!}" class="btn btn-default">Cancel</a>
</div>
