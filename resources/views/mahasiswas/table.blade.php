<div class="table-responsive">
    <table class="table" id="mahasiswas-table">
        <thead>
            <tr>
                <th>Nim</th>
        <th>Nama</th>
        <th>Judul</th>
        <th>Lokasi Kp</th>
        <th>Dosen Pembimbing</th>
                <th colspan="3">Action</th>
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
                <td>
                    {!! Form::open(['route' => ['mahasiswas.destroy', $mahasiswa->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        @if($mahasiswa->tgl_ujian == null)
                            <button type="button" data-nim="{{ $mahasiswa->id }}" class="btn btn-info btn-xs btn-jancuk" data-toggle="modal" data-target="#myModal">ACC</button>
                        @else
                            <button type="button" class="btn btn-success btn-xs">UDAH ACC</button>
                        @endif
                        <a href="{!! route('mahasiswas.show', [$mahasiswa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('mahasiswas.edit', [$mahasiswa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ACC</h4>
        </div>
        {!! Form::open(['route' => 'mahasiswas.update_acc']) !!}
        <div class="modal-body">
                <input type="hidden" name="nim" id="nim-modal">
                <!-- Nim Field -->
                <div class="form-group col-sm-12">
                    {!! Form::label('Ruangan', 'Ruangan :') !!}
                    {!! Form::text('room', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Nama Field -->
                <div class="form-group col-sm-12">
                    {!! Form::label('Tanggal Ujian', 'Tanggal Ujian:') !!}
                    {!! Form::text('tgl_ujian', null, ['class' => 'form-control', 'id' => 'date_picker']) !!}
                </div>
        </div>
        <div class="modal-footer">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
</div>

<script type="text/javascript">
$( document ).ready(function() {
    $(".btn-jancuk").click(function(){
        var abc = $(this).data('nim');
        $("#nim-modal").val(abc);
    });
});

$(document).ready(function() {
  $('#date_picker').datepicker();
});
</script>